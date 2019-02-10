<html>
  <head>
      <link rel="stylesheet" href="assets/js/jquery-ui-1.12.1/jquery-ui.css">
      <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="assets/js/jquery-ui-1.12.1/jquery-ui.js"></script>

      <script type="text/javascript">

      $(function() {
        $("input").checkboxradio();
      });


      </script>
  </head>
  <body>
    <div class="widget">
      <h1>#Checkbox and Radio button widgets</h1>

      <h3>Radio button</h3>
      <fieldset>
        <legend>select a location:</legend>
        <label for="radio-1">America</label>
        <input type="radio" name="radio-1" id="radio-1">
        <label for="radio-2">London</label>
        <input type="radio" name="radio-1" id="radio-2">
        <label for="radio-3">Paris</label>
        <input type="radio" name="radio-1" id="radio-3">
      </fieldset>

      <h3>Checkbox</h3>
      <fieldset>
        <legend>Hotel ratings:</legend>
        <label for="checkbox-1">2 Star</label>
        <input type="checkbox" name="checkbox-1" id="checkbox-1">
        <label for="checkbox-2">3 Star</label>
        <input type="checkbox" name="checkbox-2" id="checkbox-2">
        <label for="checkbox-3">4 Star</label>
        <input type="checkbox" name="checkbox-3" id="checkbox-3">
        <label for="checkbox-4">5 Star</label>
        <input type="checkbox" name="checkbox-4" id="checkbox-4">
      </fieldset>

      <h3>Checkbox nested in lable</h3>
      <fieldset>
        <legend>Bad type:</legend>
        <label for="checkbox-nested-1">2 Double</label>
        <input type="checkbox" name="checkbox-nested-1" id="checkbox-nested-1">
        <label for="checkbox-nested-2">1 Queen</label>
        <input type="checkbox" name="checkbox-nested-2" id="checkbox-nested-2">
        <label for="checkbox-nested-3">2 Queen</label>
        <input type="checkbox" name="checkbox-nested-3" id="checkbox-nested-3">
        <label for="checkbox-nested-4">1 King</label>
        <input type="checkbox" name="checkbox-nested-4" id="checkbox-nested-4">
      </fieldset>
    </div>
  </body>
</html>
