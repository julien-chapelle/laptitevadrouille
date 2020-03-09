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
} elseif (isset($_GET['search']) && isset($_GET['page'])) {
    echo 'Résultats recherche';
    return;
} elseif (isset($_SESSION) && empty($_SESSION) && isset($_GET['user']) && $_GET['user'] == 'add') {
    echo 'Ajout utilisateur';
    return;
} elseif (isset($_SESSION) && !empty($_SESSION) && isset($_GET['avatarChoice'])) {
    echo 'Selection avatar';
    return;
} elseif (isset($_GET['user']) && $_GET['user'] == 'detail') {
    echo 'Détail utilisateur';
    return;
} elseif (isset($_GET['user']) && $_GET['user'] == 'editInfo' && isset($_GET['id'])) {
    echo 'Modification des informations';
    return;
} elseif (isset($_GET['user']) && $_GET['user'] == 'editPassword' && isset($_GET['id'])) {
    echo 'Modification du mot de passe';
    return;
} elseif (isset($_GET['user']) && $_GET['user'] == 'delete' && isset($_GET['id'])) {
    echo 'Suppression du compte';
    return;
} elseif (isset($_GET['walk']) && $_GET['walk'] == 'add') {
    echo 'Ajout idée de sortie';
    return;
} elseif (isset($_GET['walk']) && $_GET['walk'] == 'detail' && isset($_GET['moreInfo'])) {
    echo 'Détail de la sortie';
    return;
} elseif (isset($_GET['walk']) && $_GET['walk'] == 'detail' && isset($_GET['unvalidateWalk']) && isset($detailUser) && $detailUser[0]['status'] == 'admin') {
    echo 'Détail de la sortie non validée';
    return;
} elseif (isset($_GET['view']) && $_GET['view'] == 'contact') {
    echo 'Contactez-nous';
    return;
} elseif (isset($_SESSION) && !empty($_SESSION) && isset($_GET['walk']) && $_GET['walk'] == 'create') {
    echo 'Proposer idée de sortie';
    return;
} elseif (isset($_SESSION) && !empty($_SESSION) && isset($_SESSION['status']) && $_SESSION['status'] == 'admin' && isset($_GET['walk']) && $_GET['walk'] == 'edit') {
    echo 'Editer une sortie';
    return;
} elseif (isset($_SESSION) && !empty($_SESSION) && isset($_SESSION['status']) && $_SESSION['status'] == 'admin' && isset($_GET['walk']) && $_GET['walk'] == 'delete') {
    echo 'Supprimer une sortie';
    return;
} elseif (isset($_SESSION) && isset($_SESSION['status']) && $_SESSION['status'] == 'admin' && isset($_GET['walk']) && $_GET['walk'] == 'edit') {
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