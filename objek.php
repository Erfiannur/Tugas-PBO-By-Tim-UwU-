<?php
//PHP OOP Part 2 Pengertian Class, Object, Property dan Method
//class buah
class buah{
	//property
	var $nama;
	var $warna;
	
	//method buah
	function nama_buah (){
		return "nama buah nya apel <br/>"
	}	
		
	function warna_buah (){
		return "warna apel nya merah <br/>"
	}

}
//instansiasi class buah
$buah = new buah ();

//memanggil method nama_buah dari class buah
echo $buah->nama_buah ();

//memanggil method warna_buah dari class buah
echo $buah->warna_buah

?>