<?php
session_start();

echo 'You are Logged as ' . $_COOKIE['name'] . '<br/>';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>仓储管理系统</title>
  <meta name="author" content="Kearney" />
  <link rel="shortcut icon" href="favicons/1.png">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/index.css">
  <link href="css/C.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <header class="header" id="header">
    <div class="header-bg"></div>
    <div class="header-top">
      <div class="container">
        <a href="#" class="header-logo"></a>
        <nav class="header-nav">
          <a href="#" class="item item-cur">网站管理</a>
          <a href="php/warehouse_management2.php" class="item new-icon">仓库管理<i></i></a>
          <a href="404.html" class="item">个人管理</a>
      </div>
      </nav>
      
      <div class="header-user">
        <!-- <a href="logOut.php" class="register">用户名</a> -->
        <a href="index.html" class="login">注销</a>
      </div>
    </div>
    </div>
    <div class="banner">
      <h2 class="banner-titlte"><img src="images/banner-title_img.svg" alt="#"></h2>
    </div>
  </header>

  <div class="main">
    <div class="main-inner">
      <div class="main-list">
        <div class="recommend-line">
          <span>大家正在关注</span>
        </div>
        <div class="main-list__wrapper clearfix">
          <a href="#"><img src="images/cont/main-list__img1.jpg" alt="#"><span>1</span></a>
          <a href="#"><img src="images/cont/main-list__img2.jpg" alt="#"><span>2</span></a>
          <a href="#"><img src="images/cont/main-list__img3.jpg" alt="#"><span>3</span></a>
          <a href="#"><img src="images/cont/main-list__img4.jpg" alt="#"><span>4</span></a>
          <a href="#"><img src="images/cont/main-list__img5.jpg" alt="#"><span>5</span></a>
          <a href="#"><img src="images/cont/main-list__img6.jpg" alt="#"><span>6</span></a>
          <a href="#"><img src="images/cont/main-list__img7.jpg" alt="#"><span>7</span></a>
        </div>
      </div>
      <div class="main-list">
      </div>
    </div>
  </div>

  <div class="elevator-wrap">
    <a href="#" id="elevator"></a>
  </div>

  <script>
    !function init(){
      let t=document.cookie.split(";");

      for(let i=0;i<t.length;i++){
        console.log(t[i]);
      }

    }();
  </script>

</body>

</html>