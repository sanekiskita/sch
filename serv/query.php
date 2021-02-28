<?php
$mysqli = new mysqli("localhost", "mysql", "mysql", "mik")or die("Ошибка ".mysqli_error($link));
if($_GET['id']){
    $id=$_GET['id'];
$result = $mysqli->query("SELECT *  FROM `table_1` Where rid = $id  ");
$row[] = $result->fetch_assoc();

}else{
    $result = $mysqli->query("SELECT *  FROM `table_1`");
    while($str = $result->fetch_assoc()) {
        $row[]=$str;
    }
}
echo json_encode($row,JSON_UNESCAPED_UNICODE);
?>