<?


include('connect.php');
if(isset($SESSION['login_cpr'])){
    header("location: brugerside.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Min Medicin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    

body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
}

.format{
    position: relative;
    left : 0px;
    top : 0px;
    z-index : 10;
}

.formatny{
    position: relative;
    left : 983px;
    top : 40px;
    z-index : 10;
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

/* makes a grid */
.grid-container {
  display: grid;
  grid: 150px / auto auto;
  grid-gap: 10px;

}

</style>
</head>
<body>

<div class="header">
  <h1>Min Medicin</h1>
  <p>Din hjælp til at huske medicin</p>
</div>

<div class="navbar">
  <a href="#">Hjem</a>
  <a href="#">Om os</a>
  <a href="#">Hjælp</a>
  <a href="lege_login.php" class="right">Ny bruger</a>
  <a href="nybruger.html" class="right">Log ind</a>

</div>


</body>

<form action="connect.php" method="post">
  <div class="grid-container">
        <img src="billeder/glade.jpg"> 
  
    <div class="format">
    <br></br>
      <label for="cprnr"><b>CPR-nr</b></label>
      <input type="cprnr" placeholder="Skriv CPR-nr" name="CPRnr" required>
      <br></br>
  
      <label for="kode"><b>Kodeord</b></label>
      <input type="kode" placeholder="Skriv Kodeord" name="kode" required>
      <br></br>
      <input type="checkbox" checked="checked" name="Husk mig"> Husk mig
      <button type="submit">Log på</button>
      <br></br> 

      <label>
        <a name="register"> eller register dig som ny bruger </a>
      </label>

      
    </div>
</div>
</form>

<form action="nybruger.html" method="post">

    <div class="formatny">
        <label>
        <button type="newuser">Opret profil</button>
        </label>
    </div>
</form>



</html>
