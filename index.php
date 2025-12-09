<?php
    declare(strict_types=1);

    require_once 'classes/PieceEchecs.class.php';
    require_once 'classes/InvalidArgumentPiece.class.php';

    $fou = new PieceEchecs (4,4, true);
    var_dump($fou);


    try {
       
        // $test5 = new PieceEchecs(0, 1, true);
        // $test6 = new PieceEchecs(1, 0, true);

       
    } catch (InvalidArgumentPiece $e) {
echo "<br><h1>InvalidArgumentPiece</h1><br>";
        var_dump($e);

    }



?>