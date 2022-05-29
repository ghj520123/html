<?php
//插入连接数据库的相关信息
require_once '../php/connectvars.php';

$error_msg = "";
//判断用户是否已经设置cookie，如果未设置$_COOKIE['user_id']时，执行以下代码
if (!isset($_COOKIE['user_id'])) {
    if (isset($_POST['submit'])) { //判断用户是否提交登录表单，如果是则执行如下代码
        $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $user_username = mysqli_real_escape_string($dbc, trim($_POST['name']));
        $user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));

        if (!empty($user_username) && !empty($user_password)) {
            //MySql中的SHA()函数用于对字符串进行单向加密
            $query = "SELECT user_id, name FROM mismatch_user WHERE name = '$user_username' AND " . "password = SHA('$user_password')";
            //用用户名和密码进行查询
            $data = mysqli_query($dbc, $query);
            //若查到的记录正好为一条，则设置COOKIE，同时进行页面重定向
            if (mysqli_num_rows($data) == 1) {
                $row = mysqli_fetch_array($data);
                setcookie('user_id', $row['user_id']);
                setcookie('name', $row['name']);
                $home_url = 'loged.php';
                header('Location: ' . $home_url);
            } else { //若查到的记录不对，则设置错误信息
                $error_msg = 'Sorry, you must enter a valid username and password to log in.';
            }
        } else {
            $error_msg = 'Sorry, you must enter a valid username and password to log in.';
        }
    }
} else { //如果用户已经登录，则直接跳转到已经登录页面
    $home_url = 'loged.php';
    header('Location: ' . $home_url);
}
?>
<html>

<head>
    <meta charset="utf-8">
    <title>登录 </title>
    <link href="css/C.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="box">
        <h2>登录</h2>
        <!--通过$_COOKIE['user_id']进行判断，如果用户未登录，则显示登录表单，让用户输入用户名和密码-->
        <?php
        if (empty($_COOKIE['user_id'])) {
            echo '<p class="error">' . $error_msg . '</p>';
        ?>
            <!-- $_SERVER['PHP_SELF']代表用户提交表单时，调用自身php文件 -->
            <form action="check.php" method="post" enctype="multipart/form-data">
                <div class="inputBox">
                    <input type="text" name="name" value="" required="required" placeholder="           请输入您的帐号" pattern="[0-9]{6}" title="帐号为6为数字"><label>帐号</label>
                </div>
                <div class="inputBox">
                    <input type="password" name="password" value="" required="required" placeholder="           请输入您的密码"><label>密码</label>
                </div>

                <!-- <input type="submit" name="submit" value="登录"> -->
                <input type="button" onclick="window.location.href='loged.php'" name="submit" value="登录">
                <input type="button" onclick="window.location.href='register.php'" name="submit" value="注册">

            </form>
        <?php
        }
        ?>
    </div>
</body>

</html>