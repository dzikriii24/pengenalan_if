<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>goodHABITS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100&display=swap" rel="stylesheet">
    
</head>
<body>
    <style>
        #search:hover {
            background-color: skyblue;
            transition: ease-in-out;
            transition-delay: 300ms;
            cursor: pointer;
        }
        #menu:hover {
            background-color: #f8f6f4;
            border-radius: 10px;
            transition: ease-in-out;
            transition-delay: 100ms;
        }
        #reg:hover {
            background-color: skyblue;
            transition-delay: 300ms;
            color: white;
            transition: ease-in-out;
            border: 0.5px solid black;
        }
        #c2:hover {
            color: white;
            transition-delay: 200ms;
            transition: ease-in-out;
        }
        #c1:hover {
            color: white;
            transition-delay: 200ms;
            transition: ease-in-out;
        }

    </style>
    <div class="navbar">
        <a href="index.php"><img src="img/menu.png" alt="" id="menu"></a>
        <p id="logo">goodHABITS <br> make your life better</p>
        <input type="text" placeholder="what you need right now?" id="search">
        <a href=""><img src="img/search-interface-symbol.png" alt="" id="search2"></a>
    </div>

    <div class="button">
        <a href="menulogin.php"><button id="reg"> Sign In</button></a>
        <a href="signup.php"><button id="reg">Sign Up</button></a>
    </div>


    <div class="choice">
        <a href="profil.php"><h4 id="c1">Profil</h4></a>
        <br>
        <a href="saldotab.php"><h4 id="c2">Tabunganmu</h4></a>
    </div>

</body>
</html>