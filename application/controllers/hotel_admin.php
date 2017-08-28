<?php

Class hotel_admin extends CI_Controller {

	function index() {
		$data['members'] = $this->registration->get_all();
		$data['total'] = $this->registration->get_all_num();
		$data['departures'] = $this->registration->get_depart_this_month();
		$data['total_depart'] = $this->registration->get_depart_num();
		$data['rooms'] = $this->registration->get_available_room();
		$this->load->view('template/header');
		$this->load->view('dashboard',$data);
		$this->load->view('template/footer');
	}

	function register() {

		if($_POST) {
			$data = array(
				'folio' => $_POST['folio'],
				'name' => $_POST['name'],
				'address' => $_POST['address'],
				'nationality' => $_POST['address'],
				'birthdate' => $_POST['birthdate'],
				'company' => $_POST['company'],
				'profession' => $_POST['profession'],
				'res_id' => $_POST['credentials'],
				'num_person' => $_POST['num_person'],
				'arrival' => $_POST['date_arrival'],
				'departure' => $_POST['date_depart'],
				'room' => $_POST['room'],
				'destination' => $_POST['destination'],
				'payment' => $_POST['payment'],
				'or_num' => $_POST['or'],
				'charge_to' => $_POST['charge_to'],
				'registrar' => $_POST['registrar']
				);

			$exist_room = $this->registration->check_existing_room($data['room']);

			if($exist_room ) {
				$status['error'] = 'Room is already taken.';
			} else {
				$this->registration->add_new($data);
				$status['success'] = 'Succesfully Registered';
			}

			$this->load->view('template/header');
			$this->load->view('register',$status);
			$this->load->view('template/footer');

		} else {

			$this->load->view('template/header');
			$this->load->view('register');
			$this->load->view('template/footer');

		}

	}

	function delete_guest($id) {
		$this->registration->delete($id);

		redirect(base_url().'hotel_admin','refresh');
	}

	function update_guest($id) {
		if($_POST) {
			$data = array(
				'folio' => $_POST['folio'],
				'name' => $_POST['name'],
				'address' => $_POST['address'],
				'nationality' => $_POST['address'],
				'birthdate' => $_POST['birthdate'],
				'company' => $_POST['company'],
				'profession' => $_POST['profession'],
				'res_id' => $_POST['credentials'],
				'num_person' => $_POST['num_person'],
				'arrival' => $_POST['date_arrival'],
				'departure' => $_POST['date_depart'],
				'room' => $_POST['room'],
				'destination' => $_POST['destination'],
				'payment' => $_POST['payment'],
				'or_num' => $_POST['or'],
				'charge_to' => $_POST['charge_to'],
				'registrar' => $_POST['registrar']
				);

			$exist_room = $this->registration->check_existing_room($data['room']);
			
			if($exist_room ) {
				$data['error'] = 'Room is already taken.';
				$data['current'] = $this->registration->get_current($id);
				$this->load->view('template/header');
				$this->load->view('update_current',$data);
				$this->load->view('template/footer');
			} else {
				$this->registration->update($id,$data);
				redirect(base_url().'hotel_admin','refresh');
			}
		} else {
			$data['current'] = $this->registration->get_current($id);
			$this->load->view('template/header');
			$this->load->view('update_current',$data);
			$this->load->view('template/footer');
		}
	}

	function current_info($id) {
		$data['info'] = $this->registration->get_current($id);

		$this->load->view('template/header');
		$this->load->view('current',$data);
		$this->load->view('template/footer');

	}

	function all_rooms() {
		$data['one'] = $this->registration->get_info_by_room('301');
		$data['two'] = $this->registration->get_info_by_room('302');
		$data['three'] = $this->registration->get_info_by_room('303');
		$data['four'] = $this->registration->get_info_by_room('304');
		$data['five'] = $this->registration->get_info_by_room('305');
		$data['six'] = $this->registration->get_info_by_room('306');
		$data['seven'] = $this->registration->get_info_by_room('307');
		$data['eight'] = $this->registration->get_info_by_room('308');
		$data['nine'] = $this->registration->get_info_by_room('309');
		$data['ten'] = $this->registration->get_info_by_room('310');
		$data['eleven'] = $this->registration->get_info_by_room('311');
		$data['twelve'] = $this->registration->get_info_by_room('312');

		$this->load->view('template/header');
		$this->load->view('rooms',$data);
		$this->load->view('template/footer');
	}

}

?>