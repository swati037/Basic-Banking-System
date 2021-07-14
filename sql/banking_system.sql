CREATE TABLE clients(
    c_id int(3) PRIMARY KEY AUTO_INCREMENT,
    c_name varchar(20) NOT NULL,
    c_mail varchar(20) UNIQUE,
    c_balance int(10) NOT NULL
    );
    
INSERT INTO `clients`(`c_id`, `c_name`, `c_mail`, `c_balance`) VALUES 
	(1,'John','john@gmail.com',3000),
    (2,'Sana','sana@gmail.com',7000),
    (3,'Ben','ben@gmail.com',5000),
    (4,'Terry','terry@gmail.com',4500),
    (5,'Lisa','lisa@gmail.com',8000),
    (6,'Fred','fred@gmail.com',6000),
    (7,'Irene','irene@gmail.com',4000),
    (8,'Mark','yuta@gmail.com',4510),
    (9,'Kai','kai@gmail.com',3500),
    (10,'Yuna','yuna@gmail.com',2000)
    ;

CREATE TABLE transaction (
  sr_no int(3) PRIMARY KEY AUTO_INCREMENT,
  sender text NOT NULL,
  receiver text NOT NULL,
  balance int(10) NOT NULL,
  date_time datetime NOT NULL DEFAULT current_timestamp()
);


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

COMMIT