<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/client/css/portfolio/portfolio.css") ?>" />

<div class="pWrapper">
    <div class="pUpper">
        <div class="pUpper-overlay"></div>
        <div class="container">
            <div class="headerCenter">
                <div class="col-md-12 text-center wow fadeInDownBig">
                    <h1>PORTFOLIO</h1>
                    <p>Creativity is inventing, experimenting, growing, taking risks, breaking rules, making mistakes, and having fun.</p>
                </div>
        </div>
    </div>

    <div class="">
        <div class="container">
            <div class="row section-counter page-section parallax parallax-effect">
                <div class="col-xs-3 col-md-3 col-lg-3 py-4 wow fadeIn">
                    <div class="number-flex">
                        <h1 class="number" data-number="125">125</h1>
                        <h1>&nbsp;+</h1>
                    </div>
                    <span>PROJECTS</span>
                </div>
                <div class="col-xs-3 col-md-3 col-lg-3 py-4 wow fadeIn">
                    <div class="number-flex">
                        <h1 class="number" data-number="40">40</h1>
                        <h1>&nbsp;+</h1>
                    </div>
                    <span>MOBILE APPS</span>
                </div>
                <div class="col-xs-3 col-md-3 col-lg-3 py-4 wow fadeIn">
                    <div class="number-flex">
                        <h1 class="number" data-number="45">45</h1>
                        <h1>&nbsp;+</h1>
                    </div>
                    <span>BRANDING</span>
                </div>
                <div class="col-xs-3 col-md-3 col-lg-3 py-4 wow fadeIn">
                    <div class="number-flex">
                        <h1 class="number" data-number="6">6</h1>
                        <h1>&nbsp;+</h1>
                    </div>
                    <span>STARTUPS</span>
                </div>
            </div>
        </div>
    </div>
    <div class="pInner" id="projectMain"></div>
</div>
<div class="inquiry">
    <div class="container">
        <div class="containerInner wow zoomIn">
            <h3>To speak with one of the team and get a personalized Solution, just fill in the form and we'll be in touch soon.</h3>
            <button class="btn btn-white btn-lg" data-toggle="modal" data-target="#generalModal" data-mailtype="demo" data-product="all" title="Request For Demo">REQUEST A DEMO</button>
        </div>
    </div>
</div>

<script src="<?php echo base_url('assets/client/js/jquery.animateNumber.min.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function() {
        var active = window.location.hash ? window.location.hash.substring(1) : "all";
        $("[category='" + active + "']").addClass("active");

        selectProject(active);

        $(".category").click(function() {
            var category = $(this).attr("category");
            if (active != category) {
                $(".category").removeClass("active");
                $(this).addClass("active");
                window.location.hash = active = category;
            }
            selectProject(active);
        });

        $(document).off("click", ".link").on('click', ".link", function(e) {
            console.log("asas");
            e.preventDefault();
            var weblink = $(this).attr('plink');
            weblink = ((/^http:\/\//.test(weblink))) ? weblink : "http://" + weblink;
            window.open(weblink, '_blank');
        });
    });

    function selectProject(category) {
        category = typeof category != "undefined" && category != "all" ? $.trim(category) : "";

        $.ajax({
            url: '<?php echo site_url('portfolio/selectProject'); ?>/' + category,
            type: 'post',
            dataType: 'json',
            beforeSend: function() {
                $("#projectMain").html('<div class="message"><p>Loading...</p></div>');
            },
            success: function(result) {
                if (!$.isEmptyObject(result)) {
                    var html = $("<div />").addClass("container")
                        .append("<div class='containerInner'><div class='row' id='portfolioMainContent' ></div></div>");
                    $("#projectMain").html(html);

                    var j = 0;
                    $.each(result, function(i, val) {
                        var project = $("<div />");
                        project.append(
                            "<div class='portfolioBox wow zoomIn'>" +
                            "<a href='<?php echo site_url('portfolio/project'); ?>/" + val['id'] + "/" + val['slug'] + "'>" +
                            "<div class='portfolioBoxImage'>" +
                            "<img src='" + (val['url'] ? "<?php echo base_url("assets/images/project_image/medium"); ?>/" + val['url'] : "") + "' alt='" + val['name'] + "' class='portfolioImage' />" +
                            "<div class='dropLink' title='" + val['name'] + "'>" +
                            (val['web_link'] ? '<div class="link" plink="' + val['web_link'] + '"><i class="fa fa-link"></i></div>' : "") +
                            "</div>" +
                            "</div>" +
                            "<div class='portfolioBoxContent'>" +
                            "<p class='name'>" +
                            val['name'] +
                            "</p>" +
                            "</div>" +
                            "</a>" +
                            "</div>"
                        );
                        project.find('.portfolioBox').append();
                        project.find('.portfolioBox').append("<a href='<?php echo site_url('portfolio/project'); ?>" + val['id'] + "/" + val['slug'] + "'></a>");

                        var tag_name = [];
                        if (val['tag_name']) {
                            tag_name = val['tag_name'].split(",");
                        }

                        if (j == 0) {
                            project.addClass("col-md-12");
                            project.find('.portfolioBox').addClass("large");
                            project.find(".portfolioBoxContent").append('<p class="description" style="height: 130px">' + val['description'] + "</p>");
                            if (tag_name.length) {
                                project.find(".portfolioBoxContent").append('<p class="tags"></p>');
                                $.each(tag_name, function(i, val) {
                                    project.find(".tags").append('<span>' + val + '</span>');
                                });
                            }
                        } else if (j <= 6) {
                            project.addClass("col-md-4");
                            project.find('.portfolioBox').addClass("medium");
                            project.find('.portfolioBoxContent').addClass("text-center");
                            project.find('.name span').css({
                                float: "none",
                                display: "block"
                            });
                            if (tag_name.length) {
                                project.find(".portfolioBoxContent").append('<p class="tags"></p>');
                                $.each(tag_name, function(i, val) {
                                    project.find(".tags").append('<span>' + val + '</span>');
                                });
                            }
                        } else {
                            project.addClass("col-md-3");
                            project.find('.portfolioBox').addClass("small");
                            project.find('.portfolioBoxContent').addClass("text-center");
                            project.find('.name span').css({
                                float: "none",
                                display: "block"
                            });
                        }
                        $("#portfolioMainContent").append(project);
                        j++;
                    });
                } else {
                    $("#projectMain").html('<div class="message"><span class="pe-7s-glasses"></span><p>Oops! No projects found</p></div>');
                }
            },
            error: function() {
                console.log("Some Error!");
            }
        });
    }


    var counterInit = function() {
        if ($('.section-counter').length > 0) {
            $('.section-counter').waypoint(function(direction) {
                if (direction === 'down' && !$(this.element).hasClass('ftco-animated')) {
                    var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
                    $('.number').each(function() {
                        var $this = $(this),
                            num = $this.data('number');
                        $this.animateNumber({
                            number: num,
                            numberStep: comma_separator_number_step
                        }, 3000);
                    });
                }
            }, {
                offset: '95%'
            });
        }
    }
    counterInit();
</script>