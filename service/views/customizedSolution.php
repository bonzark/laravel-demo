<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/client/css/service/customizedSolution/customizedSolution.css"); ?>" />

<div class="slider">
    <div class="container">
        <div class="containerInner wow fadeInDownBig">
            <div class="col-md-6 hidden-sm hidden-xs">
                <img src="<?php echo base_url("assets/client/img/service/customizedSolution/screen.png"); ?>" alt="Different types of screen" />
            </div>
            <div class="col-md-6">
                <h1>What is<br />
                    <b class="text-themed">CUSTOMIZED SOFTWARE</b>
                    <br />development?
                </h1>
                <p>Custom software development is the designing of software applications for a specific user or group of users within an organization. Such software is designed to address their needs precisely as opposed to the more traditional and widespread off-the-shelf software. Such software is typically created just for that specific entity by a third-party by contract or in-house group of developers and is not packaged for reselling.</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<!-- Benefits -->
<div class="benefits">
    <div class="container">
        <div class="containerInner">
            <h2 class="text-center">WHY <b class="text-themed">CUSTOMIZED SOFTWARE</b> ?</h2>
            <div class="benefitBox">
                <div class="row">
                    <div class="col-md-6 col-sm-6 hidden-xs text-center wow fadeInLeftBig">
                        <img src="<?php echo base_url("assets/client/img/service/customizedSolution/b3.png"); ?>" alt="customize idea implementation" />
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInRightBig">
                        <h4>Meet Business and System Requirements</h4>
                        <p class="text-muted">When you develop your own software, you decide exactly what it does and how it works. You tailor its features to your exact business requirements. Off-the-shelf software may not do exactly what you want it to do, and you may need to adapt your work processes to fit the package. It may also bloat your system with features that you don't need. Building your own software reduces potential integration problems with existing systems and infrastructure.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="benefitBox">
                <div class="row">
                    <div class="col-md-6 col-sm-6 wow fadeInLeftBig">
                        <h4>Add Future Flexibility</h4>
                        <p class="text-muted">The way you use a software application in your business may change over time. If you develop a customized package, you can adapt it quickly to meet any changes in your business requirements. This scalability is not typically available with off-the-shelf alternatives and, if it is, you still have no control over whether developers will make the upgrades you need in a timescale to suit you. You also avoid issues with obsolescence if you run your own program. A developer may choose to withdraw products or to stop upgrading or supporting them, forcing you to find new solutions.</p>
                    </div>
                    <div class="col-md-6 col-sm-6 hidden-xs text-center wow fadeInRightBig">
                        <img src="<?php echo base_url("assets/client/img/service/customizedSolution/b2.png"); ?>" alt="Implement Future Flexibility" />
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="benefitBox">
                <div class="row">
                    <div class="col-md-6 col-sm-6 hidden-xs text-center wow fadeInLeftBig">
                        <img src="<?php echo base_url("assets/client/img/service/customizedSolution/b1.png"); ?>" />
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInRightBig">
                        <h4>Maintain Control and Ownership</h4>
                        <p class="text-muted">You own the rights to the software code if you build your own package. If you develop a system that gives you a business advantage, you don't have to share this advantage with your competitors. Using an internal system reduces security risk -- external software applications may be a target for hackers. Keeping control over the build minimizes issues with bugs and, if you do have a problem, you deal with it yourself. If you have problems with off-the-shelf software, you're reliant on the developer for support.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="benefitBox">
                <div class="row">
                    <div class="col-md-6 col-sm-6 wow fadeInLeftBig">
                        <h4>Enjoy Productivity Advantages</h4>
                        <p class="text-muted">Although off-the-shelf software may seem cheaper initially, paying for a customized build may be a better long-term investment. If you develop your own software, you don't have ongoing licensing, upgrade and support costs, and you'll use existing system resources more efficiently. If you build software that meets your exact requirements and that adapts quickly to changes in your business, your staff can do their jobs more effectively. This increases efficiency and productivity.</p>
                    </div>
                    <div class="col-md-6 col-sm-6 hidden-xs text-center wow fadeInRightBig">
                        <img src="<?php echo base_url("assets/client/img/service/customizedSolution/b5.png"); ?>" />
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="benefitBox">
                <div class="row">
                    <div class="col-md-6 col-sm-6 hidden-xs text-center wow fadeInLeftBig">
                        <img src="<?php echo base_url("assets/client/img/service/customizedSolution/b4.png"); ?>" />
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInRightBig">
                        <h4>Enhanced Business Security</h4>
                        <p class="text-muted">When you develop your own software, you decide exactly what it does and how it works. You tailor its features to your exact business requirements. Off-the-shelf software may not do exactly what you want it to do, and you may need to adapt your work processes to fit the package. It may also bloat your system with features that you don't need. Building your own software reduces potential integration problems with existing systems and infrastructure.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="work">
    <div class="container">
        <div class="containerInner">
            <?php if (!empty($portfolio)) { ?>
                <div class="header text-center wow fadeIn">
                    <h2>SOME OF <b class="text-themed">CUSTOMIZED SOFTWARES</b> WE MADE</h2>
                </div>
                <div class="row">
                    <?php
                    for ($i = 0; $i < count($portfolio); $i++) {
                        if ($i == 0) {
                    ?>

                            <div class="col-md-12 wow fadeIn">
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
                            <div class="col-md-4 wow fadeIn">
                                <div class="portfolioBox medium">
                                    <a href="<?php echo site_url('portfolio/project/' . $portfolio[$i]['id'] . '/' . $portfolio[$i]['slug']) ?>">
                                        <div class="portfolioBoxImage">
                                            <img src="<?php echo isset($portfolio[$i]['url']) ? base_url("assets/images/project_image/medium/" . $portfolio[$i]['url']) : '' ?>" alt="<?php echo isset($portfolio[$i]['name']) ? $portfolio[$i]['name'] : ''; ?>" class="portfolioImg" />
                                            <div class="dropLink" title="<?php echo isset($portfolio[$i]['name']) ? $portfolio[$i]['name'] : ''; ?>">
                                                <div class="link" plink="<?php echo isset($portfolio[$i]['web_link']) ? $portfolio[$i]['web_link'] : 'javascript:void(0)' ?>">
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
                    ?>
                </div>
            <?php } else { ?>
                <div class="message wow fadeIn">Sorry! Unfortunately we didn't do any work for Customized Solutions, but you can see our other work.</div>
            <?php } ?>
            <div class="portfolioLink wow fadeIn">
                <!-- <?php echo site_url("portfolio#customized-solution"); ?> -->
                <a class="btn btn-themed btn-lg" href="<?php echo site_url("portfolio"); ?>" title="Click TO See Our Portfolio">SEE PORTFOLIO</a>
            </div>
        </div>
    </div>
</div>

<!-- Inquiry -->
<div class="inquiry">
    <div class="col-md-6 col-sm-6 hidden-xs left wow fadeInLeft"></div>
    <div class="col-md-6 col-sm-6 right wow fadeInRight">
        <div class="rightInner">
            <h2><b>LET'S DO BUSINESS!</b></h2>
            <p>Come up with problems you are facing in your software, we will discuss and find the best possible solution for you. Or come up with ideas, we will turn your ideas into something corporeal.</p>
            <button class="btn btn-white btn-lg" data-toggle="modal" data-target="#generalModal" data-mailtype="contact" title="Contact">CONTACT US</button>
        </div>
    </div>
    <div class="clearfix"></div>
</div>

<script>
    $(document).ready(function() {
        function isUrl(s) {
            var regexp = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/
            return regexp.test(s);
        }
        $(document).off("click", ".link").on('click', ".link", function(e) {
            e.preventDefault();
            var weblink = $(this).attr('plink');

            isUrl(weblink) ? window.open(weblink, '_blank') : '';
        });
    });
</script>