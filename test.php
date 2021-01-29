

<?php

class Test {
//calcul de la somme des n premiers nombres
    public function test1 ($input){
        $n = $input;
        $compteur = 0; // Comptera le nombre
        $resultat = 0; // La somme
         
        while ($compteur <= $n) {
           
                $resultat = $resultat + $compteur;
                $compteur++;
        }
         
        echo ($resultat);
    }

    public function test2($a,$b){
        $var1 = $a;
        $var2 = $b;
        $min = 0;
        $max = 0;
        $x = 0;

    }
    public function test3($a,$b){
        $var1 = $a;
        $var2 = $b;
        $res = 0;
        $rest = $a;

        while($rest > $var2){
            $res = $res + 1;
            $rest = $var1 - $var2;

        }
        echo ('le quotient de A/B est :'+$res+' le reste de A/B est :'+$rest);
    }

    public function test4($a,$b){
        $var1 = $a;
        $var2 = $b;
        $res = 0;
        $compteur = 0;
        if($var1 = 0 || $var2 = 0){
            $res = 0;
        }
        else {
            $compteur = 1;
            while($compteur <= $var2){
                $res = $res + $var1;
                $compteur = $compteur + 1;
            }
        }
        echo('le produit est' + $res)
    }

    public function test5($a,$b){
        $var1 = $a;
        $var2 = $b;
        $res = $var1;
        while($res >0){
            $res = $res - $var2;
        }
        if($res == 0) {
            echo($var1+'est divisible par'+$var2);
        }
        else{
            echo($var1+'n est pas divisible par'+$var2);
        }

    public function test6($a){
        $var1 = $a;
        $m = 0;
        $i = 1;

        while ($i <= $var1/2){
            $m = $var1;
            if( $m % $i = 0){
                echo ($m);
                $i = $i++;
            }
            else {
                $i = $i++;
            }
        }
    }
    }
}