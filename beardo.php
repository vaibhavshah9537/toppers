<?php
include("header1.php");
$pro_id=$_GET['product_id'];
$sql = "SELECT * FROM product_master where product_id=".$pro_id."";
$result = mysql_query($sql);
if ($result) {
// output data of each row
$row = mysql_fetch_array($result)

?>
<!DOCTYPE HTML>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The Toppers..!</title>
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">




    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="gtco-loader"></div>
<div id="page">
    <nav class="gtco-nav" role="navigation">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 text-right gtco-contact">
                    <ul class="">
                        <li><a href="#"><i class="ti-mobile"></i> +91 8264686566 </a></li>
                        <li><a href="http://twitter.com/gettemplatesco"><i class="ti-twitter-alt"></i> </a></li>
                        <li><a href="https://accounts.google.com/ServiceLogin/identifier?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F%3Ftab%3Dwm&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=AddSession"><i class="icon-mail2"></i></a></li>
                        <li><a href="https://www.facebook.com/"><i class="ti-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div id="gtco-logo"><a href="index.php">Toppers Family's World <em>.</em></a></div>
                </div>
                <div class="col-xs-8 text-right menu-1">
                    <ul>
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li class="has-dropdown">
                            <a href="services.php">Services</a>
                            <ul class="dropdown">
                                <li><a href="book.php">Hair</a></li>
                                <li><a href="book.php">Nail</a></li>
                                <li><a href="book.php">Spa</a></li>
                                <li><a href="book.php">Color</a></li>
                            </ul>
                        </li>
                        <li><a href="education.php">Academic</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <header id="gtco-header" class="gtco-cover gtco-cover-xssmall" role="banner" style="background-image:url(images/img_bg_1.jpg);">
        <div class="overlay"></div>
        <div class="gtco-container">
        </div>
    </header>

    <div id="gtco-history" class="gtco-section border-bottom animate-box">
        <div class="gtco-container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                    <h2>Products</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="div-cart-container">
        <div class="div-prod-detail" align="left">
        <div class="div-img-block">
                <div class="flexslider">
                    <ul class="slides" style=" transition-duration: 0s; transform: translate3d(0px, 0px, 0px);align:center; ">
                        <img src=<?php echo $row['product_img_url'];?> width="400" height="400" clas="imgimg" />

                    </ul>
                </div>
            </div>

            <div class="div-content-block">
                <h3><?php echo $row["product_name"];?></h3>
                <hr />
                <div class="div-detail-price">₹<?php echo $row["product_price"];?></div>
                <div>
                    <p></p>
                    <table style="border-collapse: collapse; width: 295pt;" border="0" width="295" cellspacing="0" cellpadding="0"><colgroup><col style="mso-width-source: userset; mso-width-alt: 12586; width: 295pt;" width="295" /> </colgroup>
                        <tbody>
                        <tr style="height: 56.0pt;"><!--StartFragment-->
                              <td class="xl63" style="height: 56.0pt; width: 295pt;" width="295" height="56">
                            <?php  echo $row["product_dec"];?>
                          </tr>
                        </tbody>
                    </table>
                </div>
                <div class="div-qty-cart-block">
                                    <div class="div-cart-block">

                        <input type="submit" name="Details" value="Where to buy" class="add-to-cart" />
                        <span class="cart-icon"></span>
                    </div>
                </div>
                <hr />
            </div>

        <div class="div-hr20"></div>
        <div style="min-height:50px;background-color:transparent;" align="left">


            <div class="div-below-description-block">
                <div class="description-title">
                    <h4>How to use</h4>
                </div>
                <div class="div-product-desc">
                    <p>Wet hair and lather with a gentle massaging motion. Follow with Fiberstrong conditioner & finish with Intra-cylane Strengthening Leave-in cream </p>
                </div>
            </div>
        </div>
        <div class="div-hr20"></div>
    </div>
        <?php
        }
        ?>
</div>









    <footer id="gtco-footer" role="contentinfo">
        <div class="gtco-container">
            <div class="row row-p	b-md">
                <div class="col-md-4">
                    <div class="gtco-widget">
                        <h3>About Us</h3>
                        <p> We believe that you deserve to be beautiful without waiting
                            in line at the parlour! We are kutch's first enterprise to
                            bring the complete salon and wellness experience to your
                            doorstep whenever you need it.
                            Toppers goes all out to make you look like a million bucks
                            wherever you are and whenever you want. Our staff of expert
                            beauticians are trained to care and comfort you during your
                            makeovers. Our passionate team turns this luxury into a
                            convenience for women who want to be pampered.
                            Just tell us when and where, and we'll be there! </p>
                    </div>
                </div>

                <div class="col-md-4 col-md-push-1">
                    <div class="gtco-widget">
                        <h3>Links</h3>
                        <ul class="gtco-footer-links">
                            <li><a href="services.php">Services</a></li>

                            <li><a href="contact.php">Contact us</a></li>
                            <li><a href="#">Terms of services</a></li>
                            <li><a href="about.php">About us</a></li>
                            <li><a href="admin.php">Administrator</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="gtco-widget">
                        <h3>Get In Touch</h3>
                        <ul class="gtco-quick-contact">
                            <li><a href="#"><i class="icon-phone"></i> +91 8264686566</a></li>
                            <li><a href="#"><i class="icon-mail2"></i> hsoni.123442@gmail.com</a></li>
                            <li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="row copyright">
                <div class="col-md-12">
                    <p class="pull-left">
                        <small class="block">&copy; 2017 Toppers . All Rights Reserved.</small>
                        <small class="block">Designed by HARSHIL VAIBHAV SUNIL</small>
                    </p>
                    <p class="pull-right">
                    <ul class="gtco-social-icons pull-right">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    </ul>
                    </p>
                </div>
            </div>

        </div>
    </footer>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- countTo -->
<script src="js/jquery.countTo.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<!-- Main -->
<script src="js/main.js"></script>


</body>
</html>