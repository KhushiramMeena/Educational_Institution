<?php
$login=false;
$errorAlert=false;

if($_SERVER["REQUEST_METHOD"]=="POST"){

// include 'partials/_dbconnect.php';
$server="localhost";
$username="root";
$password="";
$database="bt20cse167";

$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
    echo "You are not regestered yet so database is not created yet!!!!".mysqli_connect_error();
}
$username= $_POST['username'];
$password=$_POST['password'];

//agar password ,confirm password k barabar ho to...insert ka denge data

    $sql=" Select * from bt20cse167_data where username='$username' AND password='$password' ";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);// yeh pta karega ki same record kitne h
    if($num==1){ //agar 1 hi unique record ho to hum log-in ho jayenge
        $login=true;
        // jaise hi login karenge, hamara session start ho jayega...
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['username']=$username;
       
        // ab hum user ko welcome.php par redirect kar denge
        // function to redirection
        header("location: profile.php");
    }

else{
    $errorAlert="Invalid Credentials";
}
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/logo1.png" rel="icon">
  <link href="assets/img/logo1.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
   <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.php"><img src="assets/img/logo1.png" /> </a></h1>
     

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.php">Go to Homepage</a></li>
          
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
     
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Login</h2>
        
      </div>
    </div>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
       
    <?php 
    if($login){

        
    }
    
    // p-3 mb-2 bg-success text-white
    if($errorAlert){

        echo ' <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Sorry!</strong> '.$errorAlert.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
   
    ?>
 

    <div class="container">

    <div class="row">
    <div class="col-lg-6 order-1 order-lg-2"  data-aos-delay="100">
            <img src="assets/gif/img1.gif" class="img-fluid" alt="">
          </div>
<h2 >Login to see your profile</h2>
<br/>

<form  style="width:650px ;padding:0px 5px" action="login.php" method="post">
  <div class="mb-3 col-md-6  " >
    <label for="username" class="form-label" >username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" required="required"  >
    
  </div>
  <div class="mb-3 col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" required="required">
  </div>

  <button type="submit" class="btn btn-primary">Login</button>
  
<a href="signup.php" style="color:#FFFFFF;background-color: #0d6efd;padding:9px 20px;border-radius:6px;">Signup</a>
</form>



    </div>
    </div>

    </section>

  </main>
  <hr/>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            
              <h3 style="font-size: 20px; text-align: center;"><b><u>Contact Us</u></b></h3>
            <p style="text-align: left;">
            
              
              Permanent Address: Survey No. 140,141/1 behind Br.<br/>
               Sheshrao Wankhade Shetkari Sahkari Soot Girni,<br/> 
               Village - Waranga, PO - Dongargaon(Butibori),<br/> 
               Tahsil- Nagpur (Rural), District Nagpur, Maharashtra- 441108
                   <br/> <br/>
                   <strong style="text-align: left;"><i class="fa fa-phone" style="font-size:17px ; "></i>&nbsp;Call on:</strong> +91-890xxxx50<br>
              <strong><i class="material-icons" style="font-size:17px ;">email</i>&nbsp;Email:</strong>mkhushiram@example.com<br>


            </p>
           
          
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4><u>Important Links</u></h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <br/><br/>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">E-Library</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Academic Calender</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">B.tech CSE</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">B.tech ECE</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.onlinesbi.com/sbicollect/icollecthome.htm" target="_blank">online Fee Payment</a></li>
              
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            
            <h3 style="text-align: center;" ><u>Institute Location</u></h3>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9003.486781833297!2d79.02398548110463!3d20.950805541979108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c0529518230f%3A0x45b76be0621cbb88!2sIIIT%20Campus!5e0!3m2!1sen!2sin!4v1641672424188!5m2!1sen!2sin"
             width="400" height="200" style="border:2px solid blue; border-radius: 20px;" allowfullscreen="" loading="lazy"></iframe>


          </div>


        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>2022</span></strong>. All Rights Reserved | IIIT,Nagpur
        </div>
        <div class="credits">
         
          Made by : <b style="color: burlywood;">KHUSHIRAM MEENA</b><br/>
          <p style="color: cornsilk;"> &emsp;&emsp;&emsp;&emsp;BT20CSE167</p>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <p><u>Get In Touch</u></p>
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
    
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>


