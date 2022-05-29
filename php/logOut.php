<?php
session_start();
?>
<html>

<head>
	<meta charset="utf-8">
	<title>注销</title>
	<link href="css/C.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class="box">
		<h2>注销</h2>
		<form action="check.php" method="post" enctype="multipart/form-data">
			<!-- <input type="submit" name="submit" value="登录"> -->
			<input type="button" onclick="window.location.href='loged.php'" name="submit" value="登录">
			<input type="button" onclick="window.location.href='register.php'" name="submit" value="注册">
		</form>
	</div>
</body>

</html>