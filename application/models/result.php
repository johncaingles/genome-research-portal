<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class result extends CI_Model {

    var $title   = '';
    var $content = '';
    var $category    = '';
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function getNotes(){

    	// $query = $this->db->select(array('category_name', 'title', 'content'))
    	// 		->from(array('category', 'note'))
    	// 		->where('category_id', 'category.id')
    	// 		->get();

		$query = $this->db->query('SELECT category_name, title, content
								FROM category, note
								WHERE category_id = category.id');
		
    	echo json_encode($query->result());

		// echo $this->db->last_query();
    }

}
