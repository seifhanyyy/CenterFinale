<!DOCTYPE html>
<html>

<body>

    <h2>Edit This Class</h2>
    <?php

    use Illuminate\Support\Facades\DB;

    //use Illuminate\Support\Facades\DB;
    $class = DB::select("Select * from classes where id = $classId");
    $teachers = DB::select("Select name from users where type = '2'");
    $selected_val = '';

    foreach ($class as $i) {
        echo "<form action='/ramez' method='get'";

        echo "<label for='day'>Day:</label><br>"; //Day
        echo "<input type='text' id='day' name='day' value='$i->day'><br>";

        echo "<label for='subject'>Subject:</label><br>"; //Subject
        echo "<input type='text' id='subject' name='subject' value='$i->subject'><br><br>";

        echo "<label for='teacher[]'>Teacher:</label><br>"; //Teacher
        echo "";

        echo "<select name='teacher'>";
        foreach ($teachers as $teacher) {
            echo "<option value='0' selected disabled hidden>$i->teacher</option>";
            echo "<option id='teacher' value='$teacher->name'>$teacher->name</option>";
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