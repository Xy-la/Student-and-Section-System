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
- ID  
- Last Name  
- Full Name  
- Middle Initial  
- Email  
- Contact  
- Section  

**Functions**
- Add Student  
- View Students  
- Edit Student  
- Delete Student  
- Search Student  

---

### 🏷️ Section Module

**Input Fields**
- Section  
- Course Year  

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
- Frontend: HTML, CSS, JavaScript  
- Backend: PHP  
- Database: MySQL  
- Server: XAMPP (Apache & MySQL)  
- Version Control: GitHub  

---

## 🗄️ Database Structure

### student_table
- id – INT (Primary Key)  
- lastname – VARCHAR(50)  
- fullname – VARCHAR(100)  
- md_initial – VARCHAR(5)  
- email – VARCHAR(100)  
- contact – VARCHAR(20)  
- section_id – INT (Foreign Key)

### section_table
- section_id – INT (Primary Key)  
- section – VARCHAR(50)  
- course_year – VARCHAR(50)

---

## ⚙️ Installation Steps
1. Download or clone this repository from GitHub.  
2. Move the project folder to your **htdocs** directory (inside XAMPP).  
3. Open **phpMyAdmin** and create a new database named `student_section_db`.  
4. Import the SQL file `student_section_db.sql` located in the project folder.  
5. Start **Apache** and **MySQL** in your XAMPP Control Panel.  
6. Open your browser and go to:  
