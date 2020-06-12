
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
          <li class="btn-trial"><a href="/adminclasses">Edit Classes</a></li>
          <li class="btn-trial"><a href="/addclass">Add Classes</a></li>
          <li class="btn-trial"><a href="/AddTeacher">Add Teacher</a></li>
          <li class="btn-trial"><a href="/Transfer">Transfer students</a></li>
          <li class="btn-trial"><a href="/logout">Sign out</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <!--/ Navigation bar-->
<h2>Edit This Class</h2>
<?php
use Illuminate\Support\Facades\DB;

//use Illuminate\Support\Facades\DB;
$class = DB::select("Select * from classes where id = $classId");
$teachers = DB::select("Select * from users where type = '2'");
$selected_val = '';

foreach ($class as $i) {
    echo "<form action='/ramez' method='get'";

    echo "<label for='day'>Day:</label><br>"; //Day
    echo "<input type='text' name='day' value='$i->day'><br>";

    echo "<label for='subject'>Subject:</label><br>"; //Subject
    echo "<input type='text' id='subject' name='subject' value='$i->subject'><br><br>";

    echo "<label for='teacher[]'>Teacher:</label><br>"; //Teacher
    echo "";

    echo "<select name='teacher'>";
    foreach ($teachers as $teacher) {
        echo "<option value='0' selected disabled hidden>$i->teacher</option>";
        echo "<option id='teacher' value='$teacher->name $teacher->lastName'>$teacher->name $teacher->lastName</option>";
    }

    echo "</select>";

    echo "<br>";

    echo "<label for='starts'>Starts at:</label><br>"; //Starts
    echo "<input type='text' id='starts' name='starts' value='$i->starts'><br><br>";

    echo "<label for='ends'>Ends at:</label><br>"; //Ends
    echo "<input type='text' id='ends' name='ends' value='$i->ends'><br><br>";

    echo "<label for='capacity'>Capacity:</label><br>"; //Capacity
    echo "<input type='text' id='capacity' name='capacity' value='$i->capacity'><br><br>";

    echo "<label for='year'>Educational Year:</label><br>"; //Year
    echo "<input type='text' id='year' name='year' value='$i->year'><br><br>";

    echo "<label for='gender'>Gender:</label><br>"; //Gender
    echo "<input type='text' id='gender' name='gender' value='$i->gender'><br><br>";

    echo "<input type = 'hidden' name = 'classId' value = '$i->id'/>"; //Hidden ID

    echo "<input type='submit' value='Submit'>";
    echo "</form>";

    // if (isset($_GET['submit'])) {
    //     $selected_val = $_GET['teachers']; // Storing Selected Value In Variable
    // echo $selected_val;
}

?>
</body>
</html>
