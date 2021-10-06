CREATE TABLE `aluno` (
  `alunoID` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `idade` int(3) NOT NULL,
  `curso` varchar(55) NOT NULL,
  `cpf` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `aluno` (`alunoID`, `nome`, `idade`, `curso`, `cpf`) VALUES
(1, 'Teste', '00','Teste','000000');

ALTER TABLE `aluno`
  ADD PRIMARY KEY (`alunoID`);

ALTER TABLE `aluno`
  MODIFY `alunoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
