<?php
	include("common.php");
	header("content-type:text/html;charset=utf-8");
 	
 	$success = '';
 	$error_code = '';
 	$datalist = array();
	//接收表单传递的用户名和密码
	$name=$_POST['username'];
	$pwd=md5($_POST['pwd']);
	$phone=$_POST['phone'];
	 
	getConnect();

	//判断用户名是否已存在
	$sqlselect = "SELECT `username` FROM `users` WHERE '$name'";
	$result = mysql_query($sqlselect);
	if(mysql_num_rows($result)>0){
		$success = '2';
		$error_code = '注册失败，用户名已存在';
	}else{
		//通过php进行insert操作
		$sqlinsert = "INSERT INTO `users`(`username`, `password`, `phone`) VALUES ('{$name}','{$pwd}','{$phone}')";

		//添加用户信息到数据库
		mysql_query($sqlinsert);
		$success = '1';
		$error_code = '注册成功';
	
	}

	$json = array('success'=>$success,'error_code'=>$error_code,'datalist'=>$datalist);
	echo json_encode($json);
	closeConnect();
?>