<?php

$error = 0;
$new = true;

try {
    // Connexion à MySQL

    $pdo = new PDO("mysql:host=localhost;dbname=satisfaction_client", 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (!$pdo) {
        die("ERROR: Could not connect. " . $e->getMessage());
    }

    // Commentaire

    if (isset($_GET['commentaire']) && isset($_POST['commentaire'])) {

       // Recupération du contenu de la table vote
        $reponse = $pdo->prepare("SELECT * FROM vote WHERE ip = :ip ORDER BY id DESC LIMIT 1");
        $reponse->execute(array('ip'=> get_ip_address()));
        $donnees = $reponse->fetch();


        if ($donnees['ip'] == get_ip_address()) {
            $donneesInsert = [
                'id'=> $_GET['id'],
                'commentaire' => $_POST['commentaire'],
            ];

            $sth = $pdo->prepare("UPDATE vote set commentaire = :commentaire WHERE id = :id");
            $sth->execute($donneesInsert);

            $donnees['commentaire'] = $_POST['commentaire'];
        } else {
            $error = 1;
        }
    } else {
        //Vérification des erreurs

        if (!isset($_GET['star'])) {
            $error = 1;
        }

        if ($error != 1 && ($_GET['star'] < 0 || $_GET['star'] > 7)) {
            $error = 2;
        }

        //Si pas d'erreur on sauvegarde

        if ($error == 0) {

            //TODO: check if ip exist
            $reponse = $pdo->prepare(" SELECT * FROM  vote WHERE ip = :ip");
            $reponse->execute(array('ip'=> get_ip_address()));
            $donnees = $reponse->fetch();

            // VERIFICATION DES DONNEES
            if ($donnees === false) {
                $donneesInsert = [
                    'id'=> 0,
                    'vote' => $_GET['star'],
                    'ip' => get_ip_address(),
                    'commentaire' =>'',
                ];
                $sth = $pdo->prepare("INSERT INTO vote (id, vote, ip, commentaire, date) VALUES (:id, :vote, :ip, :commentaire, NOW() )");
                $sth->execute($donneesInsert);
            } else {
                $donneesInsert = [
                    'id'=>  $donnees['id'],
                    'vote' => $_GET['star'],
                ];
                $sth = $pdo->prepare("UPDATE vote set vote = :vote WHERE id = :id");
                $sth->execute($donneesInsert);
                $new = false;
            }
        }
            
        // Recupération du contenu de la table vote
        $reponse = $pdo->prepare("SELECT * FROM vote WHERE ip = :ip ORDER BY id DESC LIMIT 1");
        $reponse->execute(array('ip'=> get_ip_address()));
        $donnees = $reponse->fetch();
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
    exit();
}
