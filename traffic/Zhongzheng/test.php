<?php
	include("../mysql.inc.php");								
	$sqlroad = "select road 'road' from cj20170227 where district ='Zhongzheng' group by road";	
	$queryroad= mysqli_query($conn, $sqlroad);
	
for ($i = 0; $i < mysqli_num_rows($queryroad); $i++){	
	$data = mysqli_fetch_assoc($queryroad);
	$divbegin = "<div>"."<input type=\"button\" value=\"";
	$divend = "\" style=\"width: 100%; margin-right: 10px; margin-top: 10px; margin-bottom: 10px;\">"."</div>";
	echo $divbegin.$data["road"].$divend;
}	
?>