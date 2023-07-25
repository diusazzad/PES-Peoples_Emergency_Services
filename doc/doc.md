here's an outline of how you can achieve this:

Cookie-based Authentication for Users:

Use Laravel's built-in authentication (session-based authentication) for regular users. You can create a UserController to handle user registration, login, and logout using php artisan make:controller UserController.
Token-based Authentication for Superadmin:

For the 'superadmin' role, you can create a custom token-based authentication. When the 'superadmin' logs in, generate a unique token, save it in the database associated with the user, and return the token in the response. Subsequently, the user can use this token for authentication in API requests.
You can create a SuperadminController to handle 'superadmin' specific functionalities and token authentication.
JWT (JSON Web Tokens) for Admin and Editor:

For the 'admin' and 'editor' roles, you can use JWT (JSON Web Tokens) for token-based authentication. JWT is a standard for securely transmitting information between parties as a JSON object.
You can use the tymon/jwt-auth package for JWT authentication in Laravel. Install the package using composer require tymon/jwt-auth.
After setting up JWT, you can:

Create a custom guard for the 'admin' and 'editor' roles, and set the authentication driver to 'jwt' for these guards in config/auth.php.
Use the jwt.auth middleware to protect routes that require JWT authentication.
Here's a high-level summary of the steps:

Install the tymon/jwt-auth package and set up JWT authentication for 'admin' and 'editor' roles.
Create custom token-based authentication for the 'superadmin' role.
Use Laravel's built-in authentication for regular users (Cookie-based authentication).
Implement appropriate middleware to protect routes based on user roles.
Implement role-specific controllers to handle role-specific functionalities.
