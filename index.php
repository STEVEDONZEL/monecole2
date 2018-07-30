<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="monecole.css"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="monecole.js"></script>
    <script src="presentation.js"></script>
    <title>école maternelle et primaire félix moumié</title>
</head>
<body>
<header class="sticky">
    <h1 class="nom">ECOLE PRIMAIRE BILINGUE FéLIX MOUMIé</h1>
    <h3>innovation - discipline - succès </h3>
    <h5 class="cinq"> BP: 9812 RUE JOFFRE</h5>
</header>
<div class="second">
    <div id="menue">
        <ul class="ecp">
            <li>
                <a href="/monecole/">PRESENTATION</a>
                <ul>
                    <li><a href="galerieimage/galerieimage.php">notre etablissement en image</a></li>
                    <li><a href="presentationetab/presentationetab.php">présentation de l'etablissement</a></li>
                    <li><a href="reglementint/reglementint.php">règlement intérieure </a></li>
                    <li><a href="presentation/presentation.php">le mot du directeur</a></li>
                </ul>
            </li>
        </ul>
        <ul>
            <li>
                <a href="/monecole/">ACTUALITEES</a>
                <ul>
                    <li><a href="actualite/actualite.php">actualitées recentes </a></li>
                </ul>
        </ul>
        </li>
        </ul>
        <ul>
            <li>
                <a href="/monecole/">ADMISSION</a>

                <ul>
                    <li> <a href="admission/admission.php">généralité sur l'admission</a></li>
                    <li><a href="dossiersins/dossiersins.php">dossier d'inscription</a></li>
                    <li> <a href="fraisadmis/fraisadmis.php">frais d'admission</a></li>
                    <li><a href="/monecole/">règlement financier </a></li>
                    <li><a href="/monecole/">test d'entré </a></li>
                </ul>
            </li>
        </ul>

        <ul>
            <li>
                <a href="/monecole/"> ESPACE PARENT</a>
                <ul>
                    <li> <a href="listefourni/listefourni.php">liste des fournitures</a></li>
                    <li><a href="parentdeleg/parentdeleg.php">les parents délégué</a></li>
                    <li> <a href="reglementint/reglementint.php">règlement intérieure </a></li>
                    <li><a href="projetaven/projetaven.php">nos projets pour l'avenir</a></li>
                </ul>
            </li>
            <div class="topnav">
                <div class="search-container">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </ul>
        </li>
        </ul>
        </li>
        </ul>

    </div>
    <div class="etranger">
        <li><a href="inscription/inscription.php">connexion </a></li>
        <li><a href="connexion/connexion.php">inscription</a></li>
    </div>
    </div>
</div>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">anciens eleves</a>
    <a href="#">Services</a>
    <a href="#">contact</a>
    <a href="#">Calendrier</a>
</div>
<p>Click on the element below to open the navigation menu.</p>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 6</div>
            <img src="image/sc.jpg" style="width:100%">
            <div class="text">chaque élèves est evalué indiciduellement</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 6</div>
            <img src="image/z.jpg" style="width:100%">
            <div class="text">Ecole de référence pour l'education de vos enfants</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 6</div>
            <img src="image/fo.jpg" style="width:100%">
            <div class="text">journées de relaxations et jeux pour enfant</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 6</div>
            <img src="image/pm.jpg" style="width:100%">
            <div class="text">batiment principale de notre etablissemnet</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">5 / 6</div>
            <img src="image/be.jpg" style="width:100%">
            <div class="text">nous avons abligation des bon résultats</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">6/ 6</div>
            <img src="image/i.jpg" style="width:100%">
            <div class="text">les cours a félix moumié sont tres relax et ouverts</div>
        </div>
    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 4 seconds
        }
    </script>

<h1>TOUS SAVOIR A PROPOS DE NOTRE ETABLISSEMENT</h1></br>
<div id="tous">
    <!-- Notre navigation -->
    <nav><a href="/eleves/eleves.php" tabindex="0" title=" ESPACES ELEVES" ><img src="image/l.jpg"  alt="PEDAGOGIE" /></a>
        <a href="resultatexam/resultatexam.php" tabindex="0" title="RESULTATS DERNIERS EXAMENS" ><img src="image/j.jpg"  alt="RESULTAT" /></a>
        <a href="maternelle/maternelle.php" tabindex="0" title="LA MATERNELLE" ><img src="image/g.jpg"  alt="EDUCATION" /></a>
        <a href="activitespara/activitespara.php" tabindex="0" title="ACTIVITEES PERI-SCOLAIRES" ><img src="image/o.jpg"  alt="LOISIRS" /></a>
        <a href="#" tabindex="0" title="ESPACE PARENTS" ><img src="image/t.JPG"  alt="CONFERENCE" /></a>
        <a href="infospra/infospra.php" tabindex="0" title="infos pratiques" ><img src="image/k.jpg"  alt="leadership" /></a>
        <a href="pedagogie/pedagogie.php" tabindex="0" title="PEDAGOGIE" ><img src="image/i.jpg"  alt="MOTIVATION" /></a>
        <a href="nosprojets/nosprojets.php" tabindex="0" title="NOS PROJETS FUTURE"><img src="image/q.jpg"  alt="PROJET" /></a>
        <a href="restauration/restauration.php" tabindex="0" title="RESTORATION" ><img src="image/ga.jpg"  alt="GASTRO" /></a>
        <a href="methode/methode.php" tabindex="0" title="NOS METHODES" ><img src="image/m.jpg"  alt="METHODOLOGIE" /></a></nav>
</div>

    </body>
<footer><div id="bas" >
        <div class="liens">
            <h2>liens d'accès rapide</h2>
            <li><a href="">uniforme scolaire et assesssoires</a></li>
            <li><a href="">fournirures scolaire</a></li>
            <li><a href="">calandrier scolaire </a></li>
            <li><a href="">bourses scolaire</a></li>
            <li><a href="">test d'entré</a></li>
            <li><a href="">horaire</a></li>
            <li><a href="">tarifs</a></li>

        </div>
        <h2>nos contacts</h2>
        <p>BP:9812</p>
        <p>fax:222 041 23</p>
        <p>(+237) 655712950</p>
        <p>whatsap:650661269</p>
        <p>mail: felixm@yahoo.fr</p></br>
        <div class="icon-bar">
            <a class="active" href="/monecole/"><i class="fa fa-home"></i></a>
            <a href="https://web.whatsapp.com/"><i class="fa fa-whatsapp"></i></a>
            <a href="mailto:cticamer@yahoo.fr"><i class="fa fa-envelope"></i></a>
            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
            <a href="https://www.pinterest.com/login/"><i class="fa fa-pinterest-square"></i></a>
            <a href="https://www.google.com/?gws_rd=ssl"><i class="fa fa-google"></i></a>
            <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
            <a href="https://twitter.com/login"><i class="fa fa-twitter"></i></a>
            <a href="https://web.telegram.org/#/im"><i class="fa fa-telegram"></i></a>
            <a href="https://accounts.snapchat.com/accounts/login"><i class="fa fa-snapchat"></i></a>
        </div></br>
        <div id="sponsor">
            <h2><b>nos partenaires</b></h2>
            <img src="image/iug.jpg" class="iug"/>
            <img src="image/ju.JPG" class="ju"/>
            <img src="image/cti.png" class="cti"/>
            <img src="image/cam.jpg" class="partenaires"/>
            <img src="image/ub.jpg" class="partenaires"/>
        </div>

        <div id="addresse">
            <p>contact information : <a href="mailto:stevedonzelt@yahoo.fr">mon mail:stevedonzelt@yahoo.fr</a></p>
            <p> tel: 655712950/ 650661269</p>
        </div>
</footer>
    </html>
