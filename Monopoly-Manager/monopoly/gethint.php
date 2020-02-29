<?php
	//code needed or not(true/false), keep focus on codefield
	session_start();
	$_SESSION['keycode'] = 0;
	$conn = mysqli_connect("127.0.0.1", "root", "", "database");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL " . mysqli_connect;
	}
	
	$query = mysqli_query($conn, "SELECT * FROM codetable");
	$queryHave = mysqli_query($conn, "SELECT * FROM havelist");
	
	$codeList = array();
	$codeListKey = array();
	$haveList = array();
	//$haveListKey = array();
	
	while($row = mysqli_fetch_array($query))
	{
		
		$array[] = $row;
		array_push($codeList, $row['codes']);
		array_push($codeListKey, $row['key']);
		
	}
	
	while($row = mysqli_fetch_array($queryHave))
	{
		
		$array[] = $row;
		array_push($haveList, $row['codes']);
		//array_push($haveListKey, $row['key1']);
		
	}
	
	// get the q parameter from URL
	//$submittedCode = $_REQUEST["q"];
	$submittedCode = strtoupper($_REQUEST["q"]);
	
	$hint = "";
	$BOOLListCode = false;
	$haveListBOOL = false;
	$increment = 0;
	$key = 0;
	// lookup all hints from array if $submittedCode is different from ""
	if ($submittedCode !== "" && (strlen($submittedCode) == 4))
	{
		//$submittedCode = strtolower($submittedCode);
		//$len=strlen($submittedCode);
		foreach($codeList as $code)//COMPARE TO DATABASE
		{
			//echo ' - foreach 1 - ';
			if($submittedCode == $code)
			{
				//echo ' - if 1 - ';
				$BOOLListCode = true;
				$key = $codeListKey[$increment];
				
				foreach($haveList as $haveVar)
				{
					//echo ' - foreach 2 - ';
					if($submittedCode == $haveVar)
					{//got this code
						//echo ' - if 2 - ';
						$haveListBOOL = true;
						//$hint = $submittedCode;
						$hint = '<br> This code is already submitted';
						/*
						if(stristr($submittedCode, substr($code, 0, $len)))
						{
							//SET TRUE(HAVE)/FALSE(NO HAVE) SOMEWHERE HERE
							if ($hint === "")
							{
								$hint = $code;
							}
							
							else
							{
								$hint .= ", $code";
							}
						}
						*/
						break 2;
					}
				}
			}
			$increment++;
		}
	}
	/*
	if($haveListBOOL == false)
	{
		
		echo 'have list bool false';
		
	}
	
	if($BOOLListCode == true)
	{
		
		echo 'code list bool true';
		
	}
	*/
	$_SESSION['keycode'] = $key;//$key;
	$_SESSION['subCode'] = $submittedCode;
	//echo $_SESSION['keycode'];
	//echo $key;
	//$submitBOOL = false;
	if(($BOOLListCode == true) && ($haveListBOOL == false))
	{
		
		mysqli_query($conn, "INSERT INTO havelist (codes, key1) VALUES ('$submittedCode', '$key')");
		$hint = '<br> You need this code, <span style = "color: LimeGreen">' . $submittedCode . '  </span> will be automatically submitted, press enter to type in another code';
		//echo '<input type = "submit" value = "Yes>';
		//buttonEnable();
		//$submitBOOL = true;
		//submit();
		
	}
	
	//echo $_SESSION['keyCode'];
	
	/*
	$hint = "";
	$BOOLListCode = false;
	$haveListBOOL = false;
	$increment = 0;
	$key = 0;
	
	//http://stackoverflow.com/questions/5984545/how-to-call-a-php-function-in-javascript
	function submit()
	{
		if($submitBOOL == true)
		{
			mysqli_query($conn, "INSERT INTO havelist (codes, key1) VALUES ('$submittedCode', '$key')");
			echo 'submitted';
			$submitBOOL = false;
		}
	}
	
	//http://rajeevphp2011.blogspot.com/2012/03/call-php-function-into-javascript-using.html
	if(function_exists($_GET['phpFunction']))
	{ // get function name and parameter
		$_GET['phpFunction'];
	}
	else
	{
		echo 'Method Not Exist';
	}
	
	//if(!(isset($_POST['submit'])) && ($submitBOOL == true))
	if((isset($_POST['submit'])))
	{
		//if($_POST['submit']=='true')
		mysqli_query($conn, "INSERT INTO havelist (codes, key1) VALUES ('$submittedCode', '$key')");
		echo'oiterwoijteroijterter';
			//$_POST['f']='herwerwewqewqewqerwqqerwqerwerwqerwerwewrerwqi';
			//$submitBOOL == false;
	}
	function submit()
	{
		if($submitBOOL == true)
		{
			//mysqli_query($conn, "INSERT INTO havelist (codes, key1) VALUES ('$submittedCode', '$key')");
			echo 'submitted';
			$submitBOOL = false;
		}
	}*/
	
	if(($BOOLListCode == false) && ($haveListBOOL == false))
	{
		
		$hint = '<br> Invalid code';
		//buttonDisable();
	}
	//just use enter button to submit?
	/*
	function buttonEnable()
	{
		
		echo '<script>  console.log(5+5);</script>';
		
	}
	
	function buttonDisable()
	{
		
		echo '<script>  console.log(5+5);</script>';
		
	}
	*/
	// Output "no suggestion" if no hint was found or output correct values
	echo $hint === "" ? "no code" : $hint;
	
	/*
		if($hint === "")
			echo 'no suggestion';
		else
			echo $hint;
	*/
	
	//session_unset();
	//session_destroy();
	
?>