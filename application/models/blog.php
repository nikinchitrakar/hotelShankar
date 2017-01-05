<?php

class Blog extends CI_Model
{	
	
	function __construct() 
  	{
    /* Call the Model constructor */
    parent::__construct();
    
  	}
  	public function getAll()
	{
		$query = $this->db->select('*')->from('blog')->get();
    	return $query->result();

	}
}