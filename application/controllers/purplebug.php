<?php


Class Purplebug extends CI_CONTROLLER{

function __construct() {
	parent::__construct();

	$this->load->model('purplebug_model', 'database');
}

public function index(){

	$data['data'] = $this->database->view_data();
	$this->load->view('purplebug_vw', $data);
}

public function add_appointment(){
	$data['data'] = "ivandejesus";
	$this->load->view('add_vw', $data);
}

public function add_appoint(){
	$date = $this->input->post('date');
	$title = $this->input->post('title');
	$desc = $this->input->post('description');
	$duration = $this->input->post('duration');
	$color = $this->input->post('color');
	$timeslot = $this->input->post('timeslot');
	$btnAdd = $this->input->post('btnADD');

	if($btnAdd){
		$data = array(
			'date' => $date,
			'title' => $title,
			'description' => $desc,
			'duration' => $duration,
			'color' => $color,
			'timeslot' => $timeslot
			);

		$result = $this->database->add_appointment($data);


		if($result){
			$message = "SUCCESS";
			redirect('', $message);

		}
		
	}
}

}




?>