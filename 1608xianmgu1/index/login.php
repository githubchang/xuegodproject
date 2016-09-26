<!DOCTYPE html>
<html>
<head>
	<title>曹老师商城登录页面</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h3>用户登录</h3>
		<form action="../houtai/users/q-login.php" method="post">
			<table width="300" border="0">
			<tr>
				<td>账号:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>密码:</td>
				<td><input type="password" name="pass"></td>
			</tr>
			<tr>
					<td align="right">验证码:</td>
					<td>
						<input type="text" size=6 name="ucode" />
						<img src="./public/code.php" onclick="this.src='./public/code.php?id='+Math.random();"/>
					</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="登录">
					<input type="reset" value="重置">
				</td>
			</tr>
			</table>
		</form>
	</center>
</body>
</html>