<?php
    declare(strict_types=1);

    require_once 'classes/Cavalier.class.php';
    require_once 'classes/Fou.class.php';
    require_once 'classes/Roi.class.php';
    require_once 'classes/Pion.class.php';
    require_once 'classes/PieceEchecs.class.php';
    require_once 'classes/InvalidArgumentPiece.class.php';



    $pion1 = new Pion (2,2, PieceEchecs::BLACK);
    $pion2 = new Pion (2,1, PieceEchecs::WHITE);
    

    if($pion1->canEat($pion2)){
        echo "le pion1 en 2,2 peux manger le pion2 ";
    }else{
        echo "le pion1 en 2,2 Ne Peux Pas manger le pion2 ";
    }
    






 //Jeu d'essai   

    try {
       
        // $test5 = new PieceEchecs(0, 1, true);
        // $test6 = new PieceEchecs(1, 0, true);

       
    } catch (InvalidArgumentPiece $e) {
echo "<br><h1>InvalidArgumentPiece</h1><br>";
        var_dump($e);

    }



?>