    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="<?php echo base_url() ;?>"><img src="<?php echo base_url('assets/img/zibalogo.png') ;?>" height="50px" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="<?php echo base_url('login') ;?>">Login</a></li>
                            <li><a href="<?php echo base_url('index') ;?>">Home</a></li>
                            <li><a href="<?php echo base_url('services') ;?>">Services</a></li>
                            <li><a href="<?php echo base_url('cart') ;?>">Cart</a></li>
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
    <section class="breadcrumb-section set-bg" data-setbg="<?php echo base_url('assets/img/breadcrumb.jpg') ;?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Welcome to Ziba Solutions</h2>
                        <div class="breadcrumb__option">
                            <span>The quality you Expect the Quality you deserve</span>
                            <br>
                            <span>
                                <a href="<?php echo base_url() ;?>">
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
                <div class="col-lg-2">
                    
                </div>
                <div class="col-lg-10">
                    <section class="checkout spad">
                        <div class="container">
                            <div class="checkout__form">
                                <?php echo validation_errors(); ?>
                                <?php echo form_open('login'); ?>
                                    <div class="row">
                                        <div class="col-lg-8 col-md-6">
                                            <div class="checkout__input">
                                                <p>Email<span>*</span></p>
                                                <input type="text" name="form_lgeml" placeholder="Email">
                                            </div>

                                            <div class="checkout__input">
                                                <p>Password<span>*</span></p>
                                                <input type="text" name="form_lgpwd" placeholder="Password">
                                            </div>

                                            <div class="checkout__input">
                                                <button type="submit" name="form_Add" class="btn btn-primary btn-block">Sign In</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="checkout__order">
                                                <div class="checkout__order">
                                                    <p>I do not have an account, Proceed to Signing Up</p>
                                                    <a href="<?php echo base_url('register') ;?>">
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
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->