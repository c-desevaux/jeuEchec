<?php
    declare(strict_types=1);

    require_once 'classes/Cavalier.class.php';
    require_once 'classes/Fou.class.php';
    require_once 'classes/PieceEchecs.class.php';
    require_once 'classes/InvalidArgumentPiece.class.php';

    $fou = new Fou(6, 6, true);
    $cavalier = new Cavalier(6,6, true);

    $testX = 5;
    $testY=7;
    if($fou->canGO($testX, $testY)){
        echo "le fou peut  aller en $testX, $testY";
    }else{
        echo "le fou ne peut pas aller en $testX, $testY";
    }

    $testX = $testY = 40;
    if($fou->canGO($testX, $testY)){
        echo "le fou peut  aller en $testX, $testY";
    }else{
        echo "le fou ne peut pas aller en $testX, $testY";
    }

    $testX = $testY = 6;
    if($fou->canGO($testX, $testY)){
        echo "le fou peut  aller en $testX, $testY";
    }else{
        echo "le fou ne peut pas aller en $testX, $testY";
    }

    try {
       
        // $test5 = new PieceEchecs(0, 1, true);
        // $test6 = new PieceEchecs(1, 0, true);

       
    } catch (InvalidArgumentPiece $e) {
echo "<br><h1>InvalidArgumentPiece</h1><br>";
        var_dump($e);

    }



?>