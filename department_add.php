<?php
$conn = mysqli_connect("localhost", "root", "", "student_db");
if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

if(isset($_POST['save'])){
    $dept_name = $_POST['dept_name'];
    $sql = "INSERT INTO department (dept_name) VALUES ('$dept_name')";
    mysqli_query($conn, $sql);
    header("Location: department_view.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Department</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">
    <h2>Add Department</h2>
    <form method="POST">
        <label>Department Name</label>
        <input type="text" name="dept_name" class="form-control" required><br>
        <button type="submit" name="save" class="btn btn-primary">Save</button>
    </form>
</div>
</body>
</html>
