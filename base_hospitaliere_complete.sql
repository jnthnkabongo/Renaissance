
-- BASE DE DONNEES CENTRE HOSPITALIER (MySQL)

CREATE TABLE roles (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    description TEXT NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

CREATE TABLE users (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    role_id BIGINT UNSIGNED NOT NULL,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    email VARCHAR(255) UNIQUE,
    telephone VARCHAR(50),
    adresse TEXT,
    password VARCHAR(255) NOT NULL,
    photo VARCHAR(255),
    statut VARCHAR(50) DEFAULT 'actif',
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (role_id) REFERENCES roles(id)
);

CREATE TABLE patients (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    code_patient VARCHAR(50) UNIQUE NOT NULL,
    nom VARCHAR(100) NOT NULL,
    postnom VARCHAR(100),
    prenom VARCHAR(100),
    sexe ENUM('M','F') NOT NULL,
    date_naissance DATE,
    telephone VARCHAR(50),
    adresse TEXT,
    groupe_sanguin VARCHAR(10),
    etat_civil VARCHAR(50),
    personne_contact VARCHAR(255),
    telephone_urgence VARCHAR(50),
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

CREATE TABLE assurances (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    telephone VARCHAR(50),
    adresse TEXT
);

CREATE TABLE patient_assurances (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    patient_id BIGINT UNSIGNED NOT NULL,
    assurance_id BIGINT UNSIGNED NOT NULL,
    numero_police VARCHAR(100),
    date_expiration DATE,
    FOREIGN KEY (patient_id) REFERENCES patients(id),
    FOREIGN KEY (assurance_id) REFERENCES assurances(id)
);

CREATE TABLE medecins (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id BIGINT UNSIGNED NOT NULL,
    matricule VARCHAR(100) UNIQUE,
    specialite VARCHAR(255),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE infirmiers (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id BIGINT UNSIGNED NOT NULL,
    matricule VARCHAR(100) UNIQUE,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE rendezvous (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    patient_id BIGINT UNSIGNED NOT NULL,
    medecin_id BIGINT UNSIGNED NOT NULL,
    date_rdv DATE NOT NULL,
    heure_rdv TIME NOT NULL,
    motif TEXT,
    statut VARCHAR(50),
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (patient_id) REFERENCES patients(id),
    FOREIGN KEY (medecin_id) REFERENCES medecins(id)
);

CREATE TABLE dossiers_medicaux (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    patient_id BIGINT UNSIGNED NOT NULL,
    numero_dossier VARCHAR(100) UNIQUE,
    date_ouverture DATE,
    FOREIGN KEY (patient_id) REFERENCES patients(id)
);

CREATE TABLE consultations (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    patient_id BIGINT UNSIGNED NOT NULL,
    medecin_id BIGINT UNSIGNED NOT NULL,
    date_consultation DATETIME NOT NULL,
    motif TEXT,
    histoire_maladie TEXT,
    antecedents TEXT,
    diagnostic TEXT,
    traitement TEXT,
    observation TEXT,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (patient_id) REFERENCES patients(id),
    FOREIGN KEY (medecin_id) REFERENCES medecins(id)
);

CREATE TABLE signes_vitaux (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    consultation_id BIGINT UNSIGNED NOT NULL,
    temperature DECIMAL(4,1),
    poids DECIMAL(5,2),
    taille DECIMAL(5,2),
    tension_arterielle VARCHAR(20),
    frequence_cardiaque INT,
    saturation INT,
    FOREIGN KEY (consultation_id) REFERENCES consultations(id)
);

CREATE TABLE examens (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    consultation_id BIGINT UNSIGNED NOT NULL,
    patient_id BIGINT UNSIGNED NOT NULL,
    medecin_id BIGINT UNSIGNED NOT NULL,
    type_examen VARCHAR(255),
    resultat TEXT,
    observation TEXT,
    date_examen DATETIME,
    statut VARCHAR(50),
    FOREIGN KEY (consultation_id) REFERENCES consultations(id),
    FOREIGN KEY (patient_id) REFERENCES patients(id),
    FOREIGN KEY (medecin_id) REFERENCES medecins(id)
);

CREATE TABLE chambres (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    numero VARCHAR(50),
    capacite INT,
    type_chambre VARCHAR(100),
    statut VARCHAR(50)
);

CREATE TABLE lits (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    chambre_id BIGINT UNSIGNED NOT NULL,
    numero_lit VARCHAR(50),
    statut VARCHAR(50),
    FOREIGN KEY (chambre_id) REFERENCES chambres(id)
);

CREATE TABLE hospitalisations (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    patient_id BIGINT UNSIGNED NOT NULL,
    lit_id BIGINT UNSIGNED NOT NULL,
    medecin_id BIGINT UNSIGNED NOT NULL,
    date_entree DATETIME,
    date_sortie DATETIME NULL,
    motif TEXT,
    statut VARCHAR(50),
    FOREIGN KEY (patient_id) REFERENCES patients(id),
    FOREIGN KEY (lit_id) REFERENCES lits(id),
    FOREIGN KEY (medecin_id) REFERENCES medecins(id)
);

CREATE TABLE medicaments (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(100) UNIQUE,
    nom VARCHAR(255) NOT NULL,
    dosage VARCHAR(100),
    forme VARCHAR(100),
    prix_unitaire DECIMAL(12,2),
    stock INT DEFAULT 0,
    seuil_alerte INT DEFAULT 0,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

CREATE TABLE ordonnances (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    consultation_id BIGINT UNSIGNED NOT NULL,
    patient_id BIGINT UNSIGNED NOT NULL,
    medecin_id BIGINT UNSIGNED NOT NULL,
    date_ordonnance DATETIME,
    FOREIGN KEY (consultation_id) REFERENCES consultations(id),
    FOREIGN KEY (patient_id) REFERENCES patients(id),
    FOREIGN KEY (medecin_id) REFERENCES medecins(id)
);

CREATE TABLE ordonnance_details (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    ordonnance_id BIGINT UNSIGNED NOT NULL,
    medicament_id BIGINT UNSIGNED NOT NULL,
    quantite INT,
    posologie TEXT,
    duree VARCHAR(100),
    FOREIGN KEY (ordonnance_id) REFERENCES ordonnances(id),
    FOREIGN KEY (medicament_id) REFERENCES medicaments(id)
);

CREATE TABLE factures (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    patient_id BIGINT UNSIGNED NOT NULL,
    consultation_id BIGINT UNSIGNED NULL,
    numero_facture VARCHAR(100) UNIQUE,
    montant_total DECIMAL(12,2),
    montant_paye DECIMAL(12,2),
    reste DECIMAL(12,2),
    statut VARCHAR(50),
    date_facture DATETIME,
    FOREIGN KEY (patient_id) REFERENCES patients(id),
    FOREIGN KEY (consultation_id) REFERENCES consultations(id)
);

CREATE TABLE paiements (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    facture_id BIGINT UNSIGNED NOT NULL,
    montant DECIMAL(12,2),
    devise VARCHAR(10),
    mode_paiement VARCHAR(50),
    reference VARCHAR(255),
    date_paiement DATETIME,
    FOREIGN KEY (facture_id) REFERENCES factures(id)
);

CREATE TABLE caisses (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    devise VARCHAR(10),
    solde DECIMAL(12,2) DEFAULT 0
);

CREATE TABLE transactions (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    caisse_id BIGINT UNSIGNED NOT NULL,
    user_id BIGINT UNSIGNED NOT NULL,
    type VARCHAR(50),
    montant DECIMAL(12,2),
    motif TEXT,
    date_transaction DATETIME,
    FOREIGN KEY (caisse_id) REFERENCES caisses(id),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE fournisseurs (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255),
    telephone VARCHAR(50),
    adresse TEXT
);

CREATE TABLE approvisionnements (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fournisseur_id BIGINT UNSIGNED NOT NULL,
    date_approvisionnement DATETIME,
    montant_total DECIMAL(12,2),
    FOREIGN KEY (fournisseur_id) REFERENCES fournisseurs(id)
);

CREATE TABLE approvisionnement_details (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    approvisionnement_id BIGINT UNSIGNED NOT NULL,
    medicament_id BIGINT UNSIGNED NOT NULL,
    quantite INT,
    prix_achat DECIMAL(12,2),
    FOREIGN KEY (approvisionnement_id) REFERENCES approvisionnements(id),
    FOREIGN KEY (medicament_id) REFERENCES medicaments(id)
);
