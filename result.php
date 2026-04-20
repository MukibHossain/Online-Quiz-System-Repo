<?php include 'config.php';
$res=$conn->query("SELECT * FROM questions");
$score=0;
while($row=$res->fetch_assoc()){
$qid=$row['id'];
if(isset($_POST["q$qid"]) && $_POST["q$qid"]==$row['correct_option']){
$score++;
}
}
echo "Your Score: ".$score;
?>