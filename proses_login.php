<?php
	include "konek.php";

	session_start();

	if (isset($_POST['login'])){
		$username = $_POST['user'];
		$password = $_POST['pass'];

		$query = mysql_query("SELECT * FROM login WHERE username = '$username' and password = '$password'");
		$rows = mysql_num_rows($query);

		if ($rows == 1){
			$_SESSION['login_user']=$username;
			header("Location:index.php");
		}else{
			echo "<link rel='stylesheet' type='text/css' href='style_login.css'>";

			echo '<div class="container">';
			echo '<div class="kiri">';
				echo '<div class="img">';
					echo '<img src="img/book.jpg">';
				echo '</div>';
			echo '</div>';
			echo '<div class="kanan">';
				echo '<div class="login">';
					echo '<h3>Login</h3>';

					echo '<p>Gagal Login</p>';
					echo '<a href="login.php"><input type="submit" name="kembali" value="Kembali"></a>';
				echo '</div>';
			echo '</div>';
		echo '</div>';
		}
	}
?>