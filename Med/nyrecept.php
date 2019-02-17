<?

$pillenavn = $_POST['pillenavn'];
$antalp = $_POST['antalP'];
$tid = $_POST['tidspunkt'];
$CPR = $_POST['CPR'];

if (!empty($pillenavn)|| !empty($antalp)|| !empty($tid)|| !empty($CRP) ){
    $host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "Medicin";

    #laver forbindelsen
    $conn = new mysqli($host, $db_username, $db_password, $db_name);

    if (mysqli_connect_error()){
        die('connect error('.mysqli_connect_errno().')'. mysqli_connect_error());
    }else{
        $SELECT ="SELECT pillenavn from recept where pillenavn=? Limit 1";
        $INSERT = "INSERT Into recept (pillenavn, antalP, tidspunkt, CPR) values(?,?,?,?)";

        $stmt = $conn -> prepare($SELECT);
        $stmt->bind_param("s", $pillenavn);
        $stmt->execute();
        $stmt->bind_result($pillenavn);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0){
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("siii",$pillenavn, $antalp, $tid, $CPR);
            $stmt->execute();
            #echo "Data var indsat med succes";
            header('Location: brugerside_lege.php');
        }else{
            echo "cprnummeret er allerede i brug";
        }
        $stmt->close();
        $conn->close();
    }  
}else{
     echo "Du skal udfylde alle felter";
     die();
}
?>