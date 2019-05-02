
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <div class="page-sidebar navbar-collapse collapse">
                       
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
                            <li class="nav-item start active open">
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
                            
                           

                             <li class="nav-item">
                                <a href="<?php echo base_url('examinations'); ?>" class="nav-link nav-toggle">
                                    <i class="icon-diamond"></i>
                                    <span class="title">Examinations</span>
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
                        <!-- BEGIN THEME PANEL -->
                        <div class="theme-panel hidden-xs hidden-sm">
                            <div class="toggler"> </div>
                            <div class="toggler-close"> </div>
                            <div class="theme-options">
                                <div class="theme-option theme-colors clearfix">
                                    <span> THEME COLOR </span>
                                    <ul>
                                        <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>
                                        <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue"> </li>
                                        <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>
                                        <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>
                                        <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>
                                        <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2"> </li>
                                    </ul>
                                </div>
                                <div class="theme-option">
                                    <span> Theme Style </span>
                                    <select class="layout-style-option form-control input-sm">
                                        <option value="square" selected="selected">Square corners</option>
                                        <option value="rounded">Rounded corners</option>
                                    </select>
                                </div>
                                <div class="theme-option">
                                    <span> Layout </span>
                                    <select class="layout-option form-control input-sm">
                                        <option value="fluid" selected="selected">Fluid</option>
                                        <option value="boxed">Boxed</option>
                                    </select>
                                </div>
                                <div class="theme-option">
                                    <span> Header </span>
                                    <select class="page-header-option form-control input-sm">
                                        <option value="fixed" selected="selected">Fixed</option>
                                        <option value="default">Default</option>
                                    </select>
                                </div>
                                <div class="theme-option">
                                    <span> Top Menu Dropdown</span>
                                    <select class="page-header-top-dropdown-style-option form-control input-sm">
                                        <option value="light" selected="selected">Light</option>
                                        <option value="dark">Dark</option>
                                    </select>
                                </div>
                                <div class="theme-option">
                                    <span> Sidebar Mode</span>
                                    <select class="sidebar-option form-control input-sm">
                                        <option value="fixed">Fixed</option>
                                        <option value="default" selected="selected">Default</option>
                                    </select>
                                </div>
                                <div class="theme-option">
                                    <span> Sidebar Menu </span>
                                    <select class="sidebar-menu-option form-control input-sm">
                                        <option value="accordion" selected="selected">Accordion</option>
                                        <option value="hover">Hover</option>
                                    </select>
                                </div>
                                <div class="theme-option">
                                    <span> Sidebar Style </span>
                                    <select class="sidebar-style-option form-control input-sm">
                                        <option value="default" selected="selected">Default</option>
                                        <option value="light">Light</option>
                                    </select>
                                </div>
                                <div class="theme-option">
                                    <span> Sidebar Position </span>
                                    <select class="sidebar-pos-option form-control input-sm">
                                        <option value="left" selected="selected">Left</option>
                                        <option value="right">Right</option>
                                    </select>
                                </div>
                                <div class="theme-option">
                                    <span> Footer </span>
                                    <select class="page-footer-option form-control input-sm">
                                        <option value="fixed">Fixed</option>
                                        <option value="default" selected="selected">Default</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- END THEME PANEL -->
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.html">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Dashboard</span>
                                </li>
                            </ul>
                            <div class="page-toolbar">
                                <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                                    <i class="icon-calendar"></i>&nbsp;
                                    <span class="thin uppercase hidden-xs"></span>&nbsp;
                                    <i class="fa fa-angle-down"></i>
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title">  Dashboard
                          <small>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <!-- BEGIN DASHBOARD STATS 1-->
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                    <div class="visual">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="1349">0</span>
                                        </div>
                                        <div class="desc"> No Students </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                                    <div class="visual">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="12">0</span></div>
                                        <div class="desc"> No of Proffessors </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                                    <div class="visual">
                                        <i class="fa fa-book"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="549">0</span>
                                        </div>
                                        <div class="desc"> No of Exams </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                                    <div class="visual">
                                        <i class="fa fa-file"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="89"></span></div>
                                        <div class="desc"> No of Subjects </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- END DASHBOARD STATS 1-->
                        <div class="row">
                            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6">
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <span class="caption-subject font-dark bold uppercase">Recent Exam Results</span>
                                        </div>
                                    </div>  
                                    <div class="portlet-body">
                                         <?php if($r_exams == null): ?>
                                                        <div class="alert alert-info">No Recent Exams!!!</div>
                                                 
                                         <?php else: ?>        
                                        <table class="table table-bordered table-condesed">
                                            <tr>
                                                <th>Exam Name</th>
                                                <th>Total Points</th>
                                                <th>Score</th>
                                                <th>Date Taken</th>
                                                <th>Action</th>      


                                            </tr>
                                            <tbody>
                                                 
                                                <?php foreach ($r_exams as $e): ?>
                                                 <tr>
                                                    <td><?php echo $e['exam']['exam_name'];?></td>
                                                    <td><?php echo $e['points'];?></td>
                                                    <td><?php echo $e['score'];?></td>
                                                    <td><?php echo $e['date_taken'];?></td>
                                                    <td><a href="<?php echo base_url('viewExamDetail/').$e['exam']['exam_id'] ?>" class="btn btn-md green"><i class="fa fa-search"></i> View Details</a></td>

                                                </tr>
                                                <?php endforeach ?>
                                               
                                            </tbody>
                                        </table>
                                        <?php endif; ?> 
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6">
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <span class="caption-subject font-dark bold uppercase">Upcoming Exams</span>
                                        </div>
                                    </div>  
                                    <div class="portlet-body">
                                        <?php if($u_exams == null): ?>
                                                        <div class="alert alert-info">No Upcoming Exams!!!</div>
                                                 
                                         <?php else: ?>        
                                        <table class="table table-bordered table-condesed">
                                            <tr>
                                                <th>Exam Name</th>
                                                <th>Total Points</th>
                                                <th>Due</th>
                                                

                                            </tr>
                                            <tbody>
                                                 
                                                <?php foreach ($u_exams as $u): ?>
                                                 <tr>
                                                    <td><?php echo $u['exam']['exam_name'];?></td>
                                                    <td><?php echo $u['points'];?></td>
                                                   
                                                    <td><?php echo $u['exam']['exam_end'];?></td>
                                                  

                                                </tr>
                                                <?php endforeach ?>
                                               
                                            </tbody>
                                        </table>
                                        <?php endif; ?> 
                                    </div>

                                </div>
                            </div>
                            

                            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6">
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <span class="caption-subject font-dark bold uppercase">Exams you have not Taken</span>
                                        </div>
                                    </div>  
                                    <div class="portlet-body">
                                        <?php if($d_exams == null): ?>
                                                        <div class="alert alert-info">No Available Exams!!!</div>
                                                 
                                         <?php else: ?>        
                                        <table class="table table-bordered table-condesed">
                                            <tr>
                                                <th>Exam Name</th>
                                                <th>Total Points</th>
                                                <th>Status</th>
                                                <th>Due</th>
                                                

                                            </tr>
                                            <tbody>
                                                 
                                                <?php foreach ($d_exams as $d): ?>
                                                 <tr>
                                                    <td><?php echo $d['exam']['exam_name'];?></td>
                                                    <td><?php echo $d['points'];?></td>
                                                   <td><button class="btn btn-md red-thunderbird">Deactivated</button></td>
                                                    <td><?php echo $d['exam']['exam_end'];?></td>
                                                  

                                                </tr>
                                                <?php endforeach ?>
                                               
                                            </tbody>
                                        </table>
                                        <?php endif; ?> 
                                    </div>

                                </div>
                            </div>


                        </div>
                        
                        

                        
                    
                        
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
                
            </div>
            <!-- END CONTAINER -->