<?php
//class buah
class buah {
      //menentukan property dengan protected
      protected $nama = "apel";

     //method protected
      protected function nama (){
            return "buah apel" .$this->nama;
      }

     public function nama_buah (){
            return $this nama_buah;
      }


}

//instansiasi class buah
 $buah = new buah () ;

//memanggil method public nama_buah dari class buah
echo $buah->nama_buah ();

?>
