<?php

$hostname = "localhost";
$username = "root";
$password = "root";
$dbname = "tpois";
$limitStart = $_POST['limitStart'];
$limitCount = 100;
if(isset($limitStart ) || !empty($limitStart)) {
$con = mysqli_connect($hostname, $username, $password, $dbname);
$query = "SELECT id, name FROM crm_cities ORDER BY name limit $limitStart, $limitCount";
$result = mysqli_query($con, $query);
$res = array();
while($resultSet = mysqli_fetch_assoc($result)) {
$res[$resultSet['id']] = $resultSet['name'];
}
echo json_encode($res);
}
?>