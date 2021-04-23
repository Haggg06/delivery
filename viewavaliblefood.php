<!doctype html>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>delivery</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    	#hi{
    		list-style: none;
    		box-sizing: border-box;
	        font-family: sans-serif;
	        text-align: right;
    	  }
        ul li{
            padding:12px 12px;
        	border-style: solid;
        	border-radius: 50px;
        	display: inline-block; 
	        margin: 10px 10px;
	        
        }
    </style>
</head>
<body>
<?php session_start();
  ?>
  <?php if($_SESSION['username']){?>
  <ul id="hi">
  <li>
    <a href="userpage.php"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg>home</a> 
   </li>
   <li>
    <a href="viewavaliblefood.php"> view menu list</a> 
</li>
    <li>
    <a href="search.php">
       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-zoom-in" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
  <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
  <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
</svg>
    search</a>
</li>
<li>
    <a href="currentorder.php"> view my order</a> </li>

<li>
     <form method="post" action="logout.php">
           <button type="submit" name="userlogout">
  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg>
           logout</button>
       </form>
       </li>
  </ul>
  <?php 

$conn= new mysqli('localhost','root','','delivery')or die(mysqli_error($conn));
    $result=$conn->query("SELECT menuid,menuname,price,hotelname from managemenu");
?>     
   <table class="table">
     <tr>
        <th>menuname</th>
        <th>price</th>
        <th>hotelname</th>
        <th>option</th>

       <?php 
              while ($row=$result->fetch_assoc()) { ?>
               <tr>
                 <td><?php echo $row['menuname']; ?></td>
                 <td><?php echo $row['price']; ?></td>
                 <td><?php echo $row['hotelname']; ?></td>
                 <td> <a href="fooddetail.php?detial=<?php echo $row['menuid'];?>" class="btn btn-primary">detial</a></td>

           
      <?php } ?>
     </tr>
   </table>
  <p>
   <ul>
   <li> <img src="piza.jpg" width="300px" height="200px" class="border"> price: 150br</img></li>
   <li> <img src="shekila xibs.png" width="300px" height="200px" class="border"> price 300br</img></li>
   <li> <img src="cetfo.png" width="300px" height="200px" class="border"> price 334br </img></li>
   <li> <img src="pizza.jpg" width="300px" height="200px" class="border"> price 120br </img></li>
   <li> <img src="burger.jpg" width="300px" height="200px" class="border"> price 300br </img></li>
   <li> <img src="bayeayinet.png" width="300px" height="200px" class="border"> price 60br </img></li>
   <li> <img src="doro.jpg" width="300px" height="200px" class="border"> price 458br </img></li>
   <li> <img src="firfir.jpg" width="300px" height="200px" class="border"> price 90br </img></li>
   
  </ul>
  </p>


  <?php
       
    }
?>

</body>
</html>
