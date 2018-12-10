<?


include('connect.php');
if(isset($SESSION['login_cpr'])){
    header("location: brugerside.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Læge</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    

body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
}

.format{

    padding: 90px;
    float:right;
}
/* Style the header */
.header {
    padding: 60px;
    text-align: center;
    background: #1eb457;
    color: rgb(255, 255, 255);
}

/* Increase the font size of the h1 element */
.header h1 {
    font-size: 40px;
}

/* Style the top navigation bar */
.navbar {
    overflow: hidden;
    background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
    float: right;
}

/* Change color on hover */
.navbar a:hover {
    background-color: #ddd;
    color: black;
}
</style>
</head>
<body>

<div class="header">
  <h1>Læge</h1>
</div>

 
<div class="navbar">
  <a href="index.php">Hjem</a>
  <a href="#">Hjælp</a>
  <a href="nylege.html" class="right">Opret lægeprofil</a>

</div>


</body>

<form action="connect_lege.php" method="post">
  
    <div class="format">
    <br></br>
      <label for="cvrnr"><b>CVR-nr</b></label>
      <input type="cvrnr" placeholder="Skriv CVR-nr" name="CVRnr" required>
      <br></br>
  
      <label for="kode"><b>Kodeord</b></label>
      <input type="kode" placeholder="Skriv Kodeord" name="kode" required>
      <br></br>
      <input type="checkbox" checked="checked" name="Husk mig"> Husk mig
      <button type="submit">Log på</button>

    </div>
</form>

<form action="nylege.html" method="post">

    <div class="format">
        <label>
        <button type="nylege">Opret lægeprofil</button>
        </label>
    </div>
</form>


</form>




</html>
