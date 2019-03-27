<html>
<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Kitchen </title>
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
    <div class="content-wrapper" >
        <section class="content-header">
            <h1>Update Kitchen</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Update Kitchen </li>
            </ol>
        </section>
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Update Kitchen</h3>
                </div>
                <form  method="POST" action="<?php echo base_url();?>index.php/admin/editKitchen" enctype="multipart/form-data"  class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="kitchenname" class="col-sm-3 control-label">Kitchen Name</label>
                            <input type="hidden" name="kitchenid" value="<?php echo $kitchen->kitchen_id;?>" />
                            <div class="col-sm-7">
                                <input type="input" name="kitchenname" value="<?php echo $kitchen->kitchen_name;?>" class="form-control" id="kitchenname" >
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="kitchenname" class="col-sm-3 control-label">Owner Name</label>

                            <div class="col-sm-7">
                                <select class="form-control" name="owner_id" >
                                <?php foreach($owner as $ow){ ?>
                                <option value="<?php echo $ow->owner_id;?>"><?php echo $ow->owner_name;?></option>
                                <?php } ?>
                                <option selected="" value="<?php echo $kitchen->owner_id;?>"><?php echo $kitchen->owner_name;?></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kitchenaddress" class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-7">
                            <input type="kitchenaddress" name="kitchenaddress" value="<?php echo $kitchen->kitchen_address;?>" class="form-control" id="kitchenaddress" >
                            </div>
                        </div>
                       
                       <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Image</label>
                            <div class="col-sm-7">
                              <input id="file" type="file" name="file" class="form-control" accept=".jpg ,.jpeg,.png"> <br/>
                               <img src="<?php echo base_url();?>assets/uploads/images/<?php echo $kitchen->kitchen_image;?>" style="height:150px; width:150px;"/>
                           </div>
                       </div>
                       <div class="form-group">
                        <label for="opentime" class="col-sm-3 control-label">Open Time</label>
                        <div class="col-sm-7 input-group bootstrap-timepicker timepicker">
                            <input id="timepicker3" name="opentime" required="" type="text" class="form-control input-small"  value="<?php echo $kitchen->open_time;?>">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="closetime" class="col-sm-3 control-label">Close Time</label>
                            <div class="col-sm-7 input-group bootstrap-timepicker timepicker">
                                <input id="timepicker4" name="closetime" required="" type="text" class="form-control input-small" value="<?php echo $kitchen->close_time;?>">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" name="submit" class="btn btn-info pull-right">Update</button>
                        </div>
                        </div>
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
        <aside class="control-sidebar control-sidebar-dark">
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            </aside>
        <div class="control-sidebar-bg"></div>
    </div>
    <?php $this->load->view('owner/footer.php');?>
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.2.3.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/fastclick/fastclick.js"></script>
    <script src="<?php echo base_url();?>assets/dist/js/app.min.js"></script>
    <script src="<?php echo base_url();?>assets/dist/js/pages/dashboard.js"></script>
    <script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.js"></script>
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
