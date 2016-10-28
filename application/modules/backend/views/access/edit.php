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



              <h3 class="box-title">Update Accesss  <?php echo isset($akses['name']) ? $akses['name'] : ''; ?></h3>
            </div>
             <form role="form" method="POST" id="form" class="form">
              <div class="box-body">
                <div class="form-group">
                <label for="name">Name</label>
                  <select id="name" name="name" class="form-control"  >
                    <option value=""></option>
                    <?php 
                    $id = $akses["id_level"];
                    foreach ($view as $us): ?>
                    <option value=" <?php echo $us->id?>"<?php echo $us->id == $id ? 'selected="selected"' : ''   ?> > <?php echo $us->name;?> </option>
                    <?php endforeach ?>

                  </select>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="hak_access"><?php echo$akses['hak_akses'] ; ?>
                  </textarea>  
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary submit">Submit</button>
                <button type="reset" class="btn btn-primary reset">Reset</button>              
                <a href=" <?php echo base_url();?>backend/category"> <button type="button" class="btn btn-primary ">Back</button></a>
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
