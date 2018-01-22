<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title> <?php bloginfo("name") ?> </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body data-spy="scroll" data-target="#navmenu">
     <!--Home page style-->
        <header class="header navbar-fixed-top">
            <div class="navbar navbar-default main-menu">

                <div class="container">
                    <div class="navbar-header">
                        <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>-->
                        <a  href="" class="navbar-brand"><img src="<?php echo get_theme_file_uri('images/logo.png'); ?>" alt="Logo" /></a>

                    </div>
                    <div class="collapse navbar-collapse">

                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <a href="" class="btn_search"><i class="fa fa-search"></i></a>
                                <a href="" target="_blank" class="btn_buy">Buy $21</a>
                            </div>
                            <div class="main-navigation">
                                
                                <ul id="menu" class="nav navbar-nav">
                                    <li><a href="#home">Home</a></li>
                                    <li><a href="#about">About</a></li>
                                    <li><a href="#features">Features</a></li>
                                    <li><a href="#portfolio">Portfolio</a></li>
                                    <li><a href="#service">Service</a></li>
                                    <li><a href="#news">News</a>
                                        <ul >
                                            <li><a href="#home">Home</a></li>
                                            <li><a href="#about">About</a></li>
                                            <li><a href="#features">Features</a></li>
                                            <li><a href="#portfolio">Portfolio</a></li>
                                            <li><a href="#service">Service</a></li>
                                            <li><a href="#news">News</a></li>
                                            <li><a href="#contact">Contact</a></li>
                                        </ul></li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>
                            </div>


                        </form>
                    </div>

                </div>
            </div> 
        </header><!-- end of navbar -->