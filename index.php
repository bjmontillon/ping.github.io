<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Frontend Mentor | Ping coming soon page</title>

</head>
<body>
  <div  class="container">
  <div class="logo-wrapper">
    <a href="index.html">
    <img class="logo "src="images/logo.svg" name="logo" alt="logo">
    </a>
  </div>
  <h1 class="intro" style="font-weight: 300;">We are launching <span class="soon" style="font-weight: bold;">soon!</span></h1>

  <h4>Subscribe and get notified</h4>


  <form action="index.php"  method="POST"> 

    <input type="text" name="email" placeholder="Your email address..." required>
    
    <input class="btn" type="submit" name="submit" value="Subscribe">
  </form>



  <div class="dashboard-content">
  <img  class="dashboard" src="images/illustration-dashboard.png" name="dashboard">
  </div>

  
  
  <div class="social-link">
   
    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
   
  </div>

  <div class="copyright">&copy; Copyright Ping. All rights reserved.</div>
  
  <footer>
    <p class="attribution">
      Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>. 
      Coded by <a href="#">bjmontillon</a>.
    </p>
  </footer>
  </div>
</body>
</html>