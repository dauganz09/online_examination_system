
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
                                    <a href="<?php echo base_url('question_banks'); ?>">Question Banks</a>
                                    <i class="fa fa-circle"></i>
                                   
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'viewBank/'.$bank['qb_id'];?>"><?php echo $bank['qb_name']; ?></a>
                                </li>
                            </ul>
                            
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title">Question Bank
                            <small></small>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN PORTLET-->
                                <div class="portlet light bordered">
                                    <input id="bankid" type="hidden" value="<?php echo $this->uri->segment(2); ?>">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-file-text-o font-green"></i>
                                            <span class="caption-subject font-green bold uppercase">Manage</span>
                                        </div>
                                        <div class="actions">
                                            <button type="button" id="add_question"  class="btn btn-lg btn-circle btn-outline green-seagreen"><i class="fa fa-plus"></i> Add Question</button>
                                            <button type="button" id="edit_bank"  class="btn btn-lg btn-circle btn-outline blue-steel"><i class="fa fa-plus"></i> Edit Bank</button>
                                            <button type="button" id="delete_bank"  class="btn btn-lg btn-circle btn-outline red-thunderbird"><i class="fa fa-plus"></i> Delete Bank</button>
                                            
                                            
                                       </div>
                                    </div>
                                    <div class="portlet-body">
                                        <!-- add question -->
                                    <div id="addQuestion" class="portlet box green-turquoise" hidden>
                                         <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-file-text-o font-white"></i>
                                            <span class="caption-subject font-white bold uppercase">Add Question</span>
                                        </div>

                                        
                                      
                                    </div>

                                          <div class="portlet-body">
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
                                                    <label class="col-md-2 control-label" for="form_control_1">Topic:</label>
                                                    <div id="topic_div" class="col-md-4"  hidden>
                                                        <input type="hidden" id="topic_id">
                                                        <input id="qtopic" class="form-control" disabled type="text">
                                                       
                                                    </div>
                                                    <button type="button" id="addtopic"  class="btn btn-circle btn-sm btn-outline green-seagreen">
                                                            <i class="fa fa-plus"></i> Add Topic</button>
                                                    <div id="removebutton" hidden><button type="button" id="removetopic"   class="btn btn-circle btn-sm btn-outline red-thunderbird">
                                                            <i class="fa fa-minus"></i></button></div>
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
                                    <div id="answerbox">
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
                                             <button type="button" id="saveMC" class="btn btn-sm green"><i class="fa fa-plus"></i> Save</button>

                                             <button type="button" id="cancelMC" class="btn btn-outline btn-sm red"><i class="fa fa-close"></i> Cancel</button>
                                        </div>
                                        </form>
                                        <!--end add question form -->
                                          </div>

                                     </div>
                                         <!--end add question -->
        <?php $result = $this->Ex->getBankQuestions($bank['qb_id']); 
        ?>
        <?php if($result ==  NULL){echo "<div class='alert alert-info'>No Available Questions</div>";} ?> 

        <?php $i=1; foreach($result as $ques): 
          ?>
            <?php $q = $this->Ex->getQuestions($ques['q_id']);

           ?>
                                     <div class="portlet box blue-sharp">
                                         <div class="portlet-title">

                                        <div style="width:500px !important;" class="caption">
                                            
                                            <span  class="caption-subject font-white bold uppercase">Question <?php echo $i." | ".$q['qpoints']." Points"; ?> | <?php echo "Topic : "."<u>".$this->Ex->get_topic($q['topic_id'])."</u>"; ?></span>
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
                                                <h1 class="font-blue-chambray"><?php echo $q['qtext']; ?></h1>
                                                <hr>
                                                <div id="qanswers">
                                        <?php foreach($q['answers'] as $answer):?>

                                        <?php $ans = $this->Ex->getAllAns($answer['choice_id']); ?>

                                <span style="font-size: 20px;" class="<?php if($ans['is_correct'] == 1){echo "font-green";}?>"><?php echo $ans['choice']; ?> </span><?php if($ans['is_correct'] == 1){echo "<button class='btn btn-small green-seagreen btn-outline'><i class='fa fa-arrow-circle-left'></i> Correct Answer</button>";}?> </br><hr>     


                                        <?php endforeach;?>
                                            

                                      
                                                </div>

                                          </div>

                                     </div>

<?php $i++; endforeach; ?>                                

                                        
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
                                                        <h4 class="modal-title font-white">Add Topic (Add a New topic or select from the list)</h4>
                                                    </div>
                                                    <div class="modal-body">
                                        
                                      <div class="form-group form-md-line-input">
                                                    <label class="col-md-2 control-label" for="form_control_1">Topic:</label>
                                                    <div id="topic_div" class="col-md-4">
                                                        <input id="newtopic" class="form-control" type="text">
                                                       
                                                    </div>
                                                    <button type="button" id="add_newtopic" data-toggle="modal" href="#add_topic" class="btn btn-circle btn-sm btn-outline green-seagreen">
                                                            <i class="fa fa-plus"></i> Add Topic</button>
                                             </div>   
                            <!-- table -->
                    
                    <table  class="table table-striped table-bordered table-hover" id="topic_table">
                                            <thead>
                                                <tr>
                                                   
                                                    <th>Topic Name</th>
                                                   
                                                    
                                                    <th>Action</th>
                                                    
                                                  
                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                                
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