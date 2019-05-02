<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Professor extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function create(){
		$data =  array(
			'firstname' => $this->input->post('fname'),
				'lastname' => $this->input->post('lname'),
					'address' => $this->input->post('address'),
						'p_number' => $this->input->post('number'),
							'email' => $this->input->post('email'),
								'uname' => $this->input->post('uname'),
									'password' => $this->input->post('password'),
										'date_created' => date('Y-m-d')
		);
		return $this->db->insert('tbl_professor', $data);
	}

	function selectAll(){
		$res= $this->db->get('tbl_professor');
		return $res->result_array();
	}

	function status($status){
		if($status == 1){
			echo "<button class='btn btn-md btn-success'>Active</button>";
		}else{
			echo "<button class='btn btn-md btn-danger'>Inactive</button>";
		}

	}


	function getFullname($id){
		$this->db->where('prof_id',$id);
       $res = $this->db->get('tbl_professor');
       $prof = $res->row_array();

       echo "<a href=".base_url('viewProfile/'.$prof['prof_id']).">".ucfirst($prof['firstname'])." ".ucfirst($prof['lastname'])."</a> <i class='fa fa-circle'></i>";
	}

	function getProf($id){
		$this->db->where('prof_id',$id);
       $res = $this->db->get('tbl_professor');
      return $res->row_array();
	}

}

/* End of file Professor.php */
/* Location: ./application/models/Professor.php */