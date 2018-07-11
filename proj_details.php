<html>
<head>
  <title>list</title>
  <link rel="stylesheet" href="mains.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
</head>

<body>
  <?php
    include('connect.php');
    // $days= $_POST['semi'];
    // $Program = $_POST['NameOfProgram'];
    // $courseName = $_POST['coursename'];
    // $enrollno=$_POST['enrollno'];
    $days=array();
    $s=array();
    $e=array();
    $projectid= $_POST['1'];
    $result = mysqli_query($conn,"SELECT * From project where Project_id='$projectid';");
    // $rows = mysqli_fetch_assoc($result);
    // $i=1;
    // $str='T'.$i.'s';
    // echo $str;
    // echo $rows[T.$i.s];
    $i=1;
     $row=mysqli_fetch_assoc($result);
    while($i<=16){
     $days[]= $row[T.$i.Days];
     $s[]=$row[T.$i.s];
     $e[]=$row[T.$i.e];
     $i++;  
}
// for($a=0;$a<16;$a++){
// echo $days[$a];
// echo $s[$a];
// echo $e[$a];
// }
  ?>


  <table class="table table-striped">
    <tr>
      <th>Task</th>
      <th>Number of Days</th>
      <th>Start Date</th>
      <th>End Date</th>
    </tr>
<?php for($counter = 0;$counter<16;$counter++){ ?>
    <tr>
      <td><?="$counter" ?></td>
      <td><?="$days[$counter]" ?></td>
      <td><?="$s[$counter]" ?></td>
      <td><?="$e[$counter]" ?></td>
    </tr>
 <?php }?>
  </table>

</body>