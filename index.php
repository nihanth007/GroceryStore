<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Guntur Food Basket</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <style rel="stylesheet">

        main {
            padding-top: 3rem;
            padding-bottom: 2rem;
        }

        .widget-wrapper {
            padding-bottom: 2rem;
            border-bottom: 1px solid #e0e0e0;
            margin-bottom: 2rem;
        }

        .extra-margins {
            margin-top: 1rem;
            margin-bottom: 2.5rem;
        }

        .divider-new {
            margin-top: 0;
        }

    </style>
</head>

<body>


<header>

    <!--Navbar-->
    <nav class="navbar navbar-dark primary-color-dark">

        <!-- Collapse button-->
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
            <i class="fa fa-bars"></i>
        </button>

        <div class="container">

            <!--Navbar Brand-->
            <a class="navbar-brand" href="/">Guntur Food Basket</a>

            <!--Collapse content-->
            <div class="collapse navbar-toggleable-xs" id="collapseEx">

                <!--Links-->
                <ul class="nav navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>

                <ul class="nav navbar-nav pull-right">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Shopping Cart</a>
                    </li>
                </ul>
            </div>
            <!--/.Collapse content-->

        </div>

    </nav>
    <!--/.Navbar-->


</header>

<main>

    <!--Main layout-->
    <div class="container">
        <div class="row">

            <!--Sidebar-->
            <div class="col-lg-4">

                <div class="widget-wrapper">
                    <h4>Categories:</h4>
                    <br>
                    <div class="list-group">
                        <a href="#" class="list-group-item">Grocery</a>
                        <a href="#" class="list-group-item">Beverages</a>
                        <a href="#" class="list-group-item">Packaged Food</a>
                        <a href="#" class="list-group-item">Personal Care</a>
                        <a href="#" class="list-group-item">Home Care</a>
                    </div>
                </div>

                <div class="widget-wrapper">
                    <h4>Subscription form:</h4>
                    <br>
                    <div class="card">
                        <div class="card-block">
                            <p><strong>Subscribe to our newsletter</strong></p>
                            <p>Once a week we will send you a summary of the most useful news</p>
                            <div class="md-form">
                                <i class="fa fa-user prefix"></i>
                                <input type="text" id="form1" class="form-control">
                                <label for="form1">Your name</label>
                            </div>
                            <div class="md-form">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="text" id="form2" class="form-control">
                                <label for="form2">Your email</label>
                            </div>
                            <button class="btn btn-primary">Submit</button>

                        </div>
                    </div>
                </div>

            </div>
            <!--/.Sidebar-->

            <!--Main column-->
            <div class="col-lg-8">

                <!--First row-->
                <div class="row">
                    <div class="col-lg-12">
                        <!--Search form-->
                        <form class="form-inline">
                            <input class="form-control" style="width: 81%" type="text" placeholder="Type any Product to Search">
                            <button class="btn btn-primary">Search</button>
                        </form>
                        <div class="divider-new">
                            <h2 class="h2-responsive">Products</h2>
                        </div>
                        <!--Carousel Wrapper-->
                        <div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
                            <!--Indicators-->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-2" data-slide-to="1"></li>
                                <li data-target="#carousel-example-2" data-slide-to="2"></li>
                                <li data-target="#carousel-example-2" data-slide-to="3"></li>
                                <li data-target="#carousel-example-2" data-slide-to="4"></li>
                            </ol>
                            <!--/.Indicators-->

                            <!--Slides-->
                            <div class="carousel-inner" role="listbox">
                                <div type="button" onclick="window.location.href='';" class="carousel-item active">
                                    <img src="img/2.jpg" alt="First slide">
                                    <div class="carousel-caption">
                                        <h4>Grocery & Staples</h4>
                                        <br>
                                    </div>
                                </div>
                                <div type="button" onclick="window.location.href='';" class="carousel-item">
                                    <img src="img/1.jpg" alt="Second slide">
                                    <div class="carousel-caption">
                                        <h4>Grocery & Staples</h4>
                                        <br>
                                    </div>
                                </div>
                                <div type="button" onclick="window.location.href='';" class="carousel-item">
                                    <img src="img/3.jpg" alt="Third slide">
                                    <div class="carousel-caption">
                                        <h4>Snacks and Others</h4>
                                        <br>
                                    </div>
                                </div>
                                <div type="button" onclick="window.location.href='';" class="carousel-item">
                                    <img src="img/4.png" alt="Fourth slide">
                                    <div class="carousel-caption">
                                        <h4>Vegetables</h4>
                                        <br>
                                    </div>
                                </div>
                                <div type="button" onclick="window.location.href='';" class="carousel-item">
                                    <img src="img/5.png" alt="Fifth slide">
                                    <div class="carousel-caption">
                                        <h4>Fruits</h4>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <!--/.Slides-->

                            <!--Controls-->
                            <a class="left carousel-control" href="#carousel-example-2" role="button" data-slide="prev">
                                <span class="icon-prev" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-2" role="button" data-slide="next">
                                <span class="icon-next" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <!--/.Controls-->
                        </div>
                        <!--/.Carousel Wrapper-->
                    </div>
                </div>
                <!--/.First row-->
                <br>
                <hr class="extra-margins">
                <div class="divider-new">
                    <h2 class="h2-responsive">What's New ?</h2>
                </div>
                <!--Second row-->
                <div class="row">
                    <!--First columnn-->
                    <div class="col-lg-4">
                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(3).jpg" class="img-fluid" alt="">
                                <a href="#">
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-block">
                                <!--Title-->
                                <h4 class="card-title">Product title</h4>
                                <!--Text-->
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                <a href="#" class="btn btn-primary">Buy now for 10$</a>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->
                    </div>
                    <!--First columnn-->

                    <!--Second columnn-->
                    <div class="col-lg-4">
                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(2).jpg" class="img-fluid" alt="">
                                <a href="#">
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-block">
                                <!--Title-->
                                <h4 class="card-title">Product title</h4>
                                <!--Text-->
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                <a href="#" class="btn btn-primary">Buy now for 20$</a>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->
                    </div>
                    <!--Second columnn-->

                    <!--Third columnn-->
                    <div class="col-lg-4">
                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(1).jpg" class="img-fluid" alt="">
                                <a href="#">
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-block">
                                <!--Title-->
                                <h4 class="card-title">Product title</h4>
                                <!--Text-->
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                <a href="#" class="btn btn-primary">Buy now for 30$</a>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->
                    </div>
                    <!--Third columnn-->
                </div>
                <!--/.Second row-->

            </div>
            <!--/.Main column-->

        </div>
    </div>
    <!--/.Main layout-->

</main>

<!--Footer-->
<footer class="page-footer center-on-small-only primary-color-dark">

    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">

            <!--First column-->
            <div class="col-md-3 offset-lg-1 hidden-lg-down">
                <h5 class="title">Guntur Food Basket</h5>
                <p>Material Design (codenamed Quantum Paper) is a design language developed by Google. </p>

                <p>Material Design for Bootstrap (MDB) is a powerful Material Design UI KIT for most popular HTML, CSS, and JS framework - Bootstrap.</p>
            </div>
            <!--/.First column-->

            <hr class="hidden-md-up">

            <!--Second column-->
            <div class="col-lg-2 col-md-4 offset-lg-1">
                <h5 class="title">First column</h5>
                <ul>
                    <li><a href="#!">Link 1</a></li>
                    <li><a href="#!">Link 2</a></li>
                    <li><a href="#!">Link 3</a></li>
                    <li><a href="#!">Link 4</a></li>
                </ul>
            </div>
            <!--/.Second column-->

            <hr class="hidden-md-up">

            <!--Third column-->
            <div class="col-lg-2 col-md-4">
                <h5 class="title">Second column</h5>
                <ul>
                    <li><a href="#!">Link 1</a></li>
                    <li><a href="#!">Link 2</a></li>
                    <li><a href="#!">Link 3</a></li>
                    <li><a href="#!">Link 4</a></li>
                </ul>
            </div>
            <!--/.Third column-->

            <hr class="hidden-md-up">

            <!--Fourth column-->
            <div class="col-lg-2 col-md-4">
                <h5 class="title">Third column</h5>
                <ul>
                    <li><a href="#!">Link 1</a></li>
                    <li><a href="#!">Link 2</a></li>
                    <li><a href="#!">Link 3</a></li>
                    <li><a href="#!">Link 4</a></li>
                </ul>
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->


    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2016 Copyright: <a href="/"> Guntur Food Basket </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->


<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/tether.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>


</body>

</html>