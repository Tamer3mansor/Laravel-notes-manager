Notes Manager
A Laravel-based web application for managing notes, built to apply advanced Laravel concepts as part of a study plan. The project demonstrates the implementation of modern Laravel features and design patterns, focusing on clean code and modular architecture.
Features

Create, store, and manage notes with title, content, and optional images.
User authentication to associate notes with specific users.
Real-time notification system using Observers and a custom Notification Service.
Custom Artisan command (notify:user) to send notifications manually.
Organized routing with a dedicated notes.php file in Laravel 12.
File storage for uploaded note images using Laravel's Storage system.

Laravel Concepts Applied

Service Container & Bindings: Used to bind the NotificationService interface to EmailNotificationService with scoped bindings.
Facades: Implemented a custom Notification Facade for simplified service access.
Service Providers: Configured AppServiceProvider for service registration and deferred loading.
Observers: Created NoteObserver to trigger notifications on note creation.
Artisan Commands: Built a Notify command to send user notifications via the console.
Scoped Bindings & Deferred Providers: Applied in AppServiceProvider to optimize service instantiation.
Routing: Utilized Laravel 12's streamlined routing with a separate notes.php file.

Technologies Used

Laravel 12 (PHP 8.1+)
SQLite/MySQL (configurable database)
Laravel Breeze (for authentication)
Git (version control)

Getting Started
Prerequisites

PHP 8.1 or higher
Composer
Node.js & NPM (for frontend assets, if using Breeze)
Git

Installation

Clone the repository:git clone https://github.com/YourUsername/notes-manager.git
cd notes-manager


Install dependencies:composer install
npm install


Copy the environment file and configure it:cp .env.example .env

Update .env with your database settings (e.g., DB_CONNECTION=sqlite).
Generate the application key:php artisan key:generate


Run migrations:php artisan migrate


(Optional) Install Breeze for authentication:php artisan breeze:install
npm run dev


Start the development server:php artisan serve



Usage

Access the app at http://localhost:8000.
Register/login to create notes at /notes/create.
Run the custom notification command:php artisan notify:user user@example.com "Test message"


Check logs at storage/logs/laravel.log for notification events.

Contributing
Feel free to fork the repository and submit pull requests for improvements or bug fixes.
License
This project is licensed under the MIT License.
