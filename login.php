<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>delivary</title>
	 <!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    body{
	background-color: #1690A7;
	background-image: url(pizza.jpg);
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
       }    
   .form{
	       margin-left: 35%;
	       
	       
       }
   .login{
   	   height: 30px;
   	   border-radius: 5px;
   }
   #error{
   	margin-right: 300px;
   }
   </style>
</head>

<body>
	<div class="container center_div justify-content-center">
      <form method="post" action="userdatabase.php" class="form">
      	 <?php
           if(isset($_GET['error'])){?>
           <p class="alert alert-danger" id="error"><?php echo $_GET['error']; ?></p>
         <?php } ?>
      	 <h1 >CUSTOMER LOGIN</h1>
    	<p><input type="text" name="username" placeholder="username" class="login"></p>
    	<p><input type="password" class="login" name="password" placeholder="password"></p>
    	<p><input type="submit" class="btn btn-primary" name="login" value="login"> 
    	<a href="userform.html" class="btn btn-success" name="create"> create account</a></p>
      </form>
    </div>
</body>
</html>