<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	 public function __construct(){
		 parent::__construct();
		 $this->load->helper("form");
		 $this->load->helper("url");
		 $this->load->database();
		 $this->load->model("BookSeller");
		 $this->load->helper("cookie");
		 $this->load->library("session");
		  $this->load->helper("date");
		
	 }
   public function index()
	{
		// $rec["rd"]=$this->Record->display();
		//$pro["h"] = $this->BookSeller->index1($data);
		//$this->load->view('welcome_message');
		$rec["rd"]=$this->BookSeller->index1();
		$this->load->view("welcome_message",$rec);
		 
	}
	public function search()
	{
		   $book_name=$this->input->post("book_name");
			$rec["rd"] = $this->BookSeller->search1($book_name);
			$this->load->view("search_record.php",$rec);
		 
	}
	 public function search_record()
	{
		 
		$rec["rd"]=$this->BookSeller->search_record1();
			$this->load->view("search_record",$rec);
		 
	}
	
	 
	public function user()
	{
		$this->load->view('user');
		  
	}
	
	public function submit()
	{
		$data=array(
		
		"fname"=>$this->input->post("fname"),
		"lname"=>$this->input->post("lname"),
		"email"=>$this->input->post("email"),
		"password"=>$this->input->post("password"),
		"phone"=>$this->input->post("phone"),
		 
		);
		if($this->BookSeller->insert_record($data)){
			//echo "Record Inserted";
			redirect(base_url()."index.php/Welcome/");
			//echo "<a href='".base_url()."index.php/Welcome/'>Index</a>";
		}
		else{
			echo "Try Again";
		}
		 
	}
	
	public function enter(){
			    $data=array(
			   "email"=>$this->input->post("email"),
			   "password"=>$this->input->post("pass")
			  );
			
		if($record["rec"] = $this->BookSeller->check($data)==1){
					//echo $data["email"]." "$data["password"];
					 set_cookie("login",$data["email"],time()+3600*24);
					 $this->session->set_userdata($data["email"],$data["password"]);
					 redirect(base_url("index.php/Welcome/dashboard"));
		}
		else{
					echo "Try again";
		}
				 // $this->load->view("login",$record);
			  
	}
		   
	public function dashboard(){
			   
			    $email=get_cookie("login");
			    $pass=$this->session->userdata($email);
        if(isset($email) && isset($pass)){
				  $pro["h"] = $this->BookSeller->record($email);
				  $this->load->view("dashboard",$pro);
			  
		}
	    else{
				  redirect(base_url("index.php/Welcome"));
		}
				
			
		 
    }
	
	
	
	
	public function user_profile(){
			   
			   $email=get_cookie("login");
			    $pass=$this->session->userdata($email);
		      if(isset($email) && isset($pass)){
				$pro["h"] = $this->BookSeller->record1($email);
				  $this->load->view("user_profile",$pro);
			  
			  }
			  else{
				  redirect(base_url("index.php/Welcome"));
			  }
	}
	
	
	public function edit_user()
	{
		 
		 /*$id=$this->uri->segment(3);
		 $rec["rd"]=$this->Insert_Book->edit_book($id);
		 $this->load->view("edit_book",$rec);*/
		       $email=get_cookie("login");
			    $pass=$this->session->userdata($email);
		      if(isset($email) && isset($pass)){
				$pro["h"] = $this->BookSeller->record2($email);
				$this->load->view("edit_user",$pro);
	        }
			else{
				  redirect(base_url("index.php/Welcome"));
			  }
	}
	
	
	public function update()
	{
		$email=get_cookie("login");
	    $pass=$this->session->userdata($email);
		  if(isset($email) && isset($pass)){
		$data=array(
		"fname"=>$this->input->post("fname"),
		"lname"=>$this->input->post("lname"),
		"phone"=>$this->input->post("phone"),
		);
	 //  print_r($data);
	  //  echo "<br>".$sn;
	  $this->BookSeller->update_record($data,$email);
	  redirect(base_url("index.php/Welcome/user_profile"));
         }
		 
		else{
				  redirect(base_url("index.php/Welcome"));
			  }
	}
	
	public function update_password()
	{
		$email=get_cookie("login");
	    $pass=$this->session->userdata($email);
		$this->db->select("*");
		$this->db->from("user");
		$this->db->where("email",$email);
		$cp = $this->input->post("cp");
	    $np = $this->input->post("np");
	    $rp = $this->input->post("rp");
		
		if(isset($email) && isset($pass)){
		$data = array(
			"password"=>$rp
			);
		  
		foreach ($this->db->get()->result() as $row){
				   if($row->password==$cp){
					   if($np==$rp){
						   $this->BookSeller->password_record($email,$data);
						   redirect(base_url()."index.php/Welcome/user_profile/updated_successfully");
					   }
					   else{
						   redirect(base_url()."index.php/Welcome/user_profile/password_missmatch");
					   }
				   }
				   else{
					   redirect(base_url()."index.php/Welcome/user_profile/password_invalid");
				   }	
			   }
			  redirect(base_url("index.php/Welcome/user_profile"));
        }
		else{
				  redirect(base_url("index.php/Welcome"));
		} 
         			   
	}
	
	public function add_book(){
			   
			   $email=get_cookie("login");
			    $pass=$this->session->userdata($email);
		      if(isset($email) && isset($pass)){
				$pro["h"] = $this->BookSeller->record3($email);
				  $this->load->view("add_book",$pro);
			  
			  }
			  else{
				  redirect(base_url("index.php/Welcome"));
			  }
	}
	
	public function book_signup()
	{
		  $sn=0;
		  $code="";
		  $email=get_cookie("login");
		   $this->db->select_max('sn');
		   $query = $this->db->get("add_book");
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
		"book_name"=>$this->input->post("book_name"),
		"book_category"=>$this->input->post("book_category"),
		"book_author"=>$this->input->post("book_author"),
		"book_edition"=>$this->input->post("book_edition"),
		"book_amount"=>$this->input->post("book_amount"),
		"book_description"=>$this->input->post("book_description"),
		"book_quantity"=>$this->input->post("book_quantity"),
		 
		);
		
		//$data1=array("sn","code",$data);
		
		 
		if($this->BookSeller->insert_book_record($data)){
			//echo "Record Inserted";
			redirect(base_url()."index.php/Welcome/upload_book/".$code);
			 
		}
		else{
			//echo "Try Again";
			 redirect(base_url("index.php/Welcome/add_book"));
		}
		
		 
	}
	
    public function upload_book(){
		        $email=get_cookie("login");
			    $pass=$this->session->userdata($email);
		    if(isset($email) && isset($pass)){
				 $code=$this->uri->segment(3);
		         $this->load->view("upload_book",$code);
			}
			else{
				  redirect(base_url("index.php/Welcome"));
			}
		 
	}
	public function do_upload()
    {
			   $code=$this->uri->segment(3);
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
			    $config['file_name']           = $code;
               //echo $code;
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_book', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                       // $this->load->view('upload_success', $data);
					   redirect(base_url()."index.php/Welcome/book_profile/".$code);
                }
    }
	
	
	public function book_profile()
	{
	  $email=get_cookie("login");
	  $pass=$this->session->userdata($email);
	    if(isset($email) && isset($pass)){
	       $code=$this->uri->segment(3);
	       $rec["rd"]=$this->BookSeller->record4($code);
	       $this->load->view('book_profile',$rec);
	    }  
	   else{
			redirect(base_url("index.php/Welcome"));
			}
	
	}
	
	
	

	public function edit_book()
	{
		   $email=get_cookie("login");
	       $pass=$this->session->userdata($email);
	    if(isset($email) && isset($pass)){
			 $code=$this->uri->segment(3);
			 $rec["rd"]=$this->BookSeller->edit_book1($code);
			 $this->load->view("edit_book",$rec);
	    }
		
		  
		 
		else{
				  redirect(base_url("index.php/Welcome"));
			}
	
	}
	public function update_book()
	{
		   $email=get_cookie("login");
	       $pass=$this->session->userdata($email);
	    if(isset($email) && isset($pass)){
			$code=$this->uri->segment(3);
			$data=array(
			"book_name"=>$this->input->post("book_name"),
			"book_category"=>$this->input->post("book_category"),
			"book_author"=>$this->input->post("book_author"),
			"book_edition"=>$this->input->post("book_edition"),
			"book_amount"=>$this->input->post("book_amount"),
			"book_description"=>$this->input->post("book_description"),
			"book_quantity"=>$this->input->post("book_quantity"),
			);
	  
		  $this->BookSeller->update_record1($data,$code);
		  redirect(base_url("index.php/Welcome/edit_book_image/".$code));
        }
		 
		else{
				  redirect(base_url("index.php/Welcome"));
			}
	}
	
	 public function delete_book(){
		$email=get_cookie("login");
	    $pass=$this->session->userdata($email);
	    if(isset($email) && isset($pass)){
			$code=$this->uri->segment(3);
			$this->BookSeller->delete_book1($code);
			redirect(base_url("index.php/Welcome/dashboard"));
        }
		 
		else{
				  redirect(base_url("index.php/Welcome"));
			}
		
		 
	}
	
	public function edit_book_image()
	{
		   $email=get_cookie("login");
	       $pass=$this->session->userdata($email);
	    if(isset($email) && isset($pass)){
			 $code=$this->uri->segment(3);
			 $rec["rd"]=$this->BookSeller->edit_book_image1($code);
			 $this->load->view("edit_book_image",$rec);
	    }
		
		  
		 
		else{
				  redirect(base_url("index.php/Welcome"));
			}
	
	}
	
	
	public function user_book(){
			   
			    $email=get_cookie("login");
			    $pass=$this->session->userdata($email);
        if(isset($email) && isset($pass)){
				  $pro["h"] = $this->BookSeller->user_book1($email);
				  $this->load->view("user_book",$pro);
			  
		}
	    else{
				  redirect(base_url("index.php/Welcome"));
		}
				
			
		 
    }
	
	public function book_buy(){
			   
			   $email=get_cookie("login");
			    $pass=$this->session->userdata($email);
		      if(isset($email) && isset($pass)){
				  $code=$this->uri->segment(3);
				$pro["h"] = $this->BookSeller->book_buy1($code);
				  $this->load->view("book_buy",$pro);
			  
			  }
			  else{
				  redirect(base_url("index.php/Welcome"));
			  }
	}
	
	
	
	public function book_msg()
	{
		   $email=get_cookie("login");
		   $pass=$this->session->userdata($email);
		 if(isset($email) && isset($pass)){
	         $to_code = $this->uri->segment(3);
			 $to_email="";
			 $from_email = get_cookie("login");
			 $name="";
			 $msg = $this->input->post("msg");
			// $con = $this->input->post("contact");
			 $this->db->select("*");
			 $this->db->from("add_book");
			 $this->db->where("code",$to_code);
			   foreach($this->db->get()->result() as $row){
				   $to_email = $row->email ;
			   }
			   $this->db->select("*");
			 $this->db->from("user");
			 $this->db->where("email",$from_email);
			   foreach($this->db->get()->result() as $row){
				   $from_email = $row->email ;
			   }
			    
			   $from_code="";
			   $this->db->select("*");
			   $this->db->from("add_book");
			   $this->db->where("email",$from_email);
			   foreach($this->db->get()->result() as $row){
				   $from_code = $row->code ;
			   }
               	$sn=0;
			  $code="";
			   $this->db->select_max('sn');
			   $query = $this->db->get("message");
			   foreach($query->result() as $row){
				  $sn  = $row->sn;
			   }
			   $sn++;
			  
			  $a = array() ;
				for($i = 'A';$i<='Z';$i++){
					  array_push($a,$i) ;
						if($i=='Z') 
						   break ;
				}
				for($i = 'a';$i<='z';$i++){
					  array_push($a,$i) ;
						if($i=='z') 
						   break ;
				}
				for($i = 0;$i<=9;$i++){
					  array_push($a,$i) ;
				}
				$b = array_rand($a,6) ;
				for($i=0;$i<sizeof($b);$i++){
					$code = $code.$a[$b[$i]] ;
				}
				$code = $code."_".$sn ;
                $time = date("Y-m-d");

              $data = array(
                "sn"=>$sn,
                "code"=>$code,
				 "to_email"=>$to_email,
				"to_code"=>$to_code,
                "to_email"=>$to_email,
				"from_email"=>$from_email,
                "from_code"=>$from_code,
                "msg"=>$msg,
                "dt"=>$time
                );
              				
			  if($this->BookSeller->insert_msg_record($data)){
				  redirect(base_url()."index.php/Welcome/book_buy/".$to_code."/Message_sent/");
			  }
			  else{
				  redirect(base_url()."index.php/Welcome/book_buy/".$to_code."/again_sent/");
				  
			  }
	
	    }
	
	    else{
		 redirect(base_url("index.php/Welcome"));
			}
			  
	}
	
	 
	 
	
    public function inbox(){
			 $email = get_cookie("login");
			  $pass = $this->session->userdata($email);
			  if(isset($email) && isset($pass)){
				  $rec["h"]=$this->BookSeller->inbox1($email);
				  $this->load->view("inbox.php",$rec);
			  }
			  else{
				  redirect(base_url());
			  }
	}
	
	
	
	
		public function book_reply()
	{
		   $email=get_cookie("login");
	       $pass=$this->session->userdata($email);
	    if(isset($email) && isset($pass)){
	         $to_code = $this->uri->segment(3);
			 $to_email="";
			 $from_email = get_cookie("login");
			 $msg = $this->input->post("msg");
			 
			 $this->db->select("*");
			 $this->db->from("message");
			 $this->db->where("from_code",$to_code);
			   foreach($this->db->get()->result() as $row){
				   $to_email = $row->from_email ;
			   }
			   $this->db->select("*");
			 $this->db->from("user");
			 $this->db->where("email",$from_email);
			   foreach($this->db->get()->result() as $row){
				   $from_email = $row->email ;
			   }
			    
			   $from_code="";
			   $this->db->select("*");
			   $this->db->from("message");
			   $this->db->where("from_email",$from_email);
			   foreach($this->db->get()->result() as $row){
				   $from_code = $row->to_code ;
			   }
               	$sn=0;
			  $code="";
			   $this->db->select_max('sn');
			   $query = $this->db->get("sent");
			   foreach($query->result() as $row){
				  $sn  = $row->sn;
			   }
			   $sn++;
			  
			  $a = array() ;
				for($i = 'A';$i<='Z';$i++){
					  array_push($a,$i) ;
						if($i=='Z') 
						   break ;
				}
				for($i = 'a';$i<='z';$i++){
					  array_push($a,$i) ;
						if($i=='z') 
						   break ;
				}
				for($i = 0;$i<=9;$i++){
					  array_push($a,$i) ;
				}
				$b = array_rand($a,6) ;
				for($i=0;$i<sizeof($b);$i++){
					$code = $code.$a[$b[$i]] ;
				}
				$code = $code."_".$sn ;
                $time = date("Y-m-d");

              $data = array(
                "sn"=>$sn,
                "code"=>$code,
				 "to_email"=>$to_email,
				"to_code"=>$to_code,
                "to_email"=>$to_email,
				"from_email"=>$from_email,
                "from_code"=>$from_code,
                "msg"=>$msg,
                "reply_date"=>$time
                );
              				
			  if($this->BookSeller->book_reply1($data)){
				  redirect(base_url()."index.php/Welcome/inbox/".$code."/Message_sent/");
			  }
			  else{
				  redirect(base_url()."index.php/Welcome/inbox/".$code."/Try Again/");
				  
			  }
	
	    }
		  
		 
		else{
				  redirect(base_url("index.php/Welcome"));
			}
	
	}
	
	public function sent(){
			 $email = get_cookie("login");
			  $pass = $this->session->userdata($email);
			  if(isset($email) && isset($pass)){
				  $rec["h"]=$this->BookSeller->sent1($email);
				  $this->load->view("sent.php",$rec);
			  }
			  else{
				  redirect(base_url());
			  }
	}
	
	public function delete_message(){
		$email=get_cookie("login");
	    $pass=$this->session->userdata($email);
	    if(isset($email) && isset($pass)){
			$code=$this->uri->segment(3);
			$this->BookSeller->delete_message1($code);
			redirect(base_url("index.php/Welcome/inbox"));
        }
		 
		else{
				  redirect(base_url("index.php/Welcome"));
			}
		
		 
	}
	
	
	
	 
	
	public function add_cart()
	{
		   $email=get_cookie("login");
	       $pass=$this->session->userdata($email);
	    if(isset($email) && isset($pass)){
	         $book_code = $this->uri->segment(3);
			 $book_email="";
			 $user_email = get_cookie("login");
			 
			 $this->db->select("*");
			 $this->db->from("add_book");
			 $this->db->where("code",$book_code);
			   foreach($this->db->get()->result() as $row){
				   $book_email = $row->email ;
			   }
			   $this->db->select("*");
			   $this->db->from("user");
			   $this->db->where("email",$user_email);
			   foreach($this->db->get()->result() as $row){
				   $user_email = $row->email ;
			   }
			    
			   
               	$sn=0;
			 
			   $this->db->select_max('sn');
			   $query = $this->db->get("add_cart");
			   foreach($query->result() as $row){
				  $sn  = $row->sn;
			   }
			   $sn++;
			  
			   $time = date("Y-m-d");

              $data = array(
                "sn"=>$sn,
                "book_email"=>$book_email,
				"book_code"=>$book_code,
                "user_email"=>$user_email,
               "add_date"=>$time
                );
              				
			  if($this->BookSeller->add_cart1($data)){
				  redirect(base_url()."index.php/Welcome/book_buy/".$book_code."/Added_Success");
			  }
			  else{
				  redirect(base_url()."index.php/Welcome/book_buy/".$book_code."/try_again/");
				  
			  }
	
	    }
		  
		 
		else{
				  redirect(base_url("index.php/Welcome"));
			}
	
	}
	
	
	public function cart(){
			   
			   $email=get_cookie("login");
			    $pass=$this->session->userdata($email);
		      if(isset($email) && isset($pass)){
				 // $book_code=$this->uri->segment(3);
				$pro["h"] = $this->BookSeller->cart1($email);
				  $this->load->view("cart",$pro);
			    
			  }
			  else{
				  redirect(base_url("index.php/Welcome"));
			  }
	}
	
	public function delete_cart(){
		$email=get_cookie("login");
	    $pass=$this->session->userdata($email);
	    if(isset($email) && isset($pass)){
			$book_code=$this->uri->segment(3);
			$this->BookSeller->delete_cart1($book_code);
			redirect(base_url("index.php/Welcome/cart"));
        }
		 
		else{
				  redirect(base_url("index.php/Welcome"));
			}
		
		 
	}
	
	  
	
	public function user_search()
	{
		$email=get_cookie("login");
	    $pass=$this->session->userdata($email);
	    if(isset($email) && isset($pass)){
			$book_name=$this->input->post("book_name");
			$rec["rd"] = $this->BookSeller->user_search1($book_name);
			$this->load->view("user_search_record.php",$rec);
			 
		} 
			     
		else{
				  redirect(base_url("index.php/Welcome"));
			}
	}
	
	 

    public function user_search_record()
	{
		$email=get_cookie("login");
	    $pass=$this->session->userdata($email);
		if(isset($email) && isset($pass)){
			$rec["rd"]=$this->BookSeller->user_search_record1();
			$this->load->view("user_search_record",$rec);
	    }
		 
		else{
				  redirect(base_url("index.php/Welcome"));
		}
		
		 
		 
	}
	
	 
	
	
	
			 
	public function logout(){
				$email=get_cookie("login");
				delete_cookie("login");
				$this->session->unset_userdata($email);
				redirect(base_url("index.php/Welcome"));
	}
	
	
	
		
  }
?>
