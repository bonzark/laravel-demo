<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/client/css/service/startup/startup.css"); ?>" />     
<div class="slider">
    <div class="sliderInner">
        <p>WE ARE THE SOFTWARE DEVELOPERS<br /> THAT BOOST YOUR</p>
        <h1><b>STARTUPS</b></h1>
    </div>
</div>
<div class="whyStartup">
    <div class="col-md-6 col-lg-6 col-sm-6 que">
        <div class="queInner">
            <h1>WHY<br /><b>STARTUPS</b> ?</h1>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-sm-6 ans">
        <div class="ansInner">
            <p style="margin-bottom: 20px;">It is our passion to implement and promote new ideas that change the world. The best place where ideas get implemented are startups.</p>
            <p><b>We believe in</b><br />Startups can change the world.</p>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<div class="whyKevalam">
    <div class="container">
        <div class="containerInner">
            <div class="header text-center">
                <h1>WHY <b class="text-themed">Bonzark</b> ?</h1>
                <p><b>We are just like you.</b> Not only do we recommend and build great software for our clients, but we also do it for ourselves. </p>
            </div>
            <div class="circle">
                <div class="circleContent">
                    <img src="<?php echo base_url("assets/client/img/logo.png") ?>" alt="logo of kevalam software " width="50"/>
                    <h3><b></b></h3>
                </div>

                <div class="icon icon1">
                    <span class="pe-7s-users"></span>
                </div>
                <div class="icon icon2">
                    <span class="pe-7s-glasses"></span>
                </div>
                <div class="icon icon3">
                    <span class="pe-7s-graph"></span>
                </div>
                <div class="icon icon4">
                    <span class="pe-7s-shield"></span>
                </div>
                <div class="icon icon5">
                    <span class="pe-7s-tools"></span>
                </div>

                <div class="connector connector1"></div>
                <div class="connector connector2"></div>
                <div class="connector connector3"></div>
                <div class="connector connector4"></div>
                <div class="connector connector5"></div>

                <div class="tile tile1">
                    <p><b>DEDICATED TEAM</b></p>
                    <p class="text-muted">Focus on the business vision and let us worry about developers and technology.</p>
                </div>
                <div class="tile tile2">
                    <p><b>EXPERIENCE</b></p>
                    <p class="text-muted">We’ve established our business in 2012 and helped over 12 startups.</p>
                </div>
                <div class="tile tile3">
                    <p><b>SPECIALISATION</b></p>
                    <p class="text-muted">Sharp focus on startups makes us extremely efficient in serving entrepreneurs.</p>
                </div>
                <div class="tile tile4">
                    <p><b>HIGH EFFICIENCY</b></p>
                    <p class="text-muted">Working with our team guarantees top performance, high quality and avoidance of common mistakes.</p>
                </div>
                <div class="tile tile5">
                    <p><b>BEST PRACTICES</b></p>
                    <p class="text-muted">We combine our tech expertise with agile project management and lean startup principles to work efficiently and economically. Look at <a href="<?php echo site_url('service/technology') ?>">Technologies</a> we use.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
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
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="work">
    <div class="container">
        <div class="containerInner">
            <?php if (!empty($portfolio)) { ?>
                <div class="header text-center">
                    <h1>SOME OF <b class="text-themed">STARTUPS</b> WE HELPED</h1>
                </div>
                <div class="row">
                    <?php
                    for ($i = 0; $i < count($portfolio); $i++) {
                        if ($i == 0) {
                            ?>

                            <div class="col-md-12">
                                <div class="portfolioBox large">
                                    <a href="<?php echo site_url('portfolio/project/' . $portfolio[$i]['id'] . '/' . $portfolio[$i]['slug']) ?>">
                                        <div class="portfolioBoxImage">
                                            <img src="<?php echo isset($portfolio[$i]['url']) ? base_url("assets/images/project_image/" . $portfolio[$i]['url']) : '' ?>" alt="<?php echo isset($portfolio[$i]['name']) ? $portfolio[$i]['name'] : ''; ?>" class="portfolioImg" />
                                            <div class="dropLink" title="<?php echo isset($portfolio[$i]['name']) ? $portfolio[$i]['name'] : ''; ?>">
                                                <div class="link" plink="<?php echo isset($portfolio[$i]['web_link']) ? $portfolio[$i]['web_link'] : 'javascript:void(0)' ?>">
                                                    <i class="fa fa-link"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="portfolioBoxContent">
                                        <p class="name">
                                            <?php echo isset($portfolio[$i]['name']) ? $portfolio[$i]['name'] : ''; ?>
                                        </p>
                                        <p class="description" style="height: 130px">
                                            <?php echo isset($portfolio[$i]['description']) ? $portfolio[$i]['description'] : ''; ?>
                                        </p>
                                        <p class="tags">
                                            <?php
                                            $tag = $portfolio[$i]['tag_name'];
                                            if (!empty($tag)) {
                                                $tag1 = explode(',', $tag);
                                                foreach ($tag1 as $t) {
                                                    ?>
                                                    <span><?php echo $t; ?></span>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                        <?php } else { ?>
                            <div class="col-md-4 col-sm-6">
                                <div class="portfolioBox medium">
                                    <a href="<?php echo site_url('portfolio/project/' . $portfolio[$i]['id'] . '/' . $portfolio[$i]['slug']) ?>">
                                        <div class="portfolioBoxImage">
                                            <img src="<?php echo isset($portfolio[$i]['url']) ? base_url("assets/images/project_image/medium/" . $portfolio[$i]['url']) : '' ?>" alt="<?php echo isset($portfolio[$i]['name']) ? $portfolio[$i]['name'] : ''; ?>" class="portfolioImg" />
                                            <div class="dropLink" title="<?php echo isset($portfolio[$i]['name']) ? $portfolio[$i]['name'] : ''; ?>">
                                                <div class="link">
                                                    <i class="fa fa-link"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="portfolioBoxContent text-center">
                                        <p class="name"><?php echo isset($portfolio[$i]['name']) ? $portfolio[$i]['name'] : ''; ?></p>
                                        <p class="tags">
                                            <?php
                                            $tag = $portfolio[$i]['tag_name'];
                                            if (!empty($tag)) {
                                                $tag1 = explode(',', $tag);
                                                foreach ($tag1 as $t) {
                                                    ?>
                                                    <span><?php echo $t; ?></span>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                } else {
                    ?>
                    <div class="message">Sorry! Unfortunately we didn't do any work for Startups, but you can see our other work.</div>
                <?php } ?>
            </div>
            <div class="portfolioLink">
                <a class="btn btn-themed btn-lg" href="<?php echo site_url("portfolio#startups"); ?>" title="Click TO See Our Portfolio">SEE PORTFOLIO</a>
            </div>
        </div>
    </div>
</div>
<div class="inquiry">
    <div class="col-md-6 left hidden-xs hidden-sm"></div>
    <div class="col-md-6 right">
        <div class="rightInner">
            <h2><b>LET'S DO BUSINESS!</b></h2>
            <p>Let's turn your big dream into reality with us. Your passion and vision will not only be yours, it will be ours.</p>
            <button class="btn btn-white btn-lg" data-toggle="modal" data-target="#generalModal" data-mailtype="contact" title="Contact">CONTACT US</button>
        </div>
    </div>
    <div class="clearfix"></div>
</div>

<script>
    $(document).ready(function () {
        function isUrl(s) {
            var regexp = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/
            return regexp.test(s);
        }
        $(document).off("click", ".link").on('click', ".link", function (e) {
            e.preventDefault();
            var weblink = $(this).attr('plink');

            isUrl(weblink) ? window.open(weblink, '_blank') : '';
        });
    });
</script>
