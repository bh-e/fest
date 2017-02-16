<?php 

class Inceptra_model extends CI_Model
{
	function _construct()
	{
		parent::_construct();
		$this->load->database();
	}
	//=================login=============
	public function check_userlogin($username,$password)
	{
		$pw=md5($password);
		//die($pw);
		$query=$this->db->query("select * from  tbl_testresults where username='$username' and password='$pw'");
		return $query->row();
	}
	//=================login=============
	public function check_round($username)
	{
		$query=$this->db->query("select * from  tbl_testresults where username='$username'");
		return $query->row();
	}
	//=================Set online status=============
	public function do_login($username,$password)
	{
		$password=md5($password);
		$this->db->query("insert into tbl_testresults(username,password) values('$username','$password')");
		
	}
	//===================Resume Upload Jobseeker========================
	public function get_multichoice()
	{
	
		$query=$this->db->query("(select *  from tbl_onlinetest where examtype='GK' ORDER BY RAND() LIMIT 15) union (select *  from tbl_onlinetest where examtype='IT' ORDER BY RAND() LIMIT 15)");
		return $query->result();
		
		
	}
	public function get_answerml($qno)
	{
	
		$query=$this->db->query("select answer  from tbl_onlinetest where q_id='$qno'");
		return $query->row();
		
		
	}
	 public function do_multichoicetestresults($marks,$username)
    {
		
		$query=$this->db->query("update tbl_testresults set multichoice='$marks' where username='$username'");
	}
	//===================Resume Upload Jobseeker========================
	public function get_pickup($cat)
	{
	
		$query=$this->db->query("select *  from tbl_pickup where category='$cat' ORDER BY RAND() LIMIT 20"  );
		return $query->result();
		
		
	}
	public function get_answerpk($qno,$rs)
	{
	
		$query=$this->db->query("SELECT answers FROM tbl_pickup WHERE p_id = '$qno' AND answers LIKE  '%$rs%'");
		$q=$query->num_rows();
		return $q;
		
		
	}
	public function do_pickup1results($marks,$username)
    {
		
		$this->db->where('username',$username);
		$this->db->update('tbl_testresults',$marks);
	}
	
	/*=================For Display Groups==========================*/
	public function get_user($username)
	{
		$query=$this->db->query("select * from tbl_testresults where username='$username'");
		return $query->result();
	}
	//===================Resume Upload Jobseeker========================
	public function get_matchcatch()
	{
	
		$query=$this->db->query("select * from tbl_matchcatch ORDER BY RAND() LIMIT 20"  );
		return $query->result();
		
		
	}
	public function get_answermc($qno)
	{
	
		$query=$this->db->query("select answer from tbl_matchcatch where q_id='$qno'");
		return $query->row();
		
		
	}
	public function do_matchcatchtestresults($marks,$username)
    {
		
		$query=$this->db->query("update tbl_testresults set matchcatch='$marks' where username='$username'");
	}
	
	/*=================For Display Groups==========================*/
	public function get_totalresults($username)
	{
		$query=$this->db->query("select multichoice,pickup1marks,matchcatch from tbl_testresults where username='$username'");
		return $query->result();
	}
	public function do_totalresults($total,$username)
    {
		
		$query=$this->db->query("update tbl_testresults set totalmarks='$total' where username='$username'");
	}
	
}