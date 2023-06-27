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
                                        <div class="cafe-inner">Contact Us for</div>
                                    </div>
                                    <div class="mozart">
                                        <div class="mozart-inner"><span>Further Information</span></div>
                                    </div>
                                    <div class="r-btn-cont">
                                        <a href="#main-top" class="r-btn">Contact us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="image">
                            <img src="images/students-contact/slide.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="form">
            <?php include 'includes/register_with_us_slider_form.php'; ?>
        </div>
    </div><!-- slider-wrapper -->

    <div class="row row_clr student-list-outer sticky-top">
        <ul class="student-list">
            <li><a href="students-home.php">Home</a></li>
            <li><a href="students-services.php">Services</a></li>
            <li><a href="students-scholarships.php">Scholarships</a></li>
            <li><a href="new-intakes.php">New Intakes</a></li>
            <li><a href="students-open-days.php">Open Days</a></li>
            <li><a href="students-blog.php">Blog</a></li>
            <li class="active"><a href="students-contact.php">Contact Us</a></li>
        </ul>
    </div>

    <div class="container-fluid inner-main">
        <div id="main-top" class="row row_clr home-why contact-top">
            <div class="container">
                <div class="row why-top">
                    <div class="col-12 no-pad">
                    <h4 class="sub-title">Interested in our Services?</h4>
                        <h2 class="main-title two-lines"><span>Get in Touch</span> with Us Today!</h2>
                        <p class="tp">Now you can choose to book a Consultation Online or Physically. Contact our helpline <br/>for further details.</p>
                    </div>
                    <div class="col-12 wt-in">

                        <div class="row row_clr cont-details-outer">
                            <div class="row row_clr contact-details">
                                <div class="cd-in">
                                    <h4>Expo Visa Services</h4>
                                    <p>4 Deal Place A, Colombo 00300, Sri Lanka</p>
                                    <p><a href="tel:+94117437600"> +94 117 437 600</a></p>
                                    <p><a href="mailto:info@evs.lk">info@evs.lk</a></p>
                                </div>
                            </div>
                            <form id="students_contact_form" action="includes/students_contact.php" method="post">
                             <div class="row cont-outer">
                                <div class="col-12">
                                    <h4>Send Us a Message</h4>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group"><input type="text" class="form-control"  placeholder="Full name*" name="full_name"></div>
                                    <div class="form-group"><input type="text" class="form-control"  placeholder="Email*" name="email"></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group"><input type="text" class="form-control"  placeholder="Contact No*" name="contact_number"></div>
                                    <div class="form-group"><input type="text" class="form-control" placeholder="Address" name="address"></div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group"><textarea class="form-control" cols="30" rows="5" placeholder="How may we assist you?  *" name="message"></textarea></div>
                                    <button class="btn1 aos-init">Submit</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="row row_clr contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15843.459605170763!2d79.8534973!3d6.9067539!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x816543e1d0928343!2sExpo%20Visa%20Services!5e0!3m2!1sen!2sus!4v1626778498759!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <?php include 'includes/stories.php'; ?>


    </div>

    <?php include 'includes/footer.php'; ?>

    <!-- Modal -->
    <div id="video-modal1" class="modal fade movie-modal popup-video" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="modal-body">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/q0mbKsKG-ng" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(".movie-modal").on('hide.bs.modal', function() {
            var src = $(this).find('iframe').attr('src');
            $(this).find('iframe').attr('src', "");
            $(this).find('iframe').attr('src', src);
        });

        $(document).ready(function() {
            $('#student_inquiry_page').val("Students Contact");
            bgimgset()

            function bgimgset() {
                var scrollTop = $('#main-top').offset().top,
                    elementOffset = $('#main-img1').offset().top,
                    elementheight = $('#main-img1').outerHeight(),
                    distance = ((elementOffset - scrollTop) + elementheight);
                $('#bg-div').css('height', distance)
            }
            $(window).on('resize', function() {
                bgimgset()
            });
        });

        $('.student-article-slider').slick({
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 4000,
            speed: 500,
            slidesToShow: 3,
            slidesToScroll: 1,
            draggable: true,
            pauseOnHover: false,
            pauseOnFocus: false,
            arrows: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                }, {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,

                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }

            ]
        });
    </script>

</body>

</html>