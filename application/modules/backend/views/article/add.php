
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



              <h3 class="box-title">Add Article </h3>
            </div>
             <form role="form" method="POST" id="form" class="form" novalidate="novalidate" method="POST" id="form" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" id="title" name="title" data-rule-minlength="2">
                </div>
                <div class="form-group">
                  <label>Write By</label>
                 <input type="text" class="form-control" id="write_by" name="write_by" >
                </div>
                
              
              <div class="form-group" >
                <label>Description</label>
                <textarea class="form-control ckeditor" id="description" name="description" data-rule-minlength="5" rows="4" ></textarea>
              </div>
              
                <div class="form-group">
                  <label>Tags</label>
                 <input type="text" class="form-control" id="tags" name="tags" >
                </div>
                <div class="form-group">
                  <label>Kategori</label>
                 <input type="text" class="form-control" id="kategori" name="kategori" >
                </div>
                 <div class="form-group">
                  <label>Vidio Url</label>
                 <input type="text" class="form-control" id="vidio_url" name="vidio_url" >
                </div>
              <div class="form-group">
                <label>
                  <input type="checkbox" class="minimal" name="status">
                    <span>Active Admins</span>
                  
                </label>
              </div>

             <div class="form-group">
                <div class="placeimage">
                  <span class="file-input btn btn-file photos">
                  
                    <img class="border-white border-xl img-responsive auto-width" src="<?php echo base_url() ?>assets/backend/img/balloon.jpg" alt="" style="width:600px; height:320px;">
                    <input type="file" name="image[]" class="attach" multiple>
                  </span>
                    <a href="#" class="deleted-btn"><i class="fa fa-times"></i></a>
                  
                </div>
                
                  <a type="button" class="btn ink-reaction btn-raised btn-primary moreimage">Add Image</a>
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

<script type="text/javascript" src="<?php echo base_url();?>assets/frontend/js/jquery-1.11.2.min.js" ></script><script type="text/javascript">
$('.moreimage').on('click', function(){
      $('.placeimage').append('<span class="file-input btn btn-file photos">'+
                    
                    '<img class="border-white border-xl img-responsive auto-width" src="<?php echo base_url() ?>assets/backend/img/balloon.jpg" alt="" style="width:600px; height:320px;">'+
                    '<input type="file" name="image[]" multiple class="attach">'+
                    '<div class="form-group"  style="width:600px;text-align:left;">'+
                   
                  '</div>'+
                  '</span>'
                  +'<a href="#" class="deleted-btn"><i class="fa fa-times"></i></a>'
                  )
    });

    $(document).on('change','.attach',function(){
        var el = $(this).siblings('img');
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return;
        if (/^image/.test( files[0].type)){ 
                var reader = new FileReader(); 
                reader.readAsDataURL(files[0]);
                reader.onloadend = function(){ 
                    el.attr("src",this.result);
        }
        }
    });

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

</script>

