<?php
include("config.inc.php");
//Fetch pages


//sanitize page value
if(isset($_POST["page"])){
	$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
	if(!is_numeric($page_number)){die('Invalid page number');}	
}else{
	$page_number = 1;
}
//get current starting point of records
$position = (($page_number - 1) * $items_per_page);

//Limit results within specified range
$results = mysqli_query($connectDB, "SELECT id, name, value FROM paginate ORDER BY id ASC LIMIT $position, $items_per_page");

//output db results
echo '<ul class="page_results">'; 
while($row = mysqli_fetch_array($results))
{
	echo '<li id="item '.$row["id"].'">'.$row["id"].'. <span class="page_name">'.$row["name"].'</span></li>';
}
echo '</ul>';

?>