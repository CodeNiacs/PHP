<?php
$locale = "nl_NL.utf8";
if
(
    ( $_SERVER['SERVER_NAME'] == 'codeniacs.eu' )
    ||
    ( $_SERVER['SERVER_NAME'] == 'www.codeniacs.eu' )
)
{
    $locale = "en_GB.utf8";
}
if ( isset( $_GET["lang"] ) )
{
    $locale = $_GET["lang"];
}
putenv( "LANG=" . $locale );
setlocale( LC_ALL, $locale );
putenv( "LANGUAGE=" . $locale );
if ( !file_exists( "locale/" . $locale . "/msg.php" ) )
{
    exit;
}
include "locale/" . $locale . "/msg.php";
if ( !file_exists( "locale/" . $locale . "/link.php" ) )
{
    exit;
}
include "locale/" . $locale . "/link.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Codeniacs">
    <meta name="copyright" content="Codeniacs">
    <title>Codeniacs</title>

    <link rel="shortcut icon" href="images/favicon.ico">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />
<!--    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css" />-->
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" />
    <link rel="stylesheet" type="text/css" href="css/unslider.css" />
    <link rel="stylesheet" type="text/css" href="css/template.css" />
</head>

<body data-target="#codeniacs_navbar" data-spy="scroll">
    <header id="codeniacs_header">
        <div id="codeniacs_headerInner">
            <nav id="codeniacs_navbar" class="navbar navbar-default">
                <div class="container">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#codeniacs_navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img class="logo_codeniacs" src="images/logo.png" alt="logo Codeniacs"></a>
                    </div>

                    <div class="codeniacs_menuItem pull-right">
                        <div class="collapse navbar-collapse pull-left" id="codeniacs_navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#codeniacs_header">Home <span class="sr-only">(current)</span></a></li>
                                <li><a href="#codeniacs_what"><?php echo $msg[ "What" ];?>?</a></li>
                                <li><a href="#codeniacs_why"><?php echo $msg[ "Why" ];?>?</a></li>
                                <li><a href="#codeniacs_how"><?php echo $msg[ "How" ];?>?</a></li>
                                <li><a href="#codeniacs_who"><?php echo $msg[ "Who" ];?>?</a></li>
                                <li><a href="#codeniacs_contact"><i class="mdi mdi-contact-mail codeniacs_icon"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <div>
                <div class="codeniacsLinksGroup">
                    <a href="?lang=en_GB.utf8"><img class="cd_flag" src="images/ico/gb.svg" alt="GB"></a>
                    <a href="?lang=nl_NL.utf8"><img class="cd_flag" src="images/ico/nl.svg" alt="NL"></a>
                    <a href="?lang=es_ES.utf8"><img class="cd_flag" src="images/ico/es.svg" alt="ES"></a>
                </div>
            </div>

            <section id="codeniacs_slider" class="carousel slide container" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <h2 class="codeniacs_sectionHeading">
                            <?php echo $msg[ "Entrepreneurial learning by ICT" ];?>
                        </h2>
                        <a href="<?php echo $link[ "URL_wiki" ];?>" class="codeniacs_btn"><?php echo $msg[ "Learn more" ];?>?</a>
                    </div>
                    <div class="item">
                        <h2 class="codeniacs_sectionHeading">
                            <?php echo $msg[ "21st century skills" ];?>
                        </h2>
                        <a href="<?php echo $link[ "URL_wiki" ];?>" class="codeniacs_btn"><?php echo $msg[ "Learn more" ];?>?</a>
                    </div>
                    <div class="item">
                        <h2 class="codeniacs_sectionHeading">
                            <?php echo $msg[ "Hack Education" ];?>
                        </h2>
                        <a href="<?php echo $link[ "URL_wiki" ];?>" class="codeniacs_btn"><?php echo $msg[ "Learn more" ];?>?</a>
                    </div>
                    <div class="item">
                        <h2 class="codeniacs_sectionHeading">
                            <?php echo $msg[ "Young ICT entrepreneurs" ];?>
                        </h2>
                        <a href="<?php echo $link[ "URL_wiki" ];?>" class="codeniacs_btn"><?php echo $msg[ "Learn more" ];?>?</a>
                    </div>
                </div>

                <ol class="carousel-indicators clearfix">
                    <li data-target="#codeniacs_slider" data-slide-to="0" class="active">
                        <div class="inner">
                            <span class="number">01</span> <?php echo $msg[ "What" ];?>?
                        </div>
                    </li>
                    <li data-target="#codeniacs_slider" data-slide-to="1">
                        <div class="inner">
                            <span class="number">02</span> <?php echo $msg[ "Why" ];?>?
                        </div>
                    </li>
                    <li data-target="#codeniacs_slider" data-slide-to="2">
                        <div class="inner">
                            <span class="number">03</span> <?php echo $msg[ "How" ];?>?
                        </div>
                    </li>
                    <li data-target="#codeniacs_slider" data-slide-to="3">
                        <div class="inner">
                            <span class="number">04</span> <?php echo $msg[ "Who" ];?>?
                        </div>
                    </li>
                </ol>
            </section>
        </div>
    </header>

    <section id="codeniacs_what">
        <div class="container">
            <h2 class="codeniacs_sectionHeading">
                <span class="codeniacs_subHeading"><?php echo $msg[ "Our promise to education is" ];?></span>
                <?php echo $msg[ "Fun-raising and stress-reducing" ];?>
            </h2>
            <p class="codeniacs_sectionDesc"><?php echo $msg[ "Setup Codeniacs" ];?>
            </p>
            <div class="sectionContent">
                <div class="row codeniacs_hoverEffect">
                    <div class="col-md-4 col-sm-4">
                        <div class="item">
                            <a class="overlay" href="http://www.incubatorsfoundation.com">
                                <span class="content">
                                    <i class="mdi mdi-school codeniacs_icon"></i>
                                    <?php echo $msg[ "Experts in the school" ];?>
                                </span>
                                <img src="images/what/img-1.jpg" alt="<?php echo $msg[ "Experts in the school" ];?>">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="item">
                            <a class="overlay" href="https://elo.codeniacs.nl">
                                <span class="content">
                                    <i class="mdi mdi-tablet-cellphone codeniacs_icon"></i>
                                    <?php echo $msg[ "Online 24/7 support" ];?>
                                </span>
                                <img src="images/what/img-2.jpg" alt="<?php echo $msg[ "Online 24/7 support" ];?>">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="item">
                            <a class="overlay" href="<?php echo $link[ "URL_wiki" ];?>">
                                <span class="content">
                                    <i class="mdi mdi-summit codeniacs_icon"></i>
                                    <?php echo $msg[ "Events" ];?>
                                </span>
                                <img src="images/what/img-3.jpg" alt="<?php echo $msg[ "Events" ];?>">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="codeniacs_why">
        <div class="container">
            <h2 class="codeniacs_sectionHeading">
                <span class="codeniacs_subHeading"><?php echo $msg[ "Entrepreneurial behavior" ];?></span>
                <?php echo $msg[ "21st century skills" ];?>
            </h2>
            <p class="codeniacs_sectionDesc"><?php echo $msg[ "Hacking" ];?>
            </p>
            <div class="sectionContent">
                <div class="codeniacs_devices">
                    <img class="tablet" src="images/why/<?php if ( $locale === "nl_NL.utf8" ) { echo "Kaart_21st_century_skills"; } else { echo "Map_21st century skills_EN"; } ?>.png" alt="21st century skills">
                    <img class="mobile" src="images/why/<?php if ( $locale === "nl_NL.utf8" ) { echo "Kaart_5D's"; } else { echo "Map_5D's_EN"; } ?>.png" alt="5Ds">
                </div>
            </div>
        </div>
    </section>

    <section id="codeniacs_how">
        <div class="container">
            <h2 class="codeniacs_sectionHeading">
                <span class="codeniacs_subHeading"><?php echo $msg[ "We work with" ];?></span>
                <?php echo $msg[ "Modern Techniques" ];?>
            </h2>
            <p class="codeniacs_sectionDesc"><?php echo $msg[ "Programming" ];?>
            </p>

            <div class="sectionContent">
                <div class="fw">
                    <div class="col-md-4 col-sm-6 item ">
                        <div>
                            <b class="mdi mdi-gamepad codeniacs_icon fsr">&nbsp;<?php echo $msg[ 'Game' ];?></b>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 item ">
                        <div>
                            <b class="mdi mdi-web codeniacs_icon fsr">&nbsp;<?php echo $msg[ "Website" ];?></b>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 item ">
                        <div>
                            <b class="mdi mdi-application codeniacs_icon fsr">&nbsp;<?php echo $msg[ "App" ];?></b>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 item ">
                        <div>
                            <b class="mdi mdi-fridge-filled codeniacs_icon fsr">&nbsp;<?php echo $msg[ 'Embedded system' ];?></b>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 item ">
                        <div>
                            <b class="mdi mdi-keyboard codeniacs_icon fsr">&nbsp;<?php echo $msg[ "IT-company" ];?></b>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 item ">
                        <div>
                            <b class="mdi mdi-fast-forward codeniacs_icon fsr">&nbsp;</b>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 item ">
                        <div>
                            <i class="mdi mdi-robot codeniacs_icon fsr">&nbsp;<?php echo $msg[ "Robotics" ];?></i>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 item ">
                        <div>
                            <i class="mdi mdi-alien codeniacs_icon fsr">&nbsp;<?php echo $msg[ "Artificial Intelligence" ];?></i>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 item ">
                        <div>
                            <i class="mdi mdi-bitcoin codeniacs_icon fsr">&nbsp;<?php echo $msg[ "Blockchain" ];?></i>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 item ">
                        <div>
                            <i class="mdi mdi-brush codeniacs_icon fsr">&nbsp;<?php echo $msg[ "Computer-aided Design" ];?></i>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 item ">
                        <div>
                            <i class="mdi mdi-domain codeniacs_icon fsr">&nbsp;<?php echo $msg[ "Business Intelligence" ];?></i>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 item ">
                        <div>
                            <i class="mdi mdi-security codeniacs_icon fsr">&nbsp;<?php echo $msg[ "Cybersecurity" ];?></i>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 item ">
                        <div>
                            <i class="mdi mdi-unity codeniacs_icon fsr">&nbsp;Unity</i>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 item ">
                        <div>
                            <i class="mdi mdi-language-python-text codeniacs_icon fsr">&nbsp;Python</i>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 item ">
                        <div>
                            <i class="mdi mdi-language-php codeniacs_icon fsr">&nbsp;PHP</i>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 item ">
                        <div>
                            <i class="mdi mdi-language-html5 codeniacs_icon fsr">&nbsp;XHTML</i>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 item ">
                        <div>
                            <i class="mdi mdi-sass codeniacs_icon fsr">&nbsp;SCSS</i>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 item ">
                        <div>
                            <i class="mdi mdi-language-typescript codeniacs_icon fsr">&nbsp;Typescript</i>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="codeniacs_sectionHeading">
                <span class="codeniacs_subHeading">&nbsp;</span>
                <span class="codeniacs_subHeading"><?php echo $msg[ "and" ];?></span>
                <?php echo $msg[ "Meaningful events" ];?>
            </h2>
            <div class="sectionContent">
                <div class="fw">
                    <div class="col-md-4 col-sm-6 item ">
                        <div>
                            <b class="mdi mdi-account-group codeniacs_icon fsr">&nbsp;Meetup</b>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 item ">
                        <div>
                            <b class="mdi mdi-code-tags-check codeniacs_icon fsr">&nbsp;Hackathon</b>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 item ">
                        <div>
                            <b class="mdi mdi-summit codeniacs_icon fsr">&nbsp;Summit</b>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="codeniacs_sectionHeading">
                <span class="codeniacs_subHeading">&nbsp;</span>
                <span class="codeniacs_subHeading"><?php echo $msg[ "and" ];?></span>
                <?php echo $msg[ "MVP" ];?>
            </h2>
            <p class="codeniacs_sectionDesc"><?php echo $msg[ "Agile" ];?>
            </p>
            <div class="sectionContent">
                <div class="col-md-4 col-sm-4">
                    <div class="item">
                        <a class="overlay">
                            <img src="images/agile/product_<?php if ( $locale === "nl_NL.utf8" ) { echo "nl"; } else { echo "en"; } ?>.svg" alt="product">
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="item">
                        <a class="overlay">
                            <img src="images/agile/scrum_<?php if ( $locale === "nl_NL.utf8" ) { echo "nl"; } else { echo "en"; } ?>.svg" width="620" alt="scrum">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="codeniacs_who">
        <div class="container">
            <h2 class="codeniacs_sectionHeading">
                <span class="codeniacs_subHeading"><?php echo $msg[ "Our partners" ];?></span>
                <?php echo $msg[ "together form a unique crazy quilt" ];?>
            </h2>
            <p class="codeniacs_sectionDesc">
                <?php echo $msg[ "Codeniacs description" ];?>
            </p>
        </div>
        <div class="sectionContent">
            <ul class="codeniacs_whoItems">
                <li class="item">
                    <a title="EIF" href="http://incubatorsfoundation.com/" target="_blank">
                        <img src="images/partners/Logo_Eclipsefoundation.png" alt="Logo Eclipse" />
                        <div class="overlay">
                            <div class="content">
                                <i class="mdi mdi-crown codeniacs_icon"></i>
                                <h4 class="title">Eclipse Incubators Foundation</h4>
                                <span class="desc">Evenementen en gastdocenten</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a title="Entreprenasium" href="http://www.entreprenasium.nl" target="_blank">
                        <img src="images/partners/Logo_Entreprenasium.png" alt="Logo Entreprenasium"/>
                        <div class="overlay">
                            <div class="content">
                                <i class="mdi mdi-cube-outline codeniacs_icon"></i>
                                <h4 class="title">Entreprenasium</h4>
                                <span class="desc">Concept "Ondernemend leren"</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a title="CBS de Rietzee" href="http://derietzee.nl/" target="_blank">
                        <img src="images/partners/Logo_CBS_de_Rietzee.png" alt="Logo de Rietzee"/>
                        <div class="overlay">
                            <div class="content">
                                <i class="mdi mdi-desktop-mac codeniacs_icon"></i>
                                <h4 class="title">CBS de Rietzee</h4>
                                <span class="desc">Pilot Primair Onderwijs</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a title="Sint Nicolaasschool" href="https://sintnicolaasschool.com/" target="_blank">
                        <img src="images/partners/Logo_Nicolaasschool.png" alt="Logo Nicolaasschool"/>
                        <div class="overlay">
                            <div class="content">
                                <i class="mdi mdi-desktop-mac codeniacs_icon"></i>
                                <h4 class="title">Sint Nicolaasschool</h4>
                                <span class="desc">Pilot Primair Onderwijs</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a title="Groninger Forum" href="https://www.groningerforum.nl/" target="_blank">
                        <img src="images/partners/Logo_Groningerforum.png" alt="Logo Groningerforum"/>
                        <div class="overlay">
                            <div class="content">
                                <i class="mdi mdi-flower codeniacs_icon"></i>
                                <h4 class="title">Groninger Forum</h4>
                                <span class="desc">Pilot Artificial Intelligence</span>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section id="codeniacs_contact">
        <div class="container">
            <h2 class="codeniacs_sectionHeading">
                <i class="mdi mdi-map-marker codeniacs_icon"></i>
                <span class="text"><?php echo $msg[ "Open map" ];?></span>
                <span class="text" style="display: none;"><?php echo $msg[ "Close map" ];?></span>
            </h2>
            <div class="mapWrap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2388.869835152895!2d6.520985315833677!3d53.2201821799528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c9cd29ab9fcd2d%3A0x2d90f9c4c615e72c!2sOnyxstraat%2C+Groningen!5e0!3m2!1snl!2snl!4v1531821195965" width="800" height="600" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="colInfo">
                        Copyright &copy; 2016 <a target="_blank" href="https://www.codeniacs.nl" title="Codeniacs.nl">Codeniacs.nl</a>. All Rights Reserved.
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="colInfo">
                        <span class="text"></span>
                        <a href="https://www.facebook.com/CodeniacsNL/" target="_blank" class="codeniacs_icon"><i class="mdi mdi-facebook"></i></a>
                        <a href="https://twitter.com/codeniacs" target="_blank" class="codeniacs_icon"><i class="mdi mdi-twitter"></i></a>
                        <a href="https://www.linkedin.com/company/codeniacs/" target="_blank" class="codeniacs_icon"><i class="mdi mdi-linkedin"></i></a>
                        <span class="text"></span>
                        <a href="https://github.com/Codeniacs" target="_blank" class="codeniacs_icon"><img src="images/github_logo.png" alt="Github Logo"></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="colInfo">
                        <form class="codeniacs_subscribeForm">
                            <div class="input-group input-group-lg">
                                <input type="email" class="form-control" placeholder="Email" required>
                                <span class="input-group-btn">
                                    <button class="btn btn-success" type="submit"><?php echo $msg[ "Sign up" ];?>!</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" id="codeniacs_scrollToTop">Naar de Top</a>

    <script src="js/jquery.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.hoverdir.js"></script>
    <script src="js/modernizr.custom.97074.js"></script>
<!--    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js" integrity="sha256-/YAntTqXy9V4LoXFkI5WPDl3ZwP/knn1BljmMJJ7QWc=" crossorigin="anonymous"></script>
    <script src="js/unslider-min.js"></script>
    <script src="js/template.js"></script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- css3-mediaqueries.js for IE less than 9 -->
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

</body>
</html>
