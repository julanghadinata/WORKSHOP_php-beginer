<?php
    $macam2 = array(121,"joko",44.99,"Belajar PHP");
    $macam2[4]="Julang.com";
    $macam2[5]="212";
    $macam2[6]="3.14"; // nambah index
    $macam2[1]="JOKOWOW"; // mengubah index 1 pada array macam2

    $macam2[]="array baru";
    $macam2[99]=100;

    echo "<pre>";
    print_r($macam2); // menampilkan semua array dan index
    echo "</pre>";

    $mahasiswa = array(
        'nama' => "julang",
        'alamat' => "Denpasar",
        "umur" => "18",
        "telp" => "082247792245"
    );

    echo"<pre>";
    print_r($mahasiswa);
    echo"</pre>";

    echo "umur $mahasiswa[nama] adalah $mahasiswa[umur]";
?>