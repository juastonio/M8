<?php
    /**
     * Clase para realizar operaciones matemáticas con matrices
     */
    class Matriu{

        /**
         * Método dadas dos matrices para sumarlas y obtener una matriz resultante
         */
        public function sumarMatrius($matriz1, $matriz2){
            $suma = array();

            if(count($matriz1) == count($matriz2)){ // Verificamos que las 2 matrices tengan el mismo tamaño de filas

                for($i=0; $i<count($matriz1); $i++){ // Recorremos cada fila
                    $suma[] = array(); // Creamos una entrada por cada fila
                    if( count($matriz1[$i])==count($matriz2[$i])){ // Verificamos que las 2 matricies tengan las mismas columnas
                        for($j=0; $j<count($matriz1[$i]); $j++){ // Recorremos las columnass
                            $suma[$i][] = $matriz1[$i][$j]  + $matriz2[$i][$j]; // Realizamos la suma o resta, cambiar simbolo +/-
                        }
                    }
                }

                
            }else{
                return null;
            }
            return $suma;
        }

        /**
         * Método dadas dos matrices para restarlas y obtener una matriz resultante
         */
        public function restarMatrius($matriz1, $matriz2){
            $resta = array();
            
            if(count($matriz1) == count($matriz2)){ // Verificamos que las 2 matrices tengan el mismo tamaño de filas

                for($i=0; $i<count($matriz1); $i++){ // Recorremos cada fila
                    $resta[] = array(); // Creamos una entrada por cada fila
                    if( count($matriz1[$i])==count($matriz2[$i])){ // Verificamos que las 2 matricies tengan las mismas columnas
                        for($j=0; $j<count($matriz1[$i]); $j++){ // Recorremos las columnass
                            $resta[$i][] = $matriz1[$i][$j]  - $matriz2[$i][$j]; // Realizamos la suma o resta, cambiar simbolo +/-
                        }
                    }
                }   
            }else{
                return null;
            }
            return $resta;
        }

        /**
         * Método dada una matriz y un número entero, nos multiplica la matriz por ese número entero y nos la devuelve
         */
        public function matriuPerEscalar($matriz1, $numMultiplicar){
            $resultado = array();
            for($j=0; $j < count($matriz1); $j++){
                for($i=0; $i < count($matriz1[$j]); $i++){
                    $resultado[$j][$i] = $numMultiplicar * $matriz1[$j][$i];
                }
            }
            return $resultado;
        }
        /**
         * Método dadas dos matrices para multiplicarlas y obtener una matriz resultante
         */
        public function producteMatrius($matrizA, $matrizB){
            $resultado = array();

            for ($a = 0; $a < count($matrizB[0]); $a++) {
                for ($i = 0; $i < count($matrizA); $i++) {
                    $suma = 0;
                    for ($j = 0; $j < count($matrizA[0]); $j++) {
                        $suma += $matrizA[$i][$j] * $matrizB[$j][$a];
                    }
                    $resultado[$i][$a] = $suma;
                }
            }

            return $resultado;
        }
        /**
         * Método que nos da la matriz inversa de una matriz pasada por parámetro
         */
        public function matriuInversa($matriz1){
            return $resultado = Lapack::pseudoInverse($matriz1);
        }
    }
?>