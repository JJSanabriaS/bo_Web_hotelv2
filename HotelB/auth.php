<?php
$connect=mysqli_connect("127.0.0.1","root","","hotel") or die("Connection failed");
mysqli_set_charset($connect,"utf8");
if(mysqli_connect_error()):
echo "Erro na conexao: ".mysqli_connect_error();
endif;
?>

<?php
$username = "root";
$password = "";
$hostname = "localhost";
$database= "hotel";

//connection to the database
$dbhandle = mysqli_connect($hostname, $username, $password,$database) or die(mysql_error());

//select a database to work
//$db = "hotel";
//$selected = mysql_select_db($db,$dbhandle) or die(mysql_error());


?>
