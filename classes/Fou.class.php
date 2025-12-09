<?php

    class Fou extends PieceEchecs{

        public function __construct(){
            parent::__construct();

            

        }

        public function canGo($x, $y){
            $x0 = $this->getX();
            $y0 = $this->getY();

            if( abs($x0 - $x)/abs($y0 - $y) == 1){
                return true;
            } else {
                return false;
            }
        }
    }
    



?>