MYSQL Table Query can be found below. ShopLenses

PHP Project to post reviews of Sunglasses, Eyeglasses and Lenses.

This Project consists of working login, singup and logout feature using MYSQL Database.

After Login User can post reviews of various products which are stores in the database. Also they can view, update or delete exsisting reviews.

SQL Table Commands create database project; 

use project; 

CREATE TABLE login ( id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, username VARCHAR(50) NOT NULL UNIQUE, password VARCHAR(255) NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP ); 

CREATE TABLE review ( id INT AUTO_INCREMENT PRIMARY KEY, product_name TEXT, rating TEXT, comment TEXT, created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP); 

CREATE TABLE lens ( id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, name VARCHAR(50) NOT NULL UNIQUE ); 

CREATE TABLE product ( id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, name VARCHAR(50) NOT NULL UNIQUE ); 

INSERT INTO product (id, name) VALUES (1, 'Oakley-001');

Here you have to give id manually to each and every product in the database for you to dynamically post review of products.