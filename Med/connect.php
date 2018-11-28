<?

$username = $_POST['username'];
$password = $_POST['password'];

if (!empty($username)|| !empty($password)){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Login";

    #creating connection
    $conn =new  mysqli_connect($servername, $username, $password, $dbname);

    if (mysqli_connect_error()){
        die('connect error('.mysqli_connect_errno().')'. mysqli_connect_error());
        } else {
            $SELECT ="SELECT user from users where user=? Limit 1";
            #$INSERT = "INSERT Into users (user, password)"##fejl

        }


    } else {
    echo "all field are required";
    die();

    }   

#$servername = "localhost";
#$username = "root";
#$password = "";
#$dbname = "Login";

#$conn =mysqli_connect($servername,$username, $password,$dbname);
#if(!$conn){
#    die("Fejl med forbindelsen" . mysqli_error());

#}
#else
#{
#    echo "Forbindelse";
#}
#$inputuser = $_POST["user"];									#låser det vi skriver i det første felt til user
#$inputpass = $_POST["pass"]; 									#låser det vi skriver i det første felt til pass
#$user = "root";
#$password = "";

#if ($inputuser =="Oskar" && $inputpass == "Roegild0110"){
#echo "Velkommen";
#header('Location: Brugerside.html');



#} else {
#echo "ikke velkommen";
#header('Location: Forkertlogin.html');

#}

#$connect = mysql_connect("localhost:8443", $user, $password);
#@mysql_select_db($login) or ("Database ikke fundet");

#$query = "SELECT * FROM 'users' WHERE 'user' = '$inputuser'";
#$querypass = "SELECT * FROM 'users' WHERE 'password' = '$inputpass'";

#echo $query;
#echo $querypass;


#mysql_close()


#$inputuser = $_POST["user"];									#låser det vi skriver i det første felt til user
#$inputpass = $_POST["pass"]; 									#låser det vi skriver i det første felt til pass
#$user = "root";
#$password = "";

#if ($inputuser =="Oskar" && $inputpass == "Roegild0110")

#$connect = mysql_connect("localhost:8443", $user, $password);
#@mysql_select_db($login) or ("Database ikke fundet");

#$query = "SELECT * FROM 'users' WHERE 'user' = '$inputuser'";
#$querypass = "SELECT * FROM 'users' WHERE 'password' = '$inputpass'";

#echo $query;
#echo $querypass;


#mysql_close()

?>