<!DOCTYPE html>
<html>

<head>
    <LINK rel=stylesheet type="text/css" href="styles.css">

    <title>Satisfaction Client</title>
    <meta charset="utf-8" />

</head>

<body>


    <a class="vote-link <?php if(isset($donnees) && $donnees['vote'] == '1') echo 'vote-selected' ?>" href="vote.php?star=1"> <img src="assets/smiley-1.png"> </a>
    <a class="vote-link <?php if(isset($donnees) && $donnees['vote'] == '2') echo 'vote-selected' ?>" href="vote.php?star=2"> <img src="assets/smiley-02.png"> </a>
    <a class="vote-link <?php if(isset($donnees) && $donnees['vote'] == '3') echo 'vote-selected' ?>" href="vote.php?star=3"> <img src="assets/smiley-03.png"> </a>
    <a class="vote-link <?php if(isset($donnees) && $donnees['vote'] == '4') echo 'vote-selected' ?>" href="vote.php?star=4"> <img src="assets/smiley-04.png"> </a>
    <a class="vote-link <?php if(isset($donnees) && $donnees['vote'] == '5') echo 'vote-selected' ?>" href="vote.php?star=5"> <img src="assets/smiley-05.png"> </a>
    <a class="vote-link <?php if(isset($donnees) && $donnees['vote'] == '6') echo 'vote-selected' ?>" href="vote.php?star=6"> <img src="assets/smiley-06.png"> </a>
    <a class="vote-link <?php if(isset($donnees) && $donnees['vote'] == '7') echo 'vote-selected' ?>" href="vote.php?star=7"> <img src="assets/smiley-07.png"> </a>



</body>

</html>