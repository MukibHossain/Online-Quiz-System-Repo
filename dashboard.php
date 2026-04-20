<?php include 'config.php';
if(!isset($_SESSION['user'])) header("Location: login.php");
?>
<h2>Dashboard</h2>
<a href="quiz.php">Start Quiz</a><br>
<a href="logout.php">Logout</a>