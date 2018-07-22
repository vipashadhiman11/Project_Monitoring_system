<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Cagliostro" rel="stylesheet"> 

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
/*
  .inner-button{
    width:pare;
  }
*/

  </style>



</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <img style="height:40px;margin:5px;" class="align-self-center mr-3" src="https://seeklogo.com/images/D/delhi-police-logo-C454A2A54E-seeklogo.com.png"/>
    </div>
    <ul class="nav navbar-nav">
       <a class="navbar-brand" href="#">Project Tracking System</a>

    </ul>
    <a href="status.php" class="btn btn-danger navbar-btn" style="float:right;">STATUS</a>
  </div>
</nav>
<div class="col-sm-1"></div>
<div class="col-sm-1"></div>
<div class="col-sm-1"></div>
<div class="col-sm-6">

<div  class="media">
  <center><h2  style="color:#d43f3a;">DEPARTMENTS</h2></center>
</div>

<form action="proj_details.php" method = "post">

  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4  class="text-center">
          <a data-toggle="collapse" href="#CrimeBranch" >Crime Branch</a>
        </h4>
      </div>
      <div id="CrimeBranch" class="panel-collapse collapse">
        <ul class="list-group">
          <li class="list-group-item"><button type="submit" name="id" class="btn-link" value="1">Facial Recognition system</button></li>
          <li class="list-group-item"><button type="submit" name="id" class="btn-link" value="2">Establishment of cyber cell of Crime branch</button></li>
          <li class="list-group-item"><button type="submit" name="id" class="btn-link" value="3">Reconstructing crime scene Management using crime based technique</button></li>
          <li class="list-group-item"><button type="submit" name="id" class="btn-link" value="4">CCTNS Project</button></li>

        </ul>
      </div>
    </div>
  </div>
   <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="text-center">
          <a data-toggle="collapse" href="#CyberCell">Cyber Cell</a>
        </h4>
      </div>
      <div id="CyberCell" class="panel-collapse collapse">
        <ul class="list-group">
          <li class="list-group-item"><button type="submit" name="id" class="btn-link" value="5">SPECIAL CELL - Safe City Project (AI Based CCTV surveillance)</button></li>
          <li class="list-group-item"><button type="submit" name="id" class="btn-link" value="6">Establishment of OSINT lab</button></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="text-center">
          <a data-toggle="collapse"  href="#ITCellPHQ">IT Cell PHQ</a>
        </h4>
      </div>
      <div id="ITCellPHQ" class="panel-collapse collapse">
        <ul class="list-group">
          <li class="list-group-item "><button type="submit" name="id" class="btn-link" value="7">Integration of all apps using Eccentrics services (one Touch apps)</button></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="text-center">
          <a data-toggle="collapse" href="#OperationsCommunication">Operations and Communication</a>
        </h4>
      </div>
      <div id="OperationsCommunication" class="panel-collapse collapse">
        <ul class="list-group">
          <li class="list-group-item"><button type="submit" name="id" class="btn-link" value="8">CCTV(NPR)</button></li>
          <li class="list-group-item"><button type="submit" name="id" class="btn-link" value="9">Expansion of Cyber Highway</button></li>
          <li class="list-group-item"><button type="submit" name="id" class="btn-link" value="10">Replacement of existing UHF Digital Trunked Radio System(DTRS)</button></li>
          <li class="list-group-item"><button type="submit" name="id" class="btn-link" value="11">Purchase and Fabrication of Mobile Control Room (MCR)</button></li>
          <li class="list-group-item"><button type="submit" name="id" class="btn-link" value="12">Establishment of NERS-112 at integrated complex operation and communication Shalimar Bagh</button></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="text-center">
          <a data-toggle="collapse" href="#PCR">PCR</a>
        </h4>
      </div>
      <div id="PCR" class="panel-collapse collapse">
        <ul class="list-group">
          <li class="list-group-item"><button type="submit" name="id" class="btn-link" value="13">Geo-Fencing of Patrolling Bike(GPS based Vehicle Tracking System)</button></li>
        </ul>
      </div>
    </div>
  </div>
  
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="text-center">
          <a data-toggle="collapse" href="#PTCPTS">PTC/PTS</a>
        </h4>
      </div>
      <div id="PTCPTS" class="panel-collapse collapse">
        <ul class="list-group">
          <li class="list-group-item"><button type="submit" name="id" class="btn-link" value="14">Purchase/Installation of equipments of integrated virtual Media collaboration system(IVMCs)</button></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="text-center">
          <a data-toggle="collapse" href="#PTSDwarka">PTS Dwarka</a>
        </h4>
      </div>
      <div id="PTSDwarka" class="panel-collapse collapse">
        <ul class="list-group">
          <li class="list-group-item"><button type="submit" name="id" class="btn-link" value="15">Purchase of items/equipments For installations and commissioning Of mini FSL</button></li>
          <li class="list-group-item"><button type="submit" name="id" class="btn-link" value="16">Capacity Building (e-LMS)</button></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="text-center">
          <a data-toggle="collapse" href="#TechCell">Tech Cell</a>
        </h4>
      </div>
      <div id="TechCell" class="panel-collapse collapse">
        <ul class="list-group">
          <li class="list-group-item"><button type="submit" name="id" class="btn-link" value="17">Capacity Building (e-LMS)</button></li>
        </ul>
      </div>    
    </div>
  </div>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="text-center">
          <a data-toggle="collapse" href="#Traffic">Traffic</a>
        </h4>
      </div>
      <div id="Traffic" class="panel-collapse collapse">
        <ul class="list-group">
          <li class="list-group-item"><button type="submit" name="id" class="btn-link" value="18">Intelligent Traffic Management System (ITMS)</button></li>
          <li class="list-group-item"><button type="submit" name="id" class="btn-link" value="19">Procurement of Disaster Management Vehicle(two)</button></li>
          <li class="list-group-item"><button type="submit" name="id" class="btn-link" value="20">Born Worn Cameras(800)</button></li>
          <li class="list-group-item"><button type="submit" name="id" class="btn-link" value="21">Born Worn Cameras(1200)</button></li>
          <li class="list-group-item"><button type="submit" name="id" class="btn-link" value="22">Gantry/Cantilever mounted Automatic over speed violation Detection system to cover 100 Locations</button></li>
          <li class="list-group-item"><button type="submit" name="id" class="btn-link" value="23">Red light and speed violation Detection system for 24 Intersection (96 set of systems)</button></li>
          <li class="list-group-item"><button type="submit" name="id" class="btn-link" value="24">Variable message signboards</button></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="text-center">
          <a data-toggle="collapse" href="#WSAM">WSAM</a>
        </h4>
      </div>
      <div id="WSAM" class="panel-collapse collapse">
        <ul class="list-group">
          <li class="list-group-item"><button type="submit" name="id" class="btn-link" value="25">E-beat book and e-sathi</button></li>
          <li class="list-group-item"><button type="submit" name="id" class="btn-link" value="26">Police vehicle navigation system</button></li>
          <li class="list-group-item"><button type="submit" name="id" class="btn-link" value="27">Indegenious mapping system for Delhi Police (Traffic Management & e-beat book)</button></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="text-center">
          <a data-toggle="collapse" href="#ShahdaraDistrict">Shahdara District</a>
        </h4>
      </div>
      <div id="ShahdaraDistrict" class="panel-collapse collapse">
        <ul class="list-group">
           <li class="list-group-item"><button type="submit" name="id" class="btn-link" value="28">E-Malkhana in all the police Stations of Shahdara e-Malkhana Has been started</button></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="text-center">
          <a data-toggle="collapse" href="#PL">P and L</a>
        </h4>
      </div>
      <div id="PL" class="panel-collapse collapse">
        <ul class="list-group">
          <li class="list-group-item"><button type="submit" name="id" class="btn-link" value="29">installation of 2727 CCTV cameras Systems at six areas i.e. 5 in New Delhi district and 01 in Central district</button></li>
        </ul>
      </div>
    </div>
  </div>
</div>

</form>

<div class="col-sm-1"></div>
<div class="col-sm-1"></div>
<div class="col-sm-1"></div>


</body>
</html>
