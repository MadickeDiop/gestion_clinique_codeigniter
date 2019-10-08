<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('welcome_message');
	}


	public function header()
	{
		$this->load->view('templates/header');
	}




	public function navbar()
	{
		$this->load->view('templates/navbar');
	}



	public function contenu()
	{
		$this->load->view('templates/contenu');
	}



	public function footer()
	{
		$this->load->view('templates/footer');
	}



	public function home()
	{
		$this->load->view('templates/home');
	}


	public function about()
	{
		$this->load->view('templates/about');
	}


	public function services()
	{
		$this->load->view('templates/services');
	}


	public function news()
	{
		$this->load->view('templates/news');
	}



	public function contact()
	{
		$this->load->view('templates/contact');
	}



	public function signup()
	{
		
		$this->load->database();
	    $this->load->helper('url');
	

     if($this->input->post('save'))
		{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$password=$this->input->post('password');
		$que=$this->db->query("select * from user where email='$email'");
		
		$que=$this->db->query("insert into user values('','$name','$email','$phone','$password')");
		
		$data['error']="<h3 style='color:blue'>Your account created successfully</h3>";
					
				
		}

		$this->load->view('templates/signup',@$data);
	    

	}



	public function signin()
	{
		 

         if($this->input->post('login')) {
             $email=$this->input->post('email');
             $password=$this->input->post('password');
             $que=$this->db->query("select * from user where email='$email' and password='$password'");

             redirect('index.php/welcome');

         }

         else {
         	echo "failed authentication";
         }


     $this->load->view('templates/signin',@$data);	


	}











		public function user()
	{
		$this->load->model('usermodel');
		$data['records']=$this->usermodel->getData();
		$this->load->view('templates/user',$data);
	}



}
