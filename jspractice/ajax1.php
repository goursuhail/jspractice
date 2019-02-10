<html>
  <head>
    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/js/ajax-jquery.min.js"></script>
    <script type="text/javascript">

      $(document).ready(function(){
        $("button").click(function(){
          $("#div1").load("checkboxradio.php");
        });
      });
    </script>
  </head>
  <body>
    <div id="div1"><h2>jQuery and ajax</h2>
      <button>Get the external content</button>
  </body>
</html>
