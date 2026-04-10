# CRUD web app

## description
A simple web app built using PHP and mySQL. The application allows the user to manage the customer's NAW data (name, address, city)

users can use this to 
-view every customer
-add customers
-edit customers
-delete customers

## installation / how to run

1. install XAMPP
2. place this project inside ''C:\xampp\htdocs\crud-app
3. start "Apache" and "mySQL" in XAMPP
4. press "admin" for MySQL to open "phpMyAdmin"
5. create a new database called: "crud_app"
6. Run this prompt in the "SQL" tab and press "Go"

    CREATE TABLE customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    address VARCHAR(255),
    city VARCHAR(100))

7. Open your preferred browser of choice and go to "http://localhost/crud-app"

## technologies used
-PHP
-MySQL
-Bootstrap/HTML
-Git & Github

## security
app uses prepared statements to prevent SQL injection

## features 
-CRUD functionality (Create, Read, Update, Delete)
-Reponsive design with Bootstrap
-Clean easy to use UI

--- 

Casper van Berkum
