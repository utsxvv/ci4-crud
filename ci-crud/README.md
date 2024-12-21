# CodeIgniter 4 CRUD Application with Authentication

This project is a **CodeIgniter 4 web application** that features basic **CRUD operations** (Create, Read, Update, Delete) with **Login and Register authentication**. It uses a **MySQL database** for storing user and application data.

---

## Project Features
- User registration and login functionality.
- CRUD operations for managing records.
- Simple and intuitive user interface.

---

## Requirements
- **PHP** 7.4 or later
- **Composer**
- **MySQL**
- **Apache** or **Nginx** web server

---

## Installation

### 1. Clone the Repository
Clone the repository from GitHub and navigate into the project directory:
```bash
git clone https://github.com/utsxvv/ci4-crud.git
cd ci4-crud
```

### 2. Install Dependencies
Install PHP dependencies using Composer:
```bash
composer install
```

### 3. Set Up Environment Variables
Rename the `env` file to `.env` and edit it to configure your environment variables:
```bash
mv env .env
```

Open the `.env` file and update the database settings:
```dotenv
database.default.hostname = localhost
database.default.database = your_database_name
database.default.username = your_database_user
database.default.password = your_database_password
database.default.DBDriver = MySQLi
database.default.port = 3306
```

### 4. Create the Database
Create a new database in your MySQL server:
```sql
CREATE DATABASE your_database_name;
```

### 5 . Start the Development Server
Run the built-in development server:
```bash
php spark serve
```
Visit the application in your web browser at [http://localhost:8080](http://localhost:8080).

---

## Usage

### Access the Application
- Navigate to [http://localhost:8080](http://localhost:8080).
- Use the registration form to create an account or log in with an existing user.

### CRUD Operations
- Once logged in, you can access the CRUD interface to create, view, update, and delete records.

---

## Database Schema
Below is a schema for user authentication and records:

#### Users Table
```sql
CREATE TABLE auth (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    semester VARCHAR(255) NOT NULL,
    gender VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL
);
```

#### Sample CRUD Table
```sql
CREATE TABLE student (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    semester VARCHAR(255) NOT NULL,
    gender VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL
);
```

---


## Troubleshooting

### Common Issues
- **Database connection error**: Ensure your database credentials in `.env` are correct and the database server is running.
- **Composer errors**: Ensure Composer is installed and dependencies are updated with `composer install`.

---

## Contact
For questions or support, contact:
- **Gmail**: [utssavvpatel@gmail.com](mailto:utssavvpatel@gmail.com)
- **LinkedIn**: [Utsav Patel](www.linkedin.com/in/utsxvv)
- **GitHub**: [@utsxvv](https://github.com/utsxvv)

