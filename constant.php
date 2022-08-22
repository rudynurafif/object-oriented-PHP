<?php 

  // Constanta
  // define(name, value) && const


  // // define(name, value)
  // define('NAMA', "Rudy Nurafif"); // tidak bisa disimpan didalam block kelas dan konsep OOP
  // echo NAMA;

  // echo "<br>";

  // const UMUR = 23; // bisa disimpan didalam block kelas, bisa juga digunakan dalam konsep OOP
  // echo UMUR;

  // class Coba {
  //   const NAMA = "Rudy Nurafif";
  // }

  // echo Coba::NAMA;

  // Terdapat beberapa Magic Constant di PHP

  // echo __LINE__; // Menampilkan baris dimana magic const ini ditulis
  
  // function coba() {
  //   return __FUNCTION__; // sedang berada di function apa
  // }
  // echo coba(); // coba

  echo __FILE__; // lokasi file
  echo "<br>";

  class Coba {
    public $kelas = __CLASS__; // sedang berada di
  }

  $obj = new Coba;
  echo $obj->kelas; // Coba
?>