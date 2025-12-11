<?php
    require_once 'classes/PieceEchecs.class.php';

    class Reine extends PieceEchecs{


        public function canGo($x, $y): bool{

            $x0 = $this->getX();
            $y0 = $this->getY();

           if($this->inGame($x, $y) && ($x0 != $x || $y0 != $y)){
                
                $dx = abs($x-$x0);
                $dy = abs($y-$y0);

               if(($dx >0 && $dy == 0) || ($dx == 0 && $dy > 0) ){
                
                    return true;

               }else if($dy!=0){
                
                    if( (abs($dx/$dy)) == 1){
                        return true;
                    } else {
                        return false;
                    }

               }else{
                    return false;
               }
                
           }else{
                return false;
           }
            
        }

    }

?>