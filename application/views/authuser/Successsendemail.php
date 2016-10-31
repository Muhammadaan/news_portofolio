                    <?php if(isset($success_message)): ?>
                      <div class="alert alert-success" id="success-alert" >
                      <button type="button" class="close" data-dismiss="alert">&times;</button> 
                        <?php echo $success_message ?>  
                      </div>
                    <?php endif; ?>


                        <?php if(isset($error_message)): ?>
                      <div class="alert alert-success" id="success-alert" >
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?php echo $error_message ?>  
                      </div>
                    <?php endif; ?>