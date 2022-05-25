<?php
    // 开启 session
    session_start();

    // 丢弃输出缓冲区的内容 **
    ob_clean();

    // 1 创建画布
    $img = imagecreatetruecolor(100, 30);

    // 2 画一个矩形并填充
    $bgcolor = imagecolorallocate($img, mt_rand(120,255), mt_rand(120,255), mt_rand(120,255));
    imagefilledrectangle($img, 0, 0, 100, 30, $bgcolor);

    // 3 在画布上进行操作

    // 3.1 定义字符串
    $str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';

    // 3.2 定义变量，存放验证码
    $code = '';

    // 3.2 加载自定义字体
    $font_file = './comic.ttf';

    // 3.3 生成文字部分
    for ($i = 0; $i < 4; $i++) {
        // 定义字体颜色
        $fontcolor = imagecolorallocate($img, mt_rand(0, 120), mt_rand(0, 120), mt_rand(0, 120));

        // 文字内容
        $content = substr($str, mt_rand(0, strlen($str)-1), 1);

        // 设置显示坐标
        $x = ($i * 100 / 4) + mt_rand(5, 10);
        $y = mt_rand(17, 22);

        // 把文字填充到画布
        imagefttext($img, 15, mt_rand(-5, 5), $x, $y, $fontcolor, $font_file, $content);

        // 将文字内容赋值给 code 变量
        $code .= $content;
    }

    // 3.4 将大写字母转换为小写
    $code = strtolower($code);

    // 3.5 给 session 赋值
    $_SESSION['validcode'] = $code;

    // 3.6 设置干扰元素
    for ($i = 0; $i < 200; $i++) {
        $pointcolor = imagecolorallocate($img, mt_rand(50, 200), mt_rand(50, 200), mt_rand(50, 200));
        imagesetpixel($img, mt_rand(1, 99), mt_rand(1, 29), $pointcolor);
    }

    // 3.7 设置干扰线
    for ($i = 0; $i < 3; $i++) {
        $linecolor = imagecolorallocate($img, mt_rand(50, 200), mt_rand(50, 200), mt_rand(50, 200));
        imageline($img, mt_rand(1, 99), mt_rand(1, 29), mt_rand(1, 99), mt_rand(1, 29), $pointcolor);
    }

    // 4 向浏览器输出图片头信息
    header('Content-Type:image/png');

    // 5 输出图片到浏览器
    imagepng($img);

    // 6 销毁图片
    imagedestroy($img);
?>