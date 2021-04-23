<?php
session_start();
$conn = new mysqli('localhost','root','','delivery')or die(mysqli_error($conn));
if (isset($_POST['login'])) {
	  $username=$_POST['username'];
      $password=$_POST['password'];


 $sql="SELECT *from customer where username='$username' and password='$password'";
	
	 $run=$conn->query($sql);
   if($run->num_rows>0){
       $row=$run->fetch_assoc();
    $_SESSION['username']=$username;
	header("location:userpage.php");

       }
    else{
	header("location:login.php?error=wrong username or password");
}

}
if(isset($_POST['submit'])){
	$name=$_POST['fname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$location=$_POST['location'];
	$conn->query("INSERT INTO customer(full_name,username,password,location)values('$name','$username','$password','$location')") or die($conn->error);
	header("location:userform.html");
}