<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>



    <link rel="stylesheet" href="css/Prof.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


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
                <a class="navbar-brand" href="/Teacher">Al-Mishkah<span></span></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="btn-trial"><a href="/UploadGrade">Upload Grades</a></li>
                    <li class="btn-trial"><a href="/teacherclasses">View Classes</a></li>
                    <!-- <li class="btn-trial"><a href="/profile">Profile</a></li> -->
                    <li class="btn-trial"><a href="https://drive.google.com/open?id=1SGmnWhhbDm5lb2vsyP5z-sfcTxZDi-O1">Course Mats</a></li>

                    <li class="btn-trial"><a href="/logout">Sign out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <br> <br>

    <!--/ Navigation bar-->
    <div class="container emp-profile">
        <form method="post" action="{{ route('seifouzaelrashash') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="DeebKanhena/<?php foreach ($users as $user) {
                                                    echo $user->img;
                                                } ?>" alt="">

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="row">
                            <div class="col-md-6">

                                <label>User Id</label>
                            </div>
                            <div class="col-md-6">
                                <p> <?php foreach ($users as $user) {
                                        echo $user->id;
                                    } ?> </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                            </div>
                            <div class="col-md-6">
                                <p> <?php foreach ($users as $user) {
                                        echo $user->name . " " . $user->lastName;
                                    } ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p> <?php foreach ($users as $user) {
                                        echo $user->email;
                                    } ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email Parent</label>
                            </div>
                            <div class="col-md-6">
                                <p> <?php foreach ($users as $user) {
                                        echo $user->parentEmail;
                                    } ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Phone</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php foreach ($users as $user) {
                                        echo $user->phonenum;
                                    } ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Parent Phone number</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php foreach ($users as $user) {
                                        echo $user->parentnum;
                                    } ?></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <?php

            use Illuminate\Support\Facades\Auth;

            echo "<table class = 'table'>
    <tr>
    <th>Course Id</th>
    <th>Quiz Week</th>
    <th>Grade</th>
    </tr>";
            foreach ($grades as $grade) {
                echo "<tr>";
                echo "<td>" . $grade->courseId . "</td>";
                echo "<td>" . $grade->quizweek . "</td>";
                echo "<td>" . $grade->grade . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            ?>
    </div>

    </form>
    </div>

</body>

</html>
