<!DOCTYPE html>
<html>

<head>
    <title>Bonzark Technologies</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="description" content="Bonzark Technologies consists of some of the best technically competent brains handpicked and identified from the Indian IT industry. Excellence is what we strive to achieve at all levels. And our talented team of experts keeps no stone unturned as far as creativity and technological expertise is concerned. Everyone here has an unparalleled decisive and assurance to our clients because Client’s satisfaction is our preference.">
    <meta name="keywords" content="HTML Design,Erp Design,Website Development,Catelog Design and Development">
    <meta name="author" content="Bonzark Technologies">

    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/client/css/home/home.css'); ?>" />
    <link rel="icon" href="<?php echo base_url('assets/images/Kevalam-fevicon.png'); ?>" type="image/icon" />
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.11.3.min.js"); ?>"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            // Hide Preloader
            setTimeout(function() {
                $(".preloader").fadeOut(500);
            }, 500);

            $(".main").mouseenter(function() {
                $("body").addClass("mouseIn");
            });
            $(".main").mouseleave(function() {
                $("body").removeClass("mouseIn");
            });

            $(document).off("click", "#contactSend").on('click', "#contactSend", function(e) {
                e.preventDefault();
                var ele = $(this);
                sendMail(ele);
            });

            var sensitivityMultiplier = 0.012;
            var oldX = 0;
            var oldY = 0;
            $("#product, #service").mousemove(function(e) {
                var mouseX = e.pageX;
                var mouseY = e.pageY;

                var RelX = (mouseX - oldX) * sensitivityMultiplier;
                var RelY = (mouseY - oldY) * sensitivityMultiplier;


                if ($(this).attr("id") == "product")
                    $(this).find(".moveWithMouse").css({
                        left: "-=" + RelX + "px",
                        top: "-=" + RelY + "px"
                    });
                else
                    $(this).find(".moveWithMouse").css({
                        right: "-=" + RelX + "px",
                        top: "-=" + RelY + "px"
                    });

                oldX = mouseX;
                oldY = mouseY;
            });

            $("#product, #service").mouseleave(function(e) {
                $(this).find(".moveWithMouse").css({
                    left: "0",
                    top: "0"
                });
                oldX = 0;
                oldY = 0;
            });

            $("#product, #service").click(function() {

                $("body").removeClass("productOpened").removeClass("serviceOpened");
                $("body").addClass($(this).attr("id") + "Opened");

                if ($(window).width() < 768) {
                    if ($(this).attr("id") == "product")
                        $(this).find(".innerContent").animate({
                            "left": 0
                        }, 500);
                    else
                        $(this).find(".innerContent").animate({
                            "right": 0
                        }, 500);
                } else {
                    $(".side").css({
                        width: "0"
                    });
                    $(this).css({
                        width: "100%"
                    });

                    $(".moveWithMouse,.companyName, .centerLogo, .content, .tagline, .footer").fadeOut(500);
                    $(this).find(".innerContent").fadeIn(500, function() {
                        $(this).find(".link").animate({
                            opacity: "1",
                            marginTop: "50px"
                        }, 500);
                        $(this).find(".innerDiv").each(function(index, value) {
                            $(this).delay(100 * index).animate({
                                opacity: "1",
                                marginTop: "0px"
                            }, 500);
                        });
                    });
                }
            });

            $(".innerContent .close").click(function(e) {
                e.stopPropagation();

                if ($(window).width() < 768) {
                    if ($(this).closest(".side").attr("id") == "product")
                        $(this).closest(".innerContent").animate({
                            "left": "-100%"
                        }, 500, function() {
                            $("body").removeClass("productOpened").removeClass("serviceOpened");
                        });
                    else
                        $(this).closest(".innerContent").animate({
                            "right": "-100%"
                        }, 500, function() {
                            $("body").removeClass("productOpened").removeClass("serviceOpened");
                        });
                } else {
                    var l = $(this).closest(".innerContent").find(".innerDiv").length;
                    $(".innerContent .link").animate({
                        opacity: "0",
                        marginTop: "30px"
                    }, 500);
                    $(this).closest(".innerContent").find(".innerDiv").each(function(index, value) {
                        $(this).delay(100 * index).animate({
                            opacity: "0",
                            marginTop: "-20px"
                        }, 500);
                    });
                    setTimeout(function() {
                        $(".side").removeAttr("style");
                        $("body").removeClass("productOpened").removeClass("serviceOpened");
                        $(".moveWithMouse,.companyName, .centerLogo, .content, .tagline, .footer").fadeIn(500);
                        $(".innerContent").fadeOut(500);
                    }, 200 * l);
                }
            });

            $("#contact").click(function(e) {
                e.stopPropagation();
                $(".map").animate({
                    top: "0"
                }, 500);
                $(".contactMain").animate({
                    height: "100%",
                    top: 0
                }, 500, function() {
                    $(".contactInner").animate({
                        opacity: "1",
                        marginTop: "0"
                    }, 500);
                });
                setTimeout(function() {
                    $("body").addClass("contactOpened");
                }, 500);
            });

            $("#outerFooter").click(function(e) {
                e.stopPropagation();
                $(".map").animate({
                    top: "0"
                }, 500);
                $(".contactMain").animate({
                    top: "0"
                }, 500, function() {
                    $("body").addClass("contactOpened");
                });
            });

            $(".contactMain .close").click(function(e) {
                e.stopPropagation();
                if ($(window).width() < 768) {
                    $(".map").animate({
                        top: "100%"
                    }, 500);
                    $(".contactMain").animate({
                        top: "100%"
                    }, 500, function() {
                        $("body").removeClass("contactOpened");
                    });
                } else {
                    $(".map").animate({
                        top: "100%"
                    }, 500);
                    $(".contactMain").animate({
                        height: "0",
                        top: "100%"
                    }, 500);
                    setTimeout(function() {
                        $("body").removeClass("contactOpened");
                    }, 500);
                }
            });

            $("#social").click(function(e) {
                e.stopPropagation();
            });

            $(window).resize(function() {
                if ($(window).width() < 768) {
                    $('.companyName, .footer, .tagline').css("display", "none");
                } else {
                    $('.companyName, .footer, .tagline').css("display", "block");
                }
            });

        });

        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            var mapOptions = {
                zoom: 15,
                center: new google.maps.LatLng(22.288816, 70.762350), // New York
                styles: [{
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#e9e9e9"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#dedede"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [{
                                "saturation": 36
                            },
                            {
                                "color": "#333333"
                            },
                            {
                                "lightness": 40
                            }
                        ]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f2f2f2"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    }
                ],
                mapTypeControl: false,
                zoomControl: false,
                streetViewControl: false
            };

            var mapElement = document.getElementById('map');

            var map = new google.maps.Map(mapElement, mapOptions);

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(22.288816, 70.762350),
                map: map,
                title: 'Kevalam'
            });
        }

        function sendMail(ele) {
            var form = $("#modalForm");
            var oldHtml = '';

            $.ajax({
                url: '<?php echo site_url('client_default/sendMail'); ?>',
                data: form.serialize(),
                type: 'post',
                dataType: 'json',
                beforeSend: function() {
                    oldHtml = $(ele).html();
                    $(ele).html("Sending...").prop("disabled", true);
                    form.find(".error, .notification").css({
                        display: "none"
                    });
                    form.find('.notification').removeClass("text-danger").removeClass("text-success").html("");
                },
                success: function(result) {
                    $(ele).html(oldHtml).prop("disabled", false);
                    if (result['status'] == "success") {

                        var message = "";

                        if (form.find("input[name='mailtype']").val() == "demo")
                            message = "Thanks for contact with us.<br />Demo request sent successfully. we will contact you soon.";

                        else if (form.find("input[name='mailtype']").val() == "inquiry")
                            message = "Thanks for contact with us.<br />Inquiry sent successfully. we will contact you soon.";
                        else
                            message = "Thanks for contact with us.<br />Mail sent successfully. we will contact you soon.";

                        form.find(".notification")
                            .addClass("text-success")
                            .html(message)
                            .css({
                                display: "block"
                            });
                    } else if (result['status'] == 'validation_error') {
                        $.each(result, function(i, val) {
                            if (val)
                                form.find("#" + i).css({
                                    display: "block"
                                });
                        });
                    } else {
                        form.find(".notification")
                            .addClass("text-danger")
                            .html("Sorry, but something is weird! Please try again.")
                            .css({
                                display: "block"
                            });
                    }
                },
                error: function() {
                    $(ele).html(oldHtml).prop("disabled", false);
                    form.find(".notification")
                        .addClass("text-danger")
                        .html("Sorry, but something is weird! Please try again.")
                        .css({
                            display: "block"
                        });
                }
            });
        }
    </script>
</head>

<body>

    <!-- Loader -->
    <div class="preloader">
        <img src="<?php echo base_url("assets/client/img/logo.png"); ?>" alt="Bonzark Technologies Logo" class="loaderLogo" />
        <div class="loaderWrapper">
            <div class="loader">
                <div class="loader">
                    <div class="loader">
                        <div class="loader">
                            <div class="loader">
                                <div class="loader">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header -->
    <div class="header">
        <a href=""><img src="<?php echo base_url("assets/client/img/logo.png"); ?>" alt="Bonzark Technologies_logo" class="logoGreen" /></a>
        <a href=""><img src="<?php echo base_url("assets/client/img/logoWhite.png"); ?>" alt="kevalam_logo" class="logoWhite" /></a><br />
        <a href="<?php echo base_url("career"); ?>" class="hiring">We are hiring!</a>
        <span class="headerName">
            <b><span class="textGreen">KEVALAM</span> SOFTWARE</b><br />
            <small>Simplify Bus<b class="textGreen">y</b>ness...</small>
        </span>
    </div>
    <!-- Main Fixed Div -->
    <div class="main">
        <!-- Product Side -->
        <div class="side" id="product">
            <!-- Move with Mouse -->
            <div class="moveWithMouse"></div>

            <!-- Company Name -->
            <div class="companyName">Bonzark Technologies</div>

            <!-- Center Large Logo -->
            <div class="centerLogo"></div>

            <!-- Content -->
            <div class="content">
                <div class="contentWrapper">
                    <div class="arrow"></div>
                    <h1>PRODUCTS</h1>
                    <div class="divider"></div>
                    <h3>We simplify your busyness by developing satisfying products.</h3>
                </div>
            </div>

            <!-- Footer -->
            <div class="footer" id="contact">
                CONTACT
            </div>

            <!-- Product List -->
            <div class="innerContent">
                <div class="close"></div>
                <div class="container">
                    <div class="row">
                        <!--<a href="<?php echo base_url("product/koops"); ?>">-->
                        <a href="http://www.koops.in" target="_blank">
                            <div class="col-md-3 col-sm-4 inline">
                                <div class="productDiv">
                                    <span class="pe-7s-cart icon"></span>
                                    <h3><b>KOOPS</b></h3>
                                    <p><i class="text-muted">Kevalam Online Order Processing System</i></p>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo base_url("product/kcms"); ?>">
                            <div class="col-md-3 col-sm-4 inline">
                                <div class="productDiv">
                                    <span class="pe-7s-note2 icon"></span>
                                    <h3><b>KCMS</b></h3>
                                    <p><i class="text-muted">Kevalam Content Management System</i></p>
                                </div>
                            </div>
                        </a>
                        <!--<a href="<?php echo base_url("product/kcrm"); ?>">-->
                        <a href="http://www.koops.in" target="_blank">
                            <div class="col-md-3 col-sm-4 inline">
                                <div class="productDiv">
                                    <span class="pe-7s-users icon"></span>
                                    <h3><b>KCRM</b></h3>
                                    <p><i class="text-muted">Kevalam Customer Relationship Management</i></p>
                                </div>
                            </div>
                        </a>
                        <!--                            <a href="<?php echo base_url("product/kerp"); ?>">
                                <div class="col-md-3 col-sm-4 inline">
                                    <div class="productDiv">
                                        <span class="pe-7s-config icon"></span>
                                        <h3><b>KERP</b></h3>
                                        <p><i class="text-muted">Kevalam Enterprise Resource Planning</i></p>
                                    </div>
                                </div>
                            </a>-->
                        <a href="<?php echo base_url("product/kinventory"); ?>">
                            <div class="col-md-3 col-sm-4 inline">
                                <div class="productDiv">
                                    <span class="pe-7s-box2 icon"></span>
                                    <h3><b>KINVENTORY</b></h3>
                                    <p><i class="text-muted">Kevalam Stock Management System</i></p>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo base_url("product/kcatalog"); ?>">
                            <div class="col-md-3 col-sm-4 inline">
                                <div class="productDiv">
                                    <span class="pe-7s-news-paper icon"></span>
                                    <h3><b>KCATALOG</b></h3>
                                    <p><i class="text-muted">Kevalam Catalog Management System</i></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <a href="<?php echo site_url("partner"); ?>"><button class="btn btn-themed" title="See Partners">SEE PARTNERS</button></a>
                </div>
            </div>
        </div>

        <!-- Service Side -->
        <div class="side" id="service">
            <!-- Move with Mouse -->
            <div class="moveWithMouse"></div>

            <!-- Company Name -->
            <div class="companyName">SOFTWARE</div>

            <!-- Tagline -->
            <div class="tagline">Simplify Bus<b>y</b>ness...</div>

            <!-- Center Large Logo -->
            <div class="centerLogo"></div>

            <!-- Content -->
            <div class="content">
                <div class="contentWrapper">
                    <div class="arrow"></div>
                    <h1>SERVICES</h1>
                    <div class="divider"></div>
                    <h3>We design and develop softwares for YOU.</h3>
                </div>
            </div>

            <!-- Footer -->
            <div class="footer" id="social">
                <a href="https://www.facebook.com/KevalamSoftware" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://www.linkedin.com/company/kevalam-software" target="_blank"><i class="fa fa-linkedin"></i></a>
            </div>

            <!-- Service List -->
            <div class="innerContent">
                <div class="close"></div>
                <div class="container">
                    <div class="row">
                        <a href="<?php echo site_url('service/startup'); ?>">
                            <div class="col-md-3 col-sm-6 inline">
                                <div class="serviceDiv">
                                    <span class="pe-7s-rocket icon"></span>
                                    <h3><b>STARTUPS</b></h3>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo site_url('service/customizedSolution'); ?>">
                            <div class="col-md-4 col-sm-6 inline">
                                <div class="serviceDiv">
                                    <span class="pe-7s-tools icon"></span>
                                    <h3><b>CUSTOMIZED SOFTWARE</b></h3>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo site_url('service/designStudio') ?>">
                            <div class="col-md-3 col-sm-6 inline">
                                <div class="serviceDiv">
                                    <span class="pe-7s-photo icon"></span>
                                    <h3><b>DESIGN STUDIO</b></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <a href="<?php echo site_url('portfolio'); ?>"><button class="btn btn-white" title="See Portfolio">SEE PORTFOLIO</button></a>
                    <a href="<?php echo site_url('service/technology'); ?>"><button class="btn btn-white" title="Browse Technologies">BROWSE TECHNOLOGIES</button></a>
                </div>
            </div>
        </div>
        <div class="outerFooter" id="outerFooter">
            CONTACT
        </div>
    </div>
    <div class="contactMain">
        <div class="close"></div>
        <div class="container">
            <div class="contactForm">
                <p><b>Bonzark Technologies</b></p>
                <p class="text-muted"><small>8 - Archana Park, Opp. Balaji Hanuman,<br />Nr. Dholakiya School, University Road,<br />Rajkot-360005, Gujarat ( INDIA ).</small></p>
                <div class="row" style="margin-top: 40px;">
                    <div class="col-md-6"><span class="pe-7s-call icon"></span> +91 90996 22202</div>
                    <div class="col-md-6"><span class="pe-7s-mail icon"></span> info@kevalam.com</div>
                </div>
                <form id="modalForm">
                    <p class="text-center notification"></p>
                    <input type="hidden" name="mailtype" value="contact" />
                    <input type="hidden" name="product" />
                    <div class="formMain">
                        <div class="formBox">
                            <input type="text" name="name" placeholder="Name" />
                        </div>
                        <div class="formBox">
                            <input type="text" name="contact_no" placeholder="Contact No." />
                        </div>
                        <div class="formBox">
                            <input type="text" name="email" placeholder="Email" />
                        </div>
                        <div class="formBox">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="formBox">
                            <div class="g-recaptcha" data-sitekey="6LdupBkTAAAAAMfr2FsLbZw5tmk4KV477S3twkPG"></div>
                            <span class="text-danger error" id="captcha_error"><i>* Required</i></span>
                        </div>
                        <div class="formBox text-center">
                            <button class="btn btn-themed btn-round" title="Send Message" id="contactSend">SEND</button>
                        </div>
                    </div>
                </form>
                <div class="socialIcon">
                    <a href="https://www.facebook.com/KevalamSoftware" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/KevalamSoftware" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/company/kevalam-software" target="_blank"><i class="fa fa-linkedin"></i></a>
                    <a href="https://plus.google.com/102726572589345199252/about" target="_blank"><i class="fa fa-google-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="map">
        <div id="map"></div>
    </div>
</body>

</html>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>