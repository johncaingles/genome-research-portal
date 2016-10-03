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

	// public function initialize()
	// {
	//
	//
	// 	$profile_id = $this->input->get('result_id');
	// 	$profile_type = $this->input->get('result_type');
	// 		// echo "<script>alert('IYAK');</script>";
	// 		// echo "<script>alert('".$profile_id."');</script>";
	// 		// echo "<script>alert('".$profile_type."');</script>";
	//
	// 	if( $profile_type == 'researcher') {
	// 		$query = $this->db->query("select CONCAT(first_name, last_name) AS name, 'assets/img/researcher.jpg' AS mainpic_source, affiliation
	// 									from researcher r
	// 									where id='".$profile_id."'");
	// 		foreach ($query->result() as $row) {
	// 			$profile_name = $row->name;
	// 			$profile_mainpic = $row->mainpic_source;
	// 			$affiliation = $row->affiliation;
	// 		}
	//
	// 		// GETTING STUDIES OF THE AUTHOR
	// 		$query = $this->db->query("select r.id AS id, r.title AS title, 'study' AS result_type
	// 									from reference r, reference_researcher rr
	// 									where rr.researcher_id = '".
	// 									$profile_id."' AND rr.reference_id = r.id");
	// 		$studies_result = $query->result();
	//
	// 		// GETTING ENCOUNTERED GENOMES
	// 		$query = $this->db->query("select DISTINCT o.id AS id, o.species AS species, 'genome' AS result_type
	// 									from reference r, reference_researcher rr, genbank g, genbank_reference gr, organism o
	// 									where rr.researcher_id = '".
	// 									$profile_id."' AND rr.reference_id = r.id AND gr.reference_id = r.id AND gr.genbank_id = g.id AND g.organism_id = o.id");
	// 		$genomes_result = $query->result();
	//
	//
	//
	// 		// RESULTS
	// 		$data = array(
	// 		'profile_id' => $profile_id,
	// 		'profile_type' => $profile_type,
	// 		'profile_name' => $profile_name,
	// 		'profile_mainpic' => $profile_mainpic,
	//
	// 		'age' => "53",
	// 		'birthdate' => "May 12, 1996",
	// 		'sex' => "M",
	// 		'contact' => "09179118551",
	// 		'affiliation' => $affiliation,
	//
	// 		'studies_result' => $studies_result,
	// 		'genomes_result' => $genomes_result
	// 		);
	//
	// 		$this->load->view('profile-researcher', $data);
	// 	}
	// 	else if( $profile_type == 'study') {
	// 		$query = $this->db->query("select title, 'assets/img/researcher.jpg' AS mainpic_source
	// 									from reference r
	// 									where id='".$profile_id."'");
	// 		foreach ($query->result() as $row) {
	// 			$profile_title = $row->title;
	// 			$profile_mainpic = $row->mainpic_source;
	// 		}
	//
	// 		// GETTING JOURNALS AND PUBMED
	// 		$query = $this->db->query("select journal, pubmed
	// 									from researcher r, reference_researcher rr, reference ref
	// 									where r.id='".$profile_id."', reference_id=ref.id, researcher_id.r.id");
	// 		foreach ($query->result() as $row) {
	// 			$journals = $row->journals;
	// 			$pubmed = $row->pubmed;
	// 		}
	//
	// 		// GETTING RESEARCHERS OF THE STUDY
	// 		$query = $this->db->query("select r.id AS id, CONCAT(r.first_name, r.last_name) AS name, 'researcher' AS result_type
	// 									from researcher r, reference_researcher rr
	// 									where rr.reference_id = '".
	// 									$profile_id."' AND rr.researcher_id = r.id");
	// 		$researchers_result = $query->result();
	//
	// 		// GETTING ENCOUNTERED GENOMES
	// 		$query = $this->db->query("select DISTINCT o.id AS id, o.species AS species, 'genome' AS result_type
	// 									from reference_researcher rr, genbank g, genbank_reference gr, organism o
	// 									where rr.reference_id = '".
	// 									$profile_id."' AND gr.genbank_id = g.id AND g.organism_id = o.id");
	// 		$genomes_result = $query->result();
	//
	//
	//
	// 		// RESULTS
	// 		$data = array(
	// 		'profile_id' => $profile_id,
	// 		'profile_type' => $profile_type,
	// 		'profile_title' => $profile_title,
	// 		'profile_mainpic' => $profile_mainpic,
	//
	// 		'journals' => $journals,
	// 		'pubmed' => $pubmed,
	//
	// 		'researchers_result' => $studies_result,
	// 		'genomes_result' => $genomes_result
	// 		);
	//
	// 		$this->load->view('profile-researcher', $data);
	// 	}
	// 	else if( $profile_type == 'genome') {
	// 		$query = $this->db->query("select species, 'assets/img/researcher.jpg' AS mainpic_source
	// 									from organism o
	// 									where id='".$profile_id."'");
	// 		foreach ($query->result() as $row) {
	// 			$profile_title = $row->species;
	// 			$profile_mainpic = $row->mainpic_source;
	// 		}
	//
	// 		// GETTING TAXONONMY
	// 		$query = $this->db->query("select taxonomy
	// 									from organism o
	// 									where id='".$profile_id."'");
	// 		foreach ($query->result() as $row) {
	// 			$taxonomy = $row->taxonomy;
	// 		}
	//
	// 		// GETTING STUDIES
	// 		$query = $this->db->query("select DISTINCT r.id AS id, r.title AS title, 'study' AS result_type
	// 									from reference r, genbank_reference gr, organism o, genbank g
	// 									where o.id = '".
	// 									$profile_id."' AND o.id = g.id AND g.id = gr.genbank_id AND gr.reference_id = r.id");
	// 		$studies_result = $query->result();
	//
	// 		// GETTING RESEARCHERS THAT ENCOUNTERDBLABLA
	// 		$query = $this->db->query("select DISTINCT re.id AS id, CONCAT(re.first_name, re.last_name) AS name, 'researcher' AS result_type
	// 									from reference r, genbank_reference gr, organism o, genbank g, reference_researcher rr, researcher re
	// 									where o.id = '".
	// 									$profile_id."' AND o.id = g.id AND g.id = gr.genbank_id AND gr.reference_id = r.id AND r.id = rr.reference_id AND re.id = rr.researcher_id");
	// 		$researchers_result = $query->result();
	//
	//
	//
	// 		// RESULTS
	// 		$data = array(
	// 		'profile_id' => $profile_id,
	// 		'profile_type' => $profile_type,
	// 		'profile_title' => $profile_title,
	// 		'profile_mainpic' => $profile_mainpic,
	//
	// 		'taxonomy' => $taxonomy,
	//
	// 		'studies_result' => $studies_result,
	// 		'researchers_result' => $researchers_result
	// 		);
	//
	// 		$this->load->view('profile-researcher', $data);
	//
	// 	}
	// }

	public function initializeFromLink($profile_id, $profile_type)
	{

		if( $profile_type == 'researcher') {
			$query = $this->db->query("select name, 'assets/img/researcher_".mt_rand(1,10).".jpg' AS mainpic_source
										from researcher r
										where r.id='".$profile_id."'");
			foreach ($query->result() as $row) {
				$profile_name = $row->name;
				$profile_mainpic = $row->mainpic_source;
			}

			// GETTING AFFILIATOIN
			$affiliation = "";
			$query = $this->db->query("select affiliation
										from reference_researcher rr, affiliation aff
										where rr.researcher_id='".$profile_id."' AND aff.id=rr.affiliation_id");
			foreach ($query->result() as $row) {
				$affiliations_result = $row->affiliation;
			}

			// GETTING STUDIES OF THE AUTHOR
			$query = $this->db->query("select r.id AS id, r.title AS title, 'study' AS result_type
										from reference r, reference_researcher rr
										where rr.researcher_id = '".
										$profile_id."' AND rr.reference_id = r.id");
			$studies_result = $query->result();

			// GETTING ENCOUNTERED GENOMES
			$query = $this->db->query("select DISTINCT o.id AS id, o.species AS species, 'genome' AS result_type
										from reference r, reference_researcher rr, genbank g, genbank_reference gr, organism o
										where rr.researcher_id = '".
										$profile_id."' AND rr.reference_id = r.id AND gr.reference_id = r.id AND gr.genbank_id = g.id AND g.organism_id = o.id");
			$genomes_result = $query->result();



			// RESULTS
			$data = array(
			'profile_id' => $profile_id,
			'profile_type' => $profile_type,
			'profile_name' => $profile_name,
			'profile_mainpic' => $profile_mainpic,

			'age' => "53",
			'birthdate' => "May 12, 1996",
			'sex' => "M",
			'contact' => "09179118551",
			'affiliation' => $affiliation,
			'affiliations_result' => $affiliations_result,

			'studies_result' => $studies_result,
			'genomes_result' => $genomes_result
			);

			$this->load->view('profile-researcher', $data);
		}
		else if( $profile_type == 'study') {
			$query = $this->db->query("select title, 'assets/img/study.jpg' AS mainpic_source
										from reference r
										where id='".$profile_id."'");
			foreach ($query->result() as $row) {
				$profile_title = $row->title;
				$profile_mainpic = $row->mainpic_source;
			}

			// GETTING JOURNALS AND PUBMED
			$query = $this->db->query("select journal, pubmed
										from researcher r, reference_researcher rr, reference ref
										where r.id='".$profile_id."' AND reference_id=ref.id AND researcher_id=r.id");
			foreach ($query->result() as $row) {
				$journals = $row->journal;
				$pubmed = $row->pubmed;
			}

			// GETTING RESEARCHERS OF THE STUDY
			$query = $this->db->query("select r.id AS id, name, 'researcher' AS result_type
										from researcher r, reference_researcher rr
										where rr.reference_id = '".
										$profile_id."' AND rr.researcher_id = r.id");
			$researchers_result = $query->result();

			// GETTING ENCOUNTERED GENOMES
			$query = $this->db->query("select DISTINCT o.id AS id, o.species AS species, 'genome' AS result_type
										from reference_researcher rr, genbank g, genbank_reference gr, organism o
										where rr.reference_id = '".
										$profile_id."' AND gr.genbank_id = g.id AND g.organism_id = o.id");
			$genomes_result = $query->result();



			// RESULTS
			$data = array(
			'profile_id' => $profile_id,
			'profile_type' => $profile_type,
			'profile_title' => $profile_title,
			'profile_mainpic' => $profile_mainpic,

			'journals' => $journals,
			'pubmed' => $pubmed,

			'researchers_result' => $researchers_result,
			'genomes_result' => $genomes_result
			);

			$this->load->view('profile-study', $data);
		}
		else if( $profile_type == 'genome') {
			$query = $this->db->query("select species, 'assets/img/genome.jpg' AS mainpic_source
										from organism o
										where id='".$profile_id."'");
			foreach ($query->result() as $row) {
				$profile_title = $row->species;
				$profile_mainpic = $row->mainpic_source;
			}

			// GETTING TAXONONMY
			$query = $this->db->query("select taxonomy
										from organism o
										where id='".$profile_id."'");
			foreach ($query->result() as $row) {
				$taxonomy = $row->taxonomy;
			}

			// GETTING STUDIES
			$query = $this->db->query("select DISTINCT r.id AS id, r.title AS title, 'study' AS result_type
										from reference r, genbank_reference gr, organism o, genbank g
										where o.id = '".
										$profile_id."' AND o.id = g.id AND g.id = gr.genbank_id AND gr.reference_id = r.id");
			$studies_result = $query->result();

			// GETTING RESEARCHERS THAT ENCOUNTERDBLABLA
			$query = $this->db->query("select DISTINCT re.id AS id, name, 'researcher' AS result_type
										from reference r, genbank_reference gr, organism o, genbank g, reference_researcher rr, researcher re
										where o.id = '".
										$profile_id."' AND o.id = g.id AND g.id = gr.genbank_id AND gr.reference_id = r.id AND r.id = rr.reference_id AND re.id = rr.researcher_id");
			$researchers_result = $query->result();



			// RESULTS
			$data = array(
			'profile_id' => $profile_id,
			'profile_type' => $profile_type,
			'profile_title' => $profile_title,
			'profile_mainpic' => $profile_mainpic,

			'taxonomy' => $taxonomy,

			'studies_result' => $studies_result,
			'researchers_result' => $researchers_result
			);

			$this->load->view('profile-genome', $data);

		}
	}


	private function buildArrayFromJournalResult($journal_result){

	}
}
