<?php

class Room extends CI_Model
{	
	
	function __construct() 
  	{
    /* Call the Model constructor */
    parent::__construct();
    
  	}
	
	public function getAll()
	{
		$query = $this->db->select('*')->from('room')->get();
    	return $query->result();

    	// $this->db->select('*');
    	// $this->db->from('room');
    	// $this->db->join('room_total', 'room.room_type = room_total.room_type', 'left'); 
    	// $query = $this->db->get();
    	// return $query->result();
	}
  public function getAllRoomDetails(){
    $query = $this->db->select('*')->from('room_total')->get();
      return $query->result();
  }
  public function addRooms($data,$data1,$data2)
  {
     
      $this->db->insert('room', $data);
      $this->db->insert('room_total', $data1);
      $this->db->insert('photo',$data2);
      return;
  }
	public function getId()
	{
		$query = $this->db->select('room_no')->from('room_total')->get();
    	return $query->result();
   	}
   	public function addItem($data)
   	{
   		 $this->db->insert('reservation', $data);
    	return;
   	}
  public function getRoomNo($room_type)
  {
    $query = $this->db->select('room_no')->from('room_total')->where('room_type',$room_type)->get();
      return $query->result();
  }
}
