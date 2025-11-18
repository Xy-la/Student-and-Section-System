<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
# 🏫 Student and Section System

## 📄 Project Overview
The Student and Section System is a web-based management platform designed to organize and manage student information together with their respective sections. It allows administrators to add, view, edit, and delete student and section records efficiently. The system is built using PHP, HTML, CSS, JavaScript, and MySQL.

## 🎯 Objectives
- To automate the management of student and section information.
- To perform CRUD (Create, Read, Update, Delete) operations using PHP and MySQL.
- To create a relational database that connects students with their assigned sections.
- To provide an easy-to-use web interface for school administrators.
- To apply full-stack web development skills using open-source tools.

---

## ⚙️ Features / Functionality

### 🧑‍🎓 Student Module

**Input Fields**

| Field Name     | Description                          |
|----------------|--------------------------------------|
| ID             | Unique identifier for each student   |
| Last Name      | Student’s last name                  |
| Full Name      | Student’s complete name              |
| Middle Initial | Student’s middle initial             |
| Email          | Student’s email address              |
| Contact        | Student’s contact number             |
| Section        | Dropdown to select assigned section  |

**Functions**
- Add Student  
- View Students  
- Edit Student  
- Delete Student  
- Search Student  

---

### 🏷️ Section Module

**Input Fields**

| Field Name   | Description                          |
|---------------|--------------------------------------|
| Section       | Name of the section (CIT A,B,C,D) |
| Course Year   | Course and year level of the section | 

**Functions**
- Add Section  
- View Sections  
- Edit Section  
- Delete Section  
- Assign Section  

---

## 🔄 System Flow
1. The admin logs in to the system.  
2. The dashboard shows two main modules: Student and Section.  
3. Admin can:
   - Add new students and assign them to sections.  
   - Manage section details like course and year.  
4. The data is stored in the MySQL database.  
5. Admin can update, delete, or search records anytime.  
6. Changes are automatically reflected on the interface.

---

## 💻 Technology Used

| Technology  | Purpose |
|--------------|----------|
| **HTML**     | To design and structure the web pages of the system. |
| **CSS**      | To style and enhance the visual layout of the interface. |
| **JavaScript** | To add interactivity and dynamic behavior to forms and tables. |
| **PHP**      | To handle backend logic, CRUD operations, and database connectivity. |
| **MySQL**    | To store and manage all student and section records. |
| **XAMPP**    | To provide a local server environment (Apache and MySQL). |
| **GitHub**   | To host and manage the project repository for version control. |

---

## 🗄️ Database Structure

### 🧑‍🎓 student_table

| Column        | Type          | Description                         |
|----------------|---------------|-------------------------------------|
| id             | INT (Primary Key) | Unique ID for each student record |
| lastname       | VARCHAR(50)   | Student’s last name                |
| fullname       | VARCHAR(100)  | Student’s complete name            |
| md_initial     | VARCHAR(5)    | Student’s middle initial           |
| email          | VARCHAR(100)  | Student’s email address            |
| contact        | VARCHAR(20)   | Student’s contact number           |
| section_id     | INT (Foreign Key) | References the section_table     |

---

### 🏷️ section_table

| Column        | Type          | Description                          |
|----------------|---------------|--------------------------------------|
| section_id     | INT (Primary Key) | Unique ID for each section record |
| section        | VARCHAR(50)   | Name of the section (CIT A, B,C,D) |
| course_year    | VARCHAR(50)   | Course and year level of the section |


---

## 🚀 Installation Steps

1. **Clone or Download** this repository:

   ```bash
   git clone https://github.com/Xy-la/student and section system.git

💡 Usage

Open the system in your web browser.

Navigate to the Student or Section page from the main menu. Use the Add Form to input details (student or section). Click Save to store data in the database. View, Edit, or Delete records from the displayed table. Manage both modules independently for organized data handling.

Example actions:
Add new student ➜ Fill form ➜ Save ➜ Data appears in student list.
Edit student ➜ Update details ➜ Save ➜ Changes reflected immediately.

🖼️ Screenshots / Code Snippets

👩‍💻 Contributors

Zyla Rea Lumaad – Developer
Kristine Anne Carpio – Collaboration

📜 License

This project is licensed under the MIT License.








💡 Usage

Open the system in your web browser.

Navigate to the Student or Section page from the main menu. Use the Add Form to input details (student or section). 
Click Save to store data in the database. View, Edit, or Delete records from the displayed table. Manage both modules
independently for organized data handling.

Example actions:
Add new student ➜ Fill form ➜ Save ➜ Data appears in student list.
Edit student ➜ Update details ➜ Save ➜ Changes reflected immediately.

🖼️ Screenshots / Code Snippets
<?php
include('connection.php');
$query = "SELECT * FROM students";
$result = mysqli_query($conn, $query);
?>
>>>>>>> 1e52a4547d73e9c920f2db080d05a36d41e21439
