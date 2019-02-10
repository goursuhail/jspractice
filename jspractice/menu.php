<html>
  <head>
      <link rel="stylesheet" href="assets/js/jquery-ui-1.12.1/jquery-ui.css">
      <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="assets/js/jquery-ui-1.12.1/jquery-ui.js"></script>



      <style type="text/css">

      #menu {
        width: 150px;
      }

      </style>

      <script type="text/javascript">

        $(document).ready(function(){

          $( function() {
            $( "#menu" ).menu();
          });

        });
      </script>
  </head>
  <body>
    <ul id="menu">
      <li class="ui-state-disabled"><div>Toys (n/a)</div><li>
      <li><div>Books</div><li>
      <li><div>Clothes</div><li>
      <li><div>Electronics</div>
        <ul>
          <li><div>Home Entertainment</li>
          <li><div>Wifi</div></li>
          <li><div>Hotspot</div></li>
        </ul>
      <li>
      <li><div>Music</div><li>
      <li><div>Movies</div>
        <ul>
          <li class="ui-state-disabled">Hollywood</li>
          <li><div>Bollywood</div></li>
          <li><div>jollywood</div></li>
        </ul>
      <li>
      <li class="ui-state-disabled"><div>images (n/a)</div></li>
    </ul>
  </body>
</html>
