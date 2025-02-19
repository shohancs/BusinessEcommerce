<?php  
	
	$db = mysqli_connect("localhost", "root", "", "businessecommerce");
	if ( $db ) {
		// echo"Database Connected Successfully";
	}
	else {
		die("Mysql Error." . mysqli_error($db));
	}

?>