<?php           //Classes/ Piece Echecs

    require_once 'InvalidArgumentPiece.class.php';

    class PieceEchecs{

        private $x;
        private $y;
        private $color;



        public function __construct(int $x, int $y, bool $color){

            if(!is_int($x) || !is_int($y)){
                throw new InvalidArgumentPiece("Les coordonées doivent être des entiers");
            }
            else if($x < 1 || $x > 8 || $y < 1  || $y > 8 ){
                throw new InvalidArgumentPiece("Les coordoonées doivent être comprisent entre 1 et 8");
            
            }else{
                $this->setX($x);
                $this->setY($y);

             } if(!is_bool($color)){
                throw new InvalidArgumentPiece("La couleur doit etre soit true soit false");
            }else{
                $this->color = $color;
            }
            

        }


        //getters

        public function getX(): int{
            
            return $this->x;
        }

        public function getY(): int{
            return $this->y;
        }

        public function getColor(): bool{
            return $this->color;
        }

        public function getColorCase(): bool{

            if(($this->x %2==1 && $this->y %2== 1) || ($this->y%2==0 && $this->x %2== 1)){
                return false;
            }else{
                return true;
            }


        }

        //setters

        public function setX(int $x): void{

            if($x>0 && $x<9){
                $this->x = $x;
            }
            
        }

        public function setY(int $y): void{

            if($y>0 && $y<9){
                $this->y = $y;
            }
            
        }

    }

?>