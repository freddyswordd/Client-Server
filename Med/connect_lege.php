<?
session_start();
$error = '';



if (isset($_POST['CVRnr'])){
    
    if (empty($_POST['CVRnr'])|| empty($_POST['kode'])){
        $error = "CPRnr eller kodeordet er forkert";
        
    
    }
    else
        {
        
        $CVRnr =$_POST['CVRnr'];
        $kode = $_POST['kode'];
    
        $host = "localhost";
        $db_username = "root";
        $db_password = "";
        $db_name = "Medicin";

        #laver forbindelsen
        $conn = new mysqli($host, $db_username, $db_password, $db_name);#prøv at fjern new*
    
        #tjekker opmod databasen
        $query = "SELECT cvrnr, kodeord FROM Legeprofiler WHERE cvrnr=$CVRnr AND kodeord=$kode LIMIT 1";

        #sikkerhed
        $stmt = $conn->prepare($query);
        $stmt -> bind_param("is", $CVRnr, $kodeord);
        $stmt -> execute();
        $stmt -> bind_result($CVRnr, $kodeord);
        $stmt -> store_result();

        

        if ($stmt ->fetch() )
        {   
            echo("stmt til fetch.");
            $_SESSION['login_cvr']=$CPRnr;#starter sessionen
            header("location: brugerside.php"); #sender dig til brugersiden
        }
        else
        {
            echo("stmt til fetch11.");
            $error ="cprnr eller kodeord er forkert, tjek for slåfejl";
        }
    mysqli_close($conn);
    }

}



?>