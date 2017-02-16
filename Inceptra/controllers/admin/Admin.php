<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Admin extends CI_Controller {

	
	 var $data;
	public function __construct()
	{
        parent::__construct(); 
		$this->load->library('form_validation');
        $this->data = array(
		'site' => $this->config->item('site_url'),
             'base' => $this->config->item('base_url'),
             'css' => $this->config->item('css'),
             'js' => $this->config->item('js'),
			 'images'=>$this->config->item('images'),
			 'error'=>''
        					);
							
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
       
    }
	public function index()
	{
		
		$data = $this->data;
		$this->load->view('admin/login.php',$data);
	}
	public function login()
	{
		$data = $this->data;
		$email=$this->input->post("username");
		$password=$this->input->post("password");
		$this->load->model('admin/inceptra_admin_model');
		
		$res=$this->inceptra_admin_model->check_login($email,$password);
		//die($res);
		if($res==1 || $this->session->userdata('admin')!="")
		{
			$this->session->set_userdata('admin',$email);
			
			redirect('admin/admin/testresult');
		}
		else
		{
			$data['error']="Invalid Username or Password";
			$this->load->view('admin/login.php',$data);
		}
	}
	//============logout==============
		public function logout()
		{
			$data = $this->data;
			
			$email=$this->session->userdata('admin');
			
			
			$this->session->sess_destroy();
			redirect('admin/admin/index');
			
		}
	/* Function For Displaying the home page*/
	public function home()
	{
		
		$data = $this->data;
		$this->load->view('admin/index.php',$data);
	}
	
/* Common Function for calling the View*/
	public function _admin_output($output = null)
	{
		$output->base=$this->config->item('base_url');
		$output->site=$this->config->item('site_url');
		$output->css=$this->config->item('css');
		$output->js=$this->config->item('js');
		$this->load->view('admin/home_page.php',$output);
		
	}
	
	
	
	
	
	public function testresult()
	{
		$admin=$this->session->userdata('admin');
		if ($admin != '')
		{
		$crud = new grocery_CRUD();
		$crud->set_table('tbl_testresults');
		$crud->set_subject('Test Results');
		$crud->columns('username','multichoice','pickup1marks','pick1cat','matchcatch','totalmarks');
		$crud->display_as('username','Username');
		$crud->display_as('multichoice','Multichoice Marks');
		$crud->display_as('pickup1marks','Pickup1 Marks');
		$crud->display_as('pick1cat','Pick1 Categgory');
		$crud->display_as('matchcatch','Matchcatch Marks');
		$crud->display_as('totalmarks','Total Marks');
		 $crud->order_by('totalmarks','desc');
		$output = $crud->render();
		$this->_admin_output($output);
		}
		else
		{
			redirect('admin/admin/index');
		}

	}
	public function multichoice()
	{
		$admin=$this->session->userdata('admin');
		if ($admin != '')
		{
			
		$crud = new grocery_CRUD();
		$crud->set_table('tbl_onlinetest');
		$crud->set_subject('Multichoice');
		$crud->columns('q_id','question','value1','value2','value3','value4','answer','examtype');
		$crud->display_as('q_id','Question Id');
		$crud->display_as('question','Question');
		$crud->display_as('value1','Option1');
		$crud->display_as('value2','Option2');
		$crud->display_as('value3','Option3');
		$crud->display_as('value4','Option4');
		$crud->display_as('answer','Answer');
		$crud->display_as('examtype','Exam Category');
		
		$output = $crud->render();
		$this->_admin_output($output);
		}
		else
		{
			redirect('admin/admin/index');
		}

	}
	public function pickup()
	{
		$admin=$this->session->userdata('admin');
		if ($admin != '')
		{
		$crud = new grocery_CRUD();
		$crud->set_table('tbl_pickup');
		$crud->columns('p_id','category','question','answers','image1','title1','image2','title2','image3','title3','image4','title4','image5','title5','image6','title6');
		$crud->display_as('p_id','Question ID')
		->display_as('category','Category')
		->display_as('question','Question')
		->display_as('answers','Answers')
		->display_as('image1','Image1')
		->display_as('title1','Caption1')
		->display_as('image2','Image2')
		->display_as('title2','Caption2')
		->display_as('image3','Image3')
		->display_as('title3','Caption3')
		->display_as('image4','Image4')
		->display_as('title4','Caption4')
		->display_as('image5','Image5')
		->display_as('title5','Caption5')
		->display_as('image6','Image6')
		->display_as('title6','Caption6');
		$crud->set_field_upload('image1','uploads');
		$crud->set_field_upload('image2','uploads');
		$crud->set_field_upload('image3','uploads');
		$crud->set_field_upload('image4','uploads');
		$crud->set_field_upload('image5','uploads');
		$crud->set_field_upload('image6','uploads');
		
   $crud->callback_before_upload(array($this,'callback_imgsize'));
   $crud->callback_after_update(array($this,'rename_image1_db'));
   $crud->callback_after_insert(array($this,'rename_image1_db'));
     $crud->callback_after_update(array($this,'rename_image2_db'));
   $crud->callback_after_insert(array($this,'rename_image2_db'));
     $crud->callback_after_update(array($this,'rename_image3_db'));
   $crud->callback_after_insert(array($this,'rename_image3_db'));
     $crud->callback_after_update(array($this,'rename_image4_db'));
   $crud->callback_after_insert(array($this,'rename_image4_db'));
     $crud->callback_after_update(array($this,'rename_image5_db'));
   $crud->callback_after_insert(array($this,'rename_image5_db'));
     $crud->callback_after_update(array($this,'rename_image6_db'));
   $crud->callback_after_insert(array($this,'rename_image6_db'));
   $crud->set_subject('Pick Up Round');
		$output = $crud->render();
		$this->_admin_output($output);
		}
		else
		{
			redirect('admin/admin/index');
		}

	}
	public function matchcatch()
	{
		$admin=$this->session->userdata('admin');
		if ($admin != '')
		{
		$crud = new grocery_CRUD();
		$crud->set_table('tbl_matchcatch');
		$crud->set_subject('Match Catch Round');
		$crud->columns('q_id','question','q_code','value1','value2','value3','value4','answer');
		$crud->display_as('q_id','Question Id');
		$crud->display_as('question','Question');
                $crud->display_as('q_code','Code');
		$crud->display_as('value1','Option1');
		$crud->display_as('value2','Option2');
		$crud->display_as('value3','Option3');
		$crud->display_as('value4','Option4');
		$crud->display_as('answer','Answer');
		$output = $crud->render();
		$this->_admin_output($output);
		}
		else
		{
			redirect('admin/admin/index');
		}

	}
		
	
	
	
	
	
	

 
  /* Image size checking before upload*/
 function callback_imgsize($files_to_upload,$field_info)
 {
   foreach($files_to_upload as $f)
     {
      $imgsize=$f['size'];
     }
    if($imgsize>1048576)///image size in bytes
    return "The uploaded image size should be less than 1MB";
    
 }
 function rename_image1_db($post_array,$primary_key_value)
 {

 
  if(strlen($post_array['image1']>0))
  {
   if(strpos($post_array['image1'],'/')==false)//if the photo contains a '/'
   {
    $path_photo=$post_array['image1'];
   }
   else
   {
    $ph_name=strrchr($post_array['image1'],"/");//extarcting the name of image from path
    $path_photo= substr($ph_name,1,strlen($ph_name)); 
   }
   //die($path_photo);
   $dt = array("p_id" => $primary_key_value,"image1" => $path_photo);
  
         $this->db->update('tbl_pickup',$dt,array('p_id' => $primary_key_value));
  }
     
	    return true;
    }
	
	
	 function rename_image2_db($post_array,$primary_key_value)
 {

 
  if(strlen($post_array['image2']>0))
  {
   if(strpos($post_array['image2'],'/')==false)//if the photo contains a '/'
   {
    $path_photo=$post_array['image2'];
   }
   else
   {
    $ph_name=strrchr($post_array['image2'],"/");//extarcting the name of image from path
    $path_photo= substr($ph_name,1,strlen($ph_name)); 
   }
   $dt = array("p_id" => $primary_key_value,"image2" => $path_photo);
  
         $this->db->update('tbl_pickup',$dt,array('p_id' => $primary_key_value));
  }
     
	    return true;
    }
	
	
	 function rename_image3_db($post_array,$primary_key_value)
 {

 
  if(strlen($post_array['image3']>0))
  {
   if(strpos($post_array['image3'],'/')==false)//if the photo contains a '/'
   {
    $path_photo=$post_array['image3'];
   }
   else
   {
    $ph_name=strrchr($post_array['image3'],"/");//extarcting the name of image from path
    $path_photo= substr($ph_name,1,strlen($ph_name)); 
   }
   $dt = array("p_id" => $primary_key_value,"image3" => $path_photo);
  
         $this->db->update('tbl_pickup',$dt,array('p_id' => $primary_key_value));
  }
     
	    return true;
    }
	
	
 function rename_image4_db($post_array,$primary_key_value)
 {

 
  if(strlen($post_array['image4']>0))
  {
   if(strpos($post_array['image4'],'/')==false)//if the photo contains a '/'
   {
    $path_photo=$post_array['image4'];
   }
   else
   {
    $ph_name=strrchr($post_array['image4'],"/");//extarcting the name of image from path
    $path_photo= substr($ph_name,1,strlen($ph_name)); 
   }
   $dt = array("p_id" => $primary_key_value,"image4" => $path_photo);
  
         $this->db->update('tbl_pickup',$dt,array('p_id' => $primary_key_value));
  }
     
	    return true;
    }
	
	
	 function rename_image5_db($post_array,$primary_key_value)
 {

 
  if(strlen($post_array['image5']>0))
  {
   if(strpos($post_array['image5'],'/')==false)//if the photo contains a '/'
   {
    $path_photo=$post_array['image5'];
   }
   else
   {
    $ph_name=strrchr($post_array['image5'],"/");//extarcting the name of image from path
    $path_photo= substr($ph_name,1,strlen($ph_name)); 
   }
   $dt = array("p_id" => $primary_key_value,"image5" => $path_photo);
  
         $this->db->update('tbl_pickup',$dt,array('p_id' => $primary_key_value));
  }
     
	    return true;
    }
	
	
	 function rename_image6_db($post_array,$primary_key_value)
 {

 
  if(strlen($post_array['image6']>0))
  {
   if(strpos($post_array['image6'],'/')==false)//if the photo contains a '/'
   {
    $path_photo=$post_array['image6'];
   }
   else
   {
    $ph_name=strrchr($post_array['image6'],"/");//extarcting the name of image from path
    $path_photo= substr($ph_name,1,strlen($ph_name)); 
   }
   
   $dt = array("p_id" => $primary_key_value,"image6" => $path_photo);
  
         $this->db->update('tbl_pickup',$dt,array('p_id' => $primary_key_value));
  }
     
	    return true;
    }
	

/* Report Viewing Function*/
	public function getReports()
	{
		$this->load->model('admin/inceptra_admin_model');
		$res=$this->inceptra_admin_model->get_report();
		
		$this->load->helper('file'); 
		$this->load->helper(array('dompdf', 'file'));
		$head="LIST OF Candidates and there Marks";
		$html="<center><h3>".$head."</h3></center><br/>";
				
		$html.='<center><table width="600">';
		$html.='<tr><th align="left">Username</th><th align="left">Multichoice</th><th align="left">Pickup1</th><th align="left">Pickup2</th><th align="left">Match Catch</th><th align="left">Toal Marks</th></tr>';
		foreach($res as $r)
		{
		$html.='<tr><td>'.$r->r_id.'</td><td>'.$r->username.'</td><td>'.$r->multichoice.'</td><td>'.$r->pickup1marks.'</td><td>'.$r->pickup2marks.'</td><td>'.$r->matchcatch.'</td><td>'.$r->totalmarks.'</td></tr>';
		
		}
		$html.='</table></center>';
				
     	pdf_create($html, 'pdfreport');
        write_file('name', $data);
	}
	/* Function for Display,Add,Edit and Delete the Service Category */
	
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */