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
                            <li><a href="<?php echo base_url('index') ;?>">Home</a></li>
                            <li><a href="<?php echo base_url('services') ;?>">Services</a></li>
                            <li><a href="<?php echo base_url('cart') ;?>">Cart</a></li>
                            <?php
                                if ($log_type = "Seller") {?>
                                    <li class="active"><a href="<?php echo base_url('services/add');?>">Add Services</a></li>
                                <?php }
                            ?>
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
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    
    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Create an New Product or a New Service you can offer</h2>
                    </div>
                </div>
            </div>
            <?php echo validation_errors(); ?>
            <?php echo form_open('services/add'); ?>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                         <div class="checkout__input">
                            <input type="text" name="form_pdnm" placeholder="Product/Service Name">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="checkout__input">
                            <input type="text" name="form_pdfee" placeholder="Product/Service Fee">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="checkout__input">
                            <input type="text" name="form_pdloc" placeholder="Available Locations">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="checkout__input">
                            <input type="text" name="form_pdspec" placeholder="Specifications">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="checkout__input">
                            <div class="form-group">
						    	<select data-placeholder="Category" name="form_pdcat" class="chosen-select col-md-12 block" tabindex="18" required>
					            	<option value='Vehicles'>Vehicles</option>
					            	<option value='Property'>Property</option>
					            	<option value='Electronics'>Electronics</option>
					            	<option value='Fashion'>Fashion</option>
					            	<option value='Sports'>Sports</option>
					            	<option value='Services'>Services</option>
					          </select>
						    </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="checkout__input">
                            <div class="checkout__input">
                            <input type="file" id="files" name="files" multiple><br><br>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-12 text-center">
                        <textarea placeholder="Product/Service Description" name="form_pddesc"></textarea>
                        <button type="submit" class="site-btn">Create Product/Service</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->

            </div>
        </div>
    </section>
    <!-- Categories Section End -->