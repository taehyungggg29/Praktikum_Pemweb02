<?php
class Mamalia
{
    //properti class mamalia
    public $namaHewan;
    public $warna;
    public $habitat;
    public $makanan;

    function bisaMenyusui()
    {
        return "$this->namaHewan ini bisa menyusui !";
    }

    function berjalan()
    {
        return "$this->namaHewan ini bisa berjalan !";
    }
}
$object = new Mamalia;
$object->namaHewan = "Kucing";
$object->warna = "Putih";
$object->habitat = "Darat";
$object->makanan = "Ikan";
echo $object->bisaMenyusui();