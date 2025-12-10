<?php

    class Pion extends PieceEchecs {


        public function canGo($x, $y){

            $x0 = $this->getX();
            $y0 = $this->getY();
            $color = $this->getColor();

           if($this->inGame($x, $y) && ($x0 != $x || $y0 != $y)){
                
                $dx = $x-$x0;
                $dy = $y-$y0;

                if($dx==0){
                    if($color == PieceEchecs::WHITE){
                        if(($y0==2 && $dy==2) || $dy==1){
                            return true;
                        }else{
                            return false;
                        }
                    }else if($color == PieceEchecs::BLACK){
                        if(($y0==7 && $dy == -2) || $dy==-1){
                            return true;
                        }else{
                            return false;
                        }
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