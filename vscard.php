<?php
if(isset($_POST['sub']))
{

extract ($_POST); 
    
}

$bg1=$_GET['bg'];

?>






    <html>

    <head>
        <link rel="stylesheet" href="css/index.css">
    </head>

    <body>
        <div class="header">
            <h1>welcome to greeting card</h1>
        </div>
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
            <div class="form  fl bg1">

                <form method="post">

                    <h1> <input type="text" name="txt" value="" placeholder="enter your name" class="input1"></h1>
                    <h1> <input type="email" name="mail" value="" placeholder="enter your email" class="input1"></h1>
                    <h1> <input type="number" name="num" value="" placeholder="enter your contact no." class="input1"></h1>
                    <h1> <input type="color" name="clr" value="" class="input1"></h1>

                    <h1>
                        <input type="submit" name="sub" value="submit" style="background-color:blue; margin-top:13px;"></h1>

                </form>

            </div>
            <div class="form fr <?php echo $bg1;?>" style=" color:<?php echo $clr;?>;">


                <h1>
                    <?php
                   echo @$txt;?>
                </h1>
                <h1>
                    <h1>
                        <?php
                   echo @$mail;?>
                    </h1>
                    <?php
                   echo @$num;?>
                </h1>
                <h1>
                    <?php
                   echo @$date;?>
                </h1>

                <h1>
                    <?php
                   echo @$sub;?>
                </h1>


            </div>
        </div>

    </body>

    </html>
