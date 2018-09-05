<?php
    $max = 500; // batas nilai dari looping
    $sum = 0; // inisiasi variabel untuk menampung penjumlahan
    for($i = 1; $i<$max; $i++) { //looping dari i=1 sampai i<500
        if ($i % 4 == 0) { //cek apakah kelipatan 4 atau tidak
            $sum = $sum + $i; // jika kelipatan 4 maka nilai akan ditambahkan dan dimasukan ke variable penampung
        }
    }
    echo $sum;    //menampilkan hasil dari penjumlahan
?>