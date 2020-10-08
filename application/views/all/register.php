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
                            <li class="active"><a href="<?php echo base_url('register') ;?>">Register</a></li>
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
                <div class="col-lg-12">
                    <!-- Checkout Section Begin -->
                    <section class="checkout spad">
                        <div class="container">
                            <div class="checkout__form">
                                <?php echo validation_errors(); ?>
                                <?php echo form_open('register'); ?>
                                    <div class="row">

                                        <div class="col-lg-8 col-md-6">

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="checkout__input">
                                                        <p>Full Name<span>*</span></p>
                                                        <input type="text" name="form_nwname" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="checkout__input">
                                                        <p>Surname<span>*</span></p>
                                                        <input type="text" name="form_nwsurname" placeholder="Surname">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="checkout__input">
                                                        <p>Phone<span>*</span></p>
                                                        <input type="text" name="form_nwphone" placeholder="Phone">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="checkout__input">
                                                        <p>Email<span>*</span></p>
                                                        <input type="text" name="form_nweml" placeholder="Email">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right">Category</label>

                                                    <div class="col-sm-9">
                                                        <label class="inline">
                                                            <input name="form_nwcat" type="radio" class="ace" value="Seller">
                                                            <span class="lbl middle"> Seller</span>
                                                        </label>

                                                        &nbsp; &nbsp; &nbsp;
                                                        <label class="inline">
                                                            <input name="form_nwcat" type="radio" class="ace" value="Customer">
                                                            <span class="lbl middle"> Customer</span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="checkout__input">
                                                        <p>Town/County<span>*</span></p>
                                                        <input type="text" name="form_nwtown" placeholder="Town/County">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="checkout__input">
                                                        <p>Password<span>*</span></p>
                                                        <input type="text" name="form_nwpwd" placeholder="Password">
                                                    </div>
                                                </div>

                                                <button type="submit" name="form_Add" class="btn btn-primary btn-block">Sign Up</button>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6">

                                            <div class="checkout__order">
                                                <p>I have an account, Proceed to Signing in</p>
                                                <a href="<?php echo base_url('login') ;?>">
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
        </div>
    </section>
    <!-- Hero Section End -->