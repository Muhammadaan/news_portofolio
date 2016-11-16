<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title> News </title>
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
				<!-- <img alt="Posted News/Magazine Theme" src="img/posted_theme_logo.png"> -->
			</a>
			
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            
            <!-- <?php 
            		if ( $this->session->userdata('back_userid')) { ?>

            			<ul class="nav navbar-nav">
              
              

             
            </ul>

            <ul class="nav navbar-nav navbar-right toolbar">
				<li><a href="<?php echo base_url();?>authuser/logout" >Logout</a></li>
				
				</li>				
            </ul>   
            			
            	<?php	} else { ?>
            	<ul class="nav navbar-nav">
              
              <li class="active ">
                <a href=" <?php echo base_url();?>" role="button" aria-haspopup="true" aria-expanded="false">Home </a> 
              </li>

               <li class="active ">
                <a href=" <?php echo base_url();?>article/category/sepakbola " role="button" aria-haspopup="true" aria-expanded="false">Sepak Bola </a> 
              </li>

               <li class="active ">
                <a href=" <?php echo base_url();?>article/category/basket " role="button" aria-haspopup="true" aria-expanded="false">Basket</a> 
              </li>

               <li class="active ">
                <a href=" <?php echo base_url(); ?>article/category/bulutangkis " role="button" aria-haspopup="true" aria-expanded="false">Raket</a> 
              </li>

              <li class="active ">
                <a href=" <?php echo base_url(); ?>article/category/f1 " role="button" aria-haspopup="true" aria-expanded="false">Formula 1</a> 
              </li>

              <li class="active ">
                <a href=" <?php echo base_url(); ?>article/category/motogp " role="button" aria-haspopup="true" aria-expanded="false">Moto Gp</a> 
              </li>


             
            </ul>

            <ul class="nav navbar-nav navbar-right toolbar">
				<li><a href=" <?php echo base_url()?>authuser/login">Login</a></li>
				<li><a href="<?php echo base_url();?>authuser/register" >Register</a></li>
				
				</li>				
            </ul>
            			
            <?php }?>
 -->
 		<ul class="nav navbar-nav">
              
              <li class="active ">
                <a href=" <?php echo base_url();?>" role="button" aria-haspopup="true" aria-expanded="false">Home </a> 
              </li>

               <li class="active ">
                <a href=" <?php echo base_url();?>article/category/sepakbola " role="button" aria-haspopup="true" aria-expanded="false">Sepak Bola </a> 
              </li>

               <li class="active ">
                <a href=" <?php echo base_url();?>article/category/basket " role="button" aria-haspopup="true" aria-expanded="false">Basket</a> 
              </li>

               <li class="active ">
                <a href=" <?php echo base_url(); ?>article/category/bulutangkis " role="button" aria-haspopup="true" aria-expanded="false">Raket</a> 
              </li>

              <li class="active ">
                <a href=" <?php echo base_url(); ?>article/category/f1 " role="button" aria-haspopup="true" aria-expanded="false">Formula 1</a> 
              </li>

              <li class="active ">
                <a href=" <?php echo base_url(); ?>article/category/motogp " role="button" aria-haspopup="true" aria-expanded="false">Moto Gp</a> 
              </li>


             
            </ul>
   

          </div>
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
	<!-- <footer> -->
	
	<!-- FOOTER BAR -->
	<!-- <div class="container-fluid section-footer-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xs-6">Portofolio Aan</div>
				<div class="col-md-6 col-xs-6"><span class="pull-right">Belajar</span></div>
			</div>
		</div>
	</div>
	</footer> -->

    <script src="<?php echo base_url();?>assets/frontend/js/jquery-1.11.2.min.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/js/bootstrap.min.js"></script>
  </body>

</html>