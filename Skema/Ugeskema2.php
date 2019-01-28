<!DOCTYPE html>
<html>
<head>
<style>

.row {

  display: grid;
  grid-template-columns: auto auto auto auto auto auto auto;
  grid-gap: 10px;
  background-color: #A9A9A9;
  padding: 10px;
  cursor: pointer;
}

.row > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px 0;
  font-size: 20px;
}


.month {
    padding: 70px 25px;
    width: 100%;
    background: #1abc9c;
    text-align: center;
}

.month ul {
    margin: 0;
    padding: 0;
}

.month ul li {
    color: white;
    font-size: 20px;
    text-transform: uppercase;
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

<h1>Min Medicin Kalender</h1>

<div class="month">      
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li>
      December<br>
      <span style="font-size:18px">2018</span>
    </li>
  </ul>
</div>


<div class="row">
  <div class="item1" onclick="openTab('I1');" style="background:red;">Mandag </div>
   <div id="I1" class="containerTab" style="display:none;background:red">
   <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
   <h2>Mandag</h2>
   <p>I dag skal du tage din medicin kl. 12:30
   Mvh Din Læge 
   </p>
</div>
  <div class="item1" onclick="openTab('I2');" style="background:red;">Tirsdag </div>
   <div id="I2" class="containerTab" style="display:none;background:red">
   <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
   <h2>Tirsdag</h2>
   <p>I dag skal du tage din medicin kl. 12:30
   Mvh Din Læge 
   </p>
</div>
  <div class="item1" onclick="openTab('I3');" style="background:red;">Onsdag </div>
  <div id="I3" class="containerTab" style="display:none;background:red">
   <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
   <h2>Onsdag</h2>
   <p>I dag skal du tage din medicin kl. 12:30
   Mvh Din Læge 
   </p>
</div>
  <div class="item1" onclick="openTab('I4');" style="background:red;">Torsdag </div>
  <div id="I4" class="containerTab" style="display:none;background:red">
   <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
   <h2>Torsdag</h2>
   <p>I dag skal du tage din medicin kl. 12:30
   Mvh Din Læge 
   </p>
</div>
  <div class="item1" onclick="openTab('I5');" style="background:red;">Fredag </div>
  <div id="I5" class="containerTab" style="display:none;background:red">
   <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
   <h2>Fredag</h2>
   <p>I dag skal du tage din medicin kl. 12:30
   Mvh Din Læge 
   </p>
</div>
  <div class="item1" onclick="openTab('I6');" style="background:red;">Lørdag </div>
  <div id="I6" class="containerTab" style="display:none;background:red">
   <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
   <h2>Lørdag</h2>
   <p>I dag skal du tage din medicin kl. 12:30
   Mvh Din Læge 
   </p>
</div>
  <div class="item1" onclick="openTab('I7');" style="background:red;">Søndag </div>
  <div id="I7" class="containerTab" style="display:none;background:red">
   <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
   <h2>Søndag</h2>
   <p>I dag skal du tage din medicin kl. 12:30

   Mvh Din Læge 
   </p>
</div>




</body>
</html>
