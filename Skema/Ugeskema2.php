<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

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

.weekdays {
    margin: 0;
    padding: 10px 0;
    background-color: #ddd;
}

.weekdays li {
    display: inline-block;
    width: 12.2%;
    color: #666;
    text-align: center;
    font-weight: bold;
}
.column {
  float: left;
  width: 33.33%;
  padding: 50px;
  text-align: center;
  font-size: 25px;
  cursor: pointer;
  color: white;
}

.containerTab {
  padding: 20px;
  color: white;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Closable button inside the image */
.closebtn {
  float: right;
  color: white;
  font-size: 35px;
  cursor: pointer;
}

/* Add media queries for smaller screens */
@media screen and (max-width:720px) {
    .weekdays li {width: 13.1%;}
}

@media screen and (max-width: 420px) {
    .weekdays li  {width: 12.5%;}
    .time li .active {padding: 2px;}
}

@media screen and (max-width: 290px) {
    .weekdays li {width: 12.2%;}
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


<ul class="weekdays">
  <li>Tid</li>   
  <li>Mandag</li>
  <li>Tirsdag</li>
  <li>Onsdag</li>
  <li>Torsdag</li>
  <li>Fredag</li>
  <li>Lordag</li>
  <li>Sondag</li>
</ul>

<div class="row">
  <div class="item1" onclick="openTab('I1');" atyle="background:red;">Morgen </div>
  
  <div class="item2"> 
   5-11 
   </div>
  <div class="item3">  5-11 </div>  
  <div class="item4">  5-11 </div>
  <div class="item5">  5-11 </div>
  <div class="item6">  5-11 </div>
  <div class="item7">  5-11 </div>
  <div class="item8">  5-11 </div>  
  <div class="item9">Middag</div>
  <div class="item10">  11-17 </div>
  <div class="item11">  11-17 </div>
  <div class="item12">  11-17 </div>
  <div class="item13">  11-17 </div>
  <div class="item14">  11-17 </div>
  <div class="item15">  11-17 </div>
  <div class="item15">  11-17 </div>
  <div class="item15">Aften</div>
  <div class="item15">  17-23 </div>
  <div class="item15">  17-23 </div>
  <div class="item15">  17-23 </div>
  <div class="item15">  17-23 </div>
  <div class="item15">  17-23 </div>
  <div class="item15">  17-23 </div>
  <div class="item15">  17-23 </div>
  <div class="item15">  Nat </div>
  <div class="item15">  23-5 </div>
  <div class="item15">  23-5 </div>
  <div class="item15">  23-5 </div>
  <div class="item15">  23-5 </div>
  <div class="item15">  23-5 </div>
  <div class="item15">  23-5 </div>
  <div class="item15">  23-5 </div>
</div>

<div id="I1" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>5-11</h2>
  <p>I dag skal du tage din medicin kl. 12:30
  Mvh Din Læge 
  </p>
</div>

</body>
</html>