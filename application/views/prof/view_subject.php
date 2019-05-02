
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
                                <a href="<?php echo base_url('idashboard'); ?>" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Dashboard</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                
                            </li>
                            <li class="heading">
                                <h3 class="uppercase">Management</h3>
                            </li>
                             <li class="nav-item  start active open`">
                                <a href="<?php echo base_url('profile'); ?>" class="nav-link nav-toggle">
                                    <i class="icon-diamond"></i>
                                    <span class="title">My Profile</span>
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
                                     <a href="<?php echo base_url('profile'); ?>">My Profile</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <u><?php echo $subject['subj_code']." ".$subject['subj_name']; ?></u>
                                </li>
                            </ul>
                            
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                       
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <br>
                    <div class="m-heading-1 m-bordered border-green-seagreen">
                        &nbsp;<small><?php echo $subject['subj_code']." ".$subject['subj_name'];?></small>
                        <h1 style="margin-top:5px !important;padding-top: 0px !important;" class="block font-green-seagreen"><?php echo $subject['subj_code']." ".$subject['subj_name'];?></h1>
                        <p>Created at: <?php echo date('F d, Y',strtotime($subject['date_created'])); ?></p>
                        <p>Instructor: <?php $prof = $this->Pr->getProf($this->uri->segment(2));
                                        echo $prof['firstname']." ".$prof['lastname']; ?></p><br>
                                        <a href="<?php echo base_url('view_exams/').$subject['subj_id']; ?>" class="btn btn-outline btn-sm green-seagreen btn-circle"><i class="fa fa-search"></i> View Examinations</a>
                        <button class="btn btn-outline btn-sm green-seagreen btn-circle"><i class="fa fa-pencil"></i> Edit Details</button>
                        <button class="btn btn-outline btn-sm green-seagreen btn-circle"><i class="fa fa-trash-o"></i> Delete Subject</button>
                       
                    </div>

                    <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN PORTLET-->
                                <div class="portlet box green-seagreen ">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-user-plus font-white"></i>
                                            <span class="caption-subject font-white bold uppercase">Students List</span>
                                        </div>
                                       
                                    </div>
                                    <div class="portlet-body">
                                        <div id="bootstrap_alerts_demo"> </div>
                                        <button data-toggle="modal" href="#addStudent" style="margin-bottom:8px !important;" class="btn green-seagreen btn-circle btn-outline"><i class="fa fa-plus"></i>Add Students</button>
                                        <table  class="table table-striped table-bordered table-hover" id="stud_table">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                            <span></span>
                                                        </label>
                                                    </th>
                                                    <th>Student ID</th>
                                                    <th>Firstname</th>
                                                    <th>Lastname</th>
                                                    
                                                    <th>Date Created</th>
                                                    <th> Status </th>
                                                    <th> Actions </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if($this->Sd->getBySubj() != NULL): ?>
                                               <?php foreach($this->Sd->getBySubj() as $stud): ?>
                                                <tr>
                                                    <td> <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                            <span></span>
                                                        </label></td>
                                                        <td><?php echo $stud['studentId']; ?></td>
                                                    <td><?php echo $stud['fname']; ?></td>
                                                      <td><?php echo $stud['lname']; ?></td>
                                                        <td><?php echo date('F d, Y',strtotime($stud['date_created'])); ?></td>
                                                        <td><?php $this->Sd->status($stud['status']); ?></td>
                                                        <td><button   value="<?php echo $stud['stud_id']; ?>" class="btn sdedit btn-md btn-icon-only blue"><i class="fa fa-pencil"></i></button><button  value="<?php echo  $stud['stud_id']; ?>" class="btn sddelete btn-md btn-icon-only red"><i class="fa fa-close"></i></button></td>
                                                </tr>

                                               <?php endforeach; ?>
                                            <?php endif; ?>
                                                
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


               <!-- subject modal -->
               <div class="modal fade bs-modal-lg" id="addStudent" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-blue-soft">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                        <h4 class="modal-title font-white">Add Student</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="hidden" id="subjectid" value="<?php echo $this->uri->segment(3); ?>">
                                            <div id="addOptions">
                                                <h2><a  id="addI">Add Student</a></h2>
                                                (Add an individual student by providing the info)
                                                <br>
                                                <h2><a  id="addB">Import from Subject</a></h2>
                                                (Import student/s from other subjects)
                                                <br><hr>

                                                <button type="button" class="btn btn-md btn-outline btn-circle green-seagreen" data-dismiss="modal"><i class="fa fa-remove"></i> Cancel</button>

                                                
                                            </div>
                        <div id="addBulk" hidden="hidden">
                                       <form class="form-horizontal" role="form">
                                        
                                                            <div class="form-group">
                                                                <label class="control-label col-md-2">Subject</label>
                                                        <div class="col-md-10">
                                                                    <div class="margin-bottom-10">
                            <select id="selectsub" class="bs-select form-control input-medium" data-style="btn-success">
                                <option value="p" selected disabled>Select Subject.....</option>
                                    <?php $subjects2 = $this->Sb->getByProf($this->uri->segment(2),$this->uri->segment(3));
                                                foreach($subjects2 as $s): ?>
                                <option value="<?php echo $s['subj_id']; ?>"><?php echo $s['subj_name']; ?></option>
                                    <?php endforeach; ?>
                            </select>
                                                                </div>
                                                                </div>
                                                            </div>
                                        <div class="col-md-offset-2">
                                        <div id="info">
                                            <h5 id="textinfo">Please select a subject to view and select students</h5>
                                       </div>  
                                            </div>
                            <!-- table -->
                <div id="searchtable" hidden>
                    <table  class="table table-striped table-bordered table-hover" id="search_table">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" id="sd_selectall" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                            <span></span>
                                                        </label>
                                                    </th>
                                                    <th>Firstname</th>
                                                    <th>Lastname</th>
                                                    
                                                    <th>Date Created</th>
                                                    <th> Status </th>
                                                  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                
                                            </tbody>
                                        </table>
                             <button style="float:right !important;" type="button" id="import" class="btn btn-md btn-outline btn-circle green-seagreen"><i class="fa fa-upload"></i> Import</button>            
</div>



                            <!-- end table -->

                                                      
                                            <div class="col-md-offset-2">
                                                
                                               
                                                <button type="button" id="back2" class="btn btn-md btn-outline btn-circle green-seagreen">Cancel</button>

                                            </div>
                                                            
                                                            
                                     </form>
                </div>
        
               

                    
                                <div id="addOne" hidden="hidden">
                                            <form  class="form-horizontal" id="add_stud" novalidate="novalidate">
                                           <div class="form-body">
                                             <input type="hidden" id="subj_id" value="<?php echo $subject['subj_id']; ?>">
                                             <div class="form-group form-md-line-input">
                                                    <label class="col-md-2 control-label" for="form_control_1">Student Number:</label>
                                                    <div class="col-md-8">
                                                        <input type="text" id="sname" name="sname" class="form-control" placeholder="Enter Student Number..">
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-2 control-label" for="form_control_1">Firstname:</label>
                                                    <div class="col-md-8">
                                                        <input type="text" id="fname" name="fname" class="form-control" placeholder="Enter Firstname..">
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>
                                                
                                                 <div class="form-group form-md-line-input">
                                                    <label class="col-md-2 control-label" for="form_control_1">Lastname:</label>
                                                    <div class="col-md-8">
                                                        <input type="text" id="lname" name="lname" class="form-control" placeholder="Enter Lastname">
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>

                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-2 control-label" for="form_control_1">Username:</label>
                                                    <div class="col-md-8">
                                                        <input type="text" id="uname" name="uname" class="form-control" placeholder="Enter Username">
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>

                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-2 control-label" for="form_control_1">Password:</label>
                                                    <div class="col-md-8">
                                                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>

                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-2 control-label" for="form_control_1">Confirm Password:</label>
                                                    <div class="col-md-8">
                                                        <input type="password" id="cpassword" name="cpassword" class="form-control" placeholder="Confirm Password">
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>
                                                
                                                 

                                               <div class="col-md-offset-2">

                                               <button type="submit" class="btn btn-md btn-outline btn-circle green-seagreen"><i class="fa fa-plus"></i> Save</button>
                                                <button type="button" id="back1" class="btn btn-md btn-outline btn-circle green-seagreen">Cancel</button>

                                            </div>
                    </form> 
                </div>
               </div>
                                                        

                                               
                                            </div>
                                            
        
                                       
                                        </div>
                                                    

                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
<!-- end subject modal -->