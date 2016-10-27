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



              <h3 class="box-title">Update Accounts <?php echo isset($single['name']) ? $single['name'] : ''; ?> </h3>
            </div>
             <form role="form" method="POST" id="form" class="form">
              <div class="box-body">
                <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required data-rule-minlength="2" value="<?php echo isset($single['name']) ? $single['name'] : ''; ?>">
                
                </div>
              <div class="form-group">
                <label>
                  <input type="checkbox" class="minimal-red" name="status"<?php if( $single['status'] =='active') echo "checked"; ?>  >
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
 