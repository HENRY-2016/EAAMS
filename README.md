
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

        courses
            php artisan make:migration create_courses_table --create=courses_table
            php artisan make:model CoursesModel -m 
            php artisan make:controller CoursesController --resource 

        safety
            php artisan make:migration create_safety_table --create=safety_table
            php artisan make:model SafetyModel -m 
            php artisan make:controller SafetyController --resource 



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
Create Default Admin
====================
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