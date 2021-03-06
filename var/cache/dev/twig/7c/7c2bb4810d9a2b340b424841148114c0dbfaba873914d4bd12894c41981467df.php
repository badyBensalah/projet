<?php

/* base.html.twig */
class __TwigTemplate_6f06a2e167898936c970ccaddd03ba9d16b2a83ee7c92efba12230c1ad962997 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81570c8fd08687b29a6d26729561c95f8ccc13a7376509c04e80509bddaa8b0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81570c8fd08687b29a6d26729561c95f8ccc13a7376509c04e80509bddaa8b0a->enter($__internal_81570c8fd08687b29a6d26729561c95f8ccc13a7376509c04e80509bddaa8b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f3b7cec4c8d1b554dfc00ca4998d2f803e323e0af8b9cfcf12fd715a7b1db3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3b7cec4c8d1b554dfc00ca4998d2f803e323e0af8b9cfcf12fd715a7b1db3a->enter($__internal_6f3b7cec4c8d1b554dfc00ca4998d2f803e323e0af8b9cfcf12fd715a7b1db3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]><html class=\"ie ie8\"> <![endif]-->
<!--[if IE 9]><html class=\"ie ie9\"> <![endif]-->
<html lang=\"en\">

<!-- Mirrored from www.ansonika.com/citytours/index_7.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Feb 2018 23:59:10 GMT -->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <meta name=\"description\" content=\"Citytours - Premium site template for city tours agencies, transfers and tickets.\">
    <meta name=\"author\" content=\"Ansonika\">
    <title>CITY TOURS - City tours and travel site template by Ansonika</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" />

    <!-- Favicons-->
    <link rel=\"shortcut icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/img/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/img/apple-touch-icon-57x57-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"72x72\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/img/apple-touch-icon-72x72-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"114x114\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/img/apple-touch-icon-114x114-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"144x144\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/img/apple-touch-icon-144x144-precomposed.png"), "html", null, true);
        echo "\">

    <!-- Google web fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Gochi+Hand|Lato:300,400|Montserrat:400,400i,700,700i\" rel=\"stylesheet\">

    <!-- CSS -->
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/css/base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- SPECIFIC CSS -->
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/css/skins/square/grey.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/css/date_time_picker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!--[if lt IE 9]>
      <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/js/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->

</head>
<body>

<!--[if lte IE 8]>
    <p class=\"chromeframe\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a>.</p>
<![endif]-->

<div id=\"preloader\">
    <div class=\"sk-spinner sk-spinner-wave\">
        <div class=\"sk-rect1\"></div>
        <div class=\"sk-rect2\"></div>
        <div class=\"sk-rect3\"></div>
        <div class=\"sk-rect4\"></div>
        <div class=\"sk-rect5\"></div>
    </div>
</div>
<!-- End Preload -->

<div class=\"layer\"></div>
<!-- Mobile menu overlay mask -->

<!-- Header================================================== -->
<header>
    <div id=\"top_line\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-6 col-xs-6\"><i class=\"icon-phone\"></i><strong>00216 58 362 134</strong></div>

                <div class=\"col-md-6 col-sm-6 col-xs-6\">
                    <ul id=\"top_links\">
                        <li>
                            <div class=\"dropdown dropdown-access\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" id=\"access_link\">Sign in</a>
                                <div class=\"dropdown-menu\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6 col-sm-6 col-xs-6\">
                                            <a href=\"#\" class=\"bt_facebook\">
                                                <i class=\"icon-facebook\"></i>Facebook </a>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-6\">
                                            <a href=\"#\" class=\"bt_paypal\">
                                                <i class=\"icon-paypal\"></i>Paypal </a>
                                        </div>
                                    </div>
                                    <div class=\"login-or\">
                                        <hr class=\"hr-or\">
                                        <span class=\"span-or\">or</span>
                                    </div>
                                    <div class=\"form-group\">
                                        ";
        // line 88
        $this->displayBlock('content', $context, $blocks);
        // line 89
        echo "                                        <a id=\"forgot_pw\" href=\"#\">Forgot password?</a>
                                    <input type=\"submit\" name=\"Sign_in\" value=\"Sign in\" id=\"Sign_in\" class=\"button_drop\">
                                    <input type=\"submit\" name=\"Sign_up\" value=\"Sign up\" id=\"Sign_up\" class=\"button_drop outline\">
                                </div>
                            </div><!-- End Dropdown access -->
                        </li>
                        <li><a href=\"wishlist.html\" id=\"wishlist_link\">Wishlist</a></li>
                    </ul>
                </div>
            </div><!-- End row -->
        </div><!-- End container-->
    </div><!-- End top line-->

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-3 col-xs-3\">
                <div id=\"logo_home\">
                    <h1><a href=\"index.html\" title=\"City tours travel template\">City Tours travel template</a></h1>
                </div>
            </div>
            <nav class=\"col-md-9 col-sm-9 col-xs-9\">
                <a class=\"cmn-toggle-switch cmn-toggle-switch__htx open_close\" href=\"javascript:void(0);\"><span>Menu mobile</span></a>
                <div class=\"main-menu\">
                    <div id=\"header_menu\">
                        <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/img/logo_sticky.png"), "html", null, true);
        echo "\" width=\"160\" height=\"34\" alt=\"City tours\" data-retina=\"true\">
                    </div>
                    <a href=\"#\" class=\"open_close\" id=\"close_in\"><i class=\"icon_set_1_icon-77\"></i></a>
                    <ul>
                        <li class=\"submenu\">
                            <a href=\"javascript:void(0);\" class=\"show-submenu\">Experiences <i class=\"icon-down-open-mini\"></i></a>
                            <ul>
                                <li><a href=\"all_tours_list.html\">All tours list</a></li>
                                <li><a href=\"all_tours_grid.html\">All tours grid</a></li>
                                <li><a href=\"all_tours_map_listing.html\">All tours map listing</a></li>
                                <li><a href=\"single_tour.html\">Single tour page</a></li>
                                <li><a href=\"single_tour_with_gallery.html\">Single tour with gallery</a></li>
                                <li><a href=\"javascript:void(0);\">Single tour fixed sidebar</a>
                                    <ul>
                                        <li><a href=\"single_tour_fixed_sidebar.html\">Single tour fixed sidebar</a></li>
                                        <li><a href=\"single_tour_with_gallery_fixed_sidebar.html\">Single tour 2 Fixed Sidebar</a></li>
                                        <li><a href=\"cart_fixed_sidebar.html\">Cart Fixed Sidebar</a></li>
                                        <li><a href=\"payment_fixed_sidebar.html\">Payment Fixed Sidebar</a></li>
                                        <li><a href=\"confirmation_fixed_sidebar.html\">Confirmation Fixed Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"single_tour_working_booking.html\">Single tour working booking</a></li>
                                <li><a href=\"single_tour_datepicker_v2.html\">Date and time picker V2</a></li>

                                <li><a href=\"cart.html\">Single tour cart</a></li>
                                <li><a href=\"payment.html\">Single tour booking</a></li>
                            </ul>
                        </li>
                        <li class=\"submenu\">
                            <a href=\"javascript:void(0);\" class=\"show-submenu\">Hotels <i class=\"icon-down-open-mini\"></i></a><ul>
                                <li><a href=\"all_hotels_list.html\">All hotels list</a></li>
                                <li><a href=\"all_hotels_grid.html\">All hotels grid</a></li>
                                <li><a href=\"all_hotels_map_listing.html\">All hotels map listing</a></li>
                                <li><a href=\"single_hotel.html\">Single hotel page</a></li>
                                <li><a href=\"single_hotel_datepicker_adv.html\">Single hotel datepicker adv</a></li>
                                <li><a href=\"single_hotel_datepicker_v2.html\">Date and time picker V2</a></li>
                                <li><a href=\"single_hotel_working_booking.html\">Single hotel working booking</a></li>
                                <li><a href=\"single_hotel_contact.html\">Single hotel contact working</a></li>
                                <li><a href=\"cart_hotel.html\">Cart hotel</a></li>
                                <li><a href=\"payment_hotel.html\">Booking hotel</a></li>
                                <li><a href=\"confirmation_hotel.html\">Confirmation hotel</a></li>
                            </ul>
                        </li>
                        <li class=\"submenu\">
                            <a href=\"javascript:void(0);\" class=\"show-submenu\">Transfers <i class=\"icon-down-open-mini\"></i></a>
                            <ul>
                                <li><a href=\"all_transfer_list.html\">All transfers list</a></li>
                                <li><a href=\"all_transfer_grid.html\">All transfers grid</a></li>
                                <li><a href=\"single_transfer.html\">Single transfer page</a></li>
                                <li><a href=\"single_transfer_datepicker_v2.html\">Date and time picker V2</a></li>
                                <li><a href=\"cart_transfer.html\">Cart transfers</a></li>
                                <li><a href=\"payment_transfer.html\">Booking transfers</a></li>
                                <li><a href=\"confirmation_transfer.html\">Confirmation transfers</a></li>
                            </ul>
                        </li>
                        <li class=\"submenu\">
                            <a href=\"javascript:void(0);\" class=\"show-submenu\">Cruises <i class=\"icon-down-open-mini\"></i></a>
                            <ul>
                                <li><a href=\"all_restaurants_list.html\">All restaurants list</a></li>
                                <li><a href=\"all_restaurants_grid.html\">All restaurants grid</a></li>
                                <li><a href=\"all_restaurants_map_listing.html\">All restaurants map listing</a></li>
                                <li><a href=\"single_restaurant.html\">Single restaurant page</a></li>
                                <li><a href=\"single_restaurant_datepicker_v2.html\">Date and time picker V2</a></li>
                                <li><a href=\"payment_restaurant.html\">Booking restaurant</a></li>
                                <li><a href=\"confirmation_restaurant.html\">Confirmation transfers</a></li>
                            </ul>
                        </li>
                        <li class=\"submenu\">
                            <a href=\"javascript:void(0);\" class=\"show-submenu\">Restaurants <i class=\"icon-down-open-mini\"></i></a>
                            <ul>
                                <li><a href=\"all_restaurants_list.html\">All restaurants list</a></li>
                                <li><a href=\"all_restaurants_grid.html\">All restaurants grid</a></li>
                                <li><a href=\"all_restaurants_map_listing.html\">All restaurants map listing</a></li>
                                <li><a href=\"single_restaurant.html\">Single restaurant page</a></li>
                                <li><a href=\"single_restaurant_datepicker_v2.html\">Date and time picker V2</a></li>
                                <li><a href=\"payment_restaurant.html\">Booking restaurant</a></li>
                                <li><a href=\"confirmation_restaurant.html\">Confirmation transfers</a></li>
                            </ul>
                        </li>
                        <li class=\"megamenu submenu\">
                            <a href=\"javascript:void(0);\" class=\"show-submenu-mega\">News<i class=\"icon-down-open-mini\"></i></a>
                            <div class=\"menu-wrapper\">
                                <div class=\"col-md-4\">
                                    <h3>Header styles</h3>
                                    <ul>
                                        <li><a href=\"index.html\">Default transparent</a></li>
                                        <li><a href=\"header_2.html\">Plain color</a></li>
                                        <li><a href=\"header_3.html\">Plain color on scroll</a></li>
                                        <li><a href=\"header_4.html\">With socials on top</a></li>
                                        <li><a href=\"header_5.html\">With language selection</a></li>
                                        <li><a href=\"header_6.html\">With lang and conversion</a></li>
                                        <li><a href=\"header_7.html\">With full horizontal menu</a></li>
                                    </ul>
                                </div>
                                <div class=\"col-md-4\">
                                    <h3>Footer styles</h3>
                                    <ul>
                                        <li><a href=\"index.html\">Footer default</a></li>
                                        <li><a href=\"footer_2.html\">Footer style 2</a></li>
                                        <li><a href=\"footer_3.html\">Footer style 3</a></li>
                                        <li><a href=\"footer_4.html\">Footer style 4</a></li>
                                        <li><a href=\"footer_5.html\">Footer style 5</a></li>
                                        <li><a href=\"footer_6.html\">Footer style 6</a></li>
                                        <li><a href=\"footer_7.html\">Footer style 7</a></li>
                                    </ul>
                                </div>
                                <div class=\"col-md-4\">
                                    <h3>Shop &amp; colors</h3>
                                    <ul>
                                        <li><a href=\"shop.html\">Shop</a></li>
                                        <li><a href=\"shop-single.html\">Shop single</a></li>
                                        <li><a href=\"shopping-cart.html\">Shop cart</a></li>
                                        <li><a href=\"checkout.html\">Shop Checkout</a></li>
                                        <li><a href=\"#0\"><i class=\"icon-circle color_1\"></i> Color version 1</a></li>
                                        <li><a href=\"color_2/index.html\"><i class=\"icon-circle color_2\"></i> Color version 2</a></li>
                                        <li><a href=\"color_3/index.html\"><i class=\"icon-circle color_3\"></i> Color version 3</a></li>
                                        <li><a href=\"color_4/index.html\"><i class=\"icon-circle color_4\"></i> Color version 4</a></li>
                                    </ul>
                                </div>
                            </div><!-- End menu-wrapper -->
                        </li>
                        <li class=\"megamenu submenu\">
                            <a href=\"javascript:void(0);\" class=\"show-submenu-mega\">Touristic Guides<i class=\"icon-down-open-mini\"></i></a>
                            <div class=\"menu-wrapper\">
                                <div class=\"col-md-4\">
                                    <h3>Pages</h3>
                                    <ul>
                                        <li><a href=\"about.html\">About us</a></li>
                                        <li><a href=\"general_page.html\">General page</a></li>
                                        <li><a href=\"tourist_guide.html\">Tourist guide</a></li>
                                        <li><a href=\"wishlist.html\">Wishlist page</a></li>
                                        <li><a href=\"faq.html\">Faq</a></li>
                                        <li><a href=\"faq_2.html\">Faq smooth scroll</a></li>
                                        <li><a href=\"pricing_tables.html\">Pricing tables</a></li>
                                        <li><a href=\"gallery_3_columns.html\">Gallery 3 columns</a></li>
                                        <li><a href=\"gallery_4_columns.html\">Gallery 4 columns</a></li>
                                        <li><a href=\"grid_gallery_1.html\">Grid gallery</a></li>
                                        <li><a href=\"grid_gallery_2.html\">Grid gallery with filters</a></li>
                                        <li><a href=\"rtl_version/index.html\">RTL version</a></li>
                                    </ul>
                                </div>
                                <div class=\"col-md-4\">
                                    <h3>Pages</h3>
                                    <ul>
                                        <li><a href=\"";
        // line 257
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_new");
        echo "\">Contact us 1</a></li>
                                        <li><a href=\"contact_us_2.html\">Contact us 2</a></li>
                                        <li><a href=\"blog_right_sidebar.html\">Blog</a></li>
                                        <li><a href=\"blog.html\">Blog left sidebar</a></li>
                                        <li><a href=\"login.html\">Login</a></li>
                                        <li><a href=\"register.html\">Register</a></li>
                                        <li><a href=\"invoice.html\" target=\"_blank\">Invoice</a></li>
                                        <li><a href=\"404.html\">404 Error page</a></li>
                                        <li><a href=\"site_launch/index.html\">Site launch / Coming soon</a></li>
                                        <li><a href=\"timeline.html\">Tour timeline</a></li>
                                        <li><a href=\"page_with_map.html\"><i class=\"icon-map\"></i>  Full screen map</a></li>
                                    </ul>
                                </div>
                                <div class=\"col-md-4\">
                                    <h3>Elements</h3>
                                    <ul>
                                        <li><a href=\"footer_2.html\"><i class=\"icon-columns\"></i> Footer with working newsletter</a></li>
                                        <li><a href=\"footer_5.html\"><i class=\"icon-columns\"></i> Footer with Twitter feed</a></li>
                                        <li><a href=\"icon_pack_1.html\"><i class=\"icon-inbox-alt\"></i> Icon pack 1 (1900)</a></li>
                                        <li><a href=\"icon_pack_2.html\"><i class=\"icon-inbox-alt\"></i> Icon pack 2 (100)</a></li>
                                        <li><a href=\"icon_pack_3.html\"><i class=\"icon-inbox-alt\"></i> Icon pack 3 (30)</a></li>
                                        <li><a href=\"icon_pack_4.html\"><i class=\"icon-inbox-alt\"></i> Icon pack 4 (200)</a></li>
                                        <li><a href=\"icon_pack_5.html\"><i class=\"icon-inbox-alt\"></i> Icon pack 5 (360)</a></li>
                                        <li><a href=\"shortcodes.html\"><i class=\"icon-tools\"></i> Shortcodes</a></li>
                                        <li><a href=\"newsletter_template/newsletter.html\" target=\"blank\"><i class=\" icon-mail\"></i> Responsive email template</a></li>
                                        <li><a href=\"admin.html\"><i class=\"icon-cog-1\"></i>  Admin area</a></li>
                                        <li><a href=\"general_page.html\"><i class=\"icon-light-up\"></i>  Weather Forecast</a></li>
                                    </ul>
                                </div>
                            </div><!-- End menu-wrapper -->
                        </li>
                    </ul>
                </div><!-- End main-menu -->
                <ul id=\"top_tools\">
                    <li>
                        <div class=\"dropdown dropdown-search\">
                            <a href=\"#\" class=\"search-overlay-menu-btn\" data-toggle=\"dropdown\"><i class=\"icon-search\"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class=\"dropdown dropdown-cart\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\" icon-basket-1\"></i>Cart (0) </a>
                            <ul class=\"dropdown-menu\" id=\"cart_items\">
                                <li>
                                    <div class=\"image\"><img src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/img/thumb_cart_1.jpg"), "html", null, true);
        echo "\" alt=\"image\"></div>
                                    <strong>
                                        <a href=\"#\">Louvre museum</a>1x \$36.00 </strong>
                                    <a href=\"#\" class=\"action\"><i class=\"icon-trash\"></i></a>
                                </li>
                                <li>
                                    <div class=\"image\"><img src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/img/thumb_cart_2.jpg"), "html", null, true);
        echo "\" alt=\"image\"></div>
                                    <strong>
                                        <a href=\"#\">Versailles tour</a>2x \$36.00 </strong>
                                    <a href=\"#\" class=\"action\"><i class=\"icon-trash\"></i></a>
                                </li>
                                <li>
                                    <div class=\"image\"><img src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/img/thumb_cart_3.jpg"), "html", null, true);
        echo "\" alt=\"image\"></div>
                                    <strong>
                                        <a href=\"#\">Versailles tour</a>1x \$36.00 </strong>
                                    <a href=\"#\" class=\"action\"><i class=\"icon-trash\"></i></a>
                                </li>
                                <li>
                                    <div>Total: <span>\$120.00</span></div>
                                    <a href=\"cart.html\" class=\"button_drop\">Go to cart</a>
                                    <a href=\"payment.html\" class=\"button_drop outline\">Check out</a>
                                </li>
                            </ul>
                        </div><!-- End dropdown-cart-->
                    </li>
                </ul>
            </nav>
        </div>
    </div><!-- container -->
</header><!-- End Header -->

<section id=\"search_container\">
    <div id=\"search\">
        <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tours\" data-toggle=\"tab\">Experiences</a></li>
            <li><a href=\"#hotels\" data-toggle=\"tab\">Hotels</a></li>
            <li><a href=\"#transfers\" data-toggle=\"tab\">Transfers</a></li>
            <li><a href=\"#restaurants\" data-toggle=\"tab\">Cruises</a></li>
            <li><a href=\"#restaurants\" data-toggle=\"tab\">Restaurants</a></li>
            <li><a href=\"#restaurants\" data-toggle=\"tab\">News</a></li>
            <li><a href=\"#restaurants\" data-toggle=\"tab\">Touristic Guides</a></li>
        </ul>

        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tours\">
                <h3>Search Tours in Paris</h3>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Search terms</label>
                            <input type=\"text\" class=\"form-control\" id=\"firstname_booking\" name=\"firstname_booking\" placeholder=\"Type your search terms\">
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Things to do</label>
                            <select class=\"ddslick\" name=\"category\">
                                <option value=\"0\" data-imagesrc=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/img/icons_search/all_tours.png"), "html", null, true);
        echo "\" selected>All tours</option>
                                <option value=\"1\" data-imagesrc=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/img/icons_search/sightseeing.png"), "html", null, true);
        echo "\">City sightseeing</option>
                                <option value=\"2\"  data-imagesrc=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/img/icons_search/museums.png"), "html", null, true);
        echo "\">Museum tours</option>
                                <option value=\"3\" data-imagesrc=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/img/icons_search/historic.png"), "html", null, true);
        echo "\">Historic Buildings</option>
                                <option value=\"4\" data-imagesrc=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/img/icons_search/walking.png"), "html", null, true);
        echo "\">Walking tours</option>
                                <option value=\"5\" data-imagesrc=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/img/icons_search/eat.png"), "html", null, true);
        echo "\">Eat & Drink</option>
                                <option value=\"6\" data-imagesrc=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/img/icons_search/churches.png"), "html", null, true);
        echo "\">Churces</option>
                                <option value=\"7\" data-imagesrc=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/img/icons_search/skyline.png"), "html", null, true);
        echo "\">Skyline tours</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            <label><i class=\"icon-calendar-7\"></i> Date</label>
                            <input class=\"date-pick form-control\" data-date-format=\"M d, D\" type=\"text\">
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            <label><i class=\" icon-clock\"></i> Time</label>
                            <input class=\"time-pick form-control\" value=\"12:00 AM\" type=\"text\">
                        </div>
                    </div>
                    <div class=\"col-md-2 col-sm-3 col-xs-6\">
                        <div class=\"form-group\">
                            <label>Adults</label>
                            <div class=\"numbers-row\">
                                <input type=\"text\" value=\"1\" id=\"adults\" class=\"qty2 form-control\" name=\"adults\">
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-2 col-sm-3 col-xs-6\">
                        <div class=\"form-group\">
                            <label>Children</label>
                            <div class=\"numbers-row\">
                                <input type=\"text\" value=\"0\" id=\"children\" class=\"qty2 form-control\" name=\"children\">
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End row -->
                <hr>
                <button class=\"btn_1 green\"><i class=\"icon-search\"></i>Search now</button>
            </div>
            <!-- End rab -->
            <div class=\"tab-pane\" id=\"hotels\">
                <h3>Search Hotels in Paris</h3>
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            <label><i class=\"icon-calendar-7\"></i> Check in</label>
                            <input class=\"date-pick form-control\" data-date-format=\"M d, D\" type=\"text\">
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            <label><i class=\"icon-calendar-7\"></i> Check out</label>
                            <input class=\"date-pick form-control\" data-date-format=\"M d, D\" type=\"text\">
                        </div>
                    </div>
                    <div class=\"col-md-2 col-sm-3 col-xs-5\">
                        <div class=\"form-group\">
                            <label>Adults</label>
                            <div class=\"numbers-row\">
                                <input type=\"text\" value=\"1\" id=\"adults\" class=\"qty2 form-control\" name=\"adults_2\">
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-2 col-sm-3 col-xs-5\">
                        <div class=\"form-group\">
                            <label>Children</label>
                            <div class=\"numbers-row\">
                                <input type=\"text\" value=\"0\" id=\"children\" class=\"qty2 form-control\" name=\"children_2\">
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-2 col-sm-3 col-xs-12\">
                        <div class=\"form-group\">
                            <label>Rooms</label>
                            <div class=\"numbers-row\">
                                <input type=\"text\" value=\"1\" id=\"children\" class=\"qty2 form-control\" name=\"rooms\">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Hotel name</label>
                            <input type=\"text\" class=\"form-control\" id=\"hotel_name\" name=\"hotel_name\" placeholder=\"Optionally type hotel name\">
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Preferred city area</label>
                            <select class=\"form-control\" name=\"area\">
                                <option value=\"Centre\" selected>Centre</option>
                                <option value=\"Gar du Nord Station\">Gar du Nord Station</option>
                                <option value=\"La Defance\">La Defance</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <hr>
                <button class=\"btn_1 green\"><i class=\"icon-search\"></i>Search now</button>
            </div>
            <div class=\"tab-pane\" id=\"transfers\">
                <h3>Search Transfers in Paris</h3>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label class=\"select-label\">Pick up location</label>
                            <select class=\"form-control\">
                                <option value=\"orly_airport\">Orly airport</option>
                                <option value=\"gar_du_nord\">Gar du Nord Station</option>
                                <option value=\"hotel_rivoli\">Hotel Rivoli</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label class=\"select-label\">Drop off location</label>
                            <select class=\"form-control\">
                                <option value=\"orly_airport\">Orly airport</option>
                                <option value=\"gar_du_nord\">Gar du Nord Station</option>
                                <option value=\"hotel_rivoli\">Hotel Rivoli</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            <label><i class=\"icon-calendar-7\"></i> Date</label>
                            <input class=\"date-pick form-control\" data-date-format=\"M d, D\" type=\"text\">
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            <label><i class=\" icon-clock\"></i> Time</label>
                            <input class=\"time-pick form-control\" value=\"12:00 AM\" type=\"text\">
                        </div>
                    </div>
                    <div class=\"col-md-2 col-sm-3\">
                        <div class=\"form-group\">
                            <label>Adults</label>
                            <div class=\"numbers-row\">
                                <input type=\"text\" value=\"1\" id=\"adults\" class=\"qty2 form-control\" name=\"quantity\">
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-9\">
                        <div class=\"form-group\">
                            <div class=\"radio_fix\">
                                <label class=\"radio-inline\" style=\"padding-left:0\">
                                    <input type=\"radio\" name=\"inlineRadioOptions\" id=\"inlineRadio1\" value=\"option1\" checked> One Way
                                </label>
                            </div>
                            <div class=\"radio_fix\">
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"inlineRadioOptions\" id=\"inlineRadio2\" value=\"option2\"> Return
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <hr>
                <button class=\"btn_1 green\"><i class=\"icon-search\"></i>Search now</button>
            </div>
            <div class=\"tab-pane\" id=\"restaurants\">
                <h3>Search Restaurants in Paris</h3>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Search by name</label>
                            <input type=\"text\" class=\"form-control\" id=\"restaurant_name\" name=\"restaurant_name\" placeholder=\"Type your search terms\">
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Food type</label>
                            <select class=\"ddslick\" name=\"category_2\">
                                <option value=\"0\" data-imagesrc=\"";
        // line 548
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/img/icons_search/all_restaurants.png"), "html", null, true);
        echo "\" selected>All restaurants</option>
                                <option value=\"1\" data-imagesrc=\"";
        // line 549
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/img/icons_search/fast_food.png"), "html", null, true);
        echo "\">Fast food</option>
                                <option value=\"2\"  data-imagesrc=\"";
        // line 550
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/img/icons_search/pizza_italian.png"), "html", null, true);
        echo "\">Pizza / Italian</option>
                                <option value=\"3\" data-imagesrc=\"";
        // line 551
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/img/icons_search/international.png"), "html", null, true);
        echo "\">International</option>
                                <option value=\"4\" data-imagesrc=\"";
        // line 552
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/img/icons_search/japanese.png"), "html", null, true);
        echo "\">Japanese</option>
                                <option value=\"5\" data-imagesrc=\"";
        // line 553
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/img/icons_search/chinese.png"), "html", null, true);
        echo "\">Chinese</option>
                                <option value=\"6\" data-imagesrc=\"";
        // line 554
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/img/icons_search/bar.png"), "html", null, true);
        echo "\">Coffee Bar</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            <label><i class=\"icon-calendar-7\"></i> Date</label>
                            <input class=\"date-pick form-control\" data-date-format=\"M d, D\" type=\"text\">
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            <label><i class=\" icon-clock\"></i> Time</label>
                            <input class=\"time-pick form-control\" value=\"12:00 AM\" type=\"text\">
                        </div>
                    </div>
                    <div class=\"col-md-2 col-sm-3 col-xs-6\">
                        <div class=\"form-group\">
                            <label>Adults</label>
                            <div class=\"numbers-row\">
                                <input type=\"text\" value=\"1\" id=\"adults\" class=\"qty2 form-control\" name=\"adults\">
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-2 col-sm-3 col-xs-6\">
                        <div class=\"form-group\">
                            <label>Children</label>
                            <div class=\"numbers-row\">
                                <input type=\"text\" value=\"0\" id=\"children\" class=\"qty2 form-control\" name=\"children\">
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End row -->
                <hr>
                <button class=\"btn_1 green\"><i class=\"icon-search\"></i>Search now</button>
            </div>
        </div>
    </div>
</section>
<!-- End hero -->

<main>

    <!-- End container -->

    <div class=\"white_bg\">
        <div class=\"container margin_60\">
            <div class=\"main_title\">
                <h2>Other <span>Popular</span> tours</h2>
                <p>
                    Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
                </p>
            </div>
            <div class=\"row add_bottom_45\">
                <div class=\"col-md-4 other_tours\">
                    <ul>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-3\"></i>Tour Eiffel<span class=\"other_tours_price\">\$42</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-30\"></i>Shopping tour<span class=\"other_tours_price\">\$35</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-44\"></i>Versailles tour<span class=\"other_tours_price\">\$20</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-3\"></i>Montparnasse skyline<span class=\"other_tours_price\">\$26</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-44\"></i>Pompidue<span class=\"other_tours_price\">\$26</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-3\"></i>Senna River tour<span class=\"other_tours_price\">\$32</span></a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-md-4 other_tours\">
                    <ul>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-1\"></i>Notredame<span class=\"other_tours_price\">\$48</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-4\"></i>Lafaiette<span class=\"other_tours_price\">\$55</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-30\"></i>Trocadero<span class=\"other_tours_price\">\$76</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-3\"></i>Open Bus tour<span class=\"other_tours_price\">\$55</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-30\"></i>Louvre museum<span class=\"other_tours_price\">\$24</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-3\"></i>Madlene Cathedral<span class=\"other_tours_price\">\$24</span></a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-md-4 other_tours\">
                    <ul>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-37\"></i>Montparnasse<span class=\"other_tours_price\">\$36</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-1\"></i>D'Orsey museum<span class=\"other_tours_price\">\$28</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-50\"></i>Gioconda Louvre musuem<span class=\"other_tours_price\">\$44</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-44\"></i>Tour Eiffel<span class=\"other_tours_price\">\$56</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-50\"></i>Ladefanse<span class=\"other_tours_price\">\$16</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-44\"></i>Notredame<span class=\"other_tours_price\">\$26</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End row -->

            <div class=\"banner colored add_bottom_30\">
                <h4>Discover our Top tours <span>from \$34</span></h4>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in.
                </p>
                <a href=\"single_tour.html\" class=\"btn_1 white\">Read more</a>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6 text-center\">
                    <p>
                        <a href=\"#\"><img src=\"";
        // line 674
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/img/bus.jpg"), "html", null, true);
        echo "\" alt=\"Pic\" class=\"img-responsive\"></a>
                    </p>
                    <h4><span>Sightseen tour</span> booking</h4>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                    </p>
                </div>
                <div class=\"col-md-3 col-sm-6 text-center\">
                    <p>
                        <a href=\"#\"><img src=\"";
        // line 683
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/img/transfer.jpg"), "html", null, true);
        echo "\" alt=\"Pic\" class=\"img-responsive\"></a>
                    </p>
                    <h4><span>Transfer</span> booking</h4>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                    </p>
                </div>
                <div class=\"col-md-3 col-sm-6 text-center\">
                    <p>
                        <a href=\"#\"><img src=\"";
        // line 692
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/img/guide.jpg"), "html", null, true);
        echo "\" alt=\"Pic\" class=\"img-responsive\"></a>
                    </p>
                    <h4><span>Tour guide</span> booking</h4>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                    </p>
                </div>
                <div class=\"col-md-3 col-sm-6 text-center\">
                    <p>
                        <a href=\"#\"><img src=\"";
        // line 701
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/img/hotel.jpg"), "html", null, true);
        echo "\" alt=\"Pic\" class=\"img-responsive\"></a>
                    </p>
                    <h4><span>Hotel</span> booking</h4>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                    </p>
                </div>
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </div>
    <!-- End white_bg -->

    <section class=\"promo_full\">
        <div class=\"promo_full_wp magnific\">
            <div>
                <h3>BELONG ANYWHERE</h3>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                </p>
                <a href=\"https://www.youtube.com/watch?v=Zz5cu72Gv5Y\" class=\"video\"><i class=\"icon-play-circled2-1\"></i></a>
            </div>
        </div>
    </section>
    <!-- End section -->

    <div class=\"container margin_60\">

        <div class=\"main_title\">
            <h2>Some <span>good</span> reasons</h2>
            <p>
                Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
            </p>
        </div>

        <div class=\"row\">

            <div class=\"col-md-4 wow zoomIn\" data-wow-delay=\"0.2s\">
                <div class=\"feature_home\">
                    <i class=\"icon_set_1_icon-41\"></i>
                    <h3><span>+120</span> Premium tours</h3>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                    </p>
                    <a href=\"about.html\" class=\"btn_1 outline\">Read more</a>
                </div>
            </div>

            <div class=\"col-md-4 wow zoomIn\" data-wow-delay=\"0.4s\">
                <div class=\"feature_home\">
                    <i class=\"icon_set_1_icon-30\"></i>
                    <h3><span>+1000</span> Customers</h3>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                    </p>
                    <a href=\"about.html\" class=\"btn_1 outline\">Read more</a>
                </div>
            </div>

            <div class=\"col-md-4 wow zoomIn\" data-wow-delay=\"0.6s\">
                <div class=\"feature_home\">
                    <i class=\"icon_set_1_icon-57\"></i>
                    <h3><span>H24 </span> Support</h3>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                    </p>
                    <a href=\"about.html\" class=\"btn_1 outline\">Read more</a>
                </div>
            </div>

        </div>
        <!--End row -->

        <hr>

        <div class=\"row\">
            <div class=\"col-md-8 col-sm-6 hidden-xs\">
                <img src=\"";
        // line 779
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/img/laptop.png"), "html", null, true);
        echo "\" alt=\"Laptop\" class=\"img-responsive laptop\">
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <h3><span>Get started</span> with CityTours</h3>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                </p>
                <ul class=\"list_order\">
                    <li><span>1</span>Select your preferred tours</li>
                    <li><span>2</span>Purchase tickets and options</li>
                    <li><span>3</span>Pick them directly from your office</li>
                </ul>
                <a href=\"all_tour_list.html\" class=\"btn_1\">Start now</a>
            </div>
        </div>
        <!-- End row -->

    </div>
    <!-- End container -->
</main>
<!-- End main -->

<footer class=\"revealed\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-sm-3\">
                <h3>Need help?</h3>
                <a href=\"tel://004542344599\" id=\"phone\">+45 423 445 99</a>
                <a href=\"http://www.ansonika.com/cdn-cgi/l/email-protection#fb939e978bbb98928f828f948e8988d5989496\" id=\"email_footer\"><span class=\"__cf_email__\" data-cfemail=\"18707d7468587b716c616c776d6a6b367b7775\">[email&#160;protected]</span></a>
            </div>
            <div class=\"col-md-3 col-sm-3\">
                <h3>About</h3>
                <ul>
                    <li><a href=\"#\">About us</a></li>
                    <li><a href=\"#\">FAQ</a></li>
                    <li><a href=\"#\">Login</a></li>
                    <li><a href=\"#\">Register</a></li>
                    <li><a href=\"#\">Terms and condition</a></li>
                </ul>
            </div>
            <div class=\"col-md-3 col-sm-3\">
                <h3>Discover</h3>
                <ul>
                    <li><a href=\"#\">Community blog</a></li>
                    <li><a href=\"#\">Tour guide</a></li>
                    <li><a href=\"#\">Wishlist</a></li>
                    <li><a href=\"#\">Gallery</a></li>
                </ul>
            </div>
            <div class=\"col-md-2 col-sm-3\">
                <h3>Settings</h3>
                <div class=\"styled-select\">
                    <select class=\"form-control\" name=\"lang\" id=\"lang\">
                        <option value=\"English\" selected>English</option>
                        <option value=\"French\">French</option>
                        <option value=\"Spanish\">Spanish</option>
                        <option value=\"Russian\">Russian</option>
                    </select>
                </div>
                <div class=\"styled-select\">
                    <select class=\"form-control\" name=\"currency\" id=\"currency\">
                        <option value=\"USD\" selected>USD</option>
                        <option value=\"EUR\">EUR</option>
                        <option value=\"GBP\">GBP</option>
                        <option value=\"RUB\">RUB</option>
                    </select>
                </div>
            </div>
        </div><!-- End row -->
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div id=\"social_footer\">
                    <ul>
                        <li><a href=\"#\"><i class=\"icon-facebook\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-twitter\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-google\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-instagram\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-pinterest\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-vimeo\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-youtube-play\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-linkedin\"></i></a></li>
                    </ul>
                    <p>© Citytours 2015</p>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</footer><!-- End footer -->

<div id=\"toTop\"></div><!-- Back to top button -->

<!-- Search Menu -->
<div class=\"search-overlay-menu\">
    <span class=\"search-overlay-close\"><i class=\"icon_set_1_icon-77\"></i></span>
    <form role=\"search\" id=\"searchform\" method=\"get\">
        <input value=\"\" name=\"q\" type=\"search\" placeholder=\"Search...\" />
        <button type=\"submit\"><i class=\"icon_set_1_icon-78\"></i>
        </button>
    </form>
</div><!-- End Search Menu -->

<!-- Common scripts -->
<script data-cfasync=\"false\" src=\"";
        // line 881
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"), "html", null, true);
        echo "\"></script><script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 882
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/js/common_scripts_min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 883
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/js/functions.js"), "html", null, true);
        echo "\"></script>

<!-- Specific scripts -->
<script src=\"";
        // line 886
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/js/icheck.js"), "html", null, true);
        echo "\"></script>
<script>
    \$('input').iCheck({
        checkboxClass: 'icheckbox_square-grey',
        radioClass: 'iradio_square-grey'
    });
</script>
<script src=\"";
        // line 893
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 894
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/js/bootstrap-timepicker.js"), "html", null, true);
        echo "\"></script>
<script>
    \$('input.date-pick').datepicker('setDate', 'today');
    \$('input.time-pick').timepicker({
        minuteStep: 15,
        showInpunts: false
    })
</script>
<script src=\"";
        // line 902
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/citytours/js/jquery.ddslick.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(\"select.ddslick\").each(function(){
        \$(this).ddslick({
            showSelectedHTML: true
        });
    });
</script>
</body>

<!-- Mirrored from www.ansonika.com/citytours/index_7.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Feb 2018 23:59:16 GMT -->
</html>";
        
        $__internal_81570c8fd08687b29a6d26729561c95f8ccc13a7376509c04e80509bddaa8b0a->leave($__internal_81570c8fd08687b29a6d26729561c95f8ccc13a7376509c04e80509bddaa8b0a_prof);

        
        $__internal_6f3b7cec4c8d1b554dfc00ca4998d2f803e323e0af8b9cfcf12fd715a7b1db3a->leave($__internal_6f3b7cec4c8d1b554dfc00ca4998d2f803e323e0af8b9cfcf12fd715a7b1db3a_prof);

    }

    // line 88
    public function block_content($context, array $blocks = array())
    {
        $__internal_7920c82db82aecd3609543fdcdcb38531610100cc70beb782422f6ccfd10cf92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7920c82db82aecd3609543fdcdcb38531610100cc70beb782422f6ccfd10cf92->enter($__internal_7920c82db82aecd3609543fdcdcb38531610100cc70beb782422f6ccfd10cf92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7f3a8e11dd42c7846ed1a1b83ef55187c51af7c7cc2a28cb7be8faa8f76e31e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f3a8e11dd42c7846ed1a1b83ef55187c51af7c7cc2a28cb7be8faa8f76e31e8->enter($__internal_7f3a8e11dd42c7846ed1a1b83ef55187c51af7c7cc2a28cb7be8faa8f76e31e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_7f3a8e11dd42c7846ed1a1b83ef55187c51af7c7cc2a28cb7be8faa8f76e31e8->leave($__internal_7f3a8e11dd42c7846ed1a1b83ef55187c51af7c7cc2a28cb7be8faa8f76e31e8_prof);

        
        $__internal_7920c82db82aecd3609543fdcdcb38531610100cc70beb782422f6ccfd10cf92->leave($__internal_7920c82db82aecd3609543fdcdcb38531610100cc70beb782422f6ccfd10cf92_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1079 => 88,  1057 => 902,  1046 => 894,  1042 => 893,  1032 => 886,  1026 => 883,  1022 => 882,  1016 => 881,  911 => 779,  830 => 701,  818 => 692,  806 => 683,  794 => 674,  671 => 554,  667 => 553,  663 => 552,  659 => 551,  655 => 550,  651 => 549,  647 => 548,  461 => 365,  457 => 364,  453 => 363,  449 => 362,  445 => 361,  441 => 360,  437 => 359,  433 => 358,  385 => 313,  376 => 307,  367 => 301,  320 => 257,  173 => 113,  147 => 89,  145 => 88,  90 => 36,  86 => 35,  80 => 32,  76 => 31,  70 => 28,  61 => 22,  57 => 21,  53 => 20,  49 => 19,  45 => 18,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--[if IE 8]><html class=\"ie ie8\"> <![endif]-->
<!--[if IE 9]><html class=\"ie ie9\"> <![endif]-->
<html lang=\"en\">

<!-- Mirrored from www.ansonika.com/citytours/index_7.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Feb 2018 23:59:10 GMT -->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <meta name=\"description\" content=\"Citytours - Premium site template for city tours agencies, transfers and tickets.\">
    <meta name=\"author\" content=\"Ansonika\">
    <title>CITY TOURS - City tours and travel site template by Ansonika</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" />

    <!-- Favicons-->
    <link rel=\"shortcut icon\" href=\"{{asset('templates/citytours/img/favicon.ico')}}\" type=\"image/x-icon\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" href=\"{{asset('templates/citytours/img/apple-touch-icon-57x57-precomposed.png')}}\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"72x72\" href=\"{{asset('templates/citytours/img/apple-touch-icon-72x72-precomposed.png')}}\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"114x114\" href=\"{{asset('templates/citytours/img/apple-touch-icon-114x114-precomposed.png')}}\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"144x144\" href=\"{{asset('templates/citytours/img/apple-touch-icon-144x144-precomposed.png')}}\">

    <!-- Google web fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Gochi+Hand|Lato:300,400|Montserrat:400,400i,700,700i\" rel=\"stylesheet\">

    <!-- CSS -->
    <link href=\"{{asset('templates/citytours/css/base.css')}}\" rel=\"stylesheet\">

    <!-- SPECIFIC CSS -->
    <link href=\"{{asset('templates/citytours/css/skins/square/grey.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('templates/citytours/css/date_time_picker.css')}}\" rel=\"stylesheet\">

    <!--[if lt IE 9]>
      <script src=\"{{asset('templates/citytours/js/html5shiv.min.js')}}\"></script>
      <script src=\"{{asset('templates/citytours/js/respond.min.js')}}\"></script>
    <![endif]-->

</head>
<body>

<!--[if lte IE 8]>
    <p class=\"chromeframe\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a>.</p>
<![endif]-->

<div id=\"preloader\">
    <div class=\"sk-spinner sk-spinner-wave\">
        <div class=\"sk-rect1\"></div>
        <div class=\"sk-rect2\"></div>
        <div class=\"sk-rect3\"></div>
        <div class=\"sk-rect4\"></div>
        <div class=\"sk-rect5\"></div>
    </div>
</div>
<!-- End Preload -->

<div class=\"layer\"></div>
<!-- Mobile menu overlay mask -->

<!-- Header================================================== -->
<header>
    <div id=\"top_line\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-6 col-xs-6\"><i class=\"icon-phone\"></i><strong>00216 58 362 134</strong></div>

                <div class=\"col-md-6 col-sm-6 col-xs-6\">
                    <ul id=\"top_links\">
                        <li>
                            <div class=\"dropdown dropdown-access\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" id=\"access_link\">Sign in</a>
                                <div class=\"dropdown-menu\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6 col-sm-6 col-xs-6\">
                                            <a href=\"#\" class=\"bt_facebook\">
                                                <i class=\"icon-facebook\"></i>Facebook </a>
                                        </div>
                                        <div class=\"col-md-6 col-sm-6 col-xs-6\">
                                            <a href=\"#\" class=\"bt_paypal\">
                                                <i class=\"icon-paypal\"></i>Paypal </a>
                                        </div>
                                    </div>
                                    <div class=\"login-or\">
                                        <hr class=\"hr-or\">
                                        <span class=\"span-or\">or</span>
                                    </div>
                                    <div class=\"form-group\">
                                        {% block content %}{% endblock %}
                                        <a id=\"forgot_pw\" href=\"#\">Forgot password?</a>
                                    <input type=\"submit\" name=\"Sign_in\" value=\"Sign in\" id=\"Sign_in\" class=\"button_drop\">
                                    <input type=\"submit\" name=\"Sign_up\" value=\"Sign up\" id=\"Sign_up\" class=\"button_drop outline\">
                                </div>
                            </div><!-- End Dropdown access -->
                        </li>
                        <li><a href=\"wishlist.html\" id=\"wishlist_link\">Wishlist</a></li>
                    </ul>
                </div>
            </div><!-- End row -->
        </div><!-- End container-->
    </div><!-- End top line-->

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-3 col-xs-3\">
                <div id=\"logo_home\">
                    <h1><a href=\"index.html\" title=\"City tours travel template\">City Tours travel template</a></h1>
                </div>
            </div>
            <nav class=\"col-md-9 col-sm-9 col-xs-9\">
                <a class=\"cmn-toggle-switch cmn-toggle-switch__htx open_close\" href=\"javascript:void(0);\"><span>Menu mobile</span></a>
                <div class=\"main-menu\">
                    <div id=\"header_menu\">
                        <img src=\"{{asset('templates/citytours/img/logo_sticky.png')}}\" width=\"160\" height=\"34\" alt=\"City tours\" data-retina=\"true\">
                    </div>
                    <a href=\"#\" class=\"open_close\" id=\"close_in\"><i class=\"icon_set_1_icon-77\"></i></a>
                    <ul>
                        <li class=\"submenu\">
                            <a href=\"javascript:void(0);\" class=\"show-submenu\">Experiences <i class=\"icon-down-open-mini\"></i></a>
                            <ul>
                                <li><a href=\"all_tours_list.html\">All tours list</a></li>
                                <li><a href=\"all_tours_grid.html\">All tours grid</a></li>
                                <li><a href=\"all_tours_map_listing.html\">All tours map listing</a></li>
                                <li><a href=\"single_tour.html\">Single tour page</a></li>
                                <li><a href=\"single_tour_with_gallery.html\">Single tour with gallery</a></li>
                                <li><a href=\"javascript:void(0);\">Single tour fixed sidebar</a>
                                    <ul>
                                        <li><a href=\"single_tour_fixed_sidebar.html\">Single tour fixed sidebar</a></li>
                                        <li><a href=\"single_tour_with_gallery_fixed_sidebar.html\">Single tour 2 Fixed Sidebar</a></li>
                                        <li><a href=\"cart_fixed_sidebar.html\">Cart Fixed Sidebar</a></li>
                                        <li><a href=\"payment_fixed_sidebar.html\">Payment Fixed Sidebar</a></li>
                                        <li><a href=\"confirmation_fixed_sidebar.html\">Confirmation Fixed Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"single_tour_working_booking.html\">Single tour working booking</a></li>
                                <li><a href=\"single_tour_datepicker_v2.html\">Date and time picker V2</a></li>

                                <li><a href=\"cart.html\">Single tour cart</a></li>
                                <li><a href=\"payment.html\">Single tour booking</a></li>
                            </ul>
                        </li>
                        <li class=\"submenu\">
                            <a href=\"javascript:void(0);\" class=\"show-submenu\">Hotels <i class=\"icon-down-open-mini\"></i></a><ul>
                                <li><a href=\"all_hotels_list.html\">All hotels list</a></li>
                                <li><a href=\"all_hotels_grid.html\">All hotels grid</a></li>
                                <li><a href=\"all_hotels_map_listing.html\">All hotels map listing</a></li>
                                <li><a href=\"single_hotel.html\">Single hotel page</a></li>
                                <li><a href=\"single_hotel_datepicker_adv.html\">Single hotel datepicker adv</a></li>
                                <li><a href=\"single_hotel_datepicker_v2.html\">Date and time picker V2</a></li>
                                <li><a href=\"single_hotel_working_booking.html\">Single hotel working booking</a></li>
                                <li><a href=\"single_hotel_contact.html\">Single hotel contact working</a></li>
                                <li><a href=\"cart_hotel.html\">Cart hotel</a></li>
                                <li><a href=\"payment_hotel.html\">Booking hotel</a></li>
                                <li><a href=\"confirmation_hotel.html\">Confirmation hotel</a></li>
                            </ul>
                        </li>
                        <li class=\"submenu\">
                            <a href=\"javascript:void(0);\" class=\"show-submenu\">Transfers <i class=\"icon-down-open-mini\"></i></a>
                            <ul>
                                <li><a href=\"all_transfer_list.html\">All transfers list</a></li>
                                <li><a href=\"all_transfer_grid.html\">All transfers grid</a></li>
                                <li><a href=\"single_transfer.html\">Single transfer page</a></li>
                                <li><a href=\"single_transfer_datepicker_v2.html\">Date and time picker V2</a></li>
                                <li><a href=\"cart_transfer.html\">Cart transfers</a></li>
                                <li><a href=\"payment_transfer.html\">Booking transfers</a></li>
                                <li><a href=\"confirmation_transfer.html\">Confirmation transfers</a></li>
                            </ul>
                        </li>
                        <li class=\"submenu\">
                            <a href=\"javascript:void(0);\" class=\"show-submenu\">Cruises <i class=\"icon-down-open-mini\"></i></a>
                            <ul>
                                <li><a href=\"all_restaurants_list.html\">All restaurants list</a></li>
                                <li><a href=\"all_restaurants_grid.html\">All restaurants grid</a></li>
                                <li><a href=\"all_restaurants_map_listing.html\">All restaurants map listing</a></li>
                                <li><a href=\"single_restaurant.html\">Single restaurant page</a></li>
                                <li><a href=\"single_restaurant_datepicker_v2.html\">Date and time picker V2</a></li>
                                <li><a href=\"payment_restaurant.html\">Booking restaurant</a></li>
                                <li><a href=\"confirmation_restaurant.html\">Confirmation transfers</a></li>
                            </ul>
                        </li>
                        <li class=\"submenu\">
                            <a href=\"javascript:void(0);\" class=\"show-submenu\">Restaurants <i class=\"icon-down-open-mini\"></i></a>
                            <ul>
                                <li><a href=\"all_restaurants_list.html\">All restaurants list</a></li>
                                <li><a href=\"all_restaurants_grid.html\">All restaurants grid</a></li>
                                <li><a href=\"all_restaurants_map_listing.html\">All restaurants map listing</a></li>
                                <li><a href=\"single_restaurant.html\">Single restaurant page</a></li>
                                <li><a href=\"single_restaurant_datepicker_v2.html\">Date and time picker V2</a></li>
                                <li><a href=\"payment_restaurant.html\">Booking restaurant</a></li>
                                <li><a href=\"confirmation_restaurant.html\">Confirmation transfers</a></li>
                            </ul>
                        </li>
                        <li class=\"megamenu submenu\">
                            <a href=\"javascript:void(0);\" class=\"show-submenu-mega\">News<i class=\"icon-down-open-mini\"></i></a>
                            <div class=\"menu-wrapper\">
                                <div class=\"col-md-4\">
                                    <h3>Header styles</h3>
                                    <ul>
                                        <li><a href=\"index.html\">Default transparent</a></li>
                                        <li><a href=\"header_2.html\">Plain color</a></li>
                                        <li><a href=\"header_3.html\">Plain color on scroll</a></li>
                                        <li><a href=\"header_4.html\">With socials on top</a></li>
                                        <li><a href=\"header_5.html\">With language selection</a></li>
                                        <li><a href=\"header_6.html\">With lang and conversion</a></li>
                                        <li><a href=\"header_7.html\">With full horizontal menu</a></li>
                                    </ul>
                                </div>
                                <div class=\"col-md-4\">
                                    <h3>Footer styles</h3>
                                    <ul>
                                        <li><a href=\"index.html\">Footer default</a></li>
                                        <li><a href=\"footer_2.html\">Footer style 2</a></li>
                                        <li><a href=\"footer_3.html\">Footer style 3</a></li>
                                        <li><a href=\"footer_4.html\">Footer style 4</a></li>
                                        <li><a href=\"footer_5.html\">Footer style 5</a></li>
                                        <li><a href=\"footer_6.html\">Footer style 6</a></li>
                                        <li><a href=\"footer_7.html\">Footer style 7</a></li>
                                    </ul>
                                </div>
                                <div class=\"col-md-4\">
                                    <h3>Shop &amp; colors</h3>
                                    <ul>
                                        <li><a href=\"shop.html\">Shop</a></li>
                                        <li><a href=\"shop-single.html\">Shop single</a></li>
                                        <li><a href=\"shopping-cart.html\">Shop cart</a></li>
                                        <li><a href=\"checkout.html\">Shop Checkout</a></li>
                                        <li><a href=\"#0\"><i class=\"icon-circle color_1\"></i> Color version 1</a></li>
                                        <li><a href=\"color_2/index.html\"><i class=\"icon-circle color_2\"></i> Color version 2</a></li>
                                        <li><a href=\"color_3/index.html\"><i class=\"icon-circle color_3\"></i> Color version 3</a></li>
                                        <li><a href=\"color_4/index.html\"><i class=\"icon-circle color_4\"></i> Color version 4</a></li>
                                    </ul>
                                </div>
                            </div><!-- End menu-wrapper -->
                        </li>
                        <li class=\"megamenu submenu\">
                            <a href=\"javascript:void(0);\" class=\"show-submenu-mega\">Touristic Guides<i class=\"icon-down-open-mini\"></i></a>
                            <div class=\"menu-wrapper\">
                                <div class=\"col-md-4\">
                                    <h3>Pages</h3>
                                    <ul>
                                        <li><a href=\"about.html\">About us</a></li>
                                        <li><a href=\"general_page.html\">General page</a></li>
                                        <li><a href=\"tourist_guide.html\">Tourist guide</a></li>
                                        <li><a href=\"wishlist.html\">Wishlist page</a></li>
                                        <li><a href=\"faq.html\">Faq</a></li>
                                        <li><a href=\"faq_2.html\">Faq smooth scroll</a></li>
                                        <li><a href=\"pricing_tables.html\">Pricing tables</a></li>
                                        <li><a href=\"gallery_3_columns.html\">Gallery 3 columns</a></li>
                                        <li><a href=\"gallery_4_columns.html\">Gallery 4 columns</a></li>
                                        <li><a href=\"grid_gallery_1.html\">Grid gallery</a></li>
                                        <li><a href=\"grid_gallery_2.html\">Grid gallery with filters</a></li>
                                        <li><a href=\"rtl_version/index.html\">RTL version</a></li>
                                    </ul>
                                </div>
                                <div class=\"col-md-4\">
                                    <h3>Pages</h3>
                                    <ul>
                                        <li><a href=\"{{ path('article_new') }}\">Contact us 1</a></li>
                                        <li><a href=\"contact_us_2.html\">Contact us 2</a></li>
                                        <li><a href=\"blog_right_sidebar.html\">Blog</a></li>
                                        <li><a href=\"blog.html\">Blog left sidebar</a></li>
                                        <li><a href=\"login.html\">Login</a></li>
                                        <li><a href=\"register.html\">Register</a></li>
                                        <li><a href=\"invoice.html\" target=\"_blank\">Invoice</a></li>
                                        <li><a href=\"404.html\">404 Error page</a></li>
                                        <li><a href=\"site_launch/index.html\">Site launch / Coming soon</a></li>
                                        <li><a href=\"timeline.html\">Tour timeline</a></li>
                                        <li><a href=\"page_with_map.html\"><i class=\"icon-map\"></i>  Full screen map</a></li>
                                    </ul>
                                </div>
                                <div class=\"col-md-4\">
                                    <h3>Elements</h3>
                                    <ul>
                                        <li><a href=\"footer_2.html\"><i class=\"icon-columns\"></i> Footer with working newsletter</a></li>
                                        <li><a href=\"footer_5.html\"><i class=\"icon-columns\"></i> Footer with Twitter feed</a></li>
                                        <li><a href=\"icon_pack_1.html\"><i class=\"icon-inbox-alt\"></i> Icon pack 1 (1900)</a></li>
                                        <li><a href=\"icon_pack_2.html\"><i class=\"icon-inbox-alt\"></i> Icon pack 2 (100)</a></li>
                                        <li><a href=\"icon_pack_3.html\"><i class=\"icon-inbox-alt\"></i> Icon pack 3 (30)</a></li>
                                        <li><a href=\"icon_pack_4.html\"><i class=\"icon-inbox-alt\"></i> Icon pack 4 (200)</a></li>
                                        <li><a href=\"icon_pack_5.html\"><i class=\"icon-inbox-alt\"></i> Icon pack 5 (360)</a></li>
                                        <li><a href=\"shortcodes.html\"><i class=\"icon-tools\"></i> Shortcodes</a></li>
                                        <li><a href=\"newsletter_template/newsletter.html\" target=\"blank\"><i class=\" icon-mail\"></i> Responsive email template</a></li>
                                        <li><a href=\"admin.html\"><i class=\"icon-cog-1\"></i>  Admin area</a></li>
                                        <li><a href=\"general_page.html\"><i class=\"icon-light-up\"></i>  Weather Forecast</a></li>
                                    </ul>
                                </div>
                            </div><!-- End menu-wrapper -->
                        </li>
                    </ul>
                </div><!-- End main-menu -->
                <ul id=\"top_tools\">
                    <li>
                        <div class=\"dropdown dropdown-search\">
                            <a href=\"#\" class=\"search-overlay-menu-btn\" data-toggle=\"dropdown\"><i class=\"icon-search\"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class=\"dropdown dropdown-cart\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\" icon-basket-1\"></i>Cart (0) </a>
                            <ul class=\"dropdown-menu\" id=\"cart_items\">
                                <li>
                                    <div class=\"image\"><img src=\"{{asset('templates/citytours/img/thumb_cart_1.jpg')}}\" alt=\"image\"></div>
                                    <strong>
                                        <a href=\"#\">Louvre museum</a>1x \$36.00 </strong>
                                    <a href=\"#\" class=\"action\"><i class=\"icon-trash\"></i></a>
                                </li>
                                <li>
                                    <div class=\"image\"><img src=\"{{asset('templates/citytours/img/thumb_cart_2.jpg')}}\" alt=\"image\"></div>
                                    <strong>
                                        <a href=\"#\">Versailles tour</a>2x \$36.00 </strong>
                                    <a href=\"#\" class=\"action\"><i class=\"icon-trash\"></i></a>
                                </li>
                                <li>
                                    <div class=\"image\"><img src=\"{{asset('templates/citytours/img/thumb_cart_3.jpg')}}\" alt=\"image\"></div>
                                    <strong>
                                        <a href=\"#\">Versailles tour</a>1x \$36.00 </strong>
                                    <a href=\"#\" class=\"action\"><i class=\"icon-trash\"></i></a>
                                </li>
                                <li>
                                    <div>Total: <span>\$120.00</span></div>
                                    <a href=\"cart.html\" class=\"button_drop\">Go to cart</a>
                                    <a href=\"payment.html\" class=\"button_drop outline\">Check out</a>
                                </li>
                            </ul>
                        </div><!-- End dropdown-cart-->
                    </li>
                </ul>
            </nav>
        </div>
    </div><!-- container -->
</header><!-- End Header -->

<section id=\"search_container\">
    <div id=\"search\">
        <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tours\" data-toggle=\"tab\">Experiences</a></li>
            <li><a href=\"#hotels\" data-toggle=\"tab\">Hotels</a></li>
            <li><a href=\"#transfers\" data-toggle=\"tab\">Transfers</a></li>
            <li><a href=\"#restaurants\" data-toggle=\"tab\">Cruises</a></li>
            <li><a href=\"#restaurants\" data-toggle=\"tab\">Restaurants</a></li>
            <li><a href=\"#restaurants\" data-toggle=\"tab\">News</a></li>
            <li><a href=\"#restaurants\" data-toggle=\"tab\">Touristic Guides</a></li>
        </ul>

        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tours\">
                <h3>Search Tours in Paris</h3>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Search terms</label>
                            <input type=\"text\" class=\"form-control\" id=\"firstname_booking\" name=\"firstname_booking\" placeholder=\"Type your search terms\">
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Things to do</label>
                            <select class=\"ddslick\" name=\"category\">
                                <option value=\"0\" data-imagesrc=\"{{asset('templates/citytours/img/icons_search/all_tours.png')}}\" selected>All tours</option>
                                <option value=\"1\" data-imagesrc=\"{{asset('templates/citytours/img/icons_search/sightseeing.png')}}\">City sightseeing</option>
                                <option value=\"2\"  data-imagesrc=\"{{asset('templates/citytours/img/icons_search/museums.png')}}\">Museum tours</option>
                                <option value=\"3\" data-imagesrc=\"{{asset('templates/citytours/img/icons_search/historic.png')}}\">Historic Buildings</option>
                                <option value=\"4\" data-imagesrc=\"{{asset('templates/citytours/img/icons_search/walking.png')}}\">Walking tours</option>
                                <option value=\"5\" data-imagesrc=\"{{asset('templates/citytours/img/icons_search/eat.png')}}\">Eat & Drink</option>
                                <option value=\"6\" data-imagesrc=\"{{asset('templates/citytours/img/icons_search/churches.png')}}\">Churces</option>
                                <option value=\"7\" data-imagesrc=\"{{asset('templates/citytours/img/icons_search/skyline.png')}}\">Skyline tours</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            <label><i class=\"icon-calendar-7\"></i> Date</label>
                            <input class=\"date-pick form-control\" data-date-format=\"M d, D\" type=\"text\">
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            <label><i class=\" icon-clock\"></i> Time</label>
                            <input class=\"time-pick form-control\" value=\"12:00 AM\" type=\"text\">
                        </div>
                    </div>
                    <div class=\"col-md-2 col-sm-3 col-xs-6\">
                        <div class=\"form-group\">
                            <label>Adults</label>
                            <div class=\"numbers-row\">
                                <input type=\"text\" value=\"1\" id=\"adults\" class=\"qty2 form-control\" name=\"adults\">
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-2 col-sm-3 col-xs-6\">
                        <div class=\"form-group\">
                            <label>Children</label>
                            <div class=\"numbers-row\">
                                <input type=\"text\" value=\"0\" id=\"children\" class=\"qty2 form-control\" name=\"children\">
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End row -->
                <hr>
                <button class=\"btn_1 green\"><i class=\"icon-search\"></i>Search now</button>
            </div>
            <!-- End rab -->
            <div class=\"tab-pane\" id=\"hotels\">
                <h3>Search Hotels in Paris</h3>
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            <label><i class=\"icon-calendar-7\"></i> Check in</label>
                            <input class=\"date-pick form-control\" data-date-format=\"M d, D\" type=\"text\">
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            <label><i class=\"icon-calendar-7\"></i> Check out</label>
                            <input class=\"date-pick form-control\" data-date-format=\"M d, D\" type=\"text\">
                        </div>
                    </div>
                    <div class=\"col-md-2 col-sm-3 col-xs-5\">
                        <div class=\"form-group\">
                            <label>Adults</label>
                            <div class=\"numbers-row\">
                                <input type=\"text\" value=\"1\" id=\"adults\" class=\"qty2 form-control\" name=\"adults_2\">
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-2 col-sm-3 col-xs-5\">
                        <div class=\"form-group\">
                            <label>Children</label>
                            <div class=\"numbers-row\">
                                <input type=\"text\" value=\"0\" id=\"children\" class=\"qty2 form-control\" name=\"children_2\">
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-2 col-sm-3 col-xs-12\">
                        <div class=\"form-group\">
                            <label>Rooms</label>
                            <div class=\"numbers-row\">
                                <input type=\"text\" value=\"1\" id=\"children\" class=\"qty2 form-control\" name=\"rooms\">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Hotel name</label>
                            <input type=\"text\" class=\"form-control\" id=\"hotel_name\" name=\"hotel_name\" placeholder=\"Optionally type hotel name\">
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Preferred city area</label>
                            <select class=\"form-control\" name=\"area\">
                                <option value=\"Centre\" selected>Centre</option>
                                <option value=\"Gar du Nord Station\">Gar du Nord Station</option>
                                <option value=\"La Defance\">La Defance</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <hr>
                <button class=\"btn_1 green\"><i class=\"icon-search\"></i>Search now</button>
            </div>
            <div class=\"tab-pane\" id=\"transfers\">
                <h3>Search Transfers in Paris</h3>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label class=\"select-label\">Pick up location</label>
                            <select class=\"form-control\">
                                <option value=\"orly_airport\">Orly airport</option>
                                <option value=\"gar_du_nord\">Gar du Nord Station</option>
                                <option value=\"hotel_rivoli\">Hotel Rivoli</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label class=\"select-label\">Drop off location</label>
                            <select class=\"form-control\">
                                <option value=\"orly_airport\">Orly airport</option>
                                <option value=\"gar_du_nord\">Gar du Nord Station</option>
                                <option value=\"hotel_rivoli\">Hotel Rivoli</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            <label><i class=\"icon-calendar-7\"></i> Date</label>
                            <input class=\"date-pick form-control\" data-date-format=\"M d, D\" type=\"text\">
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            <label><i class=\" icon-clock\"></i> Time</label>
                            <input class=\"time-pick form-control\" value=\"12:00 AM\" type=\"text\">
                        </div>
                    </div>
                    <div class=\"col-md-2 col-sm-3\">
                        <div class=\"form-group\">
                            <label>Adults</label>
                            <div class=\"numbers-row\">
                                <input type=\"text\" value=\"1\" id=\"adults\" class=\"qty2 form-control\" name=\"quantity\">
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-9\">
                        <div class=\"form-group\">
                            <div class=\"radio_fix\">
                                <label class=\"radio-inline\" style=\"padding-left:0\">
                                    <input type=\"radio\" name=\"inlineRadioOptions\" id=\"inlineRadio1\" value=\"option1\" checked> One Way
                                </label>
                            </div>
                            <div class=\"radio_fix\">
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"inlineRadioOptions\" id=\"inlineRadio2\" value=\"option2\"> Return
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <hr>
                <button class=\"btn_1 green\"><i class=\"icon-search\"></i>Search now</button>
            </div>
            <div class=\"tab-pane\" id=\"restaurants\">
                <h3>Search Restaurants in Paris</h3>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Search by name</label>
                            <input type=\"text\" class=\"form-control\" id=\"restaurant_name\" name=\"restaurant_name\" placeholder=\"Type your search terms\">
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Food type</label>
                            <select class=\"ddslick\" name=\"category_2\">
                                <option value=\"0\" data-imagesrc=\"{{asset('templates/citytours/img/icons_search/all_restaurants.png')}}\" selected>All restaurants</option>
                                <option value=\"1\" data-imagesrc=\"{{asset('templates/citytours/img/icons_search/fast_food.png')}}\">Fast food</option>
                                <option value=\"2\"  data-imagesrc=\"{{asset('templates/citytours/img/icons_search/pizza_italian.png')}}\">Pizza / Italian</option>
                                <option value=\"3\" data-imagesrc=\"{{asset('templates/citytours/img/icons_search/international.png')}}\">International</option>
                                <option value=\"4\" data-imagesrc=\"{{asset('templates/citytours/img/icons_search/japanese.png')}}\">Japanese</option>
                                <option value=\"5\" data-imagesrc=\"{{asset('templates/citytours/img/icons_search/chinese.png')}}\">Chinese</option>
                                <option value=\"6\" data-imagesrc=\"{{asset('templates/citytours/img/icons_search/bar.png')}}\">Coffee Bar</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            <label><i class=\"icon-calendar-7\"></i> Date</label>
                            <input class=\"date-pick form-control\" data-date-format=\"M d, D\" type=\"text\">
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            <label><i class=\" icon-clock\"></i> Time</label>
                            <input class=\"time-pick form-control\" value=\"12:00 AM\" type=\"text\">
                        </div>
                    </div>
                    <div class=\"col-md-2 col-sm-3 col-xs-6\">
                        <div class=\"form-group\">
                            <label>Adults</label>
                            <div class=\"numbers-row\">
                                <input type=\"text\" value=\"1\" id=\"adults\" class=\"qty2 form-control\" name=\"adults\">
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-2 col-sm-3 col-xs-6\">
                        <div class=\"form-group\">
                            <label>Children</label>
                            <div class=\"numbers-row\">
                                <input type=\"text\" value=\"0\" id=\"children\" class=\"qty2 form-control\" name=\"children\">
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End row -->
                <hr>
                <button class=\"btn_1 green\"><i class=\"icon-search\"></i>Search now</button>
            </div>
        </div>
    </div>
</section>
<!-- End hero -->

<main>

    <!-- End container -->

    <div class=\"white_bg\">
        <div class=\"container margin_60\">
            <div class=\"main_title\">
                <h2>Other <span>Popular</span> tours</h2>
                <p>
                    Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
                </p>
            </div>
            <div class=\"row add_bottom_45\">
                <div class=\"col-md-4 other_tours\">
                    <ul>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-3\"></i>Tour Eiffel<span class=\"other_tours_price\">\$42</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-30\"></i>Shopping tour<span class=\"other_tours_price\">\$35</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-44\"></i>Versailles tour<span class=\"other_tours_price\">\$20</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-3\"></i>Montparnasse skyline<span class=\"other_tours_price\">\$26</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-44\"></i>Pompidue<span class=\"other_tours_price\">\$26</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-3\"></i>Senna River tour<span class=\"other_tours_price\">\$32</span></a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-md-4 other_tours\">
                    <ul>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-1\"></i>Notredame<span class=\"other_tours_price\">\$48</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-4\"></i>Lafaiette<span class=\"other_tours_price\">\$55</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-30\"></i>Trocadero<span class=\"other_tours_price\">\$76</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-3\"></i>Open Bus tour<span class=\"other_tours_price\">\$55</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-30\"></i>Louvre museum<span class=\"other_tours_price\">\$24</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-3\"></i>Madlene Cathedral<span class=\"other_tours_price\">\$24</span></a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-md-4 other_tours\">
                    <ul>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-37\"></i>Montparnasse<span class=\"other_tours_price\">\$36</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-1\"></i>D'Orsey museum<span class=\"other_tours_price\">\$28</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-50\"></i>Gioconda Louvre musuem<span class=\"other_tours_price\">\$44</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-44\"></i>Tour Eiffel<span class=\"other_tours_price\">\$56</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-50\"></i>Ladefanse<span class=\"other_tours_price\">\$16</span></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon_set_1_icon-44\"></i>Notredame<span class=\"other_tours_price\">\$26</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End row -->

            <div class=\"banner colored add_bottom_30\">
                <h4>Discover our Top tours <span>from \$34</span></h4>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in.
                </p>
                <a href=\"single_tour.html\" class=\"btn_1 white\">Read more</a>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6 text-center\">
                    <p>
                        <a href=\"#\"><img src=\"{{asset('templates/citytours/img/bus.jpg')}}\" alt=\"Pic\" class=\"img-responsive\"></a>
                    </p>
                    <h4><span>Sightseen tour</span> booking</h4>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                    </p>
                </div>
                <div class=\"col-md-3 col-sm-6 text-center\">
                    <p>
                        <a href=\"#\"><img src=\"{{asset('templates/citytours/img/transfer.jpg')}}\" alt=\"Pic\" class=\"img-responsive\"></a>
                    </p>
                    <h4><span>Transfer</span> booking</h4>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                    </p>
                </div>
                <div class=\"col-md-3 col-sm-6 text-center\">
                    <p>
                        <a href=\"#\"><img src=\"{{asset('templates/citytours/img/guide.jpg')}}\" alt=\"Pic\" class=\"img-responsive\"></a>
                    </p>
                    <h4><span>Tour guide</span> booking</h4>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                    </p>
                </div>
                <div class=\"col-md-3 col-sm-6 text-center\">
                    <p>
                        <a href=\"#\"><img src=\"{{asset('templates/citytours/img/hotel.jpg')}}\" alt=\"Pic\" class=\"img-responsive\"></a>
                    </p>
                    <h4><span>Hotel</span> booking</h4>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                    </p>
                </div>
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </div>
    <!-- End white_bg -->

    <section class=\"promo_full\">
        <div class=\"promo_full_wp magnific\">
            <div>
                <h3>BELONG ANYWHERE</h3>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                </p>
                <a href=\"https://www.youtube.com/watch?v=Zz5cu72Gv5Y\" class=\"video\"><i class=\"icon-play-circled2-1\"></i></a>
            </div>
        </div>
    </section>
    <!-- End section -->

    <div class=\"container margin_60\">

        <div class=\"main_title\">
            <h2>Some <span>good</span> reasons</h2>
            <p>
                Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
            </p>
        </div>

        <div class=\"row\">

            <div class=\"col-md-4 wow zoomIn\" data-wow-delay=\"0.2s\">
                <div class=\"feature_home\">
                    <i class=\"icon_set_1_icon-41\"></i>
                    <h3><span>+120</span> Premium tours</h3>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                    </p>
                    <a href=\"about.html\" class=\"btn_1 outline\">Read more</a>
                </div>
            </div>

            <div class=\"col-md-4 wow zoomIn\" data-wow-delay=\"0.4s\">
                <div class=\"feature_home\">
                    <i class=\"icon_set_1_icon-30\"></i>
                    <h3><span>+1000</span> Customers</h3>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                    </p>
                    <a href=\"about.html\" class=\"btn_1 outline\">Read more</a>
                </div>
            </div>

            <div class=\"col-md-4 wow zoomIn\" data-wow-delay=\"0.6s\">
                <div class=\"feature_home\">
                    <i class=\"icon_set_1_icon-57\"></i>
                    <h3><span>H24 </span> Support</h3>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                    </p>
                    <a href=\"about.html\" class=\"btn_1 outline\">Read more</a>
                </div>
            </div>

        </div>
        <!--End row -->

        <hr>

        <div class=\"row\">
            <div class=\"col-md-8 col-sm-6 hidden-xs\">
                <img src=\"{{asset('templates/citytours/img/laptop.png')}}\" alt=\"Laptop\" class=\"img-responsive laptop\">
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <h3><span>Get started</span> with CityTours</h3>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                </p>
                <ul class=\"list_order\">
                    <li><span>1</span>Select your preferred tours</li>
                    <li><span>2</span>Purchase tickets and options</li>
                    <li><span>3</span>Pick them directly from your office</li>
                </ul>
                <a href=\"all_tour_list.html\" class=\"btn_1\">Start now</a>
            </div>
        </div>
        <!-- End row -->

    </div>
    <!-- End container -->
</main>
<!-- End main -->

<footer class=\"revealed\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-sm-3\">
                <h3>Need help?</h3>
                <a href=\"tel://004542344599\" id=\"phone\">+45 423 445 99</a>
                <a href=\"http://www.ansonika.com/cdn-cgi/l/email-protection#fb939e978bbb98928f828f948e8988d5989496\" id=\"email_footer\"><span class=\"__cf_email__\" data-cfemail=\"18707d7468587b716c616c776d6a6b367b7775\">[email&#160;protected]</span></a>
            </div>
            <div class=\"col-md-3 col-sm-3\">
                <h3>About</h3>
                <ul>
                    <li><a href=\"#\">About us</a></li>
                    <li><a href=\"#\">FAQ</a></li>
                    <li><a href=\"#\">Login</a></li>
                    <li><a href=\"#\">Register</a></li>
                    <li><a href=\"#\">Terms and condition</a></li>
                </ul>
            </div>
            <div class=\"col-md-3 col-sm-3\">
                <h3>Discover</h3>
                <ul>
                    <li><a href=\"#\">Community blog</a></li>
                    <li><a href=\"#\">Tour guide</a></li>
                    <li><a href=\"#\">Wishlist</a></li>
                    <li><a href=\"#\">Gallery</a></li>
                </ul>
            </div>
            <div class=\"col-md-2 col-sm-3\">
                <h3>Settings</h3>
                <div class=\"styled-select\">
                    <select class=\"form-control\" name=\"lang\" id=\"lang\">
                        <option value=\"English\" selected>English</option>
                        <option value=\"French\">French</option>
                        <option value=\"Spanish\">Spanish</option>
                        <option value=\"Russian\">Russian</option>
                    </select>
                </div>
                <div class=\"styled-select\">
                    <select class=\"form-control\" name=\"currency\" id=\"currency\">
                        <option value=\"USD\" selected>USD</option>
                        <option value=\"EUR\">EUR</option>
                        <option value=\"GBP\">GBP</option>
                        <option value=\"RUB\">RUB</option>
                    </select>
                </div>
            </div>
        </div><!-- End row -->
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div id=\"social_footer\">
                    <ul>
                        <li><a href=\"#\"><i class=\"icon-facebook\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-twitter\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-google\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-instagram\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-pinterest\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-vimeo\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-youtube-play\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-linkedin\"></i></a></li>
                    </ul>
                    <p>© Citytours 2015</p>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</footer><!-- End footer -->

<div id=\"toTop\"></div><!-- Back to top button -->

<!-- Search Menu -->
<div class=\"search-overlay-menu\">
    <span class=\"search-overlay-close\"><i class=\"icon_set_1_icon-77\"></i></span>
    <form role=\"search\" id=\"searchform\" method=\"get\">
        <input value=\"\" name=\"q\" type=\"search\" placeholder=\"Search...\" />
        <button type=\"submit\"><i class=\"icon_set_1_icon-78\"></i>
        </button>
    </form>
</div><!-- End Search Menu -->

<!-- Common scripts -->
<script data-cfasync=\"false\" src=\"{{asset('templates/cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js')}}\"></script><script src=\"{{asset('templates/citytours/js/jquery-2.2.4.min.js')}}\"></script>
<script src=\"{{asset('templates/citytours/js/common_scripts_min.js')}}\"></script>
<script src=\"{{asset('templates/citytours/js/functions.js')}}\"></script>

<!-- Specific scripts -->
<script src=\"{{asset('templates/citytours/js/icheck.js')}}\"></script>
<script>
    \$('input').iCheck({
        checkboxClass: 'icheckbox_square-grey',
        radioClass: 'iradio_square-grey'
    });
</script>
<script src=\"{{asset('templates/citytours/js/bootstrap-datepicker.js')}}\"></script>
<script src=\"{{asset('templates/citytours/js/bootstrap-timepicker.js')}}\"></script>
<script>
    \$('input.date-pick').datepicker('setDate', 'today');
    \$('input.time-pick').timepicker({
        minuteStep: 15,
        showInpunts: false
    })
</script>
<script src=\"{{asset('templates/citytours/js/jquery.ddslick.js')}}\"></script>
<script>
    \$(\"select.ddslick\").each(function(){
        \$(this).ddslick({
            showSelectedHTML: true
        });
    });
</script>
</body>

<!-- Mirrored from www.ansonika.com/citytours/index_7.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Feb 2018 23:59:16 GMT -->
</html>", "base.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\app\\Resources\\views\\base.html.twig");
    }
}
