
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
                            <li class="nav-item">
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
                                    <li class="nav-item  ">
                                        <a href="<?php base_url(); ?>professors" class="nav-link ">
                                            <span class="title">Manage Professor</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>

                            <li class="nav-item   start active open  ">
                               <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-diamond"></i>
                                    <span class="title">Students</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  active open">
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
                                <a href="<?php echo base_url('exams'); ?>" class="nav-link nav-toggle">
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
                                    <a>Add Student</a>
                                </li>
                            </ul>
                            
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> Add Student
                            <small>| Fill up Information</small>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-user-follow font-green"></i>
                                            <span class="caption-subject font-green bold uppercase">Student Information</span>
                                        </div>
                                       
                                    </div>
                                    <div class="portlet-body">
                                        <div id="bootstrap_alerts_demo"> </div>
                                        <form  class="form-horizontal" id="add_student2" novalidate="novalidate">
                                           <div class="form-body">
                                            <div class="form-group form-md-line-input">
                                                    <label class="col-md-2 control-label" for="form_control_1">Subject:</label>
                                                    <div class="col-md-4">
                                                       <select class="form-control" name="" id="subj_id">
                                                            <option value="" selected hidden>Select Subject...</option>
                                                <?php $sub = $this->Sb->selectAllSub();
                                                        foreach($sub as $s):
                                                 ?>
                                                <option value="<?php echo $s['subj_id']; ?>"><?php echo $s['subj_code']." - ".$s['subj_name'];?></option>

                                             <?php endforeach; ?>
                                                        </select>
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>
                                            <div class="form-group form-md-line-input">
                                                    <label class="col-md-2 control-label" for="form_control_1">Student number:</label>
                                                    <div class="col-md-8">
                                                        <input type="text" id="sname" name="sname" class="form-control" placeholder="Enter student number">
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-2 control-label" for="form_control_1">Firstname:</label>
                                                    <div class="col-md-8">
                                                        <input type="text" id="fname" name="fname" class="form-control" placeholder="Enter your firstname">
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>
                                                
                                                 <div class="form-group form-md-line-input">
                                                    <label class="col-md-2 control-label" for="form_control_1">Lastname:</label>
                                                    <div class="col-md-8">
                                                        <input type="text" id="lname" name="lname" class="form-control" placeholder="Enter your lastname">
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>

                                               
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-2 control-label" for="form_control_1">Username:</label>
                                                    <div class="col-md-8">
                                                        <input type="text" id="uname" name="uname" class="form-control" placeholder="Enter your username">
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>

                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-2 control-label" for="form_control_1">Password:</label>
                                                    <div class="col-md-8">
                                                        <input type="password" id="password" name="password" id="password" class="form-control" placeholder="Enter your password">
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>

                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-2 control-label" for="form_control_1">Confirm Password:</label>
                                                    <div class="col-md-8">
                                                        <input type="password" id="cpassword" name="password2" class="form-control" placeholder="Confirm password">
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                
                                                
                                                
                                               
                                              
                                                
                                                
                                                
                                            </div>
                                            
                                            
                                           
                                            
                                            
                                            
                                           
                                            
                                            
                                       
                                        <div class="col-md-offset-2">
                                             <button type="submit" class="btn btn-lg green"><i class="fa fa-plus"></i> Save</button>

                                             <a href="<?php echo base_url('students'); ?>" class="btn btn-outline btn-lg red"><i class="fa fa-close"></i> Cancel</a>
                                        </div>
                                        </form>
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
          