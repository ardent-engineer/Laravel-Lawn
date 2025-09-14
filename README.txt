# Greenkeeper App

Greenkeeper App is a web application developed by the Ardent Engineer team as part of a project for BESE 13-A. This application leverages the Laravel framework to provide a robust and scalable solution for managing orders with a focus on user authentication, email verification, and database management.

## Features
- **User Authentication**: Implements email verification using Laravel's `MustVerifyEmail` middleware.
- **Email Notifications**: Account creation emails are logged to `storage/logs/laravel.logs` for easy access.
- **Blade Templating**: Utilizes Blade directives (`@section`, `@foreach`, `@extends`) with a master layout (`components.layout`) to minimize redundancy.
- **Database Management**: Models are defined with appropriate fields, foreign keys, and constraints, manipulated via Laravel ORM.
- **CRUD Operations**: A resource controller (`OrderController`) handles Create, Read, Update, and Delete operations for orders.
- **Asset Management**: Uses the `@vite` directive for CSS inclusion.
- **Database Seeding**: Includes `DatabaseSeeder` and `OrderFactory` for testing purposes.
- **Navigation**: Features a login dashboard redirect and integrated logout functionality in the navbar.

## Installation

1. **Clone the Repository**
   ```bash
   git clone https://github.com/ardent-engineer/greenkeeper-app.git
   cd greenkeeper-app
   ```

2. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Configure Environment**
   - Copy the `.env.example` file to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update the `.env` file with your database connection details, username, password, and other relevant configurations.

4. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

5. **Run Migrations**
   ```bash
   php artisan migrate
   ```

6. **Seed the Database (Optional for Testing)**
   ```bash
   php artisan db:seed
   ```

7. **Compile Assets**
   ```bash
   npm run dev
   ```

8. **Start the Development Server**
   ```bash
   php artisan serve
   ```

## Usage
- **Email Verification**: Upon account creation, check the `storage/logs/laravel.logs` file for the verification email. Clear the log file if needed to resend the email.
- **Login/Logout**: Access the login dashboard after successful authentication. Use the logout option in the navbar to sign out.
- **Order Management**: Use the application to create, read, update, and delete orders via the `OrderController`.

## Notes
- Ensure the `.env` file is correctly configured before starting the application.
- The `MustVerifyEmail` middleware enforces email verification for secure access.
- Blade templates are structured to reduce redundancy, with `components.layout` serving as the master template.
- For testing, leverage the `OrderFactory` included in the `DatabaseSeeder`.

## Contributing
Contributions are welcome! Please submit a pull request or open an issue to discuss proposed changes.

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
