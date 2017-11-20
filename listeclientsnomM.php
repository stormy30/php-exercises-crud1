<<<<<<< HEAD
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
            <li><a  href="accueil.html">accueil</a></li>
            <li><a  href="listeclients.php">CLIENTS</a></li>
            <li><a  href="typedespectacles.php"/ >SPECTACLES</a></li>
            <li ><a href="referenceClients.php">REFERENCES CLIENTS</a></li>
            <li ><a href="20premiersclients.php">20 PREMIER SCLIENTS</a></li>
            <li ><a href="clientscartefid.php">CLIENTS CF</a></li>
            <li><a  href="listeclientsnomM.php">CLIENTS Nom en M</a></li>
        </ul>
    </nav>
</header>

<h1>Liste des Clients dont le nom commence par M </h1>
<table>
    <?php
    include("connect.php");
    //
    $req = $DB_con->prepare("SELECT * FROM clients WHERE lastName LIKE 'M%'");
    $req->execute();
    $req1 = $req->fetchAll();
    //    var_dump($req1);
    foreach ($req1 as $value) {
        //
        echo '<h4>Nom:'.$value -> lastName.'</h4>';
        echo '<h4>Prénom:'.$value -> firstName.'</h4><br>';
//
    }
    //          var_dump($req1);
    ?>
    <h1>Liste des Clients par ordre alphabetique</h1>
    <table>
        <?php
        include("connect.php");
        //
        $req = $DB_con->prepare("SELECT * FROM clients ORDER BY lastName");
        $req->execute();
        $req1 = $req->fetchAll();
        //    var_dump($req1);
        foreach ($req1 as $value) {
            //
            echo '<h4>Nom:'.$value -> lastName.',   Prénom:'.$value -> firstName.'</h4><br>';
//
        }
        //          var_dump($req1);
        ?>

</table>


</body>
</html>
=======
<?php
/**
 * Created by PhpStorm.
 * User: coda
 * Date: 04/07/17
 * Time: 12:12
 */
>>>>>>> b2283309fa0713ff8c91607f7b4098bf8a2330d5
