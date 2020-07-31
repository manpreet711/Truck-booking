<?php
session_start();
//$em = $_SESSION['email'];
$host = "localhost";
$dbusername = "root";
$dbpassword = "manpreetsingh";
$dbname = "saini_transport";
$db=mysqli_connect($host, $dbusername, $dbpassword , $dbname) or die("could not connect to database");

if($db){
  echo " ";
}else{
  echo "no connection";
}

mysqli_select_db($db,'saini_transport');
$sql = "select * from booking where status!=0";
$res = mysqli_query($db,$sql);
?>
<html>
    <head>
        <title>
            History
        </title>
                <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="https://fonts.googleapis.com/css?family=Raleway:500&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="css/icofont/icofont/icofont.min.css"> 

    </head>
    <body style=" background: #cccccc;">
        <header>

                <marquee behavior="scroll" direction="left" scrollamount="10"
                onmouseover="this.stop();"
                onmouseout="this.start();" style="background: black;color: ghostwhite;"><h3>Saini Transport Service</h3>
                </marquee>

        </header>
        <div class="w3-container" style="box-shadow: 0 0 4px 4px #1e649f inset, 0 0 10px 4px #1e649f;">
        <h1 align = "center"> Booking History </h1>
    <table   class="table table-striped table-dark table-hover">
           
            <tr>
            <th>id</th>
            <th> COMPANY NAME</th>
            <th>EMAIL</th>
            <th>SOURCE</th>
            <th>DESTINATION</th>
            <th>TYPE</th>
            <th>DATE</th>
            <th>STATE</th>
            </tr>
           <?php while($row = mysqli_fetch_array($res))
           {
            ?>
            <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['company_name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['source'];?></td>
            <td><?php echo $row['destination'];?></td>
            <td><?php echo $row['type'];?></td>
            <td><?php echo $row['date'];?></td>
            <td><?php if($row['status']==1) {echo "accepted";} else {echo"rejeced";}?></td>
           <?php } ?>
</table>
</div>
        <footer class="footer-area">
                <div class="footer-top section-padding" style="padding-top:60px; background-color: #000000; padding-bottom:60px;">
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
                                    <div class="social-menu">
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