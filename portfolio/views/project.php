<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/client/css/portfolio/portfolio.css") ?>" />
<style>
    body{    
        overflow: hidden;
    }
</style>
<div class="pWrapper">
    <div class="pInner">
        <div class="container">
            <div class="containerInner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="portfolioBox large">   
                            <div class="portfolioLargeView">
                                <div class="contentSide">
                                    <p class="back"><i class="fa fa-arrow-left"></i> Back to Portfolio</p>
                                    <p class="name"><?php echo $project['name'] ?></p>
                                    <p class="tags">
                                        <?php echo $project['tag_name']; ?>
                                    </p>
                                    <p class="description">
                                        <?php echo isset($project['description']) ? $project['description'] : '' ?>
                                    </p>
                                    <?php if (!empty($project['web_link'])) { ?>  
                                        <p>
                                            <a class="link" href="<?php echo $project['web_link'] ?>" title="Go to <?php echo $project['web_link'] ?>" plink="<?php echo $project['web_link'] ?>">visit website</a>
                                        </p>
                                    <?php } ?>
                                </div>
                                <div class="image">

                                    <?php
                                    if (!empty($project['image'])) {
                                        foreach ($project['image'] as $image) {
                                            ?>
                                            <?php echo isset($image['title']) ? "<h4 class='title'>" . $image['title'] . "</h4>" : "" ?>
                                            <img src="<?php echo base_url("assets/images/project_image/" . $image['url']) ?>" alt="<?php echo isset($image['title']) ? $image['title'] : "" ?>"/>
                                        <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $(document).off("click", ".back").on('click', ".back", function () {
            window.history.back();
        });
        $(document).off("click", ".link").on('click', ".link", function (e) {
            e.preventDefault();
            var weblink = $(this).attr('plink');
            weblink = ((/^http:\/\//.test(weblink))) ? weblink : "http://" + weblink;
            window.open(weblink, '_blank');
        });
    });
</script>
