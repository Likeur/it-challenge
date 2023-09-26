# LE BASE DE DONNÉES

 *  CREATE DATABASE itChallenge
    DEFAULT CHARACTER SET = 'utf8mb4';

## LES TABLES

 *  CREATE TABLE candidate(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    group_name VARCHAR(200) NOT NULL,
    first_member VARCHAR(200) NOT NULL,
    first_register VARCHAR(11) NOT NULL,
    first_email VARCHAR(100) NOT NULL,
    first_tel VARCHAR(20) NOT NULL,
    first_bac VARCHAR(20) NOT NULL,
    first_filiere VARCHAR(10) NOT NULL,
    second_member VARCHAR(200) NOT NULL,
    second_register VARCHAR(11) NOT NULL,
    second_email VARCHAR(100) NOT NULL,
    second_tel VARCHAR(20) NOT NULL,
    second_bac VARCHAR(20) NOT NULL,
    second_filiere VARCHAR(10) NOT NULL,
    third_member VARCHAR(200) NOT NULL,
    third_register VARCHAR(11) NOT NULL,
    third_email VARCHAR(100) NOT NULL,
    third_tel VARCHAR(20) NOT NULL,
    third_bac VARCHAR(20) NOT NULL,
    third_filiere VARCHAR(10) NOT NULL,
    topic TEXT NOT NULL,
    theme VARCHAR(200) NOT NULL
);