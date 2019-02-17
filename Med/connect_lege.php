<?
session_start();
$error = '';

printf("test1");

if (isset($_POST['CVRnr'])){
    printf("test2");
    
    if (empty($_POST['CVRnr'])|| empty($_POST['kodeord'])){
        $error = "CPRnr eller kodeordet er forkert";
        printf("test3");
    
    }
    else
        {
            printf("test4");
        $error = "CPRnr eller kodeordet er forkert";
        $CVRnr =$_POST['CVRnr'];
        $kode = $_POST['kodeord'];
    
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
        $stmt -> bind_param("is", $CVRnr, $kode);
        $stmt -> execute();
        $stmt -> bind_result($CVRnr, $kode);
        $stmt -> store_result();

        

        if ($stmt ->fetch() )
        {   
            echo("stmt til fetch.");
            #$_SESSION['login_cvr']=$CPRnr;#starter sessionen
            header("location: brugerside_lege.php"); #sender dig til brugersiden
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