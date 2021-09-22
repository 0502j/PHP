<?php 

class Pessoa 
{ 
    private $nome;
    private $idade;
    private $altura;
    private $peso;
    private $cpf;
    private $telefone; 
    private $nomedamateria;
	 
	public function __construct( $nome, $idade, $altura,$peso, $cpf, $telefone ) 
	{ 
	    $this->nome   = $nome; 
	    $this->idade  = $idade; 
	    $this->altura = $altura; 
        $this->peso   = $peso; 
	    $this->cpf  = $cpf; 
	    $this->telefone = $telefone; 
        
	} 
	 
	public function getNome() 
	{ 
	    return $this->nome; 
	} 

    public function getIdade() 
	{ 
	    return $this->idade; 
	} 

    public function getAltura() 
	{ 
	    return $this->altura; 
	} 

    public function getPeso() 
	{ 
	    return $this->peso; 
	} 

    public function getCPF() 
	{ 
	    return $this->cpf; 
	} 

    public function getTelefone() 
	{ 
	    return $this->telefone; 
	} 


    public function setSalaVirtual( SalaVirtual  $sala) 
	{ 
	    $this->nomedamateria = $sala; 
	} 

    public function getSalaVirtual() 
	{ 
	    return $this->nomedamateria; 
	} 
    

   




} 