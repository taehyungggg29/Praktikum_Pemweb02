<?php
class Kendaraan
{
    public $nama, $warna, $jenis, $jumlahRoda;

    public function cepat()
    {
        return "$this->nama adalah kendaraan yang bisa melaju cepat";
    }

    public function ngerem()
    {
        return "$this->nama adalah kendaraan yang bisa ngerem";
    }

    public function getKendaraan()
    {
        echo "Nama : $this->nama <br>
              Warna : $this->warna <br>
              Jenis : $this->jenis <br>
              Jumlah Roda : $this->jumlahRoda";
    }
}
$object = new Kendaraan;
$object->nama = "Mobil Corona ";
$object->warna = "Ungu ";
$object->jenis = "Sedan ";
$object->jumlahRoda = 4;
echo $object->cepat();
echo "<br>";
$object->getKendaraan();
