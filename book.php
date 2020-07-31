<?php
session_start();
if(!isset($_SESSION['uname']))
header("location:login.php");

?>
<html>
      <head>
        <style>
            *{
                background-color: #939393;
            }
        .container
        {
        max-width: 1000px;
        color: initial;
        backface-visibility: 20px;
        filter: opacity(0.7);
        filter: grayscale(1);
        filter: brightness(1.5);
        }
        .btn{
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
        .btn:hover{
        background-color:#fff;
        color: #1e649f;
        box-shadow: 0 0 10px #1e649f inset, 0 0 10px 4px #1e649f;
        }
          
                </style>
              <title>Booking </title>
          
          <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      </head>
  <body style="background-image: url(Images/slider4.jpg); filter: brightness(0.9); background-repeat: no-repeat; " >
    <marquee behavior="scroll" direction="left" scrollamount="10"
           onmouseover="this.stop();"
           onmouseout="this.start();"><h3>Saini Transport Service</h3>
    </marquee>


        <div class="container" style="filter: opacity(0.8); width: 40%;">
                <h2 style="font-size: 4rem;">Book a Truck</h2>
                <form  action="bookdb.php" method="post" style="color: black; line-height: 2.3rem; font-weight: bold;" >
                  <div>
                    <label> Enter Company name</label>
                    <input type="text" name="cname" class="form-control" required>
                  </div>
                  <div>
                    <label>E-mail</label>
                    <input type="email" name="e-mail" class="form-control" required>
                  </div>
                  <div>
                      <label>Source</label>
                      <input type="text" name="source" class="form-control" required>
                    </div>
                    <div>
                      <label>Destination</label>
                      <input type="text" name="destination" class="form-control" required>
                    </div>
                    <label  style=" padding-right: 20px; padding-bottom: 20px; padding-top: 20px;">Select  The Type Of Truck  </label>
                    <select name="vehicle" style="border-color: snow;" >
                        <option value = " full truck"> Full truck</option>
                        <option value = " part truck"> Part truck</option>
                    </select>
                      <div>
                            Date:
                            <input type="date" name="date" required>
                          </div>
                  <button type="submit" class="btn" style="padding-top: 13px; padding-bottom: 13px;" >Submit</button>
                    
                </form>
              </div>



  </body>
  </html>
