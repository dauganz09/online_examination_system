
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
                                        <a href="<?php echo base_url(); ?>addprofessor" class="nav-link ">
                                            <span class="title">Add Professor</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  active open ">
                                        <a href="<?php echo base_url(); ?>professors" class="nav-link ">
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
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-diamond"></i>
                                    <span class="title">Examination</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="<?php echo base_url('exams'); ?>" class="nav-link ">
                                            <span class="title">Manage Exams</span>
                                        </a>
                                    </li>
                                    
                                </ul>
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
                                   <a href="<?php echo base_url();?>professors">Professors</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                 <li>
                                    <span><?php echo ucfirst($professor['firstname'])." ".ucfirst($professor['lastname']);?></span>
                                </li>
                            </ul>
                            
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> Professor's Profile
                            
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="profile">
                            <div class="tabbable-line tabbable-full-width">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab_1_1" data-toggle="tab"> Overview </a>
                                    </li>
                                    <li>
                                        <a href="#tab_1_3" data-toggle="tab"> Account </a>
                                    </li>
                                   
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1_1">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <ul class="list-unstyled profile-nav">
                                                    <li>
                                                        <img src="../assets/pages/media/profile/people19.png" class="img-responsive pic-bordered" alt="" />
                                                        <a href="javascript:;" class="profile-edit"> edit </a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="row">
                                                    <div class="col-md-8 profile-info">
                                                        <input type="hidden" id="prof_id" value="<?php echo $professor['prof_id']; ?>">
                                                        <h1 class="font-green sbold uppercase"><?php echo ucfirst($professor['firstname'])." ".ucfirst($professor['lastname']);?></h1>
                                                       
                                                        <p>
                                                            <a href="javascript:;"><?php echo $professor['email']; ?></a>
                                                        </p>
                                                        <ul class="list-inline">
                                                            <li>
                                                                <i class="fa fa-map-marker"></i> <?php echo $professor['address']; ?> </li>
                                                            <li>
                                                                <i class="fa fa-calendar"></i>joined <?php echo $professor['date_created']; ?></li>
                                                           
                                                        </ul>
                                                    </div>
                                                    <!--end col-md-8-->
                                                    <div class="col-md-4">
                                                        <div class="portlet sale-summary">
                                                            <div class="portlet-title">
                                                                <div class="caption font-red sbold">Summary </div>
                                                                <div class="tools">
                                                                    <a class="reload" href="javascript:;"> </a>
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                <ul class="list-unstyled">
                                                                    <li>
                                                                        <span class="sale-info"> Students
                                                                            <i class="fa fa-img-up"></i>
                                                                        </span>
                                                                        <span class="sale-num"> 23 </span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="sale-info"> Subjects
                                                                            <i class="fa fa-img-down"></i>
                                                                        </span>
                                                                        <span class="sale-num"> 87 </span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="sale-info"> Examinations Made </span>
                                                                        <span class="sale-num"> 2377 </span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-md-4-->
                                                </div>
                                                <!--end row-->
                                
                                            </div>
                                        </div> <!-- end main row -->

                                                        <div class="tabbable-line tabbable-custom-profile">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active">
                                                            <a href="#tab_1_11" data-toggle="tab"> Subjects </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab_1_22" data-toggle="tab"> Examinations </a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab_1_11">
                                                            <div class="portlet-body">
                                                                <button style="margin-bottom:10px;" class="btn btn-md btn-info btn-circle" data-toggle="modal" href="#addSubject"><i class="fa fa-book"></i> Create Subject</button><br>
                                                                <table class="table table-striped table-bordered " id="subj_table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>
                                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="checkboxes" />
                                                            <span></span>
                                                        </label>
                                                                                 </th>
                                                                            <th>
                                                                                <i class="fa fa-code"></i> Subject Code </th>
                                                                                 <th class="hidden-xs">
                                                                                <i class="fa fa-book"></i> Subject Name </th>
                                                                            <th class="hidden-xs">
                                                                                <i class="fa fa-question"></i> Subject Description </th>
                                                                            <th>
                                                                                <i class="fa fa-calendar-plus-o"></i> Date Created </th>
                                                                            <th><i class="fa fa-users"></i> # of Students</th>
                                                                            <th><i class="fa fa-gears"></i> Actions</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                 <?php $subjects = $this->Sb->getByProf($professor['prof_id']);

                                                            foreach($subjects as $subject): ?>
                                                            <tr>
                                                                <td> <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" value="<?php echo $subject['subj_id']; ?>" class="checkboxes" />
                                                            <span></span>
                                                        </label></td>
                                                                <td><a href="<?php echo base_url().'viewSubject/'.$professor['prof_id'].'/'.$subject['subj_id']; ?>"><?php echo $subject['subj_code']; ?></a></td>
                                                                 <td><?php echo $subject['subj_name']; ?></td>
                                                                  <td><?php echo $subject['subj_desc']; ?></td>
                                                                   <td><?php echo date('F d, Y',strtotime($subject['date_created'])); ?></td>
                                                                   <td><?php echo $this->Sb->countStudents($subject['subj_id']); ?></td>
                                                                   <td><button   value="<?php echo $subject['subj_id']; ?>" class="btn sedit btn-md btn-icon-only blue"><i class="fa fa-pencil"></i></button><button  value="<?php echo $subject['subj_id']; ?>" class="btn sdelete btn-md btn-icon-only red"><i class="fa fa-close"></i></button></td>
                                                            </tr>

                                                        <?php endforeach; ?>
                                                                        
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <!--tab-pane examination-->
                                                        <div class="tab-pane" id="tab_1_22">
                                                            <div class="portlet-body">
                                                                <table class="table table-striped table-bordered table-advance table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>
                                                                                <i class="fa fa-briefcase"></i> Company </th>
                                                                            <th class="hidden-xs">
                                                                                <i class="fa fa-question"></i> Descrition </th>
                                                                            <th>
                                                                                <i class="fa fa-bookmark"></i> Amount </th>
                                                                            <th> </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <a href="javascript:;"> Pixel Ltd </a>
                                                                            </td>
                                                                            <td class="hidden-xs"> Server hardware purchase </td>
                                                                            <td> 52560.10$
                                                                                <span class="label label-success label-sm"> Paid </span>
                                                                            </td>
                                                                            <td>
                                                                                <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <a href="javascript:;"> Smart House </a>
                                                                            </td>
                                                                            <td class="hidden-xs"> Office furniture purchase </td>
                                                                            <td> 5760.00$
                                                                                <span class="label label-warning label-sm"> Pending </span>
                                                                            </td>
                                                                            <td>
                                                                                <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <a href="javascript:;"> FoodMaster Ltd </a>
                                                                            </td>
                                                                            <td class="hidden-xs"> Company Anual Dinner Catering </td>
                                                                            <td> 12400.00$
                                                                                <span class="label label-success label-sm"> Paid </span>
                                                                            </td>
                                                                            <td>
                                                                                <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <a href="javascript:;"> WaterPure Ltd </a>
                                                                            </td>
                                                                            <td class="hidden-xs"> Payment for Jan 2013 </td>
                                                                            <td> 610.50$
                                                                                <span class="label label-danger label-sm"> Overdue </span>
                                                                            </td>
                                                                            <td>
                                                                                <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <a href="javascript:;"> Pixel Ltd </a>
                                                                            </td>
                                                                            <td class="hidden-xs"> Server hardware purchase </td>
                                                                            <td> 52560.10$
                                                                                <span class="label label-success label-sm"> Paid </span>
                                                                            </td>
                                                                            <td>
                                                                                <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <a href="javascript:;"> Smart House </a>
                                                                            </td>
                                                                            <td class="hidden-xs"> Office furniture purchase </td>
                                                                            <td> 5760.00$
                                                                                <span class="label label-warning label-sm"> Pending </span>
                                                                            </td>
                                                                            <td>
                                                                                <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <a href="javascript:;"> FoodMaster Ltd </a>
                                                                            </td>
                                                                            <td class="hidden-xs"> Company Anual Dinner Catering </td>
                                                                            <td> 12400.00$
                                                                                <span class="label label-success label-sm"> Paid </span>
                                                                            </td>
                                                                            <td>
                                                                                <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <!--tab-pane-->
                                                    </div>
                                                </div>
                                    </div>
                                    <!--tab_1_2-->
                                    <div class="tab-pane" id="tab_1_3">
                                        <div class="row profile-account">
                                            <div class="col-md-3">
                                                <ul class="ver-inline-menu tabbable margin-bottom-10">
                                                    <li class="active">
                                                        <a data-toggle="tab" href="#tab_1-1">
                                                            <i class="fa fa-cog"></i> Personal info </a>
                                                        <span class="after"> </span>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="tab" href="#tab_2-2">
                                                            <i class="fa fa-picture-o"></i> Change Avatar </a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="tab" href="#tab_3-3">
                                                            <i class="fa fa-lock"></i> Change Password </a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="tab" href="#tab_4-4">
                                                            <i class="fa fa-eye"></i> Privacity Settings </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="tab-content">
                                                    <div id="tab_1-1" class="tab-pane active">
                                                        <form role="form" action="#">
                                                            <div class="form-group">
                                                                <label class="control-label">First Name</label>
                                                                <input type="text" placeholder="John" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Last Name</label>
                                                                <input type="text" placeholder="Doe" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Mobile Number</label>
                                                                <input type="text" placeholder="+1 646 580 DEMO (6284)" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Interests</label>
                                                                <input type="text" placeholder="Design, Web etc." class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Occupation</label>
                                                                <input type="text" placeholder="Web Developer" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">About</label>
                                                                <textarea class="form-control" rows="3" placeholder="We are KeenThemes!!!"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Website Url</label>
                                                                <input type="text" placeholder="http://www.mywebsite.com" class="form-control" /> </div>
                                                            <div class="margiv-top-10">
                                                                <a href="javascript:;" class="btn green"> Save Changes </a>
                                                                <a href="javascript:;" class="btn default"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div id="tab_2-2" class="tab-pane">
                                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. </p>
                                                        <form action="#" role="form">
                                                            <div class="form-group">
                                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                                    <div>
                                                                        <span class="btn default btn-file">
                                                                            <span class="fileinput-new"> Select image </span>
                                                                            <span class="fileinput-exists"> Change </span>
                                                                            <input type="file" name="..."> </span>
                                                                        <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix margin-top-10">
                                                                    <span class="label label-danger"> NOTE! </span>
                                                                    <span> Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                                                </div>
                                                            </div>
                                                            <div class="margin-top-10">
                                                                <a href="javascript:;" class="btn green"> Submit </a>
                                                                <a href="javascript:;" class="btn default"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div id="tab_3-3" class="tab-pane">
                                                        <form action="#">
                                                            <div class="form-group">
                                                                <label class="control-label">Current Password</label>
                                                                <input type="password" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">New Password</label>
                                                                <input type="password" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Re-type New Password</label>
                                                                <input type="password" class="form-control" /> </div>
                                                            <div class="margin-top-10">
                                                                <a href="javascript:;" class="btn green"> Change Password </a>
                                                                <a href="javascript:;" class="btn default"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div id="tab_4-4" class="tab-pane">
                                                        <form action="#">
                                                            <table class="table table-bordered table-striped">
                                                                <tr>
                                                                    <td> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus.. </td>
                                                                    <td>
                                                                        <div class="mt-radio-inline">
                                                                            <label class="mt-radio">
                                                                                <input type="radio" name="optionsRadios1" value="option1" /> Yes
                                                                                <span></span>
                                                                            </label>
                                                                            <label class="mt-radio">
                                                                                <input type="radio" name="optionsRadios1" value="option2" checked/> No
                                                                                <span></span>
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                    <td>
                                                                        <div class="mt-radio-inline">
                                                                            <label class="mt-radio">
                                                                                <input type="radio" name="optionsRadios21" value="option1" /> Yes
                                                                                <span></span>
                                                                            </label>
                                                                            <label class="mt-radio">
                                                                                <input type="radio" name="optionsRadios21" value="option2" checked/> No
                                                                                <span></span>
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                    <td>
                                                                        <div class="mt-radio-inline">
                                                                            <label class="mt-radio">
                                                                                <input type="radio" name="optionsRadios31" value="option1" /> Yes
                                                                                <span></span>
                                                                            </label>
                                                                            <label class="mt-radio">
                                                                                <input type="radio" name="optionsRadios31" value="option2" checked/> No
                                                                                <span></span>
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                    <td>
                                                                        <div class="mt-radio-inline">
                                                                            <label class="mt-radio">
                                                                                <input type="radio" name="optionsRadios41" value="option1" /> Yes
                                                                                <span></span>
                                                                            </label>
                                                                            <label class="mt-radio">
                                                                                <input type="radio" name="optionsRadios41" value="option2" checked/> No
                                                                                <span></span>
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <!--end profile-settings-->
                                                            <div class="margin-top-10">
                                                                <a href="javascript:;" class="btn green"> Save Changes </a>
                                                                <a href="javascript:;" class="btn default"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                    </div>
                                    <!--end tab-pane-->
                                    
                                    <!--end tab-pane-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->


               <!-- subject modal -->
               <div class="modal fade bs-modal-lg" id="addSubject" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-blue-soft">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                        <h4 class="modal-title font-white">Create Subject</h4>
                                                    </div>
                                                    <div class="modal-body"> <form  class="form-horizontal" id="add_sub" novalidate="novalidate">
                                           <div class="form-body">
                                             <input type="hidden" id="prof_id" value="<?php echo $professor['prof_id']; ?>">
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-2 control-label" for="form_control_1">Subject Code:</label>
                                                    <div class="col-md-8">
                                                        <input type="text" id="sub_code" name="sub_code" class="form-control" placeholder="Enter Subject Code..">
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>
                                                
                                                 <div class="form-group form-md-line-input">
                                                    <label class="col-md-2 control-label" for="form_control_1">Subject Name:</label>
                                                    <div class="col-md-8">
                                                        <input type="text" id="sub_name" name="sub_name" class="form-control" placeholder="Enter Subject Name">
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>

                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-2 control-label" for="form_control_1">Subject Description:</label>
                                                    <div class="col-md-8">
                                                        <input type="text" id="sub_desc" name="sub_desc" class="form-control" placeholder="Enter Subject Description">
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>
                                                
                                                 

                                               

                                               

                                               
                                            </div>
                                            
        
                                       
                                        </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-lg green"><i class="fa fa-plus"></i> Save</button>
</form> 
                                                        <button type="button" class="btn btn-lg dark" data-dismiss="modal"><i class="fa fa-remove"></i> Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
<!-- end subject modal -->