<!Doctype html>
<html>
    <meta charset="utf-8" lang="fr">
    <body>
<main>
    <br>
    <h1>
        Ravi de vous revoir <?php echo $_SESSION['prenom'];?>.
    </h1>
<br>
    <article>
        <h2>mon profil</h2>
        <br>
        <br>
        <h3>Mail</h3>
        <p><?php echo $_SESSION['mail'];?></p>
        <br>
        <h3>Nom</h3>
        <p><?php echo $_SESSION['nom'];?></p>
        <br>
        <h3>prenom</h3>
        <p><?php echo $_SESSION['prenom'];?></p>
    </article>
</main>
    </body>
</html>