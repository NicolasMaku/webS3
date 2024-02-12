CREATE TABLE the_user(
     id SMALLINT auto_increment primary key,
     username VARCHAR(50),
     email VARCHAR(50),
     password VARCHAR(50),
     admin smallint default 0
);

CREATE TABLE the_variete(
    id SMALLINT auto_increment primary key,
    nom VARCHAR(50),
    occupation DOUBLE(16,2),
    rendement_par_pied DOUBLE(16,2)
);
CREATE TABLE the_ceuilleur(
      id SMALLINT auto_increment primary key,
      nom VARCHAR(50),
      genre VARCHAR(20),
      date_naissance date
);

CREATE TABLE the_parcelle(
    numero SMALLINT auto_increment primary key,
    surface DOUBLE(16,2),
    id_variete_the SMALLINT,
    FOREIGN KEY (id_variete_the) REFERENCES the_variete(id)
);

CREATE TABLE the_ceuillette(
    id SMALLINT auto_increment primary key,
    date date,
    id_ceuilleur smallint,
    id_parcelle SMALLINT,
    poids_ceuilli DOUBLE(16,2),
    FOREIGN KEY (id_ceuilleur) REFERENCES the_ceuilleur(id),
    FOREIGN KEY (id_parcelle) REFERENCES the_parcelle(numero)
);

CREATE TABLE the_categorie_depense(
    id SMALLINT auto_increment primary key,
    nom VARCHAR(50)
);

CREATE TABLE the_depense(
    id SMALLINT auto_increment primary key,
    date date,
    id_categorie SMALLINT,
    montant DOUBLE(16,2),
    FOREIGN KEY (id_categorie) REFERENCES the_categorie_depense(id)
);

-- Utilisateurs
INSERT INTO the_user (username, email, password, admin) VALUES
    ('utilisateur1', 'utilisateur1@email.com', 'motdepasse1', 0),
    ('admin1', 'admin1@email.com', 'adminpassword', 1),
    ('utilisateur2', 'utilisateur2@email.com', 'motdepasse2', 0);


-- Ceuilleurs
    INSERT INTO the_ceuilleur (nom, genre, date_naissance) VALUES
    ('Ceuilleur1', 'Homme', '1990-01-15'),
    ('Ceuilleur2', 'Femme', '1985-05-20'),
    ('Ceuilleur3', 'Homme', '1995-08-10');

-- Variétés de thé
INSERT INTO the_variete (nom, occupation, rendement_par_pied) VALUES
  ('Variete1', 2.5, 0.75),
  ('Variete2', 3.0, 1.20),
  ('Variete3', 2.8, 1.10);

-- Parcelles
INSERT INTO the_parcelle (surface, id_variete_the) VALUES
   (10.5, 1),
   (8.0, 2),
   (12.3, 1);

-- Ceuillette
INSERT INTO the_ceuillette (date, id_ceuilleur, id_parcelle, poids_ceuilli) VALUES
    ('2024-02-12', 1, 1, 5.25),
    ('2024-02-13', 2, 2, 8.75),
    ('2024-02-14', 3, 1, 6.50);

-- categorie depense
INSERT INTO the_categorie_depense (nom) VALUES
    ('engrais'),
    ('Carburant'),
    ('Logistique');

-- Depense
INSERT INTO the_depense (date, id_categorie, montant) VALUES
  ('2024-02-12', 1, 50.00),
  ('2024-02-13', 2, 1200.00);