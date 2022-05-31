<?php

    /**
     * Clase para realizar operaciones matematicas con vectores
    */
    class Vector{
    /**
     * Funcion para realizar la suma entre vectores
    */
        public function sumaVectores($V1, $V2){
            $VR = array();

            for($i = 0; $i < count($V1); $i++) {
                $VR[] = $V1[$i] + $V2[$i];
            }

            return $VR;
        }
    /**
     * Funcion para realizar la resta entre vectores
    */
        public function restaVectores($V1, $V2){
            $VR = array();

            for($i = 0; $i < count($V1); $i++) {
                $VR[] = $V1[$i] - $V2[$i];
            }

            return $VR;
        }

    /**
     * Funcion para realizar el producto escalar de un vector
    */
        public function productoEscalarVectores($V1, $num){
            $VR = array();

            for($i = 0; $i < count($V1); $i++) {
                $VR[] = $V1[$i] * $num;
            }

            return $VR;
        }

    /**
     * Funcion para realizar el modulo de un vector
    */

        public function moduloVector($V1){
            $num = null;

            for($i = 0; $i < count($V1); $i++) {
                $num = $num + ($V1*$V1);
            }
            $num = sqrt($num);

            return $num;
        }
    }



?>