CREATE DATABASE bk_apple_db;
USE bk_apple_db;

CREATE TABLE `Users` (
    `userId`    INT AUTO_INCREMENT UNIQUE NOT NULL,
    `userName`  VARCHAR(255) NOT NULL,
    `email`     VARCHAR(255) UNIQUE,
    `password`  VARCHAR(255),
    `type`      BIT DEFAULT 0,
    `state`     BIT DEFAULT 1,
    PRIMARY KEY(`userId`)
);

CREATE TABLE `Products` (
    `productId` INT AUTO_INCREMENT UNIQUE NOT NULL,
    `name`      VARCHAR(255) NOT NULL,
    `price`     DECIMAL(10,0),
    `des`       TEXT,
    `type`      INT,
    `url1`      VARCHAR(500),
    `url2`      VARCHAR(500),
    `url3`      VARCHAR(500),
    `url4`      VARCHAR(500),
    `rate`      FLOAT DEFAULT 0,
    `rateQuantity`  INT DEFAULT 0,
    PRIMARY KEY(`productId`)
);

CREATE TABLE `Message` (
    `messageId` INT AUTO_INCREMENT UNIQUE NOT NULL,
    `userId`    INT,
    `time`      DATETIME DEFAULT CURRENT_TIMESTAMP,
    `content`   TEXT,
    PRIMARY KEY(`messageId`),
    FOREIGN KEY(`userId`) REFERENCES Users(`userId`) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE `Comment` (
    `cmtId`     INT AUTO_INCREMENT UNIQUE NOT NULL,
    `userId`    INT,
    `productId` INT,
    `content`   TEXT,
    `time`   DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(`cmtId`),
    FOREIGN KEY(`userId`) REFERENCES Users(`userId`) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY(`productId`) REFERENCES Products(`productId`) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE `Cart` (
    `cartId`    VARCHAR(255),
    `userId`    INT,
    `time`      DATETIME DEFAULT CURRENT_TIMESTAMP,
    `totalPrice` DECIMAL(10,0),
    PRIMARY KEY(`cartId`),
    FOREIGN KEY(`userId`) REFERENCES Users(`userId`) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE `ItemCart` (
    `itemId`    INT AUTO_INCREMENT UNIQUE NOT NULL,
    `name`      VARCHAR(255) NOT NULL,
    `price`     DECIMAL(10, 0),
    `cartId`    VARCHAR(255),
    `quantity`  INT,
    PRIMARY KEY(`itemId`),
    FOREIGN KEY(`cartId`) REFERENCES Cart(`cartId`) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE VIEW CommentView AS
SELECT `cmtId`, `content`, `time`,`userName`, `productId`, `type`
FROM `Comment`, `Users`
WHERE Users.userId = Comment.userId;

CREATE VIEW MessageView AS
SELECT `messageId`, `userName`, `time`, `content`
FROM `Message`, `Users`
WHERE Message.userId = Users.userId;

CREATE VIEW CartView AS
SELECT `userName`, `totalPrice`, `time`
FROM `Cart`, `Users`
WHERE Cart.userId = Users.userId;