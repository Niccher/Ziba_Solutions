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
                            <li class=""><a href="<?php echo base_url('home');?>">Home</a></li>
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
                                src="<?php echo base_url('assets/uploades/').$work_info['Imgs'] ;?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">

                        <h3><?php echo $work_info['Name'];?></h3>
                        <div class="product__details__price"><?php echo $work_info['Fee'];?></div>
                        <p><?php echo $work_info['Location'];?></p>
                        <p><?php echo $work_info['Specification'];?></p>
                        <p><?php echo $work_info['Category'];?></p>
                        <p><?php echo $work_info['Description'];?></p>

                        <a href="<?php echo base_url('cart/').$work_info['PId']; ?>" class="primary-btn">Cart</a>
                        
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Product Details Section End -->