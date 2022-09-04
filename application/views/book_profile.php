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
                        </div>&nbsp;&nbsp;
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
                            <a href="#">Book Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--//breadcrumbs ends here-->
         <!-- Content -->
		  
		  
		  		<!-- Main Content -->
		<div class="innerf-pages section">
			<div class="container">
			     <h4 class="rad-txt">
				<?php 
				if(isset($rd)){
									        foreach($rd as $row){
												 $code=$this->uri->segment(3);
											   ?>
				
				<a href="<?php echo base_url("index.php/Welcome/edit_book/".$row->code)?>"  class="abtxt1"><button class="btn btn-success" >Edit Book</button></a>
                   <a href="<?php echo base_url("index.php/Welcome/delete_book/".$row->code)?>"  class="abtext"><button class="btn btn-danger" >Delete Book</button></a>
				</h4>
                  
			
				<div class="col-md-4 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider1">
							<ul class="slides">
							 
						 
								 <li data-thumb="<?php echo base_url("public/images/lib8.jpg")?>">								
								<div class="thumb-image">
										 <img src="<?php echo base_url()?>././uploads/<?php echo $row->code?>.jpg"  data-imagezoom="true" alt=" " class="img-responsive"> </div>
								</li>
								 
							</ul>	
								
								
						<div class="clearfix"></div>
						</div>
					</div>

				</div>
				<div class="col-md-8 single-right-left simpleCart_shelfItem">
					<h3><?php echo "$row->book_name<br>";?><span>Hardcover – <?php echo "$row->book_edition<br>";?></span>
					</h3>
					<p>by
						<a href="#"><?php echo "$row->book_author<br>";?></a>
					</p>
					<div class="caption">

						<ul class="rating-single">
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
						</ul>
						<div class="clearfix"> </div>
						<h6>
							$<?php echo "$row->book_amount<br>";?></h6>
					</div>
					<div class="desc_single">
						<h5>Description</h5>
						<p><?php echo "$row->book_description<br>";?></p>
					</div>
					<div class="occasional">
						<h5>Specifications</h5>
						<ul class="single_specific">
							<li>
								<span>language :</span> english</li>
							<li>
								<span>format :</span> Hardcover</li>
							<li>
								<span>publisher :</span> Lorempipsum</li>
							<li>
								<span>edition :</span> <?php echo "$row->book_edition<br>";?></li>
							<li>
							<li>
								<span>category :</span> <?php echo "$row->book_category<br>";?></li>
							<li>
								<span>pages :</span> 765</li>
						</ul>

					</div>
					
					 <div class="color-quality">
						<div class="color-quality-right">
							<h5>Also Formats avaiable in:</h5>
							<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
								<option value="null">paper back &nbsp;$90.00</option>
								<option value="null">Audio Book &nbsp;$200.00</option>
							</select>
						</div>
					</div>
					<div class="clearfix"></div>
					 
					<div class="occasion-cart">
						<div class="chr single-item single_page_b">
							 <a href="<?php echo base_url("index.php/Welcome/book_buy/".$row->code)?>"  class="abtxt1">
								<button type="submit" class="chr-cart pchr-cart">
									<i   aria-hidden="true"></i> Buy</button>
								<!--<a href="#" data-toggle="modal" data-target="#myModal1"></a>-->
								 </a>
							 
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
				<?php
										   }
									}
									?>
			</div>
		</div>
		<!-- End Main Content -->
	

<!-- Features Book-->

<div class="section singlep_btm">
			<div class="container">
				<div class="new_arrivals">
					<h4 class="rad-txt">
						<span class="abtxt1">featured</span>
						<span class="abtext"> books</span>
					</h4>
					<!-- row3 -->
					<div class="col-md-3 product-men">
						<div class="product-chr-info chr">
							<div class="thumbnail">
								<a href="single_product.html">
									<img src="<?php echo base_url("public/images/lib7.jpg")?>" alt="">
								</a>
							</div>
							<div class="caption">
								<h4>Marketing</h4>
								<p>Scott Harris</p>
								<div class="matrlf-mid">
									<ul class="rating">
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star gray-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star gray-star" aria-hidden="true"></span>
											</a>
										</li>
									</ul>
									<ul class="price-list">
										<li>$ 180.00</li>
										<li>
											$220.00
										</li>
									</ul>

									<div class="clearfix"> </div>
								</div>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="chr_item" value="Book1">
									<input type="hidden" name="amount" value="180.00">
									<button type="submit" class="chr-cart pchr-cart">Add to cart
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button>
									<a href="#" data-toggle="modal" data-target="#myModal1"></a>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-men">
						<div class="product-chr-info chr">
							<div class="thumbnail">
								<a href="single_product.html">
									<img src="<?php echo base_url("public/images/lib1.jpg")?>" alt="">
								</a>
							</div>
							<div class="caption">
								<h4>online business</h4>
								<p>Scott Harris</p>
								<div class="matrlf-mid">
									<ul class="rating">
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
									</ul>
									<ul class="price-list">
										<li>$ 330.00</li>
										<li>
											$560.00
										</li>
									</ul>

									<div class="clearfix"> </div>
								</div>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="chr_item" value="Book2">
									<input type="hidden" name="amount" value="330.00">
									<button type="submit" class="chr-cart pchr-cart">Add to cart
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button>
									<a href="#" data-toggle="modal" data-target="#myModal1"></a>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-men">
						<div class="product-chr-info chr">
							<div class="thumbnail">
								<a href="single_product.html">
									<img src="<?php echo base_url("public/images/lib2.jpg")?>" alt="">
								</a>
							</div>
							<div class="caption">
								<h4>kids</h4>
								<p>Cordebard</p>
								<div class="matrlf-mid">
									<ul class="rating">
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star gray-star" aria-hidden="true"></span>
											</a>
										</li>
									</ul>
									<ul class="price-list">
										<li>$ 280.00</li>
										<li>
											$500.00
										</li>
									</ul>

									<div class="clearfix"> </div>
								</div>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="chr_item" value="Book3">
									<input type="hidden" name="amount" value="280.00">
									<button type="submit" class="chr-cart pchr-cart">Add to cart
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button>
									<a href="#" data-toggle="modal" data-target="#myModal1"></a>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-men">
						<div class="product-chr-info chr">
							<div class="thumbnail">
								<a href="single_product.html">
									<img src="<?php echo base_url("public/images/lib3.jpg")?>" alt="">
								</a>
							</div>
							<div class="caption">
								<h4>work from home</h4>
								<p>Cordebard</p>
								<div class="matrlf-mid">
									<ul class="rating">
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
									</ul>
									<ul class="price-list">
										<li>$ 140.00</li>
										<li>
											$200.00
										</li>
									</ul>

									<div class="clearfix"> </div>
								</div>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="chr_item" value="Book4">
									<input type="hidden" name="amount" value="140.00">
									<button type="submit" class="chr-cart pchr-cart">Add to cart
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button>
									<a href="#" data-toggle="modal" data-target="#myModal1"></a>
								</form>
							</div>
						</div>
					</div>
					<!-- //row3 -->
					<div class="clearfix"></div>
				</div>
				<!--//new_arrivals-->
				<div class="clearfix"></div>

			</div>
		</div>
		 
		


<!-- End Featured book-->
	   	
    </div>
    <!--//signin and signup form ends here-->
     
    <div class="cpy-right">
            <p>© 2022 BookSeller.com || All rights reserved  
            </p>
			<center><p>Design on top of <a href="http://w3layouts.com/" target="_blank">W3layouts.</a> Developed By : <a href="https://www.linkedin.com/in/sharad-mittal-0376b61b5/" target="_blank">Sharad Mittal</a></p></center>
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