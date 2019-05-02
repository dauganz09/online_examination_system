<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout {

	public function link($session_type){

		switch ($session_type) {
			case 'student':
				echo base_url('slogout');
				break;
			case 'instructor':
				echo base_url('ilogout');
				break;
			
			default:
				echo base_url('alogout');
				break;
		}

	} 

}

/* End of file Logout.php */
/* Location: ./application/libraries/Logout.php */