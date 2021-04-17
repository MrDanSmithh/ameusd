<?php include "core.html"; ?>
<?php require_once('login.php'); ?>

<!doctype html>
<html lang="en">


<main class="container">

  <div class="starter-template text-center py-5 px-3">
    <h1>Analytics</h1>
    <p class="lead">Information about usage on your network.</p>

<div class="ratio ratio-21x9">
<iframe src="http://192.168.100.252:3000/d-solo/5_omrT7Zz/unifi-poller-network-sites-influxdb?orgId=1&from=1618687848912&to=1618698643912&panelId=15" width="450" height="200" frameborder="0"></iframe>
</div>
<?php include "footer.html"; ?>

</html>
