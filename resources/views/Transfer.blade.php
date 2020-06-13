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
    <h2>Transfer Students</h2>
    </script>
    <table style="float: center;">
        <tr>
            <th>Student Name</th>
            <th>Course Id</th>
            <th>Day</th>
            <th>Starts</th>
            <th>Ends</th>
            <th>New Course Id</th>
            <th>Transfer</th>
        </tr>
        <?php

        use Illuminate\Support\Facades\DB;

        $users = DB::select("select *,users.id as ID from users INNER JOIN studentandclasses on users.id = studentandclasses.studentId INNER JOIN classes on studentandclasses.classId=classes.Id");
        foreach ($users as $user) {
            echo "<tr>";
            echo "<td>$user->name</td>";
            echo "<td>$user->classId</td>";
            echo "<td>$user->day</td>";
            echo "<td>$user->starts</td>";
            echo "<td>$user->ends</td>";
            echo "$user->ID";
            echo "<form action='/TransferStudent' method='get'>";
            echo "<td><input type = 'textfield' name = 'newclass' value = ''/></td>";
            echo "<input type = 'hidden' name = 'studentId' value = '$user->ID'/>";
            echo "<input type = 'hidden' name = 'classId' value = '$user->classId'/>";
            echo "<input type = 'hidden' name = 'capacity' value '$user->capacity'/>";
            echo "<th><input type='submit' value='Transfer' name='Transfer'/></th>";
            echo "</form>";
            echo "<tr>";
        }
        ?>
    </table>
</body>

</html>
