
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>COLYSEUM BONJOUR</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">

    <link href="https://fonts.googleapis.com/css?family=Arvo%7CJosefin+Sans" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="jquery-xxxx.min.js"></script>
    <script type="text/javascript" src="jquery.validate.min.js"></script>

</head>
<body>

<header>
    <nav>
        <ul class="headerlist">
            <li><a  href="../accueil.html">accueil</a></li>
            <li><a  href="listeclients.php">CLIENTS</a></li>
            <li><a  href="typedespectacles.php"/ >SPECTACLES</a></li>
            <li ><a href="referenceClients.php">REFERENCES CLIENTS</a></li>
            <li ><a href="20premiersclients.php">20 PREMIER SCLIENTS</a></li>
            <li ><a href="clientscartefid.php">CLIENTS CF</a></li>
            <li><a  href="listeclientsnomM.php">CLIENTS Nom en M</a></li>
        </ul>
    </nav>
</header>
<table>
<h1>Détails  Clients</h1>

<?php
include("connect.php");
//traduction de la requette je selectionne tout de la table clients à laquelle je joins la table cards où le champs cardNumber de la table clients = au champs cardNumber de la table card aux quelles
// je joint la table  cardTypes où le champs id dela table CardTtupes est égal au champ cardTypesId de la table cards.
$customerDetails = $DB_con->query("SELECT * FROM clients JOIN cards ON clients.cardNumber = cards.cardNumber JOIN cardTypes ON cardTypes.id = cards.cardTypesId");
// la condition suivante la valeure de ma requette (il faut mettre query et non prépare
while ($value = $customerDetails->fetch()) {
    $loyaltyCard ="";
    if($value->cardTypesId==1) {
        $loyaltyCard= ('OUI'.($value->cardNumber ));
    }
    else {
        $loyaltyCard= 'NON';
    }
    echo '<h4>Nom :'.$value->lastName.'</h4>';
    echo '<h4>Prénom :'.$value->firstName.'</h4><br>';
    echo '<h4> Date de naissance :'.$value->birthDate.'</h4>';
    echo '<h4> Carte de fidelité :'.$loyaltyCard.'</h4>';
};
?>

</table>


</body>
</html>