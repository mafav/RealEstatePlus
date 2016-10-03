<?php 



$data = json_decode(file_get_contents("php://input"));
$id = mysql_real_escape_string($data->id);
$address = mysql_real_escape_string($data->address);
$added = mysql_real_escape_string($data->added);
$img = mysql_real_escape_string($data->img);

$host = "mysql.mafavtechnologies.com";
$user = "mafav";
$password = "qwertyui321";
$db = "realestateplus";


//mysql_connect("localhost", "root", ""); 


mysqli_connect($host, $user, $password, $db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
//mysql_query("INSERT INTO Houses('id', 'address', 'added', 'img') VALUES('".$id."','".$address."','".$added."','".$img."')");
mysql_query("INSERT INTO Houses ('id','address','added','img') VALUES ('".$id."', '".$address."','".$added."','".$img."')"); 


mysqli_close($con);
?>


