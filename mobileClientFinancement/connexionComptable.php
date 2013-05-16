
<div data-role="page" data-theme="c">
    <div data-role="header">
        <h1>Plateforme comptable</h1><a href="" data-rel="back">Retour</a>
    </div>

	<h2>Bonjour, veuillez entrer vos identifiants:</h2>
	<center>
	<form action="/mobileClientFinancement/accueilComptable.php" method="post" name="formComptable">
		<div data-role="fieldcontain">
			<label for="login">Login</label>
			<input type="text" name="login" id="login" value="" height="10px" required/>
		</div>
		<div data-role="fieldcontain">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" value="" height="10px" required/>
		</div>
		<input type="submit" value="Valider" />
	</form>
	</center>

    <div data-role="footer" style="text-align:center">
        <footer>Copyright 2013@CN&BanquoCrédit</footer>
    </div>
</div>
