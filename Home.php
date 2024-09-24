<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Home</title>
    <link rel="stylesheet" href="Library.css">
    <style>
        .sub-header {
            height: 60vh;
            width: 100%;
            background-image: url(Media/Header.png);
            background-position: 0% 40%;
            background-size: cover;
        }
        table th, table td {
            text-align: center;
        }
        th.year, td.year {
            width: 5%;
        }

        th.strand, td.strand {
            width: 5%;
        }
        th.source, td.source {
            width: 10%;
        }

        th.title, td.title, th.author, td.author{
            text-align: left;
            width: 30%;
        }
        td.source a{
            color: #353e26;
        }
        td.source a::after{
            background: #9aa47e;
            display: block;
            margin: auto;
        }

        td.source a:hover::after{
            width: 100%;
        }

        td.source a:hover{
            color: #9aa47e;
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
    </section>
    <div class="card-body">
    <h2>RESEARCH LIBRARY</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="year">YEAR</th>
                    <th class="title">TITLE</th>
                    <th class="author">AUTHOR</th>
                    <th class="strand">STRAND</th>
                    <th class="source">SOURCE</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $con = mysqli_connect("localhost","root","","library");

                    if(isset($_GET['search']))
                    {
                        $filtervalues = $_GET['search'];
                        $query = "SELECT * FROM lib WHERE CONCAT(year, title, author, strand, source) LIKE '%$filtervalues%' ";
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $items)
                            {
                                ?>
                                <tr>
                                    <td class="year"><?= $items['year']; ?></td>
                                    <td class="title"><?= $items['title']; ?></td>
                                    <td class="author"><?= $items['author']; ?></td>
                                    <td class="strand"><?= $items['strand']; ?></td>
                                    <td class="source"><a href="<?= $items['source']; ?>" target="_blank">Link</a></td>
                                </tr>
                                <?php
                            }
                        }
                        else
                        {
                            ?>
                                <tr>
                                    <td colspan="5" style="text-align: left;">No Record Found</td>
                                </tr>
                            <?php
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
