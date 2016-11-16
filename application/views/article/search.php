
	
		
		
		
		<div class="row">
			<div class="col-md-12 section-block-medium three-horizon-post">
				<div class="row">
					<!-- Box -->
					<?php foreach ($search as $list): ?>
						
				
					<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="post post-spacer">
						<div class="entry-header">
							<?php if($list->image){  ?>
						<img src=" <?php echo base_url().$list->image?>" class="img-responsive" alt="Lazy"> 
						<?php } else {  ?>
						<img src=" <?php echo base_url()?>assets/frontend/img/a.jpg" class="img-responsive" alt="Lazy"> 
						<?php } ?>
							<!-- Post content -->
							<div class="post-content">
								<h2 class="entry-title">
									<a href="#category" class="caticon"><i></i><span class="tech"></span> <?php echo $list->namecategory; ?> </a>
									<a href=" <?php echo base_url()."article/detail/".$list->slug?> " class="title">  <?php echo $list->title; ?></a>
								</h2>
							</div>
						</div>
					</div>
					</div>
						<?php endforeach ?>
					<!-- Box -->
					
					<!-- Box -->
					

				</div>
			</div>
			<div class="clearfix visible-xs-block"></div>
		</div>
		
		

				<p align="center"> <?php echo $halaman;?>  </p>	
	