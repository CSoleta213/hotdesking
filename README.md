# 🔥 Desktiny Hotdesking App 2022 🔥

## ⚓ Pages
- Login / Sign up
- Homepage
- Features
- FAQs
- Demo
- User View
- Admin View
1. Home
  - Countings of occupied desk and available desk everyday
2. List of users
  - Add/Remove as admin button
  - Add/Remove users
3. List of reservation

## ⚙️ Installation
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

7. Run migrations (#4 on existing db)

## 🔧 Migration from scratch (w/out db)
1. Open XAMPP and start Apache and Mysql
2. Open phpmyadmin: http://localhost/phpmyadmin
3. Press New from left side navigation
4. Enter database name as hotdesking
5. Open your env file and edit to DB_DATABASE=hotdesking
6. If 2022 migrations are present and available, then proceed to the #4 on Migrations with existing db, if not, proceed to #1.

## 🪛 Migration with existing db

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
   
## 🛫 Deploy with ngrok

1. Install Chocolatey
 - First, ensure that you are using an administrative shell - you can also install as a non-admin, check out Non-Administrative Installation.
 - Install with powershell.exe
     ```
     Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://community.chocolatey.org/install.ps1'))
     ```
 - Paste the copied text into your shell and press Enter.
 - Wait a few seconds for the command to complete.
 - If you don't see any errors, you are ready to use Chocolatey! Type choco or choco -?
 
2. Globally install ngrok to your terminal
    ```
    choco install ngrok
    ```

3. Start your Apache and MySQL from Xampp Control Panel.
4. Run:
    ```
    php artisan serve
    ```
5. Then:
    ```
    ngrok http 8000
    ```
PS. Make sure to keep xampp running while in deployment.
