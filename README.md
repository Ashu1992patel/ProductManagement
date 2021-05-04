# Product Management Installation
- Clone the project into the local directory & navigate inside the project directory

- Run the bellow command for installing the dependencies:
composer install OR composer update

- Create a database 'productmanagement' (I'm expecting XAMPP/LAMP/MAMP is already installed)

- Migrate the database with seeded data by below command:
php artisan migrate:fresh seed 

- Serve the project, use below command:
php artisan serve

# Features Testing

- Almost all the features has been implemented If I missed something please let me know

- Features include as follows: 
- ####  Add products (image, title, rating, price, description), products list, 
- ####  Product Like, Softdelete, restore, trash, 
- ####  Search products by: category, rating, stock status, price range etc.
- ####  Side navigation will have menus, list (home) and trash
- ####  Side navigation will have menus, list (home) and trash

