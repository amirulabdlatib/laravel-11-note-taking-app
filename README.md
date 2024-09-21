# Simple Note Taking App

A straightforward note-taking application built with Laravel 11, MySQL, and Flowbite.

## Features

- Create, read, update, and delete notes
- User authentication and authorization
- Responsive design using Flowbite components
- MySQL database for data storage

## Requirements

- PHP 8.2+
- Composer
- Node.js and npm
- MySQL

## Installation

1. Clone the repository:
   ```
   git clone https://github.com/amirulabdlatib/laravel-11-note-taking-app.git
   cd laravel-11-note-taking-app
   ```

2. Install PHP dependencies:
   ```
   composer install
   ```

3. Install and compile frontend dependencies:
   ```
   npm install
   npm run dev
   ```

4. Copy the `.env.example` file to `.env` and configure your database:
   ```
   cp .env.example .env
   ```

5. Generate an application key:
   ```
   php artisan key:generate
   ```

6. Run database migrations:
   ```
   php artisan migrate
   ```

7. Start the development server:
   ```
   php artisan serve
   ```

## Usage

1. Register a new account or log in to an existing one.
2. Create new notes from the dashboard.
3. View, edit, or delete your notes as needed.

## Technologies Used

- [Laravel 11](https://laravel.com/docs/11.x) - The web application framework
- [MySQL](https://www.mysql.com/) - Database management system
- [Flowbite](https://flowbite.com/) - Tailwind CSS component library