<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
<style>
  body{
    background: -webkit-linear-gradient(left, #a6a6a6, #25c264);
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
  margin-left: auto;
  margin-right: auto;
  background: white;
  border: 3px solid black;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}
h2{
  text-align: center;
  color: #ffffff;
  margin-top: 80px;
}
h3{
    color: #ffffff;

  margin-left: 10%;
}
h4{
    color: #ffffff;
    margin-left: 10%;
}
#days{
  color: #4a4a4a;
}
</style>
</head>
<body>
<!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/home">Al-Mishkah<span></span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="studentclasses.html">Classes</a></li>
          <li><a href="#" data-target="#login" data-toggle="modal">Sign in</a></li>
          <li><a href="Prof.php" >Profile</a></li>
          <li class="btn-trial"><a href="#" data-target="#Register" data-toggle="modal">Register</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->
<h2>Available Classes</h2>
<h3>1st Year</h3>

<h4 for="days">Choose the day:
<select id="days">
  <option value="volvo">Saturday</option>
  <option value="saab">Sunday</option>
  <option value="opel">Monday</option>
  <option value="audi">Tuesday</option>
  <option value="audi">Wednesday</option>
  <option value="audi">Thursday</option>
  <option value="audi">Friday</option>
</select>
</h4>

<table style="float: center;">
  <tr>
    <th>Day</th>
    <th>Time</th>
    <th>Capacity</th>
    <th>Reservation</th>
  </tr>
  <tr>
    <td>Saturday</td>
    <td>2:00 - 4:00PM</td>
    <td>5/11</td>
    <th><a href='#'?id=$id'>Reserve</a></th>
  </tr>
  <tr>
    <td>Sunday</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
    <th><a href='#'?id=$id'>Reserve</a></th>
  </tr>
  <tr>
    <td>Monday</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
    <th><a href='#'?id=$id'>Reserve</a></th>
  </tr>
  <tr>
    <td>Tuesday</td>
    <td>Helen Bennett</td>
    <td>UK</td>
    <th><a href='#'?id=$id'>Reserve</a></th>
  </tr>
  <tr>
    <td>Wednesday</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
    <th><a href='#'?id=$id'>Reserve</a></th>
  </tr>
  <tr>
    <td>Thursday</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
    <th><a href='#'?id=$id'>Reserve</a></th>
  </tr>
  <tr>
    <td>Friday</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
    <th><a href='#'?id=$id'>Reserve</a></th>
  </tr>
</table>

<h3>2nd Year</h3>
<h4 for="days">Choose the day:
<select id="days">
  <option value="volvo">Saturday</option>
  <option value="saab">Sunday</option>
  <option value="opel">Monday</option>
  <option value="audi">Tuesday</option>
</select>
</h4>
<table style="float: center;">
  <tr>
    <th>Day</th>
    <th>Time</th>
    <th>Capacity</th>
    <th>Reservation</th>
  </tr>
  <tr>
    <td>Saturday</td>
    <td>2:00 - 4:00PM</td>
    <td>5/11</td>
    <th><a href='#'?id=$id'>Reserve</a></th>
  </tr>
  <tr >
    <td>Sunday</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
    <th><a href='#'?id=$id'>Reserve</a></th>
  </tr>
  <tr>
    <td>Monday</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
    <th><a href='#'?id=$id'>Reserve</a></th>
  </tr>
  <tr>
    <td>Tuesday</td>
    <td>Helen Bennett</td>
    <td>UK</td>
    <th><a href='#'?id=$id'>Reserve</a></th>
  </tr>
  <tr>
    <td>Wednesday</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
    <th><a href='#'?id=$id'>Reserve</a></th>
  </tr>
  <tr>
    <td>Thursday</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
    <th><a href='#'?id=$id'>Reserve</a></th>
  </tr>
  <tr>
    <td>Friday</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
    <th><a href='#'?id=$id'>Reserve</a></th>
  </tr>
</table>

<h3>3rd Year</h3>
<h4 for="days">Choose the day:
<select id="days">
  <option value="volvo">Saturday</option>
  <option value="saab">Sunday</option>
  <option value="opel">Monday</option>
  <option value="audi">Tuesday</option>
</select>
</h4>
<table style="float: center;
  margin-bottom: 80px;">
  <tr>
    <th>Day</th>
    <th>Time</th>
    <th>Capacity</th>
    <th>Reservation</th>
  </tr>
  <tr>
    <td>Saturday</td>
    <td>2:00 - 4:00PM</td>
    <td>5/11</td>
    <th><a href='#'?id=$id'>Reserve</a></th>
  </tr>
  <tr >
    <td>Sunday</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
    <th><a href='#'?id=$id'>Reserve</a></th>
  </tr>
  <tr>
    <td>Monday</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
    <th><a href='#'?id=$id'>Reserve</a></th>
  </tr>
  <tr>
    <td>Tuesday</td>
    <td>Helen Bennett</td>
    <td>UK</td>
    <th><a href='#'?id=$id'>Reserve</a></th>
  </tr>
  <tr>
    <td>Wednesday</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
    <th><a href='#'?id=$id'>Reserve</a></th>
  </tr>
  <tr>
    <td>Thursday</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
    <th><a href='#'?id=$id'>Reserve</a></th>
  </tr>
  <tr>
    <td>Friday</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
    <th><a href='#'?id=$id'>Reserve</a></th>
  </tr>

</table>
</body>
</html>
