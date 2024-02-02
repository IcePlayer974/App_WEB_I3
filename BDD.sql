CREATE TABLE jours_festival (
    id INT AUTO_INCREMENT PRIMARY KEY,
    jour VARCHAR(10),
    capacite INT
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE autentification(
    id INT AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(64),
    nom VARCHAR(64),
    prenom VARCHAR(64),
    mot_de_passe VARCHAR(64)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE reservations (
    id_reservation INT AUTO_INCREMENT PRIMARY KEY,
    nom_reservation VARCHAR(64),
    type_pass VARCHAR(64),
    jour VARCHAR(255),
    quantite INT,
    commentaire TEXT
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE reservation_utilisateur (
    id_reservation INT,
    id_utilisateur INT,
    PRIMARY KEY (id_reservation, id_utilisateur)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

//foreign a la main

INSERT INTO jours_festival (jour, capacite) VALUES
    ('Vendredi', 10000),
    ('Samedi', 18000),
    ('Dimanche', 25000);
