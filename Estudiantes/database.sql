CREATE DATABASE campusV2;
USE campusV2;
CREATE TABLE campers(

    id INT primary key AUTO_INCREMENT,
    nombres VARCHAR(50) NOT NULL,
    direccion VARCHAR(50) NOT NULL,
    logros VARCHAR(60) NOT NULL,
    skills FLOAT(50) NOT NULL,
    review FLOAT(50) NOT NULL,
    ser FLOAT(50) NOT NULL, 
    ingles FLOAT(50) NOT NULL,
    especialidad VARCHAR(50) NOT NULL

);

CREATE TABLE user(

id INT PRIMARY KEY AUTO_INCREMENT,
idCamper INT NOT NULL,
email VARCHAR(100) NOT NULL,
username VARCHAR(80) NOT NULL,
password VARCHAR(100) NOT NULL,
Foreign Key (idCamper) REFERENCES campers (id)
);