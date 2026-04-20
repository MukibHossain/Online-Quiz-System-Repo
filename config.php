<?php
$conn = new mysqli("localhost", "root", "", "quiz_system");
if ($conn->connect_error) { die("Connection failed"); }
session_start();
?>