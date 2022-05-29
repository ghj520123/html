<?php
session_start();
header("Content-Type:text/html;charset=utf-8");
setcookie("name", $name, time()+3600);
?>
<html>

<head>
	<meta charset="utf-8">
	<title>登录</title>
	<link href="css/C.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class="box">
		<h2>登录</h2>
		<form action="check.php" method="post" enctype="multipart/form-data">
			<table></table>
			<div class="inputBox">
				<input type="text" name="name" value="<?php echo $name; ?>" required="required" 
				placeholder="           请输入您的帐号" 
				pattern="[0-9]{6}" title="帐号为6为数字"><label>帐号</label>
			</div>
			<div class="inputBox">
				<input type="password" name="password" value="<?php echo $psw; ?>" required="required" 
				placeholder="           请输入您的密码"><label>密码</label>
			</div>

			<!-- <input type="submit" name="submit" value="登录"> -->
			<!-- <input type="button" onclick="window.location.href='loged.php'" name="submit" value="登录">
			<input type="button" onclick="window.location.href='register.php'" name="submit" value="注册"> -->
			<input type="submit" name="submit" value="登录">
        	<input type="button" onclick="window.location.href='register.php'" name="submit" value="注册">

		</form>
	</div>
	<!-- <script>
		function login(){
			document.cookie="name=ghj";
			window.location.href='loged.php';
		}

	</script> -->
</body>

</html>