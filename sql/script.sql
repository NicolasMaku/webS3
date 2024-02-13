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

CREATE TABLE the_salaire(
    id SMALLINT auto_increment primary key,
    id_ceuilleur SMALLINT,
    montant DOUBLE(16,2) default 0
);

CREATE OR REPLACE VIEW the_parcelle_variete as
SELECT p.*,v.nom from the_parcelle p join the_variete v on p.id_variete_the=v.id;

CREATE OR REPLACE VIEW the_ceuillette_fullInfo as
select * from (SELECT c.*,cr.nom from the_ceuillette c join the_ceuilleur cr on c.id_ceuilleur=cr.id) as wname join the_parcelle on wname.id_parcelle=the_parcelle.numero;

-- Utilisateurs
INSERT INTO the_user (username, email, password, admin) VALUES
    ('john_doe', 'john@example.com', 'password123', 1),
    ('jane_smith', 'jane@example.com', 'securepass', 0),
    ('admin_user', 'admin@example.com', 'adminpass', 1),
    ('alice_green', 'alice@example.com', 'green123', 0),
    ('bob_jones', 'bob@example.com', 'bobpass', 0),
    ('susan_white', 'susan@example.com', 'susanpass', 0),
    ('peter_black', 'peter@example.com', 'peterpass', 0),
    ('emily_brown', 'emily@example.com', 'emilypass', 0),
    ('michael_jackson', 'michael@example.com', 'mjpass', 0),
    ('olivia_smith', 'olivia@example.com', 'oliviapass', 0),
    ('chris_evans', 'chris@example.com', 'captainpass', 0),
    ('laura_williams', 'laura@example.com', 'laurapass', 0),
    ('kevin_miller', 'kevin@example.com', 'kevinpass', 0),
    ('grace_clark', 'grace@example.com', 'gracepass', 0),
    ('robert_taylor', 'robert@example.com', 'robertpass', 0),
    ('sophie_martin', 'sophie@example.com', 'sophiepass', 0),
    ('david_carter', 'david@example.com', 'davidpass', 0),
    ('linda_moore', 'linda@example.com', 'lindapass', 0),
    ('ryan_hall', 'ryan@example.com', 'ryanpass', 0),
    ('amy_adams', 'amy@example.com', 'amypass', 0);


-- Ceuilleurs
INSERT INTO the_ceuilleur (nom, genre, date_naissance) VALUES
   ('Jean Dupont', 'Homme', '1990-05-15'),
   ('Marie Martin', 'Femme', '1985-11-20'),
   ('Pierre Dubois', 'Homme', '1992-03-02'),
   ('Sophie Lambert', 'Femme', '1988-07-10'),
   ('Antoine Leroy', 'Homme', '1995-09-25'),
   ('Isabelle Lefevre', 'Femme', '1983-04-18'),
   ('Nicolas Renault', 'Homme', '1993-12-07'),
   ('Catherine Richard', 'Femme', '1987-01-30'),
   ('Paul Moreau', 'Homme', '1991-08-12'),
   ('Elise Girard', 'Femme', '1986-06-05'),
   ('Guillaume Bertrand', 'Homme', '1994-10-23'),
   ('Claire Dufour', 'Femme', '1989-02-14'),
   ('Vincent Gauthier', 'Homme', '1996-04-28'),
   ('Charlotte Leroux', 'Femme', '1984-09-08'),
   ('Maxime Simon', 'Homme', '1997-11-15'),
   ('Julie Leclerc', 'Femme', '1982-07-22'),
   ('Alexandre Lemoine', 'Homme', '1998-01-05'),
   ('Amandine Noel', 'Femme', '1981-03-30'),
   ('Thomas Faure', 'Homme', '1999-06-18'),
   ('Mathilde Rousseau', 'Femme', '1980-10-11');

-- Variétés de thé
INSERT INTO the_variete (nom, occupation, rendement_par_pied) VALUES
    ('Assam', 10.5, 25.8),
    ('Darjeeling', 8.7, 20.3),
    ('Earl Grey', 12.2, 30.5),
    ('Matcha', 9.8, 22.1),
    ('Oolong', 11.5, 28.6),
    ('Chai', 7.3, 18.9),
    ('Jasmine', 13.6, 33.2),
    ('Sencha', 10.2, 26.4),
    ('Pu-erh', 8.9, 21.7),
    ('White Peony', 12.8, 31.8),
    ('Dragon Well', 9.5, 23.6),
    ('Ceylon', 11.1, 27.3),
    ('Rooibos', 8.3, 20.9),
    ('Yerba Mate', 10.9, 29.1),
    ('Hojicha', 7.8, 19.4),
    ('Green Rooibos', 13.2, 32.7),
    ('Lapsang Souchong', 9.1, 24.8),
    ('Genmaicha', 11.7, 28.2),
    ('Chamomile', 8.5, 21.2),
    ('Hibiscus', 12.5, 30.1);

-- Parcelles
INSERT INTO the_parcelle (surface, id_variete_the) VALUES
   (15.5, 1),
   (20.2, 3),
   (18.7, 2),
   (22.1, 4),
   (17.3, 6),
   (25.8, 5),
   (19.4, 8),
   (21.7, 7),
   (16.9, 10),
   (23.6, 9),
   (20.5, 11),
   (24.3, 13),
   (18.2, 12),
   (22.8, 15),
   (17.1, 14),
   (26.4, 17),
   (19.8, 16),
   (21.2, 19),
   (24.9, 18),
   (16.5, 20);

-- Ceuillette
INSERT INTO the_ceuillette (date, id_ceuilleur, id_parcelle, poids_ceuilli) VALUES
    ('2024-01-05', 1, 1, 12.3),
    ('2024-02-10', 3, 2, 15.8),
    ('2024-03-15', 5, 3, 10.7),
    ('2024-04-20', 7, 4, 18.2),
    ('2024-05-25', 9, 5, 14.5),
    ('2024-06-30', 11, 6, 21.3),
    ('2024-07-05', 13, 7, 16.7),
    ('2024-08-10', 15, 8, 19.8),
    ('2024-09-15', 17, 9, 13.1),
    ('2024-10-20', 19, 10, 20.5),
    ('2024-11-25', 2, 11, 17.4),
    ('2024-12-30', 4, 12, 22.6),
    ('2025-01-05', 6, 13, 14.9),
    ('2025-02-10', 8, 14, 23.1),
    ('2025-03-15', 10, 15, 18.3),
    ('2025-04-20', 12, 16, 25.6),
    ('2025-05-25', 14, 17, 20.2),
    ('2025-06-30', 16, 18, 26.9),
    ('2025-07-05', 18, 19, 22.4),
    ('2025-08-10', 20, 20, 16.8);

-- categorie depense
INSERT INTO the_categorie_depense (nom) VALUES
    ('Semences'),
    ('Engrais'),
    ('Pesticides'),
    ('Irrigation'),
    ('Entretien du matériel'),
    ('Frais de récolte'),
    ('Frais de transport'),
    ('Salaires'),
    ('Charges sociales'),
    ('Assurances'),
    ('Frais administratifs'),
    ('Location de matériel'),
    ('Energie'),
    ('Amortissements'),
    ('Formation'),
    ('Autres'),
    ('Publicité'),
    ('Frais juridiques'),
    ('Recherche et Développement'),
    ('Marketing');

-- Depense
INSERT INTO the_depense (date, id_categorie, montant) VALUES
      ('2024-01-10', 1, 200.5),
      ('2024-02-15', 2, 150.2),
      ('2024-03-20', 3, 300.8),
      ('2024-04-25', 4, 180.3),
      ('2024-05-30', 5, 250.7),
      ('2024-06-05', 6, 120.6),
      ('2024-07-10', 7, 180.5),
      ('2024-08-15', 8, 500.2),
      ('2024-09-20', 9, 250.8),
      ('2024-10-25', 10, 300.3),
      ('2024-11-30', 11, 120.7),
      ('2024-12-05', 12, 180.6),
      ('2025-01-10', 13, 220.5),
      ('2025-02-15', 14, 350.2),
      ('2025-03-20', 15, 180.8),
      ('2025-04-25', 16, 400.3),
      ('2025-05-30', 17, 150.7),
      ('2025-06-05', 18, 280.6),
      ('2025-07-10', 19, 220.5),
      ('2025-08-15', 20, 180.2);

-- salaire
INSERT INTO the_salaire (id_ceuilleur, montant) VALUES
    (1, 1200.5),
    (3, 1500.2),
    (5, 1100.8),
    (7, 1800.3),
    (9, 1350.7),
    (11, 1600.6),
    (13, 2000.5),
    (15, 1750.2),
    (17, 1900.8),
    (19, 1400.3),
    (2, 1300.7),
    (4, 1650.6),
    (6, 1200.5),
    (8, 1550.2),
    (10, 1800.8),
    (12, 1450.3),
    (14, 1700.7),
    (16, 1950.6),
    (18, 1250.5),
    (20, 1500.2);