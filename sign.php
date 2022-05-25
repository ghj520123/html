<?php
session_start();
header("Content-Type:text/html;charset=utf-8");
?>
<html>
	<head>
		<meta  charset="utf-8">
		<title>登录</title>
		<link href="css/C.css" rel="stylesheet" type="text/css" />
	</head>
 <body>
		<div class="box"> 
		<h2>登录</h2>
		<form action="check.php" method="post" enctype="multipart/form-data">
			<div class="inputBox">
				<input type="text" name="name" value="" required="required" placeholder=
					"           请输入您的帐号" pattern="[0-9]{6}" title="帐号为6为数字"><label>帐号</label></div>
			<div class="inputBox">
				<input type="password" name="password" value=""	required="required" placeholder=
					"           请输入您的密码"><label>密码</label></div>
					
			<input type="submit" name="submit" value="登录">
			<input type="button" onclick="window.location.href='register.php'" name="submit" value="注册" >			
					
		</form>
		</div>
	</body>
</html>
