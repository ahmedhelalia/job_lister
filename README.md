# Job Lister

A simple job listing website built with Object-Oriented PHP and MySQL.

## Features

- List all available jobs
- Filter jobs by category
- Create, edit, and delete job listings
- Responsive front-end using Bootstrap
- Flash messaging for user feedback

## Technologies Used

- PHP (OOP)
- MySQL/MariaDB
- PDO for database interaction
- Bootstrap for styling

## Database Structure

- categories: Stores job categories (id, name)
- jobs: Stores job listings (id, category_id, company, job_title, description, salary, location, contact_user, contact_email, post_date)

See [`job_lister_db.sql`](job_lister_db.sql) for the full schema and sample data.

## Setup Instructions

1. Clone or download the repository.
2. Import the database:
   - Use phpMyAdmin or the MySQL CLI to import `job_lister_db.sql`.
3. Configure database connection:
   - Edit `config/config.php` if your DB credentials differ.
4. Run the project:
   - Place the project in your web server's root (e.g., `htdocs` for XAMPP).
   - Access via `http://localhost/job_lister_website/job_lister/`.

## File Structure

- `config/` - Configuration files
- `helpers/` - Helper functions (e.g., redirect, flash messages)
- `lib/` - Core classes (Database, Job, Template)
- `templates/` - Front-end templates (PHP/HTML/CSS)
- `index.php` - Main entry point (job listings)
- `create.php` - Create a new job
- `edit.php` - Edit an existing job
- `job.php` - View or delete a job

## Author

Ahmed helalia

---

*This project is for learning purposes and demonstrates basic CRUD operations with PHP and MySQL.*
