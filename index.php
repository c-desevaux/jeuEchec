<?php
    declare(strict_types=1);

    require_once 'classes/Cavalier.class.php';
    require_once 'classes/Fou.class.php';
    require_once 'classes/Roi.class.php';
    require_once 'classes/PieceEchecs.class.php';
    require_once 'classes/InvalidArgumentPiece.class.php';



    $plate=[];

    for($x=1 ; $x < 9 ; $x++){
        $plate[$x]=[];
        for($y=1 ; $y < 9 ; $y++){
            $z = rand(0,1);
            if($z == 0){
                $plate[$x][$y] = new Roi ($x, $y, PieceEchecs::WHITE);
                  
            }else{
                $plate[$x][$y] = new Roi ($x, $y, PieceEchecs::BLACK);
            }

            if($plate[$x][$y]->canGo(5,5)){

                echo "Le " .get_class($plate[$x][$y])." situé en ".$x ." " .$y ." PEUT se déplacer sur la case 5, 5 <br>" ;  
            }else{
                echo "Le " .get_class($plate[$x][$y])." situé en ".$x ." " .$y ." NE peut PAS se déplacer sur la case 5, 5 <br>" ; 
            }
        }
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