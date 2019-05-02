
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <div class="page-sidebar navbar-collapse collapse">
                        <!-- BEGIN SIDEBAR MENU -->
                        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                            <li class="sidebar-search-wrapper">
                                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                                <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                                    <a href="javascript:;" class="remove">
                                        <i class="icon-close"></i>
                                    </a>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="input-group-btn">
                                            <a href="javascript:;" class="btn submit">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </span>
                                    </div>
                                </form>
                                <!-- END RESPONSIVE QUICK SEARCH FORM -->
                            </li>
                            <li class="nav-item">
                                 <a href="<?php echo base_url('admin_dashboard'); ?>" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Dashboard</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                
                            </li>
                            <li class="heading">
                                <h3 class="uppercase">Management</h3>
                            </li>
                            <li class="nav-item  start active open">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-users"></i>
                                    <span class="title">Professor</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="<?php base_url(); ?>addprofessor" class="nav-link ">
                                            <span class="title">Add Professor</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  active open ">
                                        <a href="<?php base_url(); ?>professors" class="nav-link ">
                                            <span class="title">Manage Professor</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>

                            <li class="nav-item  ">
                                  <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-diamond"></i>
                                    <span class="title">Students</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="<?php base_url(); ?>addstudent" class="nav-link ">
                                            <span class="title">Add Student</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php base_url(); ?>students" class="nav-link ">
                                            <span class="title">Manage Student</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo base_url('exams');?>" class="nav-link nav-toggle">
                                    <i class="icon-diamond"></i>
                                    <span class="title">Examination</span>
                                    <span class="arrow"></span>
                                </a>
                                
                            </li>
                        
                            
                            


                            
                            
                            
                            
                            
                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        
                        
 <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url('admin_dashboard'); ?>">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Professors</span>
                                </li>
                            </ul>
                            
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title">List of Professors
                            <small></small>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-users font-green"></i>
                                            <span class="caption-subject font-green bold uppercase">Professor List</span>
                                        </div>
                                       
                                    </div>
                                    <div class="portlet-body">
                                        <div id="bootstrap_alerts_demo"> </div>
                                        <table class="table table-striped table-bordered table-hover" id="prof_table">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                            <span></span>
                                                        </label>
                                                    </th>
                                                    <th>Fullname</th>
                                                    <th> Username </th>
                                                    <th>Address</th>
                                                    <th>Date Created</th>
                                                    <th> Status </th>
                                                    <th> Actions </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                                 <?php foreach($professors as $p): ?>
                                                <tr>
                                                    <td><label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="checkboxes" value="<?php echo $p['prof_id']; ?>" />
                                                            <span></span>
                                                        </label></td>
                                                    <td><a href="<?php echo base_url().'viewProfile/'.$p['prof_id'];?>"><?php echo $p['firstname']." ".$p['lastname'];?></a></td>
                                                    <td><?php echo $p['uname']; ?></td>
                                                    <td><?php echo $p['address']; ?></td>
                                                    <td><?php echo $p['date_created']; ?></td>
                                                    <td><?php $this->Pr->status($p['status']); ?></td>
                                                    <td><button   value="<?php echo $p['prof_id']; ?>" class="btn edit btn-md btn-icon-only blue"><i class="fa fa-pencil"></i></button><button  value="<?php echo $p['prof_id']; ?>" class="btn delete btn-md btn-icon-only red"><i class="fa fa-close"></i></button></td>
                                                </tr>

                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                                <!-- END PORTLET-->
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->

</div>
          