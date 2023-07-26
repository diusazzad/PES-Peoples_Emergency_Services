
# PES - People's Emergency Services

An idea that can change your life and time.





## Documentation

[Documentation](https://linktodocumentation)

The idea is to a person's daily work will connected on the same application where person can use only one application with multiple feature's like helpdesk,community,task management, fitness,transaction,blog and many more.

## Features

- Cookie-based authentication for regular users:
- Token-based authentication for superadmin:
- JWT (JSON Web Token) for admin and editor roles:
- Api intregration
- web/android Features
- Responsive
- Cross platform
- Multiple Database with backup
- Role Based Authentication 
- Community Page
- Task Management
- Helpdesk
- 



## Lessons 

In summary, you will have three different authentication methods:
Backend
Cookie-based authentication for regular users. ✔️
custom Token-based authentication for the superadmin role.❌
JWT authentication for the admin and editor roles.❌
Frontend
Design Welcome page
Multi Role based Dashboard Same Template with role based Functionality ✔️


## Custom Commands
php artisan make:command Prime
 open the app/Console/Kernel.php file and add the following line inside the commands array:
 protected $commands = [
    \App\Console\Commands\Prime::class,
];
  Run the custom command  php artisan prime
