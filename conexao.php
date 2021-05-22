<?php
	$host = "127.0.0.1";
	$servidor = "127.0.0.1";
	$usuario = "root";
	$senha = "";
	$dbname = "projeto";
	
	//$conn = mysqli_connect ($servidor,$usuario, $senha, $dbname);
	//new PDO("mysql:host=$host;dbname=".$dbname, $usuario, $senha);
	
try {
  $conn = new PDO("mysql:host=$host;dbname=".$dbname, $usuario, $senha);
   //set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 echo "Conectado com sucesso";
} catch(PDOException $e) {
  echo "falha na coneao: " . $e->getMessage();
}

	


//try {
 // $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  // set the PDO error mode to exception
 // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 // echo "Connected successfully";
//} catch(PDOException $e) {
 // echo "Connection failed: " . $e->getMessage();
//}
?>
