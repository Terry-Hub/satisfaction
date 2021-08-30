<?php
     include '../function.php';
    
$pdo = new PDO("mysql:host=localhost;dbname=satisfaction_client", 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (!$pdo) {
    die("ERROR: Could not connect. " . $e->getMessage());
}

// Boucle commentaire 


//////GENERATION


    $donneesInsert = [
        'id'=> 0,
        'vote' => '',
        'ip' => get_ip_address(),
        'commentaire' =>'',
   
    ];
    $sth = $pdo->prepare("INSERT INTO vote (id, vote, ip, commentaire, date) VALUES (:id, :vote, :ip, :commentaire, :dateVote )");
    //$sth->execute($donneesInsert);


    $reponse = $pdo->query("SELECT * FROM vote");

    // Boucle de commentaire
    $month = array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre',);
    $commentaire = [
        0 => [0 => 0, 1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0],
        1 => [0 => 0, 1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0],
        2 => [0 => 0, 1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0],
        3 => [0 => 0, 1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0],
        4 => [0 => 0, 1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0],
        5 => [0 => 0, 1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0],
        6 => [0 => 0, 1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0],
        7 => [0 => 0, 1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0],
        8 => [0 => 0, 1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0],
        9 => [0 => 0, 1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0],
        10 => [0 => 0, 1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0],
        11 => [0 => 0, 1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0],

    ];
    
?>

<!-- Partie HTML -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

    <title>Admin</title>
</head>

<body>
    <div class="bg-dark">
        <div class="container">
            <div class="row">
                <nav class="col navbar navbar-expand-lg navbar-dark">
                 
                    <h1 class="navbar-brand">Admin</h1>
                    <form>
                        <input class="button" type="button" value="Retour" onClick="history.back(-1)"></input>
                    </form>
            </div>
            </nav>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="jumbotron">
                    <h1>Bienvenue </h1>
                </div>
            </div>
        </div>
        <div class="row">
</body>
<table class='table'>
    <!-- Corps du tableau-->
    <tbody>
        <?php
        for ($i = 0; $i < count($commentaire); $i++) {
            echo'<tr class="cellTabCenter">
                <td>'.$month[$i].'</th>';
            for ($i1 = 0; $i1 < count($commentaire[$i]); $i1++) {
            
            }
            echo '</tr>';
        }
        ?>
         </tbody>
    </table>