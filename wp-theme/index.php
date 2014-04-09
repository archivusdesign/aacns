<?php
/*
* Template Name: Home
*/

$main_menus = get_field('menus', 2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home : Asian Australasian Congress of Neurological Surgeons</title>
	<!-- Bootstrap -->
	<link href="<?php bloginfo('template_directory')?>/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/style.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    
    <nav class="top-links navbar" role="navigation">
        <div class="container">
            <!-- Collect the nav links, forms, and other content for toggling -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Add to favorite</a></li>
                    <li><a href="#">Stay up to date</a></li>
                </ul>
        </div><!-- .container -->
    </nav><!-- .navbar -->

    <nav class="main-nav navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand" href="#">
                    <span class="fourteen">14<span class="fourteen th">th</span></span>
                </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                <?php foreach($main_menus as $menu): ?>
                    <li <?=count($menu['sub_menu']) ? 'class="dropdown"' : ''?> >

                        <a href="<?=$menu['main_menu']->guid?>"  <?=count($menu['sub_menu']) ? 'class="dropdown-toggle" data-toggle="dropdown"' : ''?> ><?=$menu['main_menu']->post_title?> <?=count($menu['sub_menu']) ? '<b class="caret"></b>' : ''?> </a>

                        <?php if(count($menu['sub_menu'])): ?>

                            <ul class="dropdown-menu">
                            <?php foreach($menu['sub_menu'] as $sub_menu): ?>
                                <li><a href="<?=$sub_menu['sub_link']->guid?>"><?=$sub_menu['sub_link']->post_title?></a></li>
                            <?php endforeach; ?>
                          </ul>

                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
                    
                </ul>
            </div><!-- .navbar-collapse -->
        </div><!-- .container -->
    </nav><!-- .navbar -->

    <main class="container">
        <div class="row">
            <section class="col-xs-10">
                <div class="row featured-bg">
                    <div class="col-xs-9 intro">
                        <h1>Asian Australasian Congress</h1>
                        <h1>of Neurological Surgeons</h1>
                        <h4>15 - 18 April 2015 </h4>
                        <h4>International Convention Centre Jeju, Jeju Island, Korea</h4>
                    </div>
                    <div class="col-xs-3">
                        <p><button class="btn btn-default register">Register Now!</button></p>
                        <div class="panel panel-default">
                            <div class="panel-heading">Submit an Abstract</div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">What's New</div>
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias dignissimos nobis ex</p>
                                <button class="btn btn-default btn-yellow pull-right">View More</button>
                            </div>
                        </div>
                    </div>
                </div><!-- .row // featured bg-->

                <div class="row">
                    <div class="col-xs-12">
                        <h4>INTRODUCTION</h4>
                    </div>
                    <div class="col-xs-9">
                        <p>Welcome to the 14th Asian Australasian Congress of Neurological Surgeons (AACNS). Hosted by Asian Australian Society of Neurological Surgeons (AASNS) and organised by AACNS 2015 Organizing Committee and Korean Neurosurgical Society (KNS), AACNS is one of region’s prominent medical congresses dedicated to the study of neurology.</p>
                        <p>The quadrennial congress serves as an excellent platform for medical professionals to share their medical knowledge and research, receive latest updates on medical developments and expand their network of industry contacts.</p>
                        <p>The four-day congress will feature an exciting line-up of expert speakers including top practitioners, opinion leaders and researchers. Delegates can look forward to an intensive knowledge-sharing event comprising plenary sessions, oral presentations and video screenings. There will be a host of networking opportunities for delegates to rub shoulders with top experts and opinion leaders.</p>
                    </div>
                    <div class="col-xs-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">Photo Gallery<span class="panel-icon gallery"></div>
                            <div class="panel-body">
                                <p>View Previous</p>
                                <p>Congress Photos</p>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">Congress Highlights<span class="panel-icon video"></div>
                            <img src="img/video.png" alt="Video Highlights" class="img-responsive">
                        </div>
                    </div>
                </div><!-- .row -->

                <div class="row">
                   <div class="col-xs-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">Important Dates<span class="panel-icon calendar"></span></div>
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, repudiandae deleniti obcaecati reiciendis at ullam omnis blanditiis suscipit minima odio blanditiis  minima elit odio.</div>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">Visit Korea<span class="panel-icon travel"></span></div>
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, repudiandae deleniti obcaecati reiciendis at ullam omnis blanditiis suscipit minima odio blanditiis  minima elit odio.</div>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">Doownload Center<span class="panel-icon download"></span></div>
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, repudiandae deleniti obcaecati reiciendis at ullam omnis blanditiis suscipit minima odio blanditiis  minima elit odio.</div>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="panel panel-default newsletter-panel">
                            <div class="panel-body">
                                <span class="title">Newsletter</span>
                                <p>Subscribe to our Newsletter</p>
                                <form role="form">
                                    <div class="form-group">
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-default btn-yellow pull-right">Subscribe!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- .row -->

                <div class="row sponsors">
                    <div class="col-xs-12">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="container">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="navbar-brand" href="#">Sponsors</div>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a href="#"><img src="img/sponsors-1.png" alt=""></a></li>
                                    <li><a href="#"><img src="img/sponsors-2.png" alt=""></a></li>
                                    <li><a href="#"><img src="img/sponsors-3.png" alt=""></a></li>
                                    <li><a href="#"><img src="img/sponsors-4.png" alt=""></a></li>
                                </ul>
                            </div><!-- .navbar-collapse -->
                        </div><!-- .container -->
                    </nav><!-- .navbar -->
                    </div>
                </div><!-- .row // sponsors -->

                <div class="row bottom-sponsors">
                    <div class="col-xs-4">
                        <div class="hosted-by">Hosted by:</div>
                        <div class="bsponsors">
                            <img class="pull-left" src="img/sponsor-bottom2.jpg" alt="...">
                            <aside>Asian Australasian Society of Neurological Surgeons</aside>
                        </div>
                    </div>
                    <div class="col-xs-3 middle">
                        <div class="hosted-by">Organized by:</div>
                        <div class="bsponsors">
                            <aside>AACNS 2015 Organizing Committee</aside>
                            <img class="pull-right" src="img/sponsor-bottom3.jpg" alt="...">
                        </div>
                    </div>
                    <div class="col-xs-5 last">
                        <div class="hosted-by">Secretariat:</div>
                        <div class="bsponsors">
                            <img class="pull-left"src="img/sponsor-bottom1.jpg" alt="...">
                            <aside>20 Kallang Avenue Level 2, PICO Creative Centre Singapore 339411, Tel: +65 6393 02434 │ Fax: +65 6292 7577, Email: info@aacns2015.com</aside>
                        </div>
                    </div>
                </div><!-- .row // bottom-sponsors -->
            </section><!-- .col-xs-10 -->

            <aside class="col-xs-2 side-widget">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading blue">Quick Download <span class="glyphicon glyphicon-play-circle"></span></div>
                            <div class="panel-body blue">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, aut!</div>
                            <div class="panel-footer blue">Top <span class="glyphicon glyphicon-chevron-up"></span></div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading gray">News Letter <span class="glyphicon glyphicon-play-circle"></div>
                            <div class="panel-body gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, repudiandae deleniti obcaecati reiciendis at ullam omnis blanditiis suscipit minima odio.</div>
                            <div class="panel-footer gray">Top <span class="glyphicon glyphicon-chevron-up"></div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading green">Quick Menu <span class="glyphicon glyphicon-play-circle"></div>
                            <div class="panel-body green">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, repudiandae deleniti obcaecati reiciendis at ullam omnis blanditiis suscipit minima odio.</div>
                            <div class="panel-footer green">Top <span class="glyphicon glyphicon-chevron-up"></div>
                        </div>
                    </div>
                </div>
            </aside><!-- .col-xs-2 -->
        </div><!-- .row -->
    </main><!-- .container -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php bloginfo('template_directory')?>/js/bootstrap.min.js"></script>
</body>
</html>