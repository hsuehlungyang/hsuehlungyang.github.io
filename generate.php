<!DOCTYPE html>
<html>
  <body>
    <p id = "demo" />
    <p id = "zipcode" />
          <?php
      echo "Hi #2";
      ?>
    <script>
      document.getElementById("demo").innerHTML = "Hi";
      var x = document.forms("zipcode").value;
          document.getElementById("zipcode").innerHTML = x;
    </script>
  </body>
</html>
