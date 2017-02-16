
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
#*******************************************************************************************************************#
# 					\-\-\-\-\-\-\-\-\-\-\-\	http://www.BandGmatrimony.com	/-/-/-/-/-/-/-/-/-/-/-/					#
#*******************************************************************************************************************#
# B&Gmatrimony		:	Version 1.0                                                                 				#
# Authors			:	Asha k mohanan(ashakmohanan@gmail.com)                         								#
# Created 			:	16/08/2014				Last Modified 03/09/2014     					      				#
# License:      	:   http://www.ASoftTechnologies.com                                            				#
#*******************************************************************************************************************#
# File name     	:          bandg_grocy_model.php                                                             	#		
# File purpose  	:          Model  for Admin Panel                                      				      		#
#                                                			                                                        #
#Included Files		:			 												                                    #
#                       		 																					#
#Included Scripts   : 														                                        #
#                                                                                                                   #
# You should have received a copy of the  License along with this program;                                          #
# if not, write to the ASofttechnologies Pvt Ltd,Ernakulam Dist,Kerala -686689 India.                               #
# 					                                                                              				    #
#*******************************************************************************************************************#

 
class Jobs_grocy_model extends grocery_CRUD_model {
 
	private  $query_str = ''; 
	function __construct() {
		parent::__construct();
	}
 
	function get_list() {
		$query=$this->db->query($this->query_str);
 
		$results_array=$query->result();
		return $results_array;		
	}
	
 
 	public function getJobseekers() {
		$sql="SELECT * FROM tbl_jobseeker WHERE (profile_type='Full time') order by jobseeker_id desc";
		$this->query_str = $sql;
	}
 public function getFreelancer() {
		$sql="SELECT * FROM tbl_jobseeker WHERE (profile_type='Freelancer') order by jobseeker_id desc";
		$this->query_str = $sql;
	} 
	public function getParttime() {
		$sql="SELECT * FROM tbl_jobseeker WHERE (profile_type='Part Time') order by jobseeker_id desc";
		$this->query_str = $sql;
	}
	public function getEmployers() {
		$sql="SELECT * FROM  tbl_employer order by employer_id desc";
		$this->query_str = $sql;
	}
	public function getServiceproviders() {
		$sql="SELECT * FROM  tbl_serviceprovider order by serviceprovider_id desc";
		$this->query_str = $sql;
	}
	public function getActiveJob() {
		
		$sql="SELECT * FROM  tbl_postjob where lastdate >= CURDATE()";
		$this->query_str = $sql;
	}
	public function getExpiredJob() {
		
		$sql="SELECT * FROM  tbl_postjob where lastdate < CURDATE()";
		$this->query_str = $sql;
	}
	public function getDailyVistor() {
		
		$sql="SELECT * FROM  tbl_sitelog where date(entrytime) = CURDATE()";
		$this->query_str = $sql;
	}
	public function getActiveJobs() {
		
		$this->table_join="tbl_postjob";
		$this->joincondition="tbl_employer.employer_id=tbl_postjob.companyid";
		
		//$sql="SELECT * FROM tbl_register JOIN tbl_profile ON tbl_register.reg_id=tbl_profile.reg_id WHERE (tbl_profile.paidtype='0'  or tbl_profile.paidtype='')";
		//$this->query_str = $sql;
	}
	
	
	
	
	
 
	public function getpaidprofile() {
		$sql="SELECT * FROM tbl_register JOIN tbl_profile ON tbl_register.reg_id=tbl_profile.reg_id WHERE (tbl_profile.paidtype!='0' and tbl_profile.paidtype!='')";
		$this->query_str = $sql;
	}
	public function getfreeprofile() {
		
		$sql="SELECT * FROM tbl_register JOIN tbl_profile ON tbl_register.reg_id=tbl_profile.reg_id WHERE (tbl_profile.paidtype='0'  or tbl_profile.paidtype='')";
		$this->query_str = $sql;
	}
	public function getPlatinummbrs()
	{
		//$sql="select tbl_register.reg_name,tbl_register.reg_email,tbl_register.reg_contactno,tbl_profile.qualification,tbl_profile.enddate ,tbl_profile.job from tbl_register JOIN tbl_profile ON tbl_register.reg_id = tbl_profile.reg_id where tbl_profile.paidtype='platinum'";
		$sql="select r.*,p.qualification,p.job,p.enddate from tbl_register r JOIN tbl_profile p ON r.reg_id = p.reg_id where p.paidtype='platinum'";
		$this->query_str = $sql;
	
	}
	public function get_report()
	{
		$query=$this->db->query("SELECT * FROM tbl_register");
		return $query->result();
	}
	
}