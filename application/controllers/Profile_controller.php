<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('profile-researcher');
	}

	public function initialize()
	{
		

		$profile_id = $this->input->get('result_id');
		$profile_type = $this->input->get('result_type');
			echo "<script>alert('IYAK');</script>";
			echo "<script>alert('".$profile_id."');</script>";
			echo "<script>alert('".$profile_type."');</script>";

		if( $profile_type == 'researcher') {
			$query = $this->db->query("select name
										from researcher r
										where id='".$profile_id."'");
			foreach ($query->result() as $row) {
				$profile_name = $row->name;
			}

			// GETTING JOURNALS OF THE AUTHOR
			$query = $this->db->query("select j.id, title 
										from journal j 
										where author_id = '".
										$profile_id."'");
			$journals_result = $query->result();

			// GETTING ALL JOURNALS
			$query = $this->db->query("select j.id, title 
										from journal j");
			$all_journals_result = $query->result();

			$profile_mainpic = "assets/img/researcher.jpg";

			// RESULTS
			$data = array(
			'profile_id' => $profile_id,
			'profile_name' => $profile_name,
			'journals_result' => $journals_result,
			'profile_type' => $profile_type,
			'profile_mainpic' => $profile_mainpic,
			'all_journals_result' => $all_journals_result
			);
		}
		else if( $profile_type == 'study') {
			$query = $this->db->query("select title AS name
										from journal j
										where id='".$profile_id."'");
			foreach ($query->result() as $row) {
				$profile_name = $row->name;
			}

			// $query = $this->db->query("select id, 
			// $query = $this->db->query("select id, title AS title
			// 							from journal j 
			// 							where title LIKE '%".
			// 							$search_input."%'");
			$profile_mainpic = "assets/img/study.jpg";
		}
		else {
			// $query = $this->db->query("select id, name
			// 							from researcher r 
			// 							where name LIKE '%".
			// 							$search_input."%'");
			$profile_mainpic = "assets/img/researcher.jpg";
		}

		// $queryResult = $query->result();

		// // if researcher
		// $data = array(
		// 'profile_id' => $profile_id,
		// 'profile_name' => $profile_name,
		// 'queryResult' => $query->result(),
		// 'profile_type' => $profile_type
		// 'profile_mainpic' => $profile_mainpic
		// );

		// // if study
		// $data = array(
		// 'profile_id' => $profile_id,
		// 'profile_name' => $profile_name,
		// 'queryResult' => $query->result(),
		// 'profile_type' => $profile_type
		// 'profile_mainpic' => $profile_mainpic
		// );

		$this->load->view('profile-researcher', $data);
	}

	private function buildArrayFromJournalResult($journal_result){

	}
}
