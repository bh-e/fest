<?php 
#*******************************************************************************************************************#
# 					\-\-\-\-\-\-\-\-\-\-\-\	http://www.BandGmatrimony.com	/-/-/-/-/-/-/-/-/-/-/-/					#
#*******************************************************************************************************************#
# B&Gmatrimony		:	Version 1.0                                                                 				#
# Authors			:	Jithin Kuriakose(ashakmohanan@gmail.com)                         													#
# Created 			:	16/08/2014				Last Modified 03/09/2014                            				#
# License:      	:   http://www.ASoftTechnologies.com                                            				#
#*******************************************************************************************************************#
# File name     	:          jobs_admin_model.php                                                             		#		
# File purpose  	:          Model for Admin Panel                                      				      				#
#                                                			                                                        #
#Included Files		:			 												                                    #
#                       		 																					#
#Included Scripts   : 														                                        #
#                                                                                                                   #
# You should have received a copy of the  License along with this program;                                          #
# if not, write to the ASofttechnologies Pvt Ltd,Ernakulam Dist,Kerala -686689 India.                               #
# 					                                                                              				    #
#*******************************************************************************************************************#

class Inceptra_admin_model extends CI_Model{
	function _construct()
	{
		parent::_construct();
		$this->load->database();
	}
	

	
	public function check_login($email,$password)
	{
		
		$password1=md5($password);
		
		$query=$this->db->query("select * from tbl_login where usertype='ADMIN' and email='".$email."' and password='".$password1."'");
		return $query->num_rows();
	}
	public function get_report()
	{
		
		
		$query=$this->db->query("select * from tbl_testresults order by totalmarks desc");
		return $query->result();
	}
	
	
}
?>