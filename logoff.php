<!-- Request login code to check for session -->
<?php include "core.html"; ?>
<?php
// Look at open session and destroy it -->
session_start();
session_destroy();
?>
<div class="container text-center">
	<br><h1>You have been logged off.</h1>
</div> 