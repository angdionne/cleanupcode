<html>
<head>

 <style>
        .panel {
            box-shadow: 0 2px 0 rgba(0,0,0,0.075);
            border-radius: 0;
            border: 0;
            margin-bottom: 24px;
        }
        .panel .panel-heading, .panel>:first-child {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        .panel-heading {
            position: relative;
            height: 50px;
            padding: 0;
            border-bottom:1px solid #eee;
        }
        .panel-control {
            height: 100%;
            position: relative;
            float: right;
            padding: 0 15px;
        }
        .panel-title {
            font-weight: normal;
            padding: 0 20px 0 20px;
            font-size: 1.416em;
            line-height: 50px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .panel-control>.btn:last-child, .panel-control>.btn-group:last-child>.btn:first-child {
            border-bottom-right-radius: 0;
        }
        .panel-control .btn, .panel-control .dropdown-toggle.btn {
            border: 0;
        }
        .nano {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        .nano>.nano-content {
            position: absolute;
            overflow: scroll;
            overflow-x: hidden;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }
        .pad-all {
            padding: 15px;
        }
        .mar-btm {
            margin-bottom: 15px;
        }
        .media-block .media-left {
            display: block;
            float: left;
        }
        .img-sm {
            width: 46px;
            height: 46px;
        }
        .media-block .media-body {
            display: block;
            overflow: hidden;
            width: auto;
        }
        .pad-hor {
            padding-left: 15px;
            padding-right: 15px;
        }
        .speech {
            position: relative;
            background: #b7dcfe;
            color: #317787;
            display: inline-block;
            border-radius: 0;
            padding: 12px 20px;
        }
        .speech:before {
            content: "";
            display: block;
            position: absolute;
            width: 0;
            height: 0;
            left: 0;
            top: 0;
            border-top: 7px solid transparent;
            border-bottom: 7px solid transparent;
            border-right: 7px solid #b7dcfe;
            margin: 15px 0 0 -6px;
        }
        .speech-right>.speech:before {
            left: auto;
            right: 0;
            border-top: 7px solid transparent;
            border-bottom: 7px solid transparent;
            border-left: 7px solid #ffdc91;
            border-right: 0;
            margin: 15px -6px 0 0;
        }
        .speech .media-heading {
            font-size: 1.2em;
            color: #317787;
            display: block;
            border-bottom: 1px solid rgba(0,0,0,0.1);
            margin-bottom: 10px;
            padding-bottom: 5px;
            font-weight: 300;
        }
        .speech-time {
            margin-top: 20px;
            margin-bottom: 0;
            font-size: .8em;
            font-weight: 300;
        }
        .media-block .media-right {
            float: right;
        }
        .speech-right {
            text-align: right;
        }
        .pad-hor {
            padding-left: 15px;
            padding-right: 15px;
        }
        .speech-right>.speech {
            background: #ffda87;
            color: #a07617;
            text-align: right;
        }
        .speech-right>.speech .media-heading {
            color: #a07617;
        }
        .btn-primary, .btn-primary:focus, .btn-hover-primary:hover, .btn-hover-primary:active, .btn-hover-primary.active, .btn.btn-active-primary:active, .btn.btn-active-primary.active, .dropdown.open>.btn.btn-active-primary, .btn-group.open .dropdown-toggle.btn.btn-active-primary {
            background-color: #579ddb;
            border-color: #5fa2dd;
            color: #fff !important;
        }
        .btn {
            cursor: pointer;
            /* background-color: transparent; */
            color: inherit;
            padding: 6px 12px;
            border-radius: 0;
            border: 1px solid 0;
            font-size: 11px;
            line-height: 1.42857;
            vertical-align: middle;
            -webkit-transition: all .25s;
            transition: all .25s;
        }
        .form-control {
            font-size: 11px;
            height: 100%;
            border-radius: 0;
            box-shadow: none;
            border: 1px solid #e9e9e9;
            transition-duration: .5s;
        }
        .nano>.nano-pane {
            background-color: rgba(0,0,0,0.1);
            position: absolute;
            width: 5px;
            right: 0;
            top: 0;
            bottom: 0;
            opacity: 0;
            -webkit-transition: all .7s;
            transition: all .7s;
        }






    </style>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbox</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">




    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">


    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/flat/blue.css">

<link rel="stylesheet" href="<?php echo base_url();   ?>assets/plugins/datatables/dataTables.bootstrap.css">
   <link rel="stylesheet" href="<?php echo base_url();   ?>assets/plugins/datatables/jquery.dataTables.min.css">
   <link rel="stylesheet" href="<?php echo base_url();   ?>assets/plugins/datatables/responsive.dataTables.min.css">
   <link rel="stylesheet" href="<?php echo base_url();   ?>assets/plugins/datatables/responsive.bootstrap.css">
   <link rel="stylesheet" href="<?php echo base_url();   ?>assets/plugins/datatables/buttons.dataTables.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php $this->load->view('owner/nav.php');?>
    <div class="content-wrapper" >
        <section class="content-header">
            <h1>
              Inbox
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"> Inbox</li>
            </ol>
        </section>
        <div class="col-md-12">
    <div class="box box-info" style="padding:15px">
                <div class="box-header with-border">
                    <h3 class="box-title">Chat</h3>
                </div>
                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
                        <div class="container">
                            <div class="col-md-12 col-lg-9">
                                <div class="panel">
                                    <!--Heading-->
                                    <div class="panel-heading">
                                        <div class="panel-control">
                                            <div class="btn-group">
                                                <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#demo-chat-body"><i class="fa fa-chevron-down"></i></button>
                                            </div>
                                        </div>
                                        <h3 class="panel-title">Chat History</h3>
                                    </div>

                                    <div id="demo-chat-body" class="collapse in">

                                        <div class="nano has-scrollbar" style="height:380px">
                                            <div class="nano-content pad-all" tabindex="0" style="right: -17px;">
                                                <ul id="divMsg" class="list-unstyled media-block">
                                                    <?php
                                                    $id=0;
                                                    $name="";
                                                    $userid=0;
                                                    $kitchen_id=0;
                                                    foreach ($chats as $chat) {
                                                        $id = $this->session->userdata('owner_id');
                                                    if ($chat->sender_id == $id) {
                                                        ?>

                                                        <li class="mar-btm">
                                                            <div class="media-right">
                                                                <img
                                                                    src="<?php echo base_url();?>assets/uploads/images/<?php echo $chat->kitchen_image;?>"
                                                                    class="img-circle img-sm" alt="Profile Picture">
                                                            </div>
                                                            <div class="media-body pad-hor speech-right">
                                                                <div class="speech">
                                                                    <a href="#" class="media-heading"><?php echo $chat->kitchen_name;?> </a>
                                                                    <p> <?php echo $chat->message;?></p>
                                                                    <p class="speech-time">
                                                                        <i class="fa fa-clock-o fa-fw"></i> <?php echo $chat->send_date;?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <?php }
                                                        else {
                                                            ?>
                                                            <li class="mar-btm" >
                                                                <div class="media-left" >
                                                                    <img src = "<?php echo base_url();?>assets/uploads/images/<?php echo $chat->user_image;?>" class="img-circle img-sm" alt = "Profile Picture" >
                                                                </div >
                                                                <div class="media-body pad-hor" >
                                                                    <div class="speech" >
                                                                        <a href = "#" class="media-heading" > <?php echo $chat->user_name;?> </a >
                                                                        <p > <?php echo $chat->message;?></p >
                                                                        <p class="speech-time" >
                                                                            <i class="fa fa-clock-o fa-fw" ></i > <?php echo $chat->send_date;?>
                                                                        </p >
                                                                    </div >
                                                                </div >
                                                            </li >
                                                            <?php
                                                        
                                                           
                                                        }
                                                        $kitchen_id=$chat->kitchen_id;
                                                         $userid= $chat->user_id;
                                                         $name= $chat->kitchen_name;
}?>
                                                </ul>
                                            </div>
                                            <div class="nano-pane"><div class="nano-slider" style="height: 141px; transform: translate(0px, 0px);"></div></div></div>

                                        <!--Widget footer-->
                                        <div class="panel-footer">
                                            <div class="row">
                                                <form method="post" id="inp_form" class="inp_form">
                                                <div class="col-xs-9">
                                                    
                                                    
                                                    <input type="hidden" name="userid" id="to" class="form-control chat-input" value="<?php echo $userid; ?>" required=""/>
                                                     <input type="hidden" name="name" id="name" class="form-control chat-input" value="<?php echo $name; ?>" required=""/>
                                                     <input type="hidden" name="kitchen" id="kitchen" class="form-control chat-input" value="<?php echo $kitchen_id; ?>" required=""/>

                                                    <input style="margin-top: 2%;" type="text" id="msg" placeholder="Enter your Message" name="msg" class="form-control chat-input" required />
                                                </div>
                                                <div class="col-xs-3">
                                                    <button id="buttonSend" style="margin-top: 10%;" class="btn btn-primary btn-block" name="submit" type="button">Reply</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br><br>
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
    <script src="<?php echo base_url();?>assets/dist/js/pages/dashboard.js"></script>
    <script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>



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
       $('#example1').DataTable( {
           responsive:true,
          
       } );
   } );
   </script>
 </div><!-- content-->
        
        <?php $img =$this->session->userdata('dp');?>
<br/>
    <div class="footer">
        <div class="container">
            <p>&copy; 2017  All rights  Reserved |  &nbsp;<a href="https://www.fullsail.edu/ " target="target_blank">AngelaJ</a></p>
        </div>
    </div>

    <script>
$('#buttonSend').on('click',function(){



var id = $('#to').val();
   // alert(id);
    var msg = $('#msg').val();
        var kit = $('#kitchen').val();
console.log(id,msg);

    $.ajax({


url: '<?php echo base_url(); ?>dashboard/replyMsgUser ?>',
type:'POST',

data:{user_id:id,message:msg,kitchen:kit},
success: function(data) {
    //console.log(data);
    $("#subject").html("");
    $("#msg").html("");
}

});
});
</script>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)

            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<script type="text/javascript">


    $(document).ready(function(){

        $('#buttonSend').on('click',function(){
 
            alert('Msg Sent');

            var m_names = new Array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
            var msg = $('#msg').val();
            var name = $('#name').val();
            var d = new Date();
            var day = d.getDate();
            var mon = d.getMonth();
            var month = m_names[mon];
            var time = d.getHours()+':'+d.getMinutes();
            var dp='<?php echo base_url();?>assets/uploads/images/<?php echo $img; ?>';



            var html = '';
            html +='  <li class="mar-btm">';
            html +='<div class="media-right">';

            html +='<img src="'+dp+'"class="img-circle img-sm" alt="Profile Picture">';
            html +='   </div>';
            html +='<div class="media-body pad-hor speech-right">';
            html +='            <div class="speech">';
            html +=            '<a href="#" class="media-heading">'+name+' </a>';
            html +='            <p>'+msg+' </p>';

            html +='<p id="para" class="speech-time">';
            html +='            <i class="fa fa-clock-o fa-fw"></i> '+day+' '+month+' '+time+'';
            html +='            </p>';
            html +=            '</div>';
            html +='            </div>';
            html +='            </li>';



            $('#divMsg').append(html);

            $('#inp_form')[0].reset();


        });
    });
</script>

</body>


</html>
