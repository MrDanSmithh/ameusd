<?php
//SHA1 encrypted password

$dashPwd = '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684';

session_start();
if (!isset($_SESSION['usdAUTH'])) {
    $_SESSION['usdAUTH'] = false;
}

if (isset($_POST['password'])) {
    if (sha1($_POST['password']) == $dashPwd) {
        $_SESSION['usdAUTH'] = true;
    } else {
        die ('Incorrect password');
    }
} 

if (!$_SESSION['usdAUTH']): ?>

<html><head><title>Login</title></head>
  <body>
   <div class="container text-center py-5 px-3">
    <h1>Welcome<h1>
    <p class="lead">Please enter your password to continue.</p><br />
    <form method="post">
      <h4>Password</h4><input type="password" name="password" class="form-control"> <br />
      <input class="btn btn-info" type="submit" name="submit" value="Login">
    </form>
  </div>
  </body>
</html>

<?php
exit();
endif;
?>