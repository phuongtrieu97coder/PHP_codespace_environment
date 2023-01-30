<?php 
$servername = 'sql9.freemysqlhosting.net';
$user = 'sql9594270';
$password = 'tzXCbjkiqp';
$database= 'sql9594270';


try{
	$acc = 'mysql:host='.$servername.';dbname='.$database;
	$conn = new PDO($acc,$user,$password);
 // set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	echo 'Connected successfully!!!';
 }catch(PDOException $e){
	echo 'Connection failed: '. $e->getMessage();
 }
	 
 $conn = null;
 
?>

	


	
<html>
	<head>
		<meta charset="utf-8">
		<title>Visual Studio Code Remote :: PHP</title>
	</head>
	<body>
	</body>
</html>