<?php

//166.62.27.61	
// $host = "182.50.151.58";
// $user = "mfav";
// $password = "G)NGkqKVp)qwertyui321}uA5*";
// $db = "oznzmma";

$host = "mysql.mafavtechnologies.com";
$user = "mafav";
$password = "qwertyui321";
$db = "realestateplus";

$con=mysqli_connect($host, $user, $password, $db);
mysql_select_db("realestateplus") or die(mysql_error()); 

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
$result = mysqli_query($con,"SELECT * FROM Houses");
$houseArray = array();
for ($i=0; $i < 10; $i++) { 
	$row = mysqli_fetch_array($result);
		$houseArray[$i] = $row;

}
mysqli_close($con);

echo json_encode( $houseArray );

?>