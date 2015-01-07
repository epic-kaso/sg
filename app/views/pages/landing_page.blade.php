<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Supergeeks - Gadget Swap</title>

    <!-- Bootstrap Core CSS -->
    <link href="/landing-page/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/landing-page/css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/landing-page/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<p class="stripe-bar">Available From November 1st, 2014</p>
<!-- Intro Header -->
<header class="intro">
    <div class="background-img">
    </div>
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-right">
                            <span><a href="/" style="
                                    color: #000000;
                                    font-size: 17px;
                                    /* border: #000000 solid 1px; */
                                    /* padding: 5px; */
                                    /* border-radius: 5px; */
                                    margin-top: 4px;
                                    /* width: 150px; */
                                    font-weight: bold;
">« Go to Main Site</a>
                            </span>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-3">
                            <img src="{{ asset('img/gadget_swap_logo.png') }}" style="
    margin-left: auto;
    margin-right: auto;
">
                        </div>
                    </div>


                    <ul class="bullet-list" style="
">
                        <li><span>1</span>

                            <p style="
">Bring in your gadgets.</p></li>
                        <li><span>2</span>

                            <p>Geek appraisal.</p></li>
                        <li><span>3</span>

                            <p>Collect your reward.</p></li>
                    </ul>


                    <div style="
    margin-bottom: 20px;
    margin-top: 20px;
">
                        <a href="#about" class="btn btn-warning btn-lg page-scroll animated" style="
">RESERVE A SWAP</a><a href="#" style="
    margin-left: 20px;
    color: #0f75bc;
    font-size: 20px;
    font-weight: 500;
    padding: 10px;
">LEARN MORE</a>
                    </div>
                    <a href="#about" class="btn btn-circle page-scroll">
                        <i class="fa fa-angle-down animated"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- About Section -->
<section id="about" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-5 col-lg-offset-1" style="text-align: justify;">
            <?php
            if(!empty($flash['errors'])){
            $errors = $flash['errors'];
            ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach($errors as $error){ ?>
                    <li><?= $error ?></li>
                    <?php   } ?>
                </ul>
            </div>
            <?php } ?>

            <form method="post" action="gadget-swap" name="gadget-swap">

                <h2>Reserve A Spot</h2>

                <div class="form-group">
                    <input value="<?= @$flash['gadget_swap_form_inputs']['name'] ?>" type="text" class="form-control"
                           placeholder="Your Full Name" name="name">
                </div>

                <div class="form-group">
                    <input value="<?= @$flash['gadget_swap_form_inputs']['email'] ?>" type="email" class="form-control"
                           placeholder="Your Email Address" name="email" required="">
                </div>

                <div class="form-group">
                    <input value="<?= @$flash['gadget_swap_form_inputs']['phone'] ?>" type="text" class="form-control"
                           placeholder="Your Mobile Number (OPTIONAL)" name="phone">
                </div>

                <div class="form-group">
                    <input value="<?= @$flash['gadget_swap_form_inputs']['device_make'] ?>" type="text"
                           class="form-control" placeholder="Your Device Make e.g SAMSUNG" name="device_make"
                           required="">
                </div>

                <div class="form-group">
                    <input value="<?= @$flash['gadget_swap_form_inputs']['device_model'] ?>" type="text"
                           class="form-control" placeholder="Your Device Model e.g GALAXY S4" name="device_model"
                           required="">
                </div>

                <div class="form-group">
                    <span class="form-control-static">Problem with device</span>
                    <ul class="list-unstyled">
                        <li>
                            <label>
                                <input checked="" type="radio" name="device_problem" value="old"> It's Working
                            </label>
                        </li>
                        <li>
                            <label style=" margin-left: 10px;">
                                <input type="radio" name="device_problem" value="faulty"> It's Faulty
                            </label>
                        </li>
                    </ul>

                </div>

                <div class="form-group">
                    <?= recaptcha_get_html($recaptcha_key) ?>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg" value="OK, RESERVE A SPACE FOR ME">
                </div>
            </form>
        </div>


        <div class="col-lg-4">
            <ul class="address-list-unstyled" style="
    margin-top: 55px;
">
                <li>
                    <span class="fa fa-map-marker"></span> 1, Victoria Arobieke Street,
                    <p style="
    margin-bottom: 0;
">Off Admiralty Way,</p>

                    <p>Lekki Phase 1, Lagos</p>
                </li>
            </ul>
            <ul class="address-list-unstyled">
                <li>
                    <span class="fa fa-mobile"></span> 08150924335
                    <p>08150974335</p>
                </li>

            </ul>
        </div>


    </div>

</section>

<!-- Contact Section -->
<section id="contact" class="container content-section text-center">
    <div class="footer-row">
        <div>
            <footer class="footer">
                <div class="row" style="
    border-top: 1px solid #eeeeee;
    padding-top: 20px;
">
                    <div class="col-sm-9 col-lg-9">
                        <div class="row">
                            <ul class="col-sm-4 col-lg-4">
                                <li><strong>SuperGeeks</strong></li>
                                <li><a href="/about">About</a></li>
                                <li><a href="/why-choose-us">Why Choose Us</a></li>
                                <li><a href="/sgp">Safety &amp; Security</a></li>
                                <li><a href="/privacy-policy">Privacy Policy</a></li>
                                <li><a href="/terms">Terms &amp; Condition</a></li>
                            </ul>

                            <ul class="col-sm-4 col-lg-4">
                                <li><strong>Services</strong></li>
                                <li><a href="/tech-support">Tech Support</a></li>
                                <li><a href="/repairs">Repairs</a></li>
                            </ul>


                            <ul class="col-sm-4 col-lg-4">
                                <li><strong>Support</strong></li>
                                <li><a href="/tech-support">Tech Support</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <ul class="social-icons pull-right">
                            <li><strong>Connect with us</strong></li>
                            <li>
                                <a href="https://twitter.com/TeamSuperGeeks" title="Supergeeks on Twitter"><span
                                            class="fa fa-twitter" style="
                                font-size: 30px;
                            "></span></a>
                                <a href="https://www.facebook.com/SuperGeeksAfrica" title="Supergeeks on facebook"><span
                                            class="fa fa-facebook" style="
                            font-size: 30px;
                            margin: 10px;
                        "></span></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="copyright row">
                    <div class="container text-center">
                        <p style="
    font-size: 15px;
" class="pull-right">Copyright © Supergeeks Nigeria 2014</p>
                    </div>
                </div>
            </footer>


        </div>
    </div>
</section>
<!-- jQuery Version 1.11.0 -->
<script src="{{ asset('landing-page/js/jquery-1.11.0.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('landing-page/js/bootstrap.min.js') }}"></script>
<!-- Plugin JavaScript -->
<script src="{{ asset('landing-page/js/jquery.easing.min.js') }}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ asset('landing-page/js/grayscale.js') }}"></script>
</body>
</html>