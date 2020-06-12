<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
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
        <a class="navbar-brand" href="/Admin">Al-Mishkah<span></span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li class="btn-trial"><a href="/addclass">Add Classes</a></li>
          <li class="btn-trial"><a href="/AddTeacher">Add Teacher</a></li>
          <li class="btn-trial"><a href="/Transfer">Transfer students</a></li>
          <li class="btn-trial"><a href="/logout">Sign out</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->

<h2>Edit This Class</h2>
<?php
$teachers = DB::select("Select * from users where type = '2'");
$selected_val = '';

    echo "<form action='/seif' method='get'";

    echo "<br>";
    echo "<br>";


    echo "<label for='day'>Day:</label><br>"; //Day
    echo "<select name='day'>";
      echo"<option value='Saturday'>Saturday</option>";
      echo"<option value='Sunday'>Sunday</option>";
      echo"<option value='Monday'>Monday</option>";
      echo"<option value='Tuesday'>Tuesday</option>";
      echo"<option value='Wednesday'>Wednesday</option>";
      echo"<option value='Thursday'>Thursday</option>";
      echo"<option value='Friday'>Friday</option>";    
      echo "</select>";

    echo "<br>";

    echo "<label for='subject'>Subject:</label><br>"; //Subject
    echo "<select name='day'>";
      echo"<option value='English'>English</option>";
      echo"<option value='Math'>Math</option>";
      echo"<option value='Arabic'>Arabic</option>";
    echo"</select>";
    echo"<br>";
    echo "<label for='teacher'>Teacher:</label><br>"; //Teacher
    echo "<select name='teacher'>";
    foreach ($teachers as $teacher) {
        echo "<option id='teacher' value='$teacher->name $teacher->lastName'>$teacher->name $teacher->lastName</option>";
    }

    echo "</select>";

    echo "<br>";

    echo "<label for='starts'>Starts at:</label><br>"; //Starts
    echo "<input type='text' id='starts' name='starts' value=''><br><br>";

    echo "<label for='ends'>Ends at:</label><br>"; //Ends
    echo "<input type='text' id='ends' name='ends' value=''><br><br>";

    echo "<label for='capacity'>Capacity:</label><br>"; //Capacity
    echo "<input type='text' id='capacity' name='capacity' value=''><br><br>";

    echo "<label for='year'>Educational Year:</label><br>"; //Year
    echo "<input type='text' id='year' name='year' value=''><br><br>";

    echo "<label for='gender'>Gender:</label><br>"; //Gender
    echo "<input type='text' id='gender' name='gender' value=''><br><br>";

    echo "<input type='submit' value='Submit'>";
    echo "</form>";

    // if (isset($_GET['submit'])) {
    //     $selected_val = $_GET['teachers']; // Storing Selected Value In Variable
    // echo $selected_val;
    // }
?>
</body>
</html>
