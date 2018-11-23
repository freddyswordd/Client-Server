<?

$inputuser = $_POST["user"];									#låser det vi skriver i det første felt til user
$inputpass = $_POST["pass"]; 									#låser det vi skriver i det første felt til pass
$user = "root";
$password = "";


$connect = mysql_connect("localhost:8443", $user, $password);
@mysql_select_db($login) or ("Database ikke fundet");

$query = "SELECT * FROM 'users' WHERE 'user' = '$inputuser'";
$querypass = "SELECT * FROM 'users' WHERE 'password' = '$inputpass'";

echo $query;
echo $querypass;


mysql_close()

?>