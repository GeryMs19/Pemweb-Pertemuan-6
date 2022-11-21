<?php

// M=1000 D=500 C=100 L=50 X=10 V=5 I=1

function romanConvert($int)
{
    $results = "";
    if ($int < 1 || $int > 5000) { 
        // Statement di atas buat nentuin int ngga boleh dibawah 1 atau di atas 5000
        $results = "Batas int 1 s/d 5000";
    } else {
        while ($int >= 1000) {
            // While itu termasuk kedalam statement perulangan
            // Jadi misal variable int lebih dari sama dengan 1000
            // Kondisi ini akan di jalankan
            $results .= "M"; 
            // jadi pas di jalanin , kondisi ini akan menambahkan M ke dalam
            // Varible results
            $int -= 1000;
            // Lalu setelah itu varible int di kurangi 1000 ,
            // Kenapa di kurangi
            // Karena statment ini mengambil 1000 untuk di konversi menjadi M
        }
    }


    if ($int >= 500) {
        // statement di atas akan bernilai true / benar
        // Jika var int lebih dari sama dengan 500
        if ($int > 500) {
            if ($int >= 900) {
                $results .= "CM";
                $int -= 900;
            } else {
                $results .= "D";
                $int-=500;
            }
        }
    }

    while ($int>=100) {
        if ($int>=400) {
            $results .= "CD";
            $int -= 400;
        } else {
            $int -= 100;
        }
    }

    if ($int>=50) {
        if ($int>=90) {
            $results .= "XC";
            $int -= 90;
        } else {
            $results .= "L";
            $int-=50;
        }
    }

    while ($int >= 10) {
        if ($int >= 40) {
            $results .= "XL";
            $int -= 40;
        } else {
            $results .= "X";
            $int -= 10;
        }
    }

    if ($int >= 5) {
        if ($int == 9) {
            $results .= "IX";
            $int-=9;
        } else {
            $results .= "V";
            $int -= 5;
        }
    }

    while ($int >= 1) {
        if ($int == 4) {
            $results .= "IV"; 
            $int -= 4;
        } else {
            $results .= "I";
            $int -= 1;
        }
    }
    return ($results);
}

echo romanConvert(1994);

?>