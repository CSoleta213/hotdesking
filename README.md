# Desktiny Hotdesking App 2022

## Pages
- Homepage
- Features
- FAQs
- Demo
- User View
- Admin View
- Login / Sign up

## Installation
> Run the following commands on your terminal:

1. Clone the repository
   ```
    git clone https://github.com/CSoleta213/hotdesking.git
   ```
2. Install composer (if you dont have)
    ```
   composer install
   ```
3. Install the latest xampp (if you dont have)
    - if errors such as 'php is not recognized' arise

4. Rename .env.example to .env
    
5. Install the dependencies
   ```
   npm install
   ```
6. Start the project
   ```
   php artisan serve
   ```

## Migration from scratch (w/out db)
1. Open XAMPP and start Apache and Mysql
2. Open phpmyadmin: http://localhost/phpmyadmin
3. Press New from left side navigation
4. Enter database name as hotdesking
5. Then proceed to the #4 on Migrations with existing db

## Migration from scratch (w/out db)

1. Make migration file using this command:
   ```
   php artisan make:migration create_nameOfTable_table
   ```

    - Example:
   ```
   php artisan make:migration create_bookers_table
   ```
2. Open the migration file located in this path: Database\Migrations
   
3. Setup the columns of the table inside the public function up()
   ```
    public function up()
    {
        Schema::create('booker', function (Blueprint $table){
           $table->id();
           <!-- You can add your code here to setup the table columns -->
           $table->timestamps();
           <!-- Or here -->
        });
    }
   ```
4. Run the migration using this command:
   ```
   php artisan migrate
   ```
