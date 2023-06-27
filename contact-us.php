<!DOCTYPE html>
<html>

<head>
    <title>Expo Visa Services</title>
    <?php include 'includes/links.php'; ?>
</head>

<body class="home-page">

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
                                        <div class="cafe-inner">Sri Lanka's Trusted</div>
                                    </div>
                                    <div class="mozart">
                                        <div class="mozart-inner"><span>VISA Partner</span></div>
                                    </div>
                                    <div class="r-btn-cont">
                                        <a href="#main-top" class="r-btn">Contact us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="image">
                            <img src="images/migration/slide.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div><!-- slider-wrapper -->

    <div class="container-fluid inner-main pt-0">


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

</body>

</html>