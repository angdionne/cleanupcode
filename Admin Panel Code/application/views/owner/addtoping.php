<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Topping</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/select2/select2.min.css">
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
            <h1>Profile</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Add Menu </li>
            </ol>
        </section>
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Toping</h3>
                </div>
                <form  method="POST" action="<?php echo base_url();?>index.php/dashboard/newToping" enctype="multipart/form-data"  class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="foodcat" class="col-sm-3 control-label">Menu</label>
                            <div class="col-sm-7">
                            <select name="menu_name[]" class="form-control select2" id="foodcat" multiple required="required">
                                <?php foreach($menu as $m){?>
                                <option value="<?php echo $m->menu_id;?>"><?php echo $m->menu_name; ?></option>
                            <?php } ?>
                        </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="toppingname" class="col-sm-3 control-label">Topping</label>

                            <div class="col-sm-7">
                                <input type="text" name="topping_name" class="form-control" id="menuname" required="required">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="menuprice" class="col-sm-3 control-label">Price</label>

                            <div class="col-sm-7">
                                <input type="number" name="menu_price" class="form-control" id="menuprice" required="required">
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" name="submit" class="btn btn-info pull-right">Submit</button>
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
    <script src="<?php echo base_url();?>assets/plugins/select2/select2.full.min.js"></script>
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
<script>
        $('#foodcat').on('change',function(){
            var foodcat_id= $('#foodcat').val();
            $.ajax({
                    url : '<?php echo base_url();?>front/getFSubcat',
                    type : 'post',
                    data : {
                        id : foodcat_id
                    },

                    success : function(data){
                        var info = JSON.parse(data);
                        var html = "";
                        for (i=0; i< info.length; i++)
                        {
                            html += '<option value='+info[i].f_subcat_id+' class="title" style="font-family:\'Droid Sans\',sans-serif;">'+info[i].f_subcat_name+'</option>';
                        }
                 $('#fsubcat').append(html);

                    }
                });

        });
        $('.select2').select2();
    </script>

</html>
