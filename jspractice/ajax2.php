<html>
  <head>
    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/js/ajax-jquery.min.js"></script>
    <script type="text/javascript">

      $(document).ready(function(){
        $("button").click(function(){
          $.ajax({
            url: "checkboxradio.php",
            success: function(result){
              $("#div1").html(result);
            }
          });
        });
      });
    </script>
  </head>
  <body>
    <div id="div1"><h2>jQuery and ajax</h2>
      <button>Get the external content</button>
  </body>
</html>
