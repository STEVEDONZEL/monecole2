<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="connexion.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>école maternelle et primaire félix moumié</title>
</head>
<body>
<header class="sticky">
    <h1>ECOLE PRIMAIRE BILINGUE FéLIX MOUMIé</h1>
    <h3>innovation - discipline - succès </h3>
    <h5 class="cinq"> BP: 9812 RUE JOFFRE</h5>
</header>
<div class="second">
    <div id="menue">
        <ul class="ecp">
            <li>
                <a href="/monecole/">PRESENTATION</a>
                <ul>
                    <li><a href="../galerieimage/galerieimage.php">notre etablissement en image</a></li>
                    <li><a href="../presentationetab/presentationetab.php">présentation de l'etablissement</a></li>
                    <li><a href="../reglementint/reglementint.php">règlement intérieure </a></li>
                    <li><a href="../presentation/presentation.php">le mot du directeur</a></li>
                </ul>
            </li>
        </ul>
        <ul>
            <li>
                <a href="/monecole/">ACTUALITEES</a>
                <ul>
                    <li><a href="../actualite/actualite.php">actualitees recentes</a></li>
                </ul>
        </ul>
        </li>
        </ul>
        <ul>
            <li>
                <a href="/monecole/">ADMISSION</a>

                <ul>
                    <li> <a href="/monecole/">generalitees sur l'admission </a></li>
                    <li><a href="../dossiersins/dossieresins.php">dossiers d'inscription </a></li>
                    <li> <a href="../fraisadmis/fraisadmis.php">frais d'admissions </a></li>
                    <li><a href="/monecole/">règlements financier</a></li>
                    <li><a href="/monecole/">test d'entrée</a></li>
                </ul>
            </li>
        </ul>

        <ul>
            <li>
                <a href="/monecole/">PARENT</a>
                <ul>
                    <li> <a href="../listefourni/listefourni.php">liste des fournitures</a></li>
                    <li><a href="../parentdeleg/parentdeleg.php">les parents délégués</a></li>
                    <li> <a href="../reglementint/reglementint.php">règlement intérieure </a></li>
                    <li><a href="../projetaven/projetaven.php">nos projets pour l'avenir</a></li>
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
        <li><a href="../connexion/connexion.php">connexion </a></li>
        <li><a href="../inscription/inscription.php">inscription</a></li>
    </div>
</div>
</div>
<fieldset>

</fieldset>
<div class="container">
    <div class="icon-bar">
        <a class="active" href="../index.php"><i class="fa fa-home"></i></a>
        <a href=""><i class="fa fa-whatsapp"></i></a>
        <a href="mailto:cticamer@yahoo.fr"><i class="fa fa-envelope"></i></a>
        <a href="https://www.google.com/"><i class="fa fa-facebook"></i></a>
        <a href=""><i class="fa fa-pinterest-square"></i></a>
        <a href="https://www.google.com/"><i class="fa fa-google"></i></a>
        <a href=""><i class="fa fa-snapchat"></i></a>
        <a href="https://www.google.com/"><i class="fa fa-twitter"></i></a>
    </div>
    </div>
<h1>veuillez vous inscrire afin de bénéficier de nos services et informations supplémentaire</h1>
    <form action="/action_page.php">
        <div class="row">
            <div class="col-25">
                <label for="fname"><b>First Name</b></label>
            </div>
            <div class="col-75">
                <input type="text" id="fname" name="firstname" placeholder="Tene..">
            </div>
        </div>
       <div class="row">
            <div class="col-25">
                <label for="lname"><b>Last Name</b></label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="lastname" placeholder="Joseph..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="lname"><b>Mail</b></label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="password" placeholder="tenejoseph23@yahoo.fr"/>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="password"><b>Passeword</b></label>
            </div>
            <div class="col-75">
                <input type="text" id="passeword" name="password" placeholder="Stiven230" required/>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="lname"><b>Confirm</b></label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="cpassword" placeholder="" required/>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="country"><b>Country</b></label>
            </div>
            <div class="col-75">
                <select id="country" name="country">
                    <option value="australia">CAMEROUN</option>
                    <option value="canada">CANADA</option>
                    <option value="usa">FRANCE</option>
                    <option value="usa">USA</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="number"><b>Phone Number</b></label>
            </div>
            <div class="col-75">
                <input type="text" id="number" name="number" placeholder="655712550" required/>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="subject"><b>Subject</b></label>
            </div>
            <div class="col-75">
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
            </div>
        </div>
        <div class="row">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>
</body>
</html>
