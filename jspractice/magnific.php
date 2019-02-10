<html>
  <head>
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.magnific-popup.js"></script>
    <style type="text/css">


    .white-popup {
      margin-left: 500px;
      margin-top: 206px;
    }

    a.test-popup-link {
      border: 2px solid black;
      padding: 10px;
      background-color: lightblue;
    }

    }
    </style>
    <script type="text/javascript">

        $(document).ready(function(){


          $('.test-popup-link').magnificPopup({
            type: 'image'
          });


        });
    </script>

  </head>
  <body>
    <div  class="white-popup">
      <a class="test-popup-link" href="assets/img/promotion2.png">open popup</a>

    </div>

  </body>
</html>
