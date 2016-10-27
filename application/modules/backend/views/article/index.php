  <!-- Main content -->
    <section class="content">
      <div class="row">
       
        <div class="col-xs-12">
          

 			<div class="box">


            <div class="box-header">
              <h3 class="box-title">List Account </h3>
            </div>
           
          <!--   

            <?php if(isset($success_message)): ?>
          <div class="alert alert-success" id="success-alert" >
            <?php echo $success_message ?>  
          </div>
        <?php endif; ?> -->


          
            <!-- /.box-header -->
            <div class="box-body">


           <p align="left">
            	<a href=" <?php echo base_url();?>backend/article/add ">
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
                  <th>Write By</th>
                  <th>Description</th>
                  <th>Tags</th>
                  <th>Vidio Url</th>
                  <th>Vidio Category</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                        $no = 1;
                        foreach ($article as $art) {
                        
                     ?>
                     <tr>
                     <td><?php echo $no;?></td>
                     <td>
                        <?php  
                            $ttl = $art->title;
                            if (strlen($ttl) > 10 ) $ttl = substr($ttl,0,15) . '...';
                            echo $ttl ;
                         ?>

                     </td>
                     <td><?php echo $art->write_by;?></td>
                     <td>
                         <?php 
                            $desc = $art->description;
                            if( strlen($desc) > 10 ) $desc = substr($desc,0,15) .'...'; 
                          ?>
                     </td>
                    
                     <td>
                         <?php ?>
                     </td>


                     <td><?php echo $admin->email;?></td>
                     <td>
                        <a href="<?php echo base_url().'backend/admins/edit/'.to_Encrypt($admin->id); ?>" class="btn ink-reaction btn-flat btn-primary active" data-toggle="tooltip" data-placement="top" data-original-title="Edit <?php echo $admin->name; ?>">
                        Edit  <i class="fa fa-edit  fa-lg"></i>
                        </a>
                          <a href="<?php echo base_url().'backend/admins/delate/'.to_Encrypt($admin->id); ?>" class="btn ink-reaction btn-flat btn-primary active" data-toggle="tooltip" data-placement="top" data-original-title="Delate <?php echo $admin->name; ?>">
                        Delate  <i class="fa fa-trash  fa-lg"></i>
                        </a>
                        
                         

                     </td>
                     </tr>
                     <?php $no++; }  ?>




                </tbody>
                
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