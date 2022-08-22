<?php 

// MANUAL
// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php';

// require_once 'Service/User.php';

// AUTOLOADING
spl_autoload_register(function($class) {
  $class = explode('\\', $class);
  // App\Produk\User  = ["App", "Produk", "User"]
  $class = end($class); // end() mengambil elemen terakhir dari array
  require_once __DIR__ . '/Produk/' . $class . '.php';
});

spl_autoload_register(function($class) {
  $class = explode('\\', $class);
  $class = end($class);
  require_once __DIR__ . '/Service/' . $class . '.php';
});

?>