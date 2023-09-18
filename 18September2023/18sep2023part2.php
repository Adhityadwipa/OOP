<?php

class Tumbuhan{

    public $nama;
    public $warna;
    public $beracun;
    public $jenisAkar;
    public $buah;
    public $ukuran;

}

class Pisang extends Tumbuhan{
    public $jantung;
}
class Jambu extends Tumbuhan{
    public $bunga;
    public $biji;
}


$susu = new Pisang();
$susu->nama = 'Pisang Susu';
$susu->warna = 'Putih Kuning';
$susu->beracun = 'Tidak beracun';
$susu->jenisAkar = 'Akar Serabut';
$susu->buah = 'Memiliki buah';
$susu->ukuran = 'Kecil';
$susu->jantung = 'Memiliki jantung pisang';
echo '<h1>Di bawah ini merupakan beberapa jenis Tumbuhan :</h1> <h1><center>PISANG</center></h1><br><br><h2> Nama: '.$susu->nama.'<br>Berwarna: '.$susu->warna.'<br>Tumbuhan ini '.$susu->beracun.'<br>Jenis Akar: '.$susu->jenisAkar.'<br>Tumbuhan ini '.$susu->buah.' yang dapat dimakan<br>Tumbuhan ini berukuran'.$susu->ukuran.'<br>Tumbuhan ini '.$susu->jantung;

$batu = new Pisang();
$batu->nama = 'Pisang Batu';
$batu->warna = 'Kuning kecokelatan';
$batu->beracun = 'Tidak beracun';
$batu->jenisAkar = 'Akar Serabut';
$batu->buah = 'Memiliki buah';
$batu->ukuran = 'Sedang';
$batu->jantung = 'Memiliki jantung pisang';
echo '<h2> Nama: '.$batu->nama.'<br>Berwarna: '.$batu->warna.'<br>Tumbuhan ini '.$batu->beracun.'<br>Jenis Akar: '.$batu->jenisAkar.'<br>Tumbuhan ini '.$batu->buah.' yang dapat dimakan<br>Tumbuhan ini berukuran'.$batu->ukuran.'<br>Tumbuhan ini '.$batu->jantung.'<hr>';


$biji = new Jambu();
$biji->nama = 'Jambu Biji';
$biji->warna = 'Hijau muda';
$biji->beracun = 'Tidak beracun';
$biji->jenisAkar = 'Akar Tunggang';
$biji->buah = 'Memiliki buah';
$biji->ukuran = 'Sedang';
$biji->bunga = 'Memiliki Bunga';
$biji->biji = 'Monokotil';
echo '<h1><center>JAMBU</center></h1><br><h2> Nama: '.$biji->nama.'<br>Berwarna: '.$biji->warna.'<br>Tumbuhan ini '.$biji->beracun.'<br>Jenis Akar: '.$biji->jenisAkar.'<br>Tumbuhan ini '.$biji->buah.' yang dapat dimakan<br>Tumbuhan ini berukuran'.$biji->ukuran.'<br>Tumbuhan ini '.$biji->bunga.' yang berukuran kecil<br>Tumbuhan ini memiliki biji berjenis '.$biji->biji;

$air = new Jambu();
$air->nama = 'Jambu Air';
$air->warna = 'Merah Muda';
$air->beracun = 'Tidak beracun';
$air->jenisAkar = 'Akar Serabut';
$air->buah = 'Memiliki buah';
$air->ukuran = 'Sedang';
$air->bunga = 'Memiliki Bunga';
$air->biji = 'Monokotil';
echo '<h2> Nama: '.$air->nama.'<br>Berwarna: '.$air->warna.'<br>Tumbuhan ini '.$air->beracun.'<br>Jenis Akar: '.$air->jenisAkar.'<br>Tumbuhan ini '.$air->buah.' yang dapat dimakan<br>Tumbuhan ini berukuran'.$air->ukuran.'<br>Tumbuhan ini '.$air->bunga.' yang berukuran kecil<br>Tumbuhan ini memiliki biji berjenis '.$air->biji.'<br>Berbeda dengan jambu biji, jambu ini bertekstur lembut dan berair';

?>