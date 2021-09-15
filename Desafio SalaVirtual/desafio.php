<?php 

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


 /*
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