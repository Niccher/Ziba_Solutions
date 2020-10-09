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
                            <li><a href="<?php echo base_url('home');?>">Home</a></li>
                            <li><a href="<?php echo base_url('services');?>">Services</a></li>
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

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $total = 0;
                                    foreach ($work_cart as $work) : ?>
                                        <?php 
                                            $id = $work['Product'];
                                            $data['work_inf'] = $this->mod_services->get_at($id);
                                            $total = $total + $data['work_inf']['Fee'];
?>
                                            <tr>
                                                <td class="shoping__cart__item">
                                                    <img src="img/cart/cart-1.jpg" alt="">
                                                    <h5><?php echo $data['work_inf']["Name"]; ?></h5>

                                                </td>
                                                <td class="shoping__cart__price">
                                                    <?php echo $data['work_inf']["Fee"]; ?>
                                                </td>
                                                <td class="shoping__cart__total">
                                                    1
                                                </td>
                                            </tr> 
                                        
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Total <span><?php echo 'KShs '.$total.'/-' ?></span></li>
                        </ul>
                        <a href="<?php echo base_url('checkout') ;?>" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->