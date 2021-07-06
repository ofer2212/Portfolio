<?php
require  'Database.php';
$db = new Database();
$conn = $db->conn;
$statement = "SELECT  * FROM portfolio_oferelfassi";
$stmt = $conn->prepare($statement);
$stmt->execute();
$result = $stmt->fetchAll();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css"/>
    <link rel="stylesheet" href="css/style.css">
    <title>Ofer Elfassi</title>
</head>

<body>
<div class="container">
    <header id="main-header">
        <div class="row no-gutters">
            <div class="col-lg-4 col-md-5">
                <img src="images/person.jpg" alt="">
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="d-flex flex-column">
                    <div class="p-5 bg-dark text-white">
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <div class="title-container">
                                <h1 class="display-4">OFER ELFASSI</h1>
                                <h5>Shenkar software engineering</h5>
                            </div>
                            <div class="d-none d-md-block">
                                <a href="https://twitter.com/oferikosh" class="text-white">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                            <div>
                                <a href="https://www.facebook.com/ofer221" class="text-white">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </div>
                            <div>
                                <a href="https://www.instagram.com/ofer_elfassi" class="text-white">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                            <div>
                                <a href="https://github.com/ofer2212" class="text-white">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                            <div>
                                <a href="https://www.linkedin.com/in/ofer-elfassi-b96531162" class="text-white">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 bg-black">
                        Experienced Full Stack Web Developer
                    </div>

                    <div>
                        <div class="d-flex flex-row text-white align-items-stretch text-center">
                            <div class="port-item p-4 bg-primary" data-toggle="collapse" data-target="#home">
                                <i class="fas fa-home fa-2x d-block"></i>
                                <span class="d-none d-sm-block">Home</span>
                            </div>
                            <div class="port-item p-4 bg-success" data-toggle="collapse" data-target="#resume">
                                <i class="fas fa-graduation-cap fa-2x d-block"></i>
                                <span class="d-none d-sm-block">Resume</span>
                            </div>
                            <div class="port-item p-4 bg-warning" data-toggle="collapse" data-target="#work">
                                <i class="fas fa-folder-open fa-2x d-block"></i>
                                <span class="d-none d-sm-block">Work</span>
                            </div>
                            <div class="port-item p-4 bg-danger" data-toggle="collapse" data-target="#contact">
                                <i class="fas fa-envelope fa-2x d-block"></i>
                                <span class="d-none d-sm-block">Contact</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- HOME -->
    <div id="home" class="collapse show">
        <div class="card card-body bg-primary text-white py-5">
            <p class="lead"><i>“It is by logic that we prove, but by intuition that we discover.”</i>&nbsp;<cite
                    class="text">― Henri Poincare</cite></p>
        </div>

        <div class="card card-body py-5">
            <h3>My Skills</h3>
            <hr>
            <h4>HTML 5</h4>
            <div class="progress mb-3">
                <div class="progress-bar bg-success" style="width:100%"></div>
            </div>
            <h4>CSS 3</h4>
            <div class="progress mb-3">
                <div class="progress-bar bg-success" style="width:100%"></div>
            </div>
            <h4>JavaScript</h4>
            <div class="progress mb-3">
                <div class="progress-bar bg-success" style="width:90%"></div>
            </div>
            <h4>React</h4>
            <div class="progress mb-3">
                <div class="progress-bar bg-success" style="width:90%"></div>
            </div>
            <h4>React Native</h4>
            <div class="progress mb-3">
                <div class="progress-bar bg-success" style="width:75%"></div>
            </div>
            <h4>Typescript</h4>
            <div class="progress mb-3">
                <div class="progress-bar bg-success" style="width:68%"></div>
            </div>
            <h4>PHP</h4>
            <div class="progress mb-3">
                <div class="progress-bar bg-success" style="width:80%"></div>
            </div>
            <h4>Python</h4>
            <div class="progress mb-3">
                <div class="progress-bar bg-success" style="width:70%"></div>
            </div>
        </div>
    </div>

    <!-- RESUME -->
    <div id="resume" class="collapse">
        <div class="card card-body bg-success text-white py-5">
            <p class="lead"><i>“You can accurately know what the #software will do or when you'll get it, but not
                both.”</i>&nbsp;<cite class="text">― Werner Heisenberg</cite></p>
        </div>

        <div class="card card-body py-5">
            <h3>Where Have I Worked?</h3>
            <div class="card-deck">
                <div class="card">


                    <div class="card-body">
                        <h4 class="card-title">Self employed</h4>
                        <p class="card-text">Doing electronics and software projects.
                        </p>
                        <p class="p-2 mb-3 bg-dark text-white">
                            Position: Web Designer
                        </p>
                        <p class="p-2 mb-3 bg-dark text-white">
                            Phone: 0522-772-2603
                        </p>
                    </div>
                    <div class="card-footer">
                        <h6 class="text-muted">Dates: 2018 - 2021</h6>
                    </div>

                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tapix</h4>
                        <p class="card-text">CNC setter and
                            programmer.</p>
                        <p class="p-2 mb-3 bg-dark text-white">
                            Position: Programmer
                        </p>
                        <p class="p-2 mb-3 bg-dark text-white">
                            Phone: 04-877-7025
                        </p>
                    </div>
                    <div class="card-footer">
                        <h6 class="text-muted">Dates: 2010 - 2016</h6>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Applied Materials</h4>
                        <p class="card-text">Installing nano tech machines at
                            Intel.</p>
                        <p class="p-2 mb-3 bg-dark text-white">
                            Position: Customer Engineer
                        </p>
                        <p class="p-2 mb-3 bg-dark text-white">
                            Phone: 1-408-727-5555
                        </p>
                    </div>
                    <div class="card-footer">
                        <h6 class="text-muted">Dates: 2016 - 2018</h6>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- WORK -->
    <div id="work" class="collapse">
        <div class="card card-body bg-warning text-white py-5">
            <p class="lead"><i>“We are all now connected by the Internet, like neurons in a giant brain.”</i>&nbsp;<cite
                    class="text">― Stephen Hawking</cite></p>

        </div>

        <div class="card card-body py-5" >
            <h3>What Have I Built?</h3>
            <div class="row no-gutters">
                <?php

                foreach ($result as $index=>$project) {
                    if($index == 4){
                        echo '</div><div class="row no-gutters">';
                    }
                    echo '
                    <div class="col-md-3" id="work1">
                    <a href="images/' . $project["image"] . '" data-toggle="lightbox" data-footer="  ">
                        <img src="images/' . $project["image"] . '" alt="" class="img-fluid"  data-link="' . $project["link"] . '" data-name="' . $project["name"] . '" data-desc="' . $project["desc"] . '">
                    </a>
                </div>
                    
                    ';
                }

                ?>

            </div>
        </div>
    </div>

    <!-- CONTACT -->
    <div id="contact" class="collapse">
        <div class="card card-body bg-danger text-white py-5">
            <p class="lead"><i>“I can calculate the motion of heavenly bodies but not the madness of
                people.”</i>&nbsp;<cite class="text">― Isaac Newton</cite></p>
        </div>

        <div class="card card-body py-5">
            <h3>Get In Touch</h3>
            <form action=”mailto:ofer221@hotmail.com” method=”post” enctype="text/plain" name=”EmailForm”>
                <div class="form-group">
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                <span class="input-group-text bg-danger text-white">
                  <i class="fas fa-user"></i>
                </span>
                        </div>
                        <input type="text" class="form-control bg-dark text-white" placeholder="Name">
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                <span class="input-group-text bg-danger text-white">
                  <i class="fas fa-envelope"></i>
                </span>
                        </div>
                        <input type="email" class="form-control bg-dark text-white" placeholder="Email">
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                <span class="input-group-text bg-danger text-white">
                  <i class="fas fa-pencil-alt"></i>
                </span>
                        </div>
                        <textarea class="form-control bg-dark text-white" placeholder="Name"></textarea>
                    </div>
                </div>

                <input type="submit" value="Submit" class="btn btn-danger btn-block btn-lg">
            </form>
        </div>
    </div>


    <!-- FOOTER -->
    <footer id="main-footer" class="p-5 bg-dark text-white">
        <div class="row">
            <div class="col-md-6">
                <a href="docs/ofer_elfassi_cv.pdf" target="_blank" class="btn btn-outline-light">
                    <i class="fas fa-cloud"></i> Download Resume
                </a>
            </div>
        </div>
        <div class="row">
            <div class="mx-auto">
                <a href="https://www.shenkar.ac.il/he/departments/engineering-software-department"><h5>תואר ראשון בהנדסת תוכנה בשנקר</h5></a>
            </div>
        </div>
    </footer>
</div>


<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
<script src="js/main.js"></script>


</body>

</html>