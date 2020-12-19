<?php
//class buah
class buah{
	//property
	var $nama;
	var $warna;
	
	function __construct (){
		echo "ini adalah buah apel <br/>";
	}	
		
	//method buah
	function nama_buah (){
		return "nama buah nya apel <br/>";
	}

}
//instanisasi class buah
$buah = new buah ();

//memanggil method nama_buah dari class buah
echo $buah->nama_buah ();


?>
