<?php

$host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "Medicin";

#laver forbindelsen
$conn = new mysqli($host, $db_username, $db_password, $db_name);#prøv at fjern new*


session_start();
$bruger_data = $_SESSION['login_cpr'];

$query = "SELECT fornavn FROM profiler WHERE fornavn = '$bruger_data'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['fornavn'];


?>