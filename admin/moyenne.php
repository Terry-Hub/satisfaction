<?php

// function mensuel()
// {
//     $mensuel = 'janvier';
//     return $mensuel;
// }

//      function journalier()
//      {
//          $jour = 'lundi';
//          return $jour;
//      }

// function calculMoyenne()
// {
//     return 100*1.2;
     
//     echo calculMoyenne() .'<br>';
// }
     

// Creer un tableau vide
//  $donnees = array ();

 // Ajouter de nouvelles valeurs a un tableau
//  $donnees [] = 0;
//  $donnees [] = 2000;

 // Afficher les valeurs
    // echo 'la valeur a l\indice 0 est : .$donnees[0]';
    // echo 'la valeur a l\indice 1 est : .$donnees[1]';

// Creer un tableau rempli

//  $donnees = array (12.5 , 9 , 11);

 // Ajouter de nouvelles valeurs a un tableau
//  $donnees [] = 7;
//  $donnees [] = 12.5;

 // Calculer la moyenne
//  $somme = $tabVote [0] + $donnees [1] + $donnees [2]
//  + $donnees [3] + $donnees [4];

//  echo 'La␣ somme ␣ vaut ␣:␣'. $somme;
//  $moyenne = $somme /5;

//  echo 'La␣ moyenne ␣ vaut ␣:␣'. $moyenne ;


//  $numero = 1;
//  while ($numero <= $donnees)	// attribution d'un nombre pour chaque vote à l'array $resultat[]
//  {
//      $resultat[$numero] = fgets($resultats);
//      if ($resultat[$numero] == NULL) // on remplace les lignes vides du fich txt par 0
//      {
//              $resultat[$numero] = 0;
//      }
//  $numero ++;
//  }

//  $total_votes = 0; // calcul du total des votes
//  foreach($resultat as $nb_resultat) $total_votes += $nb_resultat;
//  if ($total_votes == 0)	// éviter la division par 0
//  {
//      $total_votes = 1;
//  }
//  $numero = 1;
//  while ($numero <= $donnees) // transformation du nombre de vote en pourcentages
//  {
//      $pourcentage[$numero] = $resultat[$numero] / $total_votes * 100;
//      $numero ++;
//  }
 
//  $long_max_bloc = 120; // longueur maximale du curseur pour un vote en pixels
 
//  // affichage des barres et du nombre de votes
//  $numero = 1;
//  echo ('<div class="titresondage" align="center">'. $question . '</div><br /><form action=""> ');
//  while ($numero <= $donnees) 
//  {
//      echo ('<div class="choix"><label><input type="radio" name="vote" value="' . $numero . '" />'. $reponse[$numero] .'</label>
// <br /> <img src="sondage_barre.jpg" height="10"width="' . $pourcentage[$numero] / 100 * $long_max_bloc . '"
// alt="'.round($pourcentage[$numero]).'%" /><br />
// <span style="font-size:80%;"><strong>' . $resultat[$numero] . ' votes</strong></span></div>');

// //				echo ($pourcentage[$numero] . '%'); 
//      $numero ++;
//  }
//  echo ('<div align="center"><input type="submit" value="envoyer">');
//  echo ('</div></form>');
//  fclose($resultats);
///== Par Yvan0|_| ==///

?>
