<?php
session_start();
$RKDH = $_POST['RKDH'];
$WarehouseNum = $_POST['WarehouseNum'];
$rkdlx = $_POST['rkdlx'];
$glddh = $_POST['glddh'];
$gysbh = $_POST['gysbh'];
$gysmc = $_POST['gysmc'];
$gyslxr = $_POST['gyslxr'];
$gyslxfs = $_POST['gyslxfs'];
$zdr = $_POST['zdr'];
$zdsj = $_POST['zdsj'];

$dbhost = "127.0.0.1";
$charset = 'utf8';
$dbname = "cangku";	//数据库名称
$dbuser = "debian-sys-maint";		//数据库用户名
$dbpass = "7ysDiHwzHBnbNEYL";	//数据库密码
$tbname = 'cangku'; 	//表格名

try{
    $conn=new PDO("mysql:host=$dbhost;dbname=$dbname;charset=$charset",$dbuser,$dbpass);
    $sql = "INSERT INTO cangku.cangku(RKDH,WarehouseNum,rkdlx,glddh,gysbh,gysmc,gyslxr,gyslxfs,zdr,zdsj)
     VALUES(?,?,?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(1, $RKDH); //绑定参数
    $stmt->bindValue(2, $WarehouseNum); //绑定参数
    $stmt->bindValue(3, $rkdlx); //绑定参数
    $stmt->bindValue(4, $glddh); //绑定参数
    $stmt->bindValue(5, $gysbh); //绑定参数
    $stmt->bindValue(6, $gysmc); //绑定参数
    $stmt->bindValue(7, $gyslxr); //绑定参数
    $stmt->bindValue(8, $gyslxfs); //绑定参数
    $stmt->bindValue(9, $zdr); //绑定参数
    $stmt->bindValue(10, $zdsj); //绑定参数
    $count = $stmt->execute(); //执行预处理语句
		if ($count <> 0) {
			//echo"<script type='text/javascript'>alert('注册成功');location='logok.html';</script>";  
			echo "<script>alert('入库成功！');location='rukuok.php';</script>";
		} else {
			echo "<script type='text/javascript'>alert('入库失败,请使用其它用户名'); location='register.php';</script>";
		}
		$stmt = null; //释放
		$conn = null; // 关闭连接
} catch (PDOException $e) {
    echo $e->getMessage();
}
