<html>
<head>




    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topping</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/flat/blue.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/responsive.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/responsive.bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/buttons.dataTables.min.css">



</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php $this->load->view('owner/nav.php');?>
    
    <div class="content-wrapper" >
        <section class="content-header">
            <h1>Toping</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"> Topping</li>
            </ol>
        </section>
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Toping</h3>
                </div>
                <a style="margin-left:15px;margin-top:15px;" href="<?php echo base_url();?>dashboard/addtoping" <button class="btn btn-success" type="button">Add Topping</button></a>
                <br><br><br>
                            <div >
                                <table id="example2" class="table table-bordered table-striped">
                                <thead>
                               
                                    <th>Menu Name</th>
                                    <th>Extra Topping</th>
                                    <th>Price</th>
                                    <th>Actions</th>
                                    
                            
                                </thead>
                                <tbody>
                                <?php foreach ($details as $d)
                                {?>
                                    <tr>
                                        <td><?php echo $d->menu_name;?></td>
                                        <td><?php echo $d->m_extra_name;?></td>
                                        <td><?php echo $d->m_extra_price;?></td>
                                        <td><a style="color: #3c8dbc;font-size:12px!important;" href="<?php echo base_url();?>dashboard/updateTopping/<?php echo $d->m_extra_id;?>">Edit</a> /
                                            <a style="color: red;font-size:12px!important;"onClick="return doconfirm();"  href="<?php echo base_url();?>index.php/dashboard/deleteTopping/<?php echo $d->m_extra_id;?>">Delete</a> </td>
                                    </tr>
                                <?php }?>
                                </tbody>
                            </table>
            </div>
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


    <script>
    function doconfirm()
    {
        job=confirm("Are you sure you want to delete permanently?");
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
