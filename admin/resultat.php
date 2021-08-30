<?php
    include '../function.php';

$pdo = new PDO("mysql:host=localhost;dbname=satisfaction_client", 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (!$pdo) {
    die("ERROR: Could not connect. " . $e->getMessage());
}

//////GENERATION


for ($i =0; $i < 1000; $i++) {
    $vote = rand(1, 7);
    $day = str_pad(rand(1, 30), 2, '0', STR_PAD_LEFT);
    $month = str_pad(rand(1, 12), 2, '0', STR_PAD_LEFT);
    //echo 'vote: '.$vote.' date: 2021-'.$month.'-'.$day.'<br>';

    $donneesInsert = [
        'id'=> 0,
        'vote' => $vote,
        'ip' => get_ip_address(),
        'commentaire' =>'',
        'dateVote' => '2021-'.$month.'-'.$day.' 10:00:00'
    ];
    $sth = $pdo->prepare("INSERT INTO vote (id, vote, ip, commentaire, date) VALUES (:id, :vote, :ip, :commentaire, :dateVote )");
    //$sth->execute($donneesInsert);
}


//////GENERATION

function calcul_pourcentage($val, $total)
{
    return ($val*100)/$total;
}

function calcul_moyenne($val,$total){
    return ($val+$val*100)/$total;
}

// function moyenne()
// {
//     $nombres = func_get_arg();
//     $nb = sizeof($nombres);
//     $somme =0;
//     foreach($nombres as $val){
//         $somme += $val;
//     } 
//     return ($somme/$nb);
// }


$reponse = $pdo->query("SELECT * FROM vote");

// Boucle de vote
$month = array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre', 'Total votes','Moyenne');
$votes = [
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
    12 => [0 => 0, 1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0],
];
while ($donnees = $reponse->fetch()) {
    $votes[intval(date("m", strtotime($donnees['date']))) - 1][intval($donnees['vote']) - 1]++;
    $votes[intval(date("m", strtotime($donnees['date']))) - 1][7]++;
    $votes[12][intval($donnees['vote']) - 1]++;
    $votes[12][7]++;
}

//echo '<pre>';
//print_r($votes);
//echo '</pre>';
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
                    <form class="button">
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
                    <h1>Bienvenue Anne-Sophie </h1>
                </div>
            </div>
        </div>
        <div class="row">

</body>

<table class='table'>

    <!-- En tête du tableau --->
    <thead>
        <tr>
            <th>Mois</th>
            <th><img src="assets/smiley-1.png"></th>
            <th><img src="assets/smiley-02.png"> </th>
            <th><img src="assets/smiley-03.png"></th>
            <th><img src="assets/smiley-04.png"></th>
            <th><img src="assets/smiley-05.png"></th>
            <th><img src="assets/smiley-06.png"></th>
            <th><img src="assets/smiley-07.png"></th>
            <th>Total votes</th>
            <!-- <th>Moyenne</th> -->
        </tr>
    </thead>
    <!-- Corps du tableau-->
    <tbody>
        <?php
        for ($i = 0; $i < count($votes); $i++) {
            echo'<tr class="cellTabCenter">
                <td>'.$month[$i].'</th>';
            for ($i1 = 0; $i1 < count($votes[$i]); $i1++) {
                $percentage = round(calcul_pourcentage($votes[$i][$i1], $votes[$i][7]), 2);
                echo '<td class="cellTabCenter">'.$votes[$i][$i1].($i1 != 7 ? ' ('.$percentage.'%)</td>' : '');
             
            }
            echo '</tr>';
        }
        ?>
    </tbody>
</table>

</html>