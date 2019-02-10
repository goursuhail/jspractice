<html>
  <head>
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.magnific-popup.js"></script>

    <style type="text/css">
    </style>

    <script type="text/javascript">

      $(document).ready(function(){

        $('.parent-container').magnificPopup({
          delegate: 'a',
          type: 'image',



      });

    });
    </script>

  </head>
  <body>
    <div class="parent-container">
      <a href="assets/img/product1.jpg"><img src="assets/img/product1.jpg" width="100px" height="100px"></a>
      <a href="assets/img/product2.jpg">open popup2</a>
      <a href="assets/img/product3.jpg">open popup3</a>

    </div>
  </body>
</html>
