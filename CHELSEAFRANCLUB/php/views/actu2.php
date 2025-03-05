<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Bienvenue sur le site du Chelsea Fran Club, une communauté passionnée de supporters de Chelsea FC.">
        <meta name="keywords" content="Chelsea, FC, football, supporters, communauté">
        <meta name="author" content="Chelsea Fran Club">
        <title> ACCUEIL - Chelsea Fran Club</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="style/style2.css">
    </head>
<body>
    <header>
        <div class="logo">
            <a href="accueil.html">
                <img src="../images CLUB/Logos/LOGO_DU_SITE-removebg-preview - Copie.png" alt="Logo Chelsea Fran Club">
            </a>
        </div>
        <h1>Chelsea Fran Club</h1>    
        <div class="auth-buttons">
            <a href="index.php">S'inscrire/ Se connecter</a>
          
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="accueilv2.html">Accueil</a></li>
            <li><a href="actu2.html">Actualités</a></li>
            <li><a href="match.html">Match</a></li>
            <li>
                <a href="#">Club</a>
                <ul class="dropdown">
                    <li><a href="histoire.html">Notre Histoire</a></li>
                    <li><a href="statistiques.html">Statistiques</a></li>
                    <li><a href="effectif.html">Effectif</a></li>
                    <li><a href="classement.html">Saison 24/25</a></li>
                </ul>
            </li>
            <li><a href="compte.html">Compte</a></li>
        </ul>
    </nav>
    

    <main>
        <h2>Nouvelles du club</h2>
        <!-- Accordéon pour les Nouvelles -->
        <div class="accordion-container">
            <div class="accordion-header">
                <i class="fa fa-angle-right"></i>Brighton vs Chelsea
            </div>
            <div class="accordion-content">
                <div class="accordion-text">
                    <p><strong>Date :</strong> 15 Février 2025 à 15h</p>
                     <p><strong>Lieu :</strong> American Express Stadium</p>
                    <p>Après une victoire à domicile face à West Ham 2-1 !</p>
                     <p>Chelsea affrontera Brighton à l'extérieur .</p>
                </div>
                <div class="accordion-image">
                    <img src="images CLUB/Logos/clubs/PL/Brighton & Hove Albion.png" alt="Match contre Manchester City" />
                </div>
            </div>
        </div>

        <div class="accordion-container">
            <div class="accordion-header">
                <i class="fa fa-angle-right"></i> Palmer
            </div>
            <div class="accordion-content">
                <div class="accordion-text">
                    <p><strong>Joueur du mois :</strong> Cole Palmer </p>
                        <p>Elu joueur du mois pour ses performances exceptionnelles. </p>
                        <p>Il a marqué plusieurs buts décisifs et a été un atout majeur pour l'équipe.</p>
                </div>
                <div class="accordion-image">
                    <img src="images CLUB/Logos/PALMER.jpg" alt="Palmer Joueur du Mois" />
                </div>
            </div>
        </div>

        <div class="accordion-container">
            <div class="accordion-header">
                <i class="fa fa-angle-right"></i> Renato Veiga
            </div>
            <div class="accordion-content">
                <div class="accordion-text">
                    <p>Le joueur est prêté à la Juventus de Turin jusqu'à la fin de la saison.</p>
                </div>
                <div class="accordion-image">
                    <img src="images CLUB/Logos/juveveiga.webp" alt="Recrutement" />
                </div>
            </div>
        </div>

        

        <div class="accordion-container">
            <div class="accordion-header">
                <i class="fa fa-angle-right"></i> Recrutement
            </div>
            <div class="accordion-content">
                <div class="accordion-text">
                    <p>Chelsea est à la recherche d'un grand attaquant.</p>
                    <p>Plusieurs pistes sont évoquées: </p>
                    <p> Affaire à suivre ...</p>
                </div>
                <div class="accordion-image">
                    <img src="images CLUB/Logos/legendes.png" alt="Recrutement" />
                </div>
            </div>
        </div>

        <h2>Mercato</h2>
        <div class="mercato">
            <div class="depart">
                <h3>Départs</h3>
                <table>
                    <thead>
                        <tr>
                            <th style="text-align: center;">Joueur</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="transfer-player" data-info="Ancien club : Chelsea; Nouveau club : Atletico Madrid; Montant du transfert : 40 millions d'euros">
                                Conor Gallagher
                                <img src="./images CLUB/Logos/clubs/chelsea.png" alt="Chelsea Logo" class="club-logo">
                                <i class="fas fa-exchange-alt transfer-icon"></i>
                                <img src="./images CLUB/Logos/clubs/atletico.png" alt="Atletico Madrid Logo" class="club-logo">
                                <span class="transfer-amount"> Atletico Madrid: 40 millions d'euros</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="transfer-player" data-info="Ancien club : Chelsea; Nouveau club : Juventus de Turin; Prêt : sans OA ">
                               Renato Veiga
                                <img src="./images CLUB/Logos/clubs/chelsea.png" alt="Chelsea Logo" class="club-logo">
                                <i class="fas fa-exchange-alt transfer-icon"></i>
                                <img src="./images CLUB/Logos/clubs/juve.png" alt="Atletico Madrid Logo" class="club-logo">
                                <span class="transfer-amount">Juventus de Turin: Prêt sans OA</span>
                            </td>
                        </tr>
                        <!-- Ajoutez d'autres départs ici -->
                    </tbody>
                </table>
            </div>

            <div class="arrivees">
                <h3>Arrivées</h3>
                <table>
                    <thead>
                        <tr>
                            <th style="text-align: center;">Joueur</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="transfer-player" data-info="Ancien club : Manchester United; Nouveau club : Chelsea; Montant du transfert : 70 millions d'euros">
                                Jadon Sancho : Manchester United
                                <img src="./images CLUB/Logos/clubs/united.png" alt="Manchester United Logo" class="club-logo">
                                <i class="fas fa-exchange-alt transfer-icon"></i>
                                <img src="./images CLUB/Logos/clubs/chelsea.png" alt="Chelsea Logo" class="club-logo">
                                <span class="transfer-amount"> 70 millions d'euros</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="transfer-player" data-info="Ancien club : Leicester City; Nouveau club : Chelsea; Montant du transfert : 35,4 millions d'euros">
                                Kiernan Dewsbury-Hall : Leicester
                                <img src="./images CLUB/Logos/clubs/leicester.png" alt="Leicester City Logo" class="club-logo">
                                <i class="fas fa-exchange-alt transfer-icon"></i>
                                <img src="./images CLUB/Logos/clubs/chelsea.png" alt="Chelsea Logo" class="club-logo">
                                <span class="transfer-amount">35,4 millions d'euros</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="transfer-player" data-info="Ancien club : Bâle; Nouveau club : Chelsea; Montant du transfert : 14,5 millions d'euros">
                                Renato Veiga : Bâle
                                <img src="./images CLUB/Logos/clubs/bale.png" alt="Bâle Logo" class="club-logo">
                                <i class="fas fa-exchange-alt transfer-icon"></i>
                                <img src="./images CLUB/Logos/clubs/chelsea.png" alt="Chelsea Logo" class="club-logo">
                                <span class="transfer-amount">14,5 millions d'euros</span>
                            </td>
                        </tr>
                        <!-- Ajoutez d'autres arrivées ici -->
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-links">
            <a href="mentionslegales.html">Mentions légales</a>
            <a href="aproposde.html">A propos de</a>
             <a href="faq.html">Foire à questions</a>
             <a href="motdepasseoublie.html">Mot de passe oublié ?</a>
           
        </div>
    </footer>

    <script>
        // Fonction pour gérer l'affichage de l'accordéon
        document.querySelectorAll('.accordion-header').forEach(header => {
            header.addEventListener('click', () => {
                const content = header.nextElementSibling; // Récupérer le contenu suivant l'en-tête
                const isVisible = window.getComputedStyle(content).display === "flex"; // Vérifier si le contenu est visible

                if (isVisible) {
                    content.style.display = "none"; // Masquer le contenu
                    header.querySelector('i').classList.remove('fa-angle-down'); // Changer l'icône
                    header.querySelector('i').classList.add('fa-angle-right'); // Changer l'icône
                } else {
                    content.style.display = "flex"; // Afficher le contenu
                    header.querySelector('i').classList.remove('fa-angle-right'); // Changer l'icône
                    header.querySelector('i').classList.add('fa-angle-down'); // Changer l'icône
                }
            });
        });
    </script>
</body>
</html>