<?php
$conn = mysqli_connect("localhost","root","","student_db");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id'];

$sql = "DELETE FROM students WHERE id=$id";

if(mysqli_query($conn, $sql)){
    header("Location: index.php");
} else {
    echo "Delete failed!";
}
?>
