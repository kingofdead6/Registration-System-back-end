# Laravel Project Setup Guide

This guide will help you set up and launch a Laravel project from scratch.

---

## Prerequisites

Before setting up the project, make sure you have the following installed on your system:

- **PHP** (version 8.1 or above) – Laravel requires PHP 8.1 or later.
- **Composer** – A tool for dependency management in PHP.
- **Node.js** (version 16 or above) – For handling JavaScript and front-end dependencies.
- **MySQL** – A relational database system supported by Laravel.
- **Git** – For cloning the repository.

---

## Steps to Set Up the Project

### 1. Clone the Repository

First, clone the repository to your local machine:

```bash
git clone https://github.com/your-username/your-laravel-project.git
```
cd your-laravel-project
### 2. Install Dependencies
Backend (PHP Dependencies)
Run Composer to install all PHP dependencies:

```bash
composer install
```
Frontend (JavaScript/CSS Dependencies)
Install Node.js dependencies:

```bash
npm install
```
### 3. Set Up Environment File
Laravel uses an .env file to store environment variables. Copy the example .env file to .env:

```bash
cp .env.example .env
```
### 4. Configure Database
Open the .env file and configure your database connection:

```env
Copy code
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
Make sure to create the database in MySQL before proceeding.
```

### 5. Generate Application Key
Laravel requires an application key for security purposes. Run the following Artisan command to generate it:

```bash
php artisan key:generate
```
### 6. Run Migrations
run the following command to set up the database schema:

```bash
php artisan migrate
```
### 7. (Optional) Seed the Database
you can run to seed database:

```bash
php artisan db:seed
```
### 8. Run the Application
Start the Laravel development server:

```bash
php artisan serve
```
By default, the application will be available at http://127.0.0.1:8000.