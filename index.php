<?php

//print_r($_POST);
if(isset($_POST['page_id']))
{
    extract($_POST);
}
?>


    <html>


    <head>
        <title></title>
        <link rel="stylesheet" href="css/index.css">
    </head>

    <body>
        <div class="header">
            <h1>welcome to the visiting card</h1>
        </div>
        <div class="nav">
            <ul class=" nav li">

                                <li><a href="index.php?page_id=main">home </a></li>
                <li><a href="?page_id=card1">card1 </a></li>
                <li><a href="?page_id=card2">card2 </a></li>
                <li><a href="?page_id=card3">card3 </a></li>
                <li><a href="?page_id=card4">card4</a></li>
                <li><a href="?page_id=card5">card5</a></li>


            </ul>
        </div>

        <div class="mid">
            <?php
        @$page_id=$_GET['page_id'];
        switch($page_id)
        {
            case 'main':
        
        include 'main.php';}
        ?>
        </div>

        </div>

        <div class="footer clr "></div>
    </body>

    </html>
