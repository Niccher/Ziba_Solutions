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
                <div class="checkout__form">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-8 col-md-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="text" placeholder="Email">
                                </div>

                                <div class="checkout__input">
                                    <p>Password<span>*</span></p>
                                    <input type="text" placeholder="Password">
                                </div>

                                <div class="checkout__input">
                                    <a href="index.php">
                                        <span class="btn btn-success">
                                            Sign In
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="checkout__order">
                                    <div class="checkout__order">
                                        <p>I do not have an account, Proceed to Signing Up</p>
                                        <a href="register.php">
                                            <span class="btn btn-success">
                                                Proceed to Sign Up
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    <!-- Checkout Section End -->
                <!-- Checkout Section End -->

            </div>
        </div>
    </section>
    <!-- Categories Section End -->

<?php
 include_once 'template/tail.php';
?>