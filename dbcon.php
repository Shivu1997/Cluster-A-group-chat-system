
<?php  
$servername= "localhost";
$username= "root";
$password="";
$dbName="epiz_22916624_db";
$con= new mysqli($servername,$username,$password,$dbName);
if ($con->connect_error) 
{
	echo "<h2>Sorry We Have Some Problem In The Server</h2>";
}
?>


