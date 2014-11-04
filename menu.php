<?php
	function verifica($string){
		$params = explode("/", $_SERVER['PHP_SELF']);
		$result = in_array($string, $params);
		
		return $result;
		
	}
?>
<div class="header">
	<div class="header_top">
		<div class="wrap">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" alt="" /></a>
			</div>
			<div class="menu">
				<ul>
					<li <?php if(verifica("index.php")){ ?> class="active" <?php } ?>><a href="index.php">Home</a></li>
					<li <?php if(verifica("about.php")){ ?> class="active" <?php } ?>><a href="about.php">About</a></li>
					<li <?php if(verifica("services.php")){ ?> class="active" <?php } ?>><a href="services.php">Services</a></li>
					<li <?php if(verifica("404.php")){ ?> class="active" <?php } ?>><a href="404.php">Clients</a></li>
					<li <?php if(verifica("contact.php")){ ?> class="active" <?php } ?>><a href="contact.php">Contact</a></li>
					<div class="clear"></div>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<?php 
	if(verifica("index.php")){
	?>		
	<!--start-image-slider---->
		<div class="image-slider">
			<ul class="rslides" id="slider1">
				<li><img src="images/slider3.jpg" alt=""></li>
				<li><img src="images/slider2.jpg" alt=""></li>
				<li><img src="images/slider1.jpg" alt=""></li>
				<li><img src="images/slider4.jpg" alt=""></li>
		
		</div>
		<!--End-image-slider---->
		<?php } ?>
</div>