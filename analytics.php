<?php include "core.html"; ?>
<?php require_once('login.php'); ?>

<!doctype html>
<html lang="en">


<main class="container">

  <div class="starter-template text-center py-5 px-3">
    <h1>Analytics</h1>
    <p class="lead">Information about usage on your network.</p>


<div class="accordion">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Internet Connection Usage (Past 7 days)
      </button>
    </h2>
    	<p> This shows data transferred via the internet connection for the last 7 days, <strong>Tx</strong> is data sent and <strong>Rx</strong> is data received.
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      	    <div class="ratio ratio-21x9">
<iframe src="http://192.168.100.252:3000/d-solo/WX6RJOMik/unifi-poller-usg-insights-influxdb?orgId=1&refresh=5m&from=now-7d&to=now&panelId=3" width="450" height="200" frameborder="0"></iframe></div>
      </div>
    </div>
  </div>

<br>
<div class="ratio ratio-21x9">
<iframe src="http://192.168.100.252:3000/d-solo/YVR23BZiz/unifi-poller-client-insights-influxdb?orgId=1&var-Controller=All&var-Site=All&var-AP=All&var-Wireless=All&var-Identifier=$tag_name&panelId=12" width="450" height="200" frameborder="0"></iframe>
</div>
<?php include "footer.html"; ?>

</html>
