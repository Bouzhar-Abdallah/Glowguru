CREATE table admin(
id int not null auto_increment primary key,
nom varchar(255),
prenom varchar(255),
email varchar(255),
password varchar(255)
);
CREATE table categories(
id int not null auto_increment primary key,
nom varchar(255),
description varchar(255)
);

CREATE table produits(
id int not null auto_increment primary key,
nom varchar(255),
categorie_id int,
FOREIGN KEY (categorie_id) REFERENCES categories(id) ON DELETE SET NULL,
description varchar(255),
quantite int,
prix_achat float,
prix_vente float
);

create TABLE photos(
id int not null auto_increment primary key,
id_produit int,
FOREIGN KEY (id_produit) REFERENCES produits (id) ON DELETE CASCADE,
photo_order int,
photo longblob
);


