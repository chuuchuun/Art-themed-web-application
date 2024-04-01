<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="static/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <title>Fine arts</title>
</head>
<body>
    <header>
        <a id="top"></a>
        <nav class="topnav">
            <ul class="nav-ul">
                <li class="nav-li">
                    <a id="active"  href="/index">Main</a>
                    <ul class="dropdown">
                        <li><a href="#claude-monet" >Claude Monet</a></li>
                        <li><a href="#leonardo-da-vinci">Leonardo <br>da Vinci</a></li>
                        <li><a href="#benefits">Benefits</a></li>
                      </ul>
                </li>
                <li class="nav-li">
                    <a href="/gallery">Gallery</a>
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
    <div class="header-image">
        <div class="header-text">
            <h2 id="headerText">
                A brief excursion into the history of fine arts.
            </h2>
        </div>
    </div>
    <div class="main-content">
        <div>
            <h2>Some of the most famous paintings</h2>
            <ul class="main-images">
                <li>
                    <p>
                        <img src="static/thelastsupper.jpg" alt="The Last Supper" class="image1">
                    </p>    
                    <div>
                        <h3>
                            The Last Supper
                        </h3>
                        <p class="description">
                        Artist: Leonardo da Vinci
                        <br>
                        Estimated date: 1495 to 1498
                        <br>
                        Where to see it: Santa Maria delle Grazie (Milan, Italy)
                        </p>
                    </div>    
                </li>
                <li>
                    <p>
                        <img src="static/girlwithapearlearring.jpg" alt="Girl With A Pearl Earring" class="image1">
                    </p>
                    <div>
                        <h3>
                            Girl With A Pearl Earring
                        </h3>
                        <p class="description">
                            Artist: Johannes Vermeer
                            <br>
                            Estimated date: 1665
                            <br>
                            Where to see it: Mauritshuis (The Hague, Netherlands)
                        </p>
                    </div>
                </li>
                <li>
                    <p>
                        <img src="static/thebirthofvenus.jpg" alt="The Birth Of Venus" class="image1">
                    </p>
                    <div>
                        <h3>
                            The Birth Of Venus
                        </h3>
                        <p class="description">
                        Artist: Sandro Botticelli
                        <br>
                        Estimated date: 1485
                        <br>
                        Where to see it: Le Gallerie Degli Uffizi (Florence, Italy)
                        </p>
                    </div>
                </li>
            </ul>
        </div> 
    </div>
    <div id="claudeMonet">
        <a id="claude-monet"></a>
        <h2>Oscar-Claude Monet</h2>
        <div class="main">
        <div class="pictures-gallery">
        <img class="pic1" src="static/impressionsunrise.jpg" alt="Impression, Sunrise">
        <img class="pic1" src="static/thebeachatsainteadresse.jpg" alt="The Beach At Sainte-Adresse">
        <img class="pic1" src="static/poppies.jpg" alt="Poppies">
        <img class="pic1" src="static/arrivalofthenormandytraingaresaintlazare.jpg" alt="Arrival Of The Normandy Train, Gare Saint-Lazare">
        </div>
        <p class="info">
            Claude Monet, in full Oscar-Claude Monet, (born November 14, 1840, Paris, France—died December 5, 1926, Giverny), French painter who was the initiator, leader, and unswerving advocate of the Impressionist style. In his mature works, Monet developed his method of producing repeated studies of the same motif in series, changing canvases with the light or as his interest shifted. These series were frequently exhibited in groups—for example, his images of haystacks (1890/91) and the Rouen cathedral (1894). At his home in Giverny, Monet created the water-lily pond that served as inspiration for his last series of paintings. His popularity soared in the second half of the 20th century, when his works traveled the world in museum exhibitions that attracted record-breaking crowds and marketed popular commercial items featuring imagery from his art.
            <br>
            <br>
            When Claude, the eldest son of Adolphe Monet, a grocer, was five years old, the family moved to the Normandy coast, near Le Havre, where his father took over the management of his family’s thriving ship-chandlering and grocery business. This event has more than biographical significance, for it was Monet’s childhood, spent along the beaches, and the intimate knowledge he gained of the sea and the rapidly shifting Norman weather, that would one day give rise to his fresh vision of nature. Monet’s first success as an artist came when he was 15, with the sale of caricatures that were carefully observed and well drawn. In these early years he also executed pencil sketches of sailing ships, which were almost technical in their clear descriptiveness. His aunt, Marie-Jeanne Lecadre, was an amateur painter, and, perhaps at her suggestion, Claude went to study drawing with a local artist. But his life as a painter did not begin until he was befriended by Eugène Boudin, who introduced the somewhat arrogant student to the practice—then uncommon—of painting in the open air. The experience set the direction for Monet, who for more than 60 years would concentrate on visible phenomena and on the innovation of effective methods to transform perception into pigment.
            <br>
            <br>
            The exceptional achievements of Monet’s prolific youthful period can be measured in works completed between 1865 and 1870, before he had begun to fragment his brushstrokes into the characteristic broken touches that were to become the hallmark of Impressionist style. One of the most ambitious of these early works (which was never finished, supposedly because of negative comments by Gustave Courbet) was Le Déjeuner sur l’herbe (1865–66; “Luncheon on the Grass”), named after Édouard Manet’s notorious painting shown in the Salon des Refusés in 1863. In contrast to Manet’s masterpiece, which was a shocking adaptation of a Renaissance visual idea to a contemporary setting, Monet’s painting was an utterly contemporary yet unprovocative representation of a group of fashionably dressed picnickers in the forest of Fontainebleau. Monet did share with Manet, however, a concern for representing actual scenes of modern life rather than contrived historical, romantic, or fanciful subjects. Thus, Monet’s Déjeuner was an extension, by virtue of a more immediate empiricism, of the Realism of Courbet.
            <br>
            <br>
            Impressionism, broadly viewed, was a celebration of the pleasures of middle-class life; indeed, Monet’s subject matter from this period often involved domestic scenes featuring his wife, son, and garden. Yet, painting la vie moderne (“modern life”) was not to be the primary aim of Monet’s art. Of more significance in his case was his ceaseless search for painterly means to implement his radical view of nature. More so than his ambitious figure paintings, such works as On the Bank of the Seine, Bennecourt (1868) or The Beach at Sainte-Adresse (1867) give a clear accounting of Monet’s advance toward the Impressionist style. In the beach and sea pictures of 1865–67 Monet was plainly not trying to reproduce faithfully the scene before him as examined in detail but rather attempting to record on the spot the impression that relaxed, momentary vision might receive—what is seen rather than what is known, with all its vitality and movement. Boats, buildings, incidental figures, and the pebble beach are swiftly brushed in as flat colour patterns, with little attention paid to their weight or solidity.
       </p>
        </div>
    </div>
    <div id="leonardoDaVinci">
        <a id="leonardo-da-vinci"></a>
        <h2>Leonardo da Vinci</h2>
        <div class="main">
        <div class="pictures-gallery">
        <img class="pic1" src="static/annunciation.jpg" alt="Annunciation">
        <img class="pic1" src="static/virginoftherocks.jpg" alt="Virgin Of The Rocks">
        <img class="pic1" src="static/thebattleofanghiari.jpg" alt="The Battle Of Anghiari">
        <img class="pic1" src="static/saladelleasse.jpg" alt="Sala Delle Asse">
        </div>
        <p class="info">
            Leonardo da Vinci, (Italian: “Leonardo from Vinci”) (born April 15, 1452, Anchiano, near Vinci, Republic of Florence [Italy]—died May 2, 1519, Cloux [now Clos-Lucé], France), Italian painter, draftsman, sculptor, architect, and engineer whose skill and intelligence, perhaps more than that of any other figure, epitomized the Renaissance humanist ideal. His Last Supper (1495–98) and Mona Lisa (c. 1503–19) are among the most widely popular and influential paintings of the Renaissance. His notebooks reveal a spirit of scientific inquiry and a mechanical inventiveness that were centuries ahead of their time.
            <br>
            <br>
            Leonardo’s artistic inclinations must have appeared early. When he was about 15, his father, who enjoyed a high reputation in the Florence community, apprenticed him to artist Andrea del Verrocchio. In Verrocchio’s renowned workshop Leonardo received a multifaceted training that included painting and sculpture as well as the technical-mechanical arts. He also worked in the next-door workshop of artist Antonio Pollaiuolo. In 1472 Leonardo was accepted into the painters’ guild of Florence, but he remained in his teacher’s workshop for five more years, after which time he worked independently in Florence until 1481. There are a great many superb extant pen and pencil drawings from this period, including many technical sketches—for example, pumps, military weapons, mechanical apparatus—that offer evidence of Leonardo’s interest in and knowledge of technical matters even at the outset of his career.
            <br>
            <br>
            As a painter, Leonardo completed six works in the 17 years in Milan. (According to contemporary sources, Leonardo was commissioned to create three more pictures, but these works have since disappeared or were never done.) From about 1483 to 1486, he worked on the altar painting The Virgin of the Rocks, a project that led to 10 years of litigation between the Confraternity of the Immaculate Conception, which commissioned it, and Leonardo; for uncertain purposes, this legal dispute led Leonardo to create another version of the work in about 1508. During this first Milanese period he also made one of his most famous works, the monumental wall painting Last Supper (1495–98) in the refectory of the monastery of Santa Maria delle Grazie (for more analysis of this work, see below Last Supper). Also of note is the decorative ceiling painting (1498) he made for the Sala delle Asse in the Milan Castello Sforzesco.
            <br>
            <br>
            During this period Leonardo worked on a grandiose sculptural project that seems to have been the real reason he was invited to Milan: a monumental equestrian statue in bronze to be erected in honour of Francesco Sforza, the founder of the Sforza dynasty. Leonardo devoted 12 years—with interruptions—to this task. In 1493 the clay model of the horse was put on public display on the occasion of the marriage of Emperor Maximilian to Bianca Maria Sforza, and preparations were made to cast the colossal figure, which was to be 16 feet (5 metres) high. But, because of the imminent danger of war, the metal, ready to be poured, was used to make cannons instead, causing the project to come to a halt. Ludovico’s fall in 1499 sealed the fate of this abortive undertaking, which was perhaps the grandest concept of a monument in the 15th century. The ensuing war left the clay model a heap of ruins.
            <br>
            <br>
            As a master artist, Leonardo maintained an extensive workshop in Milan, employing apprentices and students. Among Leonardo’s pupils at this time were Giovanni Antonio Boltraffio, Ambrogio de Predis, Bernardino de’ Conti, Francesco Napoletano, Andrea Solari, Marco d’Oggiono, and Salai. The role of most of these associates is unclear, leading to the question of Leonardo’s so-called apocryphal works, on which the master collaborated with his assistants. Scholars have been unable to agree in their attributions of these works.
        </p>
        </div>
    </div>
    <div class="background">
        <p class="paint-text">
            <img src="static/paint.jpg" class="painting" alt="painting">
        </p>
        <div class="benefits">
            <a id="benefits"></a>
            <h2>Benefits of Art</h2>
            <p>
                Art provides numerous benefits to students. It is actually quite astonishing to see the huge variety of skills that students can develop and gain from simply participating in art. These skills are not only beneficial during childhood, but they are also equally as important on into adulthood and useful in the real world.
            </p>
            <h3>Focus and Problem Solving</h3>
            <p>
                Students who participate in art strengthen their focus skills. Students must focus on the “problem” at hand. For visual art, that problem may be determining which art tools or materials will effectively create the picture that they have in their minds. For performance art, students may need accurate timing to come in on cue. Regardless of the art medium, students must stay in tune with what is happening in order to successfully complete their work.
            </p>
                <h3>Intrinsic Motivation</h3>
            <p>
                Intrinsic motivation is defined as doing something without expecting any external reward. Students will take part in art without any care as to whether or not they will be given recognition for their work. Additionally, art is not considered a chore or “work” for most students. Art creates a sense of enjoyment in students, and they naturally want to share in the fun.
            </p>
        </div>
    </div>
    <footer>
        
        <p>
        <a href="#top" class="contact">Go to the top of the page</a>
        <br>
        Contacts:
            <br>
        tel:<a class="contact" href="tel:+48000000000">+48 000 000 000</a>
        <br>
        e-mail:<a class="contact" href="mailto:art@gmail.com">art@gmail.com</a></p>
    </footer>
</body>
</html>