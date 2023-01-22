CREATE table admin(
id int not null auto_increment primary key,
nom varchar(255),
prenom varchar(255),
email varchar(255),
password varchar(255)
);
CREATE table categories(
id int not null auto_increment primary key,
nom varchar(255)
);

CREATE table produits(
id int not null auto_increment primary key,
nom varchar(255),
categorie_id int,
FOREIGN KEY (categorie_id) REFERENCES categories(id),
description varchar(255),
quantite int,
prix_achat float,
prix_vente float,
photo longblob
);