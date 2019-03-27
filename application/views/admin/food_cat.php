<html>
<head>




    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Category</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">




    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">


    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/flat/blue.css">


    <!-- <link rel="stylesheet" href="<?php// echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"> -->

    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.css">
    <!--    <link rel="stylesheet" href="--><?php //echo base_url();   ?><!--plugins/datatables/dataTables.bootstrap.css">-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/responsive.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/responsive.bootstrap.css">
    <!--    <link rel="stylesheet" href="--><?php //echo base_url();   ?><!--plugins/datatables/responsive.dataTables.min.css" />-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/buttons.dataTables.min.css">




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
                <li class="active"> Menu</li>
            </ol>
        </section>

        <!-- Main content -->


        <div class="col-md-12">

            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"></h3>
                </div>
               
                
 <a style="margin-left:15px;margin-top:15px;" href="<?php echo base_url();?>admin/addrecord" <button class="btn btn-success" type="button">Add Record</button></a>
                           
                            <br><br><br>
                            <div >
                            <table id="example2" class="table datatables table-bordered">
                                <thead>
                               

                                    <th>Food Name</th>
                                    <th>Kitchen</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                    
                            
                                </thead>
                                <tbody>
                                <?php foreach ($f_cats as $f_cat)
                                {?>
                                    <tr>

                                        <td><?php echo $f_cat->food_cat_name; ?></td>
                                        <td><?php echo $f_cat->kitchen_name; ?></td>
                                        <td><img src="<?php echo base_url('assets/uploads/files/').$f_cat->food_cat_image; ?>" alt="No image" width="70px" height="50px"></td>
                                        <td><?php echo $f_cat->description; ?></td>
                                        <td><a style="color: #3c8dbc;font-size:12px!important;" href="<?php echo base_url();?>admin/updateCat/<?php echo $f_cat->food_cat_id;?>">Edit</a> /
                                         <a style="color: red;font-size:12px!important;"onClick="return doconfirm();"  href="<?php echo base_url();?>index.php/admin/deleteCat/<?php echo $f_cat->food_cat_id;?>">Delete</a> </td>
                                    </tr>
                                <?php }?>
                                </tbody>
                            </table>
            </div>




             
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
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
    <?php $this->load->view('owner/footer.php');?>


    <script>
    function doconfirm()
    {
        job=confirm("Are you sure to delete permanently?");
        if(job!=true)
        {
            return false;
        }
    }
</script>
 

   
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.2.3.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
   <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="<?php echo base_url();?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/fastclick/fastclick.js"></script>
    <script src="<?php echo base_url();?>assets/dist/js/app.min.js"></script>



    <script src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>

    <script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/datatables/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/datatables/jszip.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example2').DataTable( {
                "ordering": false,
                responsive:true,
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'print','pdf'
                ]
            } );
        } );
    </script>


</body>


</html>
