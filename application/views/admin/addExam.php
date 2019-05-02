
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
                                <a href="<?php echo base_url('professors'); ?>" class="nav-link nav-toggle">
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

                            <li class="nav-item   start active open  ">
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
                                    <a href="index.html">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Examination</span>
                                    <i class="fa fa-circle"></i>
                                </li>
                                 <li>
                                    <span>Create Exam</span>
                                </li>
                            </ul>
                            
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> Create Examination
                            <small>| Fill up Information</small>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption" style="float:right !important;">
                                           
                                            <span class="caption-subject font-green bold uppercase">Total Points <span id="totpoints">0</span></span> 
                                        </div>
                                       
                                    </div>
                                    <div class="portlet-body">
                                      
<!-- -->

                                            <div class="tabbable-line">
                                            <ul class="nav nav-tabs ">
                                                <li class="active">
                                                    <a href="#tab_15_1" data-toggle="tab"> Setup </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_15_2" data-toggle="tab"> Questions </a>
                                                </li>
                                                
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_15_1">
                                                   <div class="tab-pane active" id="tab_15_1">
                                                  <form  class="form-horizontal" id="add_prof" novalidate="novalidate">
                                           <div class="form-body">
                                            <div class="form-group form-md-line-input">
                                                    <label class="col-md-2 control-label" for="form_control_1">Assign to:</label>
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
                                                    <label class="col-md-2 control-label" for="form_control_1">Examination Name:</label>
                                                    <div class="col-md-4">
                                                        <input type="text" id="exam_name" name="exam_name" class="form-control" placeholder="Enter Exam Name">
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>
                                                
                                                 <div class="form-group form-md-line-input">
                                                    <label class="col-md-2 control-label" for="form_control_1">Quiz Instructions:</label>
                                                    <div class="col-md-8">
                                                        <textarea id="instructions" class="questionname" name="questionname" id="" cols="30" rows="10"></textarea>    
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-2 control-label" for="form_control_1">Passing Percentage:</label>
                                                    <div class="col-md-2">
                                                        <div class="input-group">
                                                        <input type="text" id="percentage" name="percentage" class="form-control"><span class="input-group-addon">%</span> 
                                                        <div class="form-control-focus"> </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-2 control-label" for="form_control_1">Options:</label>
                                                    <div class="col-md-8">
                                                        <input name="shuffle" id="shuffle" type="checkbox" class="icheckbox_flat-green"> <span class="fa-item">Shuffle</span> 
                                                    </div>
                                                     
                                                    </div>
                                               
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-2 control-label" for="form_control_1"></label>
                                                     <div class="col-md-8">
                                                        <input name="timel" id="timel" type="checkbox" class="icheckbox_flat-green"><span class="fa-item"> Time Limit</span> <input type="text" id="timelimit" name="number"  disabled> minutes 
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-2 control-label" for="form_control_1"></label>
                                                     <div class="col-md-8">
                                                        <input name="status" id="status" type="checkbox" checked class="icheckbox_flat-green"><span class="fa-item"> Activate</span>
                                                    </div>
                                                </div>
                                                

                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-2 control-label" for="form_control_1">Available from:</label>
                                                    <div class="col-md-4">
                                                        <input type="text" id="start" name="start" class="form-control">

                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>

                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-2 control-label" for="form_control_1">Until:</label>
                                                    <div class="col-md-4">
                                                        <input type="text" id="end" name="end" class="form-control">
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>

                                                
                                            </div>
                                            </form>
                                            
                                                              
                                                
                                            </div>
                                                </div>
                                                <div class="tab-pane" id="tab_15_2">
                                                    <!-- content-->
                                                        
                                                        <div id="examquestions">
                                                            
                                                        </div>
                                        <div id="addQuestion" hidden>
                                            <!-- add question form -->
                                                <form action="" class="form-horizontal" id="bankform" novalidate="novalidate">
                                           <div class="form-body">
                                            <div class="form-group form-md-line-input">
                                                    <label class="col-md-2 control-label" for="form_control_1">Points:</label>
                                                    <div class="col-md-2">
                                                       <input id="qpoints" class="form-control" type="text">
                                                    </div>
                                             </div>
                                       
                                                  <div class="form-group form-md-line-input">
                                                    <label class="col-md-2 control-label" for="form_control_1">Question Type:</label>
                                                    <div class="col-md-3">
                                                       <select id="qtype" class="form-control">
                                                           <option value="1" selected>Multiple Choice</option>
                                                           <option value="2">Multiple Answers</option>
                                                        <option value="3">True or False</option>
                                                       </select>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-2 control-label" for="form_control_1">Question:</label>
                                                    <div class="col-md-10">
                                                       <textarea class="questionname" form-control" id="qname" name="questionname" id="questionname" cols="30" rows="10"></textarea>
                                                    </div>
                                                </div>

                                                 <div class="form-group form-md-line-input">
                                                    <label class="col-md-2 control-label" for="form_control_1">Answers:</label>
                                                   
                                                </div>
                                                <!-- answers box -->
                                    <div id="answerbox" class="answerbox">
                                        
                                                <div class="form-group form-md-line-input">
                                                <div class="col-md-offset-1">
                                                    <input name="multipleans[]" type="radio" checked class="icheckbox_flat-green">
                                                       
                                                </div>
                                                    <div class="col-md-offset-2">
                                                         <div class="col-md-8">
                                                       <input class="form-control" type="text" name="MCanswer[]">
                                                   </div>
                                                    </div>
                                                </div>
                                       
                                                 
                                    </div>
                                    <div class="col-md-offset-8">
                                                 <button type="button" id="add_answer" class="btn btn-sm btn-circle btn-outline blue-sharp"><i class="fa fa-plus"></i> Add Another Answer</button> 
</div>



                                                <!-- end answers-->
                                                
                                            </div>
                                
                                        <div class="col-md-offset-2">
                                             <button type="button" id="saveMC2" class="btn btn-sm green"><i class="fa fa-plus"></i> Save</button>

                                             <button type="button" id="cancelMC2" class="btn btn-outline btn-sm red"><i class="fa fa-close"></i> Cancel</button>
                                        </div>
                                        </form>
                                        <!--end add question form -->
                                                            
                                            </div>
                                                        <div id="buttons" class="margin-top-10">
                                                            <div class="row">
                                                                <div class="col-md-offset-3">
                                                                    <button id="newq" class="btn btn-md btn-outline green-seagreen">
                                                                        <i class="fa fa-plus"></i> New Question</button>
                                                        <button id="newbq" data-toggle="modal" href="#addBankQ" class="btn btn-md btn-outline green-seagreen">
                                                            <i class="fa fa-search-plus"></i> Add Questions from Bank</button>
                                                                         <button type="button" data-toggle="modal" href="#addSingleQ" id="newbq" disabled class="btn btn-md btn-outline green-seagreen">
                                                                        <i class="fa fa-search"></i> Find Individual Questions</button>
                                                                </div>

                                                            </div>
                                                        </div>


                                                     <!-- end content-->

                                                </div>
                                                
                                            </div>
                                        </div>



<!-- -->


                                        
                                        </div>
                                        <!-- -->
                                       
                                        <div class="form-actions margin-top-10">
                                                <div class="row">
                                                    <div class="col-md-offset-6">
                                                         <a  href="<?php echo base_url('exams'); ?>" class="btn btn-lg btn-outline red"> Cancel</a>
                                                    
                                                        
                                                    
                                                        <button type="button" id="saveExam" class="btn btn-lg btn-outline green-seagreen"> Save</button>
                                                    </div>
                                                </div>
                                            </div>

                                        <!-- -->
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

<!-- add bank q modal -->
               <div class="modal fade bs-modal-lg" id="addBankQ" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-blue-soft">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                        <h4 class="modal-title font-white">Add Questions from Bank</h4>
                                                    </div>
                                                    <div class="modal-body">
                                        
                                        
                            <!-- table -->
                
                    <table  class="table table-striped table-bordered table-hover" id="qbank_table">
                                            <thead>
                                                <tr>
                                                   
                                                    <th>Question Bank Name</th>
                                                    <th>No. of Questions</th>
                                                    
                                                    <th>Action</th>
                                                    
                                                  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $qbanks = $this->Ex->getBanksCount(); ?>
                                                <?php foreach($qbanks as $bank): ?>
                                                    <tr>
                                                    <td><?php echo $bank['qb_name']; ?></td>
                                                     <td><?php echo $bank['questions']; ?></td>
                                                     <td><button type="button"  value="<?php echo $bank['qb_id']; ?>" class="btn btn-circle btn-sm btn-outline green-seagreen addbankqu"><i class="fa fa-plus"></i></button></td>
                                                    </tr>


                                                <?php endforeach; ?>
                                                
                                            </tbody>
                                        </table>
                             
</div>



                            <!-- end table -->

                                            <div class="modal-footer">         
                                            
                                                
                                               
                                                <button type="button" data-dismiss="modal" class="btn btn-md btn-outline btn-circle green-seagreen">Cancel</button>

                                           
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

<!-- add bank q modal -->
               <div class="modal fade bs-modal-lg" id="addSingleQ" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-blue-soft">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                        <h4 class="modal-title font-white">Find Questions</h4>
                                                    </div>
                                                    <div class="modal-body">
                                        
                                        
                            <!-- table -->
                
                    <table  class="table table-striped table-bordered table-hover" id="ques_table">
                                            <thead>
                                                <tr>
                                                   
                                                    <th>Question Name</th>
                                                    <th>Points</th>
                                                    
                                                    <th>Action</th>
                                                    
                                                  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $ques = $this->Ex->getSingleQ(); ?>
                                                <?php foreach($ques as $q): ?>
                                                    <tr>
                                                    <td><?php echo $q['question_text']; ?></td>
                                                     <td><?php echo $q['points']; ?></td>
                                                     <td><button type="button"  value="<?php echo $q['question_id']; ?>" class="btn btn-circle btn-sm btn-outline green-seagreen addsingle"><i class="fa fa-plus"></i></button></td>
                                                    </tr>


                                                <?php endforeach; ?>
                                                
                                            </tbody>
                                        </table>
                             
</div>



                            <!-- end table -->

                                            <div class="modal-footer">         
                                            
                                                
                                               
                                                <button type="button" data-dismiss="modal" class="btn btn-md btn-outline btn-circle green-seagreen">Cancel</button>

                                           
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

<!-- add topic modal -->
               <div class="modal fade bs-modal-lg" id="add_topic" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-blue-soft">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                        <h4 class="modal-title font-white">Find Questions</h4>
                                                    </div>
                                                    <div class="modal-body">
                                        
                                        
                            <!-- table -->
                
                    <table  class="table table-striped table-bordered table-hover" id="ques_table">
                                            <thead>
                                                <tr>
                                                   
                                                    <th>Question Name</th>
                                                    <th>Points</th>
                                                    
                                                    <th>Action</th>
                                                    
                                                  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $ques = $this->Ex->getSingleQ(); ?>
                                                <?php foreach($ques as $q): ?>
                                                    <tr>
                                                    <td><?php echo $q['question_text']; ?></td>
                                                     <td><?php echo $q['points']; ?></td>
                                                     <td><button type="button"  value="<?php echo $q['question_id']; ?>" class="btn btn-circle btn-sm btn-outline green-seagreen addsingle"><i class="fa fa-plus"></i></button></td>
                                                    </tr>


                                                <?php endforeach; ?>
                                                
                                            </tbody>
                                        </table>
                             
</div>



                            <!-- end table -->

                                            <div class="modal-footer">         
                                            
                                                
                                               
                                                <button type="button" data-dismiss="modal" class="btn btn-md btn-outline btn-circle green-seagreen">Cancel</button>

                                           
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
<!-- end topic modal -->


          