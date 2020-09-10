<?PHP

class mobil{
       public $nama, $merk, $warna, $kecepatanmaksimal, $jumlahpenumpang;
       
       public function tambahkecepatan(){
       	return"Kecepatan bertambah";
       }
}


class Angkot extends mobil
{
	public $turbo = false;
	
	public function aktifkanturbo()
	{
		$this->turbo=true;
		return "Turbo diaktifkan";
	}
}

$mobilku = new Angkot();
echo $mobilku->tambahkecepatan();
echo "<br>";
echo $mobilku->aktifkanturbo();

?>