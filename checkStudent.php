<?php 

session_start();

$con = mysqli_connect('127.0.0.1', 'root', '', 'university');

$query = mysqli_query($con, "SELECT * FROM students WHERE phone= '{$_POST['phone']}' AND password='{$_POST['password']}'");
//запрос  в таблицу

if(mysqli_num_rows($query) > 0){
//проверка

$stroka = $query->fetch_assoc();
$_SESSION['student_id'] = $stroka['id'];
header('Location: accountStudent.php');

}

else{

header('Location: loginStudent.php');

}

?>