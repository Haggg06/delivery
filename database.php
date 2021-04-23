<?php
session_start();
$username=$_SESSION['username'];
$conn = new mysqli('localhost','root','','delivery')or die(mysqli_error($conn));
$menuid=0;
$update=false;
$menuname='';
$price='';
$hotelname='';

if (isset($_POST['save'])) {
	$menuname=$_POST['menuname'];
	$price=$_POST['price'];
	$hotelname=$_POST['hotelname'];
	$conn->query("INSERT INTO managemenu(menuname,price,hotelname,hotelusername)values('$menuname','$price','$hotelname','$username')") or die($conn->error);
	$_SESSION['send']="record has been added";
	$_SESSION['types']="info";
	header("location:manage_menu.php");
	
}
if (isset($_GET['delete'])) {
	$menuid=$_GET['delete'];
	echo $menuid;
	$conn->query("DELETE from managemenu where menuid='$menuid'");
	
	$_SESSION['send']="record has been deleted";
	$_SESSION['types']="danger";
	header("location:manage_menu.php");
}
if (isset($_GET['edit'])) {
	$menuid=$_GET['edit'];
	$update=true;
    $result=$conn->query("SELECT *from managemenu where menuid='$menuid' ");
    if(count($result)==1){
    	$row=$result->fetch_array();
    	$menuname=$row['menuname'];
    	$price=$row['price'];
    	$hotelname=$row['hotelname'];
    }
}
if (isset($_POST['update'])) {
	$menuid=$_POST['menuid'];
	$menuname=$_POST['menuname'];
	$price=$_POST['price'];
	$hotelname=$_POST['hotelname'];

	$conn->query("UPDATE managemenu SET menuname='$menuname',price='$price',hotelname='$hotelname'  where menuid='$menuid'") or die($conn->error);
	$_SESSION['send']="record has been updated";
	$_SESSION['types']="success";
	header("location:manage_menu.php");
}
?>

