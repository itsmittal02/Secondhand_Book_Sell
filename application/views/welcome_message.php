<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?> 

 

<!DOCTYPE html>
<html lang="zxx">

<head>
 
    <title>BookSeller | Home :: w3layouts</title>
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
                            <a class="navbar-brand" href="#">BookSeller</a>
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
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="about.html">about us</a>
                            </li>
                            
                            <li>
							<a class="nav-link" href="http://[::1]/ci1/index.php/Welcome/user" title="SignIn & SignUp"> 
                                 <span class="fa fa-user nav-icon" aria-hidden="true"></span>
                                </a>
                            </li>

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
                        </div>
                        <!-- //search-bar ends here -->
                        <!-- shopping cart -->
                        <div class="cart-mainf">
                            <div class="chrcart chrcart2 cart cart box_1">
                                <form action="#" method="post" class="last">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="display" value="1">
                                    <button class="top_chr_cart" type="submit" name="submit" value="">
                                        <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                    </button>
                                </form>
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
        <div class="banner-bg-agileits">
            <!-- banner-text -->
            <div class="banner-text">
                <div class="container">
                    <p class="b-txt">the</p>
                    <h2 class="title">
                        BookSeller
                    </h2>
                    <ul class="banner-txt">
                        <li>share.</li>
                        <li> explore. </li>
                        <li>amplify.</li>
                    </ul>
                </div>
            </div>
            <!-- //banner-text -->
        </div>
        <!-- //banner -->
    
       <!-- Main Content-->
	   
	      <!-- signin and signup form -->
         
             
		 <div class="container-fluid" style="margin-top:20px;border-color:gray">
                <h4 class="rad-txt">
                     
                
				 <?Php
		                     echo form_open(base_url()."index.php/Welcome/search/");
							   
									     $attr=array("type"=>"Search","name"=>"book_name","placeholder"=>"Type and Hit Enter...", "class"=>"form-control","style"=>"height:40px;width:600px" ,"required"=>"");
									     echo form_input($attr);
									      echo "<br>";
									 
									echo form_submit(array("type"=>"submit","value"=>"Search","class"=>"btn btn-success","style"=>"float:left"));
									 
									  
		                                 echo form_close();
										    						   
						    
								 ?>
				
				</h4>
                  
				  <!-- Main Content-->
				  
				   <div   class="col-sm-12">
                    <!-- Carousel items -->
                    <div class="row">
					<?php 
									       foreach($rd as $row){
											   ?>
                        <div class="col-sm-6">
						 <div class="testi-grids">
						
                                        <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
										  <h5><?php echo "$row->book_name<br>";?></h5>
                                            <p><?php echo "$row->book_author<br>";?></p><br><br>
											<b style="float:right">$<?php echo "$row->book_amount<br>";?></b>
											<h6><a href="<?php echo base_url("index.php/Welcome/user/".$row->code)?>"><button class="btn btn-danger" style="float:left">Buy<br></button></a></h6>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3  img-testi">
										 
										<a href="<?php echo base_url("index.php/Welcome/user/".$row->code)?>"> 
									   <img class="img-responsive"   src="<?php echo base_url()?>././uploads/<?php echo $row->code?>.jpg" alt=""></a>
                                            
                                        </div>
                                        <div class="clearfix"> </div>
                             
							 </div>
							 </div>
							 	<?php
										 
										   }
									
									?>	
                            <!--.row-->
                        </div>
                       
                    </div>
                    
                </div>
				 <div class="clearfix"> </div>
				  
			 
	    <!-- End Main Content-->
        
		
		
		
		<!-- team -->
        <div id="team" class="team section">
            <div class="team-container">
                <div class="team-row">
                    <!-- team grid1 -->
                    <div class="col-md-5 team-grid-left">
                        <!-- team individual grid -->
                        <div class="col-md-6 col-sm-6 col-xs-6 team-grids">
                            <div class="team-effect">
                                <img src="<?php echo base_url("public/images/t3.jpg")?>" alt="img" class="img-responsive">
                                <div class="social-icon">
                                    <a href="#" class="social-button twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#" class="social-button facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#" class="social-button google">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h4>John Smith</h4>
                                <span>Designation</span>
                                <p>vallis molestie arcu morbi dapibus suscipit ante sit efficitur eu ante vesti.</p>

                            </div>
                        </div>
                        <!-- //team individual grid -->
                        <!-- team individual grid -->
                        <div class="col-md-6 col-sm-6 col-xs-6 team-grids">
                            <div class="team-text">
                                <h4>Thomson Doe</h4>
                                <span>Designation</span>
                                <p>vallis molestie arcu morbi dapibus suscipit ante sit efficitur eu ante vesti.</p>
                            </div>
                            <div class="team-effect">
                                <img src="<?php echo base_url("public/images/t1.jpg")?>" alt="img" class="img-responsive">
                                <div class="social-icon">
                                    <a href="#" class="social-button twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#" class="social-button facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#" class="social-button google">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- //team individual grid -->
                        </div>
                    </div>
                    <!-- //team-grid1 ends here-->
                    <!--team-grid2 -->
                    <div class="col-md-2 col-sm-2 team-mid-txt text-center">
                        <span>our</span>
                        <h5>t</h5>
                        <h5>e</h5>
                        <h5>a</h5>
                        <h5>m</h5>
                    </div>
                    <!--//team-grid2 ends here-->
                    <!-- team grid3 -->
                    <!-- team individual grid -->
                    <div class="col-md-5 team-grid-right">
                        <div class="col-md-6 col-sm-6 col-xs-6 team-grids">
                            <div class="team-text">
                                <h4>Smith Kevin</h4>
                                <span>Designation</span>
                                <p>vallis molestie arcu morbi dapibus suscipit ante sit efficitur eu ante vesti.</p>
                            </div>
                            <div class="team-effect">
                                <img src="<?php echo base_url("public/images/t2.jpg")?>" alt="img" class="img-responsive">
                                <div class="social-icon">
                                    <a href="#" class="social-button twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#" class="social-button facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#" class="social-button google">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- //team individual grid -->
                        <!-- team individual grid -->
                        <div class="col-md-6 col-sm-6 col-xs-6 team-grids">
                            <div class="team-effect">
                                <img src="<?php echo base_url("public/images/t4.jpg")?>" alt="img" class="img-responsive">
                                <div class="social-icon">
                                    <a href="#" class="social-button twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#" class="social-button facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#" class="social-button google">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h4>Laura Hill</h4>
                                <span>Designation</span>
                                <p>vallis molestie arcu morbi dapibus suscipit ante sit efficitur eu ante vesti.</p>
                            </div>
                        </div>
                        <!-- //team individual grid -->
                        <div class="clearfix"> </div>
                    </div>
                    <!-- //team grid3 -->
                    <div class="clearfix"> </div>
                </div>
                <!-- //team-row ends here -->
            </div>
            <!-- // team container ends here -->
        </div>
        <!-- //team -->
		
		 













		 <!-- about -->
        <div class="about-sec section" id="about">
            <div class="container">
                <!-- about-left-grid -->
                <div class="col-md-7 about-left-grid">
                    <div class="inner-about2">
                        <h4>the splendid Online BookSeller</h4>
                        <p>Billed as the largest in the world,and the book's collection holds more than 3 million items.</p>
                        <h5>the books catalogue</h5>
                        <ul class="about-list">
						<?php
						      
								 foreach($rd as $row){
									 ?>
								
								<li>
                                <a href="#"><?php echo "$row->book_category <br>";?></a>
                            </li>
							<?php
								 }
							 
?>							 
                          <!--  <li>
                                <i class="fa fa-play-circle-o" aria-hidden="true"></i>International Collections</li>
                            <li>
                                <i class="fa fa-play-circle-o" aria-hidden="true"></i>ebooks</li>
                            <li>
                                <i class="fa fa-play-circle-o" aria-hidden="true"></i>Manuscripts</li>
                            <li>
                                <i class="fa fa-play-circle-o" aria-hidden="true"></i>scientific and Technical Information</li>
                            <li>
                                <i class="fa fa-play-circle-o" aria-hidden="true"></i>Comic Books</li>
                            <li>
                                <i class="fa fa-play-circle-o" aria-hidden="true"></i>Cartography</li>
                            <li>
                                <i class="fa fa-play-circle-o" aria-hidden="true"></i>Journals</li>-->

                        </ul>
                        <a href="#">view more</a>
                    </div>
                    <!-- about left bottom - services -->
                    <div class="principles-grids principles-grids1">
                        <div class="abt-btm agileits w3layouts aos-init aos-animate">
                            <div class="col-md-6 col-sm-6 agileits elite-services1 w3layouts bottom-gds" data-aos="fade-up">
                                <div class="bott-img agileits w3layouts">
                                    <div class="icon-holder agileits w3layouts">
                                        <span class="fa fa-book agileits w3layouts service-icon" aria-hidden="true"></span>
                                    </div>
                                    <h4 class="mission agileits w3layouts">law book</h4>
                                    <div class="description agileits w3layouts">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 agileits elite-services2 w3layouts bottom-gds" data-aos="fade-down">
                                <div class="bott-img bott-img1 agileits w3layouts">
                                    <div class="icon-holder agileits w3layouts">
                                        <span class="fa fa-book agileits w3layouts service-icon" aria-hidden="true"></span>
                                    </div>
                                    <h4 class="mission agileits w3layouts">asian materials</h4>
                                    <div class="description agileits w3layouts">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- //about left bottom - services ends here -->
                </div>
                <!-- //about-left-grid ends here-->
                <!-- about-right-grid -->
                <div class="col-md-5 about-right-grid"></div>
                <!-- //about-right-grid ends here -->
                <div class="clearfix"></div>
            </div>
        </div>
		
	<!-- End About here-->	
	 
	 
	<!-- footer-->
	 <div class="cpy-right">
		 <p>© 2022 BookSeller.com || All rights reserved  
            </p>
			<center><p>Design on top of <a href="http://w3layouts.com/" target="_blank">W3layouts.</a>   & Developed By : <a href="https://www.linkedin.com/in/sharad-mittal-0376b61b5/" target="_blank">Sharad Mittal</a></p></center>
       <div class="footer-social text-center">
                    <h4>stay connected</h4>
                    <ul>
                        <li>
                       <a href="https://www.facebook.com/sharad.mittal.908" target="_blank"><span class="fa fa-facebook icon_facebook"></span></a>  
                         </li>
                        <li>
                          <a href="https://twitter.com/SharadM97724882" target="_blank"><span class="fa fa-twitter icon_twitter"></span></a>
                            
                        </li>
                        <li>
                            
						<a href="https://www.linkedin.com/in/sharad-mittal-0376b61b5/" target="_blank"><span class="fa fa-linkedin"></span></a>  
                        </li>
                        <li>
                             
						<a href="https://www.instagram.com/mittalsharad02/" target="_blank"><span class="fa fa-instagram"></span></a> 
                        </li>
                    </ul>
                </div>

	   </div>
		 
            
		 
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
    <!-- Scrolling Nav JavaScript -->
    <script src="<?php echo base_url("public/js/scrolling-nav.js")?>"></script>
    <!-- //fixed-scroll-nav-js -->
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
    <!-- about bottom grid Numscroller -->
    <script src="<?php echo base_url("public/js/numscroller-1.0.js")?>"></script>
    <!-- //about bottom grid Numscroller -->
    <!-- Bootstrap core JavaScript
 ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <script src="<?php echo base_url("public/js/bootstrap.js")?>"></script>
</body>

</html>
  