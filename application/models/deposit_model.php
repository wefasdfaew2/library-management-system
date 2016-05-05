<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class deposit_model extends CI_Model {
	public function __construct() {
		parent:: __construct();
		$this->load->helper('form');
	}

	public function addDeposit($depositDetails){
		extract($depositDetails);
		$sql = "INSERT INTO deposit(member_id,date,amount,booklet,receipt) VALUES(?,?,?,?,?)";
		$query = $this->db->query($sql,array($member_id,$date,$amount,$booklet,$receipt));
		$sql = "UPDATE member SET status='1' WHERE member_id='$member_id'";
		$mem = $this->db->query($sql);
		if($query && $mem){
			return TRUE;
		}
		else
			return FALSE;
	}

	public function viewPendingDeposit(){
		$sql = "SELECT member_id,first_name,middle_name,last_name FROM member WHERE status='0'";
		$query = $this->db->query($sql);
		if($query){
			return $query;
		}
		else{
			return FALSE;
		}
	}

	public function donationBoolean($id){
		extract($id);
		$sql = "SELECT status FROM member WHERE member_id='$member_id'";
		$query = $this->db->query($sql);
		if($query){
			foreach ($query->result_array() as $check) {
				$c = $check['status'];
			}
			if($c=='1'){
				return TRUE;
			}
			else if($c=='0'){
				return FALSE;
			}
		}
		echo "Error occured! Please try again later.";
	}
}

