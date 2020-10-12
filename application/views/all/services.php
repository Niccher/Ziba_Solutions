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
                            <li class="active"><a href="<?php echo base_url('services');?>">Services</a></li>
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
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
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
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Categories</h4>
                            <ul>
                                <li <?
                                if ($cat =='vehicles') {
                                    echo "class='active'";
                                }?> >
                                    <a href="<?php echo base_url('services/cat/vehicles') ;?>">Vehicles</a></li>
                                <li class="active" ><a href="<?php echo base_url('services/cat/property') ;?>">Property</a></li>
                                <li><a href="<?php echo base_url('services/cat/electronic') ;?>">Electronics</a></li>
                                <li><a href="<?php echo base_url('services/cat/fashion') ;?>">Fashion</a></li>
                                <li><a href="<?php echo base_url('services/cat/sport') ;?>">Sports</a></li>
                                <li><a href="<?php echo base_url('services/cat/services') ;?>">Services</a></li>
                            </ul>
                        </div>
                        <div class="sidebar__item">
                            <h4>Price</h4>
                            <div class="price-range-wrap">
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                    data-min="10" data-max="540">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                                <div class="range-slider">
                                    <div class="price-input">
                                        <input type="text" id="minamount">
                                        <input type="text" id="maxamount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__item sidebar__item__color--option">
                            <h4>Location</h4>
                            <div class="sidebar__item__color sidebar__item__color--white">
                                <label for="white">
                                    Mairobi
                                    <input type="radio" id="white">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--gray">
                                <label for="gray">
                                    Kiambu
                                    <input type="radio" id="gray">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--red">
                                <label for="red">
                                    Kajiado
                                    <input type="radio" id="red">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--black">
                                <label for="black">
                                    Machakos
                                    <input type="radio" id="black">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--blue">
                                <label for="blue">
                                    Nakuru
                                    <input type="radio" id="blue">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--green">
                                <label for="green">
                                    Thika
                                    <input type="radio" id="green">
                                </label>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            <h4>Popular Size</h4>
                            <div class="sidebar__item__size">
                                <label for="large">
                                    Rating
                                    <input type="radio" id="large">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="medium">
                                    Most Purchased
                                    <input type="radio" id="medium">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="small">
                                    Most viewed
                                    <input type="radio" id="small">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="">
                        <div class="row">
                            
    <?php
        foreach ($work_posted as $work) : ?>
            <div class="col-lg-4">
                <div class="">
                    <?php $code = base_url('products/info/').$work['PId'];?>
                    <a href="<?php echo $code; ?>">
                        <div class="product__discount__item__pic set-bg"
                        data-setbg="<?php echo base_url('assets/uploades/').$work['Imgs'] ;?>">
                        </div>
                        <div class="product__discount__item__text">
                            <span><?php echo $work["Name"]; ?></span>
                            <span><?php echo $work["Fee"]." KShs ".$work["Category"]; ?></span>
                        </div>
                    </a>
                    
                </div>  
            </div>
    <?php endforeach; ?>
                                
                        </div>
                    </div>
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select>
                                        <option value="0">Default</option>
                                        <option value="0">Default</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>16</span> Products found</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!--<div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-3.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Crab Pool Security</a></h6>
                                    <h5>$30.00</h5>
                                </div>
                            </div>
                        </div>-->
                    </div>
                    <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->