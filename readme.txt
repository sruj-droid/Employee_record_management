
Employee Management System
Overview
The Employee Management System is a full-stack web application designed to efficiently manage employee records. Built using HTML, CSS, PHP, and MySQL, and hosted on XAMPP, this system allows users to Create, Read, Update, and Delete (CRUD) employee information through an intuitive interface.
Features
? Add Employees – Register new employees with details such as name, email, phone, department, and salary.
? View Employees – Display all employees in a well-structured table with search and sorting options.
? Update Employees – Edit employee details directly from the UI.
? Delete Employees – Remove employees from the database with a confirmation prompt.
? Responsive UI – Styled with CSS to provide a clean, colorful, and professional interface.
? Secure Data Handling – Uses MySQL for data persistence and PHP for backend logic.
Tech Stack
* Frontend: HTML, CSS
* Backend: PHP
* Database: MySQL
* Server: XAMPP (Apache, MySQL, PHP)
Project Structure
/employee_management/
??? index.php            # Main page displaying all employees
??? add_employee.php      # Form to add a new employee
??? insert.php           # Handles employee insertion into the database
??? edit_employee.php     # Form to update employee details
??? delete_employee.php   # Handles employee deletion
??? db.php               # Database connection file
??? styles.css           # Styling for the UI
??? README.md            # Project documentation
Installation & Setup
1. Install XAMPP
Download and install XAMPP. Start Apache and MySQL from the XAMPP control panel.
2. Clone the Repository
git clone https://github.com/yourusername/employee-management-system.git
cd employee-management-system
3. Setup the Database
* Open http://localhost/phpmyadmin/ in your browser.
* Create a new database named employee_db.
* Run the following SQL script to create the employees table:
CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    phone VARCHAR(15) NOT NULL,
    department VARCHAR(50),
    salary DECIMAL(10,2),
    date_joined DATE DEFAULT CURRENT_DATE
);
4. Configure Database Connection
Edit db.php and update credentials if needed:
$host = "localhost";
$user = "root";
$pass = "";
$db = "employee_db";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
5. Run the Project
1. Move the project folder to C:\xampp\htdocs\.
2. Open your browser and go to: 
3. http://localhost/employee_management/index.php
4. Start managing employees effortlessly! ??
Future Enhancements
?? User Authentication – Implement login/logout for secure access.
?? Search & Filter – Add a search bar to quickly find employees.
?? Export Data – Download employee records as CSV/PDF.
?? Role-Based Access – Different permissions for admins and employees.
Contributing
Contributions are welcome! Fork the repo, create a branch, and submit a pull request.
License
This project is licensed under the MIT License.


