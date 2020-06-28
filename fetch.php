
<?php


$a=$_POST["dept"];  //getting department as parameter
$dbhost = "localhost";  //hostname as variable
 $dbuser = "root";   //user name as variable
 $dbpass = "";   //password
 $db = "kec";   //database name as vaiable
 $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);   //connecting to database

$query1="select * from events where department='$a'";  //mysql querie for fetching data from db 

$qt1=mysqli_query( $conn, $query1);   //collecting all data

?>
<table align="center" border="1" >
<?php echo "
<tr>
<th>department</th>
<th>email</th>
<th>phone</th>
<th>college</th>
</tr>";
?>

<?php

while($row=mysqli_fetch_array($qt1)){

	echo "<tr><td>".$row["department"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["college"]."</td></tr>";   //printing all data as tables
}
?></table>

                        
