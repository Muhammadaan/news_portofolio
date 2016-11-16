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
              <h3 class="box-title">Add Article </h3>
            </div>
              <form class="form form-validate floating-label" novalidate="novalidate" method="POST" id="form" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" id="title" name="title" data-rule-minlength="2" value=" <?php echo  isset($_POST['title']) ? $_POST['title'] : '';?> " >
                </div>
                <div class="form-group">
                  <label>Write By</label>
                 <input type="text" class="form-control" id="write_by" name="write_by"  >
                </div>                   
              <div class="form-group" >
                <label>Description</label>
                <textarea class="form-control ckeditor" id="description" name="description" data-rule-minlength="5" rows="4" ><?php echo  isset($_POST['description']) ? $_POST['description'] : ''; ?>
                  
                </textarea>
              </div>
                <div class="form-group">
                  <label>Tags</label>
                 <input type="text" class="form-control" id="tags" name="tags" >
                </div>
                <div class="form-group">
                  <label>Categori</label>
                  <select class="form-control" name="category" id="category" >
                        <option value="" > Choose Category  </option>
                            <?php foreach ($categorys as $cat): ?>

                                <option value=" <?php echo$cat->id;?>">
                                        <?php echo $cat->name  ; ?>
                                 </option>
                                
                            <?php endforeach ?>
                  </select>
                </div>
                 <div class="form-group">
                  <label>Vidio Url</label>
                 <input type="text" class="form-control" id="vidio_url" name="vidio_url" >
                </div>
              <div class="form-group">
                <label>
                  <input type="checkbox" class="minimal" name="status">
                    <span>Active Article</span>
                  
                </label>
              </div>

             <div class="form-group" id="place_image" style="display: none;">
                            <img src="" id="image_category" style="width: 600px;height: 300px;">

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
      </div>
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

