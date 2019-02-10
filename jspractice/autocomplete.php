<html>
  <head>
      <link rel="stylesheet" href="assets/js/jquery-ui-1.12.1/jquery-ui.css">
      <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="assets/js/jquery-ui-1.12.1/jquery-ui.js"></script>

      <script type="text/javascript">

      $(function() {
        var availabletags = [
          "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
        ];

        $( "#tags" ).autocomplete({
          source: availabletags
        });

      });


      </script>
  </head>
  <body>
    <div class="ui-widget">
      <label for="tags">Tags:<label>
        <input id="tags">
    </div>

  </body>
</html>
