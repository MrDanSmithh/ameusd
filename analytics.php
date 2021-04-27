<?php include "core.html"; ?>
<?php require_once('login.php'); ?>

<!doctype html>
<html lang="en">


<main class="container">

  <div class="starter-template text-center py-5 px-3">
    <h1>Analytics</h1>
    <p class="lead">Information about usage on your network.</p>


<div class="accordion" id="analyticsAccordions">
  <div class="accordion-item">
    <h2 class="accordion-header" id="wanHeadingWk">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#weekWAN" aria-expanded="true" aria-controls="weekWAN">
        Internet Connection Usage (Past 7 days)
       </button>
    </h2>
    <div id="weekWAN" class="accordion-collapse collapse show" aria-labelledby="wanHeadingWk" data-bs-parent="#analyticsAccordions">
      <div class="accordion-body">
      	<p> This shows data transferred via the internet connection for the last 7 days, <strong>Tx</strong> is data sent and <strong>Rx</strong> is data received.</p>

        <div class="ratio ratio-21x9"><iframe src="http://192.168.100.252:3000/d-solo/WX6RJOMik/unifi-poller-usg-insights-influxdb?orgId=1&refresh=5m&from=now-8d&to=now&panelId=3" width="450" height="200" frameborder="0"></iframe>

        </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="wanHeadingMth">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mthWAN" aria-expanded="false" aria-controls="mthWAN">
        Internet Connection Usage (Past 30 days)
      </button>
    </h2>
    <div id="mthWAN" class="accordion-collapse collapse" aria-labelledby="wanHeadingMth" data-bs-parent="#analyticsAccordions">
      <div class="accordion-body">
              	<p> This shows data transferred via the internet connection for the last 30 days, <strong>Tx</strong> is data sent and <strong>Rx</strong> is data received.</p>

        <div class="ratio ratio-21x9"><iframe src="http://192.168.100.252:3000/d-solo/WX6RJOMik/unifi-poller-usg-insights-influxdb?orgId=1&refresh=5m&from=now-33d&to=now&panelId=3" width="450" height="200" frameborder="0"></iframe>
        </div>
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="wifiBwdthHeadingWk">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#wifiBwdthWk" aria-expanded="false" aria-controls="wifiBwdthWk">
        Wireless Bandwidth (Past 7 Days)
      </button>
    </h2>
    <div id="wifiBwdthWk" class="accordion-collapse collapse" aria-labelledby="wifiBwdthHeadingWk" data-bs-parent="#analyticsAccordions">
      <div class="accordion-body">
                <p> This shows wireless bandwidth usage for the last 7 days, <strong>Tx</strong> is data sent and <strong>Rx</strong> is data received.</p></p>
<div class="ratio ratio-21x9"><iframe src="http://192.168.100.252:3000/d-solo/YVR23BZiz/unifi-poller-client-insights-influxdb?orgId=1&from=now - 8d&to=now&var-Controller=All&var-Site=All&var-AP=All&var-Wireless=All&var-Wired=All&var-Identifier=$tag_name&panelId=3" width="450" height="200" frameborder="0"></iframe>
</div>
    </div>
  </div>
</div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="wifiBwdthHeadingMth">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#wifiBwdthMth" aria-expanded="false" aria-controls="wifiBwdthMth">
        Wireless Bandwidth (Past 30 Days)
      </button>
    </h2>
    <div id="wifiBwdthMth" class="accordion-collapse collapse" aria-labelledby="wifiBwdthHeadingMth" data-bs-parent="#analyticsAccordions">
      <div class="accordion-body">
                <p> This shows wireless bandwidth usage for the last 30 days, <strong>Tx</strong> is data sent and <strong>Rx</strong> is data received.</p></p>
<div class="ratio ratio-21x9"><iframe src="http://192.168.100.252:3000/d-solo/YVR23BZiz/unifi-poller-client-insights-influxdb?orgId=1&from=now - 33d&to=now&var-Controller=All&var-Site=All&var-AP=All&var-Wireless=All&var-Wired=All&var-Identifier=$tag_name&panelId=3" width="450" height="200" frameborder="0"></iframe>
</div>
    </div>
  </div>
</div>



  <div class="accordion-item">
    <h2 class="accordion-header" id="wanGroupHeadingWk">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#wanGroupsWk" aria-expanded="false" aria-controls="wanGroupsWk">
        Traffic by Category
      </button>
    </h2>
    <div id="wanGroupsWk" class="accordion-collapse collapse" aria-labelledby="wanGroupHeadingWk" data-bs-parent="#analyticsAccordions">
      <div class="accordion-body">
              	<p> This categorises the data transferred via the wireless network connection.</p>

        <div class="ratio ratio-21x9"><iframe src="http://192.168.100.252:3000/d-solo/AKIXQlsZz/unifi-poller-client-dpi-influxdb?orgId=1&refresh=5m&from=now-7d&to=now&panelId=5800" width="450" height="200" frameborder="0"></iframe>
      </div>
    </div>
  </div>
</div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="wanGroupHeadingMth">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#wanGroupsMth" aria-expanded="false" aria-controls="wanGroupsMth">
        Device Types
      </button>
    </h2>
    <div id="wanGroupsMth" class="accordion-collapse collapse" aria-labelledby="wanGroupHeadingMth" data-bs-parent="#analyticsAccordions">
      <div class="accordion-body">
              	<p> This categorises the types of devices present on the wireless network connection for the past 30 days.</p>
<div class="ratio ratio-21x9"><iframe src="http://192.168.100.252:3000/d-solo/YVR23BZiz/unifi-poller-client-insights-influxdb?orgId=1&var-Controller=All&var-Site=All&var-AP=All&var-Wireless=All&var-Identifier=$tag_name&panelId=12" width="450" height="200" frameborder="0"></iframe>
</div>
    </div>
  </div>
</div>
</div>
<?php include "footer.html"; ?>

</html>
