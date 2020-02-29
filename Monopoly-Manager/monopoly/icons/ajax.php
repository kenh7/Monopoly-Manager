<!doctype html>
<html>
	<head>
		<title>Live Code</title>
		
		<script>
		//visit localhost/test/ajax.html
		function showHint(str) {
			if (str.length == 0) { 
				document.getElementById("txtHint").innerHTML = "";
				return;
			} else {
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
					}
				}
				xmlhttp.open("GET", "gethint.php?q=" + str, true);
				xmlhttp.send();
			}
		}
		</script>
		
		<script type="text/javascript">
			function submitOnEnter(inputElement, event)
			{
				if (event.keyCode == 13)
				{
					inputElement.form.submit();
				}
			}
		</script>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">
			function addsearchproduct()
			{  // this is JavaScript function
				$.ajax
				(
					{
						url: "gethint.php?f=phpFunction",
						type: 'POST',
							// call php function , phpFunction=function Name , x= parameter 
						data: {},
						success: function(data1)
						{
								alert(data1);
						}
					}
				);
			}
		</script>
		
	</head>
	<!--
	onkeypress="submitOnEnter(this, event);"
	-->
	<body>
		
		<form method = 'post' autocomplete = 'off'>
			Put your code here: 
			<input type="text" name = 'q' maxlength = '4' style = "text-transform: uppercase" autofocus onkeyup="showHint(this.value)">
			<input type = 'submit' value = "Submit" onclick = 'return addsearchproduct("pass value")'>
		</form>
		<button type = "button" onclick = "location.href = 'viewCode.php'">View whats needed</button>
		<p>Codes: <span id="txtHint"></span></p>
		<!--
		<form>
			<input type = 'button' value = 'Submit' id = 'submit' disabled>
		</form>
		-->
	</body>
</html>