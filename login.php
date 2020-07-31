<html>
  <head>
    <style>
     body{
      background-image: url("Images/slider4.jpg");
      opacity: 0.8;
     }
     .formcontainer
     {
      max-width: 1000px;
    color: initial;
    backface-visibility: 20px;
    filter: opacity(0.8);
    filter: brightness(1.0);
    background-color: #939393;
    padding-top: 10px;
    color: black;
    line-height: 2.3rem;
    font-weight: bolder;
    padding-right: 15px;
    padding-left: 15px;
    margin-left: 17%;
     }
      
      </style>
    <title>Login/register </title>
    <link rel="stylesheet" href="text/css">
    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body style="background-repeat: no-repeat;">
    <marquee behavior="scroll" direction="left" scrollamount="10"
           onmouseover="this.stop();"
           onmouseout="this.start();" style="background-color:black; color:white; "><h3 style="font-size: -webkit-xxx-large;">Saini Transport Service</h3>
    </marquee>
    <?php
    if(isset($_GET['login']))
    {
      echo "<script> alert('success')</script>";
    }
    ?>
    <div class="formcontainer">
      <div class="row">
        <div class="col-md-6">
          <h2 style="font-size: 3rem;">Login Here</h2>
          <form  action="validation.php" method="post">
            <div>
              <label>Username</label>
              <input type="text" name="username" class="form-control" required>
            </div>
            <div>
              <label>Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn mt-3" style="color: black;">Login</button>  
            <button type="reset" class="reset btn mt-3 " style="color: black;">Clear</button>
          </form>
        </div>
        <div class="col-md-6">
            <h2 style="font-size: 3rem;">Register Here</h2>
            <form  action="registeration.php" method="post" >
              <div>
                <label>E-mail</label>
                <input type="email" name="email" class="form-control" required>
              </div>
              <div>
                <label>Username</label>
                <input type="text" name="user" class="form-control" required>
              </div>
              <div>
                  <label>Company Name</label>
                  <input type="text" name="companyname" class="form-control" required>
                </div>
                <div>
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" required>
                </div>
                <div>
                    <label>Phone no</label>
                    <input type="number" name="phoneno" class="form-control" required>
                  </div>
              <button type="submit" class="btn btn mt-3" style="color: black;">Register</button>
              <button type="reset" class="reset btn mt-3" style="color: black;">Clear</button>  
            </form>
          </div>
      </div>
    </div>

  </body>
</html>