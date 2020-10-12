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
                            <li><a href="<?php echo base_url('list/users');?>">Users</a></li>
                            <li class="active"><a href="<?php echo base_url('list/sellers');?>">Sellers</a></li>
                            <li><a href="<?php echo base_url('list/orders');?>">Products</a></li>

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

<!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg">
        <div class="container">
            <div class="row">

            	<div class="col-lg-12">
            		<div class="shoping__cart__table">
	                    <table class="table table-hover table-striped">
	                        <thead>
	                            <tr>
	                                <th width="13%" >Name</th>
	                                <th width="13%" >Surname</th>
	                                <th width="13%" >National_ID</th>
	                                <th width="13%" >Phone</th>
	                                <th width="13%" >Category</th>
	                                <th width="13%" >Joined</th>
	                                <th width="13%" >Delete</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                            <?php
	                                foreach ($user_list as $user) : ?>
	                                    <tr>
	                                        <td class="shoping__cart__price">
	                                            <?php echo $user["Name"]; ?>
	                                        </td>
	                                        <td>
	                                            <?php echo $user["Surname"]; ?>
	                                        </td>
	                                        <td>
	                                            <?php echo $user["National_ID"]; ?>
	                                        </td>
	                                        <td>
	                                            <?php echo $user["Phone"]; ?>
	                                        </td>
	                                        <td>
	                                            <?php echo $user["Category"]; ?>
	                                        </td>
	                                        <td>
	                                            <?php echo $user["Joined"]; ?>
	                                        </td>
	                                        <td >
	                                            <button class="btn btn-danger">
	                                            	<span><i class="fa fa-fw fa-trash"></i></span>
	                                            Delete</button>
	                                        </td>
	                                    </tr> 
	                                    
	                            <?php endforeach; ?>
	                        </tbody>
	                    </table>
	                </div>
            	</div>
                
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->