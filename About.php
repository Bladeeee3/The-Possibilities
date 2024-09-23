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
    <title>About Us</title>
<link rel="stylesheet" href="Library.css">
<style>
.sub-header{
    height: 60vh;
    width: 100%;
    background-image: url(Media/AboutHdr.png);
    background-position: 0% 40%;
    background-size: cover;
}

.abcontent{
    margin-top: 10vh;
    margin-left: 10vh;
    margin-right: 10vh;
    margin-bottom: 10vh;
}

.abcontent p{
    font-size: 25px;
    font-weight: bold;
    text-align: justify;
    padding-top: 30px;
    padding-right: 50px;
}
.abcontent img{
    float: right;
    padding-left: 50px;
    height: 25%;
    width: 30%;
}
</style>
</head>
<body>
<section class="sub-header">
    <div class="header"> 
        <nav>
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="About.php">About Us</a></li>
                <li>
                <form>
                    <div class="search">
                        <span class="search-icon material-symbols-outlined">search</span>
                        <input class="search-input" type="search" placeholder="Search">
                    </div>
                </form>
                </li>
                <li><a href="Contacts.php">Contacts</a></li>
                <li>Your Account <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#353e26"><path d="M480-360 280-560h400L480-360Z"/></svg>
                    <ul class="dropdown">
                        <li><a class="DpDn" href="Welcome.html">Log Out</a></li>
                    </ul>
                </li>
              </ul>
        </nav>
    </div>
</section>

<div class="abcontent">
    <img src="Media/books.png">
    <p>The project we aim to develop is a website that provides a Research library, 
        targeted for the use of the basiceducation of De La Salle University – Dasmarinas (DLSU-D). 
        This project aims to provide a website that boosts efficiency in management of electronic copies
        of research materials made by past students, these research materials can also be accessed by the
        senior high school students within DLSU-D for their Research Related Literatures and References.
        “The Possibilities” is the website we aim to create as a prototype for our Practical Research 
        markup language our goal is to use HTML, CSS, and JavaScript as the foundation and the Product 
        that we will be developing. For the while using Visual Studio Code as the application to write 
        and run the website. As for the database, it could be between MySQL and PHP MyAdmin depending
        on what will be more suitable for our skills and website.</p>
</div>
    
</body>