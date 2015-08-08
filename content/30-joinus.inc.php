  <div class="container" style="margin-bottom: 25%;" id="join-us">
   <div class="row" style="margin-top: 70px;">
    <div class="col-lg-12">
     <h1>Join us!</h1>
     <form class="form-horizontal" method="post" action="#front">

      <div class="form-group">
       <label for="join_name1" class="col-sm-2 control-label">First Name</label>
       <div class="col-sm-10">
        <input type="text" class="form-control" id="join_name1" name="join_name1" placeholder="John" value="<?=$_POST['join_name1'];?>">
       </div>
      </div>

      <div class="form-group">
       <label for="join_name2" class="col-sm-2 control-label">Last Name</label>
       <div class="col-sm-10">
        <input type="text" class="form-control" id="join_name2" name="join_name2" placeholder="Doe" value="<?=$_POST['join_name2'];?>">
       </div>
      </div>

      <div class="form-group">
       <label for="join_mail" class="col-sm-2 control-label">Email</label>
       <div class="col-sm-10">
        <input type="email" class="form-control" id="join_mail" name="join_mail" placeholder="john.doe@awesome.tld" value="<?=$_POST['join_mail'];?>">
       </div>
      </div>

      <div class="form-group">
       <label for="join_github" class="col-sm-2 control-label">GitHub-Name</label>
       <div class="col-sm-10">
        <input type="name" class="form-control" id="join_github" name="join_github" placeholder="John.D" value="<?=$_POST['join_github'];?>" data-placement="top" data-toggle="popover" data-trigger="focus" data-content="Use a hyphen if you aren't on GitHub">
       </div>
      </div>

      <div class="form-group">
       <label for="join_irc" class="col-sm-2 control-label">IRC-Name</label>
       <div class="col-sm-10">
        <input type="text" class="form-control" id="join_irc" name="join_irc" placeholder="johnd" value="<?=$_POST['join_irc'];?>" data-placement="top" data-toggle="popover" data-trigger="focus" data-content="Use a hyphen if you aren't on IRC">
       </div>
      </div>

      <div class="form-group">
       <label for="join_number" class="col-sm-2 control-label">Attendees</label>
       <div class="col-sm-10">
        <input type="number" class="form-control" id="join_number" name="join_number" min="1" max="3" step="1"  value="<?=($_POST['join_number'] > 0 ? $_POST['join_number'] : 1);?>">
       </div>
      </div>

      <div class="form-group">
       <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Join</button>
       </div>
      </div>

     </form>
    </div>
   </div>

   <footer class="footer"></footer>
  </div> <!-- /Form -->
