CREATE DATABASE IF NO EXISTS retrogame;

use retrogame;



/*ADMIN*/
CREATE TABLE IF NO EXISTS admin 
(   id INT NOT NULL AUTO_INCREMENT, 
    first_name VARCHAR(20) NOT NULL, 
    last_name VARCHAR(20) NOT NULL, 
    password TEXT NOT NULL, 
    PRIMARY KEY (id)
);


/*SELLER*/
CREATE TABLE IF NO EXISTS seller
(
    id INT NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(20) NOT NULL,
    last_name VARCHAR(20) NOT NULL,
    password TEXT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (admin) REFERENCES id(id)
);

/*ARTICLE*/
CREATE TABLE article 
( 
    id INT NOT NULL AUTO_INCREMENT, 
    name VARCHAR(100) NOT NULL, 
    platform VARCHAR(20) NOT NULL, 
    PRIMARY KEY (id),
    FOREIGN KEY (seller) REFERENCES id(id),
    FOREIGN KEY (prices) REFERENCES id(id)
);

/*PRICES*/
CREATE TABLE prices 
( 
    id INT NOT NULL AUTO_INCREMENT, 
    PRIMARY KEY (id)
);

/*COMMAND*/
CREATE TABLE command 
( 
    id INT NOT NULL AUTO_INCREMENT, 
    statut VARCHAR(20) NOT NULL, 
    PRIMARY KEY (id),
    FOREIGN KEY (customer) REFERENCES id(id),
    FOREIGN KEY (prices) REFERENCES id(id)
);

/*CUSTOMER*/
CREATE TABLE customer 
( 
    id INT NOT NULL AUTO_INCREMENT, 
    first_name VARCHAR(20) NOT NULL, 
    last_name VARCHAR(20) NOT NULL, 
    password TEXT NOT NULL, 
    adress TEXT NOT NULL, 
    PRIMARY KEY (id))