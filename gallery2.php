<html>
	<head>
		<title>David Shapiro - Gallery</title>
		<?php include 'header0.php'; ?>
        <link href='css/screen-styles.css' rel='stylesheet' type='text/css'>
	
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
			$rightmenu = 2;
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
					<h4> This is me as Tara In 2013 - 2015</h4> <br/>
					<a class="lightbox" rel="mypics" href="gallery/T1.jpg" title="Tara Dunn" >
						<img src="gallery/T1.jpg" width="80" height="100" alt="Tara Dunn" />
					</a>
					<a class="lightbox" rel="mypics" href="gallery/T2.jpg" title="Tara Dunn" >
						<img src="gallery/T2.jpg" width="80" height="100" alt="Tara Dunn" />
					</a>
					<a class="lightbox" rel="mypics" href="gallery/T3.jpg" title="Tara Dunn" >
						<img src="gallery/T3.jpg" width="80" height="100" alt="Tara Dunn" />
					</a>
					<a class="lightbox" rel="mypics" href="gallery/T4.jpg" title="Tara Dunn" >
						<img src="gallery/T4.jpg" width="80" height="100" alt="Tara Dunn" />
					</a>
					<a class="lightbox" rel="mypics" href="gallery/T5.jpg" title="Tara Dunn" >
						<img src="gallery/T5.jpg" width="160" height="100" alt="Tara Dunn" />
					</a>
					<a class="lightbox" rel="mypics" href="gallery/T6.jpg" title="Tara Dunn" >
						<img src="gallery/T6.jpg" width="100" height="100" alt="Tara Dunn" />
					</a>
					<a class="lightbox" rel="mypics" href="gallery/T7.jpg" title="Tara Dunn" >
						<img src="gallery/T7.jpg" width="160" height="100" alt="Tara Dunn" />
					</a>
					<a class="lightbox" rel="mypics" href="gallery/T8.jpg" title="Tara Dunn" >
						<img src="gallery/T8.jpg" width="180" height="100" alt="Tara Dunn" />
					</a>
					<a class="lightbox" rel="mypics" href="gallery/T9.jpg" title="Tara Dunn" >
						<img src="gallery/T9.jpg" width="80" height="100" alt="Tara Dunn" />
					</a>
					<a class="lightbox" rel="mypics" href="gallery/T10.jpg" title="Tara Dunn" >
						<img src="gallery/T10.jpg" width="80" height="100" alt="Tara Dunn" />
					</a>
					<a class="lightbox" rel="mypics" href="gallery/T11.jpg" title="Tara Dunn" >
						<img src="gallery/T11.jpg" width="100" height="100" alt="Tara Dunn" />
					</a>
					<a class="lightbox" rel="mypics" href="gallery/T12.jpg" title="Tara Dunn" >
						<img src="gallery/T12.jpg" width="80" height="100" alt="Tara Dunn" />
					</a>
					<a class="lightbox" rel="mypics" href="gallery/T13.jpg" title="Tara Dunn" >
						<img src="gallery/T13.jpg" width="110" height="100" alt="Tara Dunn" />
					</a>
					<a class="lightbox" rel="mypics" href="gallery/T14.jpg" title="Tara Dunn" >
						<img src="gallery/T14.jpg" width="80" height="100" alt="Tara Dunn" />
					</a>
					<a class="lightbox" rel="mypics" href="gallery/T15.jpg" title="Tara Dunn" >
						<img src="gallery/T15.jpg" width="80" height="100" alt="Tara Dunn" />
					</a>
		</span>
		<?php include 'footer.php'; ?>
	</body>
</html>