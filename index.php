
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>About Georgia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="src/styles/main.css">
    <link rel="stylesheet" href="src/styles/common/index.css">   
    <link rel="stylesheet" href="src/styles/common/kerzi-konkretulad.css">
    <link rel="stylesheet" href="src/styles/common/kitchen-page.css">
    <link rel="stylesheet" href="src/styles/common/sights-konkretulad.css">
    <link rel="stylesheet" href="src/styles/common/sights-page.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <header>
            <div id="header-top" class="header-top show">
                <div class="container">
                    <div class="header-social-icon"><a href="https://www.facebook.com/"><i
                                class="fab fa-facebook-f"></i></a> </div>
                    <div class="header-social-icon"><a href="https://www.instagram.com/"><i
                                class="fab fa-instagram"></i></a> </div>
                    <div class="header-social-icon"><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                    </div>

                </div>
                <div class="container">
                    <div class="language-icons">
                        <a href="#">
                            <img src="./assets/img/language-icons/ru.png" alt="">
                        </a>
                    </div>


                    <div class="language-icons">
                        <a href="#"><img src="./assets/img/language-icons/en.png" alt=""></a>

                    </div>
                    <div class="language-icons">
                        <a href="#">
                            <img src="./assets/img/language-icons/ge.png" alt="">
                        </a>
                    </div>

                </div>
            </div>

            <div id="header-bottom" class="header-bottom">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"><img src="./assets/img/global/logo.png"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar2"></span>
                            <span class="icon-bar2"></span>
                            <span class="icon-bar2"></span>
                            <span class="icon-bar2"></span>

                        </button>



                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">

                                <li class="nav-item">
                                    <a class="nav-link" href="?Page=home">მთავარი</a>
                                </li>
                                <li class="nav-item">

                                    <div class="btn-group">
                                        <button class="btn header-btn-new" type="button">
                                            <a class="nav-link" href="?page=kitchen-page">სამზარეულო</a>
                                        </button>
                                        <button type="button"
                                            class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="?page=kitchen-page">ცივი კერძები</a>
                                            <a class="dropdown-item" href="?page=kitchen-page">ცხელი კერძები</a>
                                            <a class="dropdown-item" href="?page=kitchen-page">სასმელები</a>
                                        </div>
                                    </div>



                                </li>

                                <li class="nav-item">

                                    <div class="btn-group">
                                        <button class="btn header-btn-new" type="button">
                                            <a class="nav-link" href="?page=sights-page">ღირსშესანიშნაობები</a>
                                        </button>
                                        <button type="button"
                                            class="btn btn-sm  btn-secondary dropdown-toggle dropdown-toggle-split"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                        <!-- ????? -->
                                            <a class="dropdown-item" href="?page=sights-page">ეკლესია-მონასტრები</a>
                                            <a class="dropdown-item" href="?page=sights-page">მთის კურორტები</a>
                                            <a class=" dropdown-item" href="?page=sights-page">ზღვის კურორტები</a>
                                            <a class="dropdown-item" href="?page=sights-page">ნაკრძალები</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                    aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>

                </div>

            </div>
    </div>
    </div>
    <div class="clear-box"></div>
    </header>


    <!-- Start php logic -->

    <?php
if (!isset($_GET['page']) || $_GET['page']=='home') {
    include 'block/home.php';
} else if ($_GET['page']=='kitchen-page'){
    include 'block/kitchen-page.php';
}else if($_GET['page']=='sights-page'){
    include 'block/sights-page.php';
}else if ($_GET['page']=='sights-konkretulad'){
    include 'block/sights-konkretulad.php';
 }
 else if ($_GET['page']=='kerzi-konkretulad'){
    include 'block/kerzi-konkretulad.php';}



?>
    <!-- End php logic -->




    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4"><a href="#"><img
                            src="./assets/img/global/logo.png"></a> </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <div class="row">
                        <div class="col">
                            <div class="social-cirkle"> <a href="https://www.facebook.com/"><i
                                        class="fab fa-facebook-f social-icon"></i></a> </div>
                        </div>
                        <div class="col">
                            <div class="social-cirkle"><a href="https://twitter.com/"><i
                                        class="fab fa-twitter social-icon"></i></a> </div>
                        </div>
                        <div class="col">
                            <div class="social-cirkle"><a href="https://www.instagram.com/"><i
                                        class="fab fa-instagram social-icon"></i></a> </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-5 col-lg-5 col-md-4 col-sm-3"></div>


            </div>


        </div>


        <div class="clear-box"></div>
    </footer>

    <script src="./lib//jquery/js/jquery-3.4.0.js"></script>
    <script src="./lib/pooper/js/popper.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.js"></script>
    <script src="./src/js/common/header.js"></script>

    <script>
        $(document).ready(function () {
            AboutGergia.Init();
        });
        $('.dropdown-toggle').dropdown();

    </script>
</body>

</html>
