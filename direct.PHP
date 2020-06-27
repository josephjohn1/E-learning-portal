<?php
include('../insert.php');
$result=mysql_query("select * from books");
$l=mysql_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WHO?</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	
	
	
	<style>

.contact
{
font-size:23px;
border-style:solid;
border-width:3px;
width:15%;
border-color:#ffffff;
background-color:transparent;
padding:10px;
cursor:pointer;
transition: all ease-in-out 0.4s;
}
.contact:hover
{
font-size:23px;
border-style:hidden;
border-width:3px;
width:50%;
border-color:#999999;
background-color:#FFFFFF;
padding:10px;
}
.glyphicon.glyphicon-home {
    font-size: 30px;
}

.style1 {font-size: 24px}
    .style2 {
	font-family: "Courier New", Courier, monospace;
	font-weight: bold;
}
    </style>

</head>

<body>
 <div class="thumbnail style1"><br>
   <div align="center">
     <h2>REGISTER WITH US</h2>
   </div>
   <br>
 </div>
<div>
<br><br><br><br><br>
   <center>
   
<a href="../PublisherDetails/publisheregister.php"  style="text-decoration:none"><div class="contact">PUBLISHER</div></a>
</center>
<br><br><br><br>
<center>
<a href="../UserDetails/userregister.php"  style="text-decoration:none"><div class="contact">USER</div></a>
</center>
<br><br><br><br><br>
</div>
<center>
<a href="../Home/index2.php"><span class="glyphicon glyphicon-home"></span></a>
<br>
<footer> <a href="../Home/index2.php" style="text-decoration:none">AG-BOOKMART </a></footer>
</center>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>