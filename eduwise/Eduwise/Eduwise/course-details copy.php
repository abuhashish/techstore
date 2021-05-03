<?php 
require_once("include/connect.php");
require_once("admin/production/functions/getThisCourse.php");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Ecology Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduwise - Education HTML5 Template</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Goole Font -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/assets/bootstrap.min.css">
    <!-- Font awsome CSS -->
    <link rel="stylesheet" href="css/assets/font-awesome.min.css">    
    <link rel="stylesheet" href="css/assets/flaticon.css">
    <link rel="stylesheet" href="css/assets/magnific-popup.css">    
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/assets/owl.carousel.css">
    <link rel="stylesheet" href="css/assets/owl.theme.css">     
    <link rel="stylesheet" href="css/assets/animate.css"> 
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="css/assets/slick.css">  
    <!-- Mean Menu-->
    <link rel="stylesheet" href="css/assets/meanmenu.css">
    <!-- main style-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/demo.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header class="header_inner blog_page">
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>    
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="info_wrapper">
                        <div class="contact_info">                   
                            <ul class="list-unstyled">
                                <li><i class="flaticon-phone-receiver"></i>+000-2356-222</li>
                                <li><i class="flaticon-mail-black-envelope-symbol"></i>contact@yourdomain.com</li>
                            </ul>                    
                        </div>
                        <div class="login_info">
                             <ul class="d-flex">
                                <li class="nav-item"><a href="#" class="nav-link sign-in js-modal-show"><i class="flaticon-user-male-black-shape-with-plus-sign"></i>Sign Up</a></li>
                                <li class="nav-item"><a href="#" class="nav-link join_now js-modal-show"><i class="flaticon-padlock"></i>Lon In</a></li>
                            </ul>
                            <a href="#" title="" class="apply_btn">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="edu_nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light bg-faded">
                <a class="navbar-brand" href="index-2.html"><img src="images/logo.png" alt="logo"></a>
                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav nav lavalamp ml-auto menu">
                        <li class="nav-item"><a href="#" class="nav-link">Home</a>
                            <ul class="navbar-nav nav mx-auto">
                                <li class="nav-item"><a href="index-2.html" class="nav-link">Home Version 01</a></li>
                                <li class="nav-item"><a href="index-3.html" class="nav-link">Home Version 02</a></li>
                                <li class="nav-item"><a href="index-4.html" class="nav-link">Home Version 03</a></li>
                                <li class="nav-item"><a href="index-5.html" class="nav-link">Home Version 04</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="course.html" class="nav-link active">Courses</a>
                            <ul class="navbar-nav nav mx-auto">
                                <li class="nav-item"><a href="course.html" class="nav-link">Courses</a></li>
                                <li class="nav-item"><a href="course-details.html" class="nav-link active">Courses Details</a></li>
                            </ul> 
                        </li>
                        <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a>
                            <ul class="navbar-nav nav mx-auto">
                                <li class="nav-item"><a href="blog.html" class="nav-link">Blog List</a></li> 
                                <li class="nav-item"><a href="blog-2.html" class="nav-link">Blog Grid One</a></li> 
                                <li class="nav-item"><a href="blog-3.html" class="nav-link">Blog Grid Two</a></li>
                                <li class="nav-item"><a href="blog-details.html" class="nav-link">Blog Details</a></li>
                            </ul> 
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link">Pages</a>
                            <ul class="navbar-nav nav mx-auto">
                                <li class="nav-item"><a href="#" class="nav-link dropdown_icon active">Courses</a>
                                    <ul class="navbar-nav nav mx-auto">
                                        <li class="nav-item"><a href="course.html" class="nav-link">Courses</a></li>
                                        <li class="nav-item"><a href="course-details.html" class="nav-link active">Courses Details</a></li>
                                    </ul>    
                                </li>                                 
                                <li class="nav-item"><a href="#" class="nav-link dropdown_icon">Events</a>
                                    <ul class="navbar-nav nav mx-auto">
                                        <li class="nav-item"><a href="event.html" class="nav-link">Event</a></li>
                                        <li class="nav-item"><a href="event-details.html" class="nav-link">Event Details</a></li>
                                    </ul>    
                                </li>                                
                                <li class="nav-item"><a href="#" class="nav-link dropdown_icon">Blog</a>
                                    <ul class="navbar-nav nav mx-auto">
                                        <li class="nav-item"><a href="blog.html" class="nav-link">Blog List</a></li> 
                                        <li class="nav-item"><a href="blog-2.html" class="nav-link">Blog Grid One</a></li> 
                                        <li class="nav-item"><a href="blog-3.html" class="nav-link">Blog Grid Two</a></li>
                                        <li class="nav-item"><a href="blog-details.html" class="nav-link">Blog Details</a></li>
                                    </ul>    
                                </li> 
                                <li class="nav-item"><a href="become-a-teacher.html" class="nav-link">Become A Teacher</a></li>
                                <li class="nav-item"><a href="teacher-profile.html" class="nav-link">Teachers Profile</a></li>
                                <li class="nav-item"><a href="team.html" class="nav-link">Teachers Page</a></li>
                                <li class="nav-item"><a href="forgot-password.html" class="nav-link">Forgot Password</a></li>
                            </ul>                            
                        </li>     
                        <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                    </ul>
                </div>
                <div class="mr-auto search_area ">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><i class="search_btn flaticon-magnifier"></i>
                            <div id="search">
                                <button type="button" class="close">×</button>
                                 <form>
                                     <input type="search" value="" placeholder="Search here...."  required/>
                                 </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav><!-- END NAVBAR -->
        </div> 
    </div>

    <div class="intro_wrapper">
        <div class="container">  
            <div class="row">        
                 <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="intro_text">
                        <h1>Courses Details</h1>
                        <div class="pages_links">
                            <a href="#" title="">Home</a>
                            <a href="#" title="">Course</a>
                            <a href="#" title="" class="active">Course Details</a>
                        </div>
                    </div>
                </div>              

            </div>
        </div> 
    </div> 
</header> <!-- End header -->



<section class="login_signup_option">
    <div class="l-modal is-hidden--off-flow js-modal-shopify">
        <div class="l-modal__shadow js-modal-hide"></div>
        <div class="login_popup login_modal_body">
            <div class="Popup_title d-flex justify-content-between">
                <h2 class="hidden">&nbsp;</h2>
                <!-- Nav tabs -->
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12 col-lg-12 login_option_btn">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#login" role="tab">Login</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Register</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                        <!-- Tab panels -->
                        <div class="tab-content card">
                            <!--Login-->
                            <div class="tab-pane fade in show active" id="login" role="tabpanel">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label class="control-label">Email</label>
                                                <input type="email" class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label class="control-label">Password</label>
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12 d-flex justify-content-between login_option">
                                            <a href="forgot-password.html" title="" class="forget_pass">Forget Password ?</a>
                                            <button type="submit" class="btn btn-default login_btn">Login</button>
                                        </div> 
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="social_login">
                                                <div class="social_items">
                                                    <button class="google_login google">Login Google</button>
                                                    <button class="google_login facebook">Login Facebook</button>
                                                    <button class="google_login twitter">Login Twitter</button>
                                                    <button class="google_login linkdin">Login Linkdin</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--/.Panel 1-->
                            <!--Panel 2-->
                            <div class="tab-pane fade" id="panel2" role="tabpanel">
                                <form action="#" class="register">
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label  class="control-label">Name</label>
                                                <input type="text" class="form-control" placeholder="Username">
                                            </div>
                                        </div>                                        
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label  class="control-label">Email</label>
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label  class="control-label">Password</label>
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12 d-flex justify-content-between login_option">
                                            <button type="submit" class="btn btn-default login_btn">Register</button>
                                        </div> 
                                    </div>
                                </form>
                            </div><!--/.Panel 2-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  <!-- End Login Signup Option -->




<section class="blog_wrapper" id="courses_details_wrapper">
    <div class="container">  
        <div class="row">        
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                <div class="courses_details">
                    <div class="single-curses-contert">
                        <h2>WordPress: Step by Step for Beginners</h2>
                        <div class="review-option">
                            <div class="teacher-info single_items single_items_shape">
                                <img src="images/team/review_1.jpg" alt="" class="img-fluid">
                                <div class="teacher-name">
                                    <span>Teacher</span>
                                    <span>DAVID MARTIN</span>
                                </div>
                            </div>
                            <div class="review-rank single_items single_items_shape">
                                <span>Reviews</span>
                                <div class="rank-icons">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-star review-icon"></i></li>
                                        <li><i class="fa fa-star review-icon"></i></li>
                                        <li><i class="fa fa-star review-icon"></i></li>
                                        <li><i class="fa fa-star review-icon"></i></li>
                                        <li><i class="fa fa-star review-icon"></i></li>
                                        <li><span>(8 Reviews)</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="teacher_fee single_items ">
                                <span>Price</span>
                                <span class="courses_price">$50.56</span>
                            </div>
                            <div class="buy_btn single_items">
                                <a href="#" title="">Buy Now</a>
                            </div>
                        </div>
                        <div class="details-img-bxo">
                            <img src="images/blog/blog3-1.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="courses_tab_wrapper">  
                        <div class="courses_details_nav_tabs">     
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"><a class="nav-link active" href="#information" role="tab" data-toggle="tab">Information</a></li>
                                <li class="nav-item"><a class="nav-link" href="#curricularm" role="tab" data-toggle="tab">Curricularm</a></li>
                                <li class="nav-item"><a class="nav-link" href="#instructor" role="tab" data-toggle="tab">Instructor</a></li> 
                                <li class="nav-item"><a class="nav-link" href="#reviews" role="tab" data-toggle="tab">Reviews</a></li>
                            </ul>
                        </div>   

                        <!-- Tab panes -->
                        <div class="tab_contents tab-content">
                            <div role="tabpanel" class="tab-pane fade in active show" id="information">
                                <h3>Courses Description <span>:</span></h3>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                                <h3>What Will I Learn? <span>:</span></h3>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>  
                                <ul class="step_point">
                                    <li>Create static HTML and CSS portfolio sites and landing pages.</li>
                                    <li>Think like a developer. Become an expert at Googling code questions!</li>
                                    <li>Write complex web apps with multiple models and data associations.</li>
                                    <li>Create a blog application from scratch using Express, MongoDB, and Semantic UI.</li>
                                    <li>Use Express and MongoDB to create full-stack JS applications.</li>
                                </ul>                              
                                <h3>Learning Outcomes <span>:</span></h3>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                                <ul class="step_point">
                                    <li>Over 37 lectures and 55.5 hours of content!</li>
                                    <li>LIVE PROJECT End to End Software Testing Training Included.</li>
                                    <li>Learn Software Testing and Automation basics from a professional trainer from your own desk.</li>
                                    <li>Information packed practical training starting from basics to advanced testing techniques.</li>
                                    <li>Best suitable for beginners to advanced level users and who learn faster when demonstrated.</li>
                                    <li>Course content designed by considering current software testing technology and the job market.</li>
                                    <li>Practical assignments at the end of every session.</li>
                                    <li>Practical learning experience with live project work and examples.</li>
                                </ul>
                                <div class="social_wrapper d-flex">
                                    <span>Share : </span>
                                    <ul class="social-items d-flex list-unstyled">
                                        <li><a href="#"><i class="fab fa-facebook-f fb_icon"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter tw_icon"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in link_icon"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram in_icon"></i></a></li>
                                    </ul>   
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="curricularm">
                                <div class="curriculum-text-box">
                                    <div class="curriculum-section">
                                        <div class="panel-group" id="accordion">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title click">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="">
                                                        1. Welcome to the Courses<span>0/5</span></a>
                                                    </h4>

                                                </div>
                                                <div id="collapse1" class="panel-collapse collapse in show">
                                                    <div class="panel-body">
                                                        <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                                <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                            </div>
                                                            <a href="#">Preview</a>
                                                        </div>
                                                         <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                                <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                            </div>
                                                           <a href="#">Preview</a>
                                                        </div>
                                                         <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                                <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                            </div>
                                                            <a href="#">Preview</a>
                                                        </div>
                                                        <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                                <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                            </div>
                                                            <a href="#">Preview</a>
                                                        </div>
                                                        <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                                <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                            </div>
                                                            <a href="#">Preview</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed">
                                                        2. How to use Wordpress<span>0/4</span></a>
                                                    </h4>
                                                </div>
                                                <div id="collapse2" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                                <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                            </div>
                                                            <a href="#">Preview</a>
                                                        </div>
                                                         <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                                <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                            </div>
                                                            <a href="#">Preview</a>
                                                        </div>
                                                         <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                                <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                            </div>
                                                            <a href="#">Preview</a>
                                                        </div>
                                                         <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                                <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                            </div>
                                                            <a href="#">Preview</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed">
                                                    3. Final chapters<span>0/3</span></a>
                                                    </h4>
                                                </div>
                                                <div id="collapse3" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                         <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                                <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                            </div>
                                                            <a href="#">Preview</a>
                                                        </div>
                                                         <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                                <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                            </div>
                                                            <a href="#">Preview</a>
                                                        </div>
                                                         <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                                <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                            </div>
                                                            <a href="#">Preview</a>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                        </div> <!-- .curriculum-section-text END -->
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="instructor">
                                <div class="courses_teacher">
                                    <div class="tutor_signle">
                                        <div class="tutor_pro">
                                            <a href="#" title=""><img src="images/team/team_1.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="teachers_name">
                                            <h5><a href="#" title="">Jonson Park</a></h5>
                                            <span>Associate Professor</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="reviews">
                                <!-- Blog Comment Wrappper-->
                                <div class="review-content">
                                    <div class="five-star-rating">
                                        <div class="rating_box_count">
                                            <span class="five">5</span>
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span>8 Ratings</span>                  
                                        </div>
                                    </div>
                                    <div class="rating-box">
                                        <div class="detailed-rating">
                                            <div class="stars">
                                                <div class="key">5 stars</div>
                                                <div class="bar">
                                                    <div class="full_bar">
                                                         <span style="width: 100%"></span>
                                                    </div>
                                                </div>
                                                <div class="value">8</div>
                                            </div>

                                            <div class="stars">
                                                <div class="key">4 stars</div>
                                                <div class="bar">
                                                    <div class="full_bar">
                                                         <span style="width: 0%"></span>
                                                    </div>
                                                </div>
                                                <div class="value">0</div>
                                            </div>

                                            <div class="stars">
                                                <div class="key">3 stars</div>
                                                <div class="bar">
                                                    <div class="full_bar">
                                                         <span style="width: 0%"></span>
                                                    </div>
                                                </div>
                                                <div class="value">0</div>
                                            </div>
                                            <div class="stars">
                                                <div class="key">2 stars</div>
                                                <div class="bar">
                                                    <div class="full_bar">
                                                         <span style="width: 0%"></span>
                                                    </div>
                                                </div>
                                                <div class="value">0</div>
                                            </div>
                                            <div class="stars">
                                                <div class="key">1 star</div>
                                                <div class="bar">
                                                    <div class="full_bar">
                                                        <span style="width: 0%"></span>
                                                    </div>
                                                </div>
                                                <div class="value">0</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                              


                                <div class="commnet-wrapper">
                                     <div class="comment-list-items">
                                        <div class="comment-list-wrapper">
                                            <div class="comment-list">
                                                <div class="commnet_img">
                                                    <img src="images/team/team_2.jpg" alt="member img" class="img-fluid">
                                                </div>
                                                <div class="comment-text">
                                                    <div class="author_info d-flex justify-content-between"> 
                                                        <a href="#" class="author_name">Adam Smith</a> 
                                                        <span>2 Days Ago</span>
                                                    </div>
                                                    <div class="rating">
                                                        <ul class="rating d-flex justify-content-start">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>   
                                                        </ul>  
                                                    </div>   
                                                    <p>You need to be sure there isn't anything embarrassing hidden in the repeat predefined chunks as necessary, making this the first true generator on the Internet.</p> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-list-wrapper">
                                            <div class="comment-list">
                                                <div class="commnet_img">
                                                    <img src="images/team/team_4.jpg" alt="member img" class="img-fluid">
                                                </div>
                                                <div class="comment-text">
                                                    <div class="author_info d-flex justify-content-between"> 
                                                        <a href="#" class="author_name">David Martin</a>
                                                        <span>2 Days Ago</span> 
                                                    </div>  
                                                    <div class="rating">
                                                        <ul class="rating d-flex justify-content-start">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>   
                                                        </ul>  
                                                    </div>     
                                                    <p>you need to be sure there isn't anything embarrassing hidden in the repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                                </div>                               
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div> 
                </div>
            </div> <!--End Blog Siderbar Left-->


            <div class="col-12 col-sm-12 col-md-4 col-lg-4 blog_wrapper_right ">
                <div class="blog-right-items">
                    <div class="courses_features widget_single">
                        <div class="items-title">
                            <h3 class="title">Courses Features</h3>
                        </div>
                        <div class="features_items">
                            <ul class="list-unstyled">
                                <li><a href="#" title=""><i class="flaticon-page"></i> Lessons </a><span>69</span></li>
                                <li><a href="#" title=""><i class="flaticon-eye-open"></i> Viewers</a><span>56</span></li>
                                <li><a href="#" title=""><i class="flaticon-clock-circular-outline"></i> Duration</a><span>5H</span></li>
                                <li><a href="#" title=""><i class="flaticon-padlock"></i> Prequisite</a><span>No</span></li>
                                <li><a href="#" title=""><i class="flaticon-diploma"></i> Certificate</a><span>Yes</span></li>                                
                                <li><a href="#" title=""><i class="flaticon-language"></i> Language</a><span>Eng</span></li>                                
                                <li><a href="#" title=""><i class="flaticon-thumbs-up-hand-symbol"></i> Skills</a><span>Any</span></li>                                
                                <li><a href="#" title=""><i class="flaticon-edit"></i> Assessments</a><span>Yes</span></li>
                            </ul>
                        </div>
                        <img src="images/shapes/testimonial_2_shpe_2.png" alt="" class="courses_feaures_shpe">
                    </div>  



                    <div class="recent_post_wrapper popular_courses_post widget_single">
                        <div class="items-title">
                            <h3 class="title">Our Popular Courses</h3>
                        </div>
                        <div class="single-post">
                            <div class="recent_img">
                                 <a href="#" title=""><img src="images/blog/blog_1.jpg" alt="" class="img-fluid"></a>
                            </div>
                            <div class="post_title">
                                <a href="#" title="">How to Become Master In CSS within qa Week.</a>
                                <div class="courses_price">
                                    <div class="price"><span><del>74$</del></span> <span class="new_price">49$</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="single-post">
                            <div class="recent_img">
                                <a href="#" title=""><img src="images/blog/blog_2.jpg" alt="" class="img-fluid"></a>
                            </div>
                            <div class="post_title">
                                <a href="#" title="">Connecting volunteers & nonprofitsz worldwide.</a>
                                <div class="courses_price">
                                    <div class="price"><span><del>60$</del></span> <span class="new_price">38$</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="single-post">
                            <div class="recent_img">
                                <a href="#" title=""><img src="images/blog/blog_3.jpg" alt="" class="img-fluid"></a>
                            </div>
                            <div class="post_title">
                                <a href="#" title="">Research of Learn training process</a>
                                <div class="courses_price">
                                    <div class="price"><span class="new_price">79$</span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="get_discount widget_single">
                        <div class="items-title">
                            <p>New Spcial Offers</p>
                            <h3>Get 35% Off</h3>
                            <a href="#" title="">Get Started</a>
                        </div>

                        <img src="images/shapes/testimonial_2_shpe_2.png" alt="" class="courses_feaures_shpe">
                    </div>  

                    <div class="archives widget_single">
                        <div class="items-title">
                            
                            <h3 class="title">All Categories</h3>

                        </div>
                        <div class="archives-items">
                            <ul class="list-unstyled">
                                <li><a href="#" title="">Art & Design </a></li>
                                <li><a href="#" title="">Busness</a></li>
                                <li><a href="#" title="">IT & Software</a></li>
                                <li><a href="#" title="">Languages</a></li>
                                <li><a href="#" title="">Programming</a></li>                                
                                <li><a href="#" title="">Technology</a></li>
                            </ul>
                        </div>
                    </div>  
                </div>
            </div> <!-- End Right Sidebar-->
            
        </div>
    </div> 
</section><!-- ./ End  Blog Wrapper-->



<!--Start Courses Area Section-->
<section class="popular_courses" id="related_courses_wrapper">
    <div class="container"> 
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="title">
                    <h2>Related Courses</h2>
                </div><!-- ends: .section-header -->
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div id="related_courses" class="owlCarousel">
                    <div class="single-courses">
                        <div class="courses_banner_wrapper">
                            <div class="courses_banner"><a href="#"><img src="images/courses/courses_1.jpg" alt="" class="img-fluid"></a></div>
                            <div class="purchase_price">
                                <a href="#" class="read_more-btn">$150</a>
                            </div>
                        </div>
                        <div class="courses_info_wrapper">
                            <div class="courses_title">
                                <h3><a href="#">Make Better Decisions</a></h3>
                                <div class="teachers_name">Teacher - <a href="#" title="">Jhonthan Smith</a></div>
                            </div>
                            <div class="courses_info">
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-user"></i>180 Days</li>
                                    <li><i class="fas fa-calendar-alt"></i>30 Students</li>
                                </ul>
                                <a href="#" class="cart_btn">Add to Cart</a>
                            </div>
                        </div>
                    </div><!-- Ends: .single courses -->


                    <div class="single-courses">
                        <div class="courses_banner_wrapper">
                            <div class="courses_banner"><a href="#"><img src="images/courses/courses_2.jpg" alt="" class="img-fluid"></a></div>
                            <div class="purchase_price">
                                <a href="#" class="read_more-btn">Free</a>
                            </div>
                        </div>
                        <div class="courses_info_wrapper">
                            <div class="courses_title">
                                <h3><a href="#">How To Be A Speaker</a></h3>
                                <div class="teachers_name">Teacher - <a href="#" title="">Denise Wood</a></div>
                            </div>
                            <div class="courses_info">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-user"></i> 180 Days</li>
                                    <li><i class="fa fa-comment"></i>50 Students</li>
                                </ul>
                                <a href="#" class="cart_btn">Add to Cart</a>
                            </div>
                        </div>
                    </div><!-- Ends: .single courses -->

                    <div class="single-courses">
                        <div class="courses_banner_wrapper">
                            <div class="courses_banner"><a href="#"><img src="images/courses/courses_3.jpg" alt="" class="img-fluid"></a></div>
                            <div class="purchase_price">
                                <a href="#" class="read_more-btn">120$</a>
                            </div>
                        </div>
                        <div class="courses_info_wrapper">
                            <div class="courses_title">
                                <h3><a href="#">Network Introductions</a></h3>
                                <div class="teachers_name">Teacher - <a href="#" title="">Preston Marshall</a></div>
                            </div>
                            <div class="courses_info">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-user"></i> 140 Days</li>
                                    <li><i class="fa fa-comment"></i>60 Students</li>
                                </ul>
                                <a href="#" class="cart_btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>                     
                    <div class="single-courses">
                        <div class="courses_banner_wrapper">
                            <div class="courses_banner"><a href="#"><img src="images/courses/courses_3.jpg" alt="" class="img-fluid"></a></div>
                            <div class="purchase_price">
                                <a href="#" class="read_more-btn">120$</a>
                            </div>
                        </div>
                        <div class="courses_info_wrapper">
                            <div class="courses_title">
                                <h3><a href="#">Network Introductions</a></h3>
                                <div class="teachers_name">Teacher - <a href="#" title="">Preston Marshall</a></div>
                            </div>
                            <div class="courses_info">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-user"></i> 140 Days</li>
                                    <li><i class="fa fa-comment"></i>60 Students</li>
                                </ul>
                                <a href="#" class="cart_btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>                     
                    <div class="single-courses">
                        <div class="courses_banner_wrapper">
                            <div class="courses_banner"><a href="#"><img src="images/courses/courses_3.jpg" alt="" class="img-fluid"></a></div>
                            <div class="purchase_price">
                                <a href="#" class="read_more-btn">120$</a>
                            </div>
                        </div>
                        <div class="courses_info_wrapper">
                            <div class="courses_title">
                                <h3><a href="#">Network Introductions</a></h3>
                                <div class="teachers_name">Teacher - <a href="#" title="">Preston Marshall</a></div>
                            </div>
                            <div class="courses_info">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-user"></i> 140 Days</li>
                                    <li><i class="fa fa-comment"></i>60 Students</li>
                                </ul>
                                <a href="#" class="cart_btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>                     
                    <div class="single-courses">
                        <div class="courses_banner_wrapper">
                            <div class="courses_banner"><a href="#"><img src="images/courses/courses_3.jpg" alt="" class="img-fluid"></a></div>
                            <div class="purchase_price">
                                <a href="#" class="read_more-btn">120$</a>
                            </div>
                        </div>
                        <div class="courses_info_wrapper">
                            <div class="courses_title">
                                <h3><a href="#">Network Introductions</a></h3>
                                <div class="teachers_name">Teacher - <a href="#" title="">Preston Marshall</a></div>
                            </div>
                            <div class="courses_info">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-user"></i> 140 Days</li>
                                    <li><i class="fa fa-comment"></i>60 Students</li>
                                </ul>
                                <a href="#" class="cart_btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>    
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->                                       
        </div>

    </div>
</section><!-- ./ End Courses Area section -->


<!-- Footer -->  
<footer class="footer_2">
    <div class="container">
        <div class="footer_top">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer_single_col footer_intro">
                        <img src="images/logo2.png" alt="" class="f_logo">
                        <p>Ante amet vitae vulputate odio nulla vel pretium pulvinar aenean. Rhoncus eget adipiscing etiam arcu. Ultricies justo ipsum nec amet.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="footer_single_col">
                        <h3>Useful Links</h3>
                        <ul class="location_info quick_inf0">
                            <li><a href="#">Leadereship</a></li>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Diversity</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Press</a></li>
                        </ul>                         
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="footer_single_col information">
                        <h3>information</h3>
                        <ul class="quick_inf0">
                            <li><a href="#">Leadereship</a></li>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Diversity</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Press</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer_single_col contact">
                        <h3>Contact Us</h3>
                        <p>Ante amet vitae vulputate odio nulla vel pretium aenean.</p>
                        <div class="contact_info">
                            <span>+000 124 325</span> 
                            <span class="email">info@yourdomain.com</span>
                        </div>
                        <ul class="social_items d-flex list-unstyled">
                            <li><a href="#"><i class="fab fa-facebook-f fb-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter twitt-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in link-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram ins-icon"></i></a></li>
                        </ul>
                    </div>
                </div>
                 <div class="col-12 col-md-12 col-lg-12">
                    <div class="copyright">
                        <p>&copy; Copyright 2019 Esuwise Design by Ecologytheme</p>
                    </div>
                 </div>
            </div>
        </div>
    </div>
    <div class="shapes_bg">
        <img src="images/shapes/testimonial_2_shpe_1.png" alt="" class="shape_3">        
        <img src="images/shapes/footer_2.png" alt="" class="shape_1">
    </div>    
</footer><!-- End Footer -->

<section id="scroll-top" class="scroll-top">
    <h2 class="disabled">Scroll to top</h2>
    <div class="to-top pos-rtive">
        <a href="#"><i class = "flaticon-right-arrow"></i></a>
    </div>
</section>

    <!-- JavaScript -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>     
    <script src="js/owl.carousel.min.js"></script>   
    <script src="js/slick.min.js"></script>   
    <script src="js/jquery.meanmenu.min.js"></script>    
    <script src="js/wow.min.js"></script> 
    <!-- Counter Script -->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/custom.js"></script>   
    
    <!-- =========================================================
         STYLE SWITCHER | ONLY FOR DEMO NOT INCLUDED IN MAIN FILES
    ============================================================== -->
    <script type="text/javascript" src="js/demo.js"></script>
    <div class="demo-style-switch" id="switch-style">
        <a id="toggle-switcher" class="switch-button" title="Change Styles"><span class="fa fa-cog fa-spin"></span></a>
        <div class="switched-options">
            <div class="config-title">
                <a class="navbar-brand" href="index-2.html"><img src="images/logo.png" alt="logo"></a>
                <p>Education Template</p>
                
            </div>
            <div class="demos">
                <div><a href="index-2.html" data-toggle="tooltip" data-placement="top" title="Home Style One"><img class="main-image img-fluid" src="demo/index_1.png" alt=""/></a></div>
                <div><a href="index-3.html" data-toggle="tooltip" data-placement="top" title="Home Style Two"><img class="main-image img-fluid" src="demo/index_2.png" alt=""/></a></div>
                <div><a href="index-4.html" data-toggle="tooltip" data-placement="top" title="Home Style Three"><img class="main-image img-fluid" src="demo/index_3.png" alt=""/></a></div>
                <ul class="list-unstyled clearfix">
                    <li><a href="about.html" data-toggle="tooltip" data-placement="top" title="About Page"><img src="demo/about.png" alt="" class="img-fluid"></a></li>
                    <li><a href="blog.html" data-toggle="tooltip" data-placement="top" title="Blog Page"><img src="demo/blog.png" alt="" class="img-fluid"></a></li>
                    <li><a href="blog-details.html" data-toggle="tooltip" data-placement="top" title="Blog Details Page"><img src="demo/blog_details.png" alt="" class="img-fluid"></a></li>
                    <li><a href="event.html" data-toggle="tooltip" data-placement="top" title="Event Page"><img src="demo/event.png" alt="" class="img-fluid"></a></li>
                    <li><a href="event-details.html" data-toggle="tooltip" data-placement="top" title="Event Deiails"><img src="demo/event_details.png" alt="" class="img-fluid"></a></li>
                    <li><a href="teacher-profile.html" data-toggle="tooltip" data-placement="top" title="Teacher Profile"><img src="demo/teacher_pro.png" alt="" class="img-fluid"></a></li>
                    <li><a href="course.html" data-toggle="tooltip" data-placement="top" title="Courses Page"><img src="demo/course.png" alt="" class="img-fluid"></a></li>
                    <li><a href="course-details.html" data-toggle="tooltip" data-placement="top" title="Courses Details"><img src="demo/course_details.png" alt="" class="img-fluid"></a></li>
                    <li><a href="team.html" data-toggle="tooltip" data-placement="top" title="Team Page"><img src="demo/team.png" alt="" class="img-fluid"></a></li>
                    <li><a href="contact.html" data-toggle="tooltip" data-placement="top" title="Contact Page"><img src="demo/contact.png" alt="" class="img-fluid"></a></li>
                </ul>
            </div>
        </div>
    </div>
</body>


</html>
