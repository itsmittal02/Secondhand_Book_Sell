<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(!get_cookie("login") || !$this->session->userdata(get_cookie("login"))){
     redirect(base_url());
}
else{
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>BookSeller | Add Book :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Chronicle Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    
	<!-- Custom Theme files -->
	 <link href="<?php echo base_url("public/css/bootstrap.css")?>" type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link href="<?php echo base_url("public/css/shop.css")?>" type="text/css" rel="stylesheet" media="all">
    <link href="<?php echo base_url("public/css/style.css")?>" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="<?php echo base_url("public/css/font-awesome.css")?>" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <!-- logo -->
	
	
    <!-- online-fonts -->
    <!-- logo -->
	 <script src="https://use.fontawesome.com/199f0316ef.js"></script>
    <link href="//fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <!-- titles -->
    <link href="//fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
    <!-- body -->
    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- //online-fonts -->
</head>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div id="home">
        <!-- header -->
        <!-- navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="main-nav">
                <div class="container">

                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">BookSeller</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1>
                            <a class="navbar-brand" href="http://[::1]/ci1/index.php/Welcome">BookSeller</a>
                        </h1>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                     <div class="collapse navbar-collapse navbar-ex1-collapse nav-right">
                        <ul class="nav navbar-nav navbar-left cl-effect-15">
                            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                            <li class="hidden">
                                <a class="page-scroll" href="#page-top"></a>
                            </li>
                           
                           <li>
                                <a href="http://[::1]/ci1/index.php/Welcome/dashboard">Dashboard</a>
                            </li>
							 <li>
                                <a href="http://[::1]/ci1/index.php/Welcome/add_book">Add Book</a>
                            </li>
							<li>
                                <a href="http://[::1]/ci1/index.php/Welcome/user_book">User Book</a>
                            </li>
                          <!--user profile-->	
						 <li class="dropdown">
                                <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">User
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="http://[::1]/ci1/index.php/Welcome/user_profile">
										<span  class="fa fa-user" aria-hidden="true" style="size:48px">   Profile</span></a>
                                    </li>
                                    <li>
                                        <a href="#">
										<span  class="fa fa-edit" aria-hidden="true" style="size:48px">   Edit Profile</span></a>
                                    </li>
                                    <li>
                                       <a href="http://[::1]/ci1/index.php/Welcome/user">
                                    <span  class="fa fa-sign-out" aria-hidden="true" style="size:48px">  Logout</span>
									 
                                </a>
                                    </li>
                                 </ul>
                            </li>
					 <!-- End User Profile--> 
					 <!-- Message-->
					  <li class="dropdown">
                                <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Message
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="http://[::1]/ci1/index.php/Welcome/inbox">
										<span  class="fa fa-user" aria-hidden="true" style="size:48px">   Inbox</span></a>
                                    </li>
                                    <li>
                                       <a href="http://[::1]/ci1/index.php/Welcome/sent">
                                    <span  class="fa fa-sign-out" aria-hidden="true" style="size:48px">  Sent</span>
									 
                                </a>
                                    </li>
                                 </ul>
                            </li>
							<!-- End Message-->
					 
					 
                           </ul>
                        <!-- search-bar -->
                        <div class="search-bar-agileits">
                            <div class="cd-main-header">
                                <ul class="cd-header-buttons">
                                    <li>
                                        <a class="cd-search-trigger" href="#cd-search">
                                            <span></span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- cd-header-buttons -->
                            </div>
                            <div id="cd-search" class="cd-search">
                                <form action="#" method="post">
                                    <input name="Search" type="search" placeholder="Type and Hit Enter...">
                                </form>
                            </div>
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;
                        <!-- //search-bar ends here -->
                        <!-- shopping cart -->
                        <div class="cart-mainf">
                            <div class="chrcart chrcart2 cart cart box_1">
                                 <a href="http://[::1]/ci1/index.php/Welcome/cart">
							       <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <!-- //shopping cart ends here -->
					
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="clearfix"></div>
                </div>
                <!-- /.container -->
            </div>
        </nav>
        <!-- //navbar ends here -->
        <!-- banner -->
        <div class="banner-bg-inner">
            <!-- banner-text -->
            <div class="banner-text-inner">
                <div class="container">
                    <h2 class="title-inner">
                        world of reading
                    </h2>

                </div>
            </div>
            <!-- //banner-text -->
        </div>
        <!-- //banner -->
        <!-- breadcrumbs -->
        <div class="crumbs text-center">
            <div class="container">
                <div class="row">
                    <ul class="btn-group btn-breadcrumb bc-list">
                        <li class="btn btn1">
                            <a href="http://[::1]/ci1/index.php/Welcome">
                                <i class="glyphicon glyphicon-home"></i>
                            </a>
                        </li>
                        <li class="btn btn2">
                            <a href="#">Mesages</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--//breadcrumbs ends here-->
         <!-- Content -->
		  
		   <!-- signin and signup form -->
        <div class="login-form section text-center">
          <div class="container-fluid">
                <h4 class="rad-txt">
                    <span class="abtxt1">User</span>
                    <span class="abtext">Inbox</span>
                </h4>
           
		   
		   
		    <div id="Carousel" class="slide show">
                    <!-- Carousel items -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
							
						    <div class="col-md-10  testi-main">
                                <div class="testi-grids">
									 <?php 
									 $flag=0;
									if(isset($h)){
									       foreach($h as $row){
											     
						?> 
									<div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                           <h5><?php 
										        echo form_label("<strong> Message: </strong>&nbsp;");
										      echo "$row->msg<br>";?></h5>
											  <h4><?php echo "$row->dt <br>";?></h4><br>
											  
	                                         <?php 
									             
										          echo form_open(base_url()."index.php/Welcome/book_reply/".$row->from_code);
						                          ?>
										
									 <div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label"><h5>Reply</h5></label>
									<div class="col-md-9 col-sm-9 col-xs-9">
									<?php
									     $attr=array("type"=>"text","name"=>"msg","class"=>"form-control","required"=>"","style"=>"resize:none"  );
									     echo form_textarea($attr);
									     echo "<br>";
		 ?>
                                    </div>
                                </div>
								

								<div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                    <div class="col-sm-12 controls">
									<a>
									<?php
									echo form_submit(array("type"=>"submit","value"=>"Send","class"=>"btn btn-success","style"=>"float:right"));
									 
									?>
									</a>
                                    </div>
                                </div>
								
						  
						         
                           <?php  
						         echo form_close();
									 
								 
									 
					?> 
											   
											   
						    <a href="<?php echo base_url("index.php/Welcome/delete_message/".$row->code)?>"  class="abtext">
										    <button class="btn btn-danger" style="float:left" >Delete Message</button></a> </h6>
									  </div>
										   
									  <div class="col-md-3 col-sm-3 col-xs-3  img-testi">
										<a href="<?php echo base_url("index.php/Welcome/book_buy/".$row->to_code)?>"> 
									   <img class="img-responsive"   src="<?php echo base_url()?>././uploads/<?php echo $row->to_code?>.jpg" alt=""></a>
                                            
                                        </div><br> 
							 
										 <div class="clearfix"> </div>
										<?php
										$flag++;
										   }
									}
									?>		

                                     


 					  
<div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
					 <?php

   if($flag==0){
	?>
	
						 
	                   <div class="thumb_top">
				       
					    <div class="jobs_right">
							<h5 class="title">Haven't any message</h5>
							
						</div>
						<div class="clearfix"> </div>
					   </div>
					   
					  <?php
						          }
				         	   
						  ?> 
				  </div>



                             </div>
                                </div>

		
							 </div>
                            <!--.row-->
                        </div>
                       
                    </div>
                    
                </div>
				 <div class="clearfix"> </div>
		   </div>
	  </div>
        		 
		<!-- End Content-->
				
	</div>
    <!--//signin and signup form ends here-->
     
    <div class="cpy-right">
            <p>© 2022 BookSeller.com || All rights reserved  
            </p>
			<center><p>Design on top of <a href="http://w3layouts.com/" target="_blank">W3layouts.</a>Developed By : <a href="https://www.linkedin.com/in/sharad-mittal-0376b61b5/" target="_blank">Sharad Mittal</a></p></center>
        </div>
<!-- //home -->
    <!-- js -->
    <script src="<?php echo base_url("public/js/jquery-2.2.3.min.js")?>"></script>
    <!-- //js -->
    <!--search jQuery-->
    <script src="<?php echo base_url("public/js/main.js")?>"></script>
    <!--search jQuery-->
    <!-- cart-js -->
    <script src="<?php echo base_url("public/js/minicart.js")?>"></script>
    <script>
        chr.render();

        chr.cart.on('new_checkout', function (evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });
    </script>
    <!-- //cart-js -->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Scrolling Nav JavaScript -->
    <script src="<?php echo base_url("public/js/scrolling-nav.js")?>"></script>
    <!-- //fixed-scroll-nav-js -->
    <!-- start-smooth-scrolling -->
    <script src="<?php echo base_url("public/js/move-top.js")?>"></script>
    <script src="<?php echo base_url("public/js/easing.js")?>"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="<?php echo base_url("public/js/SmoothScroll.min.js")?>"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
 ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url("public/js/bootstrap.js")?>"></script>
	 
</body>

</html>
<?php
          }
?>