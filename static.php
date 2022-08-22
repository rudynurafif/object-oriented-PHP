<?php 

  // class ContohStatic {
  //   public static $angka = 1;

  //   public static function halo() {
  //     return "Halo " . self::$angka++ . " kali.";
  //   }
  // }

  // echo ContohStatic::$angka; // 1
  // echo "<br>";
  // echo ContohStatic::halo(); // Halo 1 kali
  // echo "<hr>";
  // echo ContohStatic::halo(); // Halo 2 kali

  class Contoh {
    public static $angka = 1; // static, tidak direset

    public function halo() {
      return "Halo " . self::$angka++ . " kali. <br>";
    }
  }

  $obj = new Contoh;
  echo $obj->halo(); // Halo 1 kali
  echo $obj->halo(); // Halo 2 kali
  echo $obj->halo(); // Halo 3 kali

  echo "<hr>";

  $obj2 = new Contoh;
  echo $obj2->halo(); // Halo 4 kali
  echo $obj2->halo(); // ..dst
  echo $obj2->halo();


 ?>

 <!--

  Static Keyword
  - Member2nya (property dan method) terikat dengan class, bukan dengan instance object
  - Nilai static akan selalu tetap meskiun object di-instansiasi berulang kali (tidak direset)
  - Membuat kode seolah2 menjadi 'procedural'
  - Biasanya digunakan untuk membuat fungsi bantuan / helper
  - Atau digunakan di class-class utility pada frame work

  -->