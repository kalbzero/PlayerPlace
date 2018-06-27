CREATE TABLE `places` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  `name` VARCHAR( 60 ) NOT NULL ,
  `address` VARCHAR( 80 ) NOT NULL ,
  `lat` FLOAT( 10, 6 ) NOT NULL ,
  `lng` FLOAT( 10, 6 ) NOT NULL ,
  `type` VARCHAR( 30 ) NOT NULL ,
  `hours` VARCHAR( 199 ) NOT NULL ,
) ENGINE = MYISAM ;

INSERT INTO `places` (`id`, `name`, `address`, `lat`, `lng`, `type`,`hours`) VALUES 
('1', 'Canoas Shopping', 'Av. Guilherme Schell, 6750 - Centro, Canoas - RS, 92310-564', '-29.9116654','-51.1845775', 'Shopping Center','Segunda 20h00, Terca 19h00, Quarta 19h00, Quinta 19h30, Sexta 18h30, Sabado 15h00'),
('2', 'ParkShoping Canoas', 'Avenida Farroupilha, 4545 - Mal. Rondon, Canoas - RS, 92020-475', '-29.9147715','-51.1694713', 'Shopping Center','Segunda 20h00, Terca 19h00, Quarta 19h00, Quinta 19h30, Sexta 18h30, Sabado 15h00'),
('3', 'Expansao Capao do Corvo', 'Avenida Farroupilha, 4545 - Mal. Rondon, Canoas - RS, 92020-475', '-29.9138229','-51.1731191', 'Parque','Segunda 20h00, Terca 19h00, Quarta 19h00, Quinta 19h30, Sexta 18h30, Sabado 15h00');