<!DOCTYPE html>
<html>
<body>

<h2>Edit This Class</h2>
<?php
$selected_val = '';

    echo "<form action='/seif' method='get'";

    echo "<label for='day'>Day:</label><br>"; //Day
    echo "<input type='text' id='day' name='day' value='Day'><br>";

    echo "<label for='subject'>Subject:</label><br>"; //Subject
    echo "<input type='text' id='subject' name='subject' value='Subject'><br><br>";

    echo "<label for='teacher'>Teacher:</label><br>"; //Teacher
    echo "<input type='text' id='teacher' name='teacher' value='Teacher Name'><br><br>";

    

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
