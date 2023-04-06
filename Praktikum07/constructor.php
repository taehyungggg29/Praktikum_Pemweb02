<?php
class Bighit
{
    public $nama, $asalNegara, $judulLagu;

    public function __construct($n, $a, $j)
    {
        $this->nama = $n;
        $this->asalNegara = $a;
        $this->judulLagu = $j;
    }

    public function konser()
    {
        return "$this->nama akan konser";
    }
    public function getBighit()
    {
        echo "Nama : $this->nama <br>
              Asal Negara : $this->asalNegara <br>
              Judul Lagu : $this->judulLagu";
    }
}
$objectBighit = new Bighit("BTS", "Korea Selatan", "Life Goen ON");
$objectBighit->getBighit();
echo "<br>";
echo $objectBighit->konser();