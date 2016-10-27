<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>News</title>
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="stylesheet" href=" <?php echo base_url();?>assets/backend/css/bootstrap.min.css">
  <link rel="stylesheet" href=" <?php echo base_url();?>assets/backend/css/font-awesome.min.css">
  <link rel="stylesheet" href=" <?php echo base_url();?>assets/backend/css/AdminLTE.min.css">
  <link rel="stylesheet" href=" <?php echo base_url();?>assets/backend/plugins/iCheck/square/blue.css">
</head>
<body class="hold-transition login-page">


<?php echo $contents; ?>





<script src="<?php echo base_url();?>assets/backend/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url();?>assets/backend/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/backend/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
