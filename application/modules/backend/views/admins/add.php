  <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
 			<div class="box">
            <div class="box-header">

                <?php if (isset($message_error) ) { ?>
                    <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php echo $message_error;?>
                    </div>            
                <?php } ?>



              <h3 class="box-title">Add Accounts</h3>
            </div>
             <form role="form" method="POST" id="form" class="form">
              <div class="box-body">
                <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" data-rule-minlength="2">
                
                </div>
                <div class="form-group">
                  <label >Email</label>
                  <p class="help-block error_dup" style="color:blue; display:none"></p>
                 <input type="email" class="form-control" id="email" name="email" >
                </div>
                <div class="form-group">
                  <label >Password</label>
                  <p class="help-block min_pass" style="color:blue; display:none"></p>
                  <input type="password" class="form-control pass" id="pwd" name="pwd" data-rule-minlength="6">
                </div>
                 <div class="form-group">
                  <label >Confirm Password</label>
                   <p class="help-block error_pass" style="color:blue; display:none"></p>
                 <input type="password" class="form-control pass" id="cpwd" name="cpwd"  data-rule-minlength="6">
                   
                </div>

                <div class="form-group">
                <label>
                  <input type="checkbox" class="show" name="status">
                    <span>Show Password</span>
                  
                </label>
              </div>

              <div class="form-group">
                <label>
                  <input type="checkbox" class="minimal" name="status">
                    <span>Active Admins</span>
                  
                </label>
              </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary submit">Submit</button>
                <button type="reset" class="btn btn-primary reset">Reset</button>              
                <a href=" <?php echo base_url();?>backend/admins"> <button type="button" class="btn btn-primary ">Back</button></a>
              </div>
            </form>
          
            <!-- /.box-header -->
            <div class="box-body">
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
 <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/js/jquery-1.11.2.min.js" ></script>   
<script type="text/javascript">
    $(document).ready(function(){
        
        
        $(document).on('blur, change', '#email', function(){
            $.ajax({
                url     : "<?php echo base_url();?>backend/admins/check_email_admins",
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
                    alert('Error adding / update data');
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


        $(document).on('click','.show',function () {

          if ( $(this).is (':checked')) {
              $('.pass').attr('type', 'text');
          } else{
             $('.pass').attr('type', 'password');
          }
          
        });


        $(document).on('change', '#cpwd', function(){
            var pass    = $('#pwd').val();
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



        $(document).on('change', '#pwd', function(){
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