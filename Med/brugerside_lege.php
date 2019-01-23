<?php
include('session.php');
if(!isset($_SESSION['login_cpr'])){
    header("location:index.php");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Min Medicin Læge</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
}
 
/* Style the header */
.header {
    padding: 1px;
    text-align: center;
    background: #1eb457;
    color: rgb(255, 255, 255);
}

/* Increase the font size of the h1 element */
.header h1 {
    font-size: 30px;
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


    </div>
</form>
<div class="header">
  <h1>Min Medicin Læge</h1>
  <p>Din hjælp til at huske medicin</p>
</div>

<div class="navbar">
  <a href="#">Min Plan</a>
  <a href="#">Min Læge</a>
  <a href="log_ud.php"> Log ud</a> 


</div>

<b id="velkommen">Velkommen : <i><?php echo($_SESSION['login_cpr']); ?></i></b>
<br></br>

</body>
<label for="pillenavn"><b>Pillenavn</b></label>
<input type="pillenavn"  name="pillenavn" required>
<br></br>

<label for="antalP"><b>Antal Piller</b></label>
<input type="antalP"  name="antalP" required>
<br></br>

<label for="tidspunkt"><b>Tidspunkt(er)</b></label>
<input type="tidspunkt"  name="tidspunkt" required>
<br></br>


<label for="CPR"><b>CPR-nr</b></label>
<input type="CRP" name="CPR" required>
<br></br>

<form action="registrernyprofil.php" method="post">
  
 
      <button type="submit">Send</button>


</body>




</html>