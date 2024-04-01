<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="static/gallery.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <title>Gallery</title>
</head>
<body>
    <header>
        <nav class="topnav">
            <ul class="nav-ul">
                <li class="nav-li"> 
                    <a href="/index">Main</a>
                </li>
                <li class="nav-li">
                    <a id="active" href="/gallery">Gallery</a>
                </li>
                <li class="nav-li">
                    <a href="/contact">Contact form</a>
                </li>
                <?php 
                if (isset($_SESSION['user_id']))
                    echo '
                    <li class="nav-li"><a>You are logged in</a></li>
                    <li class="nav-li"> <a href="/logout">Logout</a>';
                else{
                    echo '
                    <li class="nav-li"><a href="/registration">Registration</a></li>
                    <li class="nav-li"><a href="/login">Log in</a></li>';
                }
                ?>
            </ul>
        </nav>
    </header>
    <div class="main-content"> 
        <form method="post" action="" enctype="multipart/form-data" >
            <br/>
        <label for ="image">Please choose a file </label>
        <input name="image" type="file">
        <br/>
        <label for = "watermark"> Please enter the watermark </label>
        <input type="text" name="watermark" placeholder ="Enter watermark">
        <br/>
        <label for = "title"> Please enter the title </label>
        <input type="text" name="title" placeholder="Enter the title">
        <br/>
        <label for = "author"> Please enter your name </label>
        <input type="text" name="author" placeholder="Enter your name">
        <br/>
        <input class="button" type="submit" name="submit" value="Upload">
        </form>
        <div>
            <?php
               $error = $model['error'];
               if($error!=''){
                echo "$error";
               }  
            ?>

        </div>
        <div>
        <?php 
            foreach($model['images'] as $image){
                $path= './images/M_' . $image['name'];
                $watermarkPath = './images/W_' . $image['name'];
                $title = $image['title'];
                $author = $image['author'];
                echo "
                    <br/>
                    <a href='$watermarkPath'>
                        <img style='height:200px; width:200px;' src='$path'>
                    </a>
                    <p>Title: $title 
                    <br/>
                    Author: $author </p>";
            }
        ?>        
        </div>
    </div>
    <footer>
        <p>Contacts:
        <br>
        tel:<a class="contact" href="tel:+48000000000">+48 000 000 000</a>
        <br>
        e-mail:<a class="contact" href="mailto:art@gmail.com">art@gmail.com</a></p>
    </footer>
</body>
</html>