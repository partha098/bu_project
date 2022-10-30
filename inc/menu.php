<div class="header-left">
			<span class="menu"><img src="images/menu.png" alt=""/></span>
				<ul class="nav1">
					<li><a  href="index.php">HOME</a></li>
					<li><a href="about.php">ABOUT</a></li>
					<li><a href="#">Our Team</a></li>
					<li><a href="gallery.php">GALLERY</a></li>	
					<li><a href="contact.php">CONTACT</a></li>
				</ul>
				<!-- script for menu -->
					<script> 
						$( "span.menu" ).click(function() {
						$( "ul.nav1" ).slideToggle( 300, function() {
						 // Animation complete.
						});
						});
					</script>
				<!-- //script for menu -->
		</div>
		<div class="header-right">
			<a href="index.php"><img src="images/logo.png" alt=""></a>
		</div>
		<div class="clearfix"></div>