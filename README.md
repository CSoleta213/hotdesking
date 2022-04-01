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

## MIGRATION

1. Make migration file using this command:
   ```
   php artisan make:migration create_nameOfTable_table
   ```

    - Ex. php artisan make:migration create_bookers_table

2. Open the migration file located in this path: Database\Migrations
   
3. Setup the structure of the table inside the public function up()
   ```
    public function up()
    {
        Schema::create('booker', function (Blueprint $table){
           $table->id();
           <!-- You can add you code here to setup the table columns -->
           $table->timestamps();
           <!-- Or here-->
        });
    }
   ```
4. Run the migration using this command:
   ```
   php artisan migrate
   ```