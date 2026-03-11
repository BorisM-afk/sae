<?php
// Indique aux moteurs de recherche que la redirection est permanente
header("HTTP/1.1 301 Moved Permanently");
// Effectue la redirection vers la nouvelle page
header("Location: ./fr/page1-accueil.php");
// On s'assure que le reste du code ne s'exécute pas
exit();
?>