<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Menu </title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">


    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/flat/blue.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/bootstrap/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
 



</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php $this->load->view('owner/nav.php');?>
    <div class="content-wrapper" >
        <section class="content-header">
            <h1>
               Update Menu
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Update Menu </li>
            </ol>
        </section>
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Update Menu Images</h3>
                </div>
                <div style="margin-left: 10px;">
                <form action="<?php echo base_url();?>dashbord/menuimageUpdate/<?php echo $menu->menu_id;?>" class="rst-form-register" method="post" enctype="multipart/form-data" >
                                    <h3><?php echo $menu->menu_name; ?></h3>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <br/>
                                            <input id="input-25"accept=".jpg ,.jpeg,.png" name="input25[]" data-max-file-count="5" type="file" multiple  class="file-loading" >
                                            <br/>
                                            <?php foreach($multi as $m){ ?>
                                            <img src="<?php echo base_url();?>/assets/uploads/images/<?php echo $m->menu_gallery;?>" alt="image" class="img-rounded" height="100px" width="100px">
                                            <?php } ?>    
                                        </div>
                                        <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-lg btn-success" name="submit" value="Update">
                                    </div>
                                </div>
                            
                            </form>
                            </div>
                           
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
        <br>   <br>   <br>
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
    <script>
$(document).on('ready', function() {
    $("#input-25").fileinput({
       
       
    });
});
</script> 
</body>

</html>
