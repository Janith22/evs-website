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
                                        <div class="cafe-inner">Join the</div>
                                    </div>
                                    <div class="mozart">
                                        <div class="mozart-inner"><span>New Calling</span></div>
                                    </div>
                                    <div class="r-btn-cont">
                                        <a class="r-btn">Current Intakes</a> <span class="line"></span> <span class="st">Contact us</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="image">
                            <img src="images/students-new-intakes/slide.jpg" alt="">
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
            <li class="active"><a href="new-intakes.php">New Intakes</a></li>
            <li><a href="students-open-days.php">Open Days</a></li>
            <li><a href="students-blog.php">Blog</a></li>
            <li><a href="students-contact.php">Contact Us</a></li>
        </ul>
    </div>

    <div class="container-fluid inner-main">

        <div id="main-top" class="row row_clr home-why home-global students-top">
            <div id="bg-div"></div>
            <div class="container">
                <div class="row why-top">
                    <div class="col-12 no-pad">
                        <h4 class="sub-title">Choose the Ideal Intake</h4>
                        <h2 class="main-title two-lines">Kick Start your Higher Studies <br />in a<span> World-Renown University</span></h2>
                    </div>
                    <div class="col-md-9 wt-in">
                        <p>Has it always been a dream of yours to graduate with a degree overseas? Fuel that dream with EVS Students! Choose your next step in life from a variety of Universities in top countries worldwide.</p>

                        <!-- <div class="intake-filter">
                            <p class="mp">Choose the intake to display the available programs:</p>
                            <form class="filter-form">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="">December</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="">2021</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary submit">Filter Results</button>
                            </form>
                        </div> -->
                    </div>

                </div>
                <div class="row global-bottom">
                    <div class="col-12 no-pad">
                        <div class="articles" role="tablist">
                            <div class="article-inner">
                                <div class="article-box">
                                    <div class="img">
                                        <img src="images/students-new-intakes/1.jpg" id="main-img1" class="main-img" alt="">
                                        <img src="images/students-new-intakes/canada.png" class="country-img" alt="canada">
                                    </div>
                                    <div class="txt">
                                        <h3 class="title">Canada</h3>
                                        <p>Canada hosts over 640,000 International students, being one of the best, most hospitable countries for education and living.</p>
                                        <a id="pills-1-tab-link" data-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-1" aria-selected="true" class="arrow-link blue-arrow-link active">View Details <img src="images/home/arrow-b.svg" alt="arrow"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="article-inner">
                                <div class="article-box">
                                    <div class="img">
                                        <img src="images/students-new-intakes/2.jpg" class="main-img" alt="">
                                        <img src="images/students-new-intakes/australia.png" class="country-img" alt="australia">
                                    </div>
                                    <div class="txt">
                                        <h3 class="title">Australia</h3>
                                        <p>Australia doesn’t only offer a quality lifestyle and natural beauty to admire. The climate of this continent is quite adaptable for Asians...</p>
                                        <a id="pills-2-tab-link" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-2" aria-selected="false" class="arrow-link blue-arrow-link">View Details <img src="images/home/arrow-b.svg" alt="arrow"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="article-inner">
                                <div class="article-box">
                                    <div class="img">
                                        <img src="images/students-new-intakes/3.jpg" class="main-img" alt="">
                                        <img src="images/students-new-intakes/united-kingdom.png" class="country-img" alt="united-kingdom">
                                    </div>
                                    <div class="txt">
                                        <h3 class="title">United Kingdom</h3>
                                        <p>Studying in the UK is one of the greatest privileges any International Student can get. As a commonwealth country, Sri Lankan students...</p>
                                        <a id="pills-3-tab-link" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-3" aria-selected="false" class="arrow-link blue-arrow-link">View Details <img src="images/home/arrow-b.svg" alt="arrow"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="article-inner">
                                <div class="article-box">
                                    <div class="img">
                                        <img src="images/students-new-intakes/4.jpg" class="main-img" alt="">
                                        <img src="images/students-new-intakes/germany.png" class="country-img" alt="germany">
                                    </div>
                                    <div class="txt">
                                        <h3 class="title">Germany</h3>
                                        <p>Germany is Europe’s power hub in terms of Economy and Development. Offering International Students various choices of...</p>
                                        <a id="pills-4-tab-link" data-toggle="pill" href="#pills-4" role="tab" aria-controls="pills-4" aria-selected="false" class="arrow-link blue-arrow-link">View Details <img src="images/home/arrow-b.svg" alt="arrow"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="article-inner">
                                <div class="article-box">
                                    <div class="img">
                                        <img src="images/students-new-intakes/5.jpg" class="main-img" alt="">
                                        <img src="images/students-new-intakes/france.png" class="country-img" alt="france">
                                    </div>
                                    <div class="txt">
                                        <h3 class="title">France</h3>
                                        <p>With over 250,000 International students currently studying, France today is not just a travel destination but a den of opportunities...</p>
                                        <a id="pills-5-tab-link" data-toggle="pill" href="#pills-5" role="tab" aria-controls="pills-5" aria-selected="false" class="arrow-link blue-arrow-link">View Details <img src="images/home/arrow-b.svg" alt="arrow"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="article-inner">
                                <div class="article-box">
                                    <div class="img">
                                        <img src="images/students-new-intakes/6.jpg" class="main-img" alt="">
                                        <img src="images/students-new-intakes/spain.png" class="country-img" alt="spain">
                                    </div>
                                    <div class="txt">
                                        <h3 class="title">Spain</h3>
                                        <p>Spain is a culturally diverse and habitable climate for International Students. It is the ideal place for those who want to pursue their study...</p>
                                        <a id="pills-6-tab-link" data-toggle="pill" href="#pills-6" role="tab" aria-controls="pills-6" aria-selected="false" class="arrow-link blue-arrow-link">View Details <img src="images/home/arrow-b.svg" alt="arrow"></a>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <!-- collapse 
                        <div class="collapse" id="article-collapse">

                            <div class="articles">
                                <div class="article-inner">
                                    <div class="article-box">
                                        <div class="img">
                                            <img src="images/students-new-intakes/7.jpg" class="main-img" alt="">
                                            <img src="images/students-new-intakes/hungary.png" class="country-img" alt="hungary">
                                        </div>
                                        <div class="txt">
                                            <h3 class="title">Hungary</h3>
                                            <p>Germany is Europe’s power hub in terms of Economy and Development. Offering International Students various choices of...</p>
                                            <a id="pills-7-tab-link" data-toggle="pill" href="#pills-7" role="tab" aria-controls="pills-7" aria-selected="false" class="arrow-link blue-arrow-link">View Details <img src="images/home/arrow-b.svg" alt="arrow"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="article-inner">
                                    <div class="article-box">
                                        <div class="img">
                                            <img src="images/students-new-intakes/8.jpg" class="main-img" alt="">
                                            <img src="images/students-new-intakes/ireland.png" class="country-img" alt="ireland">
                                        </div>
                                        <div class="txt">
                                            <h3 class="title">Ireland</h3>
                                            <p>With over 250,000 International students currently studying, France today is not just a travel destination but a den of opportunities...</p>
                                            <a id="pills-8-tab-link" data-toggle="pill" href="#pills-8" role="tab" aria-controls="pills-8" aria-selected="false" class="arrow-link blue-arrow-link">View Details <img src="images/home/arrow-b.svg" alt="arrow"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="article-inner">
                                    <div class="article-box">
                                        <div class="img">
                                            <img src="images/students-new-intakes/9.jpg" class="main-img" alt="">
                                            <img src="images/students-new-intakes/malaysia.png" class="country-img" alt="malaysia">
                                        </div>
                                        <div class="txt">
                                            <h3 class="title">Malaysia</h3>
                                            <p>Spain is a culturally diverse and habitable climate for International Students. It is the ideal place for those who want to pursue their study...</p>
                                            <a id="pills-9-tab-link" data-toggle="pill" href="#pills-9" role="tab" aria-controls="pills-9" aria-selected="false" class="arrow-link blue-arrow-link">View Details <img src="images/home/arrow-b.svg" alt="arrow"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="article-inner">
                                    <div class="article-box">
                                        <div class="img">
                                            <img src="images/students-new-intakes/10.jpg" class="main-img" alt="">
                                            <img src="images/students-new-intakes/singapore.png" class="country-img" alt="singapore">
                                        </div>
                                        <div class="txt">
                                            <h3 class="title">Singapore</h3>
                                            <p>Germany is Europe’s power hub in terms of Economy and Development. Offering International Students various choices of...</p>
                                            <a id="pills-10-tab-link" data-toggle="pill" href="#pills-10" role="tab" aria-controls="pills-10" aria-selected="false" class="arrow-link blue-arrow-link">View Details <img src="images/home/arrow-b.svg" alt="arrow"></a>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>-->

                        <p class="bp">Study in Any Part of the World. <!--<a data-toggle="collapse" href="#article-collapse" role="button" aria-expanded="false" aria-controls="article-collapse" class="collapsed">View <span class="cs1">All</span><span class="cs2">Less</span> Countries</a>--></p>
                    </div>
                </div>

            </div>
        </div>


        <div id="middle-tabs" class="row row_clr about-migration intakes-tabs">
            <div class="container">
                <div class="row about-migration-outer">
                    <div class="col-12 no-pad about-migration-bottom">
                        <div class="row row_clr about-migration-bottom-inner">
                            <div class="lft">
                                <div class="s-group mt-0">
                                    <div class="sg-in">
                                        <img src="./images/migration/g1.png" alt="">
                                    </div>
                                    <div class="sg-in">
                                        <img src="./images/migration/g2.png" alt="">
                                    </div>
                                    <div class="sg-in">
                                        <img src="./images/migration/g1.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="rht">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-tab-1">
                                        <div class="top-img">
                                            <img src="./images/students-new-intakes/1-main.jpg" alt="">
                                        </div>
                                        <h3 class="tab-h">Canada</h3>
                                        <p>Canada hosts over 640,000 International students, being one of the best, most hospitable countries for education and living. Canada has long been known for its number of reputed universities offering world-class qualifications. With EVS Students, now you can apply for your higher studies in Canada!</p>

                                        <ul class="icon-list req-list sc-list scl-wm">
                                            <li><b>Major Intakes</b> January & September</li>
                                            <li><b>Application Closing</b> October 31st (Previous Year) & May 31st</li>
                                        </ul>

                                        <h5 class="sh mb-3">Key Advantages</h5>
                                        <ul class="icon-list req-list sm-sc-list">
                                            <li>Dependent gets work visa when applying for any level of education.</li>
                                            <li>No interviews during the process</li>
                                            <li>Post study work visa options</li>
                                            <li>Multiple-entry visa</li>
                                            <li>Can work 20 hours per week (part –time)</li>
                                            <li>Higher PR possibility</li>
                                        </ul>



                                        <h5 class="sh mb-3">Available Qualification Levels</h5>

                                        <div class="accordion" id="accordion-1">
                                            <div class="card">
                                                <div class="card-header" id="heading-1">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                                        Foundation
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion-1">
                                                    <div class="card-body">

                                                        <h3 class="in-h">Requirements</h3>
                                                        <ul class="icon-list req-list">
                                                            <li>Minimum 6 passes in O/L (GCE / Cambridge / Edexcel)</li>
                                                        </ul>                                                        

                                                        <a href="#" class="arrow-link blue-arrow-link" data-toggle="modal" data-target="#student-inquiry-modal" >Submit Application <img src="images/home/arrow-b.svg" alt="arrow"></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="heading-2">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">
                                                        Bachelors' Degree
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion-1">
                                                    <div class="card-body">

                                                        <h3 class="in-h">Requirements</h3>
                                                        <ul class="icon-list req-list">
                                                            <li>Minimum 3 Passes in A/L Or O/L +  Foundation</li>
                                                        </ul>                                                        

                                                        <a href="#" class="arrow-link blue-arrow-link" data-toggle="modal" data-target="#student-inquiry-modal" >Submit Application <img src="images/home/arrow-b.svg" alt="arrow"></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="heading-3">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-3" aria-expanded="true" aria-controls="collapse-3">
                                                        Graduate Programmes
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion-1">
                                                    <div class="card-body">

                                                        <h3 class="in-h">Requirements</h3>
                                                        <ul class="icon-list req-list">
                                                            <li>Bachelor’s Degree</li>
                                                            <li>or HND + 3 Years' Relevant Work Experience</li>
                                                            <li>or 2+ Years Undergraduate with Work Experience</li>
                                                        </ul>                                                        

                                                        <a href="#" class="arrow-link blue-arrow-link" data-toggle="modal" data-target="#student-inquiry-modal" >Submit Application <img src="images/home/arrow-b.svg" alt="arrow"></a>

                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Card 4 Open -->
                                            <div class="card">
                                                <div class="card-header" id="heading-4">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-4" aria-expanded="true" aria-controls="collapse-4">
                                                        Masters' Degree
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion-1">
                                                    <div class="card-body">

                                                        <h3 class="in-h">Requirements</h3>
                                                        <ul class="icon-list req-list">
                                                            <li>Bachelor’s Degree</li>
                                                            <li>or Postgraduate Diploma + Work Experience</li>
                                                        </ul>                                                        

                                                        <a href="#" class="arrow-link blue-arrow-link" data-toggle="modal" data-target="#student-inquiry-modal" >Submit Application <img src="images/home/arrow-b.svg" alt="arrow"></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card 4 Close -->
                                            
                                            <!-- Card 5 Open -->
                                            <div class="card">
                                                <div class="card-header" id="heading-5">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-5" aria-expanded="true" aria-controls="collapse-5">
                                                        PhD Programmes
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion-1">
                                                    <div class="card-body">

                                                        <h3 class="in-h">Contact our Student Counselors for Eligibility and Research Fields</h3>
                                                                                                           
                                                        <a href="#" class="arrow-link blue-arrow-link">Contact Student Counsellors <img src="images/home/arrow-b.svg" alt="arrow"></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card 5 Close -->
                                            <br></br> 
                                            <p>As an affiliation of Global Study Partners, we assist applications for over 20 universities and institutes in Canada, including Conestoga College, Humber College and more. Check your Eligibility today! Register with EVS Students!</p>
                                        </div>


                                        <div class="va-banner">
                                            <div class="img">
                                                <img src="./images/students-new-intakes/visa.jpg" alt="">
                                            </div>
                                            <div class="greay-notification-box">
                                                <h3 class="heading">Online <span>Visa Assessment</span></h3>
                                                <p>Your application doesn’t have to wait any longer for process. Get in touch with our consultants online and start your Visa procedure with Zero hassle. Distance Maintained!</p>
                                                <a href="#" data-toggle="modal" data-target="#book-consultation-modal" class="lnk">Book a Consultation</a>
                                            </div>
                                        </div>


                                        <div class="next-sec">
                                            <div class="wm-box prev-box" data-tab="pills-10-tab-link">
                                                <i class="fa fa-caret-left"></i>
                                                <div class="icon-outer">
                                                    <div class="icon">
                                                        <img src="images/students-new-intakes/singapore.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="txt">
                                                    <h4 class="mt">Previous Available Country</h4>
                                                    <h5 class="st">Singapore</h5>
                                                </div>
                                            </div>
                                            <div class="wm-box" data-tab="pills-2-tab-link">
                                                <div class="txt">
                                                    <h4 class="mt">Next Available Country</h4>
                                                    <h5 class="st">Australia</h5>
                                                </div>
                                                <div class="icon-outer">
                                                    <div class="icon">
                                                        <img src="images/students-new-intakes/australia.png" alt="">
                                                    </div>
                                                </div>
                                                <i class="fa fa-caret-right"></i>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-tab-2">
                                        <div class="top-img">
                                            <img src="./images/students-new-intakes/2-main.jpg" alt="">
                                        </div>
                                        <h3 class="tab-h">Australia</h3>
                                        <p>Australia doesn’t only offer a quality lifestyle and natural beauty to admire. The climate of this continent is quite adaptable for Asians, and there are many career varieties and opportunities for Asian Graduate students. Now you can apply for your higher studies in Australia with EVS Students!</p>

                                        <ul class="icon-list req-list sc-list scl-wm">
                                            <li><b>Major Intakes</b> February, September & November</li>
                                            <li><b>Application Closing</b> October 31st (Previous Year) | May 31st | June 30th</li>
                                        </ul>

                                        <h5 class="sh mb-3">Key Advantages</h5>
                                        <ul class="icon-list req-list sm-sc-list">
                                            <li>Options to wave off IELTS</li>
                                            <li>Post Study Work Visa Options</li>
                                            <li>Multiple-entry Visa</li>
                                            <li>Can Work 20 Hours per Week (Part-Time)</li>
                                            <li>Dependent Gets Work Visa Only while Applying for Master’s Degree</li>
                                        </ul>



                                        <h5 class="sh mb-3">Available Qualification Levels</h5>

                                        <div class="accordion" id="accordion-3">
                                            <div class="card">
                                                <div class="card-header" id="heading-1-2">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse-1-2" aria-expanded="true" aria-controls="collapse-1-2">
                                                        Bachelors' Degree
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse-1-2" class="collapse show" aria-labelledby="heading-1-2" data-parent="#accordion-3">
                                                    <div class="card-body">

                                                        <h3 class="in-h">Requirements</h3>
                                                        <ul class="icon-list req-list">
                                                            <li>Minimum 3 Passes in A/L Or O/L +  Foundation</li>
                                                        </ul>                                                        

                                                        <a href="#" class="arrow-link blue-arrow-link" data-toggle="modal" data-target="#student-inquiry-modal" >Submit Application <img src="images/home/arrow-b.svg" alt="arrow"></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="heading-1-3">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-1-3" aria-expanded="true" aria-controls="collapse-1-3">
                                                        Masters' Degree
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse-1-3" class="collapse" aria-labelledby="heading-1-3" data-parent="#accordion-3">
                                                    <div class="card-body">

                                                        <h3 class="in-h">Requirements</h3>
                                                        <ul class="icon-list req-list">
                                                        <li>Bachelor’s Degree</li>
                                                        <li>or Postgraduate Diploma + Work Experience</li>
                                                        </ul>                                                        

                                                        <a href="#" class="arrow-link blue-arrow-link" data-toggle="modal" data-target="#student-inquiry-modal" >Submit Application <img src="images/home/arrow-b.svg" alt="arrow"></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <br></br> 
                                            <p>Apart from the general fields of study, Australia also offers students unique study areas such as marine, wildlife conservation and encourages Agricultural sciences for students who plan on settling in the country.
                                            <br></br>
                                            As an affiliation of Global Study Partners, we assist applications for over 25 universities and institutes in Australia, including ATMC, University of Sydney, University of Tasmania and more. Check your Eligibility today! Register with EVS Students!</p>
                                        </div>


                                        <div class="va-banner">
                                            <div class="img">
                                                <img src="./images/students-new-intakes/visa.jpg" alt="">
                                            </div>
                                            <div class="greay-notification-box">
                                                <h3 class="heading">Online <span>Visa Assessment</span></h3>
                                                <p>Your application doesn’t have to wait any longer for process. Get in touch with our consultants online and start your Visa procedure with Zero hassle. Distance Maintained!</p>
                                                <a href="#" class="lnk" data-toggle="modal" data-target="#book-consultation-modal">Book a Consultation</a>
                                            </div>
                                        </div>


                                        <div class="next-sec">
                                            <div class="wm-box prev-box" data-tab="pills-1-tab-link">
                                                <i class="fa fa-caret-left"></i>
                                                <div class="icon-outer">
                                                    <div class="icon">
                                                        <img src="images/students-new-intakes/canada.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="txt">
                                                    <h4 class="mt">Previous Available Country</h4>
                                                    <h5 class="st">Canada</h5>
                                                </div>
                                            </div>
                                            <div class="wm-box" data-tab="pills-2-tab-link">
                                                <div class="txt">
                                                    <h4 class="mt">Next Available Country</h4>
                                                    <h5 class="st">United Kingdom</h5>
                                                </div>
                                                <div class="icon-outer">
                                                    <div class="icon">
                                                        <img src="images/students-new-intakes/united-kingdom.png" alt="">
                                                    </div>
                                                </div>
                                                <i class="fa fa-caret-right"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- United Kingdom Open -->

                                    <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-tab-3">
                                        <div class="top-img">
                                            <img src="./images/students-new-intakes/3-main.jpg" alt="">
                                        </div>
                                        <h3 class="tab-h">United Kingdom</h3>
                                        <p>Studying in the UK is one of the greatest privileges any International Student can get. As a commonwealth country, Sri Lankan students have many opportunities for scholarships in the United Kingdom. In addition, applying for a Student Visa is quite easy for Sri Lankan students.</p>

                                        <ul class="icon-list req-list sc-list scl-wm">
                                            <li><b>Major Intakes</b> January, September & October</li>
                                            <li><b>Application Closing</b> August 31st (Previous Year) | May 31st | July 31st</li>
                                        </ul>

                                        <h5 class="sh mb-3">Key Advantages</h5>
                                        <ul class="icon-list req-list sm-sc-list">
                                            <li>Post Study Work Options</li>
                                            <li>Dependent Gets Work Visa Only while Applying for Master’s</li>
                                            <li>Options to Waive Off IELTS</li>
                                            <li>No Application Fee</li>
                                            <li>Multiple-entry Visa</li>
                                            <li>Can Work 20 Hours per Week (Part-time)</li>
                                        </ul>



                                        <h5 class="sh mb-3">Available Qualification Levels</h5>

                                        <div class="accordion" id="accordion-3">
                                            <div class="card">
                                                <div class="card-header" id="heading-2-2">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse-2-2" aria-expanded="true" aria-controls="collapse-2-2">
                                                        Foundation
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse-2-2" class="collapse show" aria-labelledby="heading-2-2" data-parent="#accordion-3">
                                                    <div class="card-body">

                                                        <h3 class="in-h">Requirements</h3>
                                                        <ul class="icon-list req-list">
                                                            <li>Minimum 6 passes in O/L (GCE / Cambridge / Edexcel)</li>
                                                        </ul>                                                        

                                                        <a href="#" class="arrow-link blue-arrow-link" data-toggle="modal" data-target="#student-inquiry-modal" >Submit Application <img src="images/home/arrow-b.svg" alt="arrow"></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="heading-2-3">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-2-3" aria-expanded="true" aria-controls="collapse-2-3">
                                                        Bachelors' Degree
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse-2-3" class="collapse" aria-labelledby="heading-2-3" data-parent="#accordion-3">
                                                    <div class="card-body">

                                                        <h3 class="in-h">Requirements</h3>
                                                        <ul class="icon-list req-list">
                                                            <li>Minimum 3 Passes in A/L Or O/L +  Foundation</li>
                                                        </ul>                                                        

                                                        <a href="#" class="arrow-link blue-arrow-link" data-toggle="modal" data-target="#student-inquiry-modal" >Submit Application <img src="images/home/arrow-b.svg" alt="arrow"></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="heading-2-4">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-2-4" aria-expanded="true" aria-controls="collapse-2-4">
                                                        Graduate Programmes
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse-2-4" class="collapse" aria-labelledby="heading-2-4" data-parent="#accordion-3">
                                                    <div class="card-body">

                                                        <h3 class="in-h">Requirements</h3>
                                                        <ul class="icon-list req-list">
                                                            <li>Bachelor’s Degree</li>
                                                            <li>or HND + 3 Years’ Relevant Work Experience</li>
                                                            <li>or 2+ Years Undergraduate with Work Experience</li>
                                                        </ul>                                                        

                                                        <a href="#" class="arrow-link blue-arrow-link" data-toggle="modal" data-target="#student-inquiry-modal" >Submit Application <img src="images/home/arrow-b.svg" alt="arrow"></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="heading-2-5">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-2-5" aria-expanded="true" aria-controls="collapse-2-5">
                                                        Master’s Degree
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse-2-5" class="collapse" aria-labelledby="heading-2-5" data-parent="#accordion-3">
                                                    <div class="card-body">

                                                        <h3 class="in-h">Requirements</h3>
                                                        <ul class="icon-list req-list">
                                                            <li>Bachelor’s Degree</li>
                                                            <li>or Postgraduate Diploma + Work Experience</li>
                                                        </ul>                                                        

                                                        <a href="#" class="arrow-link blue-arrow-link" data-toggle="modal" data-target="#student-inquiry-modal" >Submit Application <img src="images/home/arrow-b.svg" alt="arrow"></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="heading-2-6">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-2-6" aria-expanded="true" aria-controls="collapse-2-6">
                                                        PhD Programmes
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse-2-6" class="collapse" aria-labelledby="heading-2-6" data-parent="#accordion-3">
                                                    <div class="card-body">

                                                        <h3 class="in-h">Contact our Student Counselors for Eligibility and Research Fields</h3>                                                       

                                                        <a href="#" class="arrow-link blue-arrow-link" data-toggle="modal" data-target="#student-inquiry-modal" >Submit Application <img src="images/home/arrow-b.svg" alt="arrow"></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <br></br> 
                                            <p>We offer students an array of university options in the United Kingdom, including the University of Edinburgh in Scotland, University of Birmingham, St. John’s University in York and more. Check your Eligibility today! Register with EVS Students!</p>
                                        </div>


                                        <div class="va-banner">
                                            <div class="img">
                                                <img src="./images/students-new-intakes/visa.jpg" alt="">
                                            </div>
                                            <div class="greay-notification-box">
                                                <h3 class="heading">Online <span>Visa Assessment</span></h3>
                                                <p>Your application doesn’t have to wait any longer for process. Get in touch with our consultants online and start your Visa procedure with Zero hassle. Distance Maintained!</p>
                                                <a href="#" class="lnk" data-toggle="modal" data-target="#book-consultation-modal">Book a Consultation</a>
                                            </div>
                                        </div>


                                        <div class="next-sec">
                                            <div class="wm-box prev-box" data-tab="pills-2-tab-link">
                                                <i class="fa fa-caret-left"></i>
                                                <div class="icon-outer">
                                                    <div class="icon">
                                                        <img src="images/students-new-intakes/australia.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="txt">
                                                    <h4 class="mt">Previous Available Country</h4>
                                                    <h5 class="st">Australia</h5>
                                                </div>
                                            </div>
                                            <div class="wm-box" data-tab="pills-4-tab-link">
                                                <div class="txt">
                                                    <h4 class="mt">Next Available Country</h4>
                                                    <h5 class="st">Germany</h5>
                                                </div>
                                                <div class="icon-outer">
                                                    <div class="icon">
                                                        <img src="images/students-new-intakes/germany.png" alt="">
                                                    </div>
                                                </div>
                                                <i class="fa fa-caret-right"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- United Kingdom Close -->
                                     
                                    <!-- Germany Open -->

                                    <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-tab-4">
                                        <div class="top-img">
                                            <img src="./images/students-new-intakes/4-main.jpg" alt="">
                                        </div>
                                        <h3 class="tab-h">Germany</h3>
                                        <p>Germany is Europe’s power hub in terms of Economy and Development. Offering International Students various choices of career and study options, German qualifications are some of the most recognized ones globally. Now you can apply for your higher studies in Germany with EVS Students!</p>

                                        <ul class="icon-list req-list sc-list scl-wm">
                                            <li><b>Major Intakes</b> January | February | June | July | August</li>
                                            <li><b>Application Closing</b> December 31st (Previous Year) | June 30th </li>
                                        </ul>

                                        <h5 class="sh mb-3">Key Advantages</h5>
                                        <ul class="icon-list req-list sm-sc-list">
                                            <li>Schengen Visa</li>
                                            <li>Can Work 20 Hours per Week</li>
                                            <li>Multiple-entry Visa</li>
                                        </ul>



                                        <h5 class="sh mb-3">Available Qualification Levels</h5>

                                        <div class="accordion" id="accordion-4">
                                            <div class="card">
                                                <div class="card-header" id="heading-3-2">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse-3-2" aria-expanded="true" aria-controls="collapse-3-2">
                                                        Bachelors' Degree
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse-3-2" class="collapse show" aria-labelledby="heading-3-2" data-parent="#accordion-4">
                                                    <div class="card-body">

                                                        <h3 class="in-h">Requirements</h3>
                                                        <ul class="icon-list req-list">
                                                            <li>Minimum 3 Passes in A/L Or O/L +  Foundation</li>
                                                        </ul>                                                        

                                                        <a href="#" class="arrow-link blue-arrow-link" data-toggle="modal" data-target="#student-inquiry-modal" >Submit Application <img src="images/home/arrow-b.svg" alt="arrow"></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="heading-3-3">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-3-3" aria-expanded="true" aria-controls="collapse-3-3">
                                                        Masters' Degree
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse-3-3" class="collapse" aria-labelledby="heading-3-3" data-parent="#accordion-4">
                                                    <div class="card-body">

                                                        <h3 class="in-h">Requirements</h3>
                                                        <ul class="icon-list req-list">
                                                            <li>Bachelor's Degree</li>
                                                            <li>or Postgraduate Diploma + Work Experience</li>
                                                        </ul>                                                        

                                                        <a href="#" class="arrow-link blue-arrow-link" data-toggle="modal" data-target="#student-inquiry-modal" >Submit Application <img src="images/home/arrow-b.svg" alt="arrow"></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <br></br> 
                                            <p>German Universities are widely known for presenting students with practical experiences that are considered vital in the career world. Additionally, Germany is famous for learning programmes in technical skills, technology and sciences.
                                            <br></br>
                                            We offer students top-rated universities in Germany, including the University of Applied Science Europe and New European College, Munich. Check your Eligibility today! Register with EVS Students! </p>
                                        </div>


                                        <div class="va-banner">
                                            <div class="img">
                                                <img src="./images/students-new-intakes/visa.jpg" alt="">
                                            </div>
                                            <div class="greay-notification-box">
                                                <h3 class="heading">Online <span>Visa Assessment</span></h3>
                                                <p>Your application doesn’t have to wait any longer for process. Get in touch with our consultants online and start your Visa procedure with Zero hassle. Distance Maintained!</p>
                                                <a href="#" class="lnk" data-toggle="modal" data-target="#book-consultation-modal">Book a Consultation</a>
                                            </div>
                                        </div>


                                        <div class="next-sec">
                                            <div class="wm-box prev-box" data-tab="pills-3-tab-link">
                                                <i class="fa fa-caret-left"></i>
                                                <div class="icon-outer">
                                                    <div class="icon">
                                                        <img src="images/students-new-intakes/united-kingdom.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="txt">
                                                    <h4 class="mt">Previous Available Country</h4>
                                                    <h5 class="st">United Kingdom</h5>
                                                </div>
                                            </div>
                                            <div class="wm-box" data-tab="pills-5-tab-link">
                                                <div class="txt">
                                                    <h4 class="mt">Next Available Country</h4>
                                                    <h5 class="st">France</h5>
                                                </div>
                                                <div class="icon-outer">
                                                    <div class="icon">
                                                        <img src="images/students-new-intakes/france.png" alt="">
                                                    </div>
                                                </div>
                                                <i class="fa fa-caret-right"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Germany Close -->

                                    <!-- France Open -->

                                    <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-tab-5">
                                        <div class="top-img">
                                            <img src="./images/students-new-intakes/5-main.jpg" alt="">
                                        </div>
                                        <h3 class="tab-h">France</h3>
                                        <p>With over 250,000 International students currently studying, France today is not just a travel destination but a den of opportunities for students in terms of Career and education fields. Now you can apply for your higher studies in France with EVS Students!</p>

                                        <ul class="icon-list req-list sc-list scl-wm">
                                            <li><b>Major Intakes</b> January | February | June | July | August</li>
                                            <li><b>Application Closing</b> December 31st (Previous Year) | June 30th</li>
                                        </ul>

                                        <h5 class="sh mb-3">Key Advantages</h5>
                                        <ul class="icon-list req-list sm-sc-list">
                                            <li>Schengen Visa</li>
                                            <li>Can Work 20 Hours per Week</li>
                                            <li>Multiple-entry Visa</li>
                                        </ul>



                                        <h5 class="sh mb-3">Available Qualification Levels</h5>

                                        <div class="accordion" id="accordion-5">
                                            <div class="card">
                                                <div class="card-header" id="heading-4-2">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse-4-2" aria-expanded="true" aria-controls="collapse-4-2">
                                                        Bachelors' Degree
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse-4-2" class="collapse show" aria-labelledby="heading-4-2" data-parent="#accordion-5">
                                                    <div class="card-body">

                                                        <h3 class="in-h">Requirements</h3>
                                                        <ul class="icon-list req-list">
                                                            <li>Minimum 3 Passes in A/L Or O/L +  Foundation</li>
                                                        </ul>                                                        

                                                        <a href="#" class="arrow-link blue-arrow-link" data-toggle="modal" data-target="#student-inquiry-modal" >Submit Application <img src="images/home/arrow-b.svg" alt="arrow"></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="heading-4-3">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-4-3" aria-expanded="true" aria-controls="collapse-4-3">
                                                        Masters' Degree
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse-4-3" class="collapse" aria-labelledby="heading-4-3" data-parent="#accordion-5">
                                                    <div class="card-body">

                                                        <h3 class="in-h">Requirements</h3>
                                                        <ul class="icon-list req-list">
                                                            <li>Bachelor's Degree</li>
                                                            <li>or Postgraduate Diploma + Work Experience</li>
                                                        </ul>                                                        

                                                        <a href="#" class="arrow-link blue-arrow-link" data-toggle="modal" data-target="#student-inquiry-modal" >Submit Application <img src="images/home/arrow-b.svg" alt="arrow"></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <br></br> 
                                            <p>Studying for a French qualification may not require you to learn French itself. Many universities in France offer English-taught programmes that are recognized worldwide. Knowing basic French would be a plus point for survival and would get you work opportunities. If you have always dreamt of visiting the City of Love, studying there could be the greatest achievement.
                                            <br></br>
                                            We offer students top-rated universities in France, including Collège de Paris and NEOMA Business School in Mont-Saint-Aignan. Check your Eligibility today! Register with EVS Students!</p>
                                        </div>


                                        <div class="va-banner">
                                            <div class="img">
                                                <img src="./images/students-new-intakes/visa.jpg" alt="">
                                            </div>
                                            <div class="greay-notification-box">
                                                <h3 class="heading">Online <span>Visa Assessment</span></h3>
                                                <p>Your application doesn’t have to wait any longer for process. Get in touch with our consultants online and start your Visa procedure with Zero hassle. Distance Maintained!</p>
                                                <a href="#" class="lnk" data-toggle="modal" data-target="#book-consultation-modal">Book a Consultation</a>
                                            </div>
                                        </div>


                                        <div class="next-sec">
                                            <div class="wm-box prev-box" data-tab="pills-4-tab-link">
                                                <i class="fa fa-caret-left"></i>
                                                <div class="icon-outer">
                                                    <div class="icon">
                                                        <img src="images/students-new-intakes/germany.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="txt">
                                                    <h4 class="mt">Previous Available Country</h4>
                                                    <h5 class="st">Germany</h5>
                                                </div>
                                            </div>
                                            <div class="wm-box" data-tab="pills-6-tab-link">
                                                <div class="txt">
                                                    <h4 class="mt">Next Available Country</h4>
                                                    <h5 class="st">Spain</h5>
                                                </div>
                                                <div class="icon-outer">
                                                    <div class="icon">
                                                        <img src="images/students-new-intakes/spain.png" alt="">
                                                    </div>
                                                </div>
                                                <i class="fa fa-caret-right"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- France Close -->

                                    <!-- Spain Open -->

                                    <div class="tab-pane fade" id="pills-6" role="tabpanel" aria-labelledby="pills-tab-6">
                                        <div class="top-img">
                                            <img src="./images/students-new-intakes/6-main.jpg" alt="">
                                        </div>
                                        <h3 class="tab-h">Spain</h3>
                                        <p>Spain is a culturally diverse and habitable climate for International Students. It is the ideal place for those who want to pursue their study goals in out-of-the-norm destinations. Now you can apply for your higher studies in Spain with EVS Students!</p>

                                        <ul class="icon-list req-list sc-list scl-wm">
                                            <li><b>Major Intakes</b> January | February | June | July | August</li>
                                            <li><b>Application Closing</b> December 31st (Previous Year) | June 30th</li>
                                        </ul>

                                        <h5 class="sh mb-3">Key Advantages</h5>
                                        <ul class="icon-list req-list sm-sc-list">
                                            <li>Schengen Visa</li>
                                            <li>Can Work 20 Hours per Week</li>
                                            <li>Multiple-entry Visa</li>
                                        </ul>



                                        <h5 class="sh mb-3">Available Qualification Levels</h5>

                                        <div class="accordion" id="accordion-6">
                                            <div class="card">
                                                <div class="card-header" id="heading-5-2">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse-5-2" aria-expanded="true" aria-controls="collapse-5-2">
                                                        Bachelors' Degree
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse-5-2" class="collapse show" aria-labelledby="heading-5-2" data-parent="#accordion-6">
                                                    <div class="card-body">

                                                        <h3 class="in-h">Requirements</h3>
                                                        <ul class="icon-list req-list">
                                                            <li>Minimum 3 Passes in A/L Or O/L +  Foundation</li>
                                                        </ul>                                                        

                                                        <a href="#" class="arrow-link blue-arrow-link" data-toggle="modal" data-target="#student-inquiry-modal" >Submit Application <img src="images/home/arrow-b.svg" alt="arrow"></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="heading-5-3">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-5-3" aria-expanded="true" aria-controls="collapse-5-3">
                                                        Masters' Degree
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse-5-3" class="collapse" aria-labelledby="heading-5-3" data-parent="#accordion-6">
                                                    <div class="card-body">

                                                        <h3 class="in-h">Requirements</h3>
                                                        <ul class="icon-list req-list">
                                                            <li>Bachelor's Degree</li>
                                                            <li>or Postgraduate Diploma + Work Experience</li>
                                                        </ul>                                                        

                                                        <a href="#" class="arrow-link blue-arrow-link" data-toggle="modal" data-target="#student-inquiry-modal" >Submit Application <img src="images/home/arrow-b.svg" alt="arrow"></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <br></br> 
                                            <p>Studying in Spain is quite cheaper when compared to other European destinations. Learning Spanish is also not required, but knowing the basics would be ample for an International student to get by throughout the course.
                                            <br></br>
                                            We offer students top-rated universities in Spain, including the University of Barcelona and the University of Madrid. Check your Eligibility today! Register with EVS Students!</p>
                                        </div>


                                        <div class="va-banner">
                                            <div class="img">
                                                <img src="./images/students-new-intakes/visa.jpg" alt="">
                                            </div>
                                            <div class="greay-notification-box">
                                                <h3 class="heading">Online <span>Visa Assessment</span></h3>
                                                <p>Your application doesn’t have to wait any longer for process. Get in touch with our consultants online and start your Visa procedure with Zero hassle. Distance Maintained!</p>
                                                <a href="#" class="lnk" data-toggle="modal" data-target="#book-consultation-modal">Book a Consultation</a>
                                            </div>
                                        </div>


                                        <div class="next-sec">
                                            <div class="wm-box prev-box" data-tab="pills-5-tab-link">
                                                <i class="fa fa-caret-left"></i>
                                                <div class="icon-outer">
                                                    <div class="icon">
                                                        <img src="images/students-new-intakes/france.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="txt">
                                                    <h4 class="mt">Previous Available Country</h4>
                                                    <h5 class="st">France</h5>
                                                </div>
                                            </div>
                                            <div class="wm-box" data-tab="pills-7-tab-link">
                                                <div class="txt">
                                                    <h4 class="mt">Next Available Country</h4>
                                                    <h5 class="st">Hungary</h5>
                                                </div>
                                                <div class="icon-outer">
                                                    <div class="icon">
                                                        <img src="images/students-new-intakes/hungary.png" alt="">
                                                    </div>
                                                </div>
                                                <i class="fa fa-caret-right"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Spain Close -->

                                    <!-- Hungary Open -->

                                    <div class="tab-pane fade" id="pills-7" role="tabpanel" aria-labelledby="pills-tab-7">
                                        <div class="top-img">
                                            <img src="./images/students-new-intakes/7-main.jpg" alt="">
                                        </div>
                                        <h3 class="tab-h">Hungary</h3>
                                        <p>Hungary is known amongst many International Students as a diverse and safe country to study in; offering low-cost living and affordable degree programmes for Students dreaming of pursuing a career in Europe. Now you can apply for your higher studies in Hungary with EVS Students!</p>

                                        <ul class="icon-list req-list sc-list scl-wm">
                                            <li><b>Major Intakes</b> January | February | June | July | August</li>
                                            <li><b>Application Closing</b> December 31st (Previous Year) | June 30th</li>
                                        </ul>

                                        <h5 class="sh mb-3">Key Advantages</h5>
                                        <ul class="icon-list req-list sm-sc-list">
                                            <li>Schengen Visa</li>
                                            <li>Can Work 20 Hours per Week</li>
                                            <li>Multiple-entry Visa</li>
                                        </ul>



                                        <h5 class="sh mb-3">Available Qualification Levels</h5>

                                        <div class="accordion" id="accordion-7">
                                            <div class="card">
                                                <div class="card-header" id="heading-6-2">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse-6-2" aria-expanded="true" aria-controls="collapse-6-2">
                                                        Bachelors' Degree
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse-6-2" class="collapse show" aria-labelledby="heading-6-2" data-parent="#accordion-7">
                                                    <div class="card-body">

                                                        <h3 class="in-h">Requirements</h3>
                                                        <ul class="icon-list req-list">
                                                            <li>Minimum 3 Passes in A/L Or O/L +  Foundation</li>
                                                        </ul>                                                        

                                                        <a href="#" class="arrow-link blue-arrow-link" data-toggle="modal" data-target="#student-inquiry-modal" >Submit Application <img src="images/home/arrow-b.svg" alt="arrow"></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="heading-6-3">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-6-3" aria-expanded="true" aria-controls="collapse-6-3">
                                                        Masters' Degree
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse-6-3" class="collapse" aria-labelledby="heading-6-3" data-parent="#accordion-7">
                                                    <div class="card-body">

                                                        <h3 class="in-h">Requirements</h3>
                                                        <ul class="icon-list req-list">
                                                            <li>Bachelor's Degree</li>
                                                            <li>or Postgraduate Diploma + Work Experience</li>
                                                        </ul>                                                        

                                                        <a href="#" class="arrow-link blue-arrow-link" data-toggle="modal" data-target="#student-inquiry-modal" >Submit Application <img src="images/home/arrow-b.svg" alt="arrow"></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <br></br> 
                                            <p>Undoubtedly, Hungary is one of the most affordable study destinations for international students. Most Hungarian degrees are renowned for their world-ranking academic quality. Having a recognized degree in Business or Technology from a renowned college in Hungary would pave the path for a European Job.
                                            <br></br>
                                            We offer students top-rated universities in Hungary, including International Business School in Budapest (IBS). Check your Eligibility today! Register with EVS Students!</p>
                                        </div>


                                        <div class="va-banner">
                                            <div class="img">
                                                <img src="./images/students-new-intakes/visa.jpg" alt="">
                                            </div>
                                            <div class="greay-notification-box">
                                                <h3 class="heading">Online <span>Visa Assessment</span></h3>
                                                <p>Your application doesn’t have to wait any longer for process. Get in touch with our consultants online and start your Visa procedure with Zero hassle. Distance Maintained!</p>
                                                <a href="#" class="lnk" data-toggle="modal" data-target="#book-consultation-modal">Book a Consultation</a>
                                            </div>
                                        </div>


                                        <div class="next-sec">
                                            <div class="wm-box prev-box" data-tab="pills-6-tab-link">
                                                <i class="fa fa-caret-left"></i>
                                                <div class="icon-outer">
                                                    <div class="icon">
                                                        <img src="images/students-new-intakes/spain.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="txt">
                                                    <h4 class="mt">Previous Available Country</h4>
                                                    <h5 class="st">Spain</h5>
                                                </div>
                                            </div>
                                            <div class="wm-box" data-tab="pills-8-tab-link">
                                                <div class="txt">
                                                    <h4 class="mt">Next Available Country</h4>
                                                    <h5 class="st">Ireland</h5>
                                                </div>
                                                <div class="icon-outer">
                                                    <div class="icon">
                                                        <img src="images/students-new-intakes/ireland.png" alt="">
                                                    </div>
                                                </div>
                                                <i class="fa fa-caret-right"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Hungary Close -->

                                    <!-- Ireland Open -->

                                    <div class="tab-pane fade" id="pills-8" role="tabpanel" aria-labelledby="pills-tab-8">
                                        <div class="top-img">
                                            <img src="./images/students-new-intakes/8-main.jpg" alt="">
                                        </div>
                                        <h3 class="tab-h">Ireland</h3>
                                        <p>Ranking as one of the Top 20 countries for peace, quality of life and learning opportunities, Ireland – the Emerald Isle - is not widely known amongst foreign students as it should. Currently hosting over 35,000 International students, Ireland is not merely a culturally rich destination but a nation that offers world-class education. Now you can apply for your higher studies in Ireland with EVS Students!</p>

                                        <ul class="icon-list req-list sc-list scl-wm">
                                            <li><b>Major Intakes</b> September | December | May</li>
                                            <li><b>Application Closing</b> May 31st (Previous Year) | September 30th | January 31st</li>
                                        </ul>

                                        <h5 class="sh mb-3">Key Advantages</h5>
                                        <ul class="icon-list req-list sm-sc-list">
                                            <li>UK Visa</li>
                                            <li>Can Work 20 Hours per Week</li>
                                            <li>Multiple-entry Visa</li>
                                        </ul>



                                        <h5 class="sh mb-3">Available Qualification Levels</h5>

                                        <div class="accordion" id="accordion-8">
                                            <div class="card">
                                                <div class="card-header" id="heading-7-2">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse-7-2" aria-expanded="true" aria-controls="collapse-7-2">
                                                        Bachelors' Degree
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse-7-2" class="collapse show" aria-labelledby="heading-7-2" data-parent="#accordion-8">
                                                    <div class="card-body">

                                                        <h3 class="in-h">Requirements</h3>
                                                        <ul class="icon-list req-list">
                                                            <li>Minimum 3 Passes in A/L Or O/L +  Foundation</li>
                                                        </ul>                                                        

                                                        <a href="#" class="arrow-link blue-arrow-link" data-toggle="modal" data-target="#student-inquiry-modal" >Submit Application <img src="images/home/arrow-b.svg" alt="arrow"></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="heading-7-3">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-7-3" aria-expanded="true" aria-controls="collapse-7-3">
                                                        Masters' Degree
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse-7-3" class="collapse" aria-labelledby="heading-7-3" data-parent="#accordion-8">
                                                    <div class="card-body">

                                                        <h3 class="in-h">Requirements</h3>
                                                        <ul class="icon-list req-list">
                                                            <li>Bachelor's Degree</li>
                                                            <li>or Postgraduate Diploma + Work Experience</li>
                                                        </ul>                                                        

                                                        <a href="#" class="arrow-link blue-arrow-link" data-toggle="modal" data-target="#student-inquiry-modal" >Submit Application <img src="images/home/arrow-b.svg" alt="arrow"></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <br></br> 
                                            <p>Studying in Ireland opens research opportunity pathways for International Students. In fact, Irish Universities fall into the top 1% of Innovative Research Institutions. For those studying Data Science, Analytics and STEM subjects, Irish Universities ranks top.
                                            <br></br>
                                            We offer students reputed Irish Universities, including Dublin Institute of Technology, Maynooth University, Institute of Technology, Sligo and more. Check your Eligibility today! Register with EVS Students!</p>
                                        </div>


                                        <div class="va-banner">
                                            <div class="img">
                                                <img src="./images/students-new-intakes/visa.jpg" alt="">
                                            </div>
                                            <div class="greay-notification-box">
                                                <h3 class="heading">Online <span>Visa Assessment</span></h3>
                                                <p>Your application doesn’t have to wait any longer for process. Get in touch with our consultants online and start your Visa procedure with Zero hassle. Distance Maintained!</p>
                                                <a href="#" class="lnk" data-toggle="modal" data-target="#book-consultation-modal">Book a Consultation</a>
                                            </div>
                                        </div>


                                        <div class="next-sec">
                                            <div class="wm-box prev-box" data-tab="pills-7-tab-link">
                                                <i class="fa fa-caret-left"></i>
                                                <div class="icon-outer">
                                                    <div class="icon">
                                                        <img src="images/students-new-intakes/hungary.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="txt">
                                                    <h4 class="mt">Previous Available Country</h4>
                                                    <h5 class="st">Hungary</h5>
                                                </div>
                                            </div>
                                            <div class="wm-box" data-tab="pills-9-tab-link">
                                                <div class="txt">
                                                    <h4 class="mt">Next Available Country</h4>
                                                    <h5 class="st">Malaysia</h5>
                                                </div>
                                                <div class="icon-outer">
                                                    <div class="icon">
                                                        <img src="images/students-new-intakes/malaysia.png" alt="">
                                                    </div>
                                                </div>
                                                <i class="fa fa-caret-right"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Ireland Close -->

                                    <!-- Malaysia Open -->

                                    <div class="tab-pane fade" id="pills-9" role="tabpanel" aria-labelledby="pills-tab-9">
                                        <div class="top-img">
                                            <img src="./images/students-new-intakes/9-main.jpg" alt="">
                                        </div>
                                        <h3 class="tab-h">Malaysia</h3>
                                        <p>A Malaysian degree is a golden pass for many career opportunities worldwide. Malaysia has been a favourite study destination for many Asian students as the culture is quite adaptable and living standards are high for an affordable price. Now you can apply for your higher studies in Malaysia with EVS Students!</p>

                                        <ul class="icon-list req-list sc-list scl-wm">
                                            <li><b>Major Intakes</b> September</li>
                                            <li><b>Application Closing</b> May 31st</li>
                                        </ul>

                                        <h5 class="sh mb-3">Key Advantages</h5>
                                        <ul class="icon-list req-list sm-sc-list">
                                            <li>Affordable Lifestyle</li>
                                            <li>Familiar Culture & Surrounding</li>
                                            <li>World-Recognized Qualifications</li>
                                            <li>Career Opportunities</li>
                                        </ul>



                                        <h5 class="sh mb-3">Available Qualification Levels</h5>

                                        <div class="accordion" id="accordion-9">
                                            <div class="card">
                                                <div class="card-header" id="heading-8-2">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse-8-2" aria-expanded="true" aria-controls="collapse-8-2">
                                                        Bachelors' Degree
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse-8-2" class="collapse show" aria-labelledby="heading-8-2" data-parent="#accordion-9">
                                                    <div class="card-body">

                                                        <h3 class="in-h">Requirements</h3>
                                                        <ul class="icon-list req-list">
                                                            <li>Minimum 3 Passes in A/L Or O/L +  Foundation</li>
                                                        </ul>                                                        

                                                        <a href="#" class="arrow-link blue-arrow-link" data-toggle="modal" data-target="#student-inquiry-modal" >Submit Application <img src="images/home/arrow-b.svg" alt="arrow"></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="heading-8-3">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-8-3" aria-expanded="true" aria-controls="collapse-8-3">
                                                        Masters' Degree
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse-8-3" class="collapse" aria-labelledby="heading-8-3" data-parent="#accordion-9">
                                                    <div class="card-body">

                                                        <h3 class="in-h">Requirements</h3>
                                                        <ul class="icon-list req-list">
                                                            <li>Bachelor's Degree</li>
                                                            <li>or Postgraduate Diploma + Work Experience</li>
                                                        </ul>                                                        

                                                        <a href="#" class="arrow-link blue-arrow-link" data-toggle="modal" data-target="#student-inquiry-modal" >Submit Application <img src="images/home/arrow-b.svg" alt="arrow"></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <br></br> 
                                            <p>Malaysian Universities are highly regarded for Technology, Medicine and Business fields of studies. Hence students interested in pursuing a career in those paths can downright choose to study in Malaysia.
                                            <br></br>
                                            Apply for a qualification in Asia Pacific University (APU) and many more institutions. Check your Eligibility today! Register with EVS Students!</p>
                                        </div>


                                        <div class="va-banner">
                                            <div class="img">
                                                <img src="./images/students-new-intakes/visa.jpg" alt="">
                                            </div>
                                            <div class="greay-notification-box">
                                                <h3 class="heading">Online <span>Visa Assessment</span></h3>
                                                <p>Your application doesn’t have to wait any longer for process. Get in touch with our consultants online and start your Visa procedure with Zero hassle. Distance Maintained!</p>
                                                <a href="#" class="lnk" data-toggle="modal" data-target="#book-consultation-modal">Book a Consultation</a>
                                            </div>
                                        </div>


                                        <div class="next-sec">
                                            <div class="wm-box prev-box" data-tab="pills-8-tab-link">
                                                <i class="fa fa-caret-left"></i>
                                                <div class="icon-outer">
                                                    <div class="icon">
                                                        <img src="images/students-new-intakes/ireland.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="txt">
                                                    <h4 class="mt">Previous Available Country</h4>
                                                    <h5 class="st">Ireland</h5>
                                                </div>
                                            </div>
                                            <div class="wm-box" data-tab="pills-10-tab-link">
                                                <div class="txt">
                                                    <h4 class="mt">Next Available Country</h4>
                                                    <h5 class="st">Singapore</h5>
                                                </div>
                                                <div class="icon-outer">
                                                    <div class="icon">
                                                        <img src="images/students-new-intakes/singapore.png" alt="">
                                                    </div>
                                                </div>
                                                <i class="fa fa-caret-right"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Malaysia Close -->

                                    <!-- Singapore Open -->

                                    <div class="tab-pane fade" id="pills-10" role="tabpanel" aria-labelledby="pills-tab-10">
                                        <div class="top-img">
                                            <img src="./images/students-new-intakes/10-main.jpg" alt="">
                                        </div>
                                        <h3 class="tab-h">Singapore</h3>
                                        <p>Singapore is Asia’s hub of design, innovation and development. Attracting over 23,000 International students, it’s one of the safest, most adaptable places to live and thrive. Now you can apply for your higher studies in Singapore with EVS Students!</p>

                                        <ul class="icon-list req-list sc-list scl-wm">
                                            <li><b>Major Intakes</b> February | August</li>
                                            <li><b>Application Closing</b> November 30th (Previous Year) | April 30th</li>
                                        </ul>

                                        <h5 class="sh mb-3">Key Advantages</h5>
                                        <ul class="icon-list req-list sm-sc-list">
                                            <li>Familiar Culture & Surrounding</li>
                                            <li>World-Recognized Qualifications</li>
                                            <li>Quality Living Standards</li>
                                        </ul>



                                        <h5 class="sh mb-3">Available Qualification Levels</h5>

                                        <div class="accordion" id="accordion-10">
                                            <div class="card">
                                                <div class="card-header" id="heading-9-2">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse-9-2" aria-expanded="true" aria-controls="collapse-9-2">
                                                        Bachelors' Degree
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse-9-2" class="collapse show" aria-labelledby="heading-9-2" data-parent="#accordion-10">
                                                    <div class="card-body">

                                                        <h3 class="in-h">Requirements</h3>
                                                        <ul class="icon-list req-list">
                                                            <li>Minimum 3 Passes in A/L Or O/L +  Foundation</li>
                                                        </ul>                                                        

                                                        <a href="#" class="arrow-link blue-arrow-link" data-toggle="modal" data-target="#student-inquiry-modal" >Submit Application <img src="images/home/arrow-b.svg" alt="arrow"></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="heading-9-3">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-9-3" aria-expanded="true" aria-controls="collapse-9-3">
                                                        Masters' Degree
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse-9-3" class="collapse" aria-labelledby="heading-9-3" data-parent="#accordion-10">
                                                    <div class="card-body">

                                                        <h3 class="in-h">Requirements</h3>
                                                        <ul class="icon-list req-list">
                                                            <li>Bachelor's Degree</li>
                                                            <li>or Postgraduate Diploma + Work Experience</li>
                                                        </ul>                                                        

                                                        <a href="#" class="arrow-link blue-arrow-link" data-toggle="modal" data-target="#student-inquiry-modal" >Submit Application <img src="images/home/arrow-b.svg" alt="arrow"></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <br></br> 
                                            <p>Singaporean Universities and Institutions are widely known for their Research Opportunities, world-ranking qualification programmes, and competitive educational nature where students are guided to face challenges of any kind. Singapore is an ideal destination for those interested in studying technology, business and design.
                                            <br></br>
                                            We offer students reputed Singaporean Institutions, including the London School of Business and Finance (LSBF) and the Management Development Institute of Singapore (MDIS). Check your Eligibility today! Register with EVS Students!</p>
                                        </div>


                                        <div class="va-banner">
                                            <div class="img">
                                                <img src="./images/students-new-intakes/visa.jpg" alt="">
                                            </div>
                                            <div class="greay-notification-box">
                                                <h3 class="heading">Online <span>Visa Assessment</span></h3>
                                                <p>Your application doesn’t have to wait any longer for process. Get in touch with our consultants online and start your Visa procedure with Zero hassle. Distance Maintained!</p>
                                                <a href="#" class="lnk" data-toggle="modal" data-target="#book-consultation-modal">Book a Consultation</a>
                                            </div>
                                        </div>


                                        <div class="next-sec">
                                            <div class="wm-box prev-box" data-tab="pills-9-tab-link">
                                                <i class="fa fa-caret-left"></i>
                                                <div class="icon-outer">
                                                    <div class="icon">
                                                        <img src="images/students-new-intakes/malaysia.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="txt">
                                                    <h4 class="mt">Previous Available Country</h4>
                                                    <h5 class="st">Malaysia</h5>
                                                </div>
                                            </div>
                                            <div class="wm-box" data-tab="pills-1-tab-link">
                                                <div class="txt">
                                                    <h4 class="mt">Next Available Country</h4>
                                                    <h5 class="st">Canada</h5>
                                                </div>
                                                <div class="icon-outer">
                                                    <div class="icon">
                                                        <img src="images/students-new-intakes/canada.png" alt="">
                                                    </div>
                                                </div>
                                                <i class="fa fa-caret-right"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Singapore Close -->

                                </div>
                                <h5 class="sh thin">Not exactly <span>what you're looking for?</span></h5>
                                        <h5 class="sbh">Drop us a message, we’ll get back to you as soon as possible.</h5>
                                <div class="tab-form">
                                    <?php include 'includes/drop_message_from.php'; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>






        <?php include 'includes/stories.php'; ?>


    </div>

    <?php include 'includes/footer.php'; ?>

    <script>
        $(document).ready(function() {
            $('#student_inquiry_page').val("New Intakes");
            $('#page_name').val("New Intakes");
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
        $('.next-sec').on('click', '.wm-box', function() {
            let link = $(this).data('tab');
            $('#' + link).trigger('click');
            $('html, body').animate({
                scrollTop: $('#middle-tabs').offset().top - 20
            }, 'slow');
        });
        $('.article-box .arrow-link').bind('click', function() {
            $('.article-box .arrow-link').removeClass('active');
           setTimeout(() => {
            $(this).addClass("active");
           }, 300);
            $('html, body').animate({
                scrollTop: $('#middle-tabs').offset().top - 20
            }, 'slow');
        });
    </script>


</body>

</html>