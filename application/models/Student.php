<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function create(){
		$data =  array(
			'studentId' => $this->input->post('sname'),
			'fname' => $this->input->post('fname'),
				'lname' => $this->input->post('lname'),
					'uname' => $this->input->post('uname'),
						'password' => $this->input->post('password'),
							'date_created' => date('Y-m-d')
		);


		$this->db->insert('tbl_students', $data);
		$stud_id = $this->db->insert_id();
		$data2 = array(
				'subj_id' => $this->input->post('subj_id'),
					'stud_id' => $stud_id
				);

		$this->db->where('subj_id', $this->input->post('subj_id'));
		$exam = $this->db->get('tbl_exam_subjects');

		if($exam !== null){
        foreach($exam->result() as $row)
			{

				$data_exams = array(
				'exam_id' => $row->exam_id,
					'stud_id'=> $stud_id,
						'subj_id' => $this->input->post('subj_id')
				);

			$this->db->insert('tbl_exam_student', $data_exams);

			

           
            
    
         
        }

	   

	   }



		return $this->db->insert('tbl_subj_stud',$data2);



	}

	function createS(){
		$data =  array(
			'studentId' => $this->input->post('sname'),
			'fname' => $this->input->post('fname'),
				'lname' => $this->input->post('lname'),
					'uname' => $this->input->post('uname'),
						'password' => $this->input->post('password'),
							'date_created' => date('Y-m-d')
		);


		return $this->db->insert('tbl_students', $data);
		
	}

	function selectAll(){
		$res= $this->db->get('tbl_students');
		return $res->result_array();
	}


	function getBySubj(){
		$subj_id = $this->uri->segment(3);
		$this->db->where('subj_id',$subj_id);
       $res = $this->db->get('tbl_subj_stud');
       if($res->num_rows() > 0){
       $stud_arrray = array();
       foreach($res->result_array() as $students){
       		$stud_array[] = $this->studentById($students['stud_id']);
       }

       return $stud_array;
   }else{
   	return null;
   }
	}

	function getBySubj2($subj_id){
		
		$this->db->where('subj_id',$subj_id);
       $res = $this->db->get('tbl_subj_stud');
       if($res->num_rows() > 0){
       $stud_arrray = array();
       foreach($res->result_array() as $students){
       		$stud_array[] = $this->studentById($students['stud_id']);
       }

       return $stud_array;
   }else{
   	return null;
   }
		
	}

	

	function studentById($id){
		$this->db->where('stud_id',$id);
        $res = $this->db->get('tbl_students');
        return $res->row_array();
	}

function status($status){
		if($status == 1){
			echo "<button class='btn btn-md btn-success'>Active</button>";
		}else{
			echo "<button class='btn btn-md btn-danger'>Inactive</button>";
		}

	}

	function getExaminations(){
		$stud_id = $this->session->userdata('uid');

		$this->db->select('es.*,sb.*,sb_s.subj_id,ex.*,ex_sb.exam_id,SUM(q.points) as points,ex_q.*');
    			$this->db->from('tbl_subjects sb,tbl_subj_stud sb_s, tbl_exams ex,tbl_exam_subjects ex_sb,tbl_exam_question ex_q ,tbl_questions q,tbl_exam_student es');
   					$this->db->where('sb_s.subj_id = sb.subj_id');
   					$this->db->where('ex.exam_id = ex_sb.exam_id');
   					$this->db->where('sb.subj_id = ex_sb.subj_id');
   					$this->db->where('ex.exam_id = ex_q.exam_id');
   					$this->db->where('q.question_id = ex_q.question_id');
   					$this->db->where('ex.exam_id = es.exam_id');
   					$this->db->where('es.stud_id', $stud_id);
   					$this->db->where('es.is_taken',0);
   					$this->db->where('sb_s.stud_id',$stud_id);
   					$this->db->order_by('ex.exam_id', 'ASC');
    					
   			$query = $this->db->get();
			return $query->result_array();

	}

	function getExaminations2(){
		$stud_id = $this->session->userdata('uid');

	  $this->db->where('stud_id',$stud_id);
	  $this->db->where('is_taken',0);
	  $res =  $this->db->get('tbl_exam_student');


	    $i =1;
	    $bank = array();
        if($res !== null){
        foreach ($res->result() as $row)
			{

			// $start = new DateTime($this->getStart($row->exam_id));
			// $end = new DateTime($this->getEnd($row->exam_id));
			$start = date('Y-m-d H:i:s',strtotime($this->getStart($row->exam_id)));
			$end = date('Y-m-d H:i:s',strtotime($this->getEnd($row->exam_id)));
			$current = date('Y-m-d H:i:s');

			if($current < $end){

			 $bank['a'.$i]['exam'] = $this->Ex->getbyId($row->exam_id);
             $bank['a'.$i]['instructor'] = $this->getInstructor($row->subj_id);
             $bank['a'.$i]['subjects'] = $this->Sb->getById($row->subj_id);
             $bank['a'.$i]['questions'] = $this->Ex->countAllQues($row->exam_id);
             $bank['a'.$i]['points'] = $this->countPoints($row->exam_id);

            }
            
    
            $i++;
        }

	  return $bank;

	}

}

function getExaminations3(){
		$stud_id = $this->session->userdata('uid');

	  $this->db->where('stud_id',$stud_id);
	  $this->db->where('is_taken',0);
	  $res =  $this->db->get('tbl_exam_student');


	    $i =1;
	    $bank = array();
        if($res !== null){
        foreach ($res->result() as $row)
			{

			// $start = new DateTime($this->getStart($row->exam_id));
			// $end = new DateTime($this->getEnd($row->exam_id));
			$start = date('Y-m-d H:i:s',strtotime($this->getStart($row->exam_id)));
			$end = date('Y-m-d H:i:s',strtotime($this->getEnd($row->exam_id)));
			$current = date('Y-m-d H:i:s');

			if($current > $start){

			 $bank['a'.$i]['exam'] = $this->Ex->getbyId($row->exam_id);
             $bank['a'.$i]['instructor'] = $this->getInstructor($row->subj_id);
             $bank['a'.$i]['subjects'] = $this->Sb->getById($row->subj_id);
             $bank['a'.$i]['questions'] = $this->Ex->countAllQues($row->exam_id);
             $bank['a'.$i]['points'] = $this->countPoints($row->exam_id);

            }
            
    
            $i++;
        }

	  return $bank;

	}

}

 function countPoints($id){
 $this->db->where('exam_id', $id);
 $res = $this->db->get('tbl_exam_question');

$points = 0;
 foreach($res->result() as $row){
 		$points += $this->qpoints($row->question_id);


 		}


 		return $points;



}


function qpoints($question_id){
	 $this->db->select('points');
    $this->db->from('tbl_questions');
    $this->db->where('question_id',$question_id);
    $res =  $this->db->get()->row_array();
    return $res['points'];
}


function getInstructor($subj_id){
	$this->db->select('p.firstname,p.lastname,s.*');
    			$this->db->from('tbl_professor p,tbl_subjects s');
   					$this->db->where('s.prof_id = p.prof_id');
   					$this->db->where('s.subj_id', $subj_id);
   			$query = $this->db->get();
			return $query->row_array();
}


function viewExam($id){
	$this->db->where('exam_id', $id);
	$res = $this->db->get('tbl_exams');
	$exam_array = array();
	if($res->num_rows() != 0){

	$r = $res->row_array();
	

	$exam_array['exam_id'] = $r['exam_id'];
	$exam_array['exam_name'] = $r['exam_name'];
	$exam_array['instructions'] = $r['exam_instructions'];
	$exam_array['timelimit'] = $this->timeLimit($r['time_limit']);
	$exam_array['start']= $r['exam_start'];
	$exam_array['end']= $r['exam_end'];
	$exam_array['no_questions'] =  $this->Ex->countAllQues($r['exam_id']);
	$exam_array['points'] = $this->countPoints($r['exam_id']);


	}

	return $exam_array;


}

function startExam($exam_id){
	$array = array(
		'eid' => $exam_id
	);
	
	$this->session->set_userdata($array);

	$this->db->where('exam_id', $exam_id);
	$res = $this->db->get('tbl_exams');
	$exam_array = array();
	if($res->num_rows() != 0){

	$r = $res->row_array();
	

	$exam_array['exam_id'] = $r['exam_id'];
	$exam_array['shuffle'] = $r['shuffle'];
	$exam_array['timelimit'] = $this->timeLimit($r['time_limit']);
	$exam_array['start']= $r['exam_start'];
	$exam_array['end']= $r['exam_end'];
	$exam_array['questions'] = $this->getExamQuestions($r['shuffle'],$exam_id);
	


	}

	return $exam_array;




}

function timeLimit($timel){
	if($timel == 0){
		return 'None';
	}else{return $timel;}
}


function getExamQuestions($shuffle,$exam_id){

	if($shuffle == 1){
	 $this->db->where('exam_id', $exam_id);
	 $this->db->order_by('rand()');
	 $res = $this->db->get('tbl_exam_question');
	 return $res->result_array();




	}else{
		 $this->db->where('exam_id', $exam_id);
	 $this->db->order_by('question_id', 'ASC');
	 $res = $this->db->get('tbl_exam_question');
	 return $res->result_array();

	}


}

function getChoices($question_id){
	$this->db->select('qc.*,c.*');
	$this->db->from('tbl_question_choice qc,tbl_choices c');
	$this->db->where('qc.choice_id = c.choice_id');
	$this->db->where('qc.q_id', $question_id);
	$this->db->order_by('c.choice_id','ASC');
	$res = $this->db->get();


	return $res->result_array();
}

function getQName($question_id){

	$this->db->select('question_text');
	$this->db->from('tbl_questions');
	$this->db->where('question_id',$question_id);
	$res = $this->db->get();

	$r =  $res->row_array();
	return $r['question_text'];
}

function submitQuiz(){
	if(!$this->session->has_userdata('score')){
		$this->session->set_userdata('score',0);
	}


	$qid = $this->input->post('qid');
	$ans = $this->input->post('answers');
	$eid = $this->input->post('exam_id');
	$cAns = count($ans);

	if($this->quizType($qid) == 1 || $this->quizType($qid) == 2 ){

	     $res = $this->getQPoints($qid);

	
		if(in_array($res['choice_id'],$ans)){


				
			$score = $this->session->userdata('score');
			$score += $res['points'];
			$this->session->set_userdata('score',$score);

//add answer to db			
	for($i=0;$i < $cAns;$i++){
		if($ans[$i] != 0){
		$data_ans = array(
		   'exam_id' => $this->session->userdata('eid'),
			'stud_id' => $this->session->userdata('uid'),
			'question_id' => $qid,
			'choice_id' => $ans[$i]
		);

		$this->db->insert('tbl_response',$data_ans);
			}
		}

//save queston to db
		$dataqs = array(
		'question_id' => $qid,
		 'stud_id' => $this->session->userdata('uid'),
		  'is_correct' => 1


		);
		$this->db->insert('tbl_question_student', $dataqs);





				}else{

	for($i=0;$i < $cAns;$i++){
		if($ans[$i] != 0){
		$data_ans = array(
		   'exam_id' => $this->session->userdata('eid'),
			'stud_id' => $this->session->userdata('uid'),
			'question_id' => $qid,
			'choice_id' => $ans[$i]
		);

		$this->db->insert('tbl_response',$data_ans);
			}
		}

	     $dataqs = array(
		   'question_id' => $qid,
		   'stud_id' => $this->session->userdata('uid'),
		   'is_correct' => 0


		            );
		    $this->db->insert('tbl_question_student', $dataqs);
				}

	



	}

	return $this->session->userdata('score');

   


}

function saveScore(){
	

	$data = array(
        'is_taken' => 1,
        'score' => $this->session->userdata('score'),
        'date_taken' => date('F, d, Y')


    );

    $this->db->where('exam_id',$this->session->userdata('eid'));
    $this->db->where('stud_id', $this->session->userdata('uid'));

    $this->db->update('tbl_exam_student',$data);
    return true;

}

function quizType($qid){
	$this->db->where('question_id',$qid);
	$res = $this->db->get('tbl_questions')->row_array();

	return $res['question_type'];


}

function getQPoints($qid){
	$this->db->select('q.question_id,q.points,c.choice_id,c.is_correct,qc.q_id,qc.choice_id');
	$this->db->from('tbl_questions q,tbl_question_choice qc,tbl_choices c');
	$this->db->where('q.question_id = qc.q_id');
	$this->db->where('qc.choice_id = c.choice_id');
	$this->db->where('q.question_id',$qid);
	$this->db->where('c.is_correct = ',1);
	$res = $this->db->get();
	return $res->row_array();

}

function getDashExams(){
	  $stud_id = $this->session->userdata('uid');

	  $this->db->where('stud_id',$stud_id);
	  $this->db->where('is_taken',1);
	  $res =  $this->db->get('tbl_exam_student');


	    $i =1;
	    $bank = array();
        if($res !== null){
        foreach ($res->result() as $row)
			{
			 $bank['a'.$i]['exam'] = $this->Ex->getbyId($row->exam_id);
             $bank['a'.$i]['instructor'] = $this->getInstructor($row->subj_id);
             $bank['a'.$i]['subjects'] = $this->Sb->getById($row->subj_id);
              $bank['a'.$i]['score'] = $row->score;
               $bank['a'.$i]['date_taken'] = $row->date_taken;
             $bank['a'.$i]['points'] = $this->countPoints($row->exam_id);

           
            
    
            $i++;
        }

	  return $bank;

	}

}


function getResults(){
	$stud_id = $this->session->userdata('uid');
	$exam_id = $this->session->userdata('eid');
	  $this->db->where('stud_id',$stud_id);
	   $this->db->where('exam_id',$exam_id);
	  $this->db->where('is_taken',1);
	  $res =  $this->db->get('tbl_exam_student');


	   $bank = array();
        if($res !== null){

             $row = $res->row_array();
			 $bank['exam'] = $this->Ex->getbyId($row['exam_id']);
             $bank['instructor'] = $this->getInstructor($row['subj_id']);
             $bank['subjects'] = $this->Sb->getById($row['subj_id']);
             $bank['score'] = $row['score'];
             $bank['date_taken'] = $row['date_taken'];
             $bank['points'] = $this->countPoints($row['exam_id']);

           
            
    
         
       

	  return $bank;

	}
}


function StudCount($id){
	$this->db->where('choice_id',$id);
	$res = $this->db->get('tbl_response');
	return $res->num_rows();
}

function totStud($eid){
	$this->db->where('exam_id', $eid);
	$this->db->where('is_taken',1);
	$res = $this->db->get('tbl_exam_student');
	return $res->num_rows();
}

function allstud($eid){
	$this->db->where('exam_id', $eid);
	
	$res = $this->db->get('tbl_exam_student');
	return $res->num_rows();
}

function studCorrect($qid){
	$this->db->where('question_id',$qid);
	$this->db->where('is_correct',1);
	$res = $this->db->get('tbl_question_student');
	return $res->num_rows();

}

function grammar($stud){
                                        if($stud > 1){
                                         return "students";

                                        }else{return "student";}
                                                }


function studWrong($qid){
	$this->db->where('question_id',$qid);
	$this->db->where('is_correct',0);
	$res = $this->db->get('tbl_question_student');
	return $res->num_rows();
}

function count_tstudents($eid){
 $this->db->where('exam_id', $eid);
 $this->db->where('is_taken', 1);
 $res = $this->db->get('tbl_exam_student');

return $res->num_rows();

}


function count_nstudents($eid){
 $this->db->where('exam_id', $eid);
 $this->db->where('is_taken', 0);
 $res = $this->db->get('tbl_exam_student');

return $res->num_rows();

}

function getStart($eid){

	$this->db->where('exam_id', $eid);
	$res = $this->db->get('tbl_exams');
	$result = $res->row_array();

	return $result['exam_start'];
}

function getEnd($eid){

	$this->db->where('exam_id', $eid);
	$res = $this->db->get('tbl_exams');
	$result = $res->row_array();

	return $result['exam_end'];
}


function total_students_in_subject($eid){
	$this->db->where('exam_id', $eid);
	$res = $this->db->get('tbl_exam_subjects');

	$result = $res->row_array();

	$subj_id = $result['subj_id'];

	$this->db->where('subj_id', $subj_id);
	$res = $this->db->get('tbl_subj_stud');
	return $res->num_rows();


}









}

/* End of file Student.php */
/* Location: ./application/models/Student.php */