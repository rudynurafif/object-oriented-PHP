<?php 
  echo "<pre>";
  
  class Produk {
    public $judul, // ini membuat property
           $penulis,
           $penerbit,
           $harga;
    
    // constructor, method spesial, method yang otomatis dijalankan, ketika class diinstansiasi (dibuat objek)
    // method atau function yang memiliki __ di depannya karna merupakan method spesial yang dimiliki PHP
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

  $produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
  $produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);
  $produk3 = new Produk("Dragon Ball");
  
  echo "Komik : " . $produk1->getLabel();
  echo "<br>";
  echo "Game : " . $produk2->getLabel();
  echo "<br>";
  var_dump($produk3);

  
?>