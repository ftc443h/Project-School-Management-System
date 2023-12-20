@extends('pages.layouts.index')
@section('content')
<!-- ======= About Section ======= -->
<section id="about" class="about">

    <div class="container" data-aos="fade-up">
        <div class="row gx-0">

            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="content">
                    <h3>About</h3>
                    <h2>School Management System</h2>
                    <p>
                        Welcome to our School Management System, where efficiency meets quality education. We provide integrated solutions to help your school manage all aspects of operations easily. Providing innovation in the world of education, our School Management System is designed to help educational institutions manage student data, lesson schedules, and school administration in a smarter and more effective way.
                    </p>
                    <div class="text-center text-lg-start">
                        <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Read More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{ asset('pages/assets/img/about.jpg') }}" class="img-fluid" alt="">
            </div>

        </div>
    </div>

</section><!-- End About Section -->

<!-- ======= Classroom Scheduler Section ======= -->
<section id="classroom" class="values">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Classroom</h2>
            <p>Table Classroom Scheduler</p>
        </header>

        <div class="row">

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="box">
                    <img src="{{ asset('pages/assets/img/values-1.png') }}" class="img-fluid" alt="">
                    <h3>Laravel</h3>
                    <p class="text-justify">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>
                    <a href="{{ route('register') }}" class="btn btn-success btp">Register</a>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                <div class="box">
                    <img src="{{ asset('pages/assets/img/values-2.png') }}" class="img-fluid" alt="">
                    <h3>Java</h3>
                    <p class="text-justify">Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>
                    <a href="{{ route('register') }}" class="btn btn-success btp">Register</a>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                <div class="box">
                    <img src="{{ asset('pages/assets/img/values-3.png') }}" class="img-fluid" alt="">
                    <h3>C++</h3>
                    <p class="text-justify">Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
                    <a href="{{ route('register') }}" class="btn btn-success btp">Register</a>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                <div class="box">
                    <img src="{{ asset('pages/assets/img/values-3.png') }}" class="img-fluid" alt="">
                    <h3>Cyber Security</h3>
                    <p class="text-justify">Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
                    <a href="{{ route('register') }}" class="btn btn-success btp">Register</a>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                <div class="box">
                    <img src="{{ asset('pages/assets/img/values-3.png') }}" class="img-fluid" alt="">
                    <h3>Python</h3>
                    <p class="text-justify">Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
                    <a href="{{ route('register') }}" class="btn btn-success btp">Register</a>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                <div class="box">
                    <img src="{{ asset('pages/assets/img/values-3.png') }}" class="img-fluid" alt="">
                    <h3>Network Engineer</h3>
                    <p class="text-justify">Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
                    <a href="{{ route('register') }}" class="btn btn-success btp">Register</a>
                </div>
            </div>

        </div>

    </div>

</section><!-- End Values Section -->

<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

        <div class="row gy-4">

            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <div>
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Happy Clients</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                    <div>
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Projects</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="bi bi-headset" style="color: #15be56;"></i>
                    <div>
                        <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Hours Of Support</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="bi bi-people" style="color: #bb0852;"></i>
                    <div>
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Hard Workers</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Counts Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Testimonials</h2>
            <p>What they are saying about us</p>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        </p>
                        <div class="profile mt-auto">
                            <img src="{{ asset('pages/assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                        </p>
                        <div class="profile mt-auto">
                            <img src="{{ asset('pages/assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        </p>
                        <div class="profile mt-auto">
                            <img src="{{ asset('pages/assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                        </p>
                        <div class="profile mt-auto">
                            <img src="{{ asset('pages/assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                        </p>
                        <div class="profile mt-auto">
                            <img src="{{ asset('pages/assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

</section><!-- End Testimonials Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="team">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Team</h2>
            <p>Our School Management System Team</p>
        </header>

        <div class="row gy-4">

            <div class="col-lg-6 col-md-6 col-sm-6 col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                    <div class="member-img">
                        <img src="{{ asset('pages/assets/img/team/patan.png') }}" class="img-fluid" alt="">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Fatchan Muhammad Hakim</h4>
                        <span>Leader</span>
                        <p>"In our diversity of ideas and unwavering passion, our team is a pioneer united to create a monument of excellence. We are the builders of the future of education."</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="member">
                    <div class="member-img">
                        <img src="{{ asset('pages/assets/img/team/rani.png') }}" class="img-fluid" alt="">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Rani Kurniawati</h4>
                        <span>Member</span>
                        <p>"Just as a beautiful puzzle is formed from pieces that complement each other, every contribution on our team is an irreplaceable piece."</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                <div class="member">
                    <div class="member-img">
                        <img src="{{ asset('pages/assets/img/team/bagass.png') }}" class="img-fluid" alt="">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Bagas Adi Kurniawan</h4>
                        <span>Member</span>
                        <p>"In togetherness, we paint the educational canvas with the colors of innovation. Each team member is the brush that creates an extraordinary vision."</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                <div class="member">
                    <div class="member-img">
                        <img src="{{ asset('pages/assets/img/team/delaa.png') }}" class="img-fluid" alt="">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Dela Septriani</h4>
                        <span>Member</span>
                        <p>"With strong determination and burning passion, we are the bearers of change. Every line of code we write is a step forward in building a bridge to better education."</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
                <div class="member">
                    <div class="member-img">
                        <img src="{{ asset('pages/assets/img/team/Satriya.png') }}" class="img-fluid" alt="">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Satriya Yoga Madhasatya</h4>
                        <span>Member</span>
                        <p>"In irreplaceable harmony, we are the orchestra that composes a symphony of success. Each individual on our team is a player who makes a unique contribution to achieving a common goal."</p>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section><!-- End Team Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Contact</h2>
            <p>Contact Us</p>
        </header>

        <div class="row gy-4">

            <div class="col-lg-6">

                <div class="row gy-4">
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Address</h3>
                            <p>A108 Adam Street,<br>New York, NY 535022</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-telephone"></i>
                            <h3>Call Us</h3>
                            <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-envelope"></i>
                            <h3>Email Us</h3>
                            <p>info@example.com<br>contact@example.com</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-clock"></i>
                            <h3>Open Hours</h3>
                            <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">
                <form action="forms/contact.php" method="post" class="php-email-form">
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                        </div>

                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>

                            <button type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section><!-- End Contact Section -->

@endsection