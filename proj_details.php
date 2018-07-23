<html>
<head>
  <title>list</title>
  <link href="https://fonts.googleapis.com/css?family=Cagliostro" rel="stylesheet"> 
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
</head>

<body>
  <?php
    include('connect.php');

    function dateDiff($date1, $date2) 
      {
        $date1_ts = strtotime($date1);
        $date2_ts = strtotime($date2);
        $diff = $date2_ts - $date1_ts;
        return round($diff / 86400);
      }

    $projectid= $_POST['id'];
    // echo $projectid;
    // $Program = $_POST['NameOfProgram'];
    // $courseName = $_POST['coursename'];
    // $enrollno=$_POST['enrollno'];
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
    $days=array();
    $s=array();
    $e=array();
    
    $result = mysqli_query($conn,"SELECT * From project where Project_id='$projectid';");
    // $rows = mysqli_fetch_assoc($result);
    // $i=1;
    // $str='T'.$i.'s';
    // echo $str;
    // echo $rows[T.$i.s];
    
    $i=1;
    $array_count=array();
     $row=mysqli_fetch_assoc($result);
    $pname=$row['Project'];
    while($i<=16){
     $days[]= $row[T.$i.Days];
     $s[]=$row[T.$i.s];
     $e[]=$row[T.$i.e];
     //echo $array_count[$i-1]->format("%R%a days");
     //echo $e[$i-1];
     $i++;  
}
for($a=0;$a<16;$a++){
// echo $days[$a];
// echo $s[$a];
// echo $e[$a];
//   $datediff = $s[$a]-$e[$a];

 //difference between two dates
$dateDiff= dateDiff($s[$a], $e[$a]);
$array_count[$a]=abs($dateDiff);

 // $array_count[$a]= abs($s[$a]-$e[$a]);
  
// $array_count[$a]=date_diff($s[$a],$e[$a],absolute);
// echo $array_count[$a];
}
    
    
  //$array_count =array(1,5,7,2,2,1,2,2,15,1,11,4,5,2,1,3);



  $viewer = json_encode($array_count,JSON_NUMERIC_CHECK);

        /* Getting demo_click table data */
    $click = mysqli_fetch_all($click,MYSQLI_ASSOC);
    $click = json_encode(array_column($click, 'count'),JSON_NUMERIC_CHECK);
      



?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <img style="height:40px;margin:5px;" class="align-self-center mr-3" src="https://seeklogo.com/images/D/delhi-police-logo-C454A2A54E-seeklogo.com.png"/>
    </div>
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?="$pname"?></a>
    </div>
    <a href="edit.html" class="btn btn-danger navbar-btn" style="float:right;">EDIT</a>
  </div>
</nav>

<script type="text/javascript">


$(function () { 


    var data_click = <?php echo $click; ?>;
    var data_viewer = <?php echo $viewer; ?>;


    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Project Details '
        },
        xAxis: {
            categories: ['Obtaining approval of competent authority for inviting EOI for formulation of draft tender terms & conditions and technical specifications','Inviting expression of interest for formulation of draft by publishing in CPP Portal and websites etc','Formulation of draft tender terms and conditions and technical specifications by technical committee', 'Obtaining approval of competent authority for inviting e-tender for purchase','Vetting of tender terms & condtions from FP to CP,Delhi','Inviting e-tender withn a provision of pre-bid meeting','Pre-bid meeting & Opening of e-tender from the date of publishing of pre-bid meeting result','Examination of bids of participating firms by the purchase Committe','Technical Evaluation of the product of the documentarily qualified firms by the Technical Committee concerned','1Opening of price bid by the purchase Committe of the firm declared technically qualified by Technical Committee on receipt of technical evaluation report','Forwarding of proposal of expenditure sanction to PHQ after declaration of L1 firm by the Purchase Committe','Obtaining of expenditure sanction from competent authority','Obtaining of security money from L1 firm after receipt of expenditure sanction from competent authority',' Obtaining of security money from th L1 firm after receipt of expenditure sanction from competent authority','Issue of supply order to L1 firm on receipt of Security Money','Completion of Project/Supply of equipment by the firm']
        },
        yAxis: {
            title: {
                text: 'Number of Days (in which the project is completed)'
            }
        },
        series: [ {
            name: 'Days',            data: data_viewer
        }]
    });
});



</script>


<div class="container">
  <br/>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Progress Report of <?="$pname"?></div>
                <div class="panel-body">
                    <div id="container"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-1"></div>

<div class="col-sm-10">
  <table class="table table-striped">
    <tr>
      <th>Task</th>
      <th>Number of Days(expected)</th>
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
</div>
</body>
