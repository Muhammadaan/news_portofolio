<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<link rel="icon" type="image/png" href="img/favicon.png" />

    <title>Posted - News/Magazine Bootstrap HTML5 template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/frontend/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/frontend/css/main.css" rel="stylesheet">
	<link rel=" <?php echo base_url();?>assets/frontend/stylesheet" href="css/animation.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/fontello.css">
</head>
<body>
	<div class="container-fluid headerbar">
	<div class="container clearfix">
	
	<header>
	<nav class="navbar navbar-default">
        <div class="row">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            
			<a class="navbar-brand" href="#">
				<img alt="Posted News/Magazine Theme" src="img/posted_theme_logo.png">
			</a>
			
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              
              <li class="active dropdown">
                <a href="index-2.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="caret"></span></a>
                <ul class="dropdown-menu">
				  <li><a href="index-2.html">Homepage</a></li>
                  <li><a href="home2.html">Home V2</a></li>
                  <li><a href="home3.html">Home V3</a></li>
				  <li><a href="home4.html">Home V4</a></li>
				  <li><a href="home5.html">Home V5</a></li>
				  <li><a href="home-sidebar.html">Home V6 (Sidebar)</a></li>
                </ul>
              </li>

             
            </ul>

            <ul class="nav navbar-nav navbar-right toolbar">
				<li><a href="#" >Login</a></li>
				<li><a href="<?php echo base_url();?>authuser/register" >Register</a></li>
				
				</li>				
            </ul>
           

          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
	  
	</header>
		
	</div>
	</div>

    <script type="text/javascript">
		$(document).ready(function(){
			 $("#mycarousel").carousel();
		});
		

    </script>
	
	<script>
		( function() {
		$('#btn-search').on('click', function(e) {
			e.preventDefault();
			$('#search').animate({width: 'toggle'}).focus();
		});
		} () );
	</script>

	<div class="container">
	
	<?php echo $contents; ?>
						
	</div>
	
	
	
	<!-- FOOTER -->
	<footer>
	<div class="container-fluid section-footer">
		<div class="container">
			<div class="row">
				<!-- ABOUT AND SOCIAL -->
				<div class="col-md-3 col-sm-6 col-xs-12">
					<a class="navbar-brand" href="#">
						<img alt="Posted News/Magazine Theme" src="img/posted_theme_logo.png">
					</a>
					<ul class="nav navbar-nav">
					  <li><a href="#" class="demo-icon icon-gplus social-icons"></a></li>
					  <li><a href="#" class="demo-icon icon-pinterest social-icons"></a></li>
					  <li><a href="#" class="demo-icon icon-facebook social-icons"></a></li>
					  <li><a href="#" class="demo-icon icon-twitter social-icons"></a></li>
					  <li><a href="#" class="demo-icon icon-vimeo social-icons"></a></li>
					  <li><a href="#" class="demo-icon icon-rss social-icons"></a></li>
					</ul>
					<p>Aliquam feugiat turpis quis felis adipiscing, non pulvinar odio lacinia. Aliquam elementum pharetra fringilla. Duis blandit, sapien in semper vehicula, tellus elit gravida odio, ac tincidunt nisl mi at ante. Vivamus tincidunt nunc nibh. Duis blandit, sapien in semper vehicula</p>
				</div>
				
				<!-- POSTS -->
				<div class="col-md-3 col-sm-6 col-xs-12">
					<h1>Popular Posts</h1>
					<!-- MEDIA LIST -->
					<ul class="media-list footermedialist">
						<!-- Thumb -->
						<li class="media">
							<div class="media-left">
							  <a href="#"><img class="media-object" src="img/xs-post-thumb.jpg" alt="Post img"></a>
							</div>
							<div class="media-body">
							  <h4 class="media-heading"><a href="#">Hot Latte in perfect Coffee Shop</a></h4>
							  <span class="date-icon icon-clock">25 January, 2015</span>
							</div>
						</li>
						
						<!-- Thumb -->
						<li class="media">
							<div class="media-left">
							  <a href="#"><img class="media-object" src="img/xs-post-thumb.jpg" alt="Post img"></a>
							</div>
							<div class="media-body">
							  <h4 class="media-heading"><a href="#">Hot Latte in perfect Coffee Shop</a></h4>
							  <span class="date-icon icon-clock">25 January, 2015</span>
							</div>
						</li>
						
						<!-- Thumb -->
						<li class="media">
							<div class="media-left">
							  <a href="#"><img class="media-object" src="img/xs-post-thumb.jpg" alt="Post img"></a>
							</div>
							<div class="media-body">
							  <h4 class="media-heading"><a href="#">Hot Latte in perfect Coffee Shop</a></h4>
							  <span class="date-icon icon-clock">25 January, 2015</span>
							</div>
						</li>
					</ul>
				</div>
				
				<!-- TAGS -->
				<div class="col-md-3 col-sm-6 col-xs-12">
					<h1>Tags</h1>
					<ul class="footer-tags">
						<li><a href="#">Videos</a></li>
						<li><a href="#">Sport</a></li>
						<li><a href="#">Gastro</a></li>
						<li><a href="#">Tech</a></li>
						<li><a href="#">Urbanism</a></li>
						<li><a href="#">Lifestyle</a></li>
						<li><a href="#">Trending</a></li>
					</ul>
				</div>
				
				<!-- LINKS -->
				<div class="col-md-3 col-sm-6 col-xs-12">
					<h1>Links</h1>
					<ul class="footer-menu-links">
						<li class="icon-right-open"><a href="#">About Us</a></li>
						<li class="icon-right-open"><a href="#">Categories</a></li>
						<li class="icon-right-open"><a href="#">Features</a></li>
						<li class="icon-right-open"><a href="#">Pages</a></li>
						<li class="icon-right-open"><a href="#">Gallery</a></li>
						<li class="icon-right-open"><a href="#">Terms of use</a></li>
						<li class="icon-right-open"><a href="#">Privacy Policy</a></li>
					</ul>
				</div>
				<!-- END -->
			</div>
		</div>
	</div>
	<!-- FOOTER BAR -->
	<div class="container-fluid section-footer-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xs-6">© OrcasThemes 2016, All rights reserved</div>
				<div class="col-md-6 col-xs-6"><span class="pull-right">Fonts by Google Fonts. Icons by Fontello</span></div>
			</div>
		</div>
	</div>
	</footer>

    <script src="<?php echo base_url();?>assets/frontend/js/jquery-1.11.2.min.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/js/bootstrap.min.js"></script>
  </body>

</html>