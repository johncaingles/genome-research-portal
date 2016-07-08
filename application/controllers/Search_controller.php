<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_controller extends CI_Controller {

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
		$this->load->view('home');
	}

	public function searchSingle()
	{
		

		$search_input = $this->input->get('search_input');
		$filter_input = $this->input->get('filter_input');

		if( $filter_input == 'researcher') {

			$query = $this->db->query("select id, name AS title, 'researcher' AS result_type
										from researcher r 
										where name LIKE '%".
										$search_input."%'");
			$img_source = "assets/img/researcher.jpg";
		}
		else if( $filter_input == 'study') {
			$query = $this->db->query("select id, title AS title, 'study' AS result_type
										from journal j 
										where title LIKE '%".
										$search_input."%'");
			$img_source = "assets/img/study.jpg";
		}
		else {
			$query = $this->db->query("select id, name AS title
										from researcher r 
										where name LIKE '%".
										$search_input."%'");
			$img_source = "assets/img/researcher.jpg";
		}

		// $queryResult = $query->result();

		// $this->load->model('result_item');

		// IDEA FOR COMBINING OF RESULTS
		// create array of arrays, where in each array, there is a queryResult, img_source, and result type
		// therefore combing all types of queries

		$data = array(
		'filter_input' => $filter_input,
		'queryResult' => $query->result(),
		'img_source' => $img_source
		);

		$this->load->view('results', $data);

		// $data = $
		// foreach ($query->result() as $row) {
		// 	$
		// }
	}
}
