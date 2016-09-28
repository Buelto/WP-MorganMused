<!Doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">
    <!-- bootstrap css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- jquery-->
    <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
    <!-- bootstrap JS-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">

    <title>
        <?php bloginfo('name'); ?>

    </title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <!-- Navigation-->


    <nav class="navbar navbar-static-top navbar-inverse text-center" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul>
                <?php
    $args =array(
        'theme_location' => 'primary'
    
    );
        ?>
                    <?php wp_nav_menu( $args ); ?>
            </ul>
        </div>
    </nav>

    <!--/Navigation-->
    <!-- Banner Image-->

    <div class="Jumbotron">
        <header class="site-header text-center">
            <h1><?php bloginfo('name'); ?></h1>
            <h3><?php bloginfo('description'); ?></h3>
            
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 hd-search">
                    <!--Header Search-->
                        <?php get_search_form();?>
                </div>
            </div>

        </header>

        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />



    </div>
    <!--/bannerImage-->

    <div class="container">



        <?php if(is_page()) { ?>

            <?php }?>

                <!--site header-->

                <!--/site header -->