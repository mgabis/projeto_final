
use mytiket;

CREATE TABLE `event_ballad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `local` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(60) NOT NULL,
  `number` int(11) NOT NULL,
  `neighborhood` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL,
  `start_time` int(11) NOT NULL,
  `final_hour` int(11) NOT NULL,
  `number_of_tickets` int(11) NOT NULL,
  `valor` varchar(45) NOT NULL,
  `type_of_tickets` varchar(15) NOT NULL,
  `avatar` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `e-mail` varchar(45) NOT NULL,
  `phone` int(11) NOT NULL,
  `message` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `person` (
  `id` int(11) NOT NULL AUTO_INCREMENT,event_ballad
  `name` varchar(60) NOT NULL,
  `cpf` int(11) NOT NULL,
  `rg` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_1` int(11) NOT NULL,
  `phone_2` int(11) NOT NULL,
  `address` varchar(60) NOT NULL,
  `number` int(11) NOT NULL,
  `neighborhood` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL,
  `password` varchar(12) NOT NULL,
  PRIMARY KEY (`id`,`phone_1`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

select* from event_ballad

