<?php include('db_connect.php'); ?>

<form method="POST">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    Course: <input type="text" name="course"><br><br>
    Marks: <input type="number" name="marks"><br><br>
    <input type="submit" name="submit" value="Add Student">
</form>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $marks = $_POST['marks'];

    $query = "INSERT INTO students (name, email, course, marks)
              VALUES ('$name', '$email', '$course', '$marks')";
    mysqli_query($conn, $query);

    echo "Student added successfully!";
}
?>
