<!DOCTYPE html>
<html>
<head>

<style>
* {box-sizing: border-box;}
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

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
    width: 11%;
    color: #666;
    text-align: center;
}

.time {
    padding: 10px 0;
    background: #eee;
    margin: 0;
}

.time li {
    list-style-type: none;
    display: inline-block;
    width: 11%;
    text-align: center;
    margin-bottom: 5px;
    font-size:12px;
    color: #777;
}

.time li .active {
    padding: 5px;
    background: #1abc9c;
    color: white !important
}

/* Add media queries for smaller screens */
@media screen and (max-width:720px) {
    .weekdays li, .time li {width: 13.1%;}
}

@media screen and (max-width: 420px) {
    .weekdays li, .time li {width: 12.5%;}
    .time li .active {padding: 2px;}
}

@media screen and (max-width: 290px) {
    .weekdays li, .time li {width: 12.2%;}
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
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="time">  
  <li>Morgen</li>
  <li>Middag</li>
  <li>Aften</li>
  <li>Nat</li>
</ul>

</body>
</html>
