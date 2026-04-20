<?php include 'config.php';
if(isset($_POST['login'])){
$email=$_POST['email'];
$password=md5($_POST['password']);
$res=$conn->query("SELECT * FROM users WHERE email='$email' AND password='$password'");
if($res->num_rows>0){
$_SESSION['user']=$email;
header("Location: dashboard.php");
}else{
echo "Login failed";
}
}
?>
<form method="post">
<input name="email" placeholder="Email"><br>
<input name="password" type="password" placeholder="Password"><br>
<button name="login">Login</button>
</form>