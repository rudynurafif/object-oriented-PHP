<?php 

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';

// fungsi autoloading, spl = standar php library
spl_autoload_register(function($class) { // function closure sbg parameter
  require_once __DIR__ . '/Produk/' . $class . '.php';
});

?>