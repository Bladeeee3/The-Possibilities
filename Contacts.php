<!DOCTYPE html>
<html lang= "en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Contacts</title>
<link rel="stylesheet" href="Library.css">
<style>
*{
    box-sizing: border-box;
}
body{
    background-image: url(Media/BG.png);
    background-repeat: no-repeat;
    background-size: cover;
}
.box{
    margin: auto;
    margin-top:5%;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40%;
    height: 50%;
    background: #707e4b;
    box-shadow: 4px 6px 30px rgba(0, 0, 0, 0.1);
    border-radius: 25px;
    outline: none;
    text-align: center;
}
.box header{
    color: #fff2ea;
    font-size: 8vh;
    font-weight: bold;
    padding-bottom: 10px;
    margin-bottom: 10px;
    border-bottom: 2px solid #9aa47e;
}
.box p{
    color: #fff2ea;
    padding-bottom: 10px;
    margin-bottom: 10px;
    font-size: 3vh;
    font-weight: bold;
}

.box p a{
    font-size: 2.5vh;
    color: #fff2ea;
    text-decoration: none;
}
.box p a::after{
    content:'';
    width: 0%;
    height: 2px;
    background: #fff2ea;
    display: block;
    margin: auto;
    transition: 0.5s;
}

.box p a:hover::after{
    width: 100%;
}

.box p a:hover{
    color: #fff2ea;
}
</style>
</head>
<body>
    <div class="header"> 
        <nav>
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="About.php">About Us</a></li>
                <li>
                <form action="home.php" method="GET">
                    <div class="search">
                        <span class="search-icon material-symbols-outlined">search</span>
                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="search-input" placeholder="Search">
                </form>
                </li>
                <li><a href="Contacts.php">Contacts</a></li>
                <li><a href="Welcome.html">Log Out</a></li>
              </ul>
        </nav>
    </div>
<div class="box">
    <header>CONTACT US</header>
    <p>De La Salle University of Dasmarinas- Dasmarinas DBB- B City of Dasmarinas Cavite</p>
    <p>+63 (999) 439.8559 
    <br>+63 (921) 319.4328 
    <br>+63 (906) 473.6962 
    <br>+63 (927) 490.4999 
    <br>+63 (942) 054.5259</p>
    <p><a href="mailto:thepossibilitiesdlsud@sample.com"><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#fff2ea"><path d="M168-192q-29.7 0-50.85-21.16Q96-234.32 96-264.04v-432.24Q96-726 117.15-747T168-768h624q29.7 0 50.85 21.16Q864-725.68 864-695.96v432.24Q864-234 842.85-213T792-192H168Zm312-240L168-611v347h624v-347L480-432Zm0-85 312-179H168l312 179Zm-312-94v-85 432-347Z"/></svg>thepossibilitiesdlsud@sample.com</a></p>
</div>
    
</body>