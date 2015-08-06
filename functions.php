<?php
require_once 'config.php';
$config['ts_human']      = date('r',$config['timestamp']);
$config['ts_eta']        = getETA();
$config['ts_eta_human']  = formatUptime($config['ts_eta']-($config['ts_eta']%3600));
$config['database']      = new SQLite3($config['database']);
$notifications           = array();

if( !empty($_POST) ) { postAttendees(); }

function getAttendees() {
    global $config;
    $out    = "";
    $result = $config['database']->query('select firstname from attendees');
    while( $attendee = $result->fetchArray() ) {
        $out .= htmlentities(ucfirst($attendee['firstname'])).", ";
    }
    return $out;
}

function postAttendees() {
    global $notifications;
    if( !empty($_POST['join_name1']) && !empty($_POST['join_name2']) && !empty($_POST['join_mail']) && !empty($_POST['join_github']) && !empty($_POST['join_irc']) && !empty($_POST['join_number']) ) {
        if( dbQuery('insert into attendees values (?, ?, ?, ?, ?, ?);',array( $_POST['join_name1'], $_POST['join_name2'], $_POST['join_mail'], $_POST['join_github'], $_POST['join_irc'], $_POST['join_number'] )) !== false ) {
            $notifications['success'][] = "Glad to hear you're joining us! We will E-Mail you further details :)";
        } else {
            $notifications['danger'][] = "We somehow couldnt process that, Best thing to do now is just email us at <i>summit</i> . librenms.org - Sorry about that";
        }
    } else {
        $notifications['warning'][] = "Please fill out all the fields.";
    }
}

function dbQuery($query,$params=false) {
    global $config;
    $stm = $config['database']->prepare($query);
    if( is_array($params) ) {
        $x=0;
        foreach( $params as $param ) {
            $x += 1;
            $stm->bindValue($x, $param, SQLITE3_TEXT);
        }
    }
    return $stm->execute();
}

function processNotifications() {
    global $notifications;
    $out = "";
    foreach( $notifications as $level => $messages ) {
        $out .= '    <div class="alert alert-'.$level.'" role="alert">'."\r\n";
        foreach( $messages as $k => $message ) {
            $out .= '     <p><i>#'.($k+1).'</i> '.$message.'</p>'."\r\n";
        }
        $out .= '    </div>'."\r\n";
    }
    return $out;
}

function formatUptime($diff) {
    $yearsDiff = floor($diff/31536000);
    $diff -= $yearsDiff*31536000;
    $daysDiff = floor($diff/86400);
    $diff -= $daysDiff*86400;
    $hrsDiff = floor($diff/60/60);
    $diff -= $hrsDiff*60*60;
    $minsDiff = floor($diff/60);
    $diff -= $minsDiff*60;
    $secsDiff = $diff;
    $uptime = "";
    if ($yearsDiff > '0') {
        $uptime .= $yearsDiff . " years, ";
    }
    if ($daysDiff > '0') {
        $uptime .= $daysDiff . " day" . ($daysDiff != 1 ? 's' : '') . ", ";
    }
    if ($hrsDiff > '0') {
        $uptime .= $hrsDiff     . "h ";
    }
    if ($minsDiff > '0') {
        $uptime .= $minsDiff   . "m ";
    }
    if ($secsDiff > '0') {
        $uptime .= $secsDiff   . "s ";
    }
    return trim($uptime);
}

function getETA() {
    global $config;
    $d = $config['timestamp']-time();
    if( $d < 0 ) {
        $d = 0;
    }
    return $d;
}
