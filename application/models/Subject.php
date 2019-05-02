<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Subject extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function create(){
		$data =  array(
			'subj_code' => $this->input->post('sub_code'),
				'subj_name' => $this->input->post('sub_name'),
					'subj_desc' => $this->input->post('sub_desc'),
						'date_created' => date('Y-m-d'),
							'prof_id' => $this->input->post('prof_id'),
		);
		return $this->db->insert('tbl_subjects', $data);
	}

	function selectAll(){
		$res= $this->db->get('tbl_professor');
		return $res->result_array();
	}

	function selectAllSub(){
		$res= $this->db->get('tbl_subjects');
		return $res->result_array();
	}

	function getByProf($id,$subj_id = null){
		$this->db->where('prof_id',$id);
		$this->db->where('subj_id !=',$subj_id);
       $res = $this->db->get('tbl_subjects');
       return $res->result_array();
	}

	function countStudents($subj_id){
		$this->db->where('subj_id',$subj_id);
       $res = $this->db->get('tbl_subj_stud');
       return $res->num_rows();
	}

	function getById($id){
		$this->db->where('subj_id', $id);
		return $this->db->get('tbl_subjects')->row_array();
	}

}

/* End of file Subject.php */
/* Location: ./application/models/Subject.php */