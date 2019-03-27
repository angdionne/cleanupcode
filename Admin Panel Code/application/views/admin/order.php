<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Orders</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/flat/blue.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/timepicker/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="<?php echo base_url();   ?>assets/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();   ?>assets/plugins/datatables/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo base_url();   ?>assets/plugins/datatables/responsive.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo base_url();   ?>assets/plugins/datatables/responsive.bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();   ?>assets/plugins/datatables/buttons.dataTables.min.css">
    </head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php $this->load->view('admin/nav');?>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-10">
                        <div class="box-body " style="background-color: white">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>User</th>
                                        <th>Phone</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Date</th>
                                        <th>Address</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach ($orders as $completeorder)
                                    {?>
                                        <tr>
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $completeorder->user_name;?></td>
                                            <td><?php echo $completeorder->phone;?></td>
                                            <td><?php echo $completeorder->price;?></td>
                                            <td><?php echo $completeorder->description;?></td>
                                            <td><?php echo $completeorder->datetime;?></td>
                                            <td><?php echo $completeorder->address;?></td>
                                            <td><?php echo $completeorder->status;?></td>
                                            <td><button  class="btn btn-sm btn-success"  data-toggle="modal" data-id="<?php echo $completeorder->order_id;?>" onclick="completeOrder(this)" data-target="#myModal13">Order Detail</button><br> <br><button  class="btn btn-sm btn-warning"  data-toggle="modal" data-id="<?php echo $completeorder->order_id;?>" onclick="changestatus(this)" data-target="#myModal1">Change Status</button></td>
                                        </tr>
                                        <?php $i++; }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal fade" id="myModal13" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="row">
                                            <div class="col-md-11">
                                                <h3 class="modal-title">Order Detail</h3>
                                            </div>
                                            <div class="col-md-1">
                                                <button style="margin-right:15px;" type="button" class="btn-danger" data-dismiss="modal">X</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-body" id="comtable">
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button  type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="myModal1" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="row">
                                            <div class="col-md-11">
                                                <h3 class="modal-title">Change Status</h3>
                                            </div>
                                            <div class="col-md-1">
                                                <button style="margin-right:15px;" type="button" class="btn-danger" data-dismiss="modal">X</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-body" >
                                        <div class="form-group">
                                            <form method="post" action="<?php echo base_url();?>Admin/updateOrderStatus">
                                                <input type="hidden" id="orderidy" name="orderid" value="">
                                                <label for="sel1">Status :</label>
                                                <select class="form-control select2" id="sel1" name="status" required="">
                                                <option selected>Choose Status</option>
                                                <option   value="new">New</option>
                                                <option   value="baked">Baked</option>
                                                <option   value="takeaway">Take Away</option>
                                                <option   value="completed">Completed</option>
                                                <option   value="reject">Reject</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="submit" value="Update" class="btn btn-primary">
                                            <button  type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="content">
            <div class="row">
                </div>
                <div class="row">
                    <div class="col-md-12">
                </div>
            </div>
        </section>
    </div>
    <div class="control-sidebar-bg"></div>
    <?php $this->load->view('footer.php');?>
</div>

<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.2.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/fastclick/fastclick.js"></script>
<script src="<?php echo base_url();?>assets/dist/js/app.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url();?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/select2/select2.full.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>

<script src="<?php echo base_url();?>assets/plugins/datatables/vfs_fonts.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/buttons.print.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/buttons.flash.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/jszip.min.js"></script>
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
<script>


    $(document).ready(function() {
        $('#example2').DataTable( {
          
            responsive:true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'print','pdf'
            ]
        } );
    } );

</script>
<script>
    function completeOrder(obj){
        	var orderid = obj.getAttribute('data-id');
        	$.ajax({
    				
    				url : '<?php echo base_url();?>Admin/orderdetail',
    				type : 'post',
    				data : {
    					id : orderid
    				},

    				success : function(data){

    				$('#comtable').html(data);
    				
    				}
        	});

    }
    
    function changestatus(obj){
    
        	var orderid = obj.getAttribute('data-id');

        	$('#orderidy').val(orderid);
        
    }
</script>

<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
</body>
</html>
