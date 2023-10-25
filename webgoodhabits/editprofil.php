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
        #file {
            display: none;
        }
        #change-pic:hover {
            background-color: skyblue;
            font-weight: bold;
            color: white;
            transition-delay: 100ms;
            transition: ease-in-out;
        }
        #text-change1:hover {
            background-color: skyblue; 
            color: white;
            transition-delay: 100ms;
            transition: ease-in-out;
        }
        #text-change2:hover {
            width: fit-content;
            background-color: skyblue;
            color: white;
            transition-delay: 100ms;
            transition: ease-in-out;
        }
        #text-change3:hover {
            width: fit-content;
            background-color: skyblue;
            color: white;
            transition-delay: 100ms;
            transition: ease-in-out;
        }
        #bttn-chg:hover {
            font-weight: bold;
            background-color: skyblue;
            color: white;
            transition-delay: 100ms;
            transition: ease-in-out;
        }
    </style>
    <div class="navbar">
        <a href="profil.php"><img src="img/menu.png" alt="" id="menu"></a>
        <p id="logo">goodHABITS <br> make your life better</p>
    </div>
    <div class="img-profile">
        <img src="img/hitler.png" alt="" id="profil-picture">
        <br>
        <label for="file" id="change-pic">Ganti Foto Profil</label>
        <br>
        <input type="file" id="file">
        <br><br>
        <div class="i2">
        <p id="tab-3">Ganti Username <input type="text" id="text-change1"></p>
        <br><br>
        <p id="tab-3">Tambahkan Pekerjaan <input type="text" id="text-change2"></p>
        <br><br>
        <p id="tab-3">Tambahkan Instagram <input type="text" id="text-change3"></p>
        </div>
        <br> <br>
        
        <button id="bttn-chg">Submit</button>
    </div>
   
   




























</body>
</html>