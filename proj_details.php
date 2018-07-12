<html>
<head>
  <title>list</title>
  <link rel="stylesheet" href="mains.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
</head>

<body>
  <?php
    include('connect.php');
  
    $days=array();
    $s=array();
    $e=array();
    $projectid= $_POST['1'];
    $result = mysqli_query($conn,"SELECT * From project where Project_id='$projectid';");
  
    $i=1;
     $row=mysqli_fetch_assoc($result);
    while($i<=16){
     $days[]= $row[T.$i.Days];
     $s[]=$row[T.$i.s];
     $e[]=$row[T.$i.e];
     $i++;  
}

  ?>
$task = array("Obtaining approval of competent authority for inviting EOI for formulation of draft tender terms & conditions and technical specifications",

"Inviting expression of interest for formulation of draft by publishing in CPP Portal and websites etc","Formulation of draft tender terms and conditions and technical specifications by technical committee",
"Obtaining approval of competent authority for inviting e-tender for purchase","Vetting of tender terms & condtions from FP to CP,Delhi","Inviting e-tender withn a provision of pre-bid meeting","Pre-bid meeting & Opening of e-tender from the date of 
publishing of pre-bid meeting result","Examination of bids of participating firms by the purchase Committe","Technical Evaluation of the product of the documentarily 
qualified firms by the Technical Committee concerned","Opening of price bid by the purchase Committe of the firm declared technically qualified by Technical Committee on 
receipt of technical evaluation report","Forwarding of proposal of expenditure sanction to PHQ after declaration of L1 firm by the Purchase Committe","Obtaining 
of expenditure sanction from competent authority","Obtaining of security money from L1 firm after receipt of expenditure sanction from competent authority","
Obtaining of security money from th L1 firm after receipt of expenditure sanction from competent authority","Issue of supply order to L1 firm on receipt 
of Security Money","Completion of Project/Supply of equipment by the firm","Technical Inspection for acceptance of the project/equipments by the technical committee after installation/receipt of supply",
"Releasing of payment to the firm on receipt of technical committee acceptance report" );

  <table class="table table-striped">
    <tr>
      <th>Task</th>
      <th>Number of Days</th>
      <th>Start Date</th>
      <th>End Date</th>
    </tr>
<?php for($counter = 0;$counter<16;$counter++){ ?>
    <tr>
      <td><?="$task[$counter]" ?></td>
      <td><?="$days[$counter]" ?></td>
      <td><?="$s[$counter]" ?></td>
      <td><?="$e[$counter]" ?></td>
    </tr>
 <?php }?>
  </table>

</body>
