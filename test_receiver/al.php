<!DOCTYPE html>
<?php session_start();
?>
<html>
  <head>
    <title>AJAX POST Submit</title>
    <script>
    function ajaxpost () {
      // (A) GET FORM DATA
      var form = document.getElementById("myForm");
      var data = new FormData(form);

      // (B) AJAX
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "0-dummy.php");
      // What to do when server responds
      xhr.onload = function () { console.log(this.response); };
      xhr.send(data);

      // (C) PREVENT HTML FORM SUBMIT
      return false;
    }
    </script>
  </head>
  <body>
    <form id="myForm" action= "0-dummy.php" method = "post">
      MainVoltage:: <input type="text" name="mainVoltage" required/>
      Ciruit: <input type="checkbox"  name= "circuitOne "onclick="setInterval(ajaxpost,5000);" >
    </form>
  </body>

</html>

