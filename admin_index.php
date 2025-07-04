<?php
    require_once("connection.php");

    $userCount = $db->query("SELECT COUNT(*) FROM users")->fetchColumn();
    $productCount = $db->query("SELECT COUNT(*) FROM product")->fetchColumn();
    $categoryCount = $db->query("SELECT COUNT(*) FROM categories")->fetchColumn();
    $orderCount = $db->query("SELECT COUNT(*) FROM orders")->fetchColumn();
    $imageCount = $db->query("SELECT COUNT(image) FROM product WHERE image IS NOT NULL AND image != ''")->fetchColumn();
?>

<style>
  .dashboard-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin-top: 30px;
  }

  .card {
    background-color: #fff;
    border: 1px solid #ddd;
    width: 220px;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 3px 8px rgba(0,0,0,0.1);
    transition: transform 0.2s;
  }

  .card:hover {
    transform: scale(1.03);
  }

  .dashbord-header {
    font-size: 16px;
    font-weight: bold;
    color: #374785;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .dashbord-header i {
    color: #ff8800;
  }

  .dashbord-body {
    font-size: 24px;
    font-weight: bold;
    color: #222;
  }

  h1 {
    font-size: 28px;
    color: #374785;
    margin-top: 20px;
  }
</style>

<h1><i class="fas fa-tachometer-alt"></i> Toy Shop Dashboard</h1>

<div class="dashboard-container">

  <div class="card">
    <div class="dashbord-header">
      <i class="fas fa-users"></i> Users
    </div>
    <div class="dashbord-body">
      <?= $userCount ?>
    </div>
  </div>

  <div class="card">
    <div class="dashbord-header">
      <i class="fas fa-cube"></i> Toys
    </div>
    <div class="dashbord-body">
      <?= $productCount ?>
    </div>
  </div>

  <div class="card">
    <div class="dashbord-header">
      <i class="fas fa-list"></i> Categories
    </div>
    <div class="dashbord-body">
      <?= $categoryCount ?>
    </div>
  </div>

  <div class="card">
    <div class="dashbord-header">
      <i class="fas fa-shopping-cart"></i> Orders
    </div>
    <div class="dashbord-body">
      <?= $orderCount ?>
    </div>
  </div>

  <div class="card">
    <div class="dashbord-header">
      <i class="fas fa-image"></i> Images
    </div>
    <div class="dashbord-body">
      <?= $imageCount ?>
    </div>
  </div>

</div>


