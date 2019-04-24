<!DOCTYPE html>
  <html>
    <head>
        <meta charset="UTF-8">
        <title>punition2</title>
    </head>

    <body>
      <h2>utilisation de php</h2>
      <?php
      //afficher le plus petit entre A et B
      $A = 7;
      $B = 9;
      echo min($A, $B). '<br>';
      //idem avec A,B et C
      $C = 4;
      echo min($A, $B, $C). '<br>';
      //afficher un nombre aléatoire entre 1 et 100
      echo rand(1, 100). '<br>';
      //idem entre 5 et 100
      echo rand(5, 100). '<br>';
      //faire une fonction addition
      function addition($A, $B){
        $add = $A + $B;
        return $add;
      }
      addition($A, $B);
      echo 'Résultat addition :' .addition($A,$B). '<br>';
      //idem en pgcd
      /*function pgcd($A, $B){
        $pgc = $A % $B;
        return $pgc;
      }
      pgcd($A, $B);
      echo 'Résultat pgcd :' .pgcd($A,$B). '<br>';*/

      function pgcd($nombre,$nombre2){
        while($nombre>1){
        $reste = $nombre%$nombre2;
          if($reste == 0){
            break; // sorti quand resultat trouvé
          }
        $nombre=$nombre2;
        $nombre2=$reste;
        }
      return $nombre2; // retourne le resultat
    }
    echo pgcd( 120,420 );
// Affiche 60

      //afficher "Je vais faire du bon visuel" si x (nb aléatoire entre 1 et 100) <50 sinon "Je suis un piou piou"
      $x = rand(1, 100);
      function puni(){
        $x = rand(1, 100);
        if ($x < 50){
          echo 'Je vais faire du bon visuel <br>';
        }
        else{
          echo 'Je suis un pioupiou <br>';
        }
      }
      puni();
      //afficher 30 fois "petite perruche" + numéro tant que x (aléatoire entre 1 et 100) <50
      if ($x <= 50){
        for($i = 1; $i <= 30; $i++){
        echo 'petite perruche n°' .$i. '<br>';
        }
      }
      //faire fonction qui prend en param x si x==1 afficher (AAAA); x==2 ""(BBBB) jusque 4 sinon (je suis une perruche)
      function test(){
        $x = rand(1, 10);
        if($x == 1){
          echo "AAAA <br>";
        }
        else if($x == 2){
          echo "BBBB <br>";
        }
        else if($x == 3){
          echo "CCCC <br>";
        }
        else if($x == 4){
          echo "CCCC <br>";
        }
        else{
          echo "je suis une perruche <br>";
        }
      }
      test();
      //faire 10 avec switchcase
      $y = rand(1, 15);
      switch ($y){
        case 1:
          echo '$y =' .$y;
          break;
        case 2:
          echo '$y =' .$y;
          break;
        case 3:
          echo '$y =' .$y;
          break;
        case 4:
          echo '$y =' .$y;
          break;
        case 5:
          echo '$y =' .$y;
          break;
        case 6:
          echo '$y =' .$y;
          break;
        case 7:
          echo '$y =' .$y;
          break;
        case 8:
          echo '$y =' .$y;
          break;
        case 9:
          echo '$y =' .$y;
          break;
        case 10:
          echo '$y =' .$y;
          break;
        default:
          echo '$y n\'est pas compris entre 1 et 10';
      }
      //x= nb aléa entre 1 et 2; si x==1 include page1.html (page qui contient h1 "je suis à 1") sinon include page2.html (idem)
      function inclusion(){
        $x = rand(1, 2);
        if($x == 1){
          include "page1.html";
        }
        else{
          include "page2.html";
        }
      }
      inclusion();
      //generer 10 valeurs aléatoires qui seront ajoutées à un tableau tab
        for($x = 0; $x < 10; $x++){
          $aléa = rand(1,50);
          $tableau = array('','','','','','','','','','');
          $tableau[] = $aléa;
          echo $tableau[$x]. '<br>';
        }
      //créer fonction qui trie tableau de 10 valeurs
      sort($tableau,SORT_NUMERIC);
      foreach($tableau as $index => $valeur){
        /*print_r($tableau);*/echo "$index = $valeur <br>";
      }
      //utiliser une autre méthode pour l'instruction précédente

      ?>

    </body>
  </html>
