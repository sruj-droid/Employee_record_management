<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM employees WHERE id=$id";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    } else {
        echo "Employee not found!";
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];

    $updateSQL = "UPDATE employees SET name='$name', email='$email', phone='$phone', department='$department', salary='$salary' WHERE id=$id";
    
    if ($conn->query($updateSQL) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Edit Employee</h2>
        <form method="post">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="text" name="name" value="<?= $row['name'] ?>" required>
            <input type="email" name="email" value="<?= $row['email'] ?>" required>
            <input type="text" name="phone" value="<?= $row['phone'] ?>" required>
            <input type="text" name="department" value="<?= $row['department'] ?>">
            <input type="number" name="salary" value="<?= $row['salary'] ?>">
            <button type="submit">Update Employee</button>
        </form>
    </div>
</body>
</html>
