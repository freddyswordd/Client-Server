<?php
include('session.php');
if(!isset($_SESSION['login_cpr'])){
    header("location:index.php");

}
############recept##############################################

$host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "Medicin";

// laver forbindelse
$conn = new mysqli($host, $db_username, $db_password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM recept WHERE CPR=".$_SESSION['login_cpr'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $q=$row['pillenavn'];
        $tp=$row["tidspunkt"];
        $at=$row["antalP"];
        
    }
} else {
    echo "0 results";
}


##########Billeder##############################################

$bill="SELECT * FROM img WHERE name='ritalin'";
$resultb = $conn->query($bill);

while ($data = $resultb ->fetch_assoc()){
    echo "<h2>{$data['name']}</h2>";
    echo "<img src='{$data['img_dir']}'>";
    $pp=$data['name'];
    $ppp=$data['img_dir'];
}

$conn->close();



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
/************************** SKEMA **********************************************/
#cbgrid {
  display: grid;
  grid-template-areas: "left right";
  width: 150px;
}
input[type=checkbox] {
  grid-area: right;
}
label {
  grid-area: left;
}

.row {
  display: grid;
  grid-template-columns: auto auto auto auto auto auto auto;
  grid-gap: 10px;
  background-color: #1eb457;
  padding: 10px;
  cursor: pointer;
  color: white;
}

.row > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px;
  font-size: 20px;
}


.month {
    padding: 70px 0px;
    width: 100%;
    background: #1eb457;
    text-align: center;
}

.month ul {
    margin: 0;
    padding: 0;
}

.month ul li {
    color: white;
    font-size: 20px;
    letter-spacing: 3px;
}

.month .prev {
    float: left;
    padding-top: 10px;
}

.month .next {
    float: right;
    padding-top: 10px;
}

.containerTab {
  padding: 20px;
  color: white;
}

.closebtn {
  float: right;
  color: white;
  font-size: 100px;
  cursor: pointer;
}


</style>
</head>
<body>


<div class="navbar">
  <a href="#">Min Plan</a>
  <a href="#">Min Læge</a>
  <a href="log_ud.php"> Log ud</a> 


</div>


<div class="month">      
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li>
      Februar<br>
      2019
    </li>
  </ul>
</div>


<div class="row">
  <div id="T1" class="item1" onclick="openTab('I1');" style="background:red;">Mandag </div>
  <div id="T2" class="item1" onclick="openTab('I2');" style="background:red;">Tirsdag </div>
  <div id="T3" class="item1" onclick="openTab('I3');" style="background:red;">Onsdag </div>
  <div id="T4" class="item1" onclick="openTab('I4');" style="background:red;">Torsdag </div>
  <div id="T5" class="item1" onclick="openTab('I5');" style="background:red;">Fredag </div>
  <div id="T6" class="item1" onclick="openTab('I6');" style="background:red;">Lørdag </div>
  <div id="T7" class="item1" onclick="openTab('I7');" style="background:red;">Søndag </div>
</div>

<div id="I1" class="containerTab" style="display:none;background:red">
<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
<h2>Mandag</h2>
<p>I dag skal du indtage, <?php echo "$at";?> tabletter <?php echo "$q";?>  klokken <?php echo "$tp";?>
<br>

<div>
<center>
<?php 
    echo "<h2>$pp</h2>";
    echo "<img src='{$ppp}'>";    
  ?>

 
</div>
<div>
  <input type="checkbox"  id="myCheck1" onclick="myFunction1()">
</div>


<script>
function myFunction1() {
  var checkBox = document.getElementById("myCheck1");
  var T1 = document.getElementById("T1");
   if (checkBox.checked == true){
    T1.style.background="green";
  } else {
    T1.style.background="red";
   }
  }
</script>



</p>
</div>

<div id="I2" class="containerTab" style="display:none;background:red">
<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
<h2>Tirsdag</h2>
<p>I dag skal du indtage, <?php echo "$at";?> tabletter <?php echo "$q";?>  klokken <?php echo "$tp";?>
<br>

<div >
<center>
<?php 
    echo "<h2>$pp</h2>";
    echo "<img src='{$ppp}'>";    
  ?>
 
</div>
<div>
  <input type="checkbox" id="myCheck2" onclick="myFunction2()">
</div>

<script>
function myFunction2() {
  var checkBox = document.getElementById("myCheck2");
  var T2 = document.getElementById("T2");
   if (checkBox.checked == true){
    T2.style.background="green";
  } else {
    T2.style.background="red";
   }
  }
</script>

</p>
</div>


<div id="I3" class="containerTab" style="display:none;background:red">
<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
<h2>Onsdag</h2>
<p>I dag skal du indtage, <?php echo "$at";?> tabletter <?php echo "$q";?>  klokken <?php echo "$tp";?>
<br>

<div>
<center>
<?php 
    echo "<h2>$pp</h2>";
    echo "<img src='{$ppp}'>";    
  ?>

 
</div>
<div>
  <input type="checkbox" id="myCheck3" onclick="myFunction3()">
</div>

<script>
function myFunction3() {
  var checkBox = document.getElementById("myCheck3");
  var T3 = document.getElementById("T3");
   if (checkBox.checked == true){
    T3.style.background="green";
  } else {
    T3.style.background="red";
   }
  }
</script>

</p>
</div>

<div id="I4" class="containerTab" style="display:none;background:red">
<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
<h2>Torsdag</h2>
<p>I dag skal du indtage, <?php echo "$at";?> tabletter <?php echo "$q";?>  klokken <?php echo "$tp";?>
<br>

<div>
<center>
<?php 
    echo "<h2>$pp</h2>";
    echo "<img src='{$ppp}'>";    
  ?>
 
</div>
<div>
  <input type="checkbox" id="myCheck4" onclick="myFunction4()">
</div>

<script>
function myFunction4() {
  var checkBox = document.getElementById("myCheck4");
  var T4 = document.getElementById("T4");
   if (checkBox.checked == true){
    T4.style.background="green";
  } else {
    T4.style.background="red";
   }
  }
</script>


</p>
</div>

<div id="I5" class="containerTab" style="display:none;background:red">
<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
<h2>Fredag</h2>
<p>I dag skal du indtage, <?php echo "$at";?> tabletter <?php echo "$q";?>  klokken <?php echo "$tp";?>
<br>

<div>
<center>
<?php 
    echo "<h2>$pp</h2>";
    echo "<img src='{$ppp}'>";    
  ?>

 
</div>
<div>
  <input type="checkbox" id="myCheck5" onclick="myFunction5()">
</div>

<script>
function myFunction5() {
  var checkBox = document.getElementById("myCheck5");
  var T5 = document.getElementById("T5");
   if (checkBox.checked == true){
    T5.style.background="green";
  } else {
    T5.style.background="red";
   }
  }
</script>


</p>
</div>

<div id="I6" class="containerTab" style="display:none;background:red">
<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
<h2>Lørdag</h2>
<p>I dag skal du indtage, <?php echo "$at";?> tabletter <?php echo "$q";?>  klokken <?php echo "$tp";?>
<br>

<div>
<center>
<?php 
    echo "<h2>$pp</h2>";
    echo "<img src='{$ppp}'>";    
  ?>

 
</div>
<div>
  <input type="checkbox" id="myCheck6" onclick="myFunction6()">
</div>

<script>
function myFunction6() {
  var checkBox = document.getElementById("myCheck6");
  var T6 = document.getElementById("T6");
   if (checkBox.checked == true){
    T6.style.background="green";
  } else {
    T6.style.background="red";
   }
  }
</script>

</p>
</div>

<div id="I7" class="containerTab" style="display:none;background:red">
<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
<h2>Søndag</h2>
<p>I dag skal du indtage, <?php echo "$at";?> tabletter <?php echo "$q";?>  klokken <?php echo "$tp";?>
<br>

<div >
<center>
<?php 
    echo "<h2>$pp</h2>";
    echo "<img src='{$ppp}'>";    
  ?>

 
</div>
<div>
  <input type="checkbox" id="myCheck7" onclick="myFunction7()"> 
</div>
<script>
function myFunction7() {
  var checkBox = document.getElementById("myCheck7");
  var T7 = document.getElementById("T7");
   if (checkBox.checked == true){
    T7.style.background="green";
  } else {
    T7.style.background="red";
   }
  }
</script>
</p>
</div>

<script>
function openTab(tabName) {
  var i, x;
  x = document.getElementsByClassName("containerTab");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}
</script>


<b id="velkommen">Velkommen : <i><?php echo($_SESSION['login_cpr']); ?></i></b>



</body>




</html>
