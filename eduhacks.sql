DROP DATABASE IF EXISTS eduhacks;
CREATE DATABASE IF NOT EXISTS eduhacks;
USE eduhacks;
CREATE TABLE IF NOT EXISTS users(
    iduser INT AUTO_INCREMENT,
    mail VARCHAR(40) UNIQUE,
    username VARCHAR(16) UNIQUE,
    passHash VARCHAR(60),
    userFirstName VARCHAR(60),
    userLastName VARCHAR(120),
    creationDate DATETIME,
    removeDate DATETIME,
    lastSignIn DATETIME,
    `active` TINYINT(1),
    `activationDate` DATETIME,
    `activationCode` CHAR(64),
    resetPassExpiry DATETIME,
    resetPassCode CHAR(64),
    PRIMARY KEY(iduser)
);
