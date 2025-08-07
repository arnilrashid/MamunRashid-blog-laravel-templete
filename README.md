# Installation Instructions

## Prerequisites

-   PHP >= 8.1
-   Composer
-   Node.js & NPM

## Setup Steps

### 1. Clone the Repository

```bash
git clone [your-repository-url]
cd [project-directory-name]
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install Node.js Dependencies

```bash
npm install
```

### 4. Environment Configuration

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 5. Environment Variables Setup

Open the `.env` file and configure the following variables:

**For SQLite (Default):**

```env
APP_NAME="Laravel Blade Template"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

# Database Configuration (SQLite is used by default)
DB_CONNECTION=sqlite

# Session Configuration
SESSION_DRIVER=database
```

**For MySQL (Alternative):**

```env
APP_NAME="Laravel Blade Template"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

# Database Configuration (MySQL)
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password

# Session Configuration
SESSION_DRIVER=database
```

### 6. Database Setup

**For SQLite:**

```bash
# Create database file (if using SQLite)
touch database/database.sqlite

# Run database migrations
php artisan migrate
```

**For MySQL:**

```bash
# Create database in MySQL first (using MySQL client or phpMyAdmin)
# Then run migrations
php artisan migrate
```

## Running the Application

### Development Server

```bash
php artisan serve
```

The application will be available at: `http://localhost:8000`

### Alternative: Using Laravel Valet (macOS/Linux)

If you have Laravel Valet installed:

```bash
valet park
```

Then access your application at: `http://[project-folder-name].test`
