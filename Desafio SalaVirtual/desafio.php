
<?php 
require_once 'Pessoa.php'; 
require_once 'SalaVirtual.php'; 

// criação dos objetos 
$p1 = new Pessoa('Maria', 16, 150, 70, 24353211122,19998382838);
$p2 = new Pessoa('José', 15, 160, 47, 12143221145,12396872862); 

$sala1 = new SalaVirtual('Desenvolvimento Web', 'Orlando', '19:00', '22:30', '19'); 
$sala2 = new SalaVirtual('Banco de Dados', 'Nilton', '19:00', '22:30', '20'); 


// associação 
$p1->setSalaVirtual( $sala1 );
$p2->setSalaVirtual( $sala2 );


print '_______________________'. "<br>\n";

print 'O nome da pessoa é ' . $p1->getNome() . "<br>\n"; 
print 'A altura é ' . $p1->getAltura() . "<br>\n"; 
print 'A idade é ' . $p1->getIdade() . "<br>\n"; 
print 'O peso é ' . $p1->getPeso() . "<br>\n";
print 'O CPF é ' . $p1->getCPF() . "<br>\n";
print 'O telefone é ' . $p1->getTelefone() . "<br>\n";


print 'A sala virtual da pessoa ' . $p1->getNome() . ' é ' . $p1->getSalaVirtual()->getNomedaMateria() . "<br>\n";

print '_______________________'. "<br>\n";


print '_______________________'. "<br>\n";

print 'O nome da pessoa é ' . $p2->getNome() . "<br>\n"; 
print 'A altura é ' . $p2->getAltura() . "<br>\n"; 
print 'A idade é ' . $p2->getIdade() . "<br>\n"; 
print 'O peso é ' . $p2->getPeso() . "<br>\n";
print 'O CPF é ' . $p2->getCPF() . "<br>\n";
print 'O telefone é ' . $p2->getTelefone() . "<br>\n";

print 'A sala virtual da pessoa ' . $p2->getNome() . ' é ' . $p2->getSalaVirtual()->getNomedaMateria() . "<br>\n";

print '_______________________'. "<br>\n";

/*
class Pessoa{
    public $nome;
    public $idade;
    public $altura;
    public $peso;
    public $cpf;
    public $telefone;

    function __construct($nome, $idade, $altura, $peso, $cpf, $telefone) 
    {
        $this->nome = $nome; 
        $this->idade = $idade;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
    }

	public function setNome($nome) 
	{ 
	    if (is_string($nome)) { 
	        $this->nome = $nome; 
	    } 
	} 
	 
	public function getNome() 
	{ 
	    return $this->nome; 
	} 
	 
	public function setIdade($idade) 
	{ 
	    if (is_numeric($idade) AND $idade > 0) { 
	        $this->idade = $idade; 
	    } 
	} 
	 
	public function getIdade() 
	{ 
	    return $this->idade; 
	} 

    public function setAltura($altura) 
	{ 
	    if (is_numeric($altura) AND $altura > 0) { 
	        $this->altura = $altura; 
	    } 
	} 
	 
	public function getAltura() 
	{ 
	    return $this->altura; 
	} 

    public function setPeso($peso) 
	{ 
	    if (is_numeric($peso) AND $peso > 0) { 
	        $this->peso = $peso; 
	    } 
	} 
	 
	public function getPeso() 
	{ 
	    return $this->peso; 
	} 

    public function setCPF($cpf) 
	{ 
	    if (is_numeric($cpf) AND $cpf > 0) { 
	        $this->cpf = $cpf; 
	    } 
	} 
	 
	public function getCPF() 
	{ 
	    return $this->cpf; 
	} 

    public function setTelefone($telefone) 
	{ 
	    if (is_numeric($telefone) AND $telefone > 0) { 
	        $this->telefone = $telefone; 
	    } 
	} 
	 
	public function getTelefone() 
	{ 
	    return $this->telefone; 
	} 


} 


class SalaVirtual 
{ 
    public $nomemateria;
    public $nomeprofessor;
    public $horarioinicial;
    public $horariofinal;
    public $qtdalunos;
	 
	public function setNomeMateria($nomemateria) 
	{ 
	    if (is_string($nomemateria)) { 
	        $this->nomemateria = $nomemateria; 
	    } 
	} 
	 
	public function getNomeMateria() 
	{ 
	    return $this->nomemateria; 
	} 

    public function setNomeProfessor($nomeprofessor) 
	{ 
	    if (is_string($nomeprofessor)) { 
	        $this->nomeprofessor = $nomeprofessor; 
	    } 
	} 
	 
	public function getNomeProfessor() 
	{ 
	    return $this->nomeprofessor; 
	} 



	public function setHorarioInicial($horarioinicial) 
	{ 
	    if (($horarioinicial) AND $horarioinicial > 0) { 
	        $this->horarioinicial = $horarioinicial; 
	    } 
	} 
	 
	public function getHorarioInicial() 
	{ 
	    return $this->horarioinicial; 
	} 

    public function setHorarioFinal($horariofinal) 
	{ 
	    if (($horariofinal) AND $horariofinal > 0) { 
	        $this->horariofinal = $horariofinal; 
	    } 
	} 
	 
	public function getHorarioFinal() 
	{ 
	    return $this->horariofinal; 
	} 

    public function setQtdAlunos($qtdalunos) 
	{ 
	    if (($qtdalunos) AND $qtdalunos > 0) { 
	        $this->qtdalunos = $qtdalunos; 
	    } 
	} 
	 
	public function getQtdAlunos() 
	{ 
	    return $this->qtdalunos; 
	} 


} 



// criação dos objetos 
$pessoa1 = new Pessoa('Maria, 15, 150, 60, 33322244411, 19998283848'); 
//$p1->setNome('Maria'); 
//$p1->setIdade(15); 
print 'Nome: '. $pessoa1->getNome() . '<br>'.PHP_EOL; 

$sala1 = new SalaVirtual('Desenvolvimento Web', '19:00', '22:30', '19'); 

// asociação 
$pessoa1->setSalaVirtual( $sala1 ); 


 /*
class Pessoa{
    public $nome;
    public $idade;
    public $altura;
    public $peso;
    public $cpf;
    public $telefone;

    function __construct($nome, $idade, $altura, $peso, $cpf, $telefone) 
    {
    echo "--------Pessoa-------- <br/> ".PHP_EOL ; 
    echo "Nome: ".$nome."<br/>"." Idade: ".$idade."<br/>"." Altura:".$altura."<br/>"." Peso:".$peso."<br/>"." CPF:".$cpf."<br/>"." Telefone:".$telefone."<br/>"."<br/>" .PHP_EOL;
    //var_dump($nome, $idade, $altura, $peso, $cpf, $telefone);
    }

}

class SalaVirtual{
    public $nomemateria;
    public $nomeprofessor;
    public $horarioinicial;
    public $horariofinal;
    public $qtdalunos;

    function __construct($nomemateria, $nomeprofessor, $horarioinicial, $horariofinal, $qtdalunos) 
    {
    echo "--------Sala Virtual-------- <br/> ".PHP_EOL ; 
    echo "Nome da materia: ".$nomemateria."<br/>"." Nome do professor: ".$nomeprofessor."<br/>"." Horario inicial:".$horarioinicial."<br/>"." Horario final:".$horariofinal."<br/>"." Quantidade de alunos:".$qtdalunos."<br/>"."<br/>" .PHP_EOL;
    //var_dump($nomemateria, $nomeprofessor, $horarioinicial, $horariofinal, $qtdalunos);

    }
}

    $s1=new SalaVirtual('Português', 'Juliana', '20:30', '22:30', '20');
    $s2=new SalaVirtual('Desenvolvimento Web', 'Orlando', '19:00', '22:30', '28');

    $p1=new Pessoa('José','30', '160', '75', '44522309844', '(19)99382738');
    $p2=new Pessoa('Lucas','24', '154', '65', '20329344566', '(23)999846372');
    $p3=new Pessoa('Amanda','22', '169', '56', '5647268833', '(13)283746573');
    $p4=new Pessoa('Carol','44', '158', '54', '13321324636', '(15)992830491');
    $p5=new Pessoa('Murilo','38', '179', '85', '10553857755', '(40)333458899');



$pessoa1 = new Pessoa;
$pessoa1->nome = "José";
$pessoa1->idade = 20;
$pessoa1->altura = 170;
$pessoa1->peso = 70;
$pessoa1->cpf = "09847333388";
$pessoa1->telefone = "199987762";

$pessoa2 = new Pessoa;
$pessoa2->nome = "Ricardo";
$pessoa2->idade = 25;
$pessoa2->altura = 160;
$pessoa2->peso = 80;
$pessoa2->cpf = "57384900933";
$pessoa2->telefone = "12999463738";


*/


?>