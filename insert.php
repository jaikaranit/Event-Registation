<html>
<body>

<?php
$out=$_GET['txt'];  //get parameter using GET method
$myJSON = json_decode($out);  //decoding array to json 
$dept=$myJSON->dept;
$email=$myJSON->email;
$phone=$myJSON->phone;
$college=$myJSON->college;
$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "kec";
 $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);  //connecting to database(mysql)
$sql="insert into events(department,email,phone,college)values('$dept','$email',$phone,'$college')";  //insert a record using querie(mysqli)
if ($conn->query($sql) === TRUE) {  //execution of querie using condition
  $arr = array('value' => "yes");
		echo json_encode($arr);  //returns yes
		die;  //end of the file
} else {
  $arr = array('value' => "no");
		echo json_encode($arr);  //returns no
		die;  //end of the file
}
?>


</body>
</html>
