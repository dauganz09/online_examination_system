
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
                                    <li class="nav-item">
                                        <a href="<?php base_url(); ?>professors" class="nav-link ">
                                            <span class="title">Manage Professor</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>

                            <li class="nav-itemv">
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

                            <li class="nav-item   start active open    ">
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
                                    <a href="<?php echo base_url('exams'); ?>">Examinations</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                 <li>
                                    <span>Item Analysis</span>
                                </li>
                               
                               
                            </ul>
                            
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title">Item Analysis
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
                                            <span class="caption-subject font-green bold uppercase"><?php echo $exam['exam_name'] ?></span>
                                        </div>
                                        
                                    </div>
                                    <div class="portlet-body">
                                        <!-- add question -->
                                   
                                         <!--end add question -->
        
        <?php if($exam ==  NULL){echo "<div class='alert alert-info'>No Available Questions</div>";} ?> 

        <?php $i=1; foreach($exam['questions'] as $q): 
          ?>
            <?php $q = $this->Ex->getQuestions($q['question_id']);

           ?>
                                     <div class="portlet box blue-sharp">
                                         <div class="portlet-title">

                                        <div style="width:300px !important;" class="caption">
                                            
                                            <span  class="caption-subject font-white bold uppercase">Question <?php echo $i; ?></span>
                                        </div>

                                        <div  class="actions">
                                            
                                            <button type="button" id="edit_bank"  class="btn btn-lg btn-circle btn-outline btn-default"><i class="fa fa-pencil"></i></button>
                                            <button type="button" id="delete_bank"  class="btn btn-lg btn-circle btn-outline btn-default"><i class="fa fa-remove"></i></button>
                                            
                                            
                                       </div>
                                       <div class="tools" style="margin-right:10px !important;">
                                            <a  href="#" class="expand" data-original-title title></a>                                           
                                       </div>
                                    </div>

                                          <div class="portlet-body">
                                                <h1 style="font-size:20px !important;" class="font-blue-chambray"><?php echo $q['qtext']; ?></h1>
                                                <hr>
                                                <div id="qanswers">
                                    <?php $res = $this->Ex->students_results($exam['exam_id']); ?>
                                <?php $c = $this->Sd->studCorrect($q['q_id']); ?>
                                 <?php $w= $this->Sd->studWrong($q['q_id']); ?>
                                 <?php $totalstud = $this->Sd->allstud($exam['exam_id']);?>
                                  <?php $tot = $this->Sd->totStud($exam['exam_id']); 
                                        $c_p = ($c/$totalstud) * 100;
                                        $w_p = ($w/$totalstud) * 100;
                                        $totave = ($tot/$totalstud) *100;
                               
                  

                                  ?>
                                         <strong style="font-size: 20px;">No of Students who answered Correctly: <?php echo $c; ?> </strong> <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $c; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $c_p; ?>%"> <?php echo '<strong style="font-size: 20px;">'.floor($c_p).'</span>'; ?>%
                                              
                                            </div>
                                        </div>
                                        <strong style="font-size: 20px;">No of Students who answered Wrong: <?php echo $w; ?> </strong>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $w_p; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $w_p; ?>%"><?php echo '<strong style="font-size: 20px;">'.floor($w_p).'</span>'; ?>%
                                              
                                            </div>
                                        </div>

                               
                                            

                                      
                                                </div>
                                                <div class="m-heading-1 m-bordered border-green-seagreen">
                                                    <p><?php echo "Out of ".$totalstud." ".$this->Sd->grammar($tot)." who were assigned to the exam, a total of ".$tot." ".$this->Sd->grammar($totalstud)." took the exam or  ".$totave." % of the ".$this->Sd->grammar($totalstud); ?></p>
                                                    <p><?php echo "Out of this, ".$c." or ".$c_p." % got the correct answer while ".$w." or ".$w_p." % got the wrong answer." ?></p>
                                             
                                                </div>

                                          </div>

                                     </div>

<?php $i++; endforeach; ?>                                

                                        
                                    </div>

                                    <div class="portlet box green-seagreen">
                                         <div class="portlet-title">

                                        <div style="width:300px !important;" class="caption">
                                            
                                            <span  class="caption-subject font-white bold uppercase">Overall Analysis</span>
                                        </div>

                                        <div  class="actions">
                                            
                                            <button type="button" id="edit_bank"  class="btn btn-lg btn-circle btn-outline btn-default"><i class="fa fa-pencil"></i></button>
                                            <button type="button" id="delete_bank"  class="btn btn-lg btn-circle btn-outline btn-default"><i class="fa fa-remove"></i></button>
                                            
                                            
                                       </div>
                                       <div class="tools" style="margin-right:10px !important;">
                                            <a  href="#" class="expand" data-original-title title></a>                                           
                                       </div>
                                    </div>

                                          <div class="portlet-body">
                                            <table  class="table table-striped border-green-seagreen table-hover green">
                                            <thead>
                                                <tr>
                                                   
                                                    <th>Students who Passed (Passing Percentage: <?php echo $res['percent']." %)" ?> </th>
                                                   
                                                    
                                                    <th>Students who Failed</th>
                                                    <th>No. of Students who took the Exam</th>
                                                    <th>No. of Students who have not yet taken the Exam</th>
                                                     <th>Students enrolled in the subject</th>
                                                   

                                                    
                                                  
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <tr>
                                                <?php $ppassers = ($res['passers']/$this->Sd->count_tstudents($exam['exam_id'])) * 100; ?>
                                                 <?php $pfailed = ($res['failed']/$this->Sd->count_tstudents($exam['exam_id'])) * 100; ?>
                                                
                                                   <td><h3><?php echo $res['passers']."passers out of ".$this->Sd->count_tstudents($exam['exam_id'])." or ".$ppassers." % "; ?></h3></td>
                                                    <td><h3><?php echo $res['failed']."failed students out of ".$this->Sd->count_tstudents($exam['exam_id'])." or ".$pfailed." % "; ?></h3></td>
                                                    <td><h3><?php echo $this->Sd->count_tstudents($exam['exam_id'])." out of ".$totalstud." students"; ?></h3></td>
                                                    <td><h3><?php echo $this->Sd->count_nstudents($exam['exam_id'])." out of ".$totalstud." students"; ?></h3></td>
                                                    <td><h3><?php echo $this->Sd->total_students_in_subject($exam['exam_id']); ?></h3></td>
                                               </tr>
                                                
                                            </tbody>
                                        </table>  

                                        <hr>

                                        
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
          