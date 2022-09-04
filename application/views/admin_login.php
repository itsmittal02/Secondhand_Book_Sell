<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  
<html lang="en">

<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Login</title>

      <!--Custom fonts for this template -->
	  <link href="<?php echo base_url("public/css/bootstrap.min.css")?>" rel="stylesheet">   
    <link href="<?php echo base_url("public/vendor/fontawesome-free/css/all.min.css")?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

     <!-- Custom styles for this template -->
	 
    <link href="<?php echo base_url("public/css/sb-admin-2.min.css")?>" rel="stylesheet">

</head>
 
<body class="bg-gradient-primary">

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Book Seller</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="http://[::1]/ci1/index.php/Welcome"><h5 style="float:right">User Panel</h5></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="http://[::1]/ci1/index.php/Admin">Logout</a>
      </li>
    </ul>
  </div>
</nav>

    <div class="container" >

        <!-- Outer Row -->
        <div class="row justify-content-center">

             
            <!-- <div class="col-xl-10 col-lg-12 col-md-9" style="background-color:pink"></div> -->
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                           <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>-->
                             <div class=" col-sm-0  col-lg-6 d-none d-lg-block ">
							  <img src="<?php echo base_url("public/images/convert_1.jpg")?>" class="img-fluid">
				   
			  </div>
						   <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                   
<?Php
      echo form_open(base_url()."index.php/Admin/enter");
	  echo form_label("Email");
	  $attr=array("type"=>"email","name"=>"email","placeholder"=>"Enter Email","class"=>"form-control"); 
	  echo form_input($attr);
	  echo "<br><br>";
	  echo form_label("Password");
	  $attr=array("type"=>"password","name"=>"pass","placeholder"=>"Enter Password","class"=>"form-control");
	  echo form_input($attr);
	  echo "<br><br>";  
	  
	  echo form_submit("enter","Submit");
	  echo form_close();
	  echo "<br>";
	   if(isset($rec)){
		 foreach($rec as $row){
		 if($row->email){
			 set_cookie("login",$row->email,time()+3600*24);
			 $this->session->set_userdata($row->email,$row->password);
			redirect(base_url("index.php/Admin/admin_dashboard"));
						 
			   }
					 
					 
		    }
	    } 
?>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 

        </div>

    </div>

    <!-- Bootstrap core JavaScript -->
	 
    <script src="<?php echo base_url("public/vendor/jquery/jquery.min.js")?>"></script>
    <script src="<?php echo base_url("public/vendor/bootstrap/js/bootstrap.bundle.min.js")?>"></script>

    <!-- Core plugin JavaScript--> 
    <script src="<?php echo base_url("public/vendor/jquery-easing/jquery.easing.min.js")?>"></script>

    <!-- Custom scripts for all pages -->
    <script src="<?php echo base_url("public/js/sb-admin-2.min.js")?>"></script>

</body>

</html>



 