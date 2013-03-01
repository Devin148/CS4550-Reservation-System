<div id="navbar">
    <img src="images/logo.png">
	<ul>
		<!--
			Check for each link to see if the current var is set to that page
			If so, apply the appropriate class
		-->
		<li><a href="index.php" <?php echo $current=='home' ? 'class="current"' : ''; ?>>home</a></li>
		<li><a href="events.php" <?php echo $current=='events' ? 'class="current"' : ''; ?>>events</a></li>
		<li><a href="reservations.php" <?php echo $current=='reservations' ? 'class="current"' : ''; ?>>reservations</a></li>
		<li><a href="contact.php" <?php echo $current=='contact' ? 'class="current"' : ''; ?>>contact</a></li>
	</ul>
</div>