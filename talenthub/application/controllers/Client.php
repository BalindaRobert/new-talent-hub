<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		 $this->load->database();
	}
	
	public function index()
	{
		
		$page_data['page_name'] = 'login';
		$this->load->view('login',$page_data);
	}
	
	public function employer()
	{	
		if (empty($this->session->userdata('user_id')))
            redirect(base_url() . 'Client/index', 'refresh');
		
		$page_data['page_name'] = 'seekers_list';
		$page_data['clientdata'] = $this->Crud_model->get_all_clients();
		$this->load->view('index',$page_data);
	}
	
	public function view_client($param="")
	{	
		if (empty($this->session->userdata('user_id')))
            redirect(base_url() . 'Client/index', 'refresh');
		
		$page_data['page_name'] = 'employe_details';
		$page_data['clientdata'] = $this->Crud_model->get_clientdetails2($param);
		$this->load->view('index',$page_data);
	}
	
	public function jobseeker($param="")
	{	
		if (empty($this->session->userdata('user_id')))
            redirect(base_url() . 'Client/index', 'refresh');
		
		if($param=="editprof"){
			
		$page_data['page_name'] = 'jobseeker';
		$this->load->view('index',$page_data);
			
		}
		
		if($param==""){
		$page_data['page_name'] = 'seekers_details';
		$this->load->view('index',$page_data);
		}
		
	}
	
	
	
	public function jobseekersavedeatails($param="")
	{	
		if (empty($this->session->userdata('user_id')))
            redirect(base_url() . 'Client/index', 'refresh');
		
		if($param=="save1"){
			
		$saved = $this->Crud_model->save1();
		
		if ($saved) 
		{
			
			$this->session->set_flashdata('success', 'Updated successfull');			
			redirect(base_url() . 'Client/jobseeker', 'refresh');
		}
		else
		{
			$this->session->set_flashdata('failed','Update  Failed');
			redirect(base_url() . 'Client/jobseeker/editprof', 'refresh');
		}
			
		}
		
		if($param=="save2"){
		$saved = $this->Crud_model->save2();
		
		if ($saved) 
		{
			
			$this->session->set_flashdata('success', 'Updated successfull');			
			redirect(base_url() . 'Client/jobseeker', 'refresh');
		}
		else
		{
			$this->session->set_flashdata('failed','Update  Failed');
			redirect(base_url() . 'Client/jobseeker/editprof', 'refresh');
		}
		
		}
		if($param=="save3"){
			$saved = $this->Crud_model->save3();
			
			if ($saved) 
			{
				
				$this->session->set_flashdata('success', 'Updated successfull');			
				redirect(base_url() . 'Client/jobseeker', 'refresh');
			}
			else
			{
				$this->session->set_flashdata('failed','Update  Failed');
				redirect(base_url() . 'Client/jobseeker/editprof', 'refresh');
			}
			
			}
			if($param=="save4"){
				$saved = $this->Crud_model->save4();
				
				if ($saved) 
				{
					
					$this->session->set_flashdata('success', 'Updated successfull');			
					redirect(base_url() . 'Client/jobseeker', 'refresh');
				}
				else
				{
					$this->session->set_flashdata('failed','Update  Failed');
					redirect(base_url() . 'Client/jobseeker/editprof', 'refresh');
				}
				
				}
				if($param=="save5"){
			
					$saved = $this->Crud_model->save5();
					
					if ($saved) 
					{
						
						$this->session->set_flashdata('success', 'Updated successfull');			
						redirect(base_url() . 'Client/jobseeker', 'refresh');
					}
					else
					{
						$this->session->set_flashdata('failed','Update  Failed');
						redirect(base_url() . 'Client/jobseeker/editprof', 'refresh');
					}
						
					}
				
			
	}
	
	
	public function login()
	{
	
		

		$login = $this->Crud_model->process_login();

		if ($login) 
		{
			$this->session->set_userdata('user_id',$login->user_id);
			$this->session->set_userdata('username',$login->name);
			$this->session->set_userdata('user_type',$login->user_type);

			$this->session->set_flashdata('success', 'Wellcome User ');
			
			
			if (($this->session->userdata('user_type'))=="jobseeker")
            redirect(base_url() . 'Client/jobseeker', 'refresh');
			
			if (($this->session->userdata('user_type'))=="employer")
            redirect(base_url() . 'Client/employer', 'refresh');
			
		}
		else
		{
			$this->session->set_flashdata('failed','Wrong Username/email or Password');
			redirect(base_url() . 'Client', 'refresh');
			
		}
		
	}
	
	public function register()
	{
	
			
		$save = $this->Crud_model->process_register();
		

		if ($save) 
		{
			
			$this->session->set_flashdata('success', 'Registration successfull');			
			redirect(base_url() . 'Client/index', 'refresh');
		}
		else
		{
			$this->session->set_flashdata('failed','Registration  Failed');
			redirect(base_url() . 'Client/index', 'refresh');
		}	
		
	}
	
	
	public function logout()
	{
				
				session_destroy();
				$this->session->set_flashdata('success',"Logged out Successfull");

			$this->index();
			return;
	}

	
	
}
