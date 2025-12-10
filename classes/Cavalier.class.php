<?php
    require_once 'classes/PieceEchecs.class.php';

    class Cavalier extends PieceEchecs{

        

        public function canGo($x, $y): bool{

            $x0 = $this->getX();
            $y0 = $this->getY();

            if($this->inGame($x, $y) && ($x0 != $x || $y0 != $y)){
                
                $dx = abs($x - $x0);
                $dy = abs($y - $y0);


                if(($dy==2 && $dx==1) || ($dx==2 && $dy==1)){
                    return true;
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