# Workopia - Job Board Application

A modern, full-featured job board application built with Laravel that connects job seekers with employers. Workopia provides a seamless platform for posting job listings, searching opportunities, applying to positions, and managing applications.

## 📋 Table of Contents

-   [Overview](#overview)
-   [Features](#features)
-   [Technology Stack](#technology-stack)
-   [Requirements](#requirements)
-   [Installation](#installation)
-   [Configuration](#configuration)
-   [Usage](#usage)
-   [Project Structure](#project-structure)
-   [Key Functionalities](#key-functionalities)
-   [Testing](#testing)
-   [Contributing](#contributing)
-   [License](#license)

## 🎯 Overview

Workopia is a comprehensive job board platform that enables:

-   **Job Seekers**: Browse job listings, search by keywords and location, apply to positions, save favorite jobs, and manage their profile
-   **Employers**: Create and manage job postings, view applications, receive email notifications, and track applicants

The application follows Laravel best practices with a clean MVC architecture, proper authorization policies, and a modern, responsive UI built with Tailwind CSS.

## ✨ Features

### For Job Seekers

-   🔍 **Advanced Search**: Search jobs by keywords, location, job type, and remote options
-   📝 **Job Applications**: Apply to jobs with resume upload, contact information, and personalized messages
-   ⭐ **Bookmarking**: Save favorite job listings for later review
-   👤 **User Profiles**: Manage personal information and avatar
-   📧 **Application Tracking**: View application history and status

### For Employers

-   ➕ **Job Posting**: Create detailed job listings with company information, requirements, benefits, and salary
-   🖼️ **Company Branding**: Upload company logos and add company descriptions
-   📊 **Dashboard**: View all posted jobs and manage applications in one place
-   📬 **Email Notifications**: Receive email alerts when candidates apply
-   ✏️ **Job Management**: Edit and delete job listings with proper authorization

### General Features

-   🔐 **Authentication**: Secure user registration and login system
-   🎨 **Modern UI**: Responsive design with Tailwind CSS
-   📱 **Mobile-Friendly**: Works seamlessly on all device sizes
-   🔒 **Authorization**: Policy-based access control ensuring users can only manage their own content
-   📄 **File Uploads**: Support for resume (PDF) and company logo (image) uploads
-   📧 **Email System**: Integrated email notifications for job applications

## 🛠️ Technology Stack

-   **Backend Framework**: Laravel 11.x
-   **PHP Version**: 8.2 or higher
-   **Frontend**:
    -   Tailwind CSS 3.4+
    -   Vite 6.0
    -   Vanilla JavaScript
-   **Database**: MySQL/PostgreSQL/SQLite (configurable)
-   **Testing**: Pest PHP
-   **Code Quality**: Laravel Pint

## 📦 Requirements

Before you begin, ensure you have the following installed:

-   PHP >= 8.2
-   Composer
-   Node.js >= 18.x and npm
-   Database server (MySQL, PostgreSQL, or SQLite)
-   Web server (Apache/Nginx) or PHP's built-in server

## 🚀 Installation

### 1. Clone the Repository

```bash
git clone https://github.com/yourusername/workopia_laravel.git
cd workopia_laravel
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install Node Dependencies

```bash
npm install
```

### 4. Environment Configuration

Create a `.env` file from the example:

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

### 5. Database Setup

Update your `.env` file with your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=workopia
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

Run the migrations:

```bash
php artisan migrate
```

(Optional) Seed the database with sample data:

```bash
php artisan db:seed
```

### 6. Storage Link

Create a symbolic link for file storage:

```bash
php artisan storage:link
```

### 7. Build Frontend Assets

For development:

```bash
npm run dev
```

For production:

```bash
npm run build
```

## ⚙️ Configuration

### Mail Configuration

Configure your mail settings in `.env` for email notifications:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@workopia.com
MAIL_FROM_NAME="${APP_NAME}"
```

### Queue Configuration

The application uses Laravel's queue system for sending emails. Configure your queue driver in `.env`:

```env
QUEUE_CONNECTION=database
```

Run the queue worker:

```bash
php artisan queue:work
```

Or use the development script that runs everything concurrently:

```bash
composer run dev
```

This command runs the server, queue worker, and Vite dev server simultaneously.

## 💻 Usage

### Starting the Development Server

```bash
php artisan serve
```

The application will be available at `http://localhost:8000`

### Running Queue Worker

For email notifications to work, run the queue worker:

```bash
php artisan queue:work
```

### Development Mode (All Services)

Use the composer script to run all services concurrently:

```bash
composer run dev
```

This starts:

-   Laravel development server
-   Queue worker
-   Vite dev server

## 📁 Project Structure

```
workopia_laravel/
├── app/
│   ├── Http/Controllers/     # Application controllers
│   │   ├── JobController.php
│   │   ├── ApplicantController.php
│   │   ├── BookMarkController.php
│   │   ├── DashboardController.php
│   │   └── ...
│   ├── Models/               # Eloquent models
│   │   ├── Job.php
│   │   ├── User.php
│   │   └── Applicant.php
│   ├── Policies/             # Authorization policies
│   │   └── JobPolicy.php
│   └── Mail/                 # Mail classes
│       └── JobApplied.php
├── database/
│   ├── migrations/           # Database migrations
│   └── seeders/              # Database seeders
├── resources/
│   ├── views/                # Blade templates
│   │   ├── jobs/
│   │   ├── dashboard/
│   │   ├── auth/
│   │   └── ...
│   ├── css/                  # Stylesheets
│   └── js/                   # JavaScript files
├── routes/
│   └── web.php               # Web routes
├── public/                   # Public assets
└── storage/                  # File storage
```

## 🔑 Key Functionalities

### Job Management

-   **Create Jobs**: Authenticated users can create job listings with comprehensive details
-   **Edit Jobs**: Job owners can update their listings
-   **Delete Jobs**: Job owners can remove their listings
-   **View Jobs**: Public access to browse all job listings
-   **Search Jobs**: Advanced search by keywords and location

### Application System

-   **Apply to Jobs**: Users can submit applications with resume upload
-   **Application Validation**: Prevents duplicate applications
-   **Email Notifications**: Employers receive email notifications with applicant details and resume
-   **Application Management**: Employers can view and manage applications from their dashboard

### Bookmarking System

-   **Save Jobs**: Users can bookmark interesting job listings
-   **View Bookmarks**: Access all saved jobs from a dedicated page
-   **Remove Bookmarks**: Unbookmark jobs when no longer interested

### User Dashboard

-   **Job Listings**: View all jobs posted by the user
-   **Applications**: See all applications received for each job
-   **Profile Management**: Update user profile and avatar

### Authorization

-   **Job Policy**: Ensures users can only edit/delete their own job listings
-   **Authentication**: Protected routes for authenticated users only
-   **Guest Access**: Public access to browse and view jobs

## 🧪 Testing

The project uses Pest PHP for testing. Run tests with:

```bash
php artisan test
```

Or using Pest directly:

```bash
./vendor/bin/pest
```

## 🤝 Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

### Code Style

The project uses Laravel Pint for code formatting. Format your code before committing:

```bash
./vendor/bin/pint
```

## 📝 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 🙏 Acknowledgments

-   Built with [Laravel](https://laravel.com)
-   Styled with [Tailwind CSS](https://tailwindcss.com)
-   Icons and UI components inspired by modern design systems

---

**Note**: This is a development project. For production deployment, ensure proper security measures, environment configuration, and performance optimization.
