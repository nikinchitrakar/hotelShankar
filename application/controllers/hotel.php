<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hotel extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// $this->load->model('login');
		// $this->load->model('page');
		// $this->load->model('mail');
		// $this->load->model('item');
	}


	public function index()
	{
		$data['page']="home";
		//$data['pageInfo']=$this->page->getPageInfo("Home Page");
		$this->load->view('header',$data);
		$this->load->view('joins/home',$data);
		$this->load->view('footer');
	}

	public function loadPage($page='home')
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
			case "aboutus":{
				$data['page']=$page;
				//$data['items'] = $this->item->getAll($page);
				$this->load->view('header',$data);
				$this->load->view('joins/about',$data);
				$this->load->view('footer');
				break;
			}
			case "blog": {
				$data['page']=$page;
				//$data['items'] = $this->item->getAll($page);
				$this->load->view('header',$data);
				$this->load->view('joins/blog',$data);
				$this->load->view('footer');
				break;
			}
			case "contact": {
				$data['page']=$page;
				//$data['items'] = $this->item->getAll($page);
				$this->load->view('header',$data);
				$this->load->view('joins/contact',$data);
				$this->load->view('footer');
				break;
			}
			case "rooms": {
				$data['page']=$page;
				//$data['items'] = $this->item->getAll($page);
				$this->load->view('header',$data);
				$this->load->view('joins/room',$data);
				$this->load->view('footer');
				break;
			}
		};
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

	public function signup($auth)
	{
		if($_POST){
			$array=array(
				'username'=>$_POST['username'],
				'email'=>$_POST['email'],
				'password'=>md5("{$_POST['pwd']}"),
				'authority'=>$auth
			);
			$res=$this->login->insert($array);
			if($res) {
				redirect(site_url("home_handle"));
			}
		}
		$this->load->view('join/signup');
	}

	public function logout()
	{
			if($this->session->userdata('username'))
			{
				$this->session->sess_destroy();
				redirect(site_url("home_handle"));

			}
	}

	public function contactUs()
	{
		$data['pageInfo']=$this->page->getPageInfo("AboutUs Page");
		$this->load->view('Join/contactus',$data);
	}

	public function sendMail()
	{
		if(!empty($_POST)) {
			if (isset($_POST['subject'])) {
				$name=$_POST['yourName'];
				$email = $_POST['email'];
				$subject = $_POST['subject'];
				$msg = $_POST['msg'];
				$headers = $email;

				$data=array(
						'name'=>$name,
						'email'=>$email,
						'subject'=>$subject,
						'msg'=>$msg
				);
				$this->mail->insert($data);
				mail("$email", stripslashes("$subject"), stripslashes("$msg"), "$headers");
				echo "<script>javascript:alert('Mail Sent Successfully'); window.location ='".site_url('home_handle/contactUs')."';</script>";
			} else {

				echo "<script>javascript:alert('Error in sending mail')</script>";
			}
		}
	}
}

