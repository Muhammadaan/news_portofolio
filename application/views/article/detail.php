<div class="container">
		<div class="row">
		<section class="col-md-12 col-sm-12 section-main-content">

		

		<ol class = "breadcrumb">
			<li><a href = " <?php echo base_url();?> ">Home</a></li>
			<li><a href = "#"> <?php echo $article['namecategory']; ?> </a></li>
			<li class = "active"><?php echo $article['title']; ?> </li>
		</ol>
	
					
		<div class="row">
			<section class="col-lg-12 col-md-12 section-single">
				
				<a href="#category" class="caticon single-post"><i>T</i><span class="tech"></span> <?php echo $article['namecategory']; ?> </a>
				<h1 class="section-title sbx">  <?php echo $article['title'] ;?> </h1>
				<img src=" <?php echo base_url().$article['image']; ?> " class="img-responsive gap-bottom" alt="#" style="width: 1240px;height: 500px;">
				
				<!-- HEADLINE -->
				
				<span class="date-icon icon-clock">  </span>
				<?php 

				$date= date_create($article['created_at']);
				// $date= $article['created_at'];

				echo date_format( $date,"d-Y-M" );

				 ?>

				<a href="#" class="date-icon icon-rss"> <?php echo $article['write_by']; ?> </a>
				<a href="#" class="date-icon icon-rss"> <?php echo $article['count_read']; ?> </a>


				<p> <?php echo $article['description']; ?> </p>
			</section>
			
			
			
			<section class="col-md-12 section-tags">
			
				<!-- HEADLINE -->
				<div class="headline-row">
					<h1 class="section-title caticon sbx"><i>T</i><span class="sport"></span>Tags</h1>
				</div>
				
				<ul class="post-tags">
					<li><a href="#"> <?php echo $article['tags']; ?> </a></li>
					
				</ul>
				
			
			</section>
			
			
			
			<section class="col-md-12 section-post-related">
			
				<!-- HEADLINE -->
				<div class="headline-row">
					<h1 class="section-title caticon sbx"><i>T</i><span class="sport"></span>Related Posts</h1>
				</div>
				
				<div class="row thumb-medium-with-content">
					<!-- Post -->
					<article class="col-md-12 col-sm-12 col-xs-12 post post-spacer">
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<div class="entry-header">
								<img class="img-responsive" src="img/middle-post-thumb1.jpg" alt="Post img">
							</div>
						</div>
						<div class="col-md-8 col-sm-8">
							<div class="post-txt">
								
								<h3><a href="#link" class="title">Extreme Bike Ride in Ecuador Mountains</a></h3>
								<a href="#category" class="caticon icon-space-medium"><i class="icon-clock"></i><span class="sport"></span>25 January, 2015</a>
								<p class="hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</p>	
							</div>
						</div>
					</div>
					</article>
					
					
					
				<!-- END -->
				</div>
			</section>
			
			
			
			<section class="col-md-12 section-post-comment">
			
			
			<!-- HEADLINE -->
			<div class="headline-row">
				<h1 class="section-title caticon sbx"><i>C</i><span class="sport"></span>Comments</h1>
			</div>
				
				
			<div class="row">
				<div class="col-md-8">
					<form class="form-horizontal">
					  <div class="form-group">
						<label class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" placeholder="Email">
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputFullname" class="col-sm-2 control-label">Full name</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" id="inputFullname" placeholder="Full Name">
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputPassword" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
						  <textarea class="form-control" rows="3"></textarea>
						</div>
					  </div>
					  <button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
				
				<div class="col-md-4"></div>
			</section>
			
			</div>
		</section>
		
		</div>
	</div>
