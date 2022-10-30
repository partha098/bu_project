<?php include("inc/db.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>Happy Home a Society and People Category Flat Bootstrap Responsive Website Template| Home :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Happy Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
<!--webfont-->
<!--js-->
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
<!---- start-smoth-scrolling---->
</head>
<body>
<!-- header -->
<div class="header">
	<div class="container">
		<?php include("inc/menu.php"); ?>
	</div>
</div>
<!-- //header -->
<!-- banner -->

<!-- //banner -->
<!-- banner-bottom -->
<div >
	<div class="container">
      <div class="row">

	  <h2 class="heading">Contact us </h2>

		<div class="col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14719.592858861892!2d88.4998499!3d22.7320243!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa012120ab7f1da34!2sBrainware%20University!5e0!3m2!1sen!2sin!4v1667121189726!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>

        <div class="col-md-6">
            <h4>398, Ramkrishnapur Rd, near Jagadighata Market, Barasat, Kolkata, West Bengal 700125</h4>
		
        <h4 style="padding-top:30px">Call: 1234567890</h4>


        </div>

		</div>

	



		</div>

		
	</div>
</div>
<!-- //banner-bottom -->
<!-- //footer -->
<!-- copy -->
<div class="copy-right">
	<?php include("inc/footer.php"); ?>
</div>
<!-- copy -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

</body>
</html>