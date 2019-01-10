<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<script src="js/jquery.js"></script>
</head>
<style>
	*{
		margin:0px;
		padding:0px;
	}

	body,html{
		font-size: 12px;
		font-family: "Microsoft YaHei";
		color:#333;
	}

	ul,li{
		list-style: none;
	}

	a{
		text-decoration: none;
		color:#333;
	}

	#top{
		width:1100px;
		margin:0 auto;
	}

	.top{
		width: 100%;
		height: 32px;
		line-height: 32px;
	}

	.clearAfter{
		content:"";
		display: table;
		clear: both;
	}

	.top-left{
		float:left;
	}

	.top-right{
		float: right;
	}

	.top-right ul li{
		float: left;
		margin:0px 10px;
	}

	.top-right ul li a:hover{
		text-decoration: underline;
	}
</style>
<?php
	session_start();
	echo "<script>var html = \"<ul><li><a href='login.html'>登录</a></li><li><a href='register.html'>注册</a></li></ul>\"</script>;"
	echo "<script>$('.top-right').append(html)</script>";
?>
<body>
	<div id="top">
		<div class="top clearAfter">
			<div class="top-left">
				我是左边
			</div>
			<div class="top-right">
				<!-- <ul>
					<li><a href="login.html">登录</a></li>
					<li><a href="register.html">注册</a></li>
				</ul> -->
				<!-- <ul>
					<li><?php echo $_SESSION['username'] ?></li>
				</ul> -->
			</div>
		</div>
	</div>
	<script>
		
	</script>
</body>
</html>
