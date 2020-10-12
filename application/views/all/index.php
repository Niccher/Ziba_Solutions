<?php
    $logged_user =  $this->session->userdata('log_name');
    $logged_type =  $this->session->userdata('log_type');
?>
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
                            <li class="active"><a href="<?php echo base_url();?>" >Home</a></li>
                            <li><a href="<?php echo base_url('services');?>">Services</a></li>
                            <?php 
                                if ($logged_user == NULL) {
                                }else{
                                    $ct = base_url('cart');
                                    $sv = base_url('services/add');
                                    echo '<li><a href="'.$ct.'">Cart</a></li>';
                                    if ($log_type = "Seller") {
                                        echo '<li><a href="'.$sv.'">Add Services</a></li>';
                                    }
                                }
                            ?>
                            
                        </ul>
                    </nav>
                </div>

                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li>
                                <i class="fa fa-user">
                                    <div class="header__cart__price">
                                        <span>
                                            <?php 
                                                if ($logged_user == NULL) {
                                                }else{
                                                    echo 'Welcome: '.$logged_user; 
                                                }
                                            ?>
                                        </span>
                                    </div>
                                </i>
                            </li>
                            <li class="checkout__order__total">
                                <?php 
                                    if ($logged_user == NULL) {
                                    }else{
                                        $url = base_url('logout');
                                        echo '
                                        <a href="'.$url.'"><i class="fa fa-share">Log-Out</i></a>
                                        '; 
                                    }
                                ?>
                            </li>
                        </ul>
                        
                    </div>
                </div>
                
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+254 xxx xxx</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="<?php echo base_url('assets/imgs/background.jpeg') ;?>">
                        <div class="hero__text">
                            <span>All Products</span>
                            <h2>Services <br />100% Honesty</h2>
                            <p>Free Pickup and Delivery Available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="<?php echo base_url('assets/imgs/remod.jpg') ;?>">
                            <h5><a href="#">Painting</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="<?php echo base_url('assets/imgs/furniture.jpg') ;?>">
                            <h5><a href="#">Furniture</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="<?php echo base_url('assets/imgs/repairs.jpeg') ;?>">
                            <h5><a href="#">Repairs</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="<?php echo base_url('assets/imgs/nairobi.jpg') ;?>">
                            <h5><a href="#">Nairobi</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="<?php echo base_url('assets/imgs/movers.jpg') ;?>">
                            <h5><a href="#">Moving</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->