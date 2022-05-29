<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>仓库管理</title>
	<link href="../css/font-awesome.css" rel="stylesheet">
	<script type="text/javascript" src="../js/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="../js/google-maps.js"></script>
	<script>
		$(document).ready(function() {
			$(".vertical-nav").verticalnav({
				speed: 400,
				align: "left"
			});
		});
	</script>
</head>

<body>
	<div style="text-align:center;clear:both;">
		<script src="/gg_bd_ad_720x90.js" type="text/javascript"></script>
		<!--<script src="/follow.js" type="text/javascript"></script>-->
	</div>
	<div class="kePublic">
		<!--效果html开始-->
		<div class="content">
			<ul class="vertical-nav dark red">
				<li class="active"><a href="http://www.internetke.com/"><i class="icon-home"></i>首页</a></li>
				<li><a href="http://www.internetke.com/"><i class="icon-cogs"></i>库位管理
						<span class="submenu-icon"></span></a>
					<ul>
						<li><a href="http://www.internetke.com/">新增库位</a></li>
						<li><a href="http://www.internetke.com/">编辑仓库</a></li>
					</ul>
				</li>
				<li><a href="http://www.internetke.com/"><i class="icon-briefcase"></i>出入库申请
						<span class="submenu-icon"></span></a>
					<ul>
						<li><a href="http://www.internetke.com/">申请人提交申请表<span class="submenu-icon"></span></a>
							<ul>
								<li><a href="http://www.internetke.com/">入库申请</a></li>
								<li><a href="http://www.internetke.com/">出库申请</a></li>
								<li><a href="http://www.internetke.com/">转移申请</a></li>
							</ul>
						</li>
						<li><a href="http://www.internetke.com/">审核人审核</a></li>
						<li><a href="http://www.internetke.com/">相应仓管员验收</a></li>
					</ul>
				</li>
				<li><a href="http://www.internetke.com/"><i class="icon-briefcase"></i>入库管理
						<span class="submenu-icon"></span></a>
					<ul>
						<li><a href="../php/add1.php">新增入库</a></li>
						<li><a href="http://www.internetke.com/">入库查询<span class="submenu-icon"></span></a>
							<ul>
								<li><a href="http://www.internetke.com/">按条件查询</a></li>
								<li><a href="http://www.internetke.com/">删除记录</a></li>
								<li><a href="http://www.internetke.com/">导出/打印</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="http://www.internetke.com/"><i class="icon-briefcase"></i>出库管理
						<span class="submenu-icon"></span></a>
					<ul>
						<li><a href="http://www.internetke.com/">新增出库</a></li>
						<li><a href="http://www.internetke.com/">出库查询<span class="submenu-icon"></span></a>
							<ul>
								<li><a href="http://www.internetke.com/">按条件查询</a></li>
								<li><a href="http://www.internetke.com/">删除记录</a></li>
								<li><a href="http://www.internetke.com/">导出/打印</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="http://www.internetke.com/"><i class="icon-picture"></i>盘点管理
						<span class="submenu-icon"></span></a>
					<ul>
						<li><a href="http://www.internetke.com/">库存查询</a></li>

					</ul>
				</li>
				<li><a href="http://www.internetke.com/"><i class="icon-info"></i>其他管理
						<span class="submenu-icon"></span></a>
					<ul>
						<li><a href="http://www.internetke.com/">移库管理</a></li>
						<li><a href="http://www.internetke.com/">报损管理</a></li>
						<li><a href="http://www.internetke.com/">调拨管理</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!--效果html结束-->
		<div class="clear"></div>
	</div>

</body>

</html>