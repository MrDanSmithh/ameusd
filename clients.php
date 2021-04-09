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
$clients_array    = $unifi_connection->list_clients();

/**
 * output the results in JSON format
 */
echo json_encode($clients_array, JSON_PRETTY_PRINT); ?>  </div>


<?php include "footer.html"; ?>

</html>
