  <div class="container" style="margin-bottom: 25%;" id="front">
   <div class="row" style="margin-top: 70px;">
<?=processNotifications();/* Will indent by itself */?>
   </div>
   <div class="jumbotron">
    <center>
     <h1><?=$config['ts_eta_human'];?> Left</h1>
     <p><small>until</small></p>
     <p class="lead">A one-day LibreNMS meetup to discuss, plan, socialise, and hopefully do some hacking together!</p>
     <p><a class="btn btn-lg btn-success" href="#join-us" role="button" id="join-us-btn">Join us!</a></p>
    </center>
   </div>

   <div class="row marketing">
    <div class="col-md-6">
     <h4>When?</h4>
     <p><?=$config['ts_human'];?></p>
    </div>

    <div class="col-md-6">
     <h4>Where?</h4>
     <p><?=$config['location'];?></p>
    </div>
   </div>
   <div class="row marketing">
    <div class="col-md-6">
     <h4>Why?</h4>
     <p>The LibreNMS community has been growing rapidly in recent months and we'd like your help to hold a one-day gathering in London on Sunday, 30 August 2015.</p>
    </div>

    <div class="col-md-6">
     <h4>Who?</h4>
     <p>Paul, Neil, S&oslash;ren, Mike, Daniel, <?=getAttendees();?>...</p>
    </div>
   </div>
   <div class="row marketing">
    <div class="col-md-6">
     <h4>Support!</h4>
     <p>Can't join? Support our <a href="https://www.indiegogo.com/projects/librenms-european-summit" target="_blank">IndieGoGo Campaign</a>!</p>
    </div>

    <div class="col-md-6">
     <h4>Contact</h4>
     <p>E-Mail: <i>team</i> .at. librenms.org</p>
     <p>IRC: <a href="//freenode.net/" target="_blank">Freenode.net</a> Channel: <i>##librenms</i></p>
    </div>
   </div>

   <footer class="footer"></footer>
  </div> <!-- /Front -->
