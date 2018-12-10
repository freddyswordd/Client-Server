<?

$CVRnr = $_POST['CVRnr'];
$f_navn = $_POST['f_navn'];
$e_navn = $_POST['e_navn'];
$adr = $_POST['adr'];
$tlf_nr = $_POST['tlf_nr'];
$mail = $_POST['mail'];
$kode = $_POST['kode'];


if (!empty($CVRnr)|| !empty($f_navn)|| !empty($e_navn)|| 
     !empty($adr)|| !empty($tlf_nr)|| !empty($mail)|| !empty($kode)){
    $host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "Medicin";

    #laver forbindelsen
    $conn = new mysqli($host, $db_username, $db_password, $db_name);

    if (mysqli_connect_error()){
        die('connect error('.mysqli_connect_errno().')'. mysqli_connect_error());
    }else{
        $SELECT ="SELECT cvrnr from Legeprofiler where cvrnr=? Limit 1";
        $INSERT = "INSERT Into Legeprofiler (cvrnr, fornavn, efternavn, adresse, telefonnummer, mail, kodeord) values(?,?,?,?,?,?,?)";

        $stmt = $conn -> prepare($SELECT);
        $stmt->bind_param("i", $CVRnr);
        $stmt->execute();
        $stmt->bind_result($CVRnr);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0){
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("isssiss", $CVRnr, $f_navn, $e_navn, $adr, $tlf_nr, $mail, $kode);
            $stmt->execute();
            #echo "Data var indsat med succes";
            header('Location: legeside.php');
        }else{
            echo "cvrnummeret er allerede i brug";
        }
        $stmt->close();
        $conn->close();
    }  
}else{
     echo "Du skal udfylde alle felter";
     die();
}
?>


