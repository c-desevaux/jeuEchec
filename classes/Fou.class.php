<?php
    require_once 'classes/PieceEchecs.class.php';

    class Fou extends PieceEchecs{

        

        public function canGo($x, $y){

            $x0 = $this->getX();
            $y0 = $this->getY();

           if($this->inGame($x, $y) && ($x0 != $x || $y0 != $y)){
                
                $dx = $x-$x0;
                $dy = $y-$y0;

                if($dy!=0){
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

        public function canEat(PieceEchecs $piece): bool{

            if($this->canGo($piece->getX(), $piece->getY()) && $this->getColor() != $piece-> getColor()){
                
                return true;           
            }else{
                return false;
            }


        }
    }
    



?>