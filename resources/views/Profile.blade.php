<!------ Include the above in your HEAD tag ---------->
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
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <?php

                use Illuminate\Support\Facades\Auth;

                if (Auth::user()->type == '3') {
                    echo '  <a style=color:Black;font-size:40px; class="navbar-brand" href="/Student">Al-Mishkah<span></span></a>';
                } else {
                    echo '  <a style=color:Black;font-size:40px; class="navbar-brand" href="/Teacher">Al-Mishkah<span></span></a>';
                }
                ?>
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
    <div class="container emp-profile">
        <form method="post" action="{{ route('seifouzaelrashash') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="DeebKanhena/{{Auth::user()->img}}" alt="">
                        <div class="file btn btn-lg btn-primary">
                            Change Photo
                            <input type="file" name="img">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">

                        <h5>
                            {{Auth::user()->name}}
                            {{Auth::user()->lastName}}
                        </h5>

                        <?php


                        if (Auth::user()->type == '3') {
                            echo "<h6>Student</h6>";
                        } else {
                            echo "<h6>Teacher</h6>";
                        }
                        ?>



                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                            <?php
                            if (Auth::user()->type == '3') {
                                echo '
                         
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="Grade.php">Grade</a>
                            </li>
                            ';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile">
                    <br>
                    <br>
                    <a href="/send-sms"><input class="profile-edit-btn" value="Verify Mobile"></a>

                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <?php


                    if (Auth::user()->type == '2') {
                        echo 'no hobbies for u teacher';
                    } else {
                        echo '<div class="profile-work">
                        <p>Sessions</p>
                        <a href="">Arabic</a><br/>
                        <a href="">Science</a><br/>
                        <a href="">Math</a>
                        <p>Hobbies</p>
                        <a href="">Basket Ball</a><br/>
                        <a href="">Gaming</a><br/>
                        <a href="">Studying</a><br/></div>';
                    }
                    ?>

                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">

                                    <label>User Id</label>
                                </div>
                                <div class="col-md-6">
                                    <p> {{Auth::user()->id}} </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-6">
                                    <p> {{Auth::user()->name}}
                                        {{Auth::user()->lastName}}

                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p> {{Auth::user()->email}}</p>
                                </div>
                            </div>
                            <?php if (Auth::user()->type == '3') {
                                echo '                              
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Email Parent</label>
                                        </div>
                                        <div class="col-md-6">
                                           <p>' . Auth::user()->parentEmail . '</p>
                                        </div>
                                    </div>';
                            }
                            ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{Auth::user()->phonenum}}</p>
                                </div>
                            </div>
                            <?php if (Auth::user()->type == '3') {
                                echo '
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Parent Phone number</label>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <p>' . Auth::user()->parentnum . '</p>
                                        </div>
                                        
                                    </div>';
                            }
                            ?>
                            <!---   <div class="row">
                                        <div class="col-md-6">
                                            <label>Profession</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Web Developer and Designer</p>
                                        </div> --->

                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Experience</label>
                            </div>
                            <div class="col-md-6">
                                <p>Expert</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>How Many Sessions Attendant?</label>
                            </div>
                            <div class="col-md-6">
                                <p>35</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Total Projects</label>
                            </div>
                            <div class="col-md-6">
                                <p>230</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>English Level</label>
                            </div>
                            <div class="col-md-6">
                                <p>Expert</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Availability</label>
                            </div>
                            <div class="col-md-6">
                                <p>6 months</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Your Bio</label><br />
                                <p>Me Love Software Engineering</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </form>
    </div>
</body>
</html>
