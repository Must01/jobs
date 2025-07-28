# 🚀 JobBoard - Laravel Job Application Platform

A modern, elegant job board application built with Laravel 10, featuring a beautiful gradient-based UI and comprehensive job management system.

<img width="1867" height="869" alt="image" src="https://github.com/user-attachments/assets/e891a78e-141f-41c2-9a5e-8944df9590e0" />

## ✨ Features

### 🎯 Core Functionality
- **Job Listings**: Browse and search through available positions
- **Job Management**: Create, edit, and delete job postings (authenticated users)
- **User Authentication**: Register, login, and secure session management
- **Authorization**: Policy-based job editing permissions
- **Email Notifications**: Automated job posting confirmations
- **Queue System**: Background job processing with Laravel Queues

### 🎨 Modern UI/UX
- **Gradient Backgrounds**: Beautiful multi-layered gradient designs
- **Glass-morphism Effects**: Modern backdrop blur and transparency effects
- **Responsive Design**: Mobile-first approach with Tailwind CSS
- **Interactive Elements**: Hover animations and smooth transitions
- **Professional Layout**: Clean, intuitive navigation and structure

### 🔧 Technical Features
- **Laravel 10**: Latest version with modern PHP practices
- **Blade Components**: Reusable UI components for consistency
- **Tailwind CSS**: Utility-first CSS framework for rapid styling
- **Vite**: Modern build tool for asset compilation
- **Database Migrations**: Version-controlled database structure
- **Model Relationships**: Eloquent ORM with proper associations

## 🛠️ Tech Stack

- **Backend**: Laravel 10 (PHP 8.1+)
- **Frontend**: Blade Templates + Tailwind CSS
- **Database**: MySQL/SQLite
- **Build Tool**: Vite
- **Queue**: Laravel Queue (Database/Redis)
- **Mail**: Laravel Mail with queue support

## 📋 Requirements

- PHP >= 8.1
- Composer
- Node.js >= 16.x
- MySQL >= 5.7 or SQLite
- Git

## 🚀 Installation

### 1. Clone the Repository
```bash
git clone https://github.com/yourusername/jobboard.git
cd jobboard
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Install Node Dependencies
```bash
npm install
```

### 4. Environment Setup
```bash
cp .env.example .env
php artisan key:generate
```

### 5. Configure Database
Update your `.env` file with database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=jobboard
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 6. Run Migrations
```bash
php artisan migrate
```

### 7. Seed Database (Optional)
```bash
php artisan db:seed
```

### 8. Build Assets
```bash
npm run dev
# or for production
npm run build
```

### 9. Start Development Server
```bash
php artisan serve
```

Visit `http://localhost:8000` to see your application!

## 🎨 Tailwind CSS Setup

If Tailwind styles aren't appearing, ensure:

### 1. Tailwind Config (`tailwind.config.js`)
```javascript
/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
```

### 2. CSS File (`resources/css/app.css`)
```css
@tailwind base;
@tailwind components;
@tailwind utilities;
```

### 3. Vite Config (`vite.config.js`)
```javascript
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
```

### 4. Clear Cache & Rebuild
```bash
php artisan config:clear
php artisan cache:clear
php artisan view:clear
npm run build
```

## 📁 Project Structure

```
jobboard/
├── app/
│   ├── Http/Controllers/
│   │   ├── JobController.php
│   │   ├── RegisteredUserController.php
│   │   └── SessionController.php
│   ├── Jobs/
│   │   └── TranslateJob.php
│   ├── Mail/
│   │   └── JobPosted.php
│   └── Models/
│       ├── Job.php
│       ├── User.php
│       └── Employer.php
├── resources/
│   ├── views/
│   │   ├── components/
│   │   ├── jobs/
│   │   └── layouts/
│   └── css/
│       └── app.css
├── routes/
│   └── web.php
└── database/
    └── migrations/
```

## 🔐 Authentication

The application includes a complete authentication system:

- **Registration**: `/register`
- **Login**: `/login`
- **Logout**: `POST /logout`
- **Protected Routes**: Job creation/editing requires authentication
- **Authorization**: Users can only edit their own job postings

## 📧 Email & Queues

### Email Configuration
Update `.env` for email settings:
```env
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-email
MAIL_PASSWORD=your-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@jobboard.com
MAIL_FROM_NAME="JobBoard"
```

### Queue Configuration
For background job processing:
```bash
# Run queue worker
php artisan queue:work

# Or use supervisor for production
php artisan queue:restart
```

## 🎯 Key Pages

### 🏠 Home Page (`/`)
- Stunning gradient hero section
- Interactive statistics
- Feature highlights with glass-morphism effects
- Call-to-action sections

### 💼 Jobs (`/jobs`)
- Enhanced job listings with search functionality
- Company information and job details
- Responsive card-based design
- Pagination support

### 📝 Job Details (`/jobs/{id}`)
- Comprehensive job information
- Company details and benefits
- Skills and requirements
- Apply button and edit permissions

### 📞 Contact (`/contact`)
- Contact form with validation
- Company information cards
- Professional layout

## 🚀 Deployment

### Production Checklist
```bash
# Optimize for production
composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan route:cache
php artisan view:cache
npm run build

# Set environment
APP_ENV=production
APP_DEBUG=false
```

### Environment Variables
Key production settings:
```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com
DB_CONNECTION=mysql
QUEUE_CONNECTION=redis
CACHE_DRIVER=redis
SESSION_DRIVER=redis
```

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 License

This project is open-sourced software licensed under the [MIT license](LICENSE).

## 🐛 Troubleshooting

### Common Issues

**Tailwind styles not loading:**
```bash
npm run dev
# Hard refresh browser (Ctrl+F5)
```

**Database connection error:**
- Check `.env` database credentials
- Ensure database exists
- Run `php artisan migrate`

**Queue jobs not processing:**
```bash
php artisan queue:work
# Check QUEUE_CONNECTION in .env
```

**Permission denied errors:**
```bash
sudo chown -R www-data:www-data storage bootstrap/cache
sudo chmod -R 775 storage bootstrap/cache
```

## 📞 Support

If you encounter any issues or have questions:

1. Check the [Laravel Documentation](https://laravel.com/docs)
2. Review [Tailwind CSS Documentation](https://tailwindcss.com/docs)
3. Create an issue in this repository
4. Contact the development team

---

**Made with ❤️ using Laravel & Tailwind CSS**

*Transform your career journey with JobBoard - where opportunities meet talent.*
