<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Prof extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
       $this->load->view('prof/prof_login');
    }

    function dashboard(){
        
    	$this->load->view('templates/header');
    	$this->load->view('prof/prof_dashboard');
    	$this->load->view('templates/footer');
    }

    function checkLogin(){

    	$this->db->where('uname', $this->input->post('username'));
     $this->db->where('password', $this->input->post('password'));
     $res = $this->db->get('tbl_professor');
     if($res->num_rows() != 0){
      $s = $res->row_array();
      $newdata = array(
            'uid'  => $s['prof_id'] ,
            
            'fullname' => $s['firstname']." ".$s['lastname'],
            'type' => 'instructor',

            'logged_in' => TRUE
                        );
        $this->session->set_userdata($newdata);
        redirect('/idashboard');


    }else{
     $this->session->set_flashdata('error', 'Invalid Instructor Details!!!');
      redirect('/prof');
    }
}

function profLogout(){
    $array_items = array('uid','fullname','type','logged_in');

        $this->session->unset_userdata($array_items);
        redirect('/prof');
}

function viewprofile(){

       $this->db->where('prof_id',$this->session->userdata('uid'));
       $res = $this->db->get('tbl_professor');
       $data['professor'] = $res->row_array();

        $this->load->view('templates/header');
        $this->load->view('prof/profile',$data);

        $this->load->view('templates/footer');

    }

    function viewsubject(){
        $id = $this->uri->segment(3);
       $this->db->where('subj_id',$id);
       $res = $this->db->get('tbl_subjects');
       $data['subject'] = $res->row_array();

        $this->load->view('templates/header');
        $this->load->view('prof/view_subject',$data);

        $this->load->view('templates/footer');

    }

    function view_exams($subj_id){
       $data['exams'] = $this->Ex->get_exam_by_subject($subj_id);
       $data['subject'] = $this->Sb->getById($subj_id);

        $this->load->view('templates/header');
        $this->load->view('prof/examlist',$data);
        $this->load->view('templates/footer');


    }

    function banklist(){
       $data['exams'] = $this->Sd->selectAll();

        $this->load->view('templates/header');
        $this->load->view('prof/banklist',$data);
        $this->load->view('templates/footer');

    }
}
