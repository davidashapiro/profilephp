<html>
	<head>
		<title>David Shapiro - Gallery</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   		<link href='css/styles.css' rel='stylesheet' type='text/css'>
        <link href='css/screen-styles.css' rel='stylesheet' type='text/css'>
        
        <!-- //////// Favicon ////////  -->
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
	
		<!-- //////// jQuery ////////  -->
	
		<script src="scripts/jquery-1.3.1.min.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="scripts/fancybox/jquery.fancybox-1.2.6.css" media="screen" />
		<script type="text/javascript" src="scripts/fancybox/jquery.fancybox-1.2.6.pack.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$("a.lightbox").fancybox({
					'overlayOpacity': 0.7,
					'overlayColor'	: '#333'
				});
			});
		</script>
		<style>
			img {
				margin: 2px;
			}
		</style>
		<?php
			$topmenu = 3;
			$rightmenu = 1;
		?>
	</head>
	<body>
		<?php 
		include 'header1.php';
		include 'topmenu.php';
		include 'header2.php';
		include 'gmenu.php';
		include 'header3.php';
		?>
		<span>
					<h4>This is me in 2016 - 2018 after Tara was gone.</h4><br/>
					<a class="lightbox" rel="mypics" href="gallery/D1.jpg" title="David Shapiro" >
						<img src="gallery/D1.jpg" width="80" height="100" alt="David Shapiro" />
					</a>
					<a class="lightbox" rel="mypics" href="gallery/D2.jpg" title="David Shapiro" >
						<img src="gallery/D2.jpg" width="80" height="100" alt="David Shapiro" />
					</a>
					<a class="lightbox" rel="mypics" href="gallery/D3.jpg" title="David Shapiro" >
						<img src="gallery/D3.jpg" width="80" height="100" alt="David Shapiro" />
					</a>
					<a class="lightbox" rel="mypics" href="gallery/D4.jpg" title="David Shapiro" >
						<img src="gallery/D4.jpg" width="80" height="100" alt="David Shapiro" />
					</a>
					<a class="lightbox" rel="mypics" href="gallery/D8.jpg" title="David Shapiro" >
						<img src="gallery/D8.jpg" width="90" height="100" alt="David Shapiro" />
					</a>
					<a class="lightbox" rel="mypics" href="gallery/D9.jpg" title="David Shapiro" >
						<img src="gallery/D9.jpg" width="90" height="100" alt="David Shapiro" />
					</a>
					<a class="lightbox" rel="mypics" href="gallery/D5.jpg" title="David Shapiro" >
						<img src="gallery/D5.jpg" width="90" height="100" alt="David Shapiro" />
					</a>
					<a class="lightbox" rel="mypics" href="gallery/D6.jpg" title="David Shapiro" >
						<img src="gallery/D6.jpg" width="140" height="100" alt="David Shapiro" />
					</a>
					<!--<a class="lightbox" rel="mypics" href="gallery/D7.jpg" title="David Shapiro" >
						<img src="gallery/D7.jpg" width="100" height="100" alt="David Shapiro" />
					</a>-->
		</span>
		<?php include 'footer.php'; ?>
	</body>
</html>