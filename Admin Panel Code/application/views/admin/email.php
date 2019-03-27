<html>
<head>




    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restraunt </title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/flat/blue.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/bootstrap/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php $this->load->view('admin/nav.php');?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" >
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Email Management</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Add Kitchen </li>
            </ol>
        </section>
        <!-- Main content -->
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"> Email Management</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form  method="POST" action="<?php echo base_url();?>admin/updateEmail" enctype="multipart/form-data"  class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="kitchenname" class="col-sm-3 control-label">Accept Email Text</label>
                            <div class="col-sm-7">
                                <input type="input" required="" name="accept" class="form-control" value="<?php echo $email->accept;?>" id="kitchenname" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kitchenname" class="col-sm-3 control-label">Take Away Email Text</label>
                            <div class="col-sm-7">
                                <input type="input" required="" name="take" value="<?php echo $email->take;?>" class="form-control" id="kitchenname" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kitchenaddress" class="col-sm-3 control-label">Reject Email Text</label>
                            <div class="col-sm-7">
                            <input type="kitchenaddress" required="" name="reject" value="<?php echo $email->reject;?>" class="form-control" id="kitchenaddress" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kitchenlocation" class="col-sm-3 control-label">Completed E-mail Text</label>
                            <div class="col-sm-7">
                                <input type="kitchenlocation" required="" value="<?php echo $email->complete;?>" name="complete" class="form-control" id="kitchenlocation" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Baking Email Text</label>
                            <div class="col-sm-7">
                                <input type="kitchenlocation" required="" value="<?php echo $email->bake;?>" name="bake" class="form-control" id="kitchenlocation" >
                            </div>
                            </div>
                            <div class="form-group">
                            <label for="" class="col-sm-3 control-label">SignUp Email Text</label>
                            <div class="col-sm-7">
                                <input type="kitchenlocation" required="" name="signup" value="<?php echo $email->signup;?>" class="form-control" id="kitchenlocation" >
                            </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" name="submit" class="btn btn-info pull-right">Update</button>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <!-- /.box-footer -->
                        </form>
                        <?php
                        if (isset($msg)){?>
                        <div class=" col-md-6 alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Alert!</h4>
                        <?php echo $msg;?>
                    </div>
                    <?php } ?>
                </div>
            </div>
        <br><br><br>

        <!-- /.content-wrapper -->
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->

        </aside>
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
    <?php $this->load->view('owner/footer.php');?>
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.2.3.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/fastclick/fastclick.js"></script>
    <script src="<?php echo base_url();?>assets/dist/js/app.min.js"></script>
    <script src="<?php echo base_url();?>assets/dist/js/pages/dashboard.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.js"></script>
    <script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
    <script>
$(document).on('ready', function() {
    $("#input-25").fileinput({
    });
});
</script> 
</body>
<script type="text/javascript">
          $('#timepicker3').timepicker();
        </script>


 <script type="text/javascript">
          $('#timepicker4').timepicker();
        
</script>
</html>
