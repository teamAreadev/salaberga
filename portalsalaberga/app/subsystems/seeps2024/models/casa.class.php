<?php
Class Pessoa {
	var $nome, $idade;

	function __construct($nome, $idade) { 
		$this->nome = $nome;
		$this->idade = $idade;
	} 

	public function impress(){
		echo $this->nome;
		echo $this->idade;
	}


}

$obj = new Pessoa("Pedro",29);
$obj->impress();

?>
