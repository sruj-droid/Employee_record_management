<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Add Employee</h2>
        <form method="post" action="insert.php">
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="phone" placeholder="Phone" required>
            <input type="text" name="department" placeholder="Department">
            <input type="number" name="salary" placeholder="Salary">
            <button type="submit">Add Employee</button>
        </form>
    </div>
</body>
</html>
