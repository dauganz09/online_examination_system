
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
                                <a href="<?php echo base_url('sdashboard'); ?>" class="nav-link nav-toggle">
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
                                <a href="<?php echo base_url('examinations'); ?>" class="nav-link nav-toggle">
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
                                    <a href="<?php echo base_url('sdashboard'); ?>">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Examinations</span>
                                </li>
                            </ul>
                            
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title">My Examinations
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
                                            <i class="fa fa-file-text-o font-green"></i>
                                            <span class="caption-subject font-green bold uppercase">My Examinations</span>
                                        </div>
                                       
                                    </div>
                                    <div class="portlet-body">
                                        <div class="row" id="exambox">
                                       

                  
                                       <?php if($examsubjs == null): ?>
                                    <div class="alert alert-info">No Examinations</div>

                                       <?php endif; ?>
                                        <?php foreach($examsubjs as $ex):?>

            
                                            
                                            <div class="col-md-6 col-sm-12">
                                                <div class="portlet box green-seagreen">
                                                    <div class="portlet-title">
                                                       
                                                        <div class="caption">
                                                             <i class="icon-book-open"></i>
                                        <?php echo $ex['exam']['exam_name']; ?>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="row static-info">
                                                            <div class="col-md-5 value">Subject Name: </div>
                                                             <div class="col-md-7 value"><?php echo  $ex['subjects']['subj_code']." - ".$ex['subjects']['subj_name']; ?> </div>
                                                        </div>
                                                        <div class="row static-info">
                                                            <div class="col-md-5 value">Instructor: </div>
                                                             <div class="col-md-7 value"><?php echo  $ex['instructor']['firstname']." ". $ex['instructor']['lastname'] ?> </div>
                                                        </div>
                                                         <div class="row static-info">
                                                            <div class="col-md-5 value">Available from: </div>
                                                             <div class="col-md-7 value"><?php echo $ex['exam']['exam_start']; ?> </div>
                                                        </div>
                                                        <div class="row static-info">
                                                            <div class="col-md-5 value">Available until: </div>
                                                             <div class="col-md-7 value"><?php echo $ex['exam']['exam_end']; ?> </div>
                                                        </div>
                                                        <div class="row static-info">
                                                            <div class="col-md-5 value">Time Limit: </div>
                                                             <div class="col-md-7 value"><?php echo $ex['exam']['time_limit']." minutes"; ?> </div>
                                                        </div>
                                                        <div class="row static-info">
                                                            <div class="col-md-5 value">Status: </div>
                                                             <div class="col-md-7 value"><?php if($ex['exam']['published'] == 1){ echo '<span class="label label-success">Activated</span>';}else{echo '<span class="label label-danger">Not Activated</span>';} ?> </div>
                                                        </div>
                                                        <div class="row static-info">
                                                            <div class="col-md-5 value">No of Questions: </div>
                                                             <div class="col-md-7 value"><?php echo $ex['questions']; ?></div>
                                                        </div>
                                                        <div class="row static-info">
                                                            <div class="col-md-5 value">Points: </div>
                                                             <div class="col-md-7 value"><?php echo $ex['points']; ?></div>
                                                        </div>
                                                        <div class="row static-info">
                                                            <div class="col-md-5 name"></div>
                                                             <div class="col-md-7"><a  href="<?php echo base_url('takeExam/').$ex['exam']['exam_id'];  ?>" class="btn btn-md btn-outline green"><i class="fa fa-arrow-right"></i> View Exam</a></div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>                                                


                                            </div>

                                        <?php endforeach;?> 
                                            


                                        </div>

                                        
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
          