<html >
<head>
    <meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="./css/nextuser.css">
    <title></title>
</head>
<body>
<div class="main">
	
	<div class="top">
		<div class="top1">
			<div class="one"><h1>Kongu Engineering College</h1></div>
			<div class="two"><p>Perundurai,Erode</p></div>
		</div>
	</div>
</div>  
<div class="box">
<?php
 $email = $_POST['email'];
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "kec";
 $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
 $sql="select * from events where email='$email'";
 $disp = mysqli_query($conn, $sql);
 echo "<center><table>";
 echo "<tr><th>department</th><th>Email</th><th>phone</th><th>College</th></tr>";
 while($row =mysqli_fetch_array($disp,MYSQLI_ASSOC))
{
    echo "<tr>";
    foreach($row as $cell)
        echo "<td>$cell</td>";

    echo "</tr>\n";
}
echo "</table></center>"
 ?>
 </div>
 </body>
</html>