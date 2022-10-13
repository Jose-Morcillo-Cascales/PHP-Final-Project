DROP DATABASE IF EXISTS assembler_members;
CREATE DATABASE IF NOT EXISTS assembler_members;
USE assembler_members;



CREATE TABLE members(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(50) NOT NULL,
last_name VARCHAR(50),
email VARCHAR(50) UNIQUE,
gender ENUM ('M','F','O')  NOT NULL,
birth_date DATE  NOT NULL,
phone_number INT(9) NOT NULL,
assembler_role ENUM ('T','S')  NOT NULL
);

CREATE TABLE face_to_face_work(
id INT NOT NULL ,
city VARCHAR(50)  NOT NULL,
street_address VARCHAR (100)  NOT NULL,
from_date    DATE            NOT NULL,
to_date      DATE            NOT NULL,
 FOREIGN KEY (id) REFERENCES members(id),
 PRIMARY KEY (id)
);

CREATE TABLE remote_work(
id INT NOT NULL ,
city VARCHAR(50)  NOT NULL,
street_address VARCHAR (100)  NOT NULL,
from_date    DATE            NOT NULL,
to_date      DATE            NOT NULL,
 FOREIGN KEY (id) REFERENCES members(id),
 PRIMARY KEY (id)
);
-- Insert of data


INSERT INTO members (name, last_name, email, gender,birth_date, phone_number,assembler_role)
VALUES 
("Lidia", "Frias", "lidia@gmail.com", 'F',"1996/10/08", 738362767, "S"),
("Pau", "Civill", "paucivill@gmail.com", 'M',"1996/11/08", 818362767, "S"),
("Alejandro", "Herrero", "alejandroherrero@gmail.com", 'M',"1996/12/08", 668362767, "S"),
("Alejandro", "Balaguer", "bala@gmail.com", 'M',"1992/10/08", 654362767, "S"),
("Alvaro", "Alonso", "alvaro@gmail.com", 'M',"1996/10/18", 628362767, "S"),
("Bernat", "Pineda", "bernat@gmail.com", 'M',"1996/01/08", 738449167, "S"),
("Cristhian", "Medina", "medina@gmail.com", 'M',"1994/10/08", 738369999, "S"),
("David", "Moreno", "david@gmail.com", 'M',"1996/10/26", 739872357, "S"),
("Elisabet", "Ramos", "ramos@gmail.com", 'F',"1996/11/27", 818125767, "S"),
("Emily", "Herrera", "emily@gmail.com", 'F',"1996/02/08", 668444967, "S"),
("Ezequiel", "Zvirgzdiņš", "ezequiel@gmail.com", 'M',"2000/10/08", 698642767, "S"),
("Jaime", "Castell", "castell@gmail.com", 'M',"1996/04/28", 628362937, "S"),
("Jackson", "Zhou", "jackson@gmail.com", 'M',"1999/11/18", 735559167, "S"),
("Juan Carlos", "Manzanera", "manzanera@gmail.com", 'M',"1990/09/08", 238369999, "S"),
("Juan Francisco", "Solano", "jfsolano@gmail.com", 'M',"1991/11/08", 732589067, "S"),
("Pau", "Garcia", "pauGarcia@gmail.com", 'M',"1994/07/18", 738456799, "T"),
("Manu", "Sancho", "manuSancho@gmail.com", 'M',"1989/11/21", 739123457, "T");





INSERT INTO face_to_face_work (id, city,street_address,from_date,to_date)
VALUES
(2, "Rubi","calle sol 23","2022/06/27","2023/02/15"),
(4, "Barcelona","calle luna 07","2022/06/27","2023/02/15"),
(6, "Barcelona","calle azul 13","2022/06/27","2023/02/15"),
(7, "Barcelona","calle rojo 24","2022/06/27","2023/02/15"),
(11, "Barcelona","calle amarilla 25","2022/06/27","2023/02/15"),
(13, "Barcelona","calle lila 34","2022/06/27","2023/02/15"),
(14, "Barcelona","calle rojo 19","2022/06/27","2023/02/15"),
(16, "Barcelona","calle verde 24","2018/06/27",CURDATE());

SELECT * FROM remote_work;

INSERT INTO remote_work (id, city,street_address,from_date,to_date)
VALUES
(1, "Sevilla","calle tierra 13","2022/06/27","2023/02/15"),
(3, "Puerto de Santa Maria","calle saturno 83","2022/06/27","2023/02/15"),
(5, "Granada","calle mercurio 13","2022/06/27","2023/02/15"),
(8, "Asturias","calle navas 23","2022/06/27","2023/02/15"),
(9, "Tenerife","calle rojo 91","2022/06/27","2023/02/15"),
(10, "Zaragoza","calle tabla 63","2022/06/27","2023/02/15"),
(12, "Valencia","gran via 31","2022/06/27","2023/02/15"),
(15, "Malaga","calle violeta 91","2022/06/27","2023/02/15"),
(17, "Ibiza","calle patata 27","2020/09/27",CURDATE());