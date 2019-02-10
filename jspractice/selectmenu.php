<html>
  <head>
      <link rel="stylesheet" href="assets/js/jquery-ui-1.12.1/jquery-ui.css">
      <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="assets/js/jquery-ui-1.12.1/jquery-ui.js"></script>

      <style type="text/css">
      fieldset {
      border: 0;
    }
    label {
      display: block;
      margin: 30px 0 0 0;
    }
    .overflow {
      height: 200px;
    }
      </style>

      <script type="text/javascript">
      $( function() {
   $( "#speed" ).selectmenu();

   $( "#files" ).selectmenu();

   $( "#number" )
     .selectmenu()
     .selectmenu( "menuWidget" )
       .addClass( "overflow" );

   $( "#salutation" ).selectmenu();
 } );
      </script>
  </head>
  <body>
    <div class="demo">
      <form action="#">
        <fieldset>
          <label for="speed">select a speed</label>
          <select name="speed" id="speed">
            <option>slower</option>
            <option>slow</option>
            <option selected="selected">medium</option>
            <option>faster</option>
            <option>fast</option>
          </select>

          <label for="files">select a file</label>
          <select name="files" id="files">
            <optgroup label="scripts">
              <option value="jqueryfile">jquery-ui</option>
              <option value="jquercss">jquery-ui-css</option>
            </optgroup>
            <optgroup label="other files">
              <option value="jquery file">some file</option>
              <option value="jquery js">some other file</option>
            </optgroup>
          </select>

          <label for="number">Select a number</label>
    <select name="number" id="number">
      <option>1</option>
      <option selected="selected">2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
      <option>11</option>
      <option>12</option>
      <option>13</option>
      <option>14</option>
      <option>15</option>
      <option>16</option>
      <option>17</option>
      <option>18</option>
      <option>19</option>
    </select>


    <label for="salutation">Select a title</label>
    <select name="salutation" id="salutation">
      <option disabled selected>Please pick one</option>
      <option>Mr.</option>
      <option>Mrs.</option>
      <option>Dr.</option>
      <option>Prof.</option>
      <option>Other</option>
    </select>
        </fieldset>
      </form>
    </div>
  </body>
</html>
