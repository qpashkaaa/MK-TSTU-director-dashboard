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


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Информация о сотрудниках. Дашборд начальника цеха "АО "ТЗ "Ревтруд"</title>

    <link rel="shortcut icon" type="image/png" href="/../icons/RevtrudLogo.png">
    <link href="/../css/main.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://www.google.com/jsapi"></script>
</head>
<body>
    <div class="hide"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><symbol viewBox="-167.4 267.7 257.7 257.7" id="facebook"><path d="M76.1 267.7h-229.3c-7.9 0-14.2 6.4-14.2 14.2v229.3c0 7.9 6.4 14.2 14.2 14.2h123.4v-99.8h-33.6v-38.9h33.6V358c0-33.3 20.3-51.4 50-51.4 14.2 0 26.5 1.1 30 1.5v34.8H29.6c-16.1 0-19.3 7.7-19.3 18.9v24.8h38.5l-5 38.9H10.4v99.8h65.7c7.9 0 14.2-6.4 14.2-14.2V281.9c0-7.8-6.4-14.2-14.2-14.2z"/></symbol><symbol viewBox="-211.1 354.7 82.6 84.9" id="googleplus"><path d="M-167.5 403.2l-4-3.1c-1.2-1-2.9-2.3-2.9-4.8 0-2.4 1.7-4 3.1-5.4 4.6-3.7 9.3-7.5 9.3-15.7 0-8.4-5.3-12.9-7.8-15h6.8l7.2-4.5h-21.8c-6 0-14.6 1.4-20.9 6.6-4.8 4.1-7.1 9.8-7.1 14.8 0 8.6 6.6 17.4 18.3 17.4 1.1 0 2.3-.1 3.5-.2-.5 1.3-1.1 2.4-1.1 4.3 0 3.4 1.8 5.5 3.3 7.5-5 .3-14.3.9-21.1 5.1-6.5 3.9-8.5 9.5-8.5 13.5 0 8.2 7.7 15.8 23.8 15.8 19 0 29.1-10.5 29.1-20.9.1-7.5-4.4-11.3-9.2-15.4zm-14.5-12.7c-9.5 0-13.8-12.3-13.8-19.7 0-2.9.5-5.9 2.4-8.2 1.8-2.2 4.9-3.7 7.7-3.7 9.2 0 13.9 12.4 13.9 20.4 0 2-.2 5.5-2.8 8.1-1.7 1.7-4.6 3.1-7.4 3.1zm.1 44.5c-11.8 0-19.5-5.7-19.5-13.5 0-7.9 7.1-10.5 9.5-11.4 4.6-1.6 10.6-1.8 11.6-1.8 1.1 0 1.7 0 2.5.1 8.4 6 12.1 9 12.1 14.6.1 6.9-5.6 12-16.2 12zm42.3-44.7v-11.1h-5.5v11.1h-11v5.5h11V407h5.5v-11.2h11.1v-5.5"/></symbol><symbol viewBox="62.4 152.4 487.2 487.2" id="instagram"><path d="M493.4 358.5H451c3.1 12 4.9 24.5 4.9 37.5 0 82.8-67.1 149.9-149.9 149.9S156.1 478.8 156.1 396c0-13 1.8-25.5 4.9-37.5h-42.4v206.1c0 10.3 8.4 18.7 18.7 18.7h337.3c10.3 0 18.8-8.4 18.8-18.7V358.5zm0-131.2c0-10.3-8.4-18.7-18.8-18.7h-56.2c-10.3 0-18.7 8.4-18.7 18.7v56.2c0 10.3 8.4 18.7 18.7 18.7h56.2c10.3 0 18.8-8.4 18.8-18.7v-56.2zm-187.4 75c-51.7 0-93.7 41.9-93.7 93.7 0 51.7 41.9 93.7 93.7 93.7 51.7 0 93.7-42 93.7-93.7 0-51.8-42-93.7-93.7-93.7m187.4 337.3H118.6c-31 0-56.2-25.2-56.2-56.2V208.6c0-31 25.2-56.2 56.2-56.2h374.8c31 0 56.2 25.2 56.2 56.2v374.7c0 31.1-25.2 56.3-56.2 56.3"/></symbol><symbol viewBox="-313 288.4 36.1 37.3" id="paper-airplane"><path d="M-312.1 309l8.8 4.6 1.8 10.7c.1.7.7 1.2 1.3 1.3h.3c.6 0 1.1-.3 1.4-.7l4.6-7.5 9.7 4.8c.2.1.5.2.7.2s.5-.1.7-.2c.5-.2.8-.7.9-1.2l4.8-30c.2-.9-.3-1.9-1.2-2.3-.7-.4-1.6-.4-2.2 0l-31.9 17.4c-.5.3-.8.8-.8 1.5.2.6.5 1.2 1.1 1.4zm27.4 9.3l-7.4-3.6 10.8-17.4-3.4 21zm-11.2-3.9l-3.1 5-1.1-6.3 12.9-12.8-8.7 14.1zm7.8-17.7l-14.1 13.8-5.8-3 19.9-10.8z"/></symbol><symbol viewBox="-326.8 274.8 63.7 64.5" id="person"><path d="M-282.1 306.7l-2.5-1.1 1.8-2.1c2.6-3.1 4.1-6.9 4.1-10.9v-1.2c0-9.2-7.5-16.8-16.8-16.8h-1.2c-9.2 0-16.8 7.6-16.8 16.8v1.2c0 4.2 1.6 8.3 4.6 11.5l1.9 2-2.5 1.2c-10.7 5.1-17.6 16.1-17.6 27.9 0 2.2 1.8 4.1 4.1 4.1s4.1-1.8 4.1-4.1c0-12.5 10.2-22.8 22.8-22.8.2 0 .4 0 .6-.1l.3-.1.3.1c.3 0 .5.1.6.1 12.5 0 22.8 10.2 22.8 22.8 0 2.2 1.8 4.1 4.1 4.1 2.2 0 4.1-1.8 4.1-4.1.1-12.5-7.3-23.6-18.8-28.5zm-4.7-14.4v.4c0 4.7-3.9 8.6-8.6 8.7h-.8c-4.8 0-8.6-3.9-8.6-8.7v-1.2c0-2.3.9-4.5 2.5-6.1 1.6-1.6 3.8-2.5 6.1-2.5h1.2c4.8 0 8.6 3.9 8.6 8.7v.6l-.4.1z"/></symbol><symbol viewBox="-232.1 369.1 41.9 54.2" id="pinterest"><path d="M-209.8 369.1c-14.8 0-22.2 10.6-22.2 19.4 0 5.4 2 10.1 6.4 11.9.7.3 1.4 0 1.6-.8.1-.5.5-1.9.6-2.5.2-.8.1-1.1-.4-1.7-1.3-1.5-2.1-3.4-2.1-6.1 0-7.9 5.9-14.9 15.3-14.9 8.4 0 12.9 5.1 12.9 11.9 0 9-4 16.5-9.9 16.5-3.3 0-5.7-2.7-4.9-6 .9-3.9 2.7-8.2 2.7-11 0-2.5-1.4-4.7-4.2-4.7-3.3 0-6 3.4-6 8.1 0 2.9 1 4.9 1 4.9l-4 17c-1.2 5-.2 11.2-.1 11.8 0 .4.5.5.7.2.3-.4 4.3-5.3 5.6-10.2.4-1.4 2.2-8.6 2.2-8.6 1.1 2.1 4.2 3.9 7.6 3.9 10 0 16.8-9.1 16.8-21.3.1-9.2-7.8-17.8-19.6-17.8z"/></symbol><symbol viewBox="-323.2 278.2 56.3 57.6" id="share"><path d="M-276.9 315.6c-2.6 0-5 1-6.8 2.6l-19.3-9.9c.1-.5.1-1 .1-1.5v-.9l19.5-9.9c1.8 1.5 4 2.4 6.5 2.4 5.6 0 10.1-4.5 10.1-10.1s-4.5-10.1-10.1-10.1-10.1 4.5-10.1 10.1v.9l-19.5 9.9c-1.8-1.5-4-2.4-6.6-2.4-5.6 0-10.1 4.5-10.1 10.1s4.5 10.1 10.1 10.1c2.3 0 4.3-.7 6-2l20 10.2v.5c0 5.6 4.5 10.1 10.1 10.1s10.1-4.5 10.1-10.1c.1-5.5-4.5-10-10-10z"/></symbol><symbol viewBox="0 137.8 612 516.4" id="speech-bubble"><path d="M549.7 199.1v324.2h-63.4L415.6 594l-66.5-70.7H61.3V199.1h488.4m0-61.3H61.3C27 137.8 0 165.9 0 199.1v324.2c0 34.3 28.1 61.3 61.3 61.3h261.8l48.8 50.9c11.4 12.5 27 18.7 43.6 18.7h1c16.6 0 32.2-6.2 43.6-17.7l52-52h38.4c34.3 0 61.3-28.1 61.3-61.3V199.1c-.8-34.3-27.9-61.3-62.1-61.3z"/></symbol><symbol viewBox="9.7 189.1 592.5 413.7" id="twitter"><path d="M239.2 602.2C129 596.7 59.9 550.2 9.7 484.7c26.3 22.6 63.6 42.8 112.6 40.4s82.6-22.6 107.1-47.7c-17.1 2.4-33-4.3-39.8-14.1-9.8-15.9 5.5-30.6 19.6-36.1-36.1 1.8-59.4-13.5-72.2-36.7 8.6-10.4 22-15.9 39.8-16.5-32.4-9.2-60-24.5-65.5-60.6 11.6-1.8 21.4-4.9 34.9-4.3-23.9-15.3-50.8-34.9-49.6-75.3 36.1 13.5 72.8 28.2 106.5 44.7 34.3 16.5 67.3 33 91.2 60 21.4-56.9 45.9-113.8 93-144.4-.6 7.3-4.3 11.6-7.3 15.9 12.2-9.8 26.3-17.7 45.3-20.8-3.1 11-11.6 15.9-21.4 19.6 6.7-1.8 14.1-4.9 23.3-7.3 6.1-1.8 25.1-6.7 25.1 3.1 0 8.6-14.1 12.2-22 14.7-11.6 3.7-20.2 4.9-28.2 8.6 41.6-1.2 69.8 17.7 90.6 39.2 19 19.6 31.8 45.3 37.9 74.7 22 8 53.2 1.2 69.8-7.3-9.2 22.6-32.4 36.1-63.6 38.6 16.5 7.3 42.2 9.8 65.5 7.3.6 1.2-2.4 4.3-4.3 6.1-14.8 12.6-36.9 20.5-65 20.5-16.5 61.2-53.9 106.5-99.8 138.3-46.5 32.4-105.9 54.5-181.2 57.5-3.6-.6-8.5-.6-12.8-.6z"/></symbol><symbol viewBox="-324.7 285.2 59.4 43.7" id="video-player"><path d="M-271.2 285.2h-47.6c-3.3 0-5.9 2.7-5.9 5.9v31.8c0 3.3 2.7 5.9 5.9 5.9h47.6c3.3 0 5.9-2.7 5.9-5.9v-31.8c0-3.3-2.6-5.9-5.9-5.9zm0 37.7h-47.6v-31.8h47.6v31.8zM-304.2 319.3c.5.3 1 .4 1.5.4s1-.1 1.5-.4l16.8-9.7c.9-.5 1.5-1.5 1.5-2.6s-.6-2-1.5-2.6l-16.8-9.7c-.9-.5-2-.5-3 0-.9.5-1.5 1.5-1.5 2.6v19.5c.1 1 .6 2 1.5 2.5zm4.5-16.9l8 4.6-8 4.6v-9.2z"/></symbol></svg></div>

<header class="main-head">
      <nav class="head-nav">
        <ul class="menu">
          <li style="background: white;">
            <a href="directorDashBoard.php">
                <img src = '/../svg/employee-card-svgrepo-com.svg' style = 'width: 50px; margin-left: 20%;'><span style = 'color:black;'>Информация о сотрудниках</span></a>
          </li>
          <li>
            <a href="/../directorDashBoard/directorDashBoardClients.php">
              <img src = '/../svg/client-profile-svgrepo-com.svg' style = 'width: 50px; margin-left: 20%;'><span>Информация о клиентах</span></a>
          </li>
          <li>
            <a href="/../directorDashBoard/directorDashBoardOrders.php">
                <img src = '/../svg/tables-couple-svgrepo-com.svg' style = 'width: 50px; margin-left: 20%;'><span>Заказы и работы</span></a>
          </li>
          <li>
            <a href="/../directorDashBoard/directorDashBoardDSE.php">
                <img src = '/../svg/gear-svgrepo-com.svg' style = 'width: 50px; margin-left: 20%;'><span>Материалы и ПКИ</span></a>
          </li>
          <li>
            <a href="/../directorDashBoard/directorDashBoardWarehouses.php">
                <img src = '/../svg/warehouse-svgrepo-com.svg' style = 'width: 50px; margin-left: 20%;'><span>Цеха и склады</span></a>
          </li>
          <li>
        <div class = 'line'></div>
            <a href="#">
                <img src = '/../svg/login-svgrepo-com.svg' style = 'width: 50px; margin-left: 20%;'><span style = 'color:black; font-weight: bold;' id = 'login'>
                
                  <?php

                  $login = $_GET['login'];
                  echo $login;

                  ?>

                </span></a>
          </li>
          <li>
            <a href="/../page-login.html">
                <img src = '/../svg/exit-svgrepo-com.svg' style = 'width: 50px; margin-left: 20%;'><span style = 'color:black; font-weight: bold;'>Выход</span></a>
          </li>
        </ul>
      </nav>
</header> <!-- //main-head -->

<div class = 'upper-div'>
    <img src = '/../icons/logo1.gif' style = 'width: 56px;margin-top: 14px;'>
</div>

<div class = 'info-div' id = 'info-div'>Информация о сотрудниках</div>
<div class = 'table-and-diagramm'>
<div class = 'table'>
<table>
<tr>
  <th>ФИО</th>
  <th>Табельный №</th>
  <th>Информация</th>
  </tr>
 <tr>
  <?php
  $result = mysqli_query($conn,"SELECT * from employee"); // запрос на выборку
  $id = 0;
  $age_18_24_id = 0;
  $age_25_44_id = 0;
  $age_45_59_id = 0;
  $age_60_74_id = 0;
  $age_arr_18_24 = array();
  $age_arr_25_44 = array();
  $age_arr_45_59 = array();
  $age_arr_60_74 = array();
  while($row = $result->fetch_assoc())// получаем все строки в цикле по одной
  {
      echo '<tr><td id = "fio-'.$id.'">'.$row['FIO'].'</td>';
      echo '<td>'.$row['ID'].'</td>';
      echo "<td><button onmouseover = 'getID(this.id);' onmouseout = 'hideID(this.id);' onclick ='displayBlockButton(this.id);' class = 'info-button' id =".$id."><img src = '/../svg/dots-y-svgrepo-com.svg'></button></td></tr>";// выводим данные
      echo '<td style = "background-color:#F8F8F8;display:none"></td><td style = "background-color:#F8F8F8;display:none"></td><td style  = "display:none;position:fixed;border-radius: 10px;border:1px black solid;width:200px;height:100px;margin-left: 300px;margin-top: -10px;" id = "td-'.$id.'">Разряд: '.$row['Discharge'].'<br>Возраст: '.$row['Age'].'<br>Специальность: '.$row['Specialization'].'<br>Цех: '.$row['ID_division'].'</td>';
      //$age_arr[$id] = $row['Age'];
      if($row['Age'] >= 18 && $row['Age'] <=24)
        {
            $age_arr_18_24[$age_18_24_id] = $row['Age'];
            $age_18_24_id++;
        }
      if($row['Age'] >= 25 && $row['Age'] <=44)
        {
            $age_arr_25_44[$age_25_44_id] = $row['Age'];
            $age_25_44_id++;
        }
      if($row['Age'] >= 45 && $row['Age'] <=59)
        {
            $age_arr_45_59[$age_45_59_id] = $row['Age'];
            $age_45_59_id++;
        }
      if($row['Age'] >= 60 && $row['Age'] <=74)
        {
            $age_arr_60_74[$age_60_74_id] = $row['Age'];
            $age_60_74_id++;
        }
      $id++;

  }
  ?>
 </tr>
</table>
</div>
<div>
<div id="worker-age-flex-right" class = 'worker-age-flex-right' style="width: 500px; height: 300px;">
</div>
<div id = 'chart_div' style="width: 500px; height: 200px;margin-left: 170px;"></div>
</div>
</div>
<script src="/../js/directorDashBoard.js"></script>
<script>
   google.load("visualization", "1", {packages:["corechart"]});
   google.setOnLoadCallback(drawChart);
   google.setOnLoadCallback(drawChart_empty);
   function drawChart() {
    var data = google.visualization.arrayToDataTable([
     ['Возраст сотрудников', 'лет'],
     <?php
    echo "['18 - 24 лет',".count($age_arr_18_24)."],";
    echo "['25 - 44 лет',".count($age_arr_25_44)."],";
    echo "['45 - 59 лет',".count($age_arr_45_59)."],";
    echo "['60 - 74 лет',".count($age_arr_60_74)."],";
     ?>
    ]);
    var options = {
     title: 'Возраст сотрудников на предприятии',
     is3D: true,
     backgroundColor: '#F8F8F8'
    };
    var chart = new google.visualization.PieChart(document.getElementById('worker-age-flex-right'));
     chart.draw(data, options);
   }

   <?php
     /* echo "function drawChart_week(id) {";
      echo " var data = google.visualization.arrayToDataTable([";
      echo "    ['День', 'Кол-во заказов'],";
      echo "    ['Пн.',  Math.floor(Math.random() * 5)+5],";
      echo "    ['Вт.',  Math.floor(Math.random() * 5)+5],";
      echo "    ['Ср.',  Math.floor(Math.random() * 5)+5],";
      echo "    ['Чт.',  Math.floor(Math.random() * 5)+5],";
      echo "    ['Пт.',  Math.floor(Math.random() * 5)+5],";
      echo "  ]);";

      echo "  var options = {";
      echo "    title: 'Продуктивность сотрудника ' + document.getElementById(id).innerHTML + ' за неделю',";
      echo "    vAxis: {minValue: 0},";
      echo "    backgroundColor: '#F8F8F8'";
      echo "  };";

      echo "  var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));";
      echo "  chart.draw(data, options);";
      echo "}";*/

      ?>

function drawChart_week(id) {
<?

$monday_ord_count = 0;
$tuesday_ord_count = 0;
$wednesday_ord_count = 0;
$thursday_ord_count = 0;
$friday_ord_count = 0;
$id = 0;
$result = mysqli_query($conn,"SELECT e.FIO FROM emp_productivity t,employee e WHERE (Date BETWEEN(CURDATE()-WEEKDAY(CURDATE()))AND CURDATE()) and e.ID = t.Emp_id group by e.FIO;"); // запрос на выборку
while($row = $result->fetch_assoc())// получаем все строки в цикле по одной
{
  $order = mysqli_query($conn,"SELECT dayname(t.Date) as day_ord,e.FIO,t.count_orders FROM emp_productivity t,employee e WHERE (Date BETWEEN(CURDATE()-WEEKDAY(CURDATE()))AND CURDATE()) and e.ID = t.Emp_id and dayname(t.Date) = 'Monday' and e.FIO like ('%".$row['FIO']."%')");
        while($row_in = $order->fetch_assoc())
          {
            $monday_ord_count = $row_in['count_orders'];
          }
  $order = mysqli_query($conn,"SELECT dayname(t.Date) as day_ord,e.FIO,t.count_orders FROM emp_productivity t,employee e WHERE (Date BETWEEN(CURDATE()-WEEKDAY(CURDATE()))AND CURDATE()) and e.ID = t.Emp_id and dayname(t.Date) = 'Tuesday' and e.FIO like ('%".$row['FIO']."%')");
  while($row_in = $order->fetch_assoc())
    {
      $tuesday_ord_count = $row_in['count_orders'];
    }   
    
  $order = mysqli_query($conn,"SELECT dayname(t.Date) as day_ord,e.FIO,t.count_orders FROM emp_productivity t,employee e WHERE (Date BETWEEN(CURDATE()-WEEKDAY(CURDATE()))AND CURDATE()) and e.ID = t.Emp_id and dayname(t.Date) = 'Wednesday' and e.FIO like ('%".$row['FIO']."%')");
  while($row_in = $order->fetch_assoc())
    {
      $wednesday_ord_count = $row_in['count_orders'];
    }   

  $order = mysqli_query($conn,"SELECT dayname(t.Date) as day_ord,e.FIO,t.count_orders FROM emp_productivity t,employee e WHERE (Date BETWEEN(CURDATE()-WEEKDAY(CURDATE()))AND CURDATE()) and e.ID = t.Emp_id and dayname(t.Date) = 'Thursday' and e.FIO like ('%".$row['FIO']."%')");
  while($row_in = $order->fetch_assoc())
    {
      $thursday_ord_count = $row_in['count_orders'];
    }   
    
  $order = mysqli_query($conn,"SELECT dayname(t.Date) as day_ord,e.FIO,t.count_orders FROM emp_productivity t,employee e WHERE (Date BETWEEN(CURDATE()-WEEKDAY(CURDATE()))AND CURDATE()) and e.ID = t.Emp_id and dayname(t.Date) = 'Friday' and e.FIO like ('%".$row['FIO']."%')");
  while($row_in = $order->fetch_assoc())
    {
      $friday_ord_count = $row_in['count_orders'];
    }   

  /*if ($row['day_ord'] == 'Monday')
  {
    $order = mysqli_query($conn,"SELECT dayname(t.Date) as day_ord,e.FIO,t.count_orders FROM emp_productivity t,employee e WHERE (Date BETWEEN(CURDATE()-WEEKDAY(CURDATE()))AND CURDATE()) and e.ID = t.Emp_id and dayname(t.Date) = '".$row['day_ord']."' and e.FIO like ('%".$row['FIO']."%')");
        while($row_in = $order->fetch_assoc())
          {
            $monday_ord_count = $row_in['count_orders'];
          }
  }
  if ($row['day_ord'] == 'Tuesday')
  {
    $order = mysqli_query($conn,"SELECT dayname(t.Date) as day_ord,e.FIO,t.count_orders FROM emp_productivity t,employee e WHERE (Date BETWEEN(CURDATE()-WEEKDAY(CURDATE()))AND CURDATE()) and e.ID = t.Emp_id and dayname(t.Date) = '".$row['day_ord']."' and e.FIO like ('%".$row['FIO']."%')");
        while($row_in = $order->fetch_assoc())
          {
            $tuesday_ord_count = $row_in['count_orders'];
          }
  }
  if ($row['day_ord'] == 'Wednesday')
  {
    $order = mysqli_query($conn,"SELECT dayname(t.Date) as day_ord,e.FIO,t.count_orders FROM emp_productivity t,employee e WHERE (Date BETWEEN(CURDATE()-WEEKDAY(CURDATE()))AND CURDATE()) and e.ID = t.Emp_id and dayname(t.Date) = '".$row['day_ord']."' and e.FIO like ('%".$row['FIO']."%')");
        while($row_in = $order->fetch_assoc())
          {
            $wednesday_ord_count = $row_in['count_orders'];
          }
  }
  if ($row['day_ord'] == 'Thursday')
  {
    $order = mysqli_query($conn,"SELECT dayname(t.Date) as day_ord,e.FIO,t.count_orders FROM emp_productivity t,employee e WHERE (Date BETWEEN(CURDATE()-WEEKDAY(CURDATE()))AND CURDATE()) and e.ID = t.Emp_id and dayname(t.Date) = '".$row['day_ord']."' and e.FIO like ('%".$row['FIO']."%')");
        while($row_in = $order->fetch_assoc())
          {
            $thursday_ord_count = $row_in['count_orders'];
          }
  }
  if ($row['day_ord'] == 'Friday')
  {
    $order = mysqli_query($conn,"SELECT dayname(t.Date) as day_ord,e.FIO,t.count_orders FROM emp_productivity t,employee e WHERE (Date BETWEEN(CURDATE()-WEEKDAY(CURDATE()))AND CURDATE()) and e.ID = t.Emp_id and dayname(t.Date) = '".$row['day_ord']."' and e.FIO like ('%".$row['FIO']."%')");
        while($row_in = $order->fetch_assoc())
          {
            $friday_ord_count = $row_in['count_orders'];
          }
  }*/
   echo "if (id == 'fio-".$id."')
   {
   var data = google.visualization.arrayToDataTable([
      ['День', 'Кол-во заказов'],
      ['Пн.',  ".$monday_ord_count."],
      ['Вт.',  ".$tuesday_ord_count."],
      ['Ср.',  ".$wednesday_ord_count."],
      ['Чт.',  ".$thursday_ord_count."],
      ['Пт.',  ".$friday_ord_count."],
    ]);

    var options = {
      title: 'Продуктивность сотрудника ' + document.getElementById(id).innerHTML + ' за неделю',
      vAxis: {minValue: 0},
      backgroundColor: '#F8F8F8'
    };

    var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
    chart.draw(data, options);
      }
      ";

      

      $id++;

      $monday_ord_count = 0;
      $tuesday_ord_count = 0;
      $wednesday_ord_count = 0;
      $thursday_ord_count = 0;
      $friday_ord_count = 0;
}
      ?>
}

      function drawChart_empty() {
        var data = google.visualization.arrayToDataTable([
          ['День', 'Кол-во заказов'],
          ['Пн.',  0],
          ['Вт.',  0],
          ['Ср.',  0],
          ['Чт.',  0],
          ['Пт.',  0],
        ]);

        var options = {
          title: 'Продуктивность сотрудника за неделю',
          vAxis: {minValue: 0},
          backgroundColor: '#F8F8F8'
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
  </script>
</body>
</html>