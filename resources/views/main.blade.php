<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Сайт продажи недвижимости</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Owl Carousel Assets -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">

    <!-- Flexslider CSS -->
    <link href="css/flexslider.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/main_style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Top Bar -->
<section class="top_sec">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 top_lft">
                <div class="soc_ico">
                    <ul>
                        <li class="tweet">
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="fb">
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="insta">
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li class="linkd">
                            <a href="#">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li class="ytube">
                            <a href="#">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </li>
                        <li class="rss">
                            <a href="#">
                                <i class="fa fa-rss"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="inf_txt">
                    <p>Luxury Real Estate Specialists Worldwide</p>
                </div>

            </div>
            <!-- /.top-left -->
            <div class="col-xs-12 col-md-6 top_rgt">
                <div class="sig_in">
                    <p><i class="fa fa-user"></i>
                        <a href="#login_box" class="log_btn" data-toggle="modal"> Sign in </a> or <a class="reg_btn" href="#reg_box" data-toggle="modal"> create account </a> </p>
                </div>
                <div class="submit_prop">
                    <h3 class="subm_btn"><a href="#prop_box" data-toggle="modal">
                            <i class="fa fa-bars"></i>
                            <span> Submit Property </span></a>
                    </h3>
                </div>

            </div>
            <!-- /.top-right -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!-- Navigation -->
<nav class="navbar" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Logo -->
            <a class="navbar-brand" href="/"><img src="images/logo.png" alt="logo">
            </a>
        </div>
        <!-- Navigation -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="" href="/"> Главная </a>

                </li>
                <li>
                    <a href="#">Property </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="property_listing.html"> Property Listings </a>
                        </li>
                        <li>
                            <a href="property_details.html"> Property Single </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Agents             </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="agents.html">Our Agents </a>
                        </li>
                        <li>
                            <a href="agents_single.html"> Agent Single </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="features.html">Features             </a>
                </li>
                <li>
                    <a href="{!! route('news') !!}">Новости</a>
                </li>
                <li>
                    <a href="{!! route('auth') !!}">Авторизация</a>
                </li>
                <li>
                    <a class="" href="contact.html">Contact</a>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
@yield('header')
@yield('content')
<!-- Footer -->
<footer>
    <!-- Footer Top -->
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <!-- About Section -->
                <div class="col-md-3 abt_sec">
                    <h2 class="foot_title">
                        About Wedoor
                    </h2>
                    <p>
                        Ethical quinoa slow-carb squid, irony Pitchfork tousled hella art party PBR&amp;B cray dreamcatcher brunch.
                    </p>

                    <div class="spacer-20"></div>

                    <p>
                        Bicycle rights jean shorts organic, street art PBR occupy flexitarian pour-over master cleanse farm-to-table.

                    </p>

                </div>
                <!-- Latest Tweets -->
                <div class="col-md-3">
                    <h2 class="foot_title">
                        Latest Tweets
                    </h2>
                    <ul class="tweets">
                        <li> <i class="fa fa-twitter"></i>
                            <p class="twee">
                                Check out this great <a href="#">#themeforest</a> item 'Responsive Photography WordPress <a href="#">http://drbl.in/871942</a>
                            </p>

                            <p class="datd"> 6 April 2015 </p>
                            <div class="clearfix"></div>
                        </li>


                        <li class="spacer-20"></li>

                        <li><i class="fa fa-twitter"></i>

                            <p class="twee">
                                <a href="#"> #MadeBySeries </a> Made By: Chris Coyier, Founder <a href="#">  http://ow.ly/LeAKf </a>
                            </p>

                            <p class="datd"> 6 April 2015 </p>
                            <div class="clearfix"></div>
                        </li>
                    </ul>

                </div>
                <!-- Contact Info -->
                <div class="col-md-3">
                    <h2 class="foot_title">
                        Contact Info
                    </h2>
                    <ul class="cont_info">
                        <li><i class="fa fa-map-marker"></i>
                            <p>371 Linden Avenue Longwood, FL 32750 </p>
                        </li>
                        <li><i class="fa fa-phone"></i>
                            <p> <a href="tel:407-546-2034"> Phone: 407-546-2034 </a> </p>
                        </li>
                        <li><i class="fa fa-envelope"></i>
                            <p> <a href="mailto:connect@crelegant.com?Subject=template%20enquiry"> Email: connect@crelegant.com </a> </p>
                        </li>
                    </ul>

                </div>
                <!-- Useful Links -->
                <div class="col-md-3">
                    <h2 class="foot_title">
                        Useful Links
                    </h2>
                    <ul class="foot_nav">
                        <li> <a href="index.html">Home Search</a> </li>
                        <li> <a href="property_listing.html">Properties Inspection</a> </li>
                        <li> <a href="agents.html">Agents Consult</a> </li>
                        <li> <a href="blog.html">Latest News</a> </li>
                        <li> <a href="contact.html">Get in touch</a> </li>
                    </ul>

                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->

    </div>
    <!-- Copyright -->
    <div class="footer_copy_right">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-left">
                    <p>&copy; Copyright 2014. All Rights Reserved by <a href="#"> WeDoor </a>
                    </p>
                </div>
                <div class="col-sm-6 text-right">
                    <p>Template developed by <a href="http://themeforest.net/user/crelegant"> The Crelegant Team </a> </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Modal HTML -->
<div id="login_box" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="log_form">
                    <h2 class="frm_titl"> Login Form </h2>
                    <form name="sentMessage" id="loginForm" novalidate>
                        <div class="control-group form-group">
                            <div class="controls">
                                <input type="text" class="form-control" id="u-name" required data-validation-required-message="Please enter your username." placeholder="Username">
                                <p class="help-block"></p>
                            </div>

                            <div class="controls">
                                <input type="password" class="form-control" id="password" required data-validation-required-message="Please enter your password." placeholder="Password">

                                <p class="help-block"></p>
                            </div>
                            <div class="checkbox col-md-6">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
                            <div class="forg_pass col-md-6 text-right">
                                <a class="" href="#"> Forgot your password?  </a>
                            </div>
                            <div class="clearfix"></div>

                            <button type="submit" class="btn btn-primary">Sign In</button>
                            <div id="success2"></div>
                            <!-- For success/fail messages -->
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="reg_box" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="log_form">
                    <h2 class="frm_titl"> Create Account </h2>
                    <form name="sentMessage" id="RegisForm" novalidate>
                        <div class="control-group form-group">
                            <div class="controls">
                                <input type="text" class="form-control" id="username" required data-validation-required-message="Please enter your username." placeholder="Username">
                                <p class="help-block"></p>
                            </div>

                            <div class="controls">
                                <input type="email" class="form-control" id="e-mail" required data-validation-required-message="Please enter your email." placeholder="Email">
                                <p class="help-block"></p>
                            </div>

                            <div class="controls">
                                <input type="password" class="form-control" id="passd" required data-validation-required-message="Please enter your password." placeholder="Password">

                                <p class="help-block"></p>
                            </div>
                            <div class="controls">
                                <input type="password" class="form-control" id="re-passd" required data-validation-required-message="Please enter your password." placeholder="Retype Password">

                                <p class="help-block"></p>
                            </div>

                            <button type="submit" class="btn btn-primary">Create Account</button>
                            <div id="success3"></div>
                            <!-- For success/fail messages -->
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="prop_box" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="log_form">
                    <h2 class="frm_titl"> Property Listing </h2>
                    <form name="sentMessage" id="listform" novalidate>
                        <div class="control-group form-group">
                            <div class="controls">
                                <input type="text" class="form-control" id="list_name" required data-validation-required-message="Please enter the listing name." placeholder="Listing Name">
                                <p class="help-block"></p>
                            </div>

                            <div class="controls">
                                <input type="text" class="form-control" id="addr" required data-validation-required-message="Please enter your Address." placeholder="Address">

                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls col-md-6 first">
                                <select name="Type" class="form-control" required="" data-validation-required-message="Please select a type.">
                                    <option value="0" selected="selected">Select the listing type</option>
                                    <option value="1">Industrial</option>
                                    <option value="2">Commercial</option>
                                    <option value="3">Household</option>
                                </select>
                            </div>
                            <div class="controls col-md-6">
                                <select name="Actions" class="form-control" required="" data-validation-required-message="Please select a Actions.">
                                    <option value="0" selected="selected">Select the Action</option>
                                    <option value="1">For Rent</option>
                                    <option value="2">For Sale</option>
                                </select>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls col-md-6 first">
                                <input type="text" class="form-control" id="area" required data-validation-required-message="Please enter the Area." placeholder="Area(sq.ft)">
                            </div>
                            <div class="controls col-md-6">
                                <input type="text" class="form-control" id="rate" required data-validation-required-message="Please enter your Rate." placeholder="Rate">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls col-md-6 first">
                                <input type="text" class="form-control" id="agt_name" required data-validation-required-message="Please enter the Agent name." placeholder="Agent Name">
                            </div>
                            <div class="controls col-md-6">
                                <input type="text" class="form-control" id="agt_number" required data-validation-required-message="Please enter the Agent Contact Number." placeholder="Agent Contact Number">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <textarea rows="10" cols="60" class="form-control" id="message" required="" data-validation-required-message="Please enter your Property description" maxlength="999" style="resize:none" placeholder="Property Description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit Property</button>
                            <div id="success4"></div>
                            <!-- For success/fail messages -->

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Owl Carousel JavaScript -->
<script src="js/owl.carousel.min.js"></script>

<!-- Flexslider JavaScript -->
<script src="js/jquery.flexslider-min.js"></script>


<!-- Script to Activate the Carousels -->
<script src="js/main.js"></script>


</body>

</html>
