<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<form action="index.php?r=login/login_pro" method="post">
		<input type="hidden" name="_csrf" id="csrf" value="<?= Yii::$app->request->csrfToken?>">
			<table>
				<tr>
					<td>用户名：</td>
					<td><input type="text" name="uname"></td>
				</tr>
				<tr>
					<td>密码：</td>
					<td><input type="password" name="pwd"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="登录"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>