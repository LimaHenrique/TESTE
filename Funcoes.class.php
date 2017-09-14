<?php
//BUSCANDO A CLASSE
require_once 'PHPMailer-master/PHPMailerAutoload.php';
//INICIANDO A CLASSE
class Funcoes{
	//ATRIBUTOS
	private $objmail;
	//CONTRUTOR
	public function __construct(){
		$this->objmail = new PHPMailer();		
	}
	//METODO RESPONWSAVEL POR TRATAR OS CARACTERES DOS DADOS
	public function tratarCaracter($vlr, $tipo){
		switch($tipo){
			case 1: $rst = utf8_decode($vlr); break;
			case 2: $rst = htmlentities($vlr, ENT_QUOTES, "ISO-8859-1"); break; 
		}
		return $rst;
	}
	//RESPONSAVEL POR ENVIAR O E-MAIL
	public function enviarEmail($dados){

		$this->objmail->IsSMTP();
		$this->objmail->SMTPAuth = true;
		$this->objmail->SMTPSecure = 'tls';
		$this->objmail->Port = 587;
		$this->objmail->Host = 'smtpt.solucaocredito.com.br';
		$this->objmail->Username = 'teste@solucaocredito.com.br';
		$this->objmail->Password = '123456';
		$this->objmail->ContentType = 'text/html; charset=utf-8';
		$this->objmail->SetFrom('Contato@solucaocredito.com.br', 'Contato-Emprego');
		$this->objmail->AddAddress('henrique@solucaocredito.com.br', 'Teste de envio de e-mail');
		$this->objmail->Subject = 'Trabalhe Conosco';
		
		$html = '<p><strong>Nome:</strong> '.$this->tratarCaracter($dados['nome'], 1).'<br>';
		$html .= '<strong>Idade:</strong> '.$this->tratarCaracter($dados['Idade'], 1).'<br>';
		$html .= '<strong>Área de Interesse de Atuação:</strong> '.$this->tratarCaracter($dados['Área de Interesse de Atuação'], 1).'<br>';
		$html .= '<strong>Sexo:</strong><br>'.$this->tratarCaracter($dados['Sexo'], 1).'<br>';
		$html = ' <strong>Estado Civil:</strong> '.$this->tratarCaracter($dados['Estado Civil'], 1).'<br>';
		$html .= '<strong>E-mail:</strong> '.$dados['email'].'<br>';
		$html .= '<strong>Pretensão de Salário:</strong> '.$this->tratarCaracter($dados['Pretensão de Salário'], 1).'<br>';
		$html .= '<strong>Fumante:</strong><br>'.$this->tratarCaracter($dados['Fumante'], 1).'<br>';
		$html = ' <strong>Endereço Completo:</strong> '.$this->tratarCaracter($dados['Endereço Completo'], 1).'<br>';
		$html .= '<strong>Telefone Celular:</strong> '.$this->tratarCaracter($dados['Telefone Celular'], 1).'<br>';
		$html .= '<strong>Telefone Residencial:</strong> '.$this->tratarCaracter($dados['Telefone Residencial'], 1).'<br>';
		$html .= '<strong>Formação:</strong><br>'.$this->tratarCaracter($dados['Formação'], 1).'<br>';
		$html = ' <strong>Conhecimentos em Informatica:</strong> '.$this->tratarCaracter($dados['Conhecimentos em Informatica'], 1).'<br>';
		$html .= '<strong>Experiências Profissionais:</strong> '.$this->tratarCaracter($dados['Experiências Profissionais'], 1).'<br>';
		$html .= '<strong>Características Pessoais:</strong> '.$this->tratarCaracter($dados['Características Pessoais'], 1).'<br>';
		$html .= '<strong>Características Profissionais:</strong><br>'.$this->tratarCaracter($dados['Características Profissionais'], 1).'<br>';
		
		$this->objmail->MsgHTML($html);
		
		if (!$this->objmail->Send()) {
			echo "Mailer Error: " . $this->objmail->ErrorInfo;
		} else {
			echo "Mensagem enviada";
		}

	}
}

?>
