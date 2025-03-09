CREATE DATABASE boutondor;
USE boutondor;

-- Table Client
CREATE TABLE Client (
    Id_Client INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(50) UNIQUE NOT NULL,
    motdepasse VARCHAR(250) NOT NULL, -- Stocker le hash du mot de passe
    telephone VARCHAR(15),
    datenaissance DATE NOT NULL CHECK (datenaissance < CURDATE())
);

-- Table Type_adresse
CREATE TABLE Type_adresse (
   Id_Type_adresse INT AUTO_INCREMENT PRIMARY KEY,
   nom VARCHAR(50) UNIQUE
);

-- Table Adresse
CREATE TABLE Adresse (
   Id_Adresse INT AUTO_INCREMENT PRIMARY KEY,
   rue VARCHAR(100),
   code_postal INT,
   ville VARCHAR(50),
   pays VARCHAR(50),
   type_adresse INT, -- Référence à la table Type_adresse
   FOREIGN KEY (type_adresse) REFERENCES Type_adresse(Id_Type_adresse)
);

-- Table Categorie
CREATE TABLE Categorie (
   Id_Categorie INT AUTO_INCREMENT PRIMARY KEY,
   nom VARCHAR(50),
   description TEXT
);

CREATE TABLE Produit (
    Id_Produit INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL UNIQUE,
    description TEXT,
    prixunitaire DECIMAL(10, 2) NOT NULL CHECK (prixunitaire > 0),
    qte_en_stock INT NOT NULL CHECK (qte_en_stock >= 0),
    image TEXT,
    attribut VARCHAR(50),
    Id_Categorie INT,
    FOREIGN KEY (Id_Categorie) REFERENCES Categorie(Id_Categorie)
);

-- Table Avis
CREATE TABLE Avis (
   Id_Avis INT AUTO_INCREMENT PRIMARY KEY,
   note DECIMAL(3, 2), -- Note sur 5
   commentaire TEXT,
   date_avis DATE,
   id_produit INT,
   id_client INT,
   FOREIGN KEY (id_produit) REFERENCES Produit(Id_Produit),
   FOREIGN KEY (id_client) REFERENCES Client(Id_Client)
);

-- Table Ligne de commande
CREATE TABLE Ligne_commande (
   Id_Ligne_commande INT AUTO_INCREMENT PRIMARY KEY,
   quantité INT,
   prix_unitaire DECIMAL(10, 2),
   prix_total DECIMAL(10, 2),
   id_produit INT,
   id_commande INT,
   FOREIGN KEY (id_produit) REFERENCES Produit(Id_Produit),
   FOREIGN KEY (id_commande) REFERENCES Commande(Id_Commande)
);

-- Table Paiement
CREATE TABLE Paiement (
    Id_Paiement INT AUTO_INCREMENT PRIMARY KEY,
    date_paiement DATETIME NOT NULL,
    montant DECIMAL(10, 2) NOT NULL CHECK (montant > 0),
    mode_paiement ENUM('CB', 'Virement', 'Paypal') NOT NULL,
    etat_paiement ENUM('En cours', 'Payé', 'Annulé') NOT NULL DEFAULT 'En cours'
);
CREATE TABLE Commande (
    Id_Commande INT AUTO_INCREMENT PRIMARY KEY,
    date_commande DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    montant_total DECIMAL(10, 2) NOT NULL CHECK (montant_total > 0),
    id_client INT NOT NULL,
    adresse_livraison INT,
    adresse_facturation INT,
    id_paiement INT,
    FOREIGN KEY (id_client) REFERENCES Client(Id_Client),
    FOREIGN KEY (adresse_livraison) REFERENCES Adresse(Id_Adresse),
    FOREIGN KEY (adresse_facturation) REFERENCES Adresse(Id_Adresse),
    FOREIGN KEY (id_paiement) REFERENCES Paiement(Id_Paiement)
);

-- Table Historique des commandes
CREATE TABLE Commande_historique (
   Id_Commande INT PRIMARY KEY,
   date_commande DATETIME, -- Utilisation de DATETIME
   montant_total DECIMAL(10, 2),
   etat ENUM('Livrée', 'Annulée', 'Remboursée'),
   adresse_livraison INT,
   adresse_facturation INT,
   FOREIGN KEY (Id_Commande) REFERENCES Commande(Id_Commande),
   FOREIGN KEY (adresse_livraison) REFERENCES Adresse(Id_Adresse),
   FOREIGN KEY (adresse_facturation) REFERENCES Adresse(Id_Adresse)
);

-- Table Code Promo
CREATE TABLE Code_promo (
   Id_Code_promo INT AUTO_INCREMENT PRIMARY KEY,
   code VARCHAR(50) UNIQUE, -- Contrainte d'unicité sur le code
   nombre_utilisations INT,
   valeur_reduction DECIMAL(10, 2),
   date_expiration DATE
);

-- Table Promotion
CREATE TABLE Promotion (
   Id_Promotion INT AUTO_INCREMENT PRIMARY KEY,
   nom VARCHAR(50),
   description TEXT,
   type_promotion ENUM('Pourcentage', 'Montant'),
   date_debut DATE,
   date_fin DATE,
   montant_reduction DECIMAL(10, 2),
   id_produit INT,
   id_code_promo INT,
   FOREIGN KEY (id_produit ) REFERENCES Produit(Id_Produit),
   FOREIGN KEY (id_code_promo) REFERENCES Code_promo(Id_Code_promo)
);

-- Table Abonnement
CREATE TABLE Abonnement (
   Id_Abonnement INT AUTO_INCREMENT PRIMARY KEY,
   email VARCHAR(50),
   date_inscription DATE
);

-- Table Newsletter
CREATE TABLE Newsletter (
   Id_Newsletter INT AUTO_INCREMENT PRIMARY KEY,
   sujet VARCHAR(50),
   contenu TEXT,
   date_envoi DATE
);