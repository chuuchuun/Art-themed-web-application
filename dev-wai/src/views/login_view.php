<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="static/registration.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <header>
        <nav class="topnav">
            <ul class="nav-ul">
                <li class="nav-li"> 
                    <a href="/index">Main</a>
                </li>
                <li class="nav-li">
                    <a href="/gallery">Gallery</a>
                </li>
                <li class="nav-li">
                    <a href="/contact">Contact form</a>
                </li>
                <li class="nav-li">
                    <a href="/registration">Registration</a>
                </li>
                <li class="nav-li">
                    <a id="active" href="/login">Log in</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="main-content"> 
<form method="POST">
    <h2> Login page </h2>
                <label for="name">Login:
                <input type="name" id="name" placeholder="Enter your login" name="login" required>
                </label>
                <br/>
                <label for="password">Password:
                <input type="password" id="password" placeholder="Enter your password" name="password" required>
                </label>
                <br/>
                <button type="submit"id="sub" name="submit">Log in</button>
                <?php if (($message)!== null)
                    echo "<h3> $message </h3>";
                ?>
</form>
<footer>
        <p>Contacts:
        <br>
        tel:<a class="contact" href="tel:+48000000000">+48 000 000 000</a>
        <br>
        e-mail:<a class="contact" href="mailto:art@gmail.com">art@gmail.com</a></p>
    </footer>
</body>
</html>