<?php
if (isset($_GET['url']) && $_GET['url'] == '' || isset($_GET['view']) && $_GET['view'] == 'accueil' || empty($_GET)) {
    echo 'La P\'tite Vadrouille';
    return;
} elseif (isset($_GET['list']) && $_GET['list'] == 'walk') {
    echo 'Liste des sorties';
    return;
} elseif (isset($_GET['list']) && $_GET['list'] == 'user') {
    echo 'Liste des utilisateurs';
    return;
} elseif (isset($_GET['search'])) {
    echo 'Résultats recherche';
    return;
} elseif (isset($_GET['user']) && $_GET['user'] == 'add') {
    echo 'Ajout utilisateur';
    return;
} elseif (isset($_GET['user']) && $_GET['user'] == 'detail') {
    echo 'Détail utilisateur';
    return;
} elseif (isset($_GET['user']) && $_GET['user'] == 'edit') {
    echo 'Editer utilisateur';
    return;
} elseif (isset($_GET['walk']) && $_GET['walk'] == 'add') {
    echo 'Ajout idée de sortie';
    return;
} elseif (isset($_GET['walk']) && $_GET['walk'] == 'detail') {
    echo 'Détail de la promenade';
    return;
} elseif (isset($_GET['view']) && $_GET['view'] == 'contact') {
    echo 'Contactez-nous';
    return; 
} elseif (isset($_GET['walk']) && $_GET['walk'] == 'edit') {
    echo 'Modification idée de sortie';
    return;
} elseif (isset($_GET['legalNotice'])) {
    echo 'Mentions légales';
    return;
} elseif (isset($_GET['siteMap'])) {
    echo 'Plan du site';
    return;
} elseif (isset($_GET['helpPage'])) {
    echo 'Aide';
    return;
} else {
    echo 'La P\'tite Vadrouille - 404';
    return;
};
?>