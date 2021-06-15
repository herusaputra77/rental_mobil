<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="<?=base_url()?>assets/cardoor/favicon.ico" type="image/x-icon" />

    <title>Cardoor - Car Rental HTML Template</title>

    <!--=== Bootstrap CSS ===-->
    <link href="<?= base_url()?>assets/cardoor/assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Vegas Min CSS ===-->
    <link href="<?= base_url()?>assets/cardoor/assets/css/plugins/vegas.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="<?= base_url()?>assets/cardoor/assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="<?= base_url()?>assets/cardoor/assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="<?= base_url()?>assets/cardoor/assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="<?= base_url()?>assets/cardoor/assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="<?= base_url()?>assets/cardoor/assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="<?= base_url()?>assets/cardoor/assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="<?= base_url()?>assets/cardoor/style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="<?= base_url()?>assets/cardoor/assets/css/responsive.css" rel="stylesheet">


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="<?= base_url()?>assets/cardoor/assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-left">
                        <i class="fa fa-map-marker"></i> Dharmasraya
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-mobile"></i> 0823-8416-9797
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-clock-o"></i> <?php echo date('d M Y')?>
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Social Icons Start ==-->
                    <div class="col-lg-3 text-right">
                        <div class="header-social-icons">
                            <a href="#"><i class="fa fa-behance"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <!--== Social Icons End ==-->
                </div>
            </div>
        </div>
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-3">
                        <a href="<?= base_url()?>dashboard" class="logo">
                            <img src="<?= base_url()?>assets/cardoor/assets/img/logo.png" alt="JSOFT">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-9 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul class="row ml-2">
                                <li class="active"><a href="<?= base_url('dashboard')?>">Beranda</a>
                                  
                                </li>
                                <li><a href="<?= base_url('dashboard/data_mobil')?>">Mobil</a></li>
                                <?php if($this->session->userdata('nama')){?>
                                <li class=""><a href="<?= base_url('transaksi')?>">Transaksi</a>
                                </li>
                            <?php } else{}?>
                                <?php if($this->session->userdata('nama')){?>
                                <li><a href="#"><?= $this->session->userdata('nama')?></a>
                                    <ul>
                                    <li><a href="">MY PROFILE</a></li>
                                    <li><a class="nav-link" href="<?= base_url('auth/ganti_password')?>">Ganti Password</a></li>
                                    <li><a class="nav-link" href="<?= base_url('auth/logout')?>">Logout</a></li>
                                    <?php }else{?>
                                     <li class=""><a href="<?= base_url('register')?>">Register</a></li>
                                      <li><a class="nav-link" href="<?= base_url('auth')?>">
                                    Login</a></li>
                                        
                                </ul>
                                </li>
                                    <?php }?>
                               
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->
