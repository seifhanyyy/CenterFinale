
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
  <br>
  <br>
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
    echo "<select name='subject'>";
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
   
    $start = strtotime('12:00 AM');
    $end   = strtotime('11:59 PM');

echo'<select style="width:85px;" name="starts" id="select1">';
for($hours=0; $hours<24; $hours++) {// the interval for hours is '1'
for($mins=0; $mins<60; $mins+=30) // the interval for mins is '30'
    echo '<option>'.str_pad($hours,2,'0',STR_PAD_LEFT).':'
                   .str_pad($mins,2,'0',STR_PAD_LEFT).'</option>';
     } 
echo"</select>";
  echo"<br>";
    echo "<label for='ends'>Ends at:</label><br>"; //Ends
    echo'<select style="width:85px;" name="ends" id="select1">';
    for($hours=0; $hours<24; $hours++) {// the interval for hours is '1'
    for($mins=0; $mins<60; $mins+=30) // the interval for mins is '30'
        echo '<option>'.str_pad($hours,2,'0',STR_PAD_LEFT).':'
                       .str_pad($mins,2,'0',STR_PAD_LEFT).'</option>';
         } 
    echo"</select>";
  echo"<br>";

    echo "<label for='capacity'>Capacity:</label><br>"; //Capacity
    echo "<select name='capacity'>";
    for($cap=1;$cap<=50;$cap++)
    {
      echo"<option>".str_pad($cap,1,'0',STR_PAD_LEFT)."</option>";
    }

  echo"</select>";
  echo"<br>";
    echo "<label for='year'>Educational Year:</label><br>"; //Year
    echo "<select name='year'>";
    echo"<option value='1'>1</option>";
    echo"<option value='2'>2</option>";
    echo"<option value='3'>3</option>";
  echo"</select>";
  echo"<br>";
    echo "<label for='gender'>Gender:</label><br>"; //Gender
    echo "<select name='gender'>";
    echo"<option value='male'>male</option>";
    echo"<option value='female'>female</option>";
  echo"</select>";
  echo"<br>";

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
