<!DOCTYPE html>
<html lang="en">
<head>
	<title>STATUS</title>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <link rel="stylesheet" href="style.css">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<?php
include('connect.php');
$rows0=0;
$rows1=0;
$rows2=0;

$result0 = mysqli_query($conn,"SELECT * From project where status='0';");
$rows0 = mysqli_num_rows($result0);
$result1 = mysqli_query($conn,"SELECT * From project where status='1';");
$rows1 = mysqli_num_rows($result1);
$result2 = mysqli_query($conn,"SELECT * From project where status='2';");
$rows2 = mysqli_num_rows($result2);
?>


<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <img style="height:40px;margin:5px;" class="align-self-center mr-3" src="https://seeklogo.com/images/D/delhi-police-logo-C454A2A54E-seeklogo.com.png"/>
    </div>
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Progress Of Projects</a>
    </div>
    <a href="project.php" class="btn btn-danger navbar-btn" style="float:right;">PROJECT LIST</a>
  </div>
</nav>

  <center><h2  style="color:#d43f3a;">Status of Projects</h2></center>


<div class="col-sm-1"></div>
<div class="col-sm-1"></div>
<div class="col-sm-1"></div>
<div class="col-sm-6">
<h3><center></center></h3>
<form action="projectlist.php" method="post">
<center><button name="stat" style="width:100%;font-size:20px;" class="btn btn-success" type="submit" value="2">Completed Projects<h1><?="$rows2"?></h1></button><br><br>
<button name="stat" style="width:100%;font-size:20px;" type="submit"class="btn btn-danger" value="1">InProgress Projects<h1><?="$rows1"?></h1></button><br><br>
<button name="stat" style="width:100%;font-size:20px;" type="submit" class="btn btn-warning" value="0">Proposed Projects<h1><?="$rows0"?></h1></button><br/></center>
</form>

<!--button type="button Completed-button" id="button1" >Completed</button><br/>
//<button type="button Inprogress-button" id="button2">In Progress</button><br/>
//<button type="button Proposed-button" id="button3">Proposed</button><br/>
//</div>
-->
</div>
</body>
</html>