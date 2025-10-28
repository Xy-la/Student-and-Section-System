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

Navigate to the Student or Section page from the main menu. Use the Add Form to input details (student or section). Click Save to store data in the database. View, Edit, or Delete records from the displayed table. Manage both modules independently for organized data handling.

Example actions:
Add new student ➜ Fill form ➜ Save ➜ Data appears in student list.
Edit student ➜ Update details ➜ Save ➜ Changes reflected immediately.

🖼️ Screenshots / Code Snippets
<?php
include('connection.php');
$query = "SELECT * FROM students";
$result = mysqli_query($conn, $query);
?>
