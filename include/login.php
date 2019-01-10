<?php
	
	session_start();
	include("common.php");
	header("content-type:text/html;charset=utf-8");
 	
 	$success = '';
 	$error_code = '';
 	$datalist = array();
	//接收表单传递的用户名和密码
	$name=$_POST['username'];
	$pwd=md5($_POST['pwd']);
	
	getConnect();

	// //判断用户名是否已存在
	// $sqlselect = "SELECT `username` FROM `users` WHERE '$name'";
	// $result = mysql_query($sqlselect);
	// if(mysql_num_rows($result)<=0){
	// 	$success = '2';
	// 	$error_code = '该用户不存在';
	// }else{
		//通过php进行SELECT操作
		$sqlinsert = "SELECT `username`, `password` FROM `users` WHERE   username = '{$name}' and password = '{$pwd}'";

		//添加用户信息到数据库
		$result1 = mysql_query($sqlinsert);
		if(mysql_num_rows($result1)>0){
			$success = '1';
			$error_code = '登录成功';
			$_SESSION['username']=$name;
		}else{
			$success = '2';
			$error_code = '账号或密码错误';
		}
	// }

	$json = array('success'=>$success,'error_code'=>$error_code,'datalist'=>$datalist);
	echo json_encode($json);
	closeConnect();
?>