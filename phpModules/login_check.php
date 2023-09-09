<?php

$login = $_POST['login'];
$password_emp = $_POST['password'];

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

foreach(mysqli_query($conn,"SELECT post from authorization_data where login = '$login' and password = '$password_emp'") as $id);
    if ($id == null)
    {
        ob_start();
        $new_url = '/../login-error.html';
        header('Location: '.$new_url);
        ob_end_flush();
    }

    else
    {
        $post = array_pop($id);
        if($post == 0)
        {
            ob_start();
            $login = strtoupper($login);
            $new_url = "/../DirectorDashBoard/directorDashBoard.php/get.php?login=$login";
            header('Location: '.$new_url);
            ob_end_flush();
        }
        else
        {
            ob_start();
            $login = strtoupper($login);
            $new_url = "/../EmployeeDashBoard/employeeDashBoard.php/get.php?login=$login";
            header('Location: '.$new_url);
            ob_end_flush();
        }
    }
?>