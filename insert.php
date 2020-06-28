<html>
<body>

<?php
$out=$_GET['txt'];
$myJSON = json_decode($out);
$dept=$myJSON->dept;
$email=$myJSON->email;
$phone=$myJSON->phone;
$college=$myJSON->college;
$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "kec";
 $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
$sql="insert into events(department,email,phone,college)values('$dept','$email',$phone,'$college')";
if ($conn->query($sql) === TRUE) {
  $arr = array('value' => "yes");
		echo json_encode($arr);
		die;
} else {
  $arr = array('value' => "no");
		echo json_encode($arr);
		die;
}
?>


</body>
</html>