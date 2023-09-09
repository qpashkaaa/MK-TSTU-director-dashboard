<?php
$login = $_POST['login'];
$password_emp = $_POST['password'];
$FIO = $_POST['FIO'];
$post = (int)$_POST['Post'];
$service_number = $_POST['Service_number'];



$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "diplom";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

foreach(mysqli_query($conn, "SELECT MAX(ID) from authorization_data") as $id);
$id = array_pop($id) + 1;


$sql = mysqli_query($conn,"INSERT INTO authorization_data (ID, login, password, Post, FIO,Service_number) VALUES ('$id','$login','$password_emp', '$post','$FIO', '$service_number')");

    if(!$sql)
        {
            echo'Ошибка запроса: '.mysqli_error($conn).' Код ошибки: '.mysqli_errno($conn);
            exit;
        }

ob_start();
$new_url = '/../page-login.html';
header('Location: '.$new_url);
ob_end_flush();
?>