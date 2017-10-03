<?php
include 'src/service/PessoaService.php';
use src\service\PessoaService;
class pessoaController {
	public function __construct() {
		echo "construiu";
	}
	public function index() {
		echo $className. "<br/>";
		$servico = new PessoaService ();
		$pessoa = $servico->getPessoa ();
		echo '<script type="text/javascript">';
		echo 'var nome = "'.$pessoa->getNome ().'"';
		echo '</script>';
		include 'src/view/Layout.php';
	}
	public function nova() {
		echo "ola nova pessoa";
	}
}


