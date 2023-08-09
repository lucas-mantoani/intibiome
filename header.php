<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php if (is_home() || is_front_page()) { echo bloginfo('name'); } else { echo wp_title(''); } ?></title>
<!-- JS -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
<!-- CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<!-- FONTE -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<!-- IE  -->
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- wp_header -->
<?php wp_head(); ?>
</head>
<body>

<header class="menu">
    <a href="<?php echo get_option('home'); ?>/">
     <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="logo" alt="intibiome">
    </a>
    <a href="" data-toggle="modal" data-target="#pesquisa" class="busca"><i class="fas fa-search"></i></a>

    <nav class="navbar navbar-expand-lg d-lg-block d-md-none d-none">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button class="navbar-toggler px-0" type="button" data-mdb-toggle="collapse"
      data-mdb-target="#navbarExampleOnHover" aria-controls="navbarExampleOnHover" aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarExampleOnHover">
      <!-- Itens do menu -->
      <ul class="navbar-nav me-auto ps-lg-0" style="padding-left: 0.15rem">
        <!-- Item dropdown -->
        <li class="nav-item dropdown dropdown-hover position-static">
            <a class="nav-link dropdown-toggle" href="#" id="about" role="button" data-mdb-toggle="dropdown" aria-expanded="false">About Us</a>
          <div class="dropdown-menu w-100 mt-0" aria-labelledby="about">
            <div class="container">
                <div class="list-group list-group-flush">
                    <a href="" class="list-group-item list-group-item-action">brand philosophy</a>
                    <a href="" class="list-group-item list-group-item-action">product technology</a>
                </div>
            </div>
        </div>
    </li>
    
    <li class="nav-item dropdown dropdown-hover position-static">
        <a class="nav-link dropdown-toggle" href="#" id="produtos" role="button"data-mdb-toggle="dropdown" aria-expanded="false">Our Products</a>
    <div class="dropdown-menu w-100 mt-0" aria-labelledby="produtos">
        <div class="container">
            <div class="list-group list-group-flush">
                <a href="" class="list-group-item list-group-item-action">all products</a>
                <a href="" class="list-group-item list-group-item-action">intibiome wellness</a>
                <a href="" class="list-group-item list-group-item-action">intibiome active</a>
                <a href="" class="list-group-item list-group-item-action">intibiome agecare</a>
            </div>
        </div>
    </div>
</li>        

<li class="nav-item dropdown dropdown-hover position-static">
    <a class="nav-link dropdown-toggle" href="#" id="intimate" role="button" data-mdb-toggle="dropdown" aria-expanded="false"> Intimate Health</a>
          <div class="dropdown-menu w-100 mt-0" aria-labelledby="intimate">
            <div class="container">
                <div class="list-group list-group-flush">
                    <a href="" class="list-group-item list-group-item-action">article 1</a>
                    <a href="" class="list-group-item list-group-item-action">article 2</a>
                    <a href="" class="list-group-item list-group-item-action">article 3</a>
                    <a href="" class="list-group-item list-group-item-action">faq</a>
                </div>
            </div>
        </div>
    </li> 

    <li class="nav-item">
      <a class="nav-link" href="#">Contact Us</a>
    </li>
</ul>
    </div>
  </div>
</nav>
<div class="d-lg-none d-md-block d-block">
<nav class="navbar navbar-expand-lg" data-hover="dropdown">
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarSupportedContent" style="">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="">brand philosophy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">all products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">intibiome wellness</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">intibiome active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">intibiome agecare</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">article 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">article 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">article 3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">faq</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="">contact us</a>
                        </li> 
                    </ul>
                </div>
            </nav>
</div>
</header>

