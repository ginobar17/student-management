<?php
$conn = mysqli_connect("localhost","root","","student_db");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <style>
        table {
            width: 70%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 10px;
        }
        th {
            background-color: lightgray;
        }
        a {
            padding: 5px 10px;
            text-decoration: none;
            border: 1px solid black;
            margin: 2px;
        }
        .edit { background-color: yellow; }
        .delete { background-color: tomato; color: white; }
    </style>
</head>

<body>
    <h2>Student Records</h2>
    <a href="add.php">Add New Student</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
            <th>Marks</th>
            <th>Action</th>
        </tr>

        <?php
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['course']."</td>";
                echo "<td>".$row['marks']."</td>";
                echo "<td>
                        <a class='edit' href='edit.php?id=".$row['id']."'>Edit</a>
                        <a class='delete' href='delete.php?id=".$row['id']."'>Delete</a>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No records found</td></tr>";
        }
        ?>
    </table>
</body>
</html>
