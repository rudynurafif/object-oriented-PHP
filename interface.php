<?php 
  echo "<pre>";


  /*
  INTERFACE
  - Kelas abstrak yang tidak memiliki implementasi
  - Murni merupakan template untuk kelas turunannya
  - Tidak boleh memiliki property, hanya deklarasi method (function) saja
  - Semua methodnya harus dideklarasikan dgn visibility public
  - Boleh mendeklarasikan __construct() di dalamnya
  - Satu kelas (turunan) boleh mengimplementasikan banyak interface
  - Dengan menggunakan type-hinting, dapat melakukan 'dependency injection' (konsep object type)
  - Pada akhirnya akan mencapai Polymorphism
  
  */

  // kelas interface tidak bisa diinstansiasi
  interface InfoProduk { // kelas interface, tidak boleh memiliki property
    public function getInfoProduk(); // ini deklarasi method, tanpa implementasi (hanya template), visibility public
  }

  abstract class Produk {
    protected $judul, // ini membuat property
           $penulis,
           $penerbit,
           $harga,
           $diskon = 0;
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
    }

    public function setJudul($judul) { // setter
      // if (!is_string($judul)) {
      //   throw new Exception("Judul harus string");
      // }
      $this->judul = $judul;
    }

    public function getJudul() { // getter
      return $this->judul;
    }

    public function setPenulis($penulis) { // setter
      $this->penulis = $penulis;
    }

    public function getPenulis() { // getter
      return $this->penulis;
    }

    public function setPenerbit($penerbit) {
      $this->penerbit = $penerbit;
    }

    public function getPenerbit() {
      return $this->penerbit;
    }

    public function setDiskon($diskon) {
      $this->diskon = $diskon;
    }

    public function getDiskon() {
      return $this->diskon;
    }

    public function setHarga($harga) {
      $this->harga = $harga;
    }

    public function getHarga() { 
      return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getLabel() { // ini method
      return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfo();
    
  }

  class Komik extends Produk implements InfoProduk {
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
      parent::__construct ($judul, $penulis, $penerbit, $harga);
      $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo() { // dari kelas abstract
      $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
      return $str;
    }

    public function getInfoProduk() { // dari kelas interface
      $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
      return $str;
    }
  }

  class Game extends Produk implements InfoProduk {
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
      parent::__construct($judul, $penulis, $penerbit, $harga);
      $this->waktuMain = $waktuMain;
    }

    public function getInfo() {
      $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
      return $str;
    }

    public function getInfoProduk() {
      $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
      return $str;
    }
  }

  class CetakInfoProduk {
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk) {
      $this->daftarProduk[] = $produk;
    }

    public function cetak() {
      $str = "DAFTAR PRODUK : <br>";

      foreach($this->daftarProduk as $p) {
        $str .= "- {$p->getInfoProduk()} <br>";
      }

      return $str;
    }
  }

  $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
  $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

  $cetakProduk = new CetakInfoProduk();
  $cetakProduk->tambahProduk($produk1);
  $cetakProduk->tambahProduk($produk2);
  echo $cetakProduk->cetak();
  


?>