<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="cyberpunk-bg">
    <div class="login-box">
      <h2>
<?php
$indata = $_GET['indata'];
require ('inputCheck.php');
echo "入力された数字は： " ,$indata;
?>
    </h2>
    </div>
  </body>
</html>
