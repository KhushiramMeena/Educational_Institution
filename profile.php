<?php 
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
<link href="assets/img/logo1.png" rel="icon">
  <link href="assets/img/logo1.png" rel="apple-touch-icon">
<title>Student-profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="assets/css/profile.css" rel="stylesheet"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <div class="header">
    
    <h2 style="color: whitesmoke;">Student Profile</h2>
    
  </div>


  <div class="row">
    <div class="column side">
      <!-- <h2>Side</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p> -->
<br/><br/>


      <div>
       
        <input type="checkbox" name="open" id="open" >
        
        <label for="open" class="open" style="border-radius: 10px;">
        
           <i  style="border-radius: 10px; border:3px solid blue;"> <span style="font-size:20px;"> Click me</span></i>
        </label>
      
    
        <div class="menu">
            <div class="logo">
                <a href="#">
                </a>
            </div>
          <ul>
              <li>
                  <a href="index.php">
                      <span><i class="fas fa-home"></i></span>
                      Home
                  </a>
              </li>
              <li>
                  <a href="courses.php">
                      <span><i class="fas fa-address-card"></i></span>
                      Courses
                  </a>
              </li>
              <li>
                  <a href="about.php">
                      <span><i class="fas fa-cog"></i></span>
                      About us
                  </a>
              </li>
              <li>
                  <a href="contact.php">
                      <span><i class="fas fa-address-book"></i></span>
                      Contact us
                  </a>
              </li>
              <li>
                  <a href="logout.php" style="color: red;">
                      <span><i class="fas fa-comments-alt-dollar"></i></span>
                      Logout
                  </a>
              </li>
          </ul>
        </div>
      </div>
      <!-- class="alert alert-success" role="alert" -->
    </div>

    <div >
  <h4>Active user :<a style="color: green;">🟢</a><?php echo $_SESSION['username'] ?> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  <a href="logout.php" style="background:black;padding:2px;border-radius:2px;border: 1px solid blue;color:blanchedalmond">Logout</a>

  </h4>
  <p>Hello <?php echo $_SESSION['username'] ?>! Now you are logged in. 

</p>
  <hr style="color: blue;"/>
</div>


    <div class="column middle">
   <div class="card"> 
        <img src="assets/img/profile.png" alt="loading..." style="width:100%">
        <h1><?php echo $_SESSION['username'] ?></h1>
        <p class="title">From CSE Branch</p>
        <p>IIIT Nagpur</p>
        
      </div>
      
      


<!-- table -->
<table id="customers">
  <tr>
     <th>Student</th>
     <th>Basic</th>
     <th>Details</th>
  </tr>
  <tr>
    <td>Your username</td>
    <td><?php echo $_SESSION['username'] ?></td>
    <td>-</td>
  </tr>
  <tr>
    <td>Enrollment No.</td>
    <td>BT20CSE_<?php echo $_SESSION['username'] ?></td>
    <td>-</td>
  </tr>
  <tr>
    <td>Branch</td>
    <td>CSE</td>
    <td>-</td>
  </tr>
  <tr>
    <td>Course</td>
    <td>B.Tech</td>
    <td>-</td>
  </tr>
  <tr>
    <td>Current Semester</td>
    <td>4<sup>th</sup> sem</td>
    <td>-</td>
  </tr>
  <tr>
    <td>Institute Name</td>
    <td>EDU-HUB(IIITN)</td>
    <td>-</td>
  </tr>
  <tr>
    <td>Institute Location</td>
    <td>Maharashtra</td>
    <td>-</td>
  </tr>
  <tr>
  <th></th>
     <th></th>
     <th></th>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Assignment Given by</td>
    <td>Pooja Ma'am</td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
 
</table>


<!-- get in touch -->

<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">

<!-- firstly,i have converted normal font into stylish font .... -->
    <center><h6 class="animate-charcter"> ✿.｡.:* ☆:**:. Attendance Status .:**:.☆*.:｡.✿ </h6></center>
    </div>
  </div>
  </div>


<!-- checkbox -->
<Center >

<script>
function Option1() {
  alert("Your attendance has been recorded !!!");
}

function Option2() {
  alert("OK! your response has been recorded !!!");
}
</script>



<div class="wrapper">
  <input type="radio" name="select" id="option-1" checked>
  <input type="radio" name="select" id="option-2">

       <button onclick="Option1()">Present </button>
      &nbsp;
      <button onclick="Option2()">Absent</button> 
  
 </div>
</Center>


    </div>

    <div class="column side">
      <h2 style="color: darkred;">Enrolled courses</h2>
     <hr/>

<div class="SE_outer" >

<div class="SE_button">
  <div class="text">
    <h2> Software Engineering</h2>
  </div>
</div>
</div>

<div class="IT_outer" >
  <div class="IT_button">
    <div class="text">
      <h2>IT-Workshop-2</h2>
    </div>
  </div>
  </div>

  <div class="DAA_outer" >
  <div class="DAA_button">
      <div class="text">
        <h2>Design and Analysis of Algorithm</h2>
      </div>
    </div>
    </div>

    <div class="OS_outer" >
      <div class="OS_button">
        <div class="text">
          <h2>Operating System</h2>
        </div>
      </div>
      </div>
      
      <div style=" background-color:white;width: 300px;border: 2px solid white;padding: 40px 10px 10px 80px;margin:0px 500px 0px 0px;" >
      
     <b style="color:blue;">Assignment Submission:</b><br/><br/>
     <p style="color: blue;">submit your itw Assignment</p>
     
     <input type="file" id="test" name="test" accept=".pdf,.doc"/>
      
      </div>
    </div>
  </div>

  <div class="footer">
   <h2 style="color: whitesmoke;"class="animate-charcter">ⒺⒹⓊ ⒽⓊⒷ ⒾⒾⒾⓉⓃ</h2>
  </div>

</body>

</html>