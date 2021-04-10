<?php include "core.html"; ?>
<?php include "include/unifiapi/src/config.php"; ?>
<?php include "include/unifiapi/src/Client.php"; ?>
<!doctype html>
<html lang="en">


<main class="container">

  <div class="starter-template text-center py-5 px-3">
    <h1>Clients</h1>
    <p class="lead">Information about devices on your wireless network.</p>

<?php
$unifi_connection = new UniFi_API\Client($controlleruser, $controllerpassword, $controllerurl, $site_id, $controllerversion);
$set_debug_mode   = $unifi_connection->set_debug($debug);
$loginresults     = $unifi_connection->login();
$clientData       = $unifi_connection->list_clients();
?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Device Name</th>
      <th scope="col">SSID</th>
      <th scope="col">IP</th>
      <th scope="col">MAC Address</th>
    </tr>
  </thead>

<?php
foreach ($clientData as $userDevices) {
    if ($userDevices->is_wired === false) { ?>
          <tbody>
          <td><?php echo $userDevices->hostname;?></td> 
          <td><?php echo $userDevices->essid;?></td>
          <td><?php echo $userDevices->ip;?></td>
          <td><?php echo $userDevices->mac;?></td>
          <?php
    }
}
?>
</div>



<?php include "footer.html"; ?>

</html>
