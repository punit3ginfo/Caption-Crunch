<?php
include("config.inc.php"); //include config file

//sanitize post value
if(isset($_POST["page"])){
	$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
	if(!is_numeric($page_number)){die('Invalid page number!');} //incase of invalid page number
}else{
	$page_number = 1;
}

//get current starting point of records
$position = (($page_number-1) * $item_per_page);

//Limit our results within a specified range. 
$results = mysqli_query($connecDB, "SELECT id, name, message FROM paginate ORDER BY id ASC LIMIT $position, $item_per_page");

//output results from database
echo '<ul class="page_result">';
while($row = mysqli_fetch_array($results))
{
	echo '<li id="item_'.$row["id"].'">'.$row["id"].'. <span class="page_name">'.$row["name"].'</span><span class="page_message">'.$row["message"].'</span></li>';
}
echo '</ul>';
?>

