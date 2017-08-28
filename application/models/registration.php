<?php

Class registration extends CI_Model {
		
	function add_new($data) {
		$this->db->insert('registration',$data);
	}

	function update($id, $data) {
		$this->db->where('register_id',$id);
		$this->db->update('registration', $data);
	}

	function delete($id) {
		$this->db->where('register_id',$id);
		$this->db->delete('registration');
	}

	function get_all() {
		$this->db->select()->from('registration')->order_by('register_id','desc');
		$query = $this->db->get();
		return $query->result();
	}

	function get_all_num() {
		$this->db->select()->from('registration')->order_by('register_id','desc');
		$query = $this->db->get();
		return $query->num_rows();
	}

	function get_depart_this_month() {
		$this->db->select()->from('registration')->where('departure >=', "DATE_SUB(NOW(), INTERVAL 1 MONTH)",false)->order_by('departure','asc');
		$query = $this->db->get();
		return $query->result();
	
	}

	function get_depart_num() {

		$this->db->select()->from('registration')->where('departure >=', "DATE_SUB(NOW(), INTERVAL 1 MONTH)",false);
		$query = $this->db->get();
		return $query->num_rows();
	
	
	}

	function get_current($id) {
		$this->db->select()->from('registration')->where('register_id',$id)->order_by('register_id','desc');
		$query = $this->db->get();
		return $query->first_row();
	}

	function format_time($time) {

		$raw_format = strtotime( $time );

		$formatted_date = date('D, M j, Y', $raw_format);

		return ($formatted_date);	

	}

	function check_existing_room($room) {
		$this->db->select()->from('registration')->where('room',$room);
		$query = $this->db->get();
		return $query->num_rows();
	}

	function get_available_room() {
		$this->db->select()->from('registration');
		$query = $this->db->get();

		$taken_room = $query->num_rows();

		$available = 12 - $taken_room;

		return $available;
	}

	function get_info_by_room($room) {
		$this->db->select()->from('registration')->where('room',$room);
		$query = $this->db->get();
		return $query->result();
	}

}

?>