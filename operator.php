<?php
    // OPERATOR ARITMATIKA //
    $angka1 = 12;
    $angka2 = 4+1;

    $angka3 = $angka1%$angka2; // sisa bagi (modulo)
    echo "$angka1 % $angka2 = $angka3";
    echo "<br><br>";
    echo"------------------------------------------------<br>";

    // INCREMENT //
    $a = 10;
    $b = $a++;
   
    echo "nilai a = $a";
    echo "<br>";
    echo "nilai b = $b";
    echo "<br><br>-------------------------------------------<br>";

    // Operator Perbandingan //
    // $angka1="12";
    // $angka2=12;

    // if ($angka1===$angka2) {   // ( = ) jika 2 tipe data tidak dicek , jika 3 dibedakan tipe datanya!
    //     echo"sama";
    // } else {
    //     echo"tidak sama";       
    // }
        
    $username="stiki";
    $password="indonesia17";

    if ($username=="stiki" && $password=="indonesia") {
        echo "password benar";
    } else {
        echo "password salah";
    }

    echo"<br>";
    
    if ($username=="stiki" || $password=="indonesia") {
        echo "statement 'atau' benar";
    } else {
        echo "statement 'atau' salah";
    }   

    echo"<br><br>------------------------------------------<br><br>";

    // OPERATOR STRING // 

    $string1 ="Halo nama saya ";
    $string2 ="Julang";
    $string4 ="umur saya ";
    $umur =18;

    $string3 =$string1.$string2;


    echo "$string3 <br>";
    echo $string4.$umur. " tahun";

?>