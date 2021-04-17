<?php include "core.html"; ?>
<?php include "include/unifiapi/src/config.php"; ?>
<?php include "include/unifiapi/src/Client.php"; ?>
<?php require_once('login.php'); ?>

<!doctype html>
<html lang="en">


<main class="container">

  <div class="starter-template text-center py-5 px-3">
    <h1>Switches</h1>
    <p class="lead">Information about your switches.</p>

<?php
$unifi_connection = new UniFi_API\Client($controlleruser, $controllerpassword, $controllerurl, $site_id, $controllerversion);
$set_debug_mode   = $unifi_connection->set_debug($debug);
$loginresults     = $unifi_connection->login();
$data             = $unifi_connection->list_devices();
?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Switch Name</th>
      <th scope="col">Serial Number</th>
      <th scope="col">Model</th>
      <th scope="col">IP</th>
      <th scope="col">Locate Switch</th>
    </tr>
  </thead>

<?php
foreach ($data as $uswitch) {
    if ($uswitch->type === 'usw') { ?>
          <tbody>
          <td><?php echo $uswitch->name;?></td> 
          <td><?php echo $uswitch->serial;?></td> 
          <td><?php echo $uswitch->model;?></td>
          <td><?php echo $uswitch->ip;?></td>
          <td><a class="btn btn-danger" href="/ameusd/switch.php">Stop Locating <?php $mac=$uswitch->mac; $unifi_connection->locate_ap($mac, true);?></a>
          <?php
    }
}


/**
 * provide feedback in json format
 */
//echo json_encode($data, JSON_PRETTY_PRINT);


/**
 * output the results in HTML format
 */

?>
  </div>
</main><!-- /.container -->


<?php include "footer.html"; ?>

</html>
