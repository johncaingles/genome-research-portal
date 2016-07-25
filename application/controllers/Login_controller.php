<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_controller extends CI_Controller {

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
		$this->load->view('login');
	}

	public function check_credentials()
	{
		

		$username = $this->input->get('username');
		$password = $this->input->get('password');

		$account_id = 0;
		$account_exists = false;

		// CHECK DATABSE IF EXISTS
		$query = $this->db->query("select id
								   from accounts
								   where username='".$username."' AND password='".$password."'");
		foreach ($query->result() as $row) {
			$account_id = $row->id;
			$account_exists = true;
		}

		if($account_exists){
			$this->session->set_userdata('username', $username);
			$this->session->set_userdata('password', $password);
			$this->session->set_userdata('account_id', $account_id);

			$this->session->set_userdata('logged_in', TRUE);
		}

		// $this->load->view('home');
		redirect(base_url());
		// redirect($_SERVER['REQUEST_URI'], 'refresh');

		// if( $filter_input == 'researcher') {
		// 	$query = $this->db->query("select id, name AS title
		// 								from researcher r 
		// 								where name LIKE '%".
		// 								$search_input."%'");
		// 	$img_source = "assets/img/researcher.jpg";
		// }
		// else if( $filter_input == 'study') {
		// 	$query = $this->db->query("select id, title AS title
		// 								from journal j 
		// 								where title LIKE '%".
		// 								$search_input."%'");
		// 	$img_source = "assets/img/study.jpg";
		// }
		// else {
		// 	$query = $this->db->query("select id, name
		// 								from researcher r 
		// 								where name LIKE '%".
		// 								$search_input."%'");
		// 	$img_source = "assets/img/researcher.jpg";
		// }

		// $queryResult = $query->result();

		// $data = array(
		// 'filter_input' => $filter_input,
		// 'queryResult' => $query->result(),
		// 'img_source' => $img_source
		// );
	}

	public function logout(){

        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('logged_in');
		redirect(base_url());

	}
}
