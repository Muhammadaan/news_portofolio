<script src='https://www.google.com/recaptcha/api.js'></script>

<div class="row">

				<div class="col-md-2"></div>
				<div class="col-md-8">
                   


					<p align="center"> Form Change Password </p>

                        <?php if(isset($success_message)): ?>
                      <div class="alert alert-success" id="success-alert" >
                      <button type="button" class="close" data-dismiss="alert">&times;</button> 
                        <?php echo $success_message ?>  
                      </div>
                    <?php endif; ?>


                        <?php if(isset($error_message)): ?>
                      <div class="alert alert-success" id="success-alert" >
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?php echo $error_message ?>  
                      </div>
                    <?php endif; ?>

					<form class="form-horizontal" id="form" method="post">
					  <div class="form-group">
						<label >Email</label>
						<div>
						  <input type="email" class="form-control" id="email" placeholder="Email" name="email" >
						</div>
						<p class="help-block error_dup" style="color:blue; display:none"></p>
					  </div>
					 

					  <button type="submit" class="btn btn-primary submit">Submit</button>
					</form>
                
				</div>

				<div class="col-md-2"></div>

</div>
