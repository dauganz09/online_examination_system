<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');


class Students extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    function index(){

        $this->load->view('student/student_login');
    }

    function dashboard(){
        $data['u_exams'] = $this->Sd->getExaminations2();

        $data['r_exams'] = $this->Sd->getDashExams();
        $data['d_exams'] = $this->Sd->getExaminations3();
    	$this->load->view('templates/header');
    	$this->load->view('student/student_dashboard',$data);
    	$this->load->view('templates/footer');
    }

    function checkLogin(){

    	$this->db->where('uname', $this->input->post('username'));
     $this->db->where('password', $this->input->post('password'));
     $res = $this->db->get('tbl_students');
     if($res->num_rows() != 0){
      $s = $res->row_array();
      $newdata = array(
            'uid'  => $s['stud_id'] ,
            
            'fullname' => $s['fname']." ".$s['lname'],
            'type' => 'student',

            'logged_in' => TRUE
                        );
        $this->session->set_userdata($newdata);
        redirect('/sdashboard');


    }else{
     $this->session->set_flashdata('error', 'Invalid Student Details!!!');
      redirect('/');
    }
}

function studentLogout(){
    $array_items = array('uid','fullname','type','logged_in');

        $this->session->unset_userdata($array_items);
        redirect('/');
}

function examinations(){
    $data['examsubjs'] = $this->Sd->getExaminations2();
    
    $this->load->view('templates/header');
    $this->load->view('student/exams',$data);
    $this->load->view('templates/footer');
    }


function take_exam($id){
    $this->session->unset_userdata('score');
    $data['examinfo'] = $this->Sd->viewExam($id);
    $this->load->view('student/takeExam',$data);
}

function examResult(){

    
}


function start_exam($id){

    $data['exam'] = $this->Sd->startExam($id);
    $this->load->view('student/startExam',$data);
}

function submitQuiz(){

    $res = $this->Sd->submitQuiz();
     $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode($res));

}

function saveScore(){

    if($this->Sd->saveScore() == true){
        



        redirect('students/getResults');
    }
}


function getResults(){
$data['res'] = $this->Sd->getResults();
$this->session->unset_userdata('score');

$this->load->view('student/examResults',$data);

}


}