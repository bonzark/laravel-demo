<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/client/css/about/about.css") ?>" />

<script type="text/javascript">
    $(document).ready(function() {
        var sensitivityMultiplier = 0.012;
        var oldX = 0;
        var oldY = 0;
        $("body").mousemove(function(e) {
            var mouseX = e.pageX;
            var mouseY = e.pageY;

            var RelX = (mouseX - oldX) * sensitivityMultiplier;
            var RelY = (mouseY - oldY) * sensitivityMultiplier;

            $(".sliderLogo").css({
                right: "-=" + RelX + "px",
                top: "-=" + RelY + "px"
            });

            oldX = mouseX;
            oldY = mouseY;
        });
    });
</script>

<div class="slider">
    <div class="container">
        <div class="col-md-12 text-center sliderInner wow fadeInDownBig">
            <h1>ABOUT US</h1>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<!-- About us -->
<div class="about">
    <div class="container">
        <div class="containerInner wow bounceIn">
            <p class="text-muted ">Bonzark Technologies is a leading web and mobile app development company located at Rajkot, Gujarat, India. It’s a company that believes in professionalism and specializes in delivery of unique services. We are a team of dedicated developers and innovative people devoted increating beautiful, useful, efficiently coded web and mobile app solutions.</p>
            <p class="text-muted">We strive to work up some of the smartest projects with the latest technologies. With core values to offer you top-notch services and with a mission to make your business prosper, we connect the dots which takes your simple idea to a profitable business.</p>
        </div>
        <div class="containerInner wow bounceIn">
            <h3><b>OUR <span class="text-themed">HISTORY</span></b></h3>
            <p class="text-muted">We are a new venture of a well-known software company Kevalam Software which was founded in 2012. We have worked on Web-based and standalone Application Development, Rich Internet Applications, Web Design and Development, Custom Software Programming, Custom artwork, graphics and logo designing, and Open Source Development and Solutions up to the client satisfaction for years.</p>
            <p class="text-muted">The company has now shifted to Sales force Automation product known as KOOPS <a href="https://www.koops.in/" target="_blank">(http://www.koops.in/)</a> and the new venture, the service-based unit will be known as Bonzark Technologies.</p>
        </div>
    </div>
</div>

<!-- Philosophy -->
<div class="philosophy">
    <div class="container">
        <div class="containerInner wow zoomIn">
            <h3><b>PHILOSOPHY</b></h3>
            <h4 class="text-muted"><b><span class="text-themed">“</span>Technology does not drive change - It enables change</b></h4>
            <p class="text-muted">Business processes get a whole new meaning when you let the power of technology to simplify it. Your business tasks and processes become more efficient. You are able to generate more data and analyse it to give accurate performance reports and in-turn this helps you better achieve organisational targets. The tools and software that we create at Bonzark Technologies are built keeping such enterprise goals at the centre and integrating all your resources around it.</p>
            <h4 class="text-muted"><b><span class="text-themed">“</span>The illiterate of the 21st century will not be those who cannot read and write, but those who cannot learn, unlearn, and relearn</b></h4>
            <p class="text-muted">After the age of technology and information now we are entering the age of continuous integration. Integration of all our business process into our networks in-order to get more data and simplify tasks. Bonzark provides you tools to simplify your business processes in an easy way and optimise your day to day task.</p>
            <h4 class="text-muted"><b><span class="text-themed">“</span>If I had eight hours to chop down a tree, I'd spend six hours sharpening my axe</b></h4>
            <p class="text-muted">Understanding the problems at your end becomes the first step at Bonzark Technologies while designing a project plan. We adapt to the inside out approach in which we understand the variables at your end and then design the software to suite them. We spend more time in analyzing your problem than developing a solutions for it. This enables us to divide your problem in smaller pieces so as to get an accurate solution for it.</p>
        </div>
    </div>
</div>

<!-- Clients -->
<div class="client">
    <div class="container">
        <div class="containerInner wow bounceIn">
            <h3><b>OUR CLIENTS</b></h3>
            <div class="clientDiv">
                <div class="clientImage">
                    <img src="<?php echo base_url("assets/client/img/about/client/casaware.png"); ?>" alt="Casaware" />
                </div>
                <div class="clientImage">
                    <img src="<?php echo base_url("assets/client/img/about/client/dailyStudio.png"); ?>" alt="dailyStudio" />
                </div>
                <div class="clientImage">
                    <img src="<?php echo base_url("assets/client/img/about/client/moviesaints.png"); ?>" alt="moviesaints" />
                </div>
                <div class="clientImage">
                    <img src="<?php echo base_url("assets/client/img/about/client/pangea.png"); ?>" alt="pangea" />
                </div>
                <div class="clientImage">
                    <img src="<?php echo base_url("assets/client/img/about/client/homekart.png"); ?>" alt="homekart" />
                </div>
                <div class="clientImage">
                    <img src="<?php echo base_url("assets/client/img/about/client/websiteSolution.png"); ?>" alt="websiteSolution" />
                </div>
                <div class="clientImage">
                    <img src="<?php echo base_url("assets/client/img/about/client/greenera.png"); ?>" alt="greenEra" />
                </div>
                <div class="clientImage">
                    <img src="<?php echo base_url("assets/client/img/about/client/alok.png"); ?>" alt="alok" />
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Inquiry -->
<div class="inquiry">
    <div class="col-md-6 left hidden-sm hidden-xs wow fadeInLeft"></div>
    <div class="col-md-6 right wow fadeInRight">
        <div class="rightInner">
            <h2><b>LET'S DO BUSINESS!</b></h2>
            <p>'Client satisfaction' is not only our motto but is our reputation. Engage with us and get handy solution of your IT problems.</p>
            <button class="btn btn-white btn-lg" data-toggle="modal" data-target="#generalModal" data-mailtype="contact" data-trigger="hover" title="Contact">CONTACT US</button>
        </div>
    </div>
    <div class="clearfix"></div>
</div>