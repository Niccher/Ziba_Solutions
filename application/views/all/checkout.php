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
                            <li><a href="<?php echo base_url() ;?>">Home</a></li>
                            <li><a href="<?php echo base_url('services') ;?>">Services</a></li>
                            <?php 
                                if ($logged_user == NULL) {
                                }else{
                                    $ct = base_url('cart');
                                    $sv = base_url('services/add');
                                    echo '<li class="active"><a href="'.$ct.'">Cart</a></li>';
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
                            <li><i class="fa fa-user"></i></li>
                        </ul>

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
                    </div>
                </div>
                
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>Billing Details</h4>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            
                            <div class="checkout__input">
                                <p>Town/City<span>*</span></p>
                                <input type="text" placeholder="Town">
                            </div>

                            <div class="checkout__input">
                                <p>Phone<span>*</span></p>
                                <input type="text" placeholder="Phone">
                            </div>

                            <div class="checkout__input__checkbox">
                                <label for="diff-acc">
                                    Ship to a different address?
                                    <input type="checkbox" id="diff-acc" placeholder="Ship to a different address?">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input">
                                <p>Order notes<span>*</span></p>
                                <input type="text"
                                    placeholder="Notes about your order, e.g. special notes for delivery.">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                <ul>
                                <?php
                                    $total = 0;
                                    foreach ($work_cart as $work) : ?>
                                        <?php 
                                            $id = $work['Product'];
                                            $data['work_inf'] = $this->mod_services->get_at($id);
                                            $total = $total + $data['work_inf']['Fee'];
?>
                                            <li><?php echo $data['work_inf']["Name"]; ?> <span><?php echo 'Kshs '.$data['work_inf']["Fee"]; ?></span></li>
                                        
                                <?php endforeach; ?>
                                </ul>
                                <div class="checkout__order__total">Total 
                                    <span><?php echo 'KShs '.$total.'/-' ?></span>
                                </div>
                                <button type="submit" class="site-btn">Place Order</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->