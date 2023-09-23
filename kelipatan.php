<?php

class Kelipatan
{
    private $bage_concat_counter = 0;
    private $input;
    
    public function __construct($input)
    {
        $this->input = $input;
    }

    public function cetak(){

        $angka = 1;
        while ($this->bage_concat_counter < $this->input) {
            echo "(". $angka .  ")  ";

            if($angka % 3 == 0 && $angka % 5 == 0){
                $this->bage_concat_counter++;
                echo "Bage Concat";
    
            }else if($this->bage_concat_counter < 2){
                if($angka % 3 == 0){
                    echo "Bage";
        
                }else if($angka % 5 == 0){
                    echo "Concat";
                }
        
            }else if($this->bage_concat_counter >= 2){
                if($angka % 3 == 0){
                    echo "Concat";
        
                }else if($angka % 5 == 0){
                    echo "Bage";
                }
            }

            $angka++;
            echo '<br>';

            if($this->bage_concat_counter == 5){
                break;
            }
        }
    
    }
}