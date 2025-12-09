<?php
    require_once 'classes/PieceEchecs.class.php';

    class Cavalier extends PieceEchecs{

        

        public function canGo($x, $y){
            $x0 = $this->getX();
            $y0 = $this->getY();
            $dx = $x - $x0;
            $dy = $y - $y0;


            if((abs($dy)==2 && abs($dx)==1) || (abs($dx)==2 && abs($dy)==1)){
                return true;
            }else{
                return false;
            }
        }
    }
    



?>