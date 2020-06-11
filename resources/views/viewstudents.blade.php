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
        body {
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

        td,
        th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }

        h2 {
            text-align: center;
            color: #ffffff;
            margin-top: 80px;
        }

        h3 {
            color: #ffffff;

            margin-left: 10%;
        }

        h4 {
            color: #ffffff;
            margin-left: 10%;
        }

        #days {
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
                <a class="navbar-brand" href="/Admin">Al-Mishkah<span></span></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/studentclasses">Classes</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--/ Navigation bar-->
    <h2>Students That  In Course</h2>
    </script>
    <form action="#" method="get">
        <select name="days">
            <option value="Saturday">Saturday</option>
            <option value="Sunday">Sunday</option>
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
        </select>
        <input type="submit" name="submit" value="Submit">
        <?php
$selected_val = '';
if (isset($_GET['submit'])) {
    $selected_val = $_GET['days']; // Storing Selected Value In Variable
}
?>
    </form>
    <br>
    <table style="float: center;">
        <tr>
            <th>Student Name</th>
            <th>Profiles</th>
        </tr>
<?php
use Illuminate\Support\Facades\DB;

$users = DB::select("select * from users INNER JOIN studentandclasses on users.id = studentandclasses.studentId where studentandclasses.classId = $classId");
foreach ($users as $user) {
    echo "<tr>";
    echo "<td>$user->name $user->lastName</td>";
    echo"<form action='/SelectedProfile' method='get'>"; //Edit
    echo"<input type = 'hidden' name = 'userId' value = '$user->id'/>";
    echo"<td><input type='submit' value='View' name='view'/></td>";
    echo"</form>";
    echo "<tr>";
}
?>
 </table>
</body>

</html>