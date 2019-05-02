<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Administrator extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index(){

    	$this->load->view('templates/header');
    	$this->load->view('admin/dashboard');
    	$this->load->view('templates/footer');
      
        
    }

    

    function login(){

        $this->load->view('admin/admin_login');
    }

    

    function addProf(){
    	$this->load->view('templates/header');
    	$this->load->view('admin/addProfessor');
    	$this->load->view('templates/footer');

    }

    function createExam(){

        $this->load->view('templates/header');
        $this->load->view('admin/addExam');
        $this->load->view('templates/footer');
    }

    function createProf(){
    	return $this->Pr->create();
    }

    function createSub(){
        return $this->Sb->create();
    }
  function createStud(){
        return $this->Sd->create();
    }

    function createStudent(){

        return $this->Sd->createS();
    }


    function createStudForm(){

        $this->load->view('templates/header');
        $this->load->view('admin/addStudent');
        $this->load->view('templates/footer');


    }

function createQBank(){

    $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode($this->Ex->createBank()));
       
    }

function getBanks(){

   $result = $this->Ex->getBanksCount();
    $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode($result));

}

function viewBank($id){

    $data['bank'] = $this->Ex->viewBank($id);

    $this->load->view('templates/header');
        $this->load->view('admin/viewBank',$data);
        $this->load->view('templates/footer');


}

    function profList(){

        $data['professors'] = $this->Pr->selectAll();

    	$this->load->view('templates/header');
    	$this->load->view('admin/profList',$data);
    	$this->load->view('templates/footer');

    }

    function studList(){

        $data['students'] = $this->Sd->selectAll();

        $this->load->view('templates/header');
        $this->load->view('admin/studList',$data);
        $this->load->view('templates/footer');

    }

    function examList(){

        $data['exams'] = $this->Ex->selectAll();

        $this->load->view('templates/header');
        $this->load->view('admin/examList',$data);
        $this->load->view('templates/footer');

    }

      function banksList(){

        $data['exams'] = $this->Sd->selectAll();

        $this->load->view('templates/header');
        $this->load->view('admin/question_banks',$data);
        $this->load->view('templates/footer');

    }

    function viewprofile($id){

       $this->db->where('prof_id',$id);
       $res = $this->db->get('tbl_professor');
       $data['professor'] = $res->row_array();

        $this->load->view('templates/header');
        $this->load->view('admin/view_profile',$data);

        $this->load->view('templates/footer');

    }

    function viewsubject(){
        $id = $this->uri->segment(3);
       $this->db->where('subj_id',$id);
       $res = $this->db->get('tbl_subjects');
       $data['subject'] = $res->row_array();

        $this->load->view('templates/header');
        $this->load->view('admin/view_subject',$data);

        $this->load->view('templates/footer');

    }

    function searchStud(){
   $res =  $this->Sd-> getBySubj2($this->input->post('subj_id'));
     $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode($res));
    }

    function importStud(){
        $students = $this->input->post('students');
        $subj_id = $this->input->post('subj_id');
        $cStud = count($students);

        for($i=0;$i<$cStud;$i++){
            $data = array(
                    'subj_id'=>$subj_id,
                    'stud_id' => $students[$i]
                    


                );
            $this->db->insert('tbl_subj_stud', $data);
        }
    }


    function createQ(){
       $res =  $this->Ex->createMCQ();


 $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode($res));


    }

    function addTempQuestion(){
        $res = $this->Ex->createTempMC();
    $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode($res));

    }

    function getBankQuestions(){
        $res = $this->Ex->getBanksQues();
        $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode($res));
    }


    function addExamination(){
        $res = $this->Ex->addExamination();
         $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode($res));
    }

    function adminLogin(){
      $this->db->where('uname', $this->input->post('username'));
     $this->db->where('password', $this->input->post('password'));
     $res = $this->db->get('tbl_admin');
     if($res->num_rows() != 0){
      $s = $res->row_array();
      $newdata = array(
            'uid'  => $s['admin_id'] ,
            
            'fullname' => $s['fname']." ".$s['lname'],
            'type' => 'admin',

            'logged_in' => TRUE
                        );
        $this->session->set_userdata($newdata);
        $this->session->set_flashdata('success', 'Welcome Administrator!!');
        redirect('/admin_dashboard');


    }else{
     $this->session->set_flashdata('error', 'Invalid Admin Details!!!');
      redirect('/admin');
    }

    }


function adminLogout(){
    $array_items = array('uid','fullname','type','logged_in');

        $this->session->unset_userdata($array_items);
        redirect('/admin');
}

function viewAnalysis($id){
        $data['exam'] = $this->Ex->viewAnalysis($id);

        $this->load->view('templates/header');
        $this->load->view('admin/itemanalysis',$data);

        $this->load->view('templates/footer');
}

function addtopic(){
  $data = array(
    'topic' => $this->input->post('topic')

  );
 $res =  $this->db->insert('tbl_topics', $data);
$t_id = $this->db->insert_id();
 if($res){
      $result = array(
        'id'=> $t_id,
        'result' =>true

      );


      $this->output->set_content_type('application/json')->set_output(json_encode($result));
 }else{
  $this->output->set_content_type('application/json')->set_output(json_encode(false));
 }
}

function loadtopics(){

  $res = $this->Ex->get_topics();

  $this->output->set_content_type('application/json')->set_output(json_encode($res));
}



    



    
}
