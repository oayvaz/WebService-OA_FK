<html>
<head>
    <meta charset="UTF-8">
    <title>Web application - Simulateur de crédit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0-rc.1/jquery.mobile-1.3.0-rc.1.min.css" />
    <script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.3.0-rc.1/jquery.mobile-1.3.0-rc.1.min.js"></script>
</head>
<body>
<div id="main" data-role="page" data-theme="c">

<?php
$client = new SoapClient("http://127.0.0.1/wsrest/WsBanque.wsdl");
session_start();

require_once 'classe/Formulaire.php';
require_once 'classe/IDAO.php';
require_once 'classe/PgsqlDAO.php';
require_once 'classe/FormulaireDAO.php';
require_once 'classe/pdoIntranet.php';
$daoFormulaire = new FormulaireDAO();
$listeFormulaire=$daoFormulaire->findAll();


$pdo=new pdoIntranet();
$login = $_REQUEST['login'];
$mdp = $_REQUEST['password'];
$client = $pdo->getInfosComptable($login,$mdp);
		if(!$client){?>
		<div data-role="header">
			<h1>Plateforme comptable</h1><a href="" data-rel="back">Retour</a>
		</div>
		<center><h2>Erreur de login ou de mot de passe.</h2></center>
		<?php
		}
		else{
		
?>
<div data-role="header">
    <h1>Plateforme comptable<?php echo " ".$client[1].""; ?></h1><a href="index.php">Deconnexion</a>
</div>
<h2>Bienvenue sur l'accueil comptable, voici les préts en cours:</h2>
<center>

    
<ul data-role="listview">
		
		<table width=100%>
		<li>
			<tr>
				<td><center>Nom</center></td>
				<td><center>Prénom</center></td>
				<td><center>Mail</center></td>
				<td><center>Telephone</center></td>
				<td><center>Montant apport</center></td>
				<td><center>Montant projet</center></td>
				<td><center>Duree emprunt</center></td>
				<td><center>Age</center></td>
				<td><center>Adresse</center></td>
				<td><center>CP</center></td>
				<td><center>Ville</center></td>
				<td><center>Statut</center></td>
			</tr>
		</li>
	<?php foreach ($listeFormulaire as $unFormulaire){ 
	 $formulaireIntoTable = $unFormulaire->toString(); ?>
	
		
			<tr>
				<td><center><?php echo $formulaireIntoTable[1]; ?></center></td>
				<td><center><?php echo $formulaireIntoTable[2]; ?></center></td>
				<td><center><?php echo $formulaireIntoTable[3]; ?></center></td>
				<td><center><?php echo $formulaireIntoTable[4]; ?></center></td>
				<td><center><?php echo $formulaireIntoTable[5]; ?> €</center></td>
				<td><center><?php echo $formulaireIntoTable[6]; ?> €</center></td>
				<td><center><?php echo $formulaireIntoTable[7]; ?></center></td>
				<td><center><?php echo $formulaireIntoTable[8]; ?></center></td>
				<td><center><?php echo $formulaireIntoTable[9]; ?></center></td>
				<td><center><?php echo $formulaireIntoTable[10]; ?></center></td>
				<td><center><?php echo $formulaireIntoTable[11]; ?></center></td>
				<td><center>he he !</center></td>
			</tr>
		
	
	<?php } ?>
	</table>
</ul>
<?php
		}
?>
	<div data-role="footer" style="text-align:center">
        <footer>Copyright 2013@CN&BanquoCrédit</footer>
    </div>
	</div>
</body>
</html>