# How to install it?
<ul>
  <li>Just clone with git clone</li>
  <li>Configure your mysql database in Database.php</li>
</ul>

# Configuration of the database
<ul>
  <li>Create a database named products_crud (or whatever you want)</li>
  <li>
    Execute this sql command in phpmyadmin:
    <pre>
CREATE TABLE `products_crud`.`products` ( `id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(250) NOT NULL , `description` VARCHAR(3000) NULL , `image` VARCHAR(100) NULL , `price` DECIMAL NOT NULL , `create_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB; 
    </pre>
   </li>
</ul>


# How to run it?
<ul>
  <li>cd to public/</li>
  <li>
   Run in your CLI<pre>php -S localhost:8080</pre>
  </li>
  <li>Go to <em>localhost:8080</em> in your browser</li>
  <li>Do your CRUD product</li>
</ul>

