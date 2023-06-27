<!DOCTYPE html>
<html>

<head>
    <title>Expo Visa Services</title>
    <?php include 'includes/links.php'; ?>
</head>

<body class="student-page">

    <?php include 'includes/header.php'; ?>

    <div class="container-fluid main-banner-wrapper inside-page-banner-wrapper" id="home-banner-wrapper">
        <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false" data-interval="6000">

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="slide-inner">
                        <div class="title">
                            <div class="container">
                                <div class="title-inner">
                                    <div class="cafe">
                                        <div class="cafe-inner">Stay Updated &</div>
                                    </div>
                                    <div class="mozart">
                                        <div class="mozart-inner"><span>Informed</span></div>
                                    </div>
                                    <div class="r-btn-cont">
                                        <a href="students-blog.php" class="r-btn">View Blog Articles</a> <span class="line"></span> <span class="st">Contact us</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="image">
                            <img src="images/students-blog/main-slide.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="form">
            <?php include 'includes/register_with_us_slider_form.php'; ?>
        </div>
    </div><!-- slider-wrapper -->

    <div class="container-fluid inner-main">

        <div id="main-top" class="row row_clr home-why home-global students-top recent-updates promotions-top">
            <div id="bg-div"></div>
            <div class="container">
                <div class="row why-top">
                    <div class="col-12 no-pad">
                        <h4 class="sub-title">Stay Updated & Informed</h4>
                        <h2 class="main-title two-lines">Updates <span>& Recent Promotions</span></h2>
                    </div>
                    <div class="col-md-9 wt-in">
                        <p>Turpis tincidunt id aliquet risus feugiat in. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur. Lacus vel facilisis volutpat est velit egestas. Neque viverra justo nec ultrices dui. Fermentum et sollicitudin ac orci phasellus.</p>
                    </div>

                </div>
                <div class="row global-bottom">
                    <div class="col-12 no-pad">
                        <div class="articles promotion-articles">

                            <div class="article-inner">
                                <div class="abox cup">
                                    <a data-toggle="modal" data-target="#promotions-modal1">
                                        <img src="images/students-home/a1.png" alt="">
                                    </a>
                                </div>
                            </div>

                            <div class="article-inner">
                                <div class="abox cup">
                                    <a data-toggle="modal" data-target="#promotions-modal1">
                                        <img src="images/students-home/a2.png" alt="">
                                    </a>
                                </div>
                            </div>

                            <div class="article-inner">
                                <div class="abox cup">
                                    <a data-toggle="modal" data-target="#promotions-modal1">
                                        <img src="images/students-home/a1.png" alt="">
                                    </a>
                                </div>
                            </div>

                        </div>

                        <!-- collapse -->
                        <div class="collapse" id="article-collapse">
                            <div class="articles promotion-articles">

                                <div class="article-inner">
                                    <div class="abox cup">
                                        <a data-toggle="modal" data-target="#promotions-modal1">
                                            <img src="images/students-home/a1.png" alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="article-inner">
                                    <div class="abox cup">
                                        <a data-toggle="modal" data-target="#promotions-modal1">
                                            <img src="images/students-home/a2.png" alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="article-inner">
                                    <div class="abox cup">
                                        <a data-toggle="modal" data-target="#promotions-modal1">
                                            <img src="images/students-home/a1.png" alt="">
                                        </a>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <p class="bp bbp">Posuere sollicitudin aliquam ultrices. <a data-toggle="collapse" href="#article-collapse" role="button" aria-expanded="false" aria-controls="article-collapse" class="collapsed">View <span class="cs1">all</span><span class="cs2">less</span> Promotions</a></p>
                    </div>
                </div>

            </div>
        </div>


        <?php include 'includes/stories.php'; ?>


    </div>

    <?php include 'includes/footer.php'; ?>



    <div class="modal fade promotions-modal" id="promotions-modal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3>Turpis tincidunt id aliquet risus feugiat in</h3>
                    <div class="top-img">
                        <img src="./images/migration/tab1.png" alt="">
                    </div>
                    <p>Turpis tincidunt id aliquet risus feugiat in. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur. Lacus vel facilisis volutpat est velit egestas. Neque viverra justo nec ultrices dui. Fermentum et sollicitudin ac orci phasellus</p>
                    <p>Turpis tincidunt id aliquet risus feugiat in. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur. Lacus vel facilisis volutpat est velit egestas. Neque viverra justo nec ultrices dui. Fermentum et sollicitudin ac orci phasellus</p>

                </div>
            </div>
        </div>
    </div>

    <script>
        $('#student_inquiry_page').val("Promotions");
    </script>
</body>

</html>