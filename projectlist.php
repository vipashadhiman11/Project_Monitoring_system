<html>
<head>
  <title>list</title>
  <link href="https://fonts.googleapis.com/css?family=Cagliostro" rel="stylesheet"> 
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
</head>
<?php

include('connect.php');

$stat=$_POST['stat'];

$result = mysqli_query($conn,"SELECT * From project where status='$stat';");
$rows = mysqli_num_rows($result);
$column = array();
while($row = mysqli_fetch_array($result)){
    $column[] = $row['Project'];
//Edited - added semicolon at the End of line.1st and 4th(prev) line

}
// echo mysqli_error($conn);

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
<div class="col-sm-1"></div>
<div class="col-sm-1"></div>
<div class="col-sm-8">
  <div class="panel panel-success">
      <div class="panel-heading">Projects</div>
      <?php for($counter = 0;$counter<$rows;$counter++){ ?>
      <a href="#" class="panel-body"><?="$column[$counter]"?></a>
      <?php }?>

  </div>
</div>
</body>