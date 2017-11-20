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

<h1>Clients possesseurs de carte de fidelitée</h1>
<table>
    <?php
    include("connect.php");
    //
    $req = $DB_con->prepare('SELECT lastName, firstName, card FROM clients WHERE card = 1');
    $req->execute();
    $req1 = $req->fetchAll();
    //    var_dump($req1);
    foreach ($req1 as $value) {
        //
        echo $value->card.'<h4> Last name:'.$value->lastName.',   First name :'.$value->firstName.'</h4><br>';
//
    }
    //          var_dump($req1);
    ?>
</table>


</body>
</html>