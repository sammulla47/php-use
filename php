<?php

$current_page = basename($_SERVER['PHP_SELF']); 

if($current_page == "index.php"){
	$keywords = "firstName field is set";
	$title= "this is index page";
}
else if($current_page == "about-us.php"){
	$keywords = "firstName field is set";
	$title= "this is about-us page";
}
else if($current_page == "contact.php"){
    $keywords = "firstName field is set";
	$title= "this is contact page";
}
else if($current_page){
    $keywords = "firstName field is set";
	$title= "For All Page if there no link";
}
?>
