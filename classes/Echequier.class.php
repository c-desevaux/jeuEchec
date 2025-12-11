<?php
    require_once "Cavalier.class.php";
    require_once "Fou.class.php";
    require_once "Pion.class.php";
    require_once "Roi.class.php";
    require_once "Tour.class.php";
    require_once "Reine.class.php";
    require_once 'classes/PieceEchecs.class.php';
    
  

    class Echequier {

        private $plate=[];



        public function __construct()
        {
            for($i=1 ; $i<9 ; $i++){
                $plate[$i]=[];
            }

            throw new \Exception('Not implemented');


        }

        public function init(){

            $this->plate[1][1] = new Tour (1, 1, PieceEchecs::WHITE);
            $this->plate[2][1] = new Cavalier (2, 1, PieceEchecs::WHITE);
            $this->plate[3][1] = new Fou (3, 1, PieceEchecs::WHITE);
            $this->plate[4][1] = new Reine (4, 1, PieceEchecs::WHITE);
            $this->plate[5][1] = new Roi (5, 1, PieceEchecs::WHITE);
            $this->plate[6][1] = new Fou (6, 1, PieceEchecs::WHITE);
            $this->plate[7][1] = new Cavalier (7, 1, PieceEchecs::WHITE);
            $this->plate[8][1] = new Tour (8, 1, PieceEchecs::WHITE);

            for($j=1 ; $j <9 ;$j++){
                $this->plate[$j][2] = new Pion ($j, 2, PieceEchecs::WHITE);
            }

            $this->plate[1][8] = new Tour (1, 1, PieceEchecs::BLACK);
            $this->plate[2][8] = new Cavalier (2, 1, PieceEchecs::BLACK);
            $this->plate[3][8] = new Fou (3, 1, PieceEchecs::BLACK);
            $this->plate[4][8] = new Reine (4, 1, PieceEchecs::BLACK);
            $this->plate[5][8] = new Roi (5, 1, PieceEchecs::BLACK);
            $this->plate[6][8] = new Fou (6, 1, PieceEchecs::BLACK);
            $this->plate[7][8] = new Cavalier (7, 1, PieceEchecs::BLACK);
            $this->plate[8][8] = new Tour (8, 1, PieceEchecs::BLACK);


            for($j=1 ; $j <9 ;$j++){
                $this->plate[$j][7] = new Pion ($j, 7, PieceEchecs::BLACK);
            }

        }

        public function display(){

            $displate = [];
            for($i=1 ; $i < 9 ; $i++){
                $displate[$i] = [];
                for($j = 1 ; $j <9 ; $j++){

                    
                    
                    if(get_class($this->plate[$i][$j]) == "Pion"){    

                        if($this->plate[$i][$j]->getColor() == PieceEchecs::WHITE){
                            $displate[$i][$j] == "\u+{2659}";
                        }else{
                            $displate[$i][$j] == "\u+{265F}";
                        }

                    }
                    else if(get_class($this->plate[$i][$j]) == "Tour"){    

                        if($this->plate[$i][$j]->getColor() == PieceEchecs::WHITE){
                            $displate[$i][$j] == "\u+{2656}";
                        }else{
                            $displate[$i][$j] == "\u+{265C}";
                        }
                    }else if(get_class($this->plate[$i][$j]) == "Fou"){    

                        if($this->plate[$i][$j]->getColor() == PieceEchecs::WHITE){
                            $displate[$i][$j] == "\u+{2657}";
                        }else{
                            $displate[$i][$j] == "\u+{265D}";
                        }
                    }else if(get_class($this->plate[$i][$j]) == "Cavalier"){    

                        if($this->plate[$i][$j]->getColor() == PieceEchecs::WHITE){
                            $displate[$i][$j] == "\u+{2658}";
                        }else{
                            $displate[$i][$j] == "\u+{265E}";
                        }
                    }else if(get_class($this->plate[$i][$j]) == "Reine"){    

                        if($this->plate[$i][$j]->getColor() == PieceEchecs::WHITE){
                            $displate[$i][$j] == "\u+{2655}";
                        }else{
                            $displate[$i][$j] == "\u+{265B}";
                        }
                    }else if(get_class($this->plate[$i][$j]) == "Roi"){    

                        if($this->plate[$i][$j]->getColor() == PieceEchecs::WHITE){
                            $displate[$i][$j] == "\u+{2654}";
                        }else{
                            $displate[$i][$j] == "\u+{265A}";
                        }
                    }
                }
            }
        }
    }


?>