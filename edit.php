<?php
$conn = mysqli_connect("localhost","root","","student_db");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id'];
$sql = "SELECT * FROM students WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $marks = $_POST['marks'];

    $update = "UPDATE students SET name='$name', email='$email', course='$course', marks='$marks' WHERE id=$id";

    if(mysqli_query($conn, $update)){
        header("Location: index.php");
    } else {
        echo "Update failed!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student Details</h2>
    <form method="post">
        Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
        Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
        Course: <input type="text" name="course" value="<?php echo $row['course']; ?>"><br><br>
        Marks: <input type="number" name="marks" value="<?php echo $row['marks']; ?>"><br><br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>
