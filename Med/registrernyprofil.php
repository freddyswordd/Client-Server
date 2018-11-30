<?

$CPRnr = $_POST['CPRnr'];
$f_navn = $_POST['f_navn'];
$e_navn = $_POST['e_navn'];
$ken = $_POST['ken'];
$vegt = $_POST['vegt'];
$adr = $_POST['adr'];
$hus_nr = $_POST['hus_nr'];
$tlf_nr = $_POST['tlf_nr'];
$mail = $_POST['mail'];


if (!empty($CPRnr)|| !empty($f_navn)|| !empty($e_navn)|| !empty($ken)|| !empty($vegt)||
     !empty($adr)|| !empty($hus_nr)|| !empty($tlf_nr)|| !empty($mail)){
    $host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "Medicin";

    #laver forbindelsen
    $conn = new mysqli($host, $db_username, $db_password, $db_name);

    if (mysqli_connect_error()){
        die('connect error('.mysqli_connect_errno().')'. mysqli_connect_error());
    }else{
        $SELECT ="SELECT cprnr from profiler where cprnr=? Limit 1";
        $INSERT = "INSERT Into profiler (cprnr, fornavn, efternavn, ken, vegt, adresse, husnummer, telefonnummer, mail) values(?,?,?,?,?,?,?,?,?)";

        $stmt = $conn -> prepare($SELECT);
        $stmt->bind_param("i", $CPRnr);
        $stmt->execute();
        $stmt->bind_result($CPRnr);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0){
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("isssisiis",$CPRnr, $f_navn, $e_navn, $ken, $vegt, $adr, $hus_nr, $tlf_nr, $mail);
            $stmt->execute();
            #echo "Data var indsat med succes";
            header('Location: Brugerside.html');
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



