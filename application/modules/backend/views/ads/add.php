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
          <form class="form form-validate floating-label" novalidate="novalidate" method="POST" id="form" enctype="multipart/form-data">

              <div class="box-body">


              <div class="form-group">
                  <input type="text" class="form-control" id="title" name="title" required data-rule-minlength="2" value="<?php echo isset($_POST['title']) ? $_POST['title'] : ''; ?>">
                  <label for="title">Title</label>
                </div>
                <div class="form-group" id="place_image" style="display: none;">
                            <img src="" id="image_category" style="width: 600px;height: 300px;">
                        </div>

                        <div class="form-group">
                            <a class="btn btn-primary" id="btn_choose_image" onclick="$('#choose_image').click();">Choose Image</a>
                            <input style="display: none;" type="file" id="choose_image" name="image"></input>
                        </div>
              <div class="form-group">
                  <input type="text" class="form-control" id="type" name="type" data-rule-minlength="2" value="<?php echo isset($_POST['type']) ? $_POST['type'] : ''; ?>">
                  <label for="title">Type</label>
              </div>

                <div class="form-group">
                  <div class="checkbox checkbox-styled">
                    <label>
                      <select name="status" class="form-control">
                      <option value="">-Choose Status-</option>
                      <option value="active">Active</option>
                      <option value="nonactive">Non-Active</option>
                      </select>
                    </label>
                  </div>
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
    
    
    $(document).on('change','#choose_image',function(){
        var el = $("#image_category");
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return;
            if (/^image/.test( files[0].type)){ 
                var reader = new FileReader(); 
                reader.readAsDataURL(files[0]);
                reader.onloadend = function(){ 
                    el.attr("src",this.result);
                    $('#place_image').show();
                }
            }
      });
    
  })  
</script>