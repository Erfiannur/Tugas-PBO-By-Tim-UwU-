<?php
//class buah
class buah{
    //menentukan property dengan private
     private $nama = "apel";

    //method public
     public function nama_buah () {
     return "buah apel" .$this -> nama
   }

} 
//instansiasi class buah
$buah = new buah () ; 

//memanggil method public nama_buah dari class buah
echo $buah-> nama_buah ();

?>
