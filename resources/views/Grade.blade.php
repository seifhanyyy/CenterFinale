<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/Prof.css">
</head>

<body>
<div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="DeebKanhena/{{Auth::user()->img}}" alt="" />
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="col-md-6">
                    <div class="profile-head">

                        <h5>
                            {{Auth::user()->name}}
                        </h5>
                        <h6>
                            Student
                        </h6>


                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="profile-tab" data-toggle="tab" role="tab" aria-selected="true" href="/Grade">Grade</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="home-tab" data-toggle="tab" href="/profile" role="tab" aria-controls="home" aria-selected="false">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php

            use Illuminate\Support\Facades\Auth;
            use Illuminate\Support\Facades\DB;


            echo "<table class = 'table'>
<tr>
<th>Course Id</th>
<th>Quiz week</th>
<th>Grade</th>
</tr>";
            foreach ($grades as $grade) {
                if ($grade->sid == Auth::user()->id) {
                    echo "<tr>";
                    echo "<td>" . $grade->courseId . "</td>";
                    echo "<td>" . $grade->quizweek . "</td>";
                    echo "<td>" . $grade->grade . "</td>";
                    echo "</tr>";
                }
            }
            echo "</table>";
            $grades = DB::select('select * from grades');
            ['grades' => $grades];
