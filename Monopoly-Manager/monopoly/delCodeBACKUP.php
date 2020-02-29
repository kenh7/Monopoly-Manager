<?php
	
	session_start();
	
	$conn = mysqli_connect("127.0.0.1", "root", "", "database");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL " . mysqli_connect;
	}
	
	$query = mysqli_query($conn, "SELECT * FROM codetable");
	$queryHave = mysqli_query($conn, "SELECT * FROM havelist");
	
	$codeList = array();
	//$codeListKey = array();
	$haveList = array();
	//$haveListKey = array();
	$hint = "";
	$keycodeNumber = 0;
	
	$delCode = strtoupper($_REQUEST['w']);
	$suboCodo = $_SESSION['subCode'];
	//echo $delCode;
	
	while($row = mysqli_fetch_array($query))
	{
		
		$array[] = $row;
		array_push($codeList, $row['codes']);
		//array_push($codeListKey, $row['key']);
		
	}
	
	while($row = mysqli_fetch_array($queryHave))
	{
		
		$array[] = $row;
		array_push($haveList, $row['codes']);
		//array_push($haveListKey, $row['key1']);
		
	}
	//print_r($_SESSION['keyCode']);//????????????????????????????????????????????????????????
	$keycodeNumber = $_SESSION['keycode'];
	//echo $keycodeNumber;
	echo '<br>';
	foreach($haveList as $haveVar)
	{
		//echo ' - for 1 - ';
		if($haveVar == $suboCodo)
		{
			
			$hint = '<span style = "color: red">' . $suboCodo . ' is removed </span>';
			//mysqli_query($conn, "DELETE FROM havelist (codes, key1) VALUES ('$suboCodo', '$keycodeNumber')");
			mysqli_query($conn, "DELETE FROM havelist WHERE codes = '$suboCodo'");
			//remove the unique key values from phpmyadmin?
			break;
			//deleteCode($haveVar, $keycodeNumber);
			//echo 'if 1 <br>';
			
		}
		
	}
	/*
	function deleteCode($fCode, $fkeyNu)
	{
		
		mysqli_query($conn, "DELETE FROM havelist (codes, key1) VALUES ('$fCode', '$fkeyNu')");
		
	}
	*/
	//session_unset();
	//session_destroy();
	
	echo $hint === "" ? "No code was entered, or code was invalid" : $hint;
	
?>