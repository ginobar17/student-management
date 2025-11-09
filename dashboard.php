<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Student DBMS</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>
<script src="supabase.js"></script>

</head>

<body>

<header>
  <nav class="navbar">
    <div class="logo">Student <span>DBMS</span></div>
    <ul class="nav-links">
      <li><a href="dashboard.html">Dashboard</a></li>
      <li><a href="students.html">Students</a></li>
      <li><a href="departments.php">Departments</a></li>
      <li><a href="#">Faculty</a></li>
    </ul>
    <a href="index.html" class="btn-outline">Logout</a>
  </nav>
</header>

<section class="features">
  <h2>Welcome Admin 👋</h2>
  <p>Choose a module to manage</p>

  <div class="cards">

    <a href="students.html" style="text-decoration:none; color:black;">
      <div class="card">
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135755.png">
        <h3>Students</h3>
        <p>Add, Edit & Delete student data.</p>
      </div>
    </a>

    <a href="departments.php" style="text-decoration:none; color:black;">
      <div class="card">
        <img src="https://cdn-icons-png.flaticon.com/512/2920/2920259.png">
        <h3>Departments</h3>
        <p>Manage departments list.</p>
      </div>
    </a>

    <a href="#" style="text-decoration:none; color:black;">
      <div class="card">
        <img src="https://cdn-icons-png.flaticon.com/512/1048/1048941.png">
        <h3>Faculty</h3>
        <p>Coming soon...</p>
      </div>
    </a>

  </div>
</section>

<footer>
  <p>© 2025 Student DBMS | Mini Project</p>
</footer>

</body>
</html>
