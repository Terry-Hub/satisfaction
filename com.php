 <?php 

include 'vote.php';

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

    if(isset($_GET['commentaire']) && isset($_POST['commentaire'])) {

       // Recupération du contenu de la table vote
        $reponse = $pdo->prepare("SELECT * FROM vote WHERE ip = :ip ORDER BY id DESC LIMIT 1");
        $reponse->execute(array('ip'=> get_ip_address()));
        $donnees = $reponse->fetch();


        if($donnees['ip'] == get_ip_address())
        {
            $donneesInsert = [
                'id'=> $_GET['id'],
                'commentaire' => $_POST['commentaire'],
            ];

            $sth = $pdo->prepare("UPDATE vote set commentaire = :commentaire WHERE id = :id");
            $sth->execute($donneesInsert);

            $donnees['commentaire'] = $_POST['commentaire'];
        }
        else
            $error = 1;
    }
    
} 
catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
    exit();
}