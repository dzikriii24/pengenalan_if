<?php 

include "config.php";

error_reporting(0);

session_start();

if (isset ($_SESSION ['username'])){
    header ("location:menulogin.php");
}
if (isset($_POST['submit'])){
    $username = $_POST ['username'];
    $email = $_POST ['email'];
    $password =md5($_POST [ 'password']);
    $_cppassword = md5 ($_POST ['cpassword']);
    if ($password == $_cppassword) {
        $sql = "SELECT * FROM users WHERE email = '$email'";

        $result = mysqli_query ($conn, $sql);

        if (!$result-> num_rows>0){
            $sql = "INSERT INTO users (username, email, password)
            VALUES ('$username', '$email', '$password')";
            $result = mysqli_query ($conn, $sql);
            if ($result){
                echo "<script>
                alert ('user regis success')
                </script>";
                $username = "";
                $email = "";
                $_POST ['password']= "";
                $_POST ['cpassword']= "";
            }
            else {
                echo "<script>
                alert ('ada yang salah')
                </script>";
            }
        }else {
            echo "<script>alert ('email sudah digunakan')</script>";
        }
    
    }else {
        echo "<script>alert ('password tidak sama')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100&display=swap" rel="stylesheet">
    
</head>
<body>
   
    <div class="navbar">
        <a href=""><img src="img/menu.png" alt="" id="menu"></a>
        <p id="logo">goodHABITS <br> make your life better</p>
        <input type="text" placeholder="what you need right now?" id="search">
        <a href=""><img src="img/search-interface-symbol.png" alt="" id="search2"></a>
    </div>
    <div class="signup-page">
    <form action="" method="POST">
        <h2 id="w-signup">Welcome to goodHABITS</h2>
        <p id="p-signup">Sign up your account</p>
        <br><br><br>
        <p id="name-signup">Username</p>
        <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required id="tab-signup">
        <br><br>
        <p id="name-signup">Email</p>
        <input type="email" placeholder="Ex@gmail.com" name="email" value="<?php echo $email; ?>" required id="tab-signup">
        <br><br>
        <p id="name-signup">Password</p>
        <input type="password" placeholder="Password" name="password" value="<?php echo  $_POST ["password"] ?>" required id="tab-signup">
        <br><br>
        <p id="name-signup">Confirm Password</p>
        <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo  $_POST ["cpassword"] ?>" required id="tab-signup">
        <br><br><br>
        <button name="submit" id="btn-signup">Create Account</button>
        <br>
        <p id="p-sgsnp">All ready have an account? <a href="menulogin.php" id="sign-upsign">Sign In</a>.</p>
        </form>
    </div>
    </div>

</body>
</html>

