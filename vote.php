<?php
    include 'function.php';
    include 'register.php';
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel=stylesheet type="text/css" href="styles.css">
    <title>Page vote</title>
</head>

<body>

    <header>
     
    </header>

    <div style="display: flex; flex-direction: column; text-align: center;">
        <div>
            <?php
                if (isset($_GET['commentaire'])) {
                    echo '<h2 style="color:#3F4E55;">Votre commentaire à été enregistré!</h2>';
                } elseif ($new) {
                    echo '<h2 style="color:#3F4E55;">Unicacces-Groupe vous remercie d\'avoir partagé votre expérience!</h2>';
                } else {
                    echo '<h2 style="color:#3F4E55;">Votre vote à été mis à jour!</h2>';
                }
            ?>
        </div>
        <section>
            <p class="com" style="color:#EA5B0C"> Modifier votre satisfaction</p>
            <?php require 'index.php'; ?>
        </section>
        <p class="com">laisser un commentaire</p>
        <form action="com.php?commentaire&id=<?php echo $donnees['id']; ?>" method="post">
            <div style="text-align:center;">
                <textarea style="width:400px;px;resize:none;min-height:210px;" name="commentaire" placeholder="Votre commentaire..."><?php echo $donnees['commentaire']; ?></textarea>
                <br>
                <br>
                <input type="submit" value="Soumettre">
            </div>
        </form>


    </div>
</body>

</html>