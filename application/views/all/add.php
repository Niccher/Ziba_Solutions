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

    <link rel="stylesheet" href="<?php echo base_url('assets/css/dropzone.min.css');?>" />
    
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
            <form action="#">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                         <div class="checkout__input">
                            <input type="text" name="form_lgpwd" placeholder="Product/Service Name">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="checkout__input">
                            <input type="text" name="form_lgpwd" placeholder="Product/Service Fee">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="checkout__input">
                            <input type="text" name="form_lgpwd" placeholder="Available Locations">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="checkout__input">
                            <input type="text" name="form_lgpwd" placeholder="Specifications">
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="checkout__input">
                            <div class="dropzone well" id="dropzoneFrom">
                            	<div class="dz-default dz-message">
									<span>
										<span class="bigger-150 bolder">
											<i class="ace-icon fa fa-caret-right red"></i> Drop files
										</span> to upload 				
										<span class="smaller-80 grey">(or click)</span> <br> 				
										<i class="upload-icon ace-icon fa fa-cloud-upload blue fa-3x"></i>
									</span>
								</div>
                            </div>
                            <div>
	                        	<span><a href="">File.file</a></span><br>
	                        	<span><a href="">File.file</a></span><br>
	                        	<span><a href="">File.file</a></span><br>
	                        </div>
                        </div>
                    </div>

                    <div class="col-lg-12 text-center">
                        <textarea placeholder="Product/Service Description"></textarea>
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