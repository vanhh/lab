<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Check Info page</title>
  </head>
  <body>
    <?php
     $username ="";
     $password ="";

     $username =$_POST["username"];
     $password =$_POST["password"];

     echo "This is your username: $username | This is your password: $password";

     ?>
  </body>
</html>
