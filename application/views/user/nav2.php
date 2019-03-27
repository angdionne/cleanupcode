<style>
    body{

    }
</style>
<br><Br>
<div class="col-sm-2">
                        <h4>Main Navigation</h4>
                        <hr />
                        <ul class="list-category">
                            <li id="popoverDat" class=""><a id="popoverData" data-content="" rel="popover" data-placement="bottom" data-original-title="This is your Profile" data-trigger="hover" href="<?php echo base_url();?>user">Profile</a></li>
                            <li id="order" class=""><a id="Lg" rel="popover" data-placement="bottom" data-original-title="Previous Orders" data-trigger="hover" href="<?php echo base_url();?>user/previousOrders">Previous Orders</a></li>


                            <li id="change" class=""><a id="Lg" rel="popover" data-placement="bottom" data-original-title="ChangePassword" data-trigger="hover" href="<?php echo base_url();?>user/changePassword">Change Password</a></li>


                            <li id="L" class=""><a id="Lg" rel="popover" data-placement="bottom" data-original-title="Log Out" data-trigger="hover" href="<?php echo base_url();?>index.php/user/logout">Logout</a></li>


                        </ul>
                        
                    </div>

                    <script type="text/javascript">

                    var v = '<?php echo $this->session->userdata('nav2'); ?>';
                    //alert(v);

                        if(v == "dashboard") {
       //alert("Alert: !");
       var d=document.getElementById("das");
        d.className +=" active";
}
if(v == "profileUser") {
       //alert("Alert: !");
       var d=document.getElementById("popoverDat");
        d.className +=" active";
}
if(v == "pastOrder") {
       //alert("Alert: !");
       var d=document.getElementById("orderGe");
        d.className +=" active";
}
if(v == "presentOrder") {
       //alert("Alert: !");
       var d=document.getElementById("orderBooke");
        d.className +=" active";
}

if(v == "customOrders") {
       //alert("Alert: !");
       var d=document.getElementById("orderCusto");
        d.className +=" active";
}

if(v == "getAllItems") {
       //alert("Alert: !");
       var d=document.getElementById("item");
        d.className +=" active";
}

if(v == "inboxUser") {
       //alert("Alert: !");
       var d=document.getElementById("inbo");
        d.className +=" active";
}

if(v == "favouritesShow") {
       //alert("Alert: !");
       var d=document.getElementById("fav");
        d.className +=" active";
}

if(v == "change") {
       //alert("Alert: !");
       var d=document.getElementById("C");
        d.className +=" active";
}

if(v == "logout") {
       //alert("Alert: !");
       var d=document.getElementById("L");
        d.className +=" active";
}

                    </script>