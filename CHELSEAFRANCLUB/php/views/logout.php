<?php
session_start();
session_unset(); // Supprime toutes les variables de session
session_destroy(); // Détruit la session

// Redirige vers la page d'accueil ou une autre page après la déconnexion
header("Location: ../accueilv2.php?logout=success");
exit();
?>