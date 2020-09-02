<?php
class komputer
{
	public $prosesor,
	 $memory;

	 public function getCetak(){
	 	return "$this->prosesor, $this->memory";
	 }

	public function __construct($prosesor, $memory = "12 Gb"){
		$this->prosesor = $prosesor;
		$this->memory = $memory;
	}
}

$komputerSaya = new komputer("core i7", "8 Gb");

echo $komputerSaya->getCetak();

?>