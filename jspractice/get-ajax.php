<html>
  <head>
    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/js/ajax-jquery.min.js"></script>
    <script type="text/javascript">

      $(document).ready(function(){
        $("button").click(function(){

                $.ajax({
                  method: "POST",
                  url: "para.php",
                  dataType: 'json',
                  data: { num1: "5", num2: "10" },
                  success: function(data){
                    console.log(data);   
                  }
                }).done(function(){

                }).fail(function(){

                }).always(function(){

                });

/**
          $.post("para.php", { num1: "5", num2: "10" } , function(data, status){
            alert("Data: " + data + "\nSatatus: " + status);
          });
          **/
        });
      });
    </script>
  </head>
  <body>
    <button>send HTTP get request to page and get the result back</button>
  </body>
</html>
