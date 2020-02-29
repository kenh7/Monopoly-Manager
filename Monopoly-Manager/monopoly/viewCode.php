<!--<html>
	<head>
		<title>View Code</title>
	</head>
	-->
		<?php
			
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
			//need codes we have
			//need codes we dont have
			$gotList = array();
			$needList = array();
			foreach($codeList as $codeVar)
			{
				//echo 'for 1';
				foreach($haveList as $haveVar)
				{
					//echo 'for 2';
					if($codeVar == $haveVar)
					{
						//echo '<br>if 1';
						array_push($gotList, $codeVar);
						
					}
					else
					{
						//echo 'else 1';
						array_push($needList, $codeVar);
						
					}
				}
			}
			echo '<br>';
			
			$needList = array_diff($needList, $gotList);
			$needList = array_unique($needList);
			echo '<span style = "color: #093"> Codes You Have <br>';
			$gotList = array_unique($gotList);
			foreach($gotList as $haveVar)
			{
				
				echo $haveVar . ' ';
				
			}
			
			echo '</span><br>';
			echo '-------------------------------------------------';
			echo '<br>';
			
			echo "<span style = 'color: red'> Codes You Don't Have <br>";
			
			foreach($needList as $needVar)
			{
				
				echo $needVar . ' ';
				
			}
			echo '</span>';
		?>
	<!--
	<body>
		
	</body>
</html>-->