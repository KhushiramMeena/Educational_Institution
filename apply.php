
<!-- php -->
<?php 
$succesAlert=false;
$errorAlert=false;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
$father=$_POST['father'];
 $mother=$_POST['mother'];
 $gender=$_POST['gender'];
 $category=$_POST['category'];
 $religion=$_POST['religion'];
 $nationality=$_POST['nationality'];
 $pwd=$_POST['pwd'];

    $course=$_POST['course'];
    $p_add=$_POST['p_add'];
    $state=$_POST['state'];

     $email=$_POST['email']; 

  $contact=$_POST['contact'];


 $photo=$_POST['photo'];
 $sign=$_POST['sign'];
  $marksheet_10th=$_POST['marksheet_10th'];
  $marksheet_12th=$_POST['marksheet_12th'];


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

$sql= "CREATE DATABASE bt20cse167_application";//database name: bt20cse167
$result=mysqli_query($conn,$sql);
$result=var_dump($result);                   //it will returns true/false and  tells us that DB is created or not!!!
// // **************************************************

$database="bt20cse167_application";
$conn=mysqli_connect($servername,$username,$password,$database);

//creating table

$sql="CREATE TABLE `bt20cse167_application`.`application_form_data` ( `sno` INT NOT NULL AUTO_INCREMENT ,  `first name` VARCHAR(20) NOT NULL ,  
`last name` VARCHAR(20) NOT NULL ,  `father` VARCHAR(20) NOT NULL ,  `mother` VARCHAR(20) NOT NULL ,  
`gender` ENUM('male','female','other') NOT NULL ,  `category` ENUM('general','st ','sc','obc') NOT NULL ,  
`religion` TEXT NOT NULL ,  `nationality` TEXT NOT NULL ,  `pwd` ENUM('yes','no') NOT NULL ,  
`course` ENUM('b.tech','m.tech','phd') NOT NULL ,  `address` TEXT NOT NULL , 
 `state` ENUM('Rajasthan','maharashtra','up','mp','gujrat','bihar') NOT NULL , 
  `email` VARCHAR(30) NOT NULL ,  `contact` INT(10) NOT NULL ,
    `timestamp` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,    PRIMARY KEY  (`sno`)) ENGINE = InnoDB";
$result=mysqli_query($conn,$sql);


//*******inserting data */

// $exitRows="SELECT * FROM `Application_form_data` WHERE username='$uname' ";
// $result=mysqli_query($conn,$exitRows);
// $numRows=mysqli_num_rows($result);
// if($numRows>0){
//   $errorAlert="same usename already exists ! please try again with another username!";
// }

// else{
//   if(($pass==$rpassword) ){
  $sql="INSERT INTO `application_form_data` (`first name`, `last name`, `father`, `mother`, `gender`, 
  `category`, `religion`, `nationality`, `pwd`, `course`, `address`, `state`, `email`, `contact`, `timestamp`) 
  VALUES ( '$fname', '$lname', '$father', '$mother', '$gender', '$category', '$religion', 
  '$nationality', '$pwd', '$course', '$p_add, '$state', '$email', '$contact', current_timestamp())";
   $result=mysqli_query($conn,$sql);

  if($result){
  $succesAlert=true;
   }
  


else{
   $errorAlert="Password do not match ! please enter same password";
}

}

?>




























<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Apply online-EDU</title>
    <link href="assets/css/apply.css" rel="stylesheet"/>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Contact - Mentor Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
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
<body  style="background-color:#fff">

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.php"><img src="assets/img/logo1.png" /> </a></h1>
     

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.php">Go to Homepage</a></li>
          <li><a href="courses.php">Courses</a></li>
          <li><a href="about.php">About Us</a></li>
          
          
        </ul>
        
      </nav>

    </div>
     
  </header>
<br/><br/><br/>
  <fieldset style="font-size:25px;background-color:#0a193d">&emsp;&emsp;<textr>Fill Your Details Correctly:-</textr></fieldset><br/>

  <p style="color: red; padding-left:120px"> All * marked fields are mandatory to fill up</p> <hr style="color: #0a193d;"/>
    <div class="container">  

  <form method="post" action="thanks.php">
   
            <label class="c"> 
             Candidate's First Name:-</label>
             <p style="color: red;">  <input class="d" type="text" name="fname" size="50" required/>*</p>
            
            <label class="c">Candidate's Last Name:-</label>
            <p style="color: red;">    <input class="d" type="text" name="lname" size="50"  required/>*</p>
            
        <label class="c">Father's Name:-</label>
        <p style="color: red;">  <input class="d" type="text" name="father" size="50" required />*</p>
        
        <label class="c">Mother's Name:-</label>
        <p style="color: red;">  <input class="d" type="text" name="mother" size="50"required />*</p>
            
          <label class="c" >Gender:-</label>
            <div class="c"><input type="radio" id="male" name="gender" value="male"/>
              <label for="male">Male</label>
           <input class="d" type="radio" id="female" name="gender" value="female"/>
             <label for="female">Female</label>
                     <input class="d" type="radio" id="other" name="gender" value="other"/>
                <label for="other">Other</label></div>
    <br/><br/> 
    
      <div><label class="c">Category:-</label>
            <input  type="radio" name="category" value="GEN"/>
            <label for="general" class="cat">GENERAL</label>
            <input class="" type="radio" name="category" value="OBC"/>
            <label for="OBC" class="cat">OBC</label>
            <input class="" type="radio" name="category" value="SC"/>
            <label for="SC" class="cat">SC</label>
            <input class="" type="radio" name="category" value="ST"/>
            <label for="ST" class="cat">ST</label>
        </div>

        <br/><br/>

        <label class="c">Religion:-</label>
            <input class="d" type="text" name="religion"/>
             &emsp;&emsp;&emsp;&emsp;
            <label class="cat">&emsp;Nationality:</label>
            <input class="d" type="text" name="nationality"/>

            <br/><br/>


               <label class="c">
               Person With Disability(PWD):-</label>
              <div class="c"><input class="d" type="radio" name="pwd" value="yes" />
               <label for="yes">YES</label> &emsp;&emsp;
               <input class="d" type="radio" name="pwd" value=" no"/>
               <label for="no">NO</label></div>
<br/><br/>

               <label class="c"> Program:-</label>
              <select class="d" name="course" placeholder="Choose your interested field">
              <option value="">Choose your interested field</option>
                   <option  value="b.tech">B.tech</option>
                   <option  value="m.tech">M.tech</option>
                   <option  value="m.tech">PHD</option>
                   <option  value="BBA">BBA</option>
                   <option  value="MBA">MBA</option>
                   <option  value="B.Sc.">B.Sc.</option>
                   <option  value="M.Sc.">M.Sc.</option>
                   <option  value="BCA">BCA</option>
                   <option  value="MCA">MCA</option>
                   </select>&nbsp;
                 <b style="color: blue;"> <button><a href="courses.php"target="_blank" >&emsp;Click Here</a></button>&nbsp;to know more about our courses.</b>

               <br/><br/>

               <label class="c">Permanent Address:-</label>
               <input class="d" type="text" name="p_add" size="60" placeholder="enter your permanent address"/> 

                &emsp;&emsp;&emsp;&emsp;

               <label class="cat">Select State:-</label>
               <select class="d" name="state">
               <option value="">Choose your State</option>
                   <option  value="Rajasthan">RAJASTHAN</option>
                   <option  value="up">U.P.</option>
                   <option  value="Goa">GOA</option>
                   <option  value="Maharashtra">MAHARASHTRA</option>
                   <option  value="M.P.">M.P.</option>
                   <option  value="Assam">ASSAM</option>
                   <option  value="Kerala"> KERALA</option>
                   <option  value="Tamilnadu">TAMILNADU</option>
                   <option  value="Odisha">ODISHA</option>
                   <option  value="Punjab">PUNJAB</option>
                   <option  value="Haryana">HARYANA</option>
                   <option  value="Bihar">BIHAR</option>
                   <option  value="Gujrat">GUJRAT</option>
                   <option  value="Sikkim">SIKKIM</option>
                   <option  value="West Bengal">West Bengal</option>
                   <option  value="Karnataka">KARNATAKA</option>
                   <option value="arunachal pradesh">ARUNACHAL PRADESH</option>
                   <option value="meghalaya">MEGHALAYA</option>
                   <option value="himachal pradesh ">HIMACHAL PRADESH</option>
               </select>
            
               <br/> <br/>

               <label class="c">Email Address:-</label>
               <input class="d" type="email" name="email" placeholder="enter a valid E-Mail" size="60" required /><b style="color: red;">*</b>
                 <br/><br/>
                 <label class="c">Mobile Number:-</label>
                 <input class="d" type="int" placeholder="enter valid No." name="contact" pattern="[0-9]{10}"required/>&emsp;
                 <b style="color:red">*(enter only 10 digits)</b><br/><br/>
                 <label class="c">Upload Files:-</label>
                 <b style="color:brown">Photograph</b>
                 <input style="color:brown" type="file"  name="photo" accept="image/png,image/jpg" required/>
                <b style="color:brown">Candidate's Signature</b>
                 <input  style="color:brown" type="file" name="sign" accept="image/png,image/jpg"/>
                 <span style="color:red">*(submit in PNG/JPG format)</span>
                 <br/>
                 <br/>
                 <label class="c">Upload Certificates:-</label>
                 <b style="color:brown">10th Marksheet</b>
                 <input style="color:brown" type="file" name="marksheet_10th" accept="application/pdf,application/vnd.ms-excel"" required/>
                <b style="color:brown">12th Marksheet</b>
                 <input  style="color:brown" type="file" name="marksheet_12th" accept="application/pdf,application/vnd.ms-excel""/>
                 <span style="color:red">*(submit in pdf format)</span>
                 <br/><br/>
                 <b class="c">Registration Fee:-</b>
                 <button style="background-color:rgb(0, 0, 0); border-radius:10px"> <a href="https://www.onlinesbi.com/sbicollect/icollecthome.htm"required>Pay Fee</a></button>
 
            <p style="color: darkred;">*Registration fee for General candidate:Rs.1000/- &nbsp;*Registration fee for SC/ST candidate:Rs.750/- </p>
                 <hr/>
<center>
   

   <button class="glow-on-hover" type="submit"> Submit</button>
  
  
</center>

 </form>
    </div>
 </body>
 </html>