<?php
     defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Admin_Book extends CI_Model{
	     
		public function  check($data)
	 {
		$this->db->select("*");
		$this->db->from("admin");
		$this->db->where($data);
		$flag=0;
		foreach($this->db->get()->result()as $row){
			//echo $row->email." ".$row->password;
			 //return $this->db->get()->result();
			$flag=1;
		}
		return $flag;
	}
	
	  public function record1(){
		  $this->db->select("*");
		  $this->db->from("admin_dashboard");
		  return $this->db->get()->result();
		  
		  
	  }
	  
	  	public function insert_book_record($data){
		  $this->db->insert("admin_dashboard",$data);
		  return true;
	}
	
	public function edit_book_category1($code){
			$this->db->select("*");
			$this->db->from("admin_dashboard");
			$this->db->where("code",$code);
			return $this->db->get()->result();
		}
		
	 public function update_book_category1($data,$code){
			$this->db->where("code",$code);
			$this->db->update("admin_dashboard",$data);
	}
	 
	 public function delete_book_category1($code){
			$this->db->where("code",$code);
			$this->db->delete("admin_dashboard");
	}
	 
	 
	 
	 
	public function display1(){
		  $this->db->select("*");
		  $this->db->from("user");
		  return $this->db->get()->result();
		  
		  
	}
	public function  block_user1($id){
		   $this->db->select("status");
		   $this->db->from("user");
		   $this->db->where("email",$id);
		   foreach($this->db->get()->result() as $row){
			   if($row->status==0){
				   $sta = array(
				   "status"=>1
				   );
				   $this->db->where("email",$id);
				   $this->db->update("user",$sta);
				   return "Block";
				    
			   }
			   else if($row->status==1){
				   $sta = array(
				   "status"=>0
				   );
				   $this->db->where("email",$id);
				   $this->db->update("user",$sta);
				   return "Unblock";
				   
			   }
			   
		   }
		  
	  }
	  public function  delete_user1($id){
		  $this->db->where("email",$id);
		  $this->db->delete("user");
		  return true;
		  
	  }
	
	
	
	 }
	 
	 
?>