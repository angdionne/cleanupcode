<html>
<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/flat/blue.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php $this->load->view('admin/nav.php');?>
    <div class="content-wrapper" >
        <section class="content-header">
            <h1>Profile</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"> Profile</li>
            </ol>
        </section>
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Profile</h3>
                </div>
                <form  method="POST" action="<?php echo base_url();?>index.php/dashboard/updateProfile" class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">E-mail</label>
                            <div class="col-sm-7">
                                <input type="email" name="email" class="form-control" id="inputEmail3" value="<?php echo $profile->admin_email?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-7">
                                <input type="name" name="name" class="form-control" id="inputEmail3" value="<?php echo $profile->admin_name?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-7">
                                <input type="password"  name="password" class="form-control" id="password" value=" <?php echo $profile->password?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3"id="cpass" class="col-sm-3 control-label">Confirm Password</label>
                            <div class="col-sm-7">
                                <input type="password"  name="cpassword" class="form-control" id="confirm_password" placeholder="Confirm New passowrd">
                                <span id='message'></span>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" name="submit" id="btnupdate" class="btn btn-info pull-right">Update</button>
                    </div>
                   </form>
                   <?php
                   if (isset($msg)) {?>
                   <div class=" col-md-6 alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Alert!</h4>
                        <?php echo $msg;?>
                    </div>
                    <?php }
                    ?>
                </div>
            </div><br><br><br>
            <aside class="control-sidebar control-sidebar-dark">
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            </aside>
            <div class="control-sidebar-bg"></div>
        </div>
        <?php $this->load->view('footer.php');?>
        <script src="<?php echo base_url();?>assets/plugins/jQuery/jQuery-2.2.3.min.js"></script>
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/fastclick/fastclick.js"></script>
        <script src="<?php echo base_url();?>assets/dist/js/app.min.js"></script>
        <script src="<?php echo base_url();?>assets/dist/js/pages/dashboard.js"></script>
        <script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
</body>
</html>
<script>

     $('#confirm_password, #cpass').css('visibility', 'hidden');
    $('#password, #cpass').on('keyup', function () {


        $('#confirm_password,#cpass').css('visibility', 'visible');
    });

            $('#password, #confirm_password').on('keyup', function () {
        if ($('#password').val() == $('#confirm_password').val()) {
            $('#message').html('Password Matched').css('color', 'green');
            $('#btnupdate').css('visibility', 'visible');

        } else {
            $('#message').html('Password Not Matching').css('color', 'red');
            $('#btnupdate').css('visibility', 'hidden');
        }


</script>