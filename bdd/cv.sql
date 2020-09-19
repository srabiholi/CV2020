CREATE DATABASE CV CHARACTER SET 'utf8';

CREATE TABLE t_experience
(
    exp_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    exp_poste VARCHAR(60) NOT NULL,
    exp_lieu VARCHAR(40) NOT NULL,
    exp_dateDebut YEAR NOT NULL,
    exp_dateFin YEAR NOT NULL,
    exp_tache TEXT NOT NULL
);

CREATE TABLE t_formation
(
    for_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    for_date YEAR NOT NULL,
    for_lieu VARCHAR(40) NOT NULL,
    for_intitule VARCHAR(80) NOT NULL
);