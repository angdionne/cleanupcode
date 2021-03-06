<header class="main-header">
    <a href="#" class="logo">
        <span class="logo-mini"><b>R</b>M</span>
        <span class="logo-lg"><b>Resturant</b>Management</span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
              <li class="active"><a href="#" onclick="return false">Date<span class="sr-only">(current)</span></a></li>
            <li> <input  type="text" style="height: 50px;  min-width:175px;" value="<?php echo date("y-m-d H:i:s")?>" class="form-control pull-right"></li>
          </ul>
        </div>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <li id="dropyBtn" class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle"  data-toggle="dropdown">
                        <img src="<?php echo base_url();?>assets/uploads/files/d.png" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?php echo $this->session->userdata('owner_name');?> </span>
                    </a>
                    <ul id="Dropy" class="dropdown-menu">
                        <li class="user-header">
                            <img src="<?php echo base_url();?>assets/uploads/files/d.png" class="img-circle" alt="User Image">
                            <p>
                                <?php echo $this->session->userdata('owner_name');?>
                                 <small>Owner</small>
                            </p>
                        </li>
                        <li class="user-footer">
                        <div class="pull-left">
                                <a href="<?php echo base_url();?>index.php/dashboard/profile" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo base_url();?>index.php/login/signOut" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
</header>
<aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
          <br>
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/uploads/files/d.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('owner_name');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>

        </div>
          <br>
          <br>
      </div>
            <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
              <a href="<?php echo base_url();?>index.php/dashboard/kitchen">
                  <i class="fa fa-cutlery"></i>
                  <span>Kitchen</span>
                </a>
          </li>
          <li class="treeview">
            <a href="<?php echo base_url();?>index.php/dashboard/food_cat">
                  <i class="fa fa-circle"></i>
                  <span>Food Category</span>
                </a>
          </li>
          <li class="treeview">
              <a href="<?php echo base_url();?>index.php/dashboard/menu">
                  <i class="fa fa-list"></i>
                  <span>Menu</span>
                </a>
          </li>
          <li class="treeview">
              <a href="<?php echo base_url();?>index.php/dashboard/menu_extras">
                  <i class="fa fa-list"></i>
                  <span>Menu-Extras/ Toppings</span>
                </a>
          </li>
           <li class="treeview">
              <a href="#">
                  <i class="fa fa-envelope"></i>
                  <span>Received Orders</span>

              </a>
          </li>
           <li class="treeview">
              <a href="<?php echo base_url();?>index.php/dashboard/Inbox">
                  <i class="fa fa-envelope"></i>
                  <span>Inbox</span>

              </a>
          </li>
          <li class="treeview">
              <a href="<?php echo base_url();?>index.php/dashboard/Profile">
                  <i class="fa fa-user"></i>
                  <span>Profile</span>
                </a>
          </li>
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
