<!-- Request core html, API and API config and check for session, if not, require login. -->
<?php include "core.html"; ?>
<?php include "include/unifiapi/src/config.php"; ?>
<?php include "include/unifiapi/src/Client.php"; ?>
<?php require_once('login.php'); ?>

<!doctype html>
<html lang="en">


<main class="container">

  <div class="starter-template text-center py-5 px-3">
    <h1>Access Points</h1>
    <p class="lead">Information about your access points.</p>

<!-- Connect to controller and API to list devices -->
<?php
$unifi_connection = new UniFi_API\Client($controlleruser, $controllerpassword, $controllerurl, $site_id, $controllerversion);
$set_debug_mode   = $unifi_connection->set_debug($debug);
$loginresults     = $unifi_connection->login();
$apData           = $unifi_connection->list_devices();
?>

<!-- Start table for AP data -->
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">AP Name</th>
      <th scope="col">Serial Number</th>
      <th scope="col">IP Address</th>
      <th scope="col"># Connected Clients</th>
      <th scope="col">Locate AP</th>
    </tr>
  </thead>

<?php

// Data table for access point information, extract data from API call for device types being UAP

header('Content-Type: text/html; charset=utf-8');
foreach ($apData as $ap) {
    if ($ap->type === 'uap') { ?>
        <tbody>
        	<td><?php echo $ap->name;?></td>
          <td><?php echo $ap->serial;?></td> 
        	<td><?php echo $ap->ip;?></td>
        	<td><?php echo $ap->num_sta;?></td>
          <!-- Set locating device to true so LED blinks, when button clicked, redirect back to original page when value is false. -->
        	<td><a class="btn btn-danger" href="/ameusd/aps.php">Stop Locating <?php $mac=$ap->mac; $unifi_connection->locate_ap($mac, true);?></a>

<!-- Close off PHP loop after button -->
        	<?php
    }
}

?>
  </div>
</main><!-- /.container -->

<!-- Close off and request footer -->
<?php include "footer.html"; ?>

</html>
