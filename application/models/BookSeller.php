<?php
     defined('BASEPATH') OR exit('No direct script access allowed');
	
	class BookSeller extends CI_Model{
	    public function display(){
	      return $this->db->get("user")->result();
	    }
		  public function index1()
	    {
		   
		  //$this->db->limit(4);
		  return $this->db->get("add_book")->result();
	    }
		
		 public function search1($data)
	    {
		    $this->db->select('*');
			$this->db->from('add_book');
			$this->db->like('book_name', $data);
			$query = $this->db->get();
			return $query->result();
		 
	    }
		 public function search_record1()
	    {
		   
		 // $this->db->limit(4);
		  return $this->db->get("add_book")->result();
	    }
		
		
		 
		 
		public function insert_record($data){
		  $this->db->insert("user",$data);
		  return true;
		}
		 public function  check($data)
	    {
		$this->db->select("*");
		$this->db->from("user");
		$this->db->where($data);
		$flag=0;
		foreach($this->db->get()->result()as $row){
			//echo $row->email." ".$row->password;
			 //return $this->db->get()->result();
			$flag=1;
		    }
		return $flag;
	    }
	 
	 public function  record($data)
	{
		$this->db->select("*");
		$this->db->from("add_book");
		$this->db->where_not_in("email",$data);
	  return $this->db->get()->result();
	}
	 public function  user_book1($data)
	{
		$this->db->select("*");
		$this->db->from("add_book");
		$this->db->where("email",$data);
	  return $this->db->get()->result();
	}
	 
	
	 public function  record1($data)
	{
		$this->db->select("*");
		$this->db->from("user");
		$this->db->where("email",$data);
	  return $this->db->get()->result();
	}
	
	
	public function record2($id){
		$this->db->select("*");
		$this->db->from("user");
		$this->db->where("email",$id);
		return $this->db->get()->result();
	}
	
    public function update_record($data,$email){
			$this->db->where("email",$email);
			$this->db->update("user",$data);
	}
	public function password_record($email,$data){
			$this->db->where("email",$email);
			$this->db->update("user",$data);
	}
	
	
	public function record3($email){
		$this->db->select("*");
		$this->db->from("user");
		$this->db->where("email",$email);
		return $this->db->get()->result();
	}
	
	public function insert_book_record($data){
		  $this->db->insert("add_book",$data);
		  return true;
	}
	
	public function record4($code){
		  $this->db->select('*');
		   $this->db->from('add_book');
		  // $code=$this->uri->segment(3);
		   $this->db->where("code",$code);
		   return $this->db->get()->result();
		}
		
     public function edit_book1($code){
			$this->db->select("*");
			$this->db->from("add_book");
			$this->db->where("code",$code);
			return $this->db->get()->result();
		}
    public function update_record1($data,$code){
			$this->db->where("code",$code);
			$this->db->update("add_book",$data);
	}
		
	public function delete_book1($code){
			$this->db->where("code",$code);
			$this->db->delete("add_book");
	}
	public function edit_book_image1($code){
			$this->db->select("*");
			$this->db->from("add_book");
			$this->db->where("code",$code);
			return $this->db->get()->result();
	}
	
	public function book_buy1($code){
		$this->db->select("*");
		$this->db->from("add_book");
		$this->db->where("code",$code);
		return $this->db->get()->result();
	}
	public function insert_msg_record($data){
		  $this->db->insert("message",$data);
		  return true;
	}
	
	public function inbox1($email){
		$this->db->select("*");
		$this->db->from("message");
		$this->db->where("to_email",$email);
		return $this->db->get()->result();
 
	}
	
	public function book_reply1($data){
		  $this->db->insert("sent",$data);
		  return true;
	} 
	public function sent1($email){
		$this->db->select("*");
		$this->db->from("sent");
		$this->db->where("to_email",$email);
		return $this->db->get()->result();
 
	}
	public function delete_message1($code){
			$this->db->where("code",$code);
			$this->db->delete("message");
	}
	
	public function add_cart1($data){
		 
		 $this->db->insert("add_cart",$data);
		  return true;
 
	}
	
	public function cart1($email){
		$this->db->select("*");
		$this->db->from("add_cart");
		$this->db->where("user_email",$email);
		return $this->db->get()->result();
	}
	
	public function delete_cart1($book_code){
			$this->db->where("book_code",$book_code);
			$this->db->delete("add_cart");
	}
	
	 public function user_search1($data)
	    {
		    $this->db->select('*');
			$this->db->from('add_book');
			$this->db->like('book_name', $data);
			$query = $this->db->get();
			return $query->result();
		  
	    }
		 public function user_search_record1()
	    {
		   
		 // $this->db->limit(4);
		  return $this->db->get("add_book")->result();
	    }
	
	 
	
	/*public function search1($email){
			 $this->db->select("*");
		     $this->db->from("add_book");
		     $this->db->where("email",$email);
		   return $this->db->get()->result();
	    }
	public function search_record1($book_name){
			 $this->db->select('*');
			$this->db->from('add_book');
			$this->db->like('book_name', $book_name);
			$query = $this->db->get();
			return $query->result();
	    }*/
		
	
		
	
	}
?>