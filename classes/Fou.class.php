<?php
    require_once 'classes/Fou.class.php';
    class Fou extends PieceEchecs{

        

        public function canGo($x, $y){

            $x0 = $this->getX();
            $y0 = $this->getY();

           if($this->inGame($x, $y) && ($x0 != $x || $y0 != $y)){
                
                $dx = $x-$x0;
                $dy = $y-$y0;


                if( (abs($dx/$dy)) == 1){
                    return true;
                } else {
                    return false;
                }
           }else{
                return false;
           }

                
           
            
        }
    }
    



?>