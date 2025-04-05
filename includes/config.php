<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'raacaas';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("failed to connect to database" . $conn->connect_error);
}
echo "";
?>