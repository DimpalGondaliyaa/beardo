<?php
/**
 * 
 */
class Admin_model extends CI_Model
{
	public function logindata($data)
	{
		$username = $data['username'];
		$password = $data['password'];
		$sql = $this->db->query("SELECT * FROM admin WHERE username='$username' and password = '$password'");
		if($sql->num_rows()==1)
		{
			$sql= array('status' => "ok",
			'message' => "login ok" );
			$this->session->set_userdata('username',$username);
		}
		else
		{
			$sql= array('status' => "no",
			'message' => "login fail"  );
		}
		return $sql;
	}
}
?>