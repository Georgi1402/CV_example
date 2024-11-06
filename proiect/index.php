<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width initial-scale=1">
  <script src="script.js"></script>
    <title>WEBSITE FREELANCER</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
$hostname = "localhost";
$username = "root";
$password = "fbtn1zfb";
$bd = "freelancer";
$conexiune = mysqli_connect($hostname, $username, $password, $bd ) or die("Eroare la conectare!");
if (!$conexiune) {
    die("Failed ". mysqli_connect_error());
  }
  else{
    
  }
?>


<header>
    <img id="logo_img" src="logo.png" width="32 px">
    <nav id="desktop">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#servicii">Servicii</a></li>
            <li><a href="#portofoliu">Portofoliu</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul> 
    </nav>
    <div class="hamburger" onclick="show_menu()">
        <img src="meniu.png" >
    </div>
    <nav id="mobile">
        <div id="cross_logo">
            <img src="cross.png" alt="" onclick="hide_menu()">
        </div>
        <ul onclick="hide_menu()">
            <a href="#">
                <li>Home</li>
            </a>
            <a href="#servicii">
                <li>Servicii</li
                    ></a>
            <a href="#portofoliu">
                <li>Portofoliu</li>
            </a>
            <a href="#contact">
                <li>Contact</li>
            </a>
            </ul>
    </nav>
</header>

<section id="hero">
    <div id="desc">
    <h1>Mîtcă Cristina-Georgiana</h1>
    <p>Programator & designer web.</p>
    <p>Full stack dev-HTML5, CSS3, JS, PHP & MySql. I create various websites and web applications. Atention to details, I adapt easily, analytical and results-oriented thinking.</p>
    </div>
    <div>
        <img src="poza.png">
    </div>
 </section>
 <section  id="servicii">
    <h1>Servicii oferite</h1>
    <?php
                    $result = $conexiune->query("SELECT * FROM servicii");
                    while($row = mysqli_fetch_array($result)){
                        echo "<article>";
                            echo "<header>";
                                echo "<img src=".$row["imagine_servicii"]." width=\"30\" >";
                                echo "<h2>".$row["titlu_servicii"]."</h2>";
                            echo "</header>";
                       
                        echo "<p>".$row["descriere_servicii"]."</p>";
 
                        echo "</article>";
                    }
    ?>
    
</section>
<h1 id="h1portofoliu">Portofoliu</h1>


<section id="portofoliu">
    <?php
                $result = $conexiune->query("SELECT * FROM portofoliu");
                while($row = mysqli_fetch_array($result)){
                    echo "<article>";
                            echo "<h3>".$row["client_portofoliu"]."</h3>";
                            echo "<div class=\"servicii-portofoliu\">";
                                if ($row["imagine1_portofoliu"])
                                echo "<img src=".$row["imagine1_portofoliu"]." width=\"30\">";
                                if ($row["imagine2_portofoliu"])
                                    echo "<img src=".$row["imagine2_portofoliu"]." width=\"30\">";
                                if ($row["imagine3_portofoliu"])
                                    echo "<img src=".$row["imagine3_portofoliu"]." width=\"30\">";
                            echo "</div>";
                    
                    echo "<h2>".$row["titlu_portofoliu"]."</h2>";
                    echo "<p>".$row["descriere_portofoliu"]."</p>";
 
                    echo "</article>";
 
                }
                ?>
</section>



<section id="contact">
    <h1>Contacteaza-ma pentru orice detalii</h1>
    <article>
        <h1>Informatii de contact:</h1>
        <h2>Adresa postala</h2>
        <p>Strada Pinului 45, Alba Iulia, jud. Alba.</p>
        <p><h3>Tel.:</h3>0751118943</p>
        <p><h3>Email.:</h3>georgymitca@gmail.com</p>
        <h2>Social media:</h2>
        <img src="logo.png" width="32px" >
        <img src="logo.png" width="32px" >
        <img src="logo.png" width="32px" >
    </article>

    <article >
        <h1>Scrie un mesaj aici:</h1>

        <form action="">
            <div class="row">
            <div class="label-col">
                <label class="label" for="nume"><h3>Nume</h3></label>
            </div>
            <div class="input-col">
                <input type="text" id="nume" name="nume">
            </div>
            </div>
            <div class="row">
            <div class="label-col">
                <label class="label" for="email"><h3>Email</h3></label>
            </div>
            <div class="input-col">
                <input type="text" id="email" name="email">
            </div>
            </div>
            <div class="row">
            <div class="label-col">
                <label for="subject"><h3>Subject</h3></label>
            </div>
            <div class="input-col">
                <select id="subject" name="subject">
                <option value="general">General</option>
                <option value="partnership">Partnership</option>
                <option value="issue">Issue</option>
                </select>
            </div>
            </div>
            <div class="row">
            <div class="label-col">
                <label class="label" for="mesaj"><h3>Mesaj</h3></label>
            </div>
            <div class="input-col">
                <textarea id="mesaj" name="mesaj" style="height:200px"></textarea>
            </div>
            </div>
            <div class="row">
            <input type="submit" value="Trimite">
            </div>
        </form>
    </article>
</section>


<footer>
    <img src="logo.png">
    <p>&copy 2023. Design si Implementare: Mîtcă Cristina-Georgiana. Toate drepturile rezervate.</p>
</footer>









</body>
</html>