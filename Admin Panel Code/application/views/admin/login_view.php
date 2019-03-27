<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Form</title>
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
     <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
     <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/square/blue.css">
     <style type="text/css">
          .login-page, .register-page {
               background: #d2d6de;
          }

     </style>
</head>
<body class="login-page">
<div class="login-box">
     <div class="login-logo">
          <a href=""><b>Login</b> Panel</a>
     </div>
     <!-- /.login-logo -->
     <div class="login-box-body">
          <p class="login-box-msg">Sign in with your credentials below</p>
          <form action="<?php echo base_url();?>login/signAdmin" method="post">
               <div class="form-group has-feedback">
                    <input class="form-control" id="owner_email" name="admin_email" placeholder="Enter Your Email" type="email" value="<?php /*echo set_value('contact_email'); */?>" />
                    <span class="text-danger"><?php echo form_error('admin_email');?></span>
               </div>
               <div class="form-group has-feedback">
                    <input class="form-control" id="owner_password" name="admin_password" placeholder="Enter Your Password" type="password" value="<?php /*echo set_value('contact_password'); */?>" />
                    <span class="text-danger"><?php echo form_error('admin_password');?></span>
               </div>
               <div class="row">
                    <div class="inp" style="text-align: center;">
                         <input id="btn_login" name="btn_login" type="submit" class="btn btn-primary" value="Login" />
                    </div>
               </div>
               <span class="text-danger"><?php echo $this->session->flashdata('msg'); ?></span>
          </form>
     </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
