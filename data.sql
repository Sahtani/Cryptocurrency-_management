-- database name : Cryptomonnaie

-- Table Utilisateur
CREATE TABLE Utilisateur (
    UserID INT AUTO_INCREMENT PRIMARY KEY,
    Nom VARCHAR(50),
    Prenom VARCHAR(50),
    DateNaissance DATE,
    NexusID VARCHAR(20),
    Email VARCHAR(100) UNIQUE,
    MotDePasse VARCHAR(255)
);

-- Table Cryptomonnaie
CREATE TABLE Cryptomonnaie (
    CryptoID INT AUTO_INCREMENT PRIMARY KEY,
    Nom VARCHAR(50),
    Symbole VARCHAR(10),
    Slug VARCHAR(50),
    Max_Supply DECIMAL(18, 2)
);

-- Table Watchlist
CREATE TABLE Watchlist (
    WatchlistID INT AUTO_INCREMENT PRIMARY KEY,
    UserID INT,
    CryptoID INT,
    FOREIGN KEY (UserID) REFERENCES Utilisateur(UserID),
    FOREIGN KEY (CryptoID) REFERENCES Cryptomonnaie(CryptoID)
);

-- Table Portefeuille
CREATE TABLE Portefeuille (
    PortfolioID INT AUTO_INCREMENT PRIMARY KEY,
    UserID INT,
    CryptoID INT,
    Quantite DECIMAL(18, 8),
    MontantInvesti DECIMAL(18, 2),
    DateAchatVente DATE,
    FOREIGN KEY (UserID) REFERENCES Utilisateur(UserID),
    FOREIGN KEY (CryptoID) REFERENCES Cryptomonnaie(CryptoID)
);

-- Table Notifications
CREATE TABLE Notifications (
    NotificationID INT AUTO_INCREMENT PRIMARY KEY,
    UserID INT,
    Message TEXT,
    DateNotification DATETIME,
    FOREIGN KEY (UserID) REFERENCES Utilisateur(UserID)
);

-- Trigger to set NexusID starting from 600
DELIMITER //
CREATE TRIGGER SetNexusID
BEFORE INSERT ON Utilisateur
FOR EACH ROW
BEGIN
    SET NEW.NexusID = CONCAT('Nexus', NEW.UserID + 599);
END;
//
DELIMITER ;
