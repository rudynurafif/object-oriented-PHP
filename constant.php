<?php 

  // // define(name, value)
  // define('NAMA', "Rudy Nurafif"); // tidak bisa disimpan didalam kelas
  // echo NAMA;

  // echo "<br>";

  // const UMUR = 23; // bisa didalam kelas, bisa digunakan dalam konsep OOP
  // echo UMUR;

  // class Coba {
  //   const NAMA = "Rudy Nurafif";
  // }

  // echo Coba::NAMA;

  // echo __LINE__; // Menampilkan baris dimana magic const ini ditulis
  
    // function Coba() {
    //   return __FUNCTION__;
    // }
    // echo Coba();

    echo __FILE__;
    echo "<br>";

    class Coba {
      public $kelas = __CLASS__;
    }

    $obj = new Coba;
    echo $obj->kelas;
?>