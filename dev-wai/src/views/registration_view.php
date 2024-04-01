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
    <title>Registration</title>
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
                    <a id="active" href="/registration">Registration</a>
                </li>
                <li class="nav-li">
                    <a href="/login">Log in</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="main-content"> 
<form method="POST"  class="transparent">
    <div class="form-inner">
        <h2>Create a new account</h2>
        <label for="name">Name:
        <input name="name" placeholder="Enter your name" required>
        </label>
        <br/>
        <label for="surname">Surname:
        <input name="surname" placeholder="Enter your surname" required>
        </label>
        <br/>
        <label for="email">E-mail:
        <input name="email" placeholder="Enter your e-mail" required>
        </label>
        <br/>
        <label for="login">Login:
        <input name="login" placeholder="Enter your login" required>
        </label>
        <br/>
        <label for="password">Password:
        <input type="password" placeholder="Enter your password" name="password" required>
        </label>
        <br/>
        <label for="password">Repeat password:
        <input type="password" placeholder="Repeat your password" name="password2" required>
        </label>
        <br/>
        <input type="hidden" name="id" value="<?= $user['_id'] ?>">
        <button type="submit" name="register">Create an account</button>
        <input type="reset" name="reset">
        <br/>
        <?php 
            echo $model['errors'];
        ?>
    </div>
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