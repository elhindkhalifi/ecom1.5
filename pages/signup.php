
<center>
<h2>Enregistrement </h2>
<a href="../index.php">Retour Acceuil</a>
</center>
<?php 
session_start();
?>

<form method="post" action="../results/signupResult.php">
        <!-- <input type="hidden" name="action" value="signup"> -->
        <label for="user_name">Nom d'utilisateur :</label>
        <input type="text" id="user_name" name="user_name" 
        value="<?php echo isset($_SESSION["signup-form"] ["user_name"])? $_SESSION["signup-form"] ["user_name"]:"";  ?>">
        <br>
        <label for="email">Email   :  </label>
        <input type="email" id="email" name="email">
        <br>
        <label for="pwd">Mot de Passe :    </label>
        <input type="password" id="pwd" name="pwd">
        <br>
        <input type="submit" value="signup">
</form>
