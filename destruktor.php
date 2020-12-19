<?php
//class buah 
class buah {
      //property
     var $nama;
     var $warna;

//method construct di jalankan pertama kali
 function __construct ( ){
          echo " ini adalah isi method construct <br/>";
     }

//method destruct di jalankan terakhir 
 function __destruct ( ){
         echo " ini adalah isi method destruct <br/>";
     }

//method buah
function nama_buah ( ){
        return "nama buah nya apel <br/>";
     }

}
//instansiasi class buah 
$buah = New buah ( );

//memanggil method nama_buah dari class buah 
echo $buah->nama_buah ( );

?>
