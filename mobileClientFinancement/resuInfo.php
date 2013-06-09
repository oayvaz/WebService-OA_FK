
<?php
$client = new SoapClient("http://127.0.0.1/wsrest/WsBanque.wsdl");
session_start();

require_once 'classe/Formulaire.php';
require_once 'classe/IDAO.php';
require_once 'classe/PgsqlDAO.php';
require_once 'classe/FormulaireDAO.php';

$daoFormulaire = new FormulaireDAO();
$newFormulaire= new Formulaire($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['phone'], $_SESSION['apport'], $_SESSION['projet'], $_SESSION['duree'], $_SESSION['age'], $_POST['adresse'], $_POST['cp'], $_POST['ville']);

$daoFormulaire->create($newFormulaire);
$idCn = 2;
$idCn = $daoFormulaire->findId($newFormulaire);
echo var_dump($idCn);

try{
	$client->create($_SESSION['projet'],$_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['cp'],$_POST['phone'],$_POST['mail'],$_SESSION['apport'],$_SESSION['duree'],$_SESSION['age'],$_POST['ville'],$idCn);
}catch(SoapFault $e){
	echo var_dump($e);
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Web application - Simulateur de crédit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0-rc.1/jquery.mobile-1.3.0-rc.1.min.css" />
    <script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.3.0-rc.1/jquery.mobile-1.3.0-rc.1.min.js"></script>
    <!--
    <link href="./lib/jquery.mobile-1.2.0.min.css" rel="stylesheet" type="text/css"/>
    <script src="./lib/jquery-1.9.1.min.js"></script>
    <script src="./lib/jquery.mobile-1.2.0.min.js" type="text/javascript"></script>
    -->
</head>
<body>


<div id="resu" data-role="page" data-theme="c">
    <div data-role="header">
        <h1>Simulateur de crédit immobilier</h1><a href="index.php">Accueil</a>
    </div>
    <div data-role="content">
        <h2>Votre demande a été enregistré :</h2>
        Pour un projet de <?php echo $_SESSION['projet']; ?> euros<br/>
        Avec un apport de <?php echo $_SESSION['apport']; ?> euros<br/>
        Sur une durée de <?php echo $_SESSION['duree']; ?> an(s)<br/>
        <br/>

    </div>
    <div data-role="footer" style="text-align:center">
        <footer>Copyright 2013@CN&BanquoCrédit</footer>
    </div>
</div>
</body>
</html>