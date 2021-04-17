<?php include "core.html"; ?>
<?php require_once('login.php'); ?>


<!doctype html>
<html lang="en">


<main class="container">

  <div class="starter-template text-center py-5 px-3">
    <h1>Welcome</h1>
    <p class="lead">Choose an option below to get started.</p>
  </div>
<div class="row align-items-start">
<div class="col"><a href="aps.php"><h5 class="homebtns"><img src="assets/images/graph-up.svg" style="width: 50%; margin-top: -5px">Analytics</h5></a></div>

<div class="col"><h5 class="homebtns"><img src="assets/images/wifi.svg" style="width: 66%; margin-top: -20px">Access Points</h5></div>

<div class="col"><h5 class="homebtns"><img src="assets/images/slash-circle.svg" style="width: 60%; margin-top: -10px">Blocked Devices</h5></div>

<div class="col"><h5 class="homebtns"><img src="assets/images/switch-rack.svg" style="width: 60%; margin-top: -10px">Switches</h5></div>

</div>
</main><!-- /.container -->


<?php include "footer.html"; ?>

</html>
