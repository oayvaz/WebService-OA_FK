<?php
session_start();
//$client = new SoapClient("http://127.0.0.1/wsrest/Simulateur.wsdl");
?>
<SCRIPT language="Javascript">
function verifChamp()
	{
		alert("1"); 
		if (document.formInfo.nom.value == "" || document.formInfo.prenom.value == "" || document.formInfo.phone.value == "" || document.formInfo.mail.value == "" || document.formInfo.adresse.value == "" || document.formInfo.cp.value == "" || document.formInfo.ville.value == "")
		 { 
		   alert("Le formulaire n'est pas complet.");  
		   return false;   
		 }
		 else{
			document.formInfo.submit();
		 }
	 }
</SCRIPT>
<div id="resu" data-role="page" data-theme="c">
    <div data-role="header">
        <h1>Simulateur de crédit immobilier</h1><a href="index.php">Accueil</a>
    </div>
	<form action="resuInfo.php" method="post" name="formInfo">
            <div data-role="fieldcontain">
                <label for="nom">Nom : </label>
                <input type="text" name="nom" id="nom" value=""/>
            </div>
            <div data-role="fieldcontain">
                <label for="prenom">Prénom : </label>
                <input type="text" name="prenom" id="prenom" value=""/>
            </div>
            <div data-role="fieldcontain">
                <label for="phone">Téléphone : </label>
                <input type="text" name="phone" id="phone" value="" />
            </div>
            <div data-role="fieldcontain">
                <label for="mail">Mail : </label>
                <input type="text" name="mail" id="mail" value="" />
            </div>
			<div data-role="fieldcontain">
                <label for="adresse">Adresse : </label>
                <input type="text" name="adresse" id="adresse" value=""/>
            </div>
			<div data-role="fieldcontain">
                <label for="cp">Code postal : </label>
                <input type="text" name="cp" id="cp" value=""/>
            </div>
			<div data-role="fieldcontain">
                <label for="ville">Ville : </label>
                <input type="text" name="ville" id="ville" value=""/>
            </div>
            <input type="button" value="Valider" onclick="submit();"/>
        </form>
    <div data-role="footer" style="text-align:center">
        <footer>Copyright 2013@CN&BanquoCrédit</footer>
    </div>
</div>