<?php
require_once '/opt/summit/config.php';
require_once '/opt/summit/functions.php';
foreach( array_diff(scandir($config['basedir']."/content"), array('..', '.')) as $page ) {
	require $config['basedir']."/content/".$page;
}
?>
