<?php

// class parent
class buah{

	// property class buah
	public $buah_apel;
	
	// method pada class buah
	function berinama($apel) {
		$this->buah_apel=$apel;
	}
	
}

// class turunan atau sub class dari class buah
// kita menghubungkan class dengan syntax extends
class buah lain extends buah {

	// property class buah_lain
	public $nama_buah_lain;
	
	// method pada class buah_lain
	function berinamabuahlain ($jeruk) {
		$this->nama_buah_lain=$jeruk;
	}
}

// instansiasi class buah lain
$buahbaru = new buah lain;

// method beri nama adalah method pada class buah
$buahbaru->berinamabuah(" apel ");
$buahbaru->berinamabuahlain(" jeruk ");

//menampilkan isi property
echo "buah apel : " . $buahbaru->nama_buah . "<br/>";
echo "buah jeruk :" . $buahbaru->nama_buah_lain;

?>
