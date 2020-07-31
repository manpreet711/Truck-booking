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
    <title>Admin login </title>
    <link rel="stylesheet" href="text/css">
    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body style="background-repeat: no-repeat;">
    <marquee behavior="scroll" direction="left" scrollamount="10"
           onmouseover="this.stop();"
           onmouseout="this.start();" style="background-color:black; color:white; "><h3 style="font-size: -webkit-xxx-large;">Saini Transport Service</h3>
    </marquee>

    <div class="formcontainer">
      <div class="row">
        <div class="col-md-6">
          <h2 style="font-size: 3rem;">Login Here</h2>
          <form  action="adminp.php" method="post">
            <div>
              <label>Username</label>
              <input type="text" name="user" class="form-control" required>
            </div>
            <div>
              <label>Password</label>
              <input type="password" name="pass" class="form-control" required>
            </div>
            <button type="submit" class="btn btn mt-3" style="color: black;">Login</button>  
          </form>
    </div>

  </body>
</html>