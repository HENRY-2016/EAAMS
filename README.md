
| -----------------------------------------------------
| PROJECT NAME: 	Employee Appraisal And Assessment Management System 
|                   ( EAAMS ) 
| -----------------------------------------------------
| CLIENT NAME:		Sister Eddy 
| -----------------------------------------------------
| PROJECT TYPE: 	Student
| -----------------------------------------------------
| DATE: 	August 2023
| -----------------------------------------------------
| PROJECT LINK:    https://eaams.mogahenze.com
| Admin UserName :: Admin
| Admin Password :: Admin
| -----------------------------------------------------
| DEVELOPER:		MogaHenze
|                   +256 701 243 139  
|                   +256 771 977 854
| -----------------------------------------------------
| EMAIL:			henryatubuntu@gmail.com
| -----------------------------------------------------
| COPYRIGHT BY:		mogahenze.com
| -----------------------------------------------------
| WEBSITE:			https://mogahenze.com
| -----------------------------------------------------

=================
Frame Works Used
================
    Laravel 10
    Bootstrap 5
    Jquery
    CSS / HTML5
    Javascript
    MySql

==============
Project Set Up
==============
    
    1. Controllers
        php artisan make:controller UserAuthenticationController

    2. Tables Models Controller
        admin
            php artisan make:migration create_admin_table --create=admin_table
            php artisan make:model AdminModel -m 
            php artisan make:controller AdminController --resource
            
        employee
            php artisan make:migration create_employee_table --create=employee_table
            php artisan make:model EmployeeModel -m 
            php artisan make:controller EmployeeController --resource 

        Human Resource 
            php artisan make:migration create_humanresource_table --create=humanresource_table
            php artisan make:model HumanResourceModel -m 
            php artisan make:controller HumanResourceController --resource 

        tasks
            php artisan make:migration create_tasks_table --create=tasks_table
            php artisan make:model TasksModel -m 
            php artisan make:controller TasksController --resource 

        departments
            php artisan make:migration create_departments_table --create=departments_table
            php artisan make:model DepartmentsModel -m 
            php artisan make:controller DepartmentsController --resource 

        To add the new column
            php artisan make:migration add_new_column_to_tasks_table --table="tasks_table"
            
            


================
Important routes
================
    Migrate db tables:
        /migrate

    Clear route cache:
        /cache-clear

    Clear config cache:
        /config-cache

    Clear application cache:
        /clear-cache

    Clear view cache:
        /view-clear

    Clear route cache:
        /route-cache

    Clear config cache:
        /config-cache

====================
Installing The Project
====================
    Install xamp on local machine
    Extract the folder to htdocs in xamp
    Create Database in phpmyadmin named *** students_eaams ***
    modify the *** .evn file ***  with
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1 // default localhost
        DB_PORT=3306
        DB_DATABASE='your Data base name'
        DB_USERNAME='your data base username' // default root
        DB_PASSWORD='your data base password'
    Restart Xamp
        In Browser run /migrate


    In phpmyadmin in SQL run
        Select Admin table
            INSERT INTO `admin_table`(`id`, `FName`, `LName`, `Contact`, `UserName`, `PassWord`, `created_at`, `updated_at`) VALUES ('1','Admin','Admin','0000000','Admin','Admin','2023-08-31 02:37:33','2023-08-31 02:37:33')


=======
Git Hub
========
1 => git add .
2 => git commit -m 'Initial EAAMS Uploads'
3 => git branch -M main
4 => git push -u origin main