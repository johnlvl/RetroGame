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
    admin_id INT,
    PRIMARY KEY (id),
    FOREIGN KEY (admin_id) REFERENCES admin(id)
);

/*ARTICLE*/
CREATE TABLE IF NO EXISTS article 
( 
    id INT NOT NULL AUTO_INCREMENT, 
    name VARCHAR(100) NOT NULL, 
    platform VARCHAR(20) NOT NULL,
    date_add DATE,
    price FLOAT,
    admin_id INT,
    seller_id INT,
    PRIMARY KEY (id),
    FOREIGN KEY (admin_id) REFERENCES admin(id),
    FOREIGN KEY (seller_id) REFERENCES seller(id)
);

/*COMMAND*/
CREATE TABLE IF NO EXISTS command 
( 
    id INT NOT NULL AUTO_INCREMENT, 
    statut VARCHAR(20) NOT NULL,
    customer_id INT,
    PRIMARY KEY (id),
    FOREIGN KEY (customer_id) REFERENCES customer(id)
);

/*CUSTOMER*/
CREATE TABLE IF NO EXISTS customer 
( 
    id INT NOT NULL AUTO_INCREMENT, 
    first_name VARCHAR(20) NOT NULL, 
    last_name VARCHAR(20) NOT NULL,
    email TEXT NOT NULL,
    password TEXT NOT NULL,
    phone INT(10),
    adress TEXT NOT NULL, 
    PRIMARY KEY (id)
);

/*LAST COMMAND*/
CREATE TABLE IF NO EXISTS last_command
(
    id INT NOT NULL AUTO_INCREMENT, 
    name VARCHAR(20) NOT NULL, 
    date_command DATE, 
    customer_id INT,
    command_id INT,
    PRIMARY KEY (id),
    FOREIGN KEY (customer_id) REFERENCES customer(id),
    FOREIGN KEY (command_id) REFERENCES command(id)
);

/*MESSAGE ADMIN*/
CREATE TABLE IF NO EXISTS message_contact
(
    id INT NOT NULL AUTO_INCREMENT,
    email TEXT NOT NULL,
    message_type TEXT;
    message_send TEXT,
    PRIMARY KEY (id)
);