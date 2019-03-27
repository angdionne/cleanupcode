<html>
<head>




    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Category</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">




    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/flat/blue.css">




   <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
-->
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
            <h1>
               Food Category

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Add Menu </li>
            </ol>
        </section>

        <!-- Main content -->


        <div class="col-md-12">

            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Record</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form  method="POST" action="<?php echo base_url();?>index.php/admin/insertFoodCat" enctype="multipart/form-data"  class="form-horizontal">
                    <div class="box-body">

                        <div class="form-group">
                            <label for="kitchenid" class="col-sm-3 control-label">Kitchen</label>

                            <div class="col-sm-7">
                               
                                <select name="kitchenid[]" class="form-control select2" multiple required="required">
                                   <?php foreach($ki as $id): ?>
                                    <option value="<?php echo $id->kitchen_id; ?>"><?php echo $id->kitchen_name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">Name</label>

                            <div class="col-sm-7">
                                <input type="text" name="c_name" class="form-control" id="menuname" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="toppingname" class="col-sm-3 control-label">Image</label>

                            <div class="col-sm-7">
                                <span class="btn btn-default btn-md btn-file">
                                Upload a file <input type="file" name="f_name" class="form-control" id="menuname" value="" required="required">
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="toppingname" class="col-sm-3 control-label">Description</label>

                            <div class="col-sm-7">
                                <textarea name="desc" class="form-control" cols="10" rows="5" required="required"></textarea>
                            </div>
                        </div>
                             <div class="box-footer">

                        <button type="submit" name="submit" class="btn btn-info pull-right">Submit</button>
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
        <br>   <br>   <br>

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
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
             immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
    <?php $this->load->view('owner/footer.php');?>
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.2.3.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
   
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>assets/plugins/fastclick/fastclick.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/select2/select2.full.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url();?>assets/dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url();?>assets/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
    <!-- <script src="<?php echo base_url();?>assets/bootstrap/js/fileinput.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script>-->
    <script>
$(document).on('ready', function() {
    $("#input-25").fileinput({
       
        //initialCaption: "The Moon and the Earth"
       
    });
});
</script> 
</body>
<script>
        $('#foodcat').on('change',function(){
            var foodcat_id= $('#foodcat').val();
            //alert(foodcat_id);
            $.ajax({
                    url : '<?php echo base_url();?>front/getFSubcat',
                    type : 'post',
                    data : {
                        id : foodcat_id
                    },

                    success : function(data){
                        //alert(data);
                        var info = JSON.parse(data);
                       // alert(info.length);
                        var html = "";
                        for (i=0; i< info.length; i++)
                        {
                            html += '<option value='+info[i].f_subcat_id+' class="title" style="font-family:\'Droid Sans\',sans-serif;">'+info[i].f_subcat_name+'</option>';
                        }

                        
                        $('#fsubcat').append(html);
                        
                    }
                });

        });
        $('.select2').select2()
    </script>

</html>
