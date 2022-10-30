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
<div class="banner">
	<div class="container">
		<!-- responsiveslides -->
								<script src="js/responsiveslides.min.js"></script>
									<script>
										// You can also use "$(window).load(function() {"
										$(function () {
										 // Slideshow 4
										$("#slider3").responsiveSlides({
											auto: true,
											pager: false,
											nav: false,
											speed: 500,
											namespace: "callbacks",
											before: function () {
										$('.events').append("<li>before event fired.</li>");
										},
										after: function () {
											$('.events').append("<li>after event fired.</li>");
											}
											});
											});
									</script>
		<!-- responsiveslides -->
		<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-info">
							<h3>WE NEED YOUR SUPPORT</h3>
							<p>Sed ut perspiciatis unde omnis iste natus
							error sit voluptatem accusantium doloremque 
							laudantium, totam rem aperiam, eaque ipsa quae 
							ab illo inventore veritatis et quasi architecto 
							beatae vitae dicta sunt</p>
							<a href="#" class="hvr-rectangle-out button">READ MORE</a>
						</div>
						<div class="clearfix"></div>
					</li>
					<li>
						<div class="banner-info">
							<h3>HELP TURN TEARS TO SURES</h3>
							<p>Sed ut perspiciatis unde omnis iste natus
							error sit voluptatem accusantium doloremque 
							laudantium, totam rem aperiam, eaque ipsa quae 
							ab illo inventore veritatis et quasi architecto 
							beatae vitae dicta sunt </p>
							<a href="#" class="hvr-rectangle-out button">READ MORE</a>
						</div>
						<div class="clearfix"></div>
					</li>
				</ul>
		</div>
	</div>
</div>
<!-- //banner -->
<!-- banner-bottom -->
<div >
	<div class="container">
      <div class="row">

	  <h2 class="heading">Events</h2>

	  <?php 

$sel="SELECT * FROM events";
$rs=$con->query($sel);
while($row=$rs->fetch_assoc()){
?>
		<div class="col-md-3">
		<div class="card" >
  <img class="card-img-top" src="event_photo/<?php echo $row['event_image']; ?>" alt="Card image">
  <div class="card-body">
    <h4 class="card-title"><?php  echo $row['event_name'];  ?></h4>
    <h4 class="card-text"><?php  echo date("d-M-Y",strtotime($row['event_date']));  ?></h4>

	<h4 class="card-text"><?php  echo $row['event_venue'];  ?></h4>
   
  </div>
</div>

		</div>

		<?php  }?>



		</div>

		
	</div>
</div>
<!-- //banner-bottom -->
<!-- //footer -->
<!-- copy -->
<div class="copy-right" >
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