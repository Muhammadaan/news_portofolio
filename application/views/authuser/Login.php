<script src='https://www.google.com/recaptcha/api.js'></script>

<div class="row">

				<div class="col-md-2"></div>
				<div class="col-md-8">
                   


					<p align="center"> Form Register </p>

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
					  <div class="form-group">
						<label >Password</label>
						<div >
						  <input type="password" class="form-control" id="password" placeholder="Password" name="password" >
						</div>
						 

					  </div>
					  <div class="form-group">
						<label >Confirm Password</label>
						<div ">
						  <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="confirm_password" >
						</div>

						 <p class="help-block error_pass" style="color:blue; display:none"></p>
					  </div>

					  <button type="submit" class="btn btn-primary submit">Login</button>

					</form>
                <a href=" <?php echo base_url()?>authuser/forgot" class="btn btn-link">Forgot Password</a>
                
				</div>

				<div class="col-md-2"></div>

</div>


<script type="text/javascript" src="<?php echo base_url();?>assets/frontend/js/jquery-1.11.2.min.js" ></script>   
<script type="text/javascript">

    $(document).ready(function(){
        
        $(document).on('click', '.reset', function(){
            $('.error_dup').hide();
            $('.error_pass').hide();
            $('.error_dup').html('');
            $('.error_pass').html('');
            $('#form').find('.submit').attr('disabled', false);
        });

        $(document).on('change', '#confirm_password', function(){
            var pass    = $('#password').val();
            var cpass   = $(this).val();
            if(pass != cpass){
                $('.error_pass').show();
                $('.error_pass').html('These passwords dont match Try again?');

                $('#form').find('.submit').attr('disabled', true);
            }else{
                $('.error_pass').hide();
                $('.error_pass').html('');
                $('#form').find('.submit').attr('disabled', false);
            }
        });



     


        
    })  
</script>