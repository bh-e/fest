<?php
class Inceptra extends CI_Controller {
 var $data;
 function __construct() { 
       parent::__construct(); 
	   $this->load->model('Inceptra_model');
	   $this->load->library('form_validation');	
	   $this->load->library('pagination');
	   $this->load->helper('form');
	   $this->load->helper('url'); 
	   $this->data=array(
	   	'site'=>$this->config->item('site_url'),
		'base'=>$this->config->item('base_url'),
		'css'=>$this->config->item('css'),
		'js'=>$this->config->item('js'),
		'img'=>$this->config->item('img'),
		'images'=>$this->config->item('images')
	   );
		 
		 
		 
		 
	}
 	//=========================index page===================================
    public function index() {
		$data=$this->data;
		$data['error']='';
	   $this->load->view('login_inceptra.php',$data);
 
    }
	
	
	
	public function do_login()
		{
			
			$data=$this->data;
			 $data['error']='';
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
				$this->load->model('Inceptra_model');
				$user=$this->Inceptra_model->check_userlogin($username,$password);
				
				if(count($user)==1)
				{
				
					$this->session->set_userdata('username',$user->username);
					if ($user->multichoice==NULL)
					{
						redirect('Inceptra/login');
					}
					else if($user->pickup1marks==NULL)
					{
						redirect('Inceptra/round2');
					}
					/*else if($user->pickup2marks==NULL)
					{
						redirect('Inceptra/choice2pickup');
					}*/
					else if($user->matchcatch==NULL)
					{
						redirect('Inceptra/round3');
					}
					else if($user->totalmarks!=NULL)
					{
						$data['error']='You have Already Completed the test';
					   //print_r($data);
					   $this->load->view('login_inceptra.php',$data);
					}
					else
					{
						redirect('Inceptra/login');
					}
					
				}
				else
				{
				  $this->form_validation->set_rules('username', 'Username', 'required|is_unique[tbl_testresults.username]');
				  $this->form_validation->set_rules('password', 'Password', 'required');
				  //die($email);
				  if ( $this->form_validation->run() == TRUE )
				  {
						  $this->Inceptra_model->do_login($username,$password);
						  $this->session->set_userdata('username',$username);
						  redirect('Inceptra/login');
				  }
				  else
				  {
				   $data['error']='Username Already Registered';
				   //print_r($data);
				   $this->load->view('login_inceptra.php',$data);
				  }
				}
			
		}
		
		
	public function home()
		{
			$data=$this->data;
			$username=$this->session->userdata('username');
			if ($username != '')
			{
				$this->load->model('Inceptra_model');
				$user=$this->Inceptra_model->check_round($username);
			if ($user->multichoice==NULL)
					{
						redirect('Inceptra/login');
					}
					else if($user->pickup1marks==NULL)
					{
						redirect('Inceptra/round2');
					}
					/*else if($user->pickup2marks==NULL)
					{
						redirect('Inceptra/choice2pickup');
					}*/
					else if($user->matchcatch==NULL)
					{
						redirect('Inceptra/round3');
					}
					else if($user->totalmarks!=NULL)
					{
						redirect('Inceptra/finish');
					}
					else
					{
						redirect('Inceptra/index');
					}
			}
			else
				{
					redirect('Inceptra/index');
				}
		}	
	

	public function login()
		{
			$data=$this->data;
			$username=$this->session->userdata('username');
			if ($username != '')
			{
				$user=$this->Inceptra_model->check_round($username);
				if ($user->multichoice==NULL and $user->pickup1marks==NULL  and $user->matchcatch==NULL)
				{
							
				$this->load->view('instuctions.php',$data);
				
				}
				else
					{
						redirect('Inceptra/home');
					}
				
			
			}
			else
				{
					redirect('Inceptra/index');
				}
		}

//========== start multichoice =================
	public function startmultichoice()
		{
			$data=$this->data;
			$username=$this->session->userdata('username');
			if ($username != '')
			{
			$this->load->model('Inceptra_model');
			$user=$this->Inceptra_model->check_round($username);
			if ($user->multichoice==NULL)
			{
				$data['multichoice']=$this->Inceptra_model->get_multichoice();
			
			
			$this->load->view('multichoice.php',$data);
			}
			else
				{
					redirect('Inceptra/home');
				}
			}
			
			else
				{
					redirect('Inceptra/index');
				}
		}


public function do_multichoice()
{
	$data = $this->data;
		$marks=0;
		$username=$this->session->userdata('username');
			if ($username != '')
			{
		for ($i=1;$i<=30;$i++)
		{
			$questionno=$this->input->post('questionno'.$i);
			$Question=$this->input->post('Question'.$i);
			if ($Question != '')
				{
					$Answer=$this->Inceptra_model->get_answerml($questionno);
					if ($Question == $Answer->answer)
					{
						$marks=$marks+2;
					}
					else
					{
						$marks=$marks-1;
					}
		
		
				}
		}
	
		
		$this->load->model('Inceptra_model');
		
		
		
		
		
		$this->Inceptra_model->do_multichoicetestresults($marks,$username);
		
		redirect('Inceptra/round2');
		}
			else
				{
					redirect('Inceptra/index');
				}
}	

	public function round2()
		{
			$data=$this->data;
			$username=$this->session->userdata('username');
			if ($username != '')
			{
			$user=$this->Inceptra_model->check_round($username);
			if ($user->pickup1marks==NULL)
			{
				$this->load->view('round2.php',$data);
			}
			else
				{
					redirect('Inceptra/home');
				}	
			
			}
			else
				{
					redirect('Inceptra/index');
				}
		}

	public function choicepickup()
		{
			$data=$this->data;
			$username=$this->session->userdata('username');
			if ($username != '')
			{
				$user=$this->Inceptra_model->check_round($username);
			if ($user->pickup1marks==NULL)
			{
				$this->load->view('choicepickup.php',$data);
			}
			else
				{
					redirect('Inceptra/home');
				}	
			
			
			
			}
			else
				{
					redirect('Inceptra/index');
				}
		}


	public function startpuickup($cat)
		{
			//die($cat);
			$data=$this->data;
			$username=$this->session->userdata('username');
			if ($username != '')
			{
			
			$this->load->model('Inceptra_model');
			$user=$this->Inceptra_model->check_round($username);
			if ($user->pickup1marks==NULL)
			{
				$data['pickup']=$this->Inceptra_model->get_pickup($cat);
				$this->load->view('pickupround.php',$data);
			}
			else
				{
					redirect('Inceptra/home');
				}	
			
			
			
			}
			else
				{
					redirect('Inceptra/index');
				}
			
		}




public function do_pickup1()
{
	$data = $this->data;
	$username=$this->session->userdata('username');
			if ($username != '')
			{
		$marks=0;
		$this->load->model('Inceptra_model');
		
			$examtype=$this->input->post('examtype');
			
		for ($i=1;$i<=4;$i++)
		{
			$questionno=$this->input->post('questionno'.$i);
			$Question=$this->input->post('firstimg'.$i);
			if (!empty($Question))
			{
			foreach ($Question as $row)
			{
			  if ($row != '')
				  {
					 
					  $Answer=$this->Inceptra_model->get_answerpk($questionno,$row);
					  
					
					  if ($Answer == 1)
					  {
						 
						  $marks=$marks+1;
						  
					  }
					  
		  	
		  
				  }
			}
			}
			
		
		}
			
		
		
	
		$onlinetest=array('pickup1marks'=>$marks,'pick1cat'=>$examtype);
		
		$this->Inceptra_model->do_pickup1results($onlinetest,$username);
		redirect('Inceptra/round3');
		}
			else
				{
					redirect('Inceptra/index');
				}
}	


	/*public function choice2pickup()
		{
			$data=$this->data;
			$username=$this->session->userdata('username');
			if ($username != '')
			{
				$user=$this->Inceptra_model->check_round($username);
			if ($user->pickup2marks==NULL)
			{
				$data['res']=$this->Inceptra_model->get_user($username);
			$this->load->view('choice2pickup.php',$data);
			}
			else
				{
					redirect('Inceptra/home');
				}	
			
			
			}
			else
				{
					redirect('Inceptra/index');
				}
		}


	public function startpuickup2($cat)
		{
			
			$data=$this->data;
			$username=$this->session->userdata('username');
			if ($username != '')
			{
			
			$this->load->model('Inceptra_model');
			$user=$this->Inceptra_model->check_round($username);
			if ($user->pickup2marks==NULL)
			{	
				$data['pickup']=$this->Inceptra_model->get_pickup($cat);
				$this->load->view('pickup2round.php',$data);
			}
			else
				{
					redirect('Inceptra/home');
				}	
				
			
			}
			else
				{
					redirect('Inceptra/index');
				}
			
		}




public function do_pickup2()
{
	$data = $this->data;
	$username=$this->session->userdata('username');
			if ($username != '')
			{
		$marks=0;
		$this->load->model('Inceptra_model');
		
			$examtype=$this->input->post('examtype');
			
		for ($i=1;$i<=2;$i++)
		{
			$questionno=$this->input->post('questionno'.$i);
			$Question=$this->input->post('firstimg'.$i);
			if (!empty($Question))
			{
			foreach ($Question as $row)
			{
			  if ($row != '')
				  {
					 $Answer=$this->Inceptra_model->get_answerpk($questionno,$row);
					
					  if ($Answer == 1)
					  {
						
						  $marks=$marks+1;
					  }
					  else
					  {
						  $marks=$marks-1;
					  }
		  	
		  
				  }
			}
			
			}
		
		}
		
		$onlinetest=array('pickup2marks'=>$marks,'pick2cat'=>$examtype);
		
		$this->Inceptra_model->do_pickup1results($onlinetest,$username);
		redirect('Inceptra/round3');
		}
			else
				{
					redirect('Inceptra/index');
				}
}	*/




	public function round3()
		{
			$data=$this->data;
			$username=$this->session->userdata('username');
			if ($username != '')
			{
				$user=$this->Inceptra_model->check_round($username);
			if ($user->totalmarks==0)
			{
				$this->load->view('round3.php',$data);
			}
			else
				{
					redirect('Inceptra/home');
				}	
				
			
			}
			else
				{
					redirect('Inceptra/index');
				}
		}



	public function startmatchcatch()
		{
			$data=$this->data;
			$username=$this->session->userdata('username');
			if ($username != '')
			{
			$this->load->model('Inceptra_model');
			$user=$this->Inceptra_model->check_round($username);
			if ($user->totalmarks==0)
			{
				$data['matchcatch']=$this->Inceptra_model->get_matchcatch();
				$this->load->view('matchcatch.php',$data);
			}
			else
				{
					redirect('Inceptra/home');
				}	
				
			
			}
			else
				{
					redirect('Inceptra/index');
				}
			
		}


public function do_matchcatch()
{
	$data = $this->data;
	$username=$this->session->userdata('username');
			if ($username != '')
			{
		$marks=0;
		
		for ($i=1;$i<=7;$i++)
		{
			$questionno=$this->input->post('questionno'.$i);
			$Question=$this->input->post('Question'.$i);
			
			if ($Question != '')
				{
					$Answer=$this->Inceptra_model->get_answermc($questionno);
					if ($Question == $Answer->answer)
					{
						$marks=$marks+4;
					}
					
		
				}
		}
		
		$this->load->model('Inceptra_model');
		$this->Inceptra_model->do_matchcatchtestresults($marks,$username);
		$tmarks=$this->Inceptra_model->get_totalresults($username);
		$total=$tmarks[0]->multichoice + $tmarks[0]->pickup1marks + $tmarks[0]->matchcatch;
		$this->Inceptra_model->do_totalresults($total,$username);
		redirect('Inceptra/finish');
		}
			else
				{
					redirect('Inceptra/index');
				}
}	


	public function finish()
		{
			$data=$this->data;
			$username=$this->session->userdata('username');
			if ($username != '')
			{
			$this->load->view('logout_inceptra.php',$data);
			}
			else
				{
					redirect('Inceptra/index');
				}
		}
		
//============logout==============
		public function logout()
		{
			$data = $this->data;
			$this->session->sess_destroy();
			redirect('Inceptra/index');
			
		}


 
 

}
?>