CREATE TABLE festa (
    idFesta integer NOT NULL AUTO_INCREMENT,
    nome varchar(50),
    endereco varchar(200),
    cidade varchar(50),
    dia date,
    PRIMARY KEY(idFesta)
);