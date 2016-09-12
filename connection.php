<?php 
$conn_string = "host=ec2-174-129-223-35.compute-1.amazonaws.com port=5432 dbname=dcdhmp2hbn5ol8 user=iorgedgwzuhxvh password=HtexMOv8jCwSmlLI678h34VFNT";
$dbconn4 = pg_connect($conn_string);
//connect to a database named "dcdhmp2hbn5ol8" on the host "ec2-174-129-223-35.compute-1.amazonaws.com" with a username and password
if(!$dbconn4){ 
	echo "Error : Unable to open database\n"; 
}
 echo $inserted= pg_query($dbconn4,'INSERT INTO CUSTOMERS (ID,order_id,first_name,last_name,address,order_amount) VALUES ("3","1004","fgfgh","test","fkldflk","$40.00")');
 if($inserted){
 	echo "row added successfully";
 }
 else{
 	echo "row can't add";
 }
?>
