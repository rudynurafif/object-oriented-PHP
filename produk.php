<?php 
  echo "<pre>";

  // CARA MEMBUAT PROPERTY DAN METHOD (PAKAI ACCESIBILITY DIDEPANNYA)

  class Produk {
    public $judul = "judul", // ini membuat property
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;
    
    public function getLabel() { // ini method
      return "$this->penulis, $this->penerbit";
    }
  }

  // $produk1 = new Produk();
  // $produk1->judul = "One Piece";
  
  // var_dump($produk1);
  
  // $produk2 = new Produk();
  // $produk2->judul = "Mario Bros"; // menimpa value dari suatu property
  // $produk2->tambahProperty = "hahahai"; // menambah property baru
  // var_dump($produk2);

  $produk3 = new Produk();
  $produk3->judul = "Naruto";
  $produk3->penulis = "Masashi Kishimoto";
  $produk3->penerbit = "Shonen Jump";
  $produk3->harga = 30000;

  $produk4 = new Produk();
  $produk4->judul = "Uncharted";
  $produk4->penulis = "Neil Druckmann";
  $produk4->penerbit = "Sony Computer";
  $produk4->harga = 250000;
  
  echo "Komik : " . $produk3->getLabel();
  echo "<br>";
  echo "Game : " . $produk4->getLabel();


  
?>