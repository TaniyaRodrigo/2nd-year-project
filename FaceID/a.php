<?php
$mysqli=new mysqli('localhost','root','','faceid') or die(mysqli_error($mysqli));
?>
<!DOCTYPE html>
<html lang="en">
<head >
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Admin Login</title>
<link rel="nofollow" href=''>
<link rel="nofollow" href="https://justpaste.it/redirect/5tx2h/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="nofollow" type="text/css" href=''>
<link rel="nofollow" href=''>




</head>


<body id="page-top">
<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
<div class="container"><a class="navbar-brand" href=''>FaceID</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
<div class="collapse navbar-collapse" style="position: fixed; 250px;" id="navbarResponsive">
<ul class="nav navbar-nav ml-auto text-uppercase">

<li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href=''>Missing Person Database</a></li>
<li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href='' >Search Details</a></li>

</li>
</ul>
</div>
</div>
</nav>

<h2 style="color:black; text-align: center; padding-top: 10%;">Search</h2>


<br/><br/>
<br/><br/>
<div class="table1" align="center" >
</div>

<form method="post">
<center> <select name="province">
<option></option>
<
<?php
$sql = "SELECT province FROM unidentifiedbodies";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
?>
<option name="province" value="<?php echo $row["province"];?>"> <?php echo $row["province"]. "<br>";?></option>
<?php
}
}
?>
</select>
<select name="policearea">
<option></option>
<
<?php
$sql = "SELECT policearea FROM unidentifiedbodies";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
?>
<option name="policearea" value="<?php echo $row["policearea"];?>"> <?php echo $row["policearea"]. "<br>";?></option>
<?php
}
}
?>
</select>
<button name="submit" value="Search">Search</button>
</form>
</center>



<div class=" row table1 mt-5" align="center">


<br/><br/>
<br/><br/>
<div class="table1" align="left" >
</div>





<div class=" row table1 mt-5" align="center">


 

<table class="table1 table-dark table-striped" style="border:1px solid black;margin-left: auto;margin-right: auto;">
<thead>
<tr>
<th style="padding:10px">SR_No</th>
<th style="padding:10px">Date</th>
<th style="padding:10px">Police_Division</th>
<th style="padding:10px">Province</th>
</tr>
</thead>

 



<?php

if(isset($_POST['submit'])){
$province= $_POST['province'];
$policarea= $_POST['policearea'];
echo $policarea;
echo $province;
$select = "SELECT * FROM unidentifiedbodies WHERE province = '$province' and policearea='$policarea'";



$select_result = mysqli_query($mysqli,$select);
while($rows = mysqli_fetch_assoc($select_result)){
echo " <tr>
<td style='padding:10px'>".$rows['srno']."</td>
<td style='padding:10px'>".$rows['date']."</td>
<td style='padding:10px'>".$rows['policearea']."</td>
<td style='padding:10px'>".$rows['province']."</td>
</tr>
";
}
}


?>
</table>

</div>




<!-- rgtgrt-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="assets/js/agency.js"></script>
</body>
</html>

