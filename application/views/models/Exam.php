<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Exam extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function selectAll(){
		$res= $this->db->get('tbl_exams');
		return $res->result_array();
	}

	function getbyId($id){
		$this->db->where('exam_id', $id);
		$res = $this->db->get('tbl_exams');
		return $res->row_array();
	}


	function createBank(){

		$data = array(
			'qb_name' => $this->input->post('bank_name'),
				'last_updated'=> date('F d, Y')
		);

	return $this->db->insert('tbl_question_bank', $data);
	}

	function getBanksCount(){

	$this->db->order_by('qb_id','ASC');
    $res = $this->db->get('tbl_question_bank');

    	$i =1;
        if($res !== null){
        foreach ($res->result() as $row)
			{
			 $bank['a'.$i]['qb_id'] = $row->qb_id;
            $bank['a'.$i]['qb_name'] = $row->qb_name;

            $bank['a'.$i]['last_updated'] = $row->last_updated;
           
            $bank['a'.$i]['questions'] = $this->countQuestions($row->qb_id);

            

        

             

            $i++;
        }


        return $bank;
    }else{return null;}

	}


	function viewBank($id){


    $this->db->where('qb_id',$id);
    $res = $this->db->get('tbl_question_bank');

    return $res->row_array();

    	
	}

	function getBankQuestions($id){
	$this->db->where('qb_id',$id);
    $res = $this->db->get('tbl_questionbank_question');

    return $res->result_array();
    

	}

	function getBanksQues(){
		$qb_id = $this->input->post('qb_id');
		 $this->db->select('q.*,qb_q.*');
    			$this->db->from('tbl_questionbank_question qb_q, tbl_questions q');
   					$this->db->where('qb_q.q_id = q.question_id');
   					
   					$this->db->where('qb_q.qb_id =',$qb_id);
   					$this->db->order_by('q.question_id', 'ASC');
    					
   			$query = $this->db->get();
			return $query->result_array();
	}

	function getQuestions($id){
	$this->db->where('question_id',$id);
    $res = $this->db->get('tbl_questions');


   $r = $res->row_array();
			
			$code_array = array();
			$code_array['q_id'] = $r['question_id'];
			$code_array['qtext'] = $r['question_text'];
				$code_array['qpoints'] = $r['points'];
			$code_array['qtype'] = $r['question_type'];
			$code_array['answers']= $this->getAnswers($r['question_id']);
		
		

				return $code_array;
			
            
    


       

}


    
	

	function getAnswers($id){
		$this->db->where('q_id',$id);
    $res = $this->db->get('tbl_question_choice');
    

     return $res->result_array();
	}

	function getAllAns($ans_id){
		$this->db->where('choice_id',$ans_id);
    $res = $this->db->get('tbl_choices');
    return $res->row_array();
	}

	function countQuestions($id){
		$this->db->where('qb_id',$id);
		$res = $this->db->get('tbl_questionbank_question');
		return $res->num_rows();
	}


	function createMCQ(){
		$data = array(
			'question_text' => $this->input->post('qname'),
				'question_type' => $this->input->post('qtype'),
					'is_banked' => 1,
					'points' => $this->input->post('qpoints'),

				
				'date_created'=> date('F d, Y')
		);

	$this->db->insert('tbl_questions', $data);
	    $q_id = $this->db->insert_id();

	    $ques = array(
	    	'qb_id' => $this->input->post('bankid'),
	    		'q_id'=> $q_id
	    );

	     $this->db->insert('tbl_questionbank_question', $ques);

		$answers = $this->input->post('answers');
        $checks = $this->input->post('checks');
        $cAns = count($answers);

        for($i=0;$i<$cAns;$i++){
            $data = array(
                    'choice'=> $answers[$i],
                    'is_correct' => $checks[$i]
                );
            $this->db->insert('tbl_choices', $data);
            $a_id = $this->db->insert_id();

            $data2 = array(
                    'q_id'=> $q_id,
                    'choice_id' => $a_id
                );
             $this->db->insert('tbl_question_choice', $data2);
        }


        return true;
       

      
	}

	function createTempMC(){

		$data = array(
			'question_text' => $this->input->post('qname'),
				'question_type' => $this->input->post('qtype'),
					'points' => $this->input->post('qpoints'),

				
				'date_created'=> date('F d, Y')
		);

	$this->db->insert('tbl_questions', $data);
	    $q_id = $this->db->insert_id();

	   

	    

		$answers = $this->input->post('answers');
        $checks = $this->input->post('checks');
        $cAns = count($answers);

        for($i=0;$i<$cAns;$i++){
            $data = array(
                    'choice'=> $answers[$i],
                    'is_correct' => $checks[$i]
                );
            $this->db->insert('tbl_choices', $data);
            $a_id = $this->db->insert_id();

            $data2 = array(
                    'q_id'=> $q_id,
                    'choice_id' => $a_id
                );
             $this->db->insert('tbl_question_choice', $data2);
        }
        	$this->db->where('question_id',$q_id);
        $qresult = $this->db->get('tbl_questions');


        return $qresult->result_array();
	}
function getSingleQ(){
	$this->db->where('is_banked =',0);
	$res = $this->db->get('tbl_questions');
	return $res->result_array();
}


function addExamination(){
	$exam_data = array(
		'exam_name'=> $this->input->post('exam_name'),
			'exam_instructions'=> $this->input->post('einstructions'),
				'shuffle' => $this->checkShuffle($this->input->post('shuffle')),
					'time_limit' => $this->input->post('timelimit'),
						'published' => $this->checkStatus($this->input->post('status')),
							'exam_start'=> $this->input->post('start'),
								'exam_end'=> $this->input->post('end'),
									'date_created' => date('F m, Y')



	);

	$this->db->insert('tbl_exams', $exam_data);
	$exam_id = $this->db->insert_id();

	$data = array(
		'exam_id' =>$exam_id,
			'subj_id' => $this->input->post('subj_id')
	);

	$this->db->insert('tbl_exam_subjects', $data);



	$questions = $this->input->post('exam_q');
       
     $cQues = count($questions);

      for($i=0;$i<$cQues;$i++){
            $data = array(
                    'exam_id'=> $exam_id,
                    'question_id' => $questions[$i]
                );
            $this->db->insert('tbl_exam_question', $data);
           
        }
$this->db->where('subj_id',$this->input->post('subj_id'));
$res = $this->db->get('tbl_subj_stud');

if($res != NULL){

	foreach($res->result_array() as $r){
		$data = array(
		'exam_id' =>$exam_id,
			'stud_id' => $r['stud_id'],
				'subj_id'=> $this->input->post('subj_id')
	);

		$this->db->insert('tbl_exam_student', $data);


	}
}




return true;
}

function checkShuffle($shuffle){
	if($shuffle == true){
		return 1;
	}else{ return 0;}


	}

	function checkStatus($status){
		if($status == true){
		return 1;
	}else{ return 0;}
	}

	function checkPublished($status){
		if($status == 1){
			echo "<button class='btn btn-md btn-success'>Activated</button>";
		}else{
			echo "<button class='btn btn-md btn-danger'>Not Activated</button>";
		}
	}

	function countAllQues($id){
	$this->db->where('exam_id',$id);
		$res = $this->db->get('tbl_exam_question');
		return $res->num_rows();

	}


	function examPoints($id){
		$this->db->where('exam_id',$id);
		$this->db->get('tbl_exam_question');

	}

	function viewAnalysis($exam_id){
	
	

	$this->db->where('exam_id', $exam_id);
	$res = $this->db->get('tbl_exams');
	$exam_array = array();
	if($res->num_rows() != 0){

	$r = $res->row_array();
	

	$exam_array['exam_id'] = $r['exam_id'];
	$exam_array['exam_name'] = $r['exam_name'];
	$exam_array['questions'] = $this->Sd->getExamQuestions(0,$exam_id);
	


	}

	return $exam_array;

	}
}

/* End of file Exam.php */
/* Location: ./application/models/Exam.php */