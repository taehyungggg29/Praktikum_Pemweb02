<?php
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$hobi = $_POST['hobi'];
$nim = $_POST['nim'];
$prodi =$_POST['prodi'];

echo "<h2>Form Pendaftran Mahasiswa</h2><br>";
echo "Nama : " . $nama . "<br>";
echo "Jenis_Kelamin : " . $jenis_kelamin . "<br>";
echo "Hobi : " . $hobi . "<br>";
echo "Nim : " . $nim . "<br>";
echo "Program Studi : " . $prodi;