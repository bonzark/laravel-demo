<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/client/css/service/designStudio/designStudio.css"); ?>" />     

<script type="text/javascript">
    //jQuery is required to run this code
    $(document).ready(function () {

        scaleVideoContainer();

        initBannerVideoSize('.video-container .poster img');
        initBannerVideoSize('.video-container .filter');
        initBannerVideoSize('.video-container video');

        $(window).on('resize', function () {
            scaleVideoContainer();
            scaleBannerVideoSize('.video-container .poster img');
            scaleBannerVideoSize('.video-container .filter');
            scaleBannerVideoSize('.video-container video');
        });


        typeIdentity();

        var vid = document.getElementById("video");
        vid.onloadeddata = function () {
            $(".poster").addClass("hidden");
        };


    });

    var speed = 100;
    var current = "identity";

    function typeIdentity() {

        var contents = {
            "identity": ["I", "D", "E", "N", "T", "I", "T", "Y"],
            "web": ["W", "E", "B"],
            "mobile": ["M", "O", "B", "I", "L", "E"],
            "ideas": ["I", "D", "E", "A", "S"],
        }
        $("#type").removeClass("identity web ideas mobile");
        $("#type").addClass(current);

        var content = contents[current];

        $.each(content, function (i, val) {
            setTimeout(function () {
                $("#type").append("<span>" + val + "</span>");
            }, i * speed);
        });

        setTimeout(function () {
            var ele = $("#type span");
            var length = ele.length;

            var k = 1;

            ele.each(function () {
                setTimeout(function () {
                    $("#type span:last-child").remove();
                }, k * speed);
                k++;
            });
        }, (content.length * speed + 2000));

        if (current == "identity") {
            current = "web";
        } else if (current == "web") {
            current = "mobile";
        } else if (current == "mobile") {
            current = "ideas";
        } else {
            current = "identity";
        }

        setTimeout(typeIdentity, 2 * (content.length * speed + 1500));
    }

    function scaleVideoContainer() {

        var height = $(window).height() + 5;
        var unitHeight = parseInt(height) + 'px';
        $('.homepage-hero-module').css('height', unitHeight);

    }

    function initBannerVideoSize(element) {

        $(element).each(function () {
            $(this).data('height', $(this).height());
            $(this).data('width', $(this).width());
        });

        scaleBannerVideoSize(element);

    }

    function scaleBannerVideoSize(element) {

        var windowWidth = $(window).width(),
                windowHeight = $(window).height() + 5,
                videoWidth,
                videoHeight;

        console.log(windowHeight);

        $(element).each(function () {
            var videoAspectRatio = $(this).data('height') / $(this).data('width');

            $(this).width(windowWidth);

            if (windowWidth < 1000) {
                videoHeight = windowHeight;
                videoWidth = videoHeight / videoAspectRatio;
                $(this).css({'margin-top': 0, 'margin-left': -(videoWidth - windowWidth) / 2 + 'px'});

                $(this).width(videoWidth).height(videoHeight);
            }

            $('.homepage-hero-module .video-container video').addClass('fadeIn animated');

        });
    }
</script>

<div class="video-container">
    <div class="title">
        <h3>BONZARK'S DESIGN STUDIO</h3>
        <div class="largeText">
            We design
            <span class="dynamicText">
                <span id="type"></span>
            </span>
        </div>
    </div>
    <div class="filter"></div>
    <video autoplay loop class="fillWidth" id="video">
        <source src="<?php echo base_url("assets/client/video/Video.mp4") ?>" type="video/mp4" />
        <source src="<?php echo base_url("assets/client/video/Video.webm") ?>" type="video/webm" />
    </video>
    <div class="poster">
        <img src="<?php echo base_url("assets/client/video/Video.jpg") ?>" alt="Typing screen">
    </div>
</div>

<!-- Work -->
<div class="work">
    <div class="container">
        <div class="containerInner">
            <div class="row">
                <div class="col-md-6 col-sm-6 workTitle">
                    <h4><b>SOME OF OUR WORK</b></h4>
                </div>
                <div class="col-md-6 col-sm-6 work1">
                    <div class="cover">
                        <div class="coverInner">
                            <h3><b>IDENTITY</b></h3>
                            <a class="btn btn-square btn-white-bordered btn-transparent" href="<?php echo site_url('portfolio#branding'); ?>">VIEW PORTFOLIO</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 work2">
                    <div class="cover">
                        <div class="coverInner">
                            <h3><b>WEB</b></h3>
                            <a class="btn btn-square btn-white-bordered btn-transparent" href="<?php echo site_url('portfolio#websites'); ?>">VIEW PORTFOLIO</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 work3">
                    <div class="cover">
                        <div class="coverInner">
                            <h3><b>MOBILE</b></h3>
                            <a class="btn btn-square btn-white-bordered btn-transparent" href="<?php echo site_url('portfolio#mobile-apps') ?>">VIEW PORTFOLIO</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 work4">
                    <div class="cover">
                        <div class="coverInner">
                            <h3><b>IDEAS</b></h3>
                            <a class="btn btn-square btn-white-bordered btn-transparent" href="<?php echo site_url('portfolio#startups') ?>">VIEW PORTFOLIO</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Summary -->
<div class="summary">
    <div class="container">
        <div class="containerInner">
            <div class="part identity">
                <h1>
                    <?php echo (isset($portfolio['Branding']['projectCount']) && $portfolio['Branding']['projectCount']) ? $portfolio['Branding']['projectCount'] : "30"; ?>
                </h1>
                <h3>IDENTITY</h3>
            </div>
            <div class="part web">
                <h1><?php echo $portfolio['Projects']['projectCount']; ?></h1>
                <h3>WEB</h3>
            </div>
            <div class="part mobile">
                <h1><?php echo $portfolio['Mobile Apps']['projectCount']; ?></h1>
                <h3>MOBILE</h3>
            </div>
            <div class="part ideas">
                <h1><?php echo $portfolio['Startups']['projectCount']; ?></h1>
                <h3>IDEAS</h3>
            </div>
            <div class="summaryText">
                <h3 class="text-muted">This are not only Numbers, Look at our <a href="<?php echo site_url('portfolio') ?>">PORTFOLIO</a>.</h3>
            </div>
        </div>
    </div>
</div>

<!-- Process Flow -->
<div class="processFlow">
    <div class="container">
        <div class="containerInner">
            <div class="header text-center">
                <h1>PROCESS <b>FLOW</b></h1>
            </div>
            <div class="processMain">
                <div class="process process1 col-md-2 col-sm-2">
                    <div class="icon">
                        <span class="pe-7s-pin"></span>
                    </div>
                    <div class="name">UNDERSTAND</div>
                </div>
                <div class="process process2 col-md-2 col-sm-2">
                    <div class="icon">
                        <span class="pe-7s-display2"></span>
                    </div>
                    <div class="name">DEFINE MVP & BETA</div>
                </div>
                <div class="process process3 col-md-2 col-sm-2">
                    <div class="icon">
                        <span class="pe-7s-pen"></span>
                    </div>
                    <div class="name">DESIGN</div>
                </div>
                <div class="process process4 col-md-2 col-sm-2">
                    <div class="icon">
                        <span class="pe-7s-config"></span>
                    </div>
                    <div class="name">DEVELOP</div>
                </div>
                <div class="process process4 col-md-2 col-sm-2">
                    <div class="icon">
                        <span class="pe-7s-paper-plane"></span>
                    </div>
                    <div class="name">LAUNCH</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Inquiry -->
<div class="inquiry">
    <div class="col-md-6 col-sm-6 hidden-xs left"></div>
    <div class="col-md-6 col-sm-6 right">
        <div class="rightInner">
            <h2><b>LET'S DO BUSINESS!</b></h2>
            <p>Let's give physical existence to your imagination in the form of design. Be it logo, graphics or web design, we will put all innovative ideas into it and boost your business.</p>
            <button class="btn btn-white btn-lg" data-toggle="modal" data-target="#generalModal" data-mailtype="contact" title="Contact">CONTACT US</button>
        </div>
    </div>
    <div class="clearfix"></div>
</div>