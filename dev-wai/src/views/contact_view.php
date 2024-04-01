<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="static/contact.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <title>Contact form</title>
</head>
<body>
    <header>
        <nav class="topnav">
            <ul class="nav-ul">
                <li class="nav-li">
                    <a href="/index">Main</a>
                </li>
                <li class="nav-li">
                    <a href="/gallery">Galery</a>
                </li>
                <li class="nav-li">
                    <a id="active" href="/contact">Contact form</a>
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
        <div>
            <h2>Contact form</h2>
            <form method="get">
                <label for="fname">First name:</label>
                <input type="text" id="fname" name="fname" placeholder="Enter first name">
                <br>
                <label for="sname">Surname:</label>
                <input type="text" id="sname" name="sname" placeholder="Enter surname">
                <br>
                <label for="birthday">Birthday:</label>
                <input type="date" id="birthday" name="birthday">
                <div class="widget">
                    <fieldset>
                      <legend>Select your occupation: </legend>
                      <label for="radio-1">Art student</label>
                      <input type="radio" name="radio-1" id="radio-1">
                      <label for="radio-2">Art teacher</label>
                      <input type="radio" name="radio-1" id="radio-2">
                      <label for="radio-3">Other</label>
                      <input type="radio" name="radio-1" id="radio-3">
                    </fieldset>
                    <fieldset>
                      <legend>What would you like to study: </legend>
                      <label for="checkbox-1">Professional art</label>
                      <input type="checkbox" name="checkbox-1" id="checkbox-1">
                      <label for="checkbox-2">History of art</label>
                      <input type="checkbox" name="checkbox-2" id="checkbox-2">
                      <label for="checkbox-3">Restoration</label>
                      <input type="checkbox" name="checkbox-3" id="checkbox-3">
                      <label for="checkbox-4">Sculpture</label>
                      <input type="checkbox" name="checkbox-4" id="checkbox-4">
                    </fieldset>
                    <fieldset>
                      <legend>Preferred schedule: </legend>
                      <label for="checkbox-nested-1">9.00/11.00
                        <input type="checkbox" name="checkbox-nested-1" id="checkbox-nested-1">
                      </label>
                      <label for="checkbox-nested-2">12.00/14.00
                        <input type="checkbox" name="checkbox-nested-2" id="checkbox-nested-2">
                      </label>
                      <label for="checkbox-nested-3">16.00/18.00
                        <input type="checkbox" name="checkbox-nested-3" id="checkbox-nested-3">
                      </label>
                      <label for="checkbox-nested-4">19.00/21.00
                        <input type="checkbox" name="checkbox-nested-4" id="checkbox-nested-4">
                      </label>
                    </fieldset>
                    <fieldset>
                      <legend>What art movement are you most interested in:</legend>
                      <label for="movements">
                        <select id="movements" name="movements">
                          <option value="Modern Art">Modern Art</option>
                          <option value="Impressionism">Impressionism</option>
                          <option value="Expressionism">Expressionism</option>
                          <option value="Classicism">Classicism</option>
                          <option value="Baroque">Baroque</option>
                          <option value="Romanticism">Romanticism</option>
                        </select>
                      </label>
                    </fieldset>
                  </div>
                  <label for="email">Enter your email:</label>
                  <input type="email" id="email" name="email">
                  <br>
                <input type="submit" value="Submit">
                <input type="reset" value="Clear">
            </form>
        </div>
        <div class="prices-table">
          <table id="prices">
            <tr>
              <th>Course</th>
              <th>Short description</th>
              <th>Schedule</th>
              <th>Price</th>
            </tr>
            <tr>
              <td>Foundation diploma in art and design</td>
              <td>The course is unique in offering both specialist and diagnostic modes of study. If you're confident about your future direction, the specialist course lets you apply to one of five curriculum areas.</td>
              <td>Monday/Wednesday/Friday 9.00/11.00</td>
              <td>600 dollars/6 month</td>
            </tr>
            <tr>
              <td>BA (Hons) Animation</td>
              <td>BA (Hons) Animation is a practice-led course, enabling you to choose one of two specialist pathways: Experimental and Character. You’ll gain entrepreneurial skills, develop expertise across the production process.</td>
              <td>Tuesday/Thursday/Saturday 12.00/14.00</td>
              <td>1000 dollars/9 month</td>
            </tr>
            <tr>
              <td>Graduate Diploma Fashion Design Technology</td>
              <td>This intensive one-year course is for students who want to build upon their knowledge of fashion design principles to progress onto a Masters or into industry.</td>
              <td>Monday/Tuesday/Thursday/Sunday 16.00/18.00</td>
              <td>2500 dollars/12 months</td>
            </tr>
            <tr>
              <td>MA Performance: Society</td>
              <td>This course critically explores the boundaries between art, performance, screen, theatre and activism in your own context and place.</td>
              <td>Tuesday/Wednesday/Friday/Sunday 19.00/21.00</td>
              <td>500 dollars/3 months</td>
            </tr>
          </table>
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