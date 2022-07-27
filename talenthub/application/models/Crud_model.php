<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model 
{
	private $user_id;
	private $today;

	public function __construct()
	{
		parent::__construct();
		$this->user_id = $this->session->userdata('user_id');
		$this->today = date('Y-m-d h:i:s');
	}
	// --------------------------------------------------------------------

		public function process_register()
	{
 
			$data = array(
				'name' => $this->input->post('name'),	
				'email' => $this->input->post('email'),	
				'password' => $this->input->post('password'),
				'user_type' => $this->input->post('job'),
				);					
			
		$res1 = $this->db->insert("login", $data);
		$seeker_id = $this->db->insert_id();
		$data2 = array(
				'user_id' => $seeker_id,	
				
				);	
		
		$res = $this->db->insert("profile", $data2);

		return $res ? 1 : 0;
	}
	
	
	public function process_login()
	{
		$username = $this->input->post('email');
		$password = $this->input->post('password');
		
		$res = $this->db->query('SELECT * FROM login where (email = "'.$username.'") and password = "'.$password.'"');

		return $res->num_rows() > 0 ? $res->row() : 0;
	}
	
	
	public function get_clientdetails($values)
	{
		
		$this->db->select('*');
		$this->db->from('login l');
		$this->db->join('profile p','l.user_id=p.user_id','left');
		//$this->db->order_by('phd_id', 'DESC');
		$this->db->where(array('l.user_id'=>$this->session->userdata('user_id')));
		$res=	$this->db->get()->row();

		return $res->$values;
	}
	
	
	public function get_clientdetails2($param)
	{
		
		$this->db->select('*');
		$this->db->from('login l');
		$this->db->join('profile p','l.user_id=p.user_id','left');
		//$this->db->order_by('phd_id', 'DESC');
		$this->db->where(array('l.user_id'=>$param));
		$res=	$this->db->get()->row();

		return $res;
	}
	
	public function get_all_clients()
	{
		
		$this->db->select('*');
		$this->db->from('login l');
		$this->db->join('profile p','l.user_id = p.user_id','left');
		$this->db->where(array('l.user_type !='=>'employer','p.gender !='=>''));
		$this->db->order_by('p.user_id', 'DESC');		
		$res=	$this->db->get()->result_array();

		return $res;
	}
	
	
	public function save1()
	{
		
		$photo = $this->input->post('photo');
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$dob = $this->input->post('dob');
		$gender = $this->input->post('gender');
		$path = 'upload/' .generateRandomString(). '.jpg';
		move_uploaded_file($_FILES['photo']['tmp_name'],$path );
		
			
		$data = array(				
				'photo' => $path,
				'firstname' => $fname,
				'lastname' => $lname,
				'birthdate' => $dob,
				'gender' => $gender,
				
				
				);
				
			
		$this->db->where('user_id',$this->session->userdata('user_id'));
		
		$res = $this->db->update('profile' , $data);
		
		return $res ? 1 : 0;
	}
	
	
	public function save2()
	{
		$address = $this->input->post('address');
		$country = $this->input->post('country');
		$phone = $this->input->post('phone');
		$district = $this->input->post('district');
		$sector = $this->input->post('sector');
			
		$data = array(				
				'address' => $address,
				'district' => $district,
				'country' => $country,
				'phonenumber' => $phone,			
				'sector' => $sector,
				);
				
			
		$this->db->where('user_id',$this->session->userdata('user_id'));
		
		$res = $this->db->update('profile' , $data);
		
		return $res ? 1 : 0;
	}
	public function save3()
	{
		$institution = $this->input->post('institution');
		$subject = $this->input->post('subject');
		$startingdate = $this->input->post('startingdate');
		$completedate = $this->input->post('completedate');
		$grade = $this->input->post('grade');
		$degree = $this->input->post('degree');
			
		$data = array(				
				'institution' => $institution,
				'startingdate' => $startingdate,
				'subject' => $subject,
				'completedate' => $completedate,			
				'grade' => $grade,
				'degree' => $degree,
				);
				
			
		$this->db->where('user_id',$this->session->userdata('user_id'));
		
		$res = $this->db->update('profile' , $data);
		
		return $res ? 1 : 0;
	}
	public function save4()
	{
		$companyname = $this->input->post('companyname');
		$location = $this->input->post('location');
		$jobposition = $this->input->post('jobposition');
		$periodfrom = $this->input->post('periodfrom');
		$periodto = $this->input->post('periodto');
			
		$data = array(				
				'companyname' => $companyname,
				'location' => $location,
				'jobposition' => $jobposition,
				'periodfrom' => $periodfrom,			
				'periodto' => $periodto,
				
				);
				
			
		$this->db->where('user_id',$this->session->userdata('user_id'));
		
		$res = $this->db->update('profile' , $data);
		
		return $res ? 1 : 0;
	}
	public function save5()
	{
		
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$dob = $this->input->post('dob');
		$gender = $this->input->post('gender');
		$address = $this->input->post('address');
		$country = $this->input->post('country');
		$phone = $this->input->post('phone');
		$district = $this->input->post('district');
		$sector = $this->input->post('sector');
		$institution = $this->input->post('institution');
		$subject = $this->input->post('subject');
		$startingdate = $this->input->post('startingdate');
		$completedate = $this->input->post('completedate');
		$grade = $this->input->post('grade');
		$degree = $this->input->post('degree');
		$companyname = $this->input->post('companyname');
		$location = $this->input->post('location');
		$jobposition = $this->input->post('jobposition');
		$periodfrom = $this->input->post('periodfrom');
		$periodto = $this->input->post('periodto');
		
			
		$data = array(				
				'firstname' => $fname,
				'lastname' => $lname,
				'birthdate' => $dob,
				'gender' => $gender,
				'address' => $address,
				'district' => $district,
				'country' => $country,
				'phonenumber' => $phone,			
				'sector' => $sector,
				'institution' => $institution,
				'startingdate' => $startingdate,
				'subject' => $subject,
				'completedate' => $completedate,			
				'grade' => $grade,
				'degree' => $degree,
				'companyname' => $companyname,
				'location' => $location,
				'jobposition' => $jobposition,
				'periodfrom' => $periodfrom,			
				'periodto' => $periodto,
				);
				
			
		$this->db->where('user_id',$this->session->userdata('user_id'));
		
		$res = $this->db->update('profile' , $data);
		
		return $res ? 1 : 0;
	}
	
}
