  <div class="container">
   <footer class="footer">
    <p>&copy; LibreNMS 2015</p>
   </footer>
  </div> <!-- /Footer -->

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.nav.js"></script>
  <script>
   $(document).ready(function (){
    $('#navbar').onePageNav({ 
     currentClass: 'active',
     changeHash: true,
     scrollSpeed: 2000,
     scrollThreshold: 0.5,
     filter: ':not(.external)',
    });
    $("#join-us-btn").click(function (){
     $('html, body').animate({
      scrollTop: $("#join-us").offset().top
     }, 2000);
    });
   });
  </script>
 </body>
</html>
