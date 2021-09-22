<?php 

class SalaVirtual 
{ 
    private $nomemateria;
    private $nomeprofessor;
    private $horarioinicial;
    private $horariofinal;
    private $qtdalunos;
	 
	public function __construct( $nomemateria, $nomeprofessor, $horarioinicial, $horariofinal, $qtdalunos) 
	{ 
	    $this->nomemateria      = $nomemateria; 
	    $this->nomeprofessor  = $nomeprofessor; 
	    $this->horarioinicial = $horarioinicial; 
        $this->horariofinal = $horariofinal; 
        $this->qtdalunos = $qtdalunos; 
	} 
	 
	public function getNomedaMateria() 
	{ 
	    return $this->nomemateria; 
	} 

    public function getNomeProfessor() 
	{ 
	    return $this->nomeprofessor; 
	} 

    public function getHorarioInicial() 
	{ 
	    return $this->horarioinicial; 
	} 

    public function getHorarioFinal() 
	{ 
	    return $this->horariofinal; 
	} 
    public function getQtdAlunos() 
	{ 
	    return $this->qtdalunos; 
	} 
    
} 