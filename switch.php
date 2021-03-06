<!-- Request core html, API and API config -->
<?php include "core.html"; ?>
<?php include "include/unifiapi/src/config.php"; ?>
<?php include "include/unifiapi/src/Client.php"; ?>

<!-- Refresh page every 15 seconds and present login page if not already logged in. -->
<?php header("refresh: 15"); ?>
<?php require_once('login.php'); ?>


<!doctype html>
<html lang="en">


<main class="container">

  <div class="starter-template text-center py-5 px-3">
    <h1>Switches</h1>
    <p class="lead">Information about your switches.</p>

<!-- Connect to API and make call to list devices -->
<?php
$unifi_connection = new UniFi_API\Client($controlleruser, $controllerpassword, $controllerurl, $site_id, $controllerversion);
$set_debug_mode   = $unifi_connection->set_debug($debug);
$loginresults     = $unifi_connection->login();
$swData           = $unifi_connection->list_devices();
?>

<!-- Switch info table -->
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Switch Name</th>
      <th scope="col">Serial Number</th>
      <th scope="col">Model</th>
      <th scope="col">IP</th>
      <th scope="col">Locate Switch</th>
    </tr>
  </thead>

<!-- Loop each type of device as USW then echo data including name, serial, model and IP into the table rows -->
<?php
foreach ($swData as $uswitch) {
    if ($uswitch->type === 'usw') { ?>
          <tbody>
          <td><?php echo $uswitch->name;?></td> 
          <td><?php echo $uswitch->serial;?></td>
          <td><?php echo $uswitch->model;?></td>
          <td><?php echo $uswitch->ip;?></td>
          <!-- Trigger locate device based on MAC address when button clicked. -->
          <td><a class="btn btn-info" href="/ameusd/sw_loc.php">Locate <?php $mac=$uswitch->mac; $unifi_connection->locate_ap($mac, false);?></a></td>
          <?php
    }
}
?>

<!-- Switch port information table, call data from the swports file -->
<?php include "include/swports.php"; ?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Port</th>
      <th scope="col">PoE Active?</th>
      <th scope="col">Is Uplink?</th>
    </tr>
  </thead>
<tbody>
  <!-- Get info from each port array -->
  <tr><td><?php echo $swPort1;?></td><td><?php echo $swPortPOE1;?></td><td><?php echo $swPortUP1;?></td></tr>
  <tr><td><?php echo $swPort2;?></td><td><?php echo $swPortPOE2;?></td><td><?php echo $swPortUP2;?></td></tr>
  <tr><td><?php echo $swPort3;?></td><td><?php echo $swPortPOE3;?></td><td><?php echo $swPortUP3;?></td></tr>
  <tr><td><?php echo $swPort4;?></td><td><?php echo $swPortPOE4;?></td><td><?php echo $swPortUP4;?></td></tr>
  <tr><td><?php echo $swPort5;?></td><td><?php echo $swPortPOE5;?></td><td><?php echo $swPortUP5;?></td></tr>
  <tr><td><?php echo $swPort6;?></td><td><?php echo $swPortPOE6;?></td><td><?php echo $swPortUP6;?></td></tr>
  <tr><td><?php echo $swPort7;?></td><td><?php echo $swPortPOE7;?></td><td><?php echo $swPortUP7;?></td></tr>
  <tr><td><?php echo $swPort8;?></td><td><?php echo $swPortPOE8;?></td><td><?php echo $swPortUP8;?></td></tr>  
  <tr><td><?php echo $swPort9;?></td><td><?php echo $swPortPOE9;?></td><td><?php echo $swPortUP9;?></td></tr>
  <tr><td><?php echo $swPort10;?></td><td><?php echo $swPortPOE10;?></td><td><?php echo $swPortUP10;?></td></tr>
  <tr><td><?php echo $swPort11;?></td><td><?php echo $swPortPOE11;?></td><td><?php echo $swPortUP11;?></td></tr>
  <tr><td><?php echo $swPort12;?></td><td><?php echo $swPortPOE12;?></td><td><?php echo $swPortUP12;?></td></tr>
  <tr><td><?php echo $swPort13;?></td><td><?php echo $swPortPOE13;?></td><td><?php echo $swPortUP13;?></td></tr>
  <tr><td><?php echo $swPort14;?></td><td><?php echo $swPortPOE14;?></td><td><?php echo $swPortUP14;?></td></tr>
  <tr><td><?php echo $swPort15;?></td><td><?php echo $swPortPOE15;?></td><td><?php echo $swPortUP15;?></td></tr>
  <tr><td><?php echo $swPort16;?></td><td><?php echo $swPortPOE16;?></td><td><?php echo $swPortUP16;?></td></tr>
  <tr><td><?php echo $swPort17;?></td><td><?php echo $swPortPOE17;?></td><td><?php echo $swPortUP17;?></td></tr>
  <tr><td><?php echo $swPort18;?></td><td><?php echo $swPortPOE18;?></td><td><?php echo $swPortUP18;?></td></tr>


</tbody>
  </div>
</main><!-- /.container -->

<!-- Call footer -->

<?php include "footer.html"; ?>

</html>
