<html>
  <head>
      <link rel="stylesheet" href="assets/css/jquery-ui.css">
      <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="assets/js/jquery-ui.js"></script>

      <style type="text/css">
      label {
    display: inline-block;
    width: 5em;
  }
      </style>
      <script type="text/javascript">

      $(document).ready(function(){

        $(function() {
          $(document).tooltip();
        });

      });
      </script>
  </head>
  <body>
    <p><a href="#" title="what is the widget">Tooltips</a> can be attached to any element. When you hover the element with your mouse, the title attribute is displayed in a little box next to the element, just like a native tooltip.</p>
    <p>Tooltips are also useful for form <a href="#" title="group of ...">elements</a> to show some additional information in the context of each field.</p>
    <p><label for="age">your age:</label><input id="age" title="we ask for your age only for satisfation purpose."></p>
  </body>
</html>
