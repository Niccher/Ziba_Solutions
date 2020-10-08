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
                            <li class=""><a href="<?php echo base_url('home');?>">Home</a></li>
                            <li><a href="<?php echo base_url('services');?>">Services</a></li>
                            <li><a href="<?php echo base_url('cart');?>">Cart</a></li>
                            <?php
                                if ($log_type = "Seller") {?>
                                    <li><a href="<?php echo base_url('services/add');?>">Add Services</a></li>
                                <?php }
                            ?>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><i class="fa fa-user"></i></li>
                        </ul>
                        <div class="header__cart__price">
                            <span>
                                if
                                <?php
                                if ($logged_user = "") {
                                    echo "Login";
                                }else{
                                    echo 'Welcome: '.$logged_user; 
                                }
                                ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Product Details Section Begin -->
    <section class="hero">
        <div class="hero__search">
            <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="<?php echo base_url('assets/imgs/repairs.jpeg') ;?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">

                        <h3><?php echo $work_info['Name'];?></h3>
                        <div class="product__details__price"><?php echo $work_info['Fee'];?></div>
                        <p><?php echo $work_info['Description'];?></p>

                        <a href="<?php echo base_url('cart/').$work_info['PId']; ?>" class="primary-btn">Cart</a>
                        
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Product Details Section End -->