<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><image src="<?php echo base_url();?>gambar/logoooo.png" alt="yuda" class="image-responsive" width="80%"> </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
              
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i><?php echo $this->session->userdata('user');?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo base_url();?>admin/edit_profil"><i class="fa fa-user fa-fw"></i> Edit Profile</a>
                        </li>
                        <li><a href="<?php echo base_url();?>admin/update_password"><i class="fa fa-gear fa-fw"></i> Settings Password</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url()?>login/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                            <a href="<?php echo base_url();?>admin"><i class="fa fa-bug fa-fw"></i> Welcome </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Home<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>admin"><i class="glyphicon glyphicon-triangle-right"></i> Go Admin Page</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>blog"><i class="glyphicon glyphicon-triangle-right"></i> Go Blog Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>content"><i class="glyphicon glyphicon-eye-open"></i> Look All Data</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>content/add"><i class="fa fa-edit fa-fw"></i> Add New Data</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-gear"></i> Controller<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                   <a href="<?php echo base_url();?>admin/edit_profil"><i class="fa fa-user fa-fw"></i> Edit Profile</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>admin/update_password"><i class="fa fa-gear fa-fw"></i>  Password</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>content"> <i class="glyphicon glyphicon-eye-open"></i>  All Data</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->