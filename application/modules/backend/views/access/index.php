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
              <a href=" <?php echo base_url();?>backend/access/add ">
                <button class="btn btn-primary btn-flat">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add
                </button>
               </a>
            </p>  
              <table id="datatables1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Level Access</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                        $no = 1;
                        foreach ($access as $ac) {
                        
                     ?>
                     <tr>
                     <td><?php echo $no; ?></td>
                     <td><?php echo $ac->name;?></td>
                     <td><?php echo $ac->hak_akses;?></td>
                    
                       <td>
                        <a href="<?php echo base_url().'backend/access/edit/'.to_Encrypt($ac->id); ?>" class="btn ink-reaction btn-flat btn-primary active" data-toggle="tooltip" data-placement="top" data-original-title="Edit <?php echo $ac->name; ?>">
                        Edit  <i class="fa fa-edit  fa-lg"></i>
                        </a>
                          <a href="<?php echo base_url().'backend/access/delate/'.to_Encrypt($ac->id); ?>" class="btn ink-reaction btn-flat btn-primary active" data-toggle="tooltip" data-placement="top" data-original-title="Delate <?php echo $ac->name; ?>">
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