<?php
$client = new SoapClient("http://127.0.0.1/wsrest/Simulateur.wsdl");
$glob = 0;
$mensu = 0;
$assu = 0;
try {
    $mensu = $client->calculMensualite($_POST['age'], $_POST['duree'], $_POST['apport'], $_POST['global']);
    $assu = $client->calculMensualiteAssurance($_POST['age'], $_POST['duree'], $_POST['apport'], $_POST['global']);
    $glob = $client->calculMensualiteGlobale($_POST['age'], $_POST['duree'], $_POST['apport'], $_POST['global']);
	
	echo var_dump($mensu);
} catch (SoapFault $exception) {
    echo $exception;
}

session_start();
$_SESSION['projet'] = $_POST['global'];
$_SESSION['apport'] = $_POST['apport'];
$_SESSION['duree'] = $_POST['duree'];
$_SESSION['age'] = $_POST['age'];

?>

<div id="resu" data-role="page" data-theme="c">
    <div data-role="header">
        <h1>Simulateur de crédit immobilier</h1><a href="" data-rel="back">Retour</a>
    </div>
    <div data-role="content">
        <h2>Votre simulation</h2>
        Pour un projet de <?php echo $_POST['global']; ?> euros<br/>
        Avec un apport de <?php echo $_POST['apport']; ?> euros<br/>
        Sur une durée de <?php echo $_POST['duree']; ?> an(s)<br/>
        <br/>
        Votre mensualité globale calculée s'élève à <?php echo $glob;?> par mois.

        <br/>
        <br/>
        Celle ci se compose d'une mensualité hors assurance de <?php echo $mensu;?> et d'une assurance de <?php echo $assu;?>.

    </div>
	<a href="formInfo.php">Formulaire de contact</a>
    <div data-role="footer" style="text-align:center">
        <footer>Copyright 2013@CN&BanquoCrédit</footer>
    </div>
</div>