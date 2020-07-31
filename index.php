<?php
session_start();
?>
<html>
    <head>
            <title>Saini Transport Services</title>
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="https://fonts.googleapis.com/css?family=Raleway:500&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="css/icofont/icofont/icofont.min.css"> 
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script>
            $(document).ready(function(){
            $(".show_hide").click(function(){
                $("#profile-container").toggle();
            });
            });
            </script>
            <style>
                .brn{
                padding: 10px;
                text-transform: uppercase;
                transition: 0.4s ease-in-out;
                cursor: pointer;
                border: 1px solid #fff;
                font-size: 40px;
                border-radius: 100px;
                background-color: #1e649f;
                color: #fff;
                }
                .brn:hover{
                background-color:#fff;
                color: #1e649f;
                box-shadow: 0 0 10px #1e649f inset, 0 0 10px 4px #1e649f;
                }
                #profile-container{
                    float : right;
                    z-index:5;
                    padding-left: 250px;
                }
                </style>
    </head>

    <body>

        <section id="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light py-1 pr-5 pl-5">
                <a class="navbar-brand" href="#"><img src="Images/logo.PNG" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#about-area">Services</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#team-area">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact-area">Contact</a>
                    </li>
                    <li class="nav-item">
                    <?php
                        if(isset($_SESSION['uname'])){
                        ?>
                        <a class="nav-link" href="mybooking.php">MY Bookings</a>
                        <?php
                        }
                        else{
                        ?>
                        <a class="nav-link" href="#testimonial">Testimonial</a>
                        <?php
                        }
                        ?>
                        </li>
                    <li class="nav-item">
                        <?php
                        if(isset($_SESSION['uname'])){
                            ?>
                        <div class = "show_hide" style="cursor:pointer;">
                                <!--  <h4 class=""><a href="logout.php"><i class="icofont icofont-user-alt-4">
                                        logout</i></a>
                                        </h4>-->
                                        <img src="images/profile.png" height ="25" width = "25" id="userimg" >
                                        <p style = "color : white; text-transform: uppercase;"> 
                                        <?php
                                    echo $_SESSION['uname'];
                                    ?>
                                    </p>
                                    </div>
                        <?php  
                        }
                        else{
                            echo "<a class=\"nav-link\" href=\"login.php\"> Login</a>";
                        }
                        ?>
                        </li>
                </ul>
                </div>
            </nav>
        </section>

        <!-------------------Banner Section----------------->
        <section id="banner">
            
            <div class="row" style=" display: block;">
                <div class="col-md-12">
                    <img src="Images\truck1.jpg" style="width: 100%; height: 120%; filter: blur(3px); box-shadow: 0 0 10px #000000 inset, 0 0 10px 4px #2196F3;"/>
                </div>
                </div>
                <div class="row headDesign">  
                    <div class="col-xs-12 col-sm-10 col-md-6">
                        <div class="form-group p-6">
                        <h1 class="heading">We Are Here To Provide Best Logistics Services.</h1></p>
                        <!--<h2>To Book a Service Click On Book Now Button.</h2></p>-->
                            <input type ="button" class = "brn" value ="Book Now" name ="click" onclick ="location.href ='book.php'">
                            
                        </div>           
                    </div>
                
                    <div id="profile-container" style="display:none; " class="col-rg-1">
                                        <img src="images/user.png" id="userimg" style="border-radius:30%;height:50%;width:60%;" >
                                        <p style ="block-size: 40px; color: aliceblue; font-weight: inherit; font-size: 36px;">Welcome <?php
                                        echo $_SESSION['uname'];
                                        ?></p>
                                        <div id="profile-footer" style = "padding-left: 40px;">
                                        
                                            <input type="button" value="sign-out" class="brn" onclick="location.href = 'logout.php'">
                                        </div>                            
                    </div>
                </div> 
                                
        </section>
        <!---------Services Section--------------->
        <section class="section-padding" id="about-area" style=" box-shadow: 0 0 10px #9b9b9b inset, 0 0 10px 4px #ffffff; ">
            <div class="container" style="padding-top: 230px; padding-bottom:60px; padding: left 0px; padding: right 0px;">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-5" style="padding-right: 100px;">
                        <div class="page-title">
                            <h2 class="h2-service">We Offer Quick &amp; Powerful Business Solution</h2>
                            <div class="service-text" >
                                <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you.</p>
                            </div>
                        </div>
                        <div class="wow fadeInUp"  style="padding-top: 50px;">
                            <a href="#" class="bttn bttn-primary">Learn More</a>
                        </div>
                    </div>
                    <div class="hidden-xs col-sm-6 col-md-offset-1" style="padding-left: 55px; padding-right: 5px;">
                        <img src="images/truck-register.jpg" alt="image">
                    </div>
                </div>
            </div>
        </section>

        <!----------------------------------------------------------------------------------------------->
        <section class="section-padding gray-bg" style="background-color: #adadad17;">
            <div class="container">
                <div class="row" style="padding-top: 60px; padding-bottom:60px;">
                    <div class="col-xs-12 col-sm-6" style="padding-left: 0px;">
                        <div class="video-box">
                            <img src="images/section.png" alt="image">
                            <a href=# class="video-bttn"></a>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1 wow fadeInUp" style="padding-left: 60px; padding-right:0px;">
                        <div class="page-title">
                            <h2 class="title" style = "color: #4f4f4f; margin: 10px 0; font-weight: 800; ">Why Choose Us?</h2>
                            <div  class="tab-content">
                                <h3 class="upper" style = "color: #4f4f4f; margin: 10px 0; font-weight: 800; ">25 YEARS OF EXPERIENCE IN THIS PASSION</h3>
                                <ul class="tabs-list">
                                    <li class="active"><a data-toggle="pill" >Our Mission</a></li>
                                </ul>    
                                <p style="font-weight:400; font-size: 15px; line-height: 1.8em; color: #898989">Aenean rutrum, lorem sed cursus tristique, turpis velit ullamcorper ligula, id pretium elit augue in libero. Suspendisse in porttitor orci. Pellentesque vel gravida augue.</p>
                                <br />
                                <a href="#" class="bttn bttn-sm bttn-primary">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!----------------Skill Area ------------------>
        <section class="section-padding gray-bg" id="skill-area" style="box-shadow: 0 0 10px #9b9b9b inset, 0 0 10px 4px #ffffff;">
            <div class="container">
                <div class="row" style="padding-top: 60px; padding-bottom:60px;">
                    <div class="col-xs-12 col-sm-6 col-md-5" style="padding-top: 10px; padding-right: 40px;">
                        <div class="page-title">
                            <h2 class="title wow fadeInUp" style = "color: #4f4f4f; font-weight: 800;">Our Professional Skill</h2>
                            <div class="wow fadeInUp" style="font-weight:400; font-size: 15px; line-height: 1.8em; color: #898989" >
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look.</p>
                            </div>
                        </div>
                        <div class="skills skills1 row">
                            <!-- main skill No. 1 -->
                            <div class="skill col-md-4 col-xs-6 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="chart chart1 center" data-percent="95">
                                    <span class="counter">95%</span>
                                </div>
                                <h6 style="color: #898989">Best Facility</h6>
                            </div>
                            <!-- main skill No. 2 -->
                            <div class="skill col-md-4 col-xs-6 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="chart chart1 center" data-percent="85">
                                    <span class="counter">85%</span>
                                </div>
                                <h6 style="color: #898989">Professional Driver</h6>
                            </div>
                            <!-- main skill No. 3 -->
                            <div class="skill col-md-4 col-xs-6 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="chart chart1 center" data-percent="90">
                                    <span class="counter">90%</span>
                                </div>
                                <h6 style="color: #898989">Teamwork</h6>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-offset-1" style="padding-left: 40px;">
                        <img src="images/skill-image.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-----------------------Team  Area------------------------>
        <section class="section-padding" id="team-area" style="padding-top: 60px; background-color: #adadad30; padding-bottom: 60px;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3" style="margin-left: 25%; padding-bottom: 30px;">
                        <div class="text-center">
                            <h1 class="title" style="color: #4f4f4f; font-weight:700;">Our expert team</h1>
                            <p style="color: #898989">There are many variations of passages of Lorem Ipsum available.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <div class="team-box wow fadeInUp" data-wow-delay="0.2s">
                            <div class="team-image">
                                <img src="Images/team-1.jpg" alt="">
                            </div>
                            <div class="team-hover">
                                <h5 class="t_title">Roberto Peo</h5>
                                <span class="t_sub_title">SEO Expert</span>
                                <div class='bar_group' data-max="100">
                                    <div class=" bar_group__bar thick elastic" data-value="90" data-tooltip="true" data-label="Phototshop" data-show-values="true" data-unit="%"></div>
                                </div>
                                <div class='bar_group' data-max="100">
                                    <div class=" bar_group__bar thick elastic" data-value="70" data-tooltip="true" data-label="Indesign" data-show-values="true" data-unit="%"></div>
                                </div>
                                <div class='bar_group' data-max="100">
                                    <div class=" bar_group__bar thick elastic" data-value="50" data-tooltip="true" data-label="Illustrator" data-show-values="true" data-unit="%"></div>
                                </div>
                                <div class="team-social-menu">
                                    <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                    <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                    <a href="#"><i class="icofont icofont-social-linkedin"></i></a>
                                    <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <div class="team-box wow fadeInUp" data-wow-delay="0.4s">
                            <div class="team-image">
                                <img src="images/team-2.jpg" alt="">
                            </div>
                            <div class="team-hover">
                                <h5 class="t_title">Jhon Doe</h5>
                                <span class="t_sub_title">Web Developer</span>
                                <div class='bar_group' data-max="100">
                                    <div class=" bar_group__bar thick elastic" data-value="90" data-tooltip="true" data-label="Phototshop" data-show-values="true" data-unit="%"></div>
                                </div>
                                <div class='bar_group' data-max="100">
                                    <div class=" bar_group__bar thick elastic" data-value="70" data-tooltip="true" data-label="Indesign" data-show-values="true" data-unit="%"></div>
                                </div>
                                <div class='bar_group' data-max="100">
                                    <div class=" bar_group__bar thick elastic" data-value="50" data-tooltip="true" data-label="Illustrator" data-show-values="true" data-unit="%"></div>
                                </div>
                                <div class="team-social-menu">
                                    <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                    <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                    <a href="#"><i class="icofont icofont-social-linkedin"></i></a>
                                    <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <div class="team-box wow fadeInUp" data-wow-delay="0.6s">
                            <div class="team-image">
                                <img src="images/team-3.jpg" alt="">
                            </div>
                            <div class="team-hover">
                                <h5 class="t_title">Jakia Khan</h5>
                                <span class="t_sub_title">UI/UX Designer</span>
                                <div class='bar_group' data-max="100">
                                    <div class=" bar_group__bar thick elastic" data-value="90" data-tooltip="true" data-label="Phototshop" data-show-values="true" data-unit="%"></div>
                                </div>
                                <div class='bar_group' data-max="100">
                                    <div class=" bar_group__bar thick elastic" data-value="70" data-tooltip="true" data-label="Indesign" data-show-values="true" data-unit="%"></div>
                                </div>
                                <div class='bar_group' data-max="100">
                                    <div class=" bar_group__bar thick elastic" data-value="50" data-tooltip="true" data-label="Illustrator" data-show-values="true" data-unit="%"></div>
                                </div>
                                <div class="team-social-menu">
                                    <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                    <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                    <a href="#"><i class="icofont icofont-social-linkedin"></i></a>
                                    <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <div class="team-box wow fadeInUp" data-wow-delay="0.8s">
                            <div class="team-image">
                                <img src="images/team-4.jpg" alt="">
                            </div>
                            <div class="team-hover">
                                <h5 class="t_title">Jack kalis</h5>
                                <span class="t_sub_title">Programer</span>
                                <div class='bar_group' data-max="100">
                                    <div class=" bar_group__bar thick elastic" data-value="90" data-tooltip="true" data-label="Phototshop" data-show-values="true" data-unit="%"></div>
                                </div>
                                <div class='bar_group' data-max="100">
                                    <div class=" bar_group__bar thick elastic" data-value="70" data-tooltip="true" data-label="Indesign" data-show-values="true" data-unit="%"></div>
                                </div>
                                <div class='bar_group' data-max="100">
                                    <div class=" bar_group__bar thick elastic" data-value="50" data-tooltip="true" data-label="Illustrator" data-show-values="true" data-unit="%"></div>
                                </div>
                                <div class="team-social-menu">
                                    <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                    <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                    <a href="#"><i class="icofont icofont-social-linkedin"></i></a>
                                    <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--------------Quotes Area------------->
        <section class="section-padding gray-bg"  id="testimonial" style="padding-top: 60px; padding-bottom: 60px; box-shadow: 0 0 10px #9b9b9b inset, 0 0 10px 4px #ffffff;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3" style="margin-left: 26%;">
                        <div class="page-title text-center">
                            <h2 class="title" style = "color: #4f4f4f;
                                        letter-spacing: 1px;
                                        line-height: 1.4em;
                                        font-weight: 800;
                                        margin: 11px 0 15px;">What Our Client Say</h2>
                            <p>There are many variations of passages of Lorem Ipsum available.</p>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-left: 18%;">
                    <div class="col-xs-12 col-md-10 col-md-offset-1">
                        <div class="testimonials">
                            <div class="single-testimonial text-center">
                                <div class="testimonial-text" style="font-family: 'Roboto',
                                sans-serif;
                                font-weight: 400; 
                                font-size: 20px; 
                                line-height: 1.5em; 
                                color: #898989;">
                                    <em>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</em>
                                </div>
                                <h3>Samirao Boekeo</h3>
                                <h6>CEO, Classic Group</h6>
                                <div class="testimonial-img">
                                    <img src="images/testimonial-1.png" alt="">
                                </div>
                            </div>
                            <div class="single-testimonial text-center">
                                <div class="testimonial-text" style="font-family: 'Roboto', sans-serif;
                                    font-weight: 400;
                                    font-size: 20px;
                                    line-height: 1.5em;
                                    color: #898989;">
                                    <em>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</em>
                                </div>
                                <h3>Samirao Boekeo</h3>
                                <h6>CEO, Classic Group</h6>
                                <div class="testimonial-img">
                                    <img src="images/testimonial-2.png" alt="">
                                </div>
                            </div>
                            <div class="single-testimonial text-center">
                                <div class="testimonial-text" style="font-family: 'Roboto', sans-serif;
                                    font-weight: 400;
                                    font-size: 20px;
                                    line-height: 1.5em;
                                    color: #898989;">
                                    <em>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</em>
                                </div>
                                <h3>Samirao Boekeo</h3>
                                <h6>CEO, Classic Group</h6>
                                <div class="testimonial-img">
                                    <img src="images/testimonial-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--------------Achivments---------------------->
        <section class="section-padding gray-bg" style="padding-top: 60px; background-color: #adadad17; padding-bottom:60px;">
            <div class="container" style="margin-left: 18%; padding-right: 20px;">
                <div class="row counters">
                    <div class="col-xs-6 col-sm-6 col-md-3">
                        <div class="count-box wow fadeInUp" data-wow-delay="0.2s">
                            <div class="count-icon">
                                <i class="icofont icofont-bag-alt" style="font-size:60px"></i>
                            </div>
                            <span class="count_title" style ="    font-family: 'Roboto',
                                sans-serif;
                                font-weight: 800;
                                font-size: 25px;
                                line-height: 1.5em;
                                color: #898989;">Project Complete</span>
                            <h2 class="count">1172</h2>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3">
                        <div class="count-box wow fadeInUp" data-wow-delay="0.4s">
                            <div class="count-icon">
                                <i class="fa fa-smile-o" style="font-size:60px"></i>
                            </div>
                            <span class="count_title" style="font-family: 'Roboto', sans-serif;
                                font-weight: 800;
                                font-size: 25px;
                                line-height: 1.5em;
                                color: #898989;">Happy Client’S</span>
                            <h2 class="count"  >1000</h2>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3">
                        <div class="count-box wow fadeInUp" data-wow-delay="0.6s">
                            <div class="count-icon">
                                <i class="icofont icofont-businessman" style="font-size:60px"></i>
                            </div>
                            <span class="count_title" style=" font-family: 'Roboto', sans-serif;
                                font-weight: 800;
                                font-size: 25px;
                                line-height: 1.5em;
                                color: #898989;">Total Client’s</span>
                            <h2 class="count">1200</h2>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3">
                        <div class="count-box wow fadeInUp" data-wow-delay="0.8s">
                            <div class="count-icon">
                                <i class="icofont icofont-money" style="font-size:60px"></i>
                            </div>
                            <span class="count_title" style =" font-family: 'Roboto', sans-serif;
                                font-weight: 800;
                                font-size: 25px;
                                line-height: 1.5em;
                                color: #898989;">Wining Award</span>
                            <h2 class="count">1172</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---------------------Contact Area------------------->
        <section class="section-padding" id="contact-area" style=" box-shadow: 0 0 10px #9b9b9b inset, 0 0 10px 4px #ffffff;">
                <div class="contact-area" style="padding-top:60px; background: #00000014; padding-bottom:60px;">
                    <div class="container" >
                        <div class="row" >
                            <div class="col-xs-12">
                                <div class="page-title">
                                    <h3 class="bar-title" style="color: #4f4f4f;letter-spacing: 1px;line-height: 1.4em; font-weight: bold;font-size: -webkit-xxx-large; margin: 11px 0 15px">Contact Now</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-8">
                                <div class="contact-form">
                                    <form action="message.php" method="GET">
                                        <div class="form-group">
                                            <input type="text" id="form-name" name="name" placeholder="Full Name" required="required" style="padding-left: 100px; padding-bottom: 50px;">
                                            <input type="number"  name="num" placeholder="Phone Number" style="padding-left: 100px; padding-bottom: 50px;">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" id="form-email" placeholder="Your Email" style="padding-left: 100px; padding-bottom: 50px;" required="required" >
                                            <input type="text" name="subject1" id="form-subject" placeholder="Subject"  style="padding-left: 100px; padding-bottom: 50px;"required="required">
                                        </div>
                                        <textarea name="form-message" id="message"name ="msg" id="form-message" rows="5"  style="padding-left: 100px;"required="required" placeholder="Message"></textarea>
                                        <button type="submit" class="reset btn mt-3 " style="color: black;">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4" style="line-height: 4.2rem; color: #909090;font-weight: 600;">
                                <div class="contact-info">
                                    <ul class="info">
                                        <li>
                                            <span class="info-icon">
                                                <i class="icofont icofont-social-google-map"></i>
                                            </span> Dr.C.G Road,SainiTransport Service<br /> Chembur Camp, Mumbai-400074
                                        </li>
                                        <li>
                                            <span class="info-icon">
                                                <i class="icofont icofont-ui-cell-phone"></i>
                                            </span> (+91)22258976
                                        </li>
                                        <li>
                                            <span class="info-icon">
                                                <i class="icofont icofont-envelope"></i>
                                            </span> Info@sainitransport.com
                                        </li>
                                    </ul>
                                    <div class="social-menu-2" style=" letter-spacing: 0.5rem;">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <!--------------Footer area----------------------->
        <footer class="footer-area">
            <div class="footer-top section-padding" style="padding-top:60px;  background-color: #101010; padding-bottom:60px;">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-3">
                            <div class="footer-text">
                                <h4 class="upper" style="color: #4f4f4f;
                                        font-family: 'Montserrat', sans-serif;
                                        margin: 11px 0 15px;
                                        font-weight: 600;
                                        line-height: 1.4em;
                                        font-size: 27px;
                                        text-transform: uppercase;">Saini Transport Pvt Ltd</h4>
                                <p style="line-height: 1.8em; color: #898989;">Way to provide quality,services and trust in our clients.</p>
                                <div class="social-menu" style=" letter-spacing: 0.3rem;">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-2 col-md-offset-1" style="margin-left: 115px;">
                            <div class="footer-single">
                                <h4 class="upper" style = " color: #4f4f4f;
                                font-family: 'Montserrat', sans-serif;
                                margin: 11px 0 15px;
                                font-weight: 800;
                                line-height: 1.4em;
                                text-transform: uppercase;">Company</h4>
                                <ul style="color: #898989; line-height: 1.8rem;">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#about-area">About Us</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#contact-area">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-2" style="margin-left: 5%;">
                            <div class="footer-single">
                                <h4 class="upper" style = " color: #4f4f4f;
                                font-family: 'Montserrat', sans-serif;
                                margin: 11px 0 15px;
                                font-weight: 800;
                                line-height: 1.4em;
                                text-transform: uppercase;">Services</h4>
                                <ul style="color: #898989; line-height: 1.8rem;">
                                    <li><a href="#">Transport Services</a></li>
                                    <li><a href="#">Truck Load</a></li>
                                    <li><a href="#">Manage Booking</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-2" style="margin-left: 5%;" >
                            <div class="footer-single">
                                <h4 class="upper" style = " color: #4f4f4f;
                                font-family: 'Montserrat', sans-serif;
                                margin: 11px 0 15px;
                                font-weight: 800;
                                line-height: 1.4em;
                                text-transform: uppercase;">Resources</h4>
                                <ul style="color: #898989; line-height: 1.8rem;">
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Privacy &amp; Term</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--<div class="col-xs-6 col-md-2">
                            <div class="footer-single">
                                <h4 class="upper">Solutions</h4>
                                <ul>
                                    <li><a href="#">Bug Fixing</a></li>
                                    <li><a href="#">Upgrade</a></li>
                                    <li><a href="#">Malware Protect</a></li>
                                </ul>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
            <div class="footer-bottom" >
                <div class="container" style="padding-left:25%"; >
                    <div class="row">
                        <div class="col-xs-12">
                            <p class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved|<a href="#">SainiTransport</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


    </body>
</html>