<?php
$db_address=$_POST['db_address'];
$db_name=$_POST['db_name'];
$db_user=$_POST['db_user'];
$db_pwd=$_POST['db_pwd'];
$db_pre=$_POST['db_pre'];
$u_name=$_POST['u_name'];
//$u_pwd=$_POST['u_pwd'];
$u_pwd=md5($_POST['u_pwd']);
$link=mysql_connect($db_address,$db_user,$db_pwd);
mysql_select_db($db_name,$link);
mysql_query("set names utf8");
$str="insert into we_user(u_name,u_pwd) VALUE ('$u_name','$u_pwd')";
$arr=mysql_query($str);
if(mysql_fetch_assoc($arr)){
    echo '0';
}else{
    echo '1';
}