<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Among Friends</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" media="screen and (max-width: 900px)" href="../style_mobile.css" />
    <script src="https://kit.fontawesome.com/b25b27ba37.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="heading" id="navbar">
        <div class="heading__Left">
            <div class="menu_ham" id="ham">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="exit_menu" id="cross">
                <i class="fas fa-times-circle"></i>
            </div>
            
            <a href="../index.html">
                <div class="logo">
                    <p class="logo__font">Among Friends<span class="vert"> & Co</span></p>

                    <p>Paris</p>

                </div>
            </a>
        </div>

        <div class="heading__center">

            <ul class="menu" id="menu">
                <li>
                    <a href="../index.html">
                        <p class="menu__item">Accueil</p>
                    </a>
                </li>
                <li>
                    <a href="nous.html">
                        <p class="using menu__item">Nous
                        </p>
                    </a>
                </li>
                <li>
                    <a href="nosBureau.html">
                        <p class="menu__item">Nos Bureaux
                        </p>
                    </a>
                </li>
                <li>
                    <a href="nosServices/usine.html">
                        <p class="menu__item">Nos Services
                        </p>
                    </a>
                    <ul>
                        <li>
                            <a href="nosServices/usine.html">
                                <p class="menu__item">Partenariat avec les usines


                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="nosServices/matiere.html">
                                <p class="menu__item">Recherche de matières


                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="nosServices/creation.html">
                                <p class="menu__item">Création et Développement produit

                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="nosServices/atelier.html">
                                <p class="menu__item">Atelier d’échantillonnage

                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="nosServices/controle.html">
                                <p class="menu__item">Contrôle Qualité


                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="produits/pap.html">
                        <p class="menu__item">Produits
                        </p>
                    </a>
                    <ul>
                        <li>
                            <a href="produits/pap.html">
                                <p class="menu__item">Prêt-à-porter féminin

                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="produits/cuir.html">
                                <p class="menu__item">Cuir

                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="produits/Accessoire.html">
                                <p class="menu__item">Accessoires

                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="produits/enfant.html">
                                <p class="menu__item">Production pour les enfants et bébés


                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="durable.html">
                        <p class="menu__item">Durable
                        </p>
                    </a>
                </li>
                <li>
                    <a href="contacte.php">
                        <p class="menu__item">Contacte
                        </p>
                    </a>
                </li>
                <li>
                    <a href="CGV.html">
                        <p class="menu__item">CGV
                        </p>
                    </a>
                </li>
            </ul>

            
        </div>
        <div class="heading__right">
            <a href="../EN/nous.html">
            <p class="heading__right__option">EN</p>
            </a>
        </div>


    </div>
    <div class="main">
        <div class="main__asideLeft">

        </div>
        <div class="main__center">
            <div class="item-left">
                <p>AFC : +33148879095</p>
                
                <p>AFI : +911242350282</p>
                <a href="mailto:contact@among-friends.fr">
                <p>email : contact@among-friends.fr</p></a>
            </div>
            <div class="item">
                <form action="/my-handling-form-page" method="post">
                    <div>
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="user_name">
                </div>
                <div>
                    <label for="mail">e-mail :</label>
                    <input type="email" id="mail" name="email">
                </div>
                <div>
                    <label for="msg">Message :</label>
                    <textarea id="msg" name="message"></textarea>
                </div>
                <div class="button">
                    <button type="submit">Envoyer le message</button>
                </div>
                </form>
                
            </div>
            <?php
    if (isset($_POST['message'])) {
        $position_arobase = strpos($_POST['email'], '@');
        if ($position_arobase === false)
            echo '<p>Votre email doit comporter un arobase.</p>';
        else {
            $retour = mail('contact@among-friends.fr', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
            if($retour)
                echo '<p>Votre message a été envoyé.</p>';
            else
                echo '<p>Erreur.</p>';
        }
    }
    ?>

        </div>
        <div class="main__asideRight"></div>
    </div>
    <div class="footing">
        <p>Copyright Among Friends & Co 2020</p>
        <p class="network">
            <i class="fab fa-instagram"></i>
            <i class="fab fa-linkedin"></i>
        </p>
    </div>




</body>
<script src="../script.js"></script>
</html>