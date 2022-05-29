<?php
session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="content-type" content="text/html" />
    <meta name="author" content="mxszpt.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link href="css/bootstrap-responsive.css" rel="stylesheet" />
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>新增入库</title>
    <style>
        body {
            border: 0px;
            margin: 0px;
            background-image: url(images/bj.jpg);
            background-repeat: no-repeat;
            width: 100%;
        }

        img {
            border: 0px;
            margin: 0px;
            display: block
        }
    </style>
</head>

<body>
    <div style="width: 960px;margin: auto;">
        <div style="text-align: center;margin-top: 5px;">
            <div><span style="font-size: 50px;color: red;">新增入库表</span></div>
            <div style="text-align: center;margin-top: 5px;">
            </div>
        </div>
        <div style="width: 560px;height: 530px;margin: auto;margin-top: 5px;border: 5px solid #8bcce8;">
            <div style="padding: 15px;">
                <div style="text-align: center;"><span style="color: red;font-size: 16px;">入库信息表</span></div>
                <div style="margin-top: 10px;">
                <form action="test.php" method="POST" enctype="multipart/form-data">
                    <!-- <form action="<{spUrl c=main a=goout}>" method="POST"> -->
                        <p><b>入库单号  ：</b><input type="text" name="brivername" style="width:410px" /></p>
                        <p><b>仓库号：</b><input type="text" name="cangkurnum" style="width:400px" /></p>
                        <p><b>入库单类型：</b><input type="text" name="brivernum" style="width:400px" /></p>
                        <p><b>关联订单号：</b><input type="text" name="sale" style="width:400px" /></p>
                        <p><b>供应商编号：</b><input type="text" name="tel" style="width:400px" /></p>
                        <p><b>供应商名称：</b><input type="text" name="city" style="width:400px" /></p>
                        <p><b>供应商联系人：</b> <input type="radio" name="dont" value="可以" />可以&nbsp; <input type="radio" name="dont" value="不可以" />不可以</p>
                        <p><b>供应商联系方式：</b><input type="text" name="dontmodel" style="width:390px" /></p>
                        <p><b>制单人：</b><input type="text" name="dontnum" style="width:400px" /></p>
                        <p><b>制单时间：</b><input type="text" name="overdue" style="width:400px" /></p>
                        <div style="text-align: center;">
                            <p><input type="submit" value="请认真填写，完成后点击此处提交" class="btn btn-primary" /></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>