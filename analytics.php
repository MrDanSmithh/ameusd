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

        <div class="ratio ratio-21x9"><iframe src="http://192.168.100.252:3000/d-solo/WX6RJOMik/unifi-poller-usg-insights-influxdb?orgId=1&refresh=5m&from=now-7d&to=now&panelId=3" width="450" height="200" frameborder="0"></iframe>

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

        <div class="ratio ratio-21x9"><iframe src="http://192.168.100.252:3000/d-solo/WX6RJOMik/unifi-poller-usg-insights-influxdb?orgId=1&refresh=5m&from=now-30d&to=now&panelId=3" width="450" height="200" frameborder="0"></iframe>
        </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#analyticsAccordions">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>






<br>
<div class="ratio ratio-21x9">
<iframe src="http://192.168.100.252:3000/d-solo/YVR23BZiz/unifi-poller-client-insights-influxdb?orgId=1&var-Controller=All&var-Site=All&var-AP=All&var-Wireless=All&var-Identifier=$tag_name&panelId=12" width="450" height="200" frameborder="0"></iframe>
</div>
<?php include "footer.html"; ?>

</html>
