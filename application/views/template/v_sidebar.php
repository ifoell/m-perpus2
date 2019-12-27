    <!-- BEGIN SIDEBPANEL-->
    <nav class="page-sidebar" data-pages="sidebar">
      <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
      <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
      <!-- BEGIN SIDEBAR MENU HEADER-->
      <div class="sidebar-header">
        <img src="<?php echo(base_url()); ?>_res/img/logo.png" alt="logo" class="brand" data-src="<?php echo(base_url()); ?>_res/img/logo.png" data-src-retina="<?php echo(base_url()); ?>_res/img/logo_2x.png" width="78" height="22">
      </div>
      <!-- END SIDEBAR MENU HEADER-->
      <!-- START SIDEBAR MENU -->
      <div class="sidebar-menu">
        <!-- BEGIN SIDEBAR MENU ITEMS-->
        <ul class="menu-items">
          <li class="m-t-30 ">
            <a href="<?php echo(base_url()); ?>dashboard" class="detailed">
              <span class="title">Dashboard</span>
            </a>
            <span class="icon-thumbnail"><i data-feather="shield"></i></span>
          </li>
          <li>
            <a href="javascript:;"><span class="title">Books</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i data-feather="book"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="<?php echo(base_url()); ?>book">Book</a>
                <span class="icon-thumbnail">B</span>
              </li>
              <li class="">
                <a href="<?php echo(base_url()); ?>category">Category</a>
                <span class="icon-thumbnail">M</span>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="<?php echo(base_url()); ?>lender">
              <span class="title">Lender</span>
            </a>
            <span class="icon-thumbnail"><i data-feather="image"></i></span>
          </li>
          <li class="">
            <a href="<?php echo(base_url()); ?>location">
              <span class="title">Location</span>
            </a>
            <span class="icon-thumbnail"><i data-feather="map"></i></span>
          </li>
          <li class="">
            <a href="<?php echo(base_url()); ?>user">
              <span class="title">User</span>
            </a>
            <span class="icon-thumbnail"><i data-feather="image"></i></span>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <!-- END SIDEBAR MENU -->
    </nav>
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->