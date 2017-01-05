<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hotel extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// $this->load->model('login');
		
		$this->load->model('room');
		$this->load->model('blog');
		 $dbconnect = $this->load->database();
		// $this->load->model('mail');
		// $this->load->model('item');

	}


	public function index()
	{
		$data['page']="Home";
		//$data['pageInfo']=$this->page->getPageInfo("Home Page");
		$this->load->view('header',$data);
		$this->load->view('joins/home',$data);
		$this->load->view('footer');
	}

	public function loadPage($page='Home')
	{
		switch($page)
		{
			case "home": {
				$data['page']=$page;
				//$data['pageInfo']=$this->page->getPageInfo("Home Page");
				$this->load->view('header',$data);
				$this->load->view('joins/home',$data);
				$this->load->view('footer');
				break;
			}
			case "AboutUs":{
				$data['page']=$page;
				//$data['items'] = $this->item->getAll($page);
				$this->load->view('header',$data);
				$this->load->view('joins/about',$data);
				$this->load->view('footer');
				break;
			}
			case "Blog": {
				$data['page']=$page;
				$data['query'] = $this->blog->getAll();
				$this->load->view('header',$data);
				$this->load->view('joins/blog',$data);
				$this->load->view('footer');
				break;
			}
			case "Contact": {
				$data['page']=$page;
				//$data['items'] = $this->item->getAll($page);
				$this->load->view('header',$data);
				$this->load->view('joins/contact',$data);
				$this->load->view('footer');
				break;
			}
			case "Rooms": {
				$data['page']=$page;
				$data['query'] = $this->room->getAll();
				$this->load->view('header',$data);
				$this->load->view('joins/room',$data);
				$this->load->view('footer');
				break;
			}
			case "Gallery": {
				$data['page']=$page;
				// $data['query'] = $this->room->getAll();
				$this->load->view('header',$data);
				$this->load->view('joins/gallery',$data);
				$this->load->view('footer');
				break;
			}
		};
	}
// 
	public function booking($room_type)
	{
		
		$data['query'] = $this->room->getRoomNo($room_type);
		$data['page']="Booking";

			$this->load->view('header',$data);
			$this->load->view('joins/booking_form',$data);
			$this->load->view('footer');
		
	}

	public function add_user_data(){
		$data['r_status']=1;
		$data = array(

        	'r_fname' => $this->input->post('fname'),
        	'r_lname' => $this->input->post('lname'),
        	'r_email' => $this->input->post('email'),
        	'r_contact' => $this->input->post('contact'),
        	'r_date_in' => $this->input->post('registration-date-in'),
        	'r_date_out' => $this->input->post('registration-date-out'),
        	'room_no'=>$this->input->post('room_no')
        	
        );
        
         $this->room->addItem($data);
         $this->index();

	}

	public function loginPage()
	{
		if(empty($_POST))
		{
			$this->load->view('join/login');
		}
		else
		{
			$email=$_POST["email"];
			$pwd=md5($_POST["pwd"]);
			if($this->login->isUserExist($email))
			{
				$data=$this->login->getUserData($email,$pwd);
				if(count($data)>0) {
					$this->session->set_userdata("username",$data['username']);
					$this->session->set_userdata("email",$data['email']);
					$this->session->set_userdata("authority",$data['authority']);
					redirect(site_url("home_handle"));
				}
				else{
					echo "<script>alert('Email or Password doesn\'t match')</script>";
				}
			}
			else
			{
				echo "<script>alert('User Doesn\'t Exist')</script>";
			}
		}

	}

	
}

