<?php 
$conn_string = "host=ec2-174-129-223-35.compute-1.amazonaws.com port=5432 dbname=dcdhmp2hbn5ol8 user=iorgedgwzuhxvh password=HtexMOv8jCwSmlLI678h34VFNT";
$dbconn4 = pg_connect($conn_string);
//connect to a database named "dcdhmp2hbn5ol8" on the host "ec2-174-129-223-35.compute-1.amazonaws.com" with a username and password
if(!$dbconn4){ 
	echo "Error : Unable to open database\n"; 
}

?>
