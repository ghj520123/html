# 简介

验证码不是必选项目。

# 文件说明

index.php	首页，主要是用来跳转到登录页面、注册页面、仓库管理页面

sign.php 	登录页面

register.php 	注册页面

C.css	登录页面、注册页面的样式文件

check.php  连接数据库验证账号密码，正确则跳转到logok.html，不正确返回登录页面

checkregister.php   连接数据库进行插入数据，若已存在账号，则提示使用其它用户名

logok.html 登录成功页面，显示“登陆成功”，用于测试



# 问题说明

1.  SQL注入、密码加密暂不考虑

2.  这里用的是pdo操作数据库，其它方式如mysqli也是可以的

\\测试    
