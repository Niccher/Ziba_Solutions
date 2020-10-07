<?php
 include_once 'template/header.php';
?>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/zibalogo.png" height="50px" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./login.php">Login</a></li>
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./services.php">Services</a></li>
                            <li><a href="./cart.php">Cart</a></li>
                        </ul>
                    </nav>
                </div>
                
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Welcome to Ziba Solutions</h2>
                        <div class="breadcrumb__option">
                            <span>The quality you Expect the Quality you deserve</span>
                            <br>
                            <span>
                                <a href="index.php">
                                    <button class="btn btn-primary">
                                    Get Started
                                </button>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    
                </div>
                <div class="col-lg-9">
                    

                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                
                 <!-- Checkout Section Begin -->
                <section class="checkout spad">
                    <div class="container">
                        <div class="checkout__form">
                            <form action="#">
                                <div class="row">

                                    <div class="col-lg-8 col-md-6">

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="checkout__input">
                                                    <p>Full Name<span>*</span></p>
                                                    <input type="text" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="checkout__input">
                                                    <p>Surname<span>*</span></p>
                                                    <input type="text" placeholder="Surname">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="checkout__input">
                                                    <p>Phone<span>*</span></p>
                                                    <input type="text" placeholder="Phone">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="checkout__input">
                                                    <p>Email<span>*</span></p>
                                                    <input type="text" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                                                    Category
                                                        <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Seller</a></li>
                                                    <li><a href="#">Customer</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="checkout__input">
                                                    <p>Town/County<span>*</span></p>
                                                    <input type="text" placeholder="Town/County">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="checkout__input">
                                                    <p>Password<span>*</span></p>
                                                    <input type="text" placeholder="Password">
                                                </div>
                                            </div>

                                            <button class="btn btn-primary btn-block"> Sign In</button>
                                        </div>

                                        <p>
                                            Create an account by entering the information below. If you are a returning customer please login at the top of the page
                                        </p>
                                    </div>

                                    <div class="col-lg-4 col-md-6">

                                        <div class="checkout__order">
                                            <p>I have an account, Proceed to Signing in</p>
                                            <a href="login.php">
                                                <span class="btn btn-success">
                                                    Proceed to Login
                                                </span>
                                            </a>
                                        </div>

                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                <!-- Checkout Section End -->

            </div>
        </div>
    </section>
    <!-- Categories Section End -->

<?php
 include_once 'template/tail.php';
?>