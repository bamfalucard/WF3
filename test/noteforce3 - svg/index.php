<?php 
$titre="Page Index";
include ("includes/header.php");
 ?>

<?php
	if(isset($_GET['msg'])) echo "<p>".$_GET['msg'].'<p>';
 ?>



<form method="post" action="connexion.php" onsubmit="return verif(this);">
	
	<p>
	<label>Login : 
		<input type="text" name="utilisateur">
	</label>
	
	</p>
	<p>
		<label>Mot de passe : 
			<input type="password" name="motDePasse">
		</label>
		
	</p>
	<p>
		<input type="submit" name="btnSub" value="Ouvrir une session" id="btnSub">
	</p>
</form>
<h1></h1>

<?php 
include ("includes/footer.php");
 ?>