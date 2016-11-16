

	<div class="container">
	<br><br><br>

		<div class="row">
			<div class="col-md-12">
				<p align="center"> Cari Berita Olaraga</p>
			

				<form method="POST" action="<?php echo base_url();?>article/search">
					<div class=" form-group">
						<input type="tex" name="cari" class="form-control">
					</div>
					<p align="center">
					<button type="submit" class="btn btn-primary"> Cari </button>
					</p>
				</form>

			</div>

		</div>

	</div>
	
		
			
		
		
		
			
	<div class="container">
		<div class="row">
			<section class="col-lg-9 col-md-12 section-block-v1">
			
			<div class="row">
				<!-- THUMB LARGE -->
				
				<!-- THUMBS MEDIUM -->
				<div class="col-md-4 thumb-medium">
					<div class="row">
						<!-- POST -->
						<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
						<div class="headline-row">
						<h1 class="section-title caticon sbx"><i>N</i><span class="news"></span>Formula 1</h1>
							</div>

							<?php foreach ($f1 as $list): 
							$date=date_create($list->created_at);
							?>
						<article class="post post-spacer">
							<div class="entry-header">
								<img class="img-responsive" src="<?php echo base_url().$list->image?>" alt="Post img">
								<!-- Post content -->
								<div class="post-content">
									<div class="entry-title">
										
										<h3><a href=" <?php echo base_url()."article/detail/".$list->slug; ?> " class="title"> <?php echo $list->title; ?>  </a></h3>
										<a href="#category" class="caticon"><i class="date-icon icon-clock"></i><span class="news"></span><?php echo date_format($date,"d  M  Y") ; ?></a>
									</div>
								</div>
							</div>
						</article>

						<?php endforeach ?>


						</div>
						<!-- POST -->
						
						<!-- END -->
					</div>
				</div>

				<div class="col-md-4 thumb-medium">
					<div class="row">
						<!-- POST -->
						<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
						<div class="headline-row">
						<h1 class="section-title caticon sbx"><i>N</i><span class="news"></span>Moto GP</h1>
							</div>


							<?php foreach ($motogp as $list):
							$date=date_create($list->created_at);
							 ?>
								
							

						<article class="post post-spacer">
							<div class="entry-header">
								<img class="img-responsive" src="<?php echo base_url().$list->image?>" alt="Post img">
								<!-- Post content -->
								<div class="post-content">
									<div class="entry-title">
										
										<h3><a href="<?php echo base_url()."article/detail/".$list->slug; ?>" class="title"><?php echo $list->title; ?>  </a></h3>
										<a href="#category" class="caticon"><i class="date-icon icon-clock"></i><span class="news"></span><?php echo date_format($date,"d  M  Y") ; ?></a>
									</div>
								</div>
							</div>
						</article>

						<?php endforeach ?>
						</div>
					</div>
				</div>




				<div class="col-md-4 thumb-medium">
					<div class="row">
						<!-- POST -->
						<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
						<div class="headline-row">
						<h1 class="section-title caticon sbx"><i>N</i><span class="news"></span>Sepak Bola</h1>
							</div>


							<?php foreach ($sepakbola as $list):
							$date=date_create($list->created_at);
							 ?>
								
							

						<article class="post post-spacer">
							<div class="entry-header">
								<img class="img-responsive" src="<?php echo base_url().$list->image?>" alt="Post img">
								<!-- Post content -->
								<div class="post-content">
									<div class="entry-title">
										
										<h3><a href="<?php echo base_url()."article/detail/".$list->slug; ?>" class="title"> <?php echo $list->title; ?> </a></h3>
										<a href="#category" class="caticon"><i class="date-icon icon-clock"></i><span class="news"></span> <?php echo date_format($date,"d  M  Y") ; ?> </a>
									</div>
								</div>
							</div>
						</article>

						<?php endforeach ?>

					

						


						</div>
						<!-- POST -->
						
						<!-- END -->
					</div>
				</div>


			</div>
			
				
			<!-- THUMBS MEDIUM with content-->
			
			</section>
			
			<!-- SIDEBAR -->
			<aside>
			<div class="col-lg-3 hidden-md hidden-sm hidden-xs sidebar-trending">
				<div class="headline-row">
					<h1 class="section-title caticon sbx"><i>T</i><span class="sidebar-trending"></span>Latets news</h1>
				</div>
				
				<ul class="media-list">
					
				<?php foreach ($latest as $list):
				$date=date_create($list->created_at);
				 ?>
					
				

					<li class="media sidebar-post-spacer">
						<div class="media-body">
						  <h4 class="media-heading"><a href=" <?php echo base_url()."article/detail/".$list->slug ; ?> "> <?php echo $list->title ; ?></a></h4>
						  <a href="#category" class="caticon"><i class="caticon date-icon icon-clock"></i><span class="sidebar-trending"></span> <?php echo date_format($date,"d  M  Y") ; ?> </a>
						</div>
					</li>
				<?php endforeach ?>
				</ul>
			</div>
			</aside>
			<!-- END SIDEBAR -->
		</div>
	</div>
	
	<!-- BANNER -->	
	<div class="container">
		<div class="row">
			<section class="col-lg-12 hidden-xs hidden-sm hidden-m section-banner">
			
				
				<img src="<?php echo base_url()?>assets/frontend/img/banner-full.jpg" class="img-responsive center-block" alt="Banner">
			</section>
			
			<section class="col-sm-12 hidden-md hidden-lg">
				
				<img src="<?php echo base_url()?>assets/frontend/img/banner-res1.jpg" class=" center-block" alt="Banner">
			</section>
			
		</div>
	</div>
		
	<div class="container">
	
	
		<div class="row">
			<section class="col-md-12 section-block-v4">
				<div class="row">
					
					<div class="col-md-6 thumb-medium-with-content postlist">	
						<!-- Post -->
						<h1 class="section-title caticon sbx"><i>G</i><span class="gastro"></span>Basket</h1>

						<?php foreach ($basket as $list):
						$date=date_create($list->created_at);

						?>
							
						

						<article class="post post-spacer">
							<div class="entry-header">
								<img class="img-responsive" src="<?php echo base_url().$list->image?>" alt="Post img">
							</div>
							<div class="post-txt">
								
								<h3><a href=" <?php echo base_url().'article/detail/'.$list->slug; ?>  " class="title"> <?php echo $list->title; ?> </a></h3>
								<a href="#category" class="caticon icon-space-medium"><i class="icon-clock"></i><span class="gastro"></span><?php echo date_format($date,"d  M  Y") ; ?></a>
								<p class="hidden-xs"> <?php
														$desc = $list->description;
					      								if (strlen($desc) > 150)
					      								 $desc = substr($desc, 0, 100) . ' ...';
					      								echo $desc;				
													?> </p>
							</div>
						</article>
						
						<?php endforeach ?>
						
						<!-- END -->
					</div>



					<div class="col-md-6 thumb-medium-with-content postlist">	
					<h1 class="section-title caticon sbx"><i>G</i><span class="gastro"></span>Raket</h1>
						<!-- Post -->

						<?php foreach ($bulutangkis as $list): 
						$date=date_create($list->created_at);


						?>
							
						
						
						<article class="post post-spacer">
							<div class="entry-header">
								<img class="img-responsive" src="<?php echo base_url().$list->image?>" alt="Post img">
							</div>
							<div class="post-txt">
								
								<h3><a href=" <?php echo base_url().'article/detail/'.$list->slug?> " class="title"> <?php echo $list->title; ?> </a></h3>
								<a href="#category" class="caticon icon-space-medium"><i class="icon-clock"></i><span class="gastro"></span><?php echo date_format($date,"d  M  Y") ; ?></a>
								<p class="hidden-xs"><?php
														$desc = $list->description;
					      								if (strlen($desc) > 150)
					      								 $desc = substr($desc, 0, 100) . ' ...';
					      								echo $desc;				
													?>
														
													</p>
							</div>
						</article>
						
						<?php endforeach ?>
						
						
					</div>

				</div>

			</section>	
		</div>		
	</div>
	
	
	

	
		
	
	
	