@extends('template')
@section('title','E-Care || Beranda')
@section('content')

    <!--====== SLIDER PART START ======-->

    <section id="home" class="slider_area site-blocks-cover" >
        <div id="carouselThree" class="carousel slide site-blocks-cover" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row" style="margin-bottom:150px;">
                        </div>
                        <div class="row" style="margin-bottom:150px;">
                            <div class="col-lg-6">
                            <a href="/TweetCare"><img src="assets/images/twitter_logo_bw_2.png"  alt="Hero"></a>
                            </div>
                            <div class="col-lg-6">
                            <a href="/InstaCare"><img src="assets/images/instagram_logo_bw_2.png" alt="Hero"></a>
                            </div>
                        </div> <!-- row -->
                    </div> 
                    <!-- container -->
    
                </div> <!-- carousel-item -->
   
            </div>
        </div>
    </section>

    <!--====== SLIDER PART ENDS ======-->
    

    
    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="faq-content mt-45">
                        <div class="about-title">
                            <center><h6 class="sub-title">A Little More About E-<span style="font-style:italic;">Care</span></h6></center>
                            <center><h4 class="title">E-<span style="font-style:italic;">Care</span></h4></center>
                        </div> <!-- faq title -->
                        <div class="about-accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text" align="justify">E-<span style="font-style:italic;">Care</span> is an application used to check the caption percentage of social media post that contain <span style="font-style:italic;">cyberbullying</span> and <span style="font-style:italic;">noncyberbullying</span> based on post caption Instagram and #Hastag Twitter<br><br>E-<span style="font-style:italic;">Care</span> has 2 menu's, Tweet<span style="font-style:italic;">Care</span> and Insta<span style="font-style:italic;">Care</span>.<br><br>Tweet<span style="font-style:italic;">Care</span> is feature for an analyzing tweet and #Hastag based on Twitter data using specific #Hastag to obtain <span style="font-style:italic;">cyberbullying</span> and <span style="font-style:italic;">cybebrullying</span>. This feature based of sentiment analysis tech with <span style="font-style:italic;">Support Vector Machine</span> algorithm as a model.<br><br>Insta<span style="font-style:italic;">Care</span> is feature for an analyzing post caption based on Instagram data to obtain <span style="font-style:italic;">cyberbullying</span> and <span style="font-style:italic;">noncyberbullying</span>. This feature based of sentiment analysis tech with <span style="font-style:italic;">Logistic Regression</span> algorithm as a model.</p>
                                        </div>
                                    </div> 
                                </div> <!-- card -->
                            </div>
                        </div> <!-- faq accordion -->
                    </div> <!-- faq content -->
                </div>
                <div class="col-lg-2"></div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    
    <!--====== TEAM START ======-->

    <section id="team" class="team-area pt-120 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-30">
                        <h3 class="title">Developer Team</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
            <div class="col-lg-2 col-sm-6"></div>
                <div class="col-lg-4 col-sm-6">
                    <div class="team-style-eleven text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="team-image">
                            <img src="assets/images/aay.jpg" alt="Team" >
                        </div>
                        <div class="team-content">
                            <div class="team-social">
                                <ul class="social">
                                    <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                                </ul>
                            </div>
                            <h4 class="team-name"><a href="#">Ahmad Farhan Hapizhudin</a></h4>
                            <span class="sub-title">Tweetcare Dev Team</span>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="team-style-eleven text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="team-image">
                            <img src="assets/images/ais.jpg" alt="Team" >
                        </div>
                        <div class="team-content" >
                            <div class="team-social" >
                                <ul class="social">
                                    <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                                </ul>
                            </div>
                            <h4 class="team-name"><a href="#">Siti Aisyah</a></h4>
                            <span class="sub-title">InstaCare Dev Team</span>
                        </div>
                    </div> <!-- single team -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TEAM  ENDS ======-->
    
    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-30">
                        <h3 class="title">Contact</h3>
                        <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-map mt-30">
                        <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="contact-info pt-30">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-1 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-map-marker"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text"> Elizabeth St, Melbourne<br>1202 Australia.</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-2 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-envelope"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">saisyah1097@gmail.com</p>
                                <p class="text">afh.farhan555@gmail.com</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-3 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-phone"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">+6283815675375</p>
                                <p class="text">+6283871048500</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                </div> <!-- row -->
            </div> <!-- contact info -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrapper form-style-two pt-115">
                        <h4 class="contact-title pb-10"><i class="lni lni-envelope"></i> Tinggalkan <span>Pesan.</span></h4>
                        
                        <form id="contact-form" action="assets/contact.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-input mt-25">
                                        <label>Name</label>
                                        <div class="input-items default">
                                            <input name="name" type="text" placeholder="Name">
                                            <i class="lni lni-user"></i>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-input mt-25">
                                        <label>Email</label>
                                        <div class="input-items default">
                                            <input type="email" name="email" placeholder="Email">
                                            <i class="lni lni-envelope"></i>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <div class="col-md-12">
                                    <div class="form-input mt-25">
                                        <label>Massage</label>
                                        <div class="input-items default">
                                            <textarea name="massage" placeholder="Massage"></textarea>
                                            <i class="lni lni-pencil-alt"></i>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="form-input light-rounded-buttons mt-30">
                                        <button class="main-btn light-rounded-two">Kirim Pesan</button>
                                    </div> <!-- form input -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- contact wrapper form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->


@endsection