 <!-- php -->
 <?php 
$succesAlert=false;
$errorAlert=false;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $uname=$_POST['username'];
  $pass=$_POST['password'];
  $cpassword=$_POST['cpassword'];
  


$servername="localhost";
$username="root";
$password="";


$conn=mysqli_connect($servername,$username,$password); 

if(!$conn){
    die("sorry we failed to connect:-").mysqli_connect_error()."<br>";
}
else{
    echo "connection successful"."<br>";
}
// To create a database, we  will run a sql query...

// *************************SQL QUERY****************

$sql= "CREATE DATABASE bt20cse167";//database name: bt20cse167
$result=mysqli_query($conn,$sql);
$result=var_dump($result);                   //it will returns true/false and  tells us that DB is created or not!!!
// // **************************************************

$database="bt20cse167";
$conn=mysqli_connect($servername,$username,$password,$database);

// //creating table
$sql="CREATE TABLE `bt20cse167`.`bt20cse167_data` ( `sno` INT NOT NULL AUTO_INCREMENT ,  `username` VARCHAR(20) NOT NULL ,   `password` VARCHAR(15) NOT NULL ,  `timestamp` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,    PRIMARY KEY  (`sno`)) ENGINE = InnoDB";

$result=mysqli_query($conn,$sql);


//*******inserting data */

$exitRows="SELECT * FROM `bt20cse167_data` WHERE username='$uname' ";
$result=mysqli_query($conn,$exitRows);
$numRows=mysqli_num_rows($result);
if($numRows>0){
  $errorAlert="same usename already exists ! please try again with another username!";
}

else{
  if(($pass==$cpassword) ){
  $sql="INSERT INTO `bt20cse167_data` ( `username`, `password`, `timestamp`) VALUES (  '$uname', '$pass', current_timestamp()) ";
   $result=mysqli_query($conn,$sql);

  if($result){
  $succesAlert=true;
   }
  }


else{
   $errorAlert="Password do not match ! please enter same password";
}

}
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Signup</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

   <!-- Favicons -->
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
          <li><a href="courses.php">Our programs</a></li>

          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
     
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
    <br/>
    <?php 
    if($succesAlert){

        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Congrats!</strong> Your signup process successfully completed.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
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
      <br/><br/>
      
<h2 >SignUp Section</h2>
<br/>

<form  action="signup.php" method="post">
<div class="mb-3 col-md-6">
    <label for="username" class="form-label" >username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" required="required" placeholder="Make a unique username"  >
</div>
 
  <div class="mb-3 col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="password must be contain uppercase ,lowercase letter & at least 8 characters" required="required">
  </div>

  <div class="mb-3 col-md-6">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="confirm password must be same" required="required">
  </div>

  <button type="submit" class="btn btn-primary">Signup</button>
  


<a href="login.php" style="color:#FFFFFF;background-color: #0d6efd;padding:9px 20px;border-radius:6px;">Login</a>

  
</form>
      </div></div>
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
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <br/><br/>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="events.php">E-Library</a></li>
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














