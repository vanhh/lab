<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
  </head>
  <body>
    <form id="user_form" name="user_form" method="post" action="check_userinfo.php">
      <!-- create username form -->
      <br>User name: <input type="text" name="username" value="" placeholder="enter username"> </br>
      <!-- create password form -->
      <br>Password:
      <input type="password" name="password" value="" placeholder="enter your password"> </br>
      <!-- create submit button-->
      <button type="submit">Log in </button>
    </form>

    <?php
     $username ="";
     $password ="";

     ?>
  </body>
</html>
