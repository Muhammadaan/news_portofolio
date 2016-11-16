  <!-- Main content -->
  
    <section class="content">
      <div class="row">
       
        <div class="col-xs-12">
          

      <div class="box">


            <div class="box-header">
              <h3 class="box-title">List Account </h3>
            </div>
           
            

            <?php if(isset($success_message)): ?>
          <div class="alert alert-success" id="success-alert" >
            <?php echo $success_message ?>  
          </div>
        <?php endif; ?>


          
            <!-- /.box-header -->
            <div class="box-body">


           <p align="left">
              <a href=" <?php echo base_url();?>backend/ads/add ">
                <button class="btn btn-primary btn-flat">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add
                </button>
               </a>
            </p>  
              <table id="datatables1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Title</th>
                  <th>Type</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                        $no = 1;
                        foreach ($ads as $ad) {
                        
                     ?>
                     <tr>
                     <td><?php echo $no; ?></td>
                     <td><?php echo $ad->title;?></td>
                     <td><?php echo $ad->type;?></td>
                     <td>
                     <?php 
                    echo (!empty($ad->image)) ? "<img src='".base_url($ad->image)."' style = 'width:120px; height:120px;' >" : "<img src='".base_url('assets/frontend/img/404.jpg')."' style = ' width:120px; height:120px;' />"; 
                ?>
                    </td>
                    <td><?php echo $ad->status;?></td>


                     
                     <td>
                        <a href="<?php echo base_url().'backend/ads/edit/'.to_Encrypt($ad->id); ?>" class="btn ink-reaction btn-flat btn-primary active" data-toggle="tooltip" data-placement="top" data-original-title="Edit <?php echo $ad->title; ?>">
                        Edit  <i class="fa fa-edit  fa-lg"></i>
                        </a>
                          <a href="<?php echo base_url().'backend/ads/delate/'.to_Encrypt($ad->id); ?>" class="btn ink-reaction btn-flat btn-primary active" data-toggle="tooltip" data-placement="top" data-original-title="Delate <?php echo $ad->title; ?>">
                        Delate  <i class="fa fa-trash  fa-lg"></i>
                        </a>
                        
                         

                     </td>
                     </tr>
                     <?php $no++; }  ?>




                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>status</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

 <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/js/jquery-1.11.2.min.js" ></script>
    <script type="text/javascript">
        $("#success-alert").fadeTo(1000, 1000).slideUp(1000, function(){
        $("#success-alert").alert('close');
    });
</script>