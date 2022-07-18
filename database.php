 <!-- php -->
 <?php 
$succesAlert=false;
$errorAlert=false;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $uname=$_POST['uname'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  


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
$sql="CREATE TABLE `bt20cse167`.`bt20cse167_data` ( `sno` INT NOT NULL AUTO_INCREMENT ,  `first name` VARCHAR(20) NOT NULL ,  `last name` VARCHAR(20) NOT NULL ,  `username` VARCHAR(20) NOT NULL ,  `email` VARCHAR(30) NOT NULL ,  `password` VARCHAR(15) NOT NULL ,  `timestamp` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,    PRIMARY KEY  (`sno`)) ENGINE = InnoDB";

$result=mysqli_query($conn,$sql);


//*******inserting data */
$sql="INSERT INTO `bt20cse167_data` ( `first name`, `last name`, `username`, `email`, `password`, `timestamp`) VALUES ( '$fname', '$lname', '$uname', '$email', '$password', current_timestamp()) ";
$result=mysqli_query($conn,$sql);

if($result){
  $succesAlert=true;
}
else{
   $errorAlert="Something went wrong!!! please try again";
}

}
?>