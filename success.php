<?php session_start(); if (!isset($_SESSION['user'])) header('Location: index.php'); ?>
<?php include 'includes/header.php'; ?>
<h2>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h2>
<a href="actions/logout.php">Logout</a>
<?php include 'includes/footer.php'; ?>