# How to install it?
Just clone with git clone
Configure your mysql database in Database.php

# Configuration of the database
Create a database named products_crud (or whatever name you want)
Execute this sql command:
CREATE TABLE `products_crud`.`products` ( `id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(250) NOT NULL , `description` VARCHAR(3000) NULL , `image` VARCHAR(100) NULL , `price` DECIMAL NOT NULL , `create_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB; 

# How to run it?
cd to public/
run php -S localhost:8080
go to localhost:8080
