<?php
$conn = mysql_connect("localhost","root","dcy0701") or die("数据库连接失败！".mysql_error());
mysql_select_db("weibo",$conn);
mysql_query("set names utf8");
echo $conn;
echo "数据库选择成功";
?>