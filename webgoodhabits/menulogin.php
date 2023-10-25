<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Woops! Email Atau Password anda Salah.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<title>Login goodHABITS</title>
</head>
<body>
    <div class="navbar">
        <a href=""><img src="img/menu.png" alt="" id="menu"></a>
        <p id="logo">goodHABITS <br> make your life better</p>
        <input type="text" placeholder="what you need right now?" id="search">
        <a href=""><img src="img/search-interface-symbol.png" alt="" id="search2"></a>
    </div>
	<div class="login-page">
		<form action="" method="POST">
			<h2 id="welcome-a" >Welcome to goodHabits</h2>
            <p id="sysa" >Sign Your Account</p>
            <br><br><br>
			<div>
                <p id="uss" >Email</p>
				<input type="email" id="tab" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
            <br><br>
			<div >
                <p id="uss" >Password</p>
				<input type="password" id="tab" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
            <br><br>
			<div class="input-group">
				<button name="submit" id="sign-in">Sign In</button>
			</div>
            <br>
			<p id="uss1">Don't have an account? <a href="signup.php" id="sign-upsign" >Register Here</a>.</p>
		</form>
	</div>
</body>
</html>
