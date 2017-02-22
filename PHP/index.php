<?php 
	
	require'./connectdb.php';
	
	$username = mysqli_real_escape_string($link, $_REQUEST['username']);
	$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);

	$sql ="SELECT * FROM user WHERE userName = '$username' AND userPhone = '$phone'";
	$query = mysqli_query($link,$sql);

	 $senddata = array();
	if(mysqli_num_rows($query) == 1){
		$senddata[0] = mysqli_fetch_assoc($query);
		$senddata[0]['loginCheck'] = "success";
	}else{
		$senddata[0]['loginCheck'] = "fail";
	}

	echo json_encode($senddata);

?>