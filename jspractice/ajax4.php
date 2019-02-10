<html>
  <head>
    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/js/ajax-jquery.min.js"></script>
    <script type="text/javascript">

      $(document).ready(function(){
        $("button").click(function(){

              $.ajax({
                method: "POST",
                url: "para1.php",
                data: {num1: "15", num2: "10"}
              })
              .done(function(msg) {
                alert( "Sum: " + msg );

              });

        });
      });
    </script>
  </head>
  <body>
    <button>send HTTP get request to page and get the result back</button>
  </body>
</html>
