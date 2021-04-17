<?php include "core.html"; ?>
<?php include "include/unifiapi/src/config.php"; ?>
<?php include "include/unifiapi/src/Client.php"; ?>
<?php require_once('login.php'); ?>
<?php header("refresh: 15"); ?>
<!doctype html>
<html lang="en">


<main class="container">

  <div class="starter-template text-center py-5 px-3">
    <h1>Access Points</h1>
    <p class="lead">Information about your access points.</p>

<?php
$unifi_connection = new UniFi_API\Client($controlleruser, $controllerpassword, $controllerurl, $site_id, $controllerversion);
$set_debug_mode   = $unifi_connection->set_debug($debug);
$loginresults     = $unifi_connection->login();
$aps_array        = $unifi_connection->list_devices();


/**
 * output the results in HTML format
 */ ?>

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

header('Content-Type: text/html; charset=utf-8');
foreach ($aps_array as $ap) {
    if ($ap->type === 'uap') { ?>
        <tbody>
        	<td><?php echo $ap->name;?></td> 
          <td><?php echo $ap->serial;?></td>
        	<td><?php echo $ap->ip;?></td>
        	<td><?php echo $ap->num_sta;?></td>
        	<td><a class="btn btn-info" href="/ameusd/ap_loc.php">Locate <?php $mac=$ap->mac; $unifi_connection->locate_ap($mac, false);?></a>

        	<?php
    }
}

?>
  </div>
</main><!-- /.container -->


<?php include "footer.html"; ?>

</html>
