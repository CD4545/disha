<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['login'])) {
    // If not, redirect to login page
    header("Location: login.php");
    exit();
}

// Get user info from session
$user = $_SESSION['login'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard - Toys</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header class="admin-navbar">
    <h1>🎈 Toys Admin</h1>
    <a href="index.html" class="logout-btn">Logout</a>
  </header>

  <main class="admin-dashboard">
    <h2>Dashboard Overview</h2>
    <div class="stats-grid">
      <div class="stat-card">
        <h3>Total Toys</h3>
        <p>150</p>
      </div>
      <div class="stat-card">
        <h3>Orders Today</h3>
        <p>8</p>
      </div>
      <div class="stat-card">
        <h3>Messages</h3>
        <p>5</p>
      </div>
      <div class="stat-card">
        <h3>Revenue</h3>
        <p>$2,450</p>
      </div>
    </div>
  </main>
</body>
</html>
