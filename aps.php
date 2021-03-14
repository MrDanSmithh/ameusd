<?php include "core.html"; ?>
<?php include "include/unifiapi/src/config.php"; ?>
<?php include "include/unifiapi/src/Client.php"; ?>
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
 */
header('Content-Type: text/html; charset=utf-8');
foreach ($aps_array as $ap) {
    if ($ap->type === 'uap') {
        echo '<b>AP name:</b>' . $ap->name . ' <b>model:</b>' . $ap->model . ' <b># connected clients:</b>' . $ap->num_sta . '<br>';
    }
}
?>
  </div>
</main><!-- /.container -->


<?php include "footer.html"; ?>

</html>
