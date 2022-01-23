 <!-- 
###
Object Oriented Programming?
  Merupakan gaya pemrograman, atau paradigma pemrograman, cara menuliskan pemrograman.

Procedural Programming?
  - Instruksi dilakukan langkah demi langkah
  - Memecah program menjadi bagian bagian kecil
  - Disebut prosedur, subroutine, atau function
  - Linear / top to bottom
  - Fortran, Algol, Pascal, C, PHP, Javascript

Mengapa menggunakan prosedural programming?
  - Cenderung to the point
  - Simplicity dan kemudahan impelementasi (untuk compiler dan interpreter)
  - Mudah ditelurusi
  - Membutuhkan lebih sedikit memory (dibanding dgn OOP)

Object Oriented Programming?
  - Menyusun semua kode program dan struktur data sebagai objek
  - Objek adalah unit dasar dari program
  - Objek menyimpan data dan perilaku
  - Objek bisa saling berinteraksi
  - Java, Ruby, Phyton, C++, Js, PHP5

Kelebihan OOP
  - Representasi dunia nyata
  - Enkapsuliasi dan Abstraksi Data
  - Reusability
  - Skalabilitas dan Ekstensibilitas
  - Kemudahan pengelolaan
  - Kolaborasi
  - Digunakan oleh framework

Konsep OOP pada PHP?
  - Basic
    - Class dan Object
    - Property dan Method
    - Constructor
    - Object Type
    - Inheritance
    - Visibility / Acces Modifier
    - Setter dan Getter
    - Static Method
  - Advanced
    - Abstract dan Interface
    - Interceptor
    - Object Cloning
    - Callbacks dan Closures
    - Namespaces dan Autoloading


###
Class dan Object

Class
  - Blueprint / template untuk membuat instance dari object
  - Class mendefinisikan object
  - Menyimpan data dan perilaku yang disebut dengan property dan method

Cara membuat class
  - Diawali dengan menuliskan keyword class, diikuti nama dan dibatasi dengan {} untuk menyimpan property dan method
  - Aturan penamaan class sama seperti variabel
  - Contoh ->
  class Coba {
    public $a; // property

    // method
    public function b() {

    }
  }

Object
  - Instance yang didefinisikan oleh Class
  - Banyak object dapat dibuat menggunakan satu class
  - Object dibuat dengan menggunakan keyword new


Property
  - Sesuatu yang mempresentasikan data / keadaan dari sebuah object
  - Varialbel yang ada di dalam object (member value)
  - Sama seperti variabel di dalam PHP, ditambah dengan visibility di depannya (public, private, protected)

Method
  - Sesuatu yang mempresentasikan perilaku dari sebuah object
  - Function yang ada didalam object
  - Sama seperti function di dalam PHP, ditambah dengan visibility di depannya.


###
Inheritance (Pewarisan)
  - Menciptakan hierarki antar kelas (Parent dan Child)
  - Child Class, mewarisi semua properti dan method dari paretnya (yang visible)
  - Child Class, memperluas (extends) fungsionalitas dari parentnya
  
  
###
Visibility
- Konsep yang digunakan untuk mengatur akses dari property dan method pada sebuah objek
- Ada 3 keyword visibility: public, protected, private
  - Public, dapat digunakan dimana saja, bahkan di luar kelas
  - Protected, hanya dapat digunakan di dalam sebuah kelas beserta turunannya
  - Private, hanya dapat digunakan di dalam sebuah kelas tertentu saja

Kenapa?
- Hanya memperlihatkan aspek dari class yang dibutuhkan oleh client
- Menentukan kebutuhan yang jelas untuk object
- Memberikan kendali pada kode untuk menghindari 'bug'
    

###
Constant

"Sebuah identifier untuk menyimpan nilai, nilai-nya tidak dapat berubah"
Cara: define() atau const

Magic Constant -> Const yang sudah dibuatkan PHP
Contoh:
  __LINE__
  __FILE__
  __DIR__
  __FUNCTION__
  __CLASS__
  __TRAIT__
  __METHOD__
  __NAMESPACE__


###
Abstract Class
- Sebuah kelas yang tidak dapat di-instansiasi / buat objek
- Kelas 'abstrak'
- Mendefinisikan interface untuk kelas lain yang menjadi turunannya
- Berperan sebagai 'kerangka dasar' untuk kelas turunannya
- Memiliki minimal 1 method abstrak
- Digunakan dalam 'pewarisan' / inheritance untuk 'memaksakan' implementasi method abstrak yang sama untuk semua kelas turunannya

- Semua kelas turunan, harus mengimplementasikan method abstrak yang ada di kelas abstraknya
- Kelas abstrak boleh memiliki property / method reguler (public, private, protected)
- Kelas abstrak boleh memiliki property / static method

Kenapa menggunakan kelas abstrak?
- Merepresentasikan ide atau konsep dasar
- "Composition(Abstraksi/Interface) over Inheritance"
- Salah satu cara menerapkan Polimorphism
- Sentralisasi logic
- Mempermudah pengerjaan tim


###
Interface
  - Kelas abstrak yang sama sekali tidak memiliki implementasi
  - Murni merupakan template untuk kelas turunannya
  - Tidak boleh memiliki property, hanya deklarasi method saja
  - Semua methodnya harus dideklarasi dengan visibility public
  - Boleh mendeklarasikan __construct()
  - Satu kelas boleh mengimplementasikan banyak interface
  - Dengan menggunakan type-hinting dapat melakukan 'dependency injection'
  - Pada akhirnya akan mencapai polymorphism


###
Auto loading
  "memanggil class (file) tanpa harus menggunakan require"


###
Namespace
  "sebuah cara untuk mengelompokkan program ke dalam sebuah package tersendiri" / encapsulation

Penulisan:
namespace Vendor\Namespace\Subnamespace;
  

 -->