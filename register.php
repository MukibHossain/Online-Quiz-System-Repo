<?php include 'config.php';
if(isset($_POST['register'])){
$username=$_POST['username'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$conn->query("INSERT INTO users(username,email,password) VALUES('$username','$email','$password')");
echo "Registered!";
}
?>
<form method="post">
<input name="username" placeholder="Username"><br>
<input name="email" placeholder="Email"><br>
<input name="password" type="password" placeholder="Password"><br>
<button name="register">Register</button>
</form>