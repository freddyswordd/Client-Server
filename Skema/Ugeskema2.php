<!DOCTYPE html>
<html>
<head>
<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto auto auto auto auto auto;
  grid-gap: 10px;
  background-color: #2196F3;
  padding: 10px;
}

.grid-container > div {
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
  <li>Lørdag</li>
  <li>Søndag</li>
</ul>

<div class="grid-container">
  <div class="item1">Morgen</div>
  <div class="item2">Ma Mor</div>
  <div class="item3">TI Dag</div>  
  <div class="item4">On Dag</div>
  <div class="item5">5</div>
  <div class="item6">6</div>
  <div class="item7">7</div>
  <div class="item8">8</div>  
  <div class="item9">Middag</div>
  <div class="item10">10</div>
  <div class="item11">11</div>
  <div class="item12">12</div>
  <div class="item13">13</div>
  <div class="item14">14</div>
  <div class="item15">15</div>
</div>

</body>
</html>
