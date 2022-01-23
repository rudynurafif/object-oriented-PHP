<?php 

Abstract class Produk {
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

?>