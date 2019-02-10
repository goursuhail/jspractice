<html>
  <head>
    <style type="text/css">
    .popup {
      position: relative;
      display: inline-block;
      cursor: pointer;
      }

      .popup .poptext {
        visibility: hidden;
        width: 250px;
        background-color: #555;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        position: absolute;
        bottom: 130px;
      }
      .popup .poptext::after {
          content: "";
          position: absolute;
          top: 100%;
          left: 50%;
          margin-left: -5px;
          border-width: 5px;
          border-style: solid;
          border-color: #555 transparent transparent transparent;
        }

        .popup .show {
            visibility: visible;
            -webkit-animation: fadeIn 1s;
            animation: fadeIn 1s;
          }
    </style>
    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>

    <script type="text/javascript">
      function myfunction() {
        var popup = document.getElementById("poppup");
        popup.classList.toggle("show");
      }
    </script>
  </head>
  <body style="text-align:center">
    <h2>popup</h2>
    <div class="popup" onclick="myfunction()">click me!!!...
      <span class="poptext" id="poppup">javascript popup</span>
    </div>
  </body>
</html>
