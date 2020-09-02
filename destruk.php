<?php

class laptop {
  
   private $pemilik = "ilham";
   private $merk = "Lenovo";
   
   public function __construct(){
     echo "Laptop ilham";
   }
  
   public function hidupkan_laptop(){
     return "Hidupkan Laptop $this->merk punya $this->pemilik";
  
   }
   public function __destruct(){
     echo "Jual laptop";
   }
}
  
$laptop_andi= new laptop();
  
echo "<br />";
echo $laptop_andi->hidupkan_laptop();
echo "<br />";
?>