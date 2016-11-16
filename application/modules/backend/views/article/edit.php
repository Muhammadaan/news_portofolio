
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



              <h3 class="box-title">edit Article </h3>
            </div>
             <form role="form" method="POST" id="form" class="form" novalidate="novalidate" method="POST" id="form" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" id="title" name="title" data-rule-minlength="2" value="<?php echo isset($article['title']) ? $article['title'] : ''; ?>">
                </div>
                <div class="form-group">
                  <label>Write By</label>
                 <input type="text" class="form-control" id="write_by" name="write_by" value="<?php echo isset($article['write_by']) ? $article['write_by'] : ''; ?>" >
                </div>
                
              
              <div class="form-group" >
                <label>Description</label>
                <textarea class="form-control ckeditor" id="description" name="description" data-rule-minlength="5" rows="4" value ><?php echo isset($article['description']) ? $article['description'] : ''; ?> </textarea>
              </div>
              
                <div class="form-group">
                  <label>Tags</label>
                 <input type="text" class="form-control" id="tags" name="tags"  value=" <?php echo isset($article['tags']) ? $article['tags'] : ''; ?> " >
                </div>
                <div class="form-group">
                  <label>Categori</label>
                  
                 <select class="form-control" id="category" name="category">
                              <option value="">Choose Category</option>
                              <?php
                      $levels = $article['category_id'];
                      foreach($categorys as $us):
                    ?>
                                    <option value="<?php echo $us->id; ?>" <?php echo $us->id == $levels ? 'selected="selected"' : '' ?> ><?php echo ucwords(str_replace("-", " ", $us->name)); ?></option>
                                    <?php
                               endforeach;
                                ?>
                            </select>





                </div>
                 <div class="form-group">
                  <label>Vidio Url</label>
                 <input type="text" class="form-control" id="vidio_url" name="vidio_url" value=" <?php echo isset($article['vidio_url']) ? $article['vidio_url'] : ''; ?> " >
                </div>
              <div class="form-group">
                <label>
                  <input type="checkbox" class="minimal" name="status" <?php if( $article['status'] == 'active') echo "checked";  ?>  >
                    <span>Active Article</span>
                  
                </label>
              </div>

            <div class="form-group" id="place_image">

                <?php
                  if ($article['image'] == "") {
                ?>  <script>
                    $('#place_image').hide();
                            $('#btn_choose_image').html('Update Image');
                          </script>
                        <?php   
                            }else{
                        ?>
                          <script>
                              $('#place_image').show();
                            $('#btn_choose_image').html('Update Image');
                             </script>

                        <?php
                            } 
                ?>

                            <img src="<?php echo base_url(isset($article['image']) ? $article['image'] : '')?>" id="image_category" style="width: 600px; height:300px;" name="">
                        </div>
                        <div class="form-group">
                            <a class="btn btn-primary" id="btn_choose_image" onclick="$('#choose_image').click();">Choose Image</a>
                            <input style="display: none;" type="file" id="choose_image" name="image"></input>
                        </div>


              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary submit">Submit</button>
                <button type="reset" class="btn btn-primary reset">Reset</button>              
                <a href=" <?php echo base_url();?>backend/article"> <button type="button" class="btn btn-primary ">Back</button></a>
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

<script type="text/javascript" src="<?php echo base_url();?>assets/frontend/js/jquery-1.11.2.min.js" ></script><script type="text/javascript">


     

    $(document).on('click','.deleted-btn', function(){
      $(this).parent().remove();
      return false;
    });


    $(function () {
            $('.datepicker').datetimepicker({
           format: 'YYYY-MM-DD HH:mm:ss A',
          
      });
        });
    
    $(document).on('click', '.reset', function(){
        $('.error_dup').hide();
        $('.error_pass').hide();
        $('.error_dup').html('');
      $('.error_pass').html('');
      $('#form').find('.submit').attr('disabled', false);
    });

    $('#name_img').attr('required');

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

</script>

