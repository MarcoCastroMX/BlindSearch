@extends("layouts.skeleton")

@section("body")
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <a class="navbar-brand" href="/">BlindSearch</a>
            <div class="container">
                <a class="btn btn-primary" href="http://blindsearch.test/login">Log In</a>
                <a class="btn btn-primary" href="http://blindsearch.test/register">Register</a>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="mb-5">You deserve be more independent</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Icons Grid-->
        <section class="features-icons bg-light text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>
                            <h3>Fully Responsive</h3>
                            <p class="lead mb-0">Made having in mind the necessities of blind people.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-layers m-auto text-primary"></i></div>
                            <h3>Multiplattform</h3>
                            <p class="lead mb-0">Made in Web and Android.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
                            <h3>Easy to Use</h3>
                            <p class="lead mb-0">Ready to use with screen readers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Image Showcases-->
        <section class="showcase">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/bg-showcase-1.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Android Usage</h2>
                        <p class="lead mb-0">You can use our app on android, this app can do a big amount of things, the most important is the search tab, that can make your external device start to ring making the action to find it more easily. </p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/img/bg-showcase-2.jpg')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>Experienced Programmers</h2>
                        <p class="lead mb-0">All of our products are made in the newest programming lenguages with the best techniques, making us with the advantage againts our competidors in this sector.</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/bg-showcase.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Easy to Use For Blind People</h2>
                        <p class="lead mb-0">App and Web page made with the correct direction, towards to give to blind people a perfect experience.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials-->
        <section class="testimonials text-center bg-light">
            <div class="container">
                <h2 class="mb-5">BlindSearch Team</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/Team-1.jpeg" alt="..." />
                            <h5>Marco Castro</h5>
                            <p class="font-weight-light mb-0">"App Developer"</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/Team-2.png" alt="..." />
                            <h5>Erick Bañuelos</h5>
                            <p class="font-weight-light mb-0">"Leader"</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/Team-3.png" alt="..." />
                            <h5>Tonatiuh Tamayo</h5>
                            <p class="font-weight-light mb-0">"Front End Developer"</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to Action-->
        <section class="call-to-action text-white text-center" id="signup">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <h2 class="mb-4">Ready to get started? Register now!</h2>
                        <a class="btn btn-primary" href="http://blindsearch.test/register">Register</a>
                    </div>
                </div>
            </div>
        </section>
@endsection

