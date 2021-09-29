

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE `pessoa` (
  `pessoaID` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `pessoa` (`pessoaID`, `firstName`, `lastName`) VALUES
(1, 'Pessoa', 'TesteUm');

ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`pessoaID`);


ALTER TABLE `pessoa`
  MODIFY `pessoaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
