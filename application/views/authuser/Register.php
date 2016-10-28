<script src='https://www.google.com/recaptcha/api.js'></script>

<div class="row">

				<div class="col-md-2"></div>
				<div class="col-md-8">

					<p align="center"> Form Register </p>
					<form class="form-horizontal" id="form">
					  <div class="form-group">
						<label >Name</label>
						<div >
						  <input type="text" class="form-control" placeholder="Name" name="name">
						</div>
					  </div>
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
						  <p class="help-block min_pass" style="color:blue; display:none"></p>

					  </div>
					  <div class="form-group">
						<label >Confirm Password</label>
						<div ">
						  <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="confirm_password" >
						</div>

						 <p class="help-block error_pass" style="color:blue; display:none"></p>
					  </div>

					<div class="form-group">
                		<?php echo $captcha?>
            		</div>


					  <button type="submit" class="btn btn-primary submit">Register</button>
					</form>
				</div>
				
				<div class="col-md-2"></div>

</div>


<script type="text/javascript" src="<?php echo base_url();?>assets/frontend/js/jquery-1.11.2.min.js" ></script>   
<script type="text/javascript">
    $(document).ready(function(){
        
        $(document).on('blur, change', '#email', function(){
            $.ajax({
                url     : "<?php echo base_url();?>authuser/checkemail",
                type    : 'POST',
                data    : 'email='+$(this).val(),
                dataType: 'JSON',
                beforeSend: function()
                {
                },
                success: function(data)
                {
                    $('.error_dup').html(data.message);
                    $('.error_dup').show();
                    if(data.status){
                        $('#form').find('.submit').attr('disabled', false);
                    }else{
                        $('#form').find('.submit').attr('disabled', true);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error');
                }         
            });
            return false;
        });

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



        $(document).on('change', '#password', function(){
            var cpass   = $(this).val().length;
            if(cpass <= 8){
                $('.min_pass').show();
                $('.min_pass').html('Short passwords are easy to guess. Try one with at least 8 characters.');

                $('#form').find('.submit').attr('disabled', true);
            }else{
                $('.min_pass').hide();
                $('.min_pass').html('');
                $('#form').find('.submit').attr('disabled', false);
            }
        });



        
    })  
</script>