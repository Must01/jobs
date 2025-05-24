# Jobs Platform

A Laravel-based job listing platform where employers can post jobs and manage their listings.

## About The Project

This project is a comprehensive job listing platform built with Laravel, featuring:

-   Job posting and management system
-   Email notifications for new job postings
-   Automated job translation capabilities
-   User authentication and authorization
-   Beautiful UI with Tailwind CSS
-   Queue-based background processing
-   SQLite database for simple deployment

## Features

### For Employers

-   Create and manage job listings
-   Receive email notifications for posted jobs
-   Update or remove job postings
-   Manage employer profile

### Technical Features

-   Laravel 10.x framework
-   Tailwind CSS for modern UI
-   Background job processing with Laravel Queues
-   Email notifications using Mailtrap
-   SQLite database for portability
-   Vite.js for asset compilation

## Getting Started

### Prerequisites

-   PHP 8.x
-   Composer
-   Node.js & npm
-   SQLite

### Installation

1. Clone the repository

2. Install PHP dependencies:

```bash
composer install
```

3. Install JavaScript dependencies:

```bash
npm install
```

4. Copy .env.example to .env and configure your environment:

```bash
cp .env.example .env
```

5. Generate application key:

```bash
php artisan key:generate
```

6. Run database migrations:

```bash
php artisan migrate
```

7. Start the development server:

```bash
php artisan serve
```

8. In a separate terminal, compile assets:

```bash
npm run dev
```

## Usage

### Running the Application

-   Access the application at `http://localhost:8000`
-   Register as a new user
-   Create and manage job listings
-   View email notifications in Mailtrap

### Queue Worker

To process background jobs (translations, emails), run:

```bash
php artisan queue:work
```

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
