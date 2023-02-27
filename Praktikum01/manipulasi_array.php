<?php
$arrayBuah = ["Jeruk", "Manggis", "Apel", "Durian"];

//mengurutkan array
sort($arrayBuah);

//menghapus value array yang paling akhir
array_pop($arrayBuah);

//untuk menghapus variabel ataupun spesifik value array
unset($arrayBuah[1]);

//untuk menambahkan array di paling akhir
array_push($arrayBuah, "Naga");

//untuk menghapus value/data array paling awal
array_shift($arrayBuah);

//untuk menambahkan array di paling awal
array_unshift($arrayBuah, "semangka");

//mengubah data/value array dengan spesifik key/index
$arrayBuah[1] = "Anggur";

foreach($arrayBuah as $buah) {
    echo "<br>". $buah;
}