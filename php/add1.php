<?php
header("Content-Type:text/html;charset=utf-8");
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>新增入库</title>
		<link href="../css/C.css" rel="stylesheet" type="text/css" />
	</head>
 <body>
		<div class="box"> 
		<h2>新增入库</h2>
		<!--将用户输入的user,和pass提交到login.php-->
		<form  method="post" enctype="multipart/form-data">
			<div class="inputBox"><input type="text" name="RKDH" value="" required="required"
				placeholder=   "                请输入您的入库单号" pattern="[0-9]{6}" title="帐号为6为数字"><label>入库单号</label></div>
			<div class="inputBox"><input type="text" name="WarehouseNum" value=""required="required"
				placeholder="                  请输入您的仓库号"><label>仓库号</label></div>
			<div class="inputBox"><input type="text" name="rkdlx" value=""required="required"
				placeholder="                  请输入您的入库单类型："><label>入库单类型：</label></div>
            <div class="inputBox"><input type="text" name="glddh" value=""required="required"
				placeholder="                  请输入您的关联订单号："><label>关联订单号：</label></div>
            <div class="inputBox"><input type="text" name="gysbh" value=""required="required"
				placeholder="                  请输入您的供应商编号："><label>供应商编号：</label></div>
            <div class="inputBox"><input type="text" name="gysmc" value=""required="required"
				placeholder="                  请输入您的供应商名称："><label>供应商名称：</label></div>
            <div class="inputBox"><input type="text" name="gyslxr" value=""required="required"
				placeholder="                  请输入您的供应商联系人："><label>供应商联系人：</label></div>
            <div class="inputBox"><input type="text" name="gyslxfs" value=""required="required"
				placeholder="                  请输入您的供应商联系方式："><label>供应商联系方式：</label></div>
            <div class="inputBox"><input type="text" name="zdr" value=""required="required"
				placeholder="                  请输入您的制单人："><label>制单人：</label></div>
            <div class="inputBox"><input type="text" name="zdsj" value=""required="required"
				placeholder="                  请输入您的制单时间："><label>制单时间：</label></div>
                <p><input type="submit" value="请登陆后点击此处提交" class="btn btn-primary" /></p>
                
			<!--<img src="vericode.php" style="width:100px;height:25px;" id="code"/>-->
		</form>
		</div>
	</body>
</html>

