<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct(){
		 parent::__construct();
		 $this->load->helper("form");
		 $this->load->helper("url");
		 $this->load->database();
		 $this->load->model("Admin_Book");
		 $this->load->helper("cookie");
		 //$sn=0;
		 $this->load->library("session");
	 }	  
	public function index()
	{
		 
		$this->load->view('admin_login');
		 
	}
	
	public function enter(){
			    $data=array(
			   "email"=>$this->input->post("email"),
			   "password"=>$this->input->post("pass")
			  );
			
		if($record["rec"] = $this->Admin_Book->check($data)==1){
					//echo $data["email"]." "$data["password"];
					 set_cookie("login",$data["email"],time()+3600*24);
					 $this->session->set_userdata($data["email"],$data["password"]);
					 redirect(base_url("index.php/Admin/admin_dashboard"));
		}
		else{
					echo "Try again";
		}
				 // $this->load->view("login",$record);
			  
	}
	
	
	public function admin_dashboard(){
			   
			$email=get_cookie("login");
			$pass=$this->session->userdata($email);
		      if(isset($email) && isset($pass)){
				$pro["h"] = $this->Admin_Book->record1($email);
				  $this->load->view("admin_dashboard",$pro);
			  }
			  else{
				  redirect(base_url("index.php/Admin"));
			  }
				
	}
	
	
	
	public function add_category()
	{
		  $sn=0;
		  $code="";
		  $email=get_cookie("login");
		   $this->db->select_max('sn');
		   $query = $this->db->get("admin_dashboard");
		   foreach($query->result() as $row){
			  $sn  = $row->sn;
		   }
		   $sn++;
		   
		   $a=array();
			   for($i='A';$i<='Z';$i++){
				   array_push($a,$i);
				   if($i=='Z')
					   break;
			   }
			   for($i='a';$i<='z';$i++){
				   array_push($a,$i);
				   if($i=='z')
					   break;
			   }
			   for($i=0;$i<=9;$i++){
				   array_push($a,$i);
				   
			   }
			   shuffle($a);
			   for($i=0;$i<=5;$i++){
				   $code=$code.$a[$i];
			   }
			   $code=$code."_".$sn;
		$data=array(
		 "sn"=>$sn,
		 "code"=>$code,
		 "email"=>$email,
		"book_category"=>$this->input->post("book_category"),
		);
		
		//$data1=array("sn","code",$data);
		
		 
		if($this->Admin_Book->insert_book_record($data)){
			//echo "Record Inserted";
			redirect(base_url()."index.php/Admin/admin_dashboard/".$code);
			 
		}
		else{
			//echo "Try Again";
			 redirect(base_url("index.php/Admin/admin_dashboard"));
		}
		
		 
	}
	
	
	public function edit_book_category()
	{
		   $email=get_cookie("login");
	       $pass=$this->session->userdata($email);
	    if(isset($email) && isset($pass)){
			 $code=$this->uri->segment(3);
			 $rec["rd"]=$this->Admin_Book->edit_book_category1($code);
			 $this->load->view("edit_book_category",$rec);
	    }
		
		  
		 
		else{
				  redirect(base_url("index.php/Admin"));
			}
	
	}
 
	
		public function update_book_category()
	{
		   $email=get_cookie("login");
	       $pass=$this->session->userdata($email);
	    if(isset($email) && isset($pass)){
			$code=$this->uri->segment(3);
			$data=array(
			"book_category"=>$this->input->post("book_category"),
			);
	  
		  $this->Admin_Book->update_book_category1($data,$code);
		  redirect(base_url("index.php/Admin/admin_dashboard/".$code));
        }
		 
		else{
				  redirect(base_url("index.php/Admin"));
			}
	}
	
	
	
	public function delete_book_category(){
		$email=get_cookie("login");
	    $pass=$this->session->userdata($email);
	    if(isset($email) && isset($pass)){
			$code=$this->uri->segment(3);
			$this->Admin_Book->delete_book_category1($code);
			redirect(base_url("index.php/Admin/admin_dashboard"));
        }
		 
		else{
				  redirect(base_url("index.php/Admin"));
			}
		
		 
	}
	
	
	
	public function logout(){
		$email = get_cookie("login");
		delete_cookie("login");
		$this->session->unset_userdata($email);
		redirect(base_url()."index.php/Admin");
		
	}
	public function all_user(){
		
		$email = get_cookie("login");
		$pass  = $this->session->userdata($email);
		if(isset($email) && isset($pass)){
			$red["pic"] = $this->Admin_Book->display1();
			$this->load->view("all_user",$red);
			
		}
		
	}
	public function block_user(){
		$id=$this->input->post("id");
		$email=get_cookie("login");
		if(isset($email)){
			$rec = $this->Admin_Book->block_user1($id);
			if($rec=="Block"){
				echo "block";
				
			}
			else if($rec=="Unblock"){
				echo "unblock";
				
			}
			
		}
		
	}
	public function delete_user(){
		$id=$this->input->post("id");
		$email=get_cookie("login");
		if(isset($email)){
			 if($this->Admin_Book->delete_user1($id)){
				echo "delete";
				
			}
			
		}
		
		
	}
	
		 
}
?>