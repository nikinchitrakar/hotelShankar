<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller 
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('room');
		
	}
	public function index()
	{
		$this->load->view('joins/admin/adminHeader');
		$this->load->view('joins/admin/index');
		$this->load->view('joins/admin/adminFooter');
	}
	public function list_rooms()
	{
		$data['query']=$this->room->getall();
		$data['query1']=$this->room->getAllRoomDetails();
		$this->load->view('joins/admin/adminHeader');
		$this->load->view('joins/admin/list_rooms',$data);
		$this->load->view('joins/admin/adminFooter');	
	}
	public function add_rooms()
	{
		// $data['query']=$this->room->addRooms();
		$this->load->view('joins/admin/adminHeader');
		$this->load->view('joins/admin/addRoom');
		$this->load->view('joins/admin/adminFooter');
	}
	public function add_room_data()
	{
		$image = $this->do_upload();
		$data2=array(
			'room_id'=>$this->input->post('room-no'),
			'photo_name'=>$image
		);
		
		$data = array(

        	'room_type' => $this->input->post('room-type'),
        	'room_name' => $this->input->post('room-name'),
        	'room_description' => $this->input->post('rdetail'),
        	'room_price' => $this->input->post('room-price'),
        	'room_capacity' => $this->input->post('room-capasity'),
        	
        );
        	
         
         $data1=array(
         	'room_no'=>$this->input->post('room-no'),
         	'room_type'=>$this->input->post('room-type')
         	);
         $this->room->addRooms($data,$data1,$data2);

         $this->index();

	}
	
	public function do_upload() 
	{
		$image_path = realpath(APPPATH . '../uploads');
		$config['upload_path'] = $image_path;
        $config['allowed_types'] = 'gif|jpg|png|psd';
        
        $this->upload->initialize($config);
        print_r($config);
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error); 

        } else {
            $data['file_name'] = array('upload_data' => $this->upload->data());
            // echo "<PRE>";
            // 	print_r($data);
            // echo "<PRE>";
            return $data['file_name']['upload_data']['file_name'];
        }
    }
 }

?>