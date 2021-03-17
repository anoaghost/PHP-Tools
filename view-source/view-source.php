<html>
<head><title>View Source URL or Domain</title>
</head>
<body>
<table width="100%" height="100%">
<td align="center">
<font size='7'>
<a href='//anoaghost.github.io' style='text-decoration: none; text-shadow: 2px 0px 4px #ff0000, 3px 0px 5px #ff0000, 0px 3px 4px #ff0000; font-weight: bold; color: black;'>View Source URL by AnoaGhost</a>
</font><br>
<form name="data" method="post">
<input type="text" name="host" placeholder="URL" required></input><br>
<input type="submit" name='submit' value="Submit"><br>
</form>
<?php
	
$url = htmlspecialchars($_POST['host']);
if($_POST['submit']){
	$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
	$content = curl_exec($ch);
		curl_close($ch);
	$result = htmlspecialchars($content);
		
	echo "<textarea class=\"result\" style=\"width: 650px; height: 350px !important; white-space: normal; margin: 20px auto 0px; padding: 7px; text-align: left !important; display: block;\">".$result."\n</textarea>";
}
		
?>
</td>
</table>
</body>
</html>
