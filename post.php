<link rel="stylesheet" href="style.css">
<?php
$mysql = new mysqli("localhost", "root", "root", "clinicwebsite");
$mysql->query("SET NAMES 'utf8'");

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$time = $_POST['time'];

if($mysqli->connected_error){
    echo ("Ошибака соеденения: ".$mysql->connect_error);
}

$prov = "SELECT * FROM `formzapisnapriom` WHERE `phone` = '$phone' OR `email` = '$email'";
$select = "INSERT INTO `formzapisnapriom` (`name`, `phone`, `email`, `time`) VALUES ('$name', '$phone', '$email', '$time')";

if($mysql->query($prov)->num_rows > 0){
    echo "<div class ='container'><b class='dannie'>Данные НЕ отправленны!</b>";
    echo "<a href='index.php' class='dannie'>Вернуться назад</a></div>";
}
else if($mysql->query($select) === true){
    echo "<div class ='container'><b class='dannie'>Данные отправленны!</b>";
    echo "<a href='index.php' class='dannie'>Вернуться назад</a></div>";
}
else{
    echo "Error: ".$select."<br>".$mysql->connect_error;
}

$mysql->close();
?>