<?php 
  echo "<pre>";

  class Produk {
    public $judul, // ini membuat property
           $penulis,
           $penerbit,
           $harga;
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
    }

    public function getLabel() { // ini method
      return "$this->penulis, $this->penerbit";
    }
  }

  class CetakInfoProduk { // kelas ini hanya bertugas untuk mencetak info
    public function cetak(Produk $produk) { // konsep object type, menggunakan object sbg parameter suatu method
      $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
      return $str;
    }
  }

  $produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
  $produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);
  
  echo "Komik : " . $produk1->getLabel();
  echo "<br>";
  echo "Game : " . $produk2->getLabel();
  echo "<hr>";

  $infoProduk1 = new CetakInfoProduk(); // instansiasi
  echo $infoProduk1->cetak($produk1);

?>