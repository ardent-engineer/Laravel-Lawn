Group Members {BESE 13-A}:

Muhammad Saad Umer (408485)
Muhammad Musfir Baig (409968)
Abdullah Usama (417872)



(1) Please make sure to update the .env file before starting, i.e. setting up the database_connection,
username, password and relevant configs.

(2) Middleware has been implemented via MustVerifyEmail.

(3) The email for creation of account is sent by default to storage/logs/laravel.logs.
One may delete the existing contents of laravel.logs to get the email (resending if was not
done prior).

(4) blade templates were used with @section @foreach @extends etc. directive, to ensure minimal
redundancy components.layout (Master) acts as a parent.

(5) Models were created with appropriate fields including foreign keys and constraints.

(6) Model instances were manipulated using controllers via Laravel ORM. Specifically for such
demonstration of concepts OrderController (resource controller was created for CRUD).

(7) @vite directive were used for inclusion of the css.

(8) For testing purposes, DatabaseSeeder has been implemented with one additional factory
i.e. OrderFactory.

(9) Redirection to login dashboard has been ensured, logout functionality was integerated into our
navbar via a reference to logout route.

