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

	  <h2 class="heading">Gallery </h2>

	  <?php 

$sel="SELECT * FROM gallery";
$rs=$con->query($sel);
while($row=$rs->fetch_assoc()){
?>
		<div class="col-md-3">
		<div class="card" >
  <img class="card-img-top" src="gallery/<?php echo $row['image']; ?>" alt="Card image">
  <div class="card-body">
    <h4 class="card-title"><?php  echo $row['title'];  ?></h4>
    
   
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