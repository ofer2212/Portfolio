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
    <link rel="stylesheet" href="css/style.css">
    <title>Error</title>
</head>

<body>
<div class="container">
    <header id="main-header">
        <div class="row no-gutters">

            <div class="col-lg-12 col-md-12">
                <div class="d-flex flex-column">
                    <div class="p-5 bg-dark text-white">
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <h1 class="display-4">OFER ELFASSI</h1>
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


                </div>
            </div>
        </div>
    </header>

    <div class="mainbox">
        <div class="error-container">
            <h2 class="err">5</h2>
            <i class="err far fa-question-circle fa-spin"></i>
            <i class="err far fa-question-circle fa-spin"></i>
        </div>
        <div class="msg"><?php echo $error?></p></div>
    </div>

</div>

</body>

</html>