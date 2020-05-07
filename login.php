<!DOCTYPE html>
<html>
	<head>
		<title>Login | Perpustakaan</title>
		<link rel="stylesheet" type="text/css" href="style_login.css">
	</head>
	<body>
		<div class="container">
			<div class="kiri">
				<div class="img">
					<img src="img/book.jpg">
				</div>
			</div>
			<div class="kanan">
				<div class="login">
					<h3>Login</h3>

					<form method="POST" action="proses_login.php">
						<table border="0" cellspacing="0" cellpadding="10">
							<tr>
								<td><img src="img/man-user.png"/></td>
								<td><input type="text" placeholder="Username" name="user" required></td>
							</tr>
							<tr>
								<td><img src="img/lock.png"/></td>
								<td><input type="password" placeholder="Password" name="pass" required></td>
							</tr>
							<tr>
								<td colspan="2"><input type="submit" name="login" value="Login"></td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>