 drop database if exists clownSolo;

create database clownSolo;

SET DEFAULT_STORAGE_ENGINE=INNODB;
 SET FOREIGN_KEY_CHECKS = 1;
 set sql_safe_updates =0;
use clownSolo;



 #Table comédiens
 create table comedien(
id int PRIMARY KEY AUTO_INCREMENT  NOT NULL unique,
pseudo VARCHAR(50) NOT NULL unique,
actif boolean not null default true,
sexeHomme boolean not null,
musicien boolean not null,
couleur varchar(8) not null,
pic varchar (50)
);



insert into comedien values ("0","bertille", "1", "0", "1","#9DC953", "bertille.jpg"),
("0","diva", "1", "0", "0","#EBC2E6", "diva.jpg"),
("0","frotti", "1", "1", "0","#A87438", "frotti.jpg"),
("0","gustina", "1", "0", "1","#9E5BC8", "gustina.jpg"),
("0","hopopop", "1", "1", "0","#6ACDCD", "hopopop.jpg"),
("0","josiane", "1", "0", "1","#A44237", "josiane.jpg"),
("0","knup", "1", "1", "1","#37862D", "knup.jpg"),
("0","kristin", "1", "0", "1","#C6C95E", "kristin.jpg"),
("0","motsa", "1", "1", "0","#304491", "motsa.jpg"),
("0","patrick", "1", "1", "1","#C4804F", "patrick.jpg"),
("0","petunia", "1", "0", "0","#6ECF86", "petunia.jpg"),
("0","pirgo", "1", "1", "0","#143D3C", "pirgo.jpg"),
("0","popiette", "1", "0", "1","#501B3B", "popiette.jpg"),
("0","pyrus", "1", "1", "0","#8C8E2F", "pyrus.jpg"),
("0","zoe", "1", "0", "1","#D79288", "zoe.jpg");



#Table interventions
create table intervention(
id int PRIMARY KEY AUTO_INCREMENT  NOT NULL unique,
dateHeure DATETIME NOT NULL DEFAULT now(),
id_comedien1 int not null,
CONSTRAINT FK_id_comedien1 FOREIGN KEY (id_comedien1) REFERENCES comedien(id),
id_comedien2 int not null,
CONSTRAINT FK_id_comedien2 FOREIGN KEY (id_comedien2) REFERENCES comedien(id)
);

insert into intervention values ("0", "2021/03/21", "1", "2");
INSERT INTO `intervention` (`dateHeure`,`id_comedien1`,`id_comedien2`)
VALUES
  ("2021/12/20",9,5),
  ("2022/03/25",8,3),
  ("2022/01/26",13,5),
  ("2021/07/20",5,3),
  ("2021/08/31",7,12),
  ("2021/07/24",14,7),

  ("2021/09/19",8,14),
  ("2022/02/14",7,11),
  ("2021/10/08",11,9);
INSERT INTO `intervention` (`dateHeure`,`id_comedien1`,`id_comedien2`)
VALUES
  ("2021/07/11",3,10),
  ("2021/06/19",5,12),
  ("2021/11/29",4,11),
  ("2021/06/01",2,14),
  ("2021/10/25",2,11),
  ("2022/02/13",2,8),
  ("2021/12/09",4,3),
  ("2021/05/19",9,1),
  ("2022/01/06",9,12),
  ("2022/04/14",10,14);
INSERT INTO `intervention` (`dateHeure`,`id_comedien1`,`id_comedien2`)
VALUES
  ("2021/05/27",14,1),
  ("2022/02/04",4,14),
  ("2021/08/15",2,3),
  ("2021/07/13",14,6),
  ("2022/04/26",7,15),
  ("2022/01/30",1,14),
  ("2021/07/18",13,14),
  ("2021/11/30",12,13),
  ("2022/01/26",3,15),
  ("2022/03/09",8,5);
INSERT INTO `intervention` (`dateHeure`,`id_comedien1`,`id_comedien2`)
VALUES
  ("2021/09/12",12,14),

  ("2021/10/02",11,12),
  ("2022/01/29",7,3),
  ("2022/03/09",8,2),
  ("2021/10/06",7,4),
  ("2021/04/26",14,3),
  ("2021/10/01",9,2),
  ("2021/07/27",5,6),
  ("2021/12/02",9,15);
INSERT INTO `intervention` (`dateHeure`,`id_comedien1`,`id_comedien2`)
VALUES
  ("2021/11/21",5,11),

  ("2021/08/25",11,14),
  ("2021/06/28",2,12),
  ("2022/01/19",11,4),
  ("2021/11/29",5,2),
  ("2021/06/23",6,5),
  ("2021/12/01",8,4),
  ("2021/10/06",3,7),
  ("2021/06/29",11,13);


TRUNCATE TABLE intervention;