<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Agency</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet"
          type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet"/>


</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/navbar-logo.svg" alt=""/></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ml-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger"
                                        href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger"
                                        href="#portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a>
                </li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Our amazing team</a>
                </li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger"
                                        href="#contact">Contact us</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">{{ $greeting->subheading }}</div>
        <div class="masthead-heading text-uppercase">{{ $greeting->heading }}</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
    </div>
</header>
<!-- Services-->
<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
        </div>
        <div class="row text-center">
            @foreach($services as $service)
                <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-2x text-primary"></i>
                            <i class="{{ $service->icon }} fa-stack-1x fa-inverse"></i>
                        </span>
                    <h4 class="my-3">{{ $service->department }}</h4>
                    <p class="text-muted">{{ $service->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Portfolio</h2>
        </div>
        <div class="row">
            @foreach($projects as $project)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item" route="{{ route('projects.ajax', $project->id) }}">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="{{ $project->path_img }}" alt=""/>
                        </a>
                        <div class="portfolio-caption">
                            <div
                                class="portfolio-caption-heading">{{ $project->client->title }}</div>
                            <div
                                class="portfolio-caption-subheading text-muted">{{ $project->category->title }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- About-->
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">About</h2>
        </div>
        <ul class="timeline">
            @foreach($stories as $story)
                @if($story->id % 2 == 0)
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ $story->path_img }}"
                                                         alt=""/>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>{{ $story->time }}</h4>
                                <h4 class="subheading">{{ $story->title }}</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">{{ $story->content }}</p></div>
                        </div>
                    </li>
                @else
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ $story->path_img }}"
                                                         alt=""/>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>{{ $story->time }}</h4>
                                <h4 class="subheading">{{ $story->title }}</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">{{ $story->content }}</p></div>
                        </div>
                    </li>
                @endif
            @endforeach
            <li class="timeline-inverted"><a href="#contact">
                    <div class="timeline-image">
                        <h4>
                            Be Part
                            <br/>
                            Of Our
                            <br/>
                            Story!
                        </h4>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</section>
<!-- Team-->
<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Our amazing team</h2>
        </div>
        <div class="row">
            @foreach($workers as $worker)
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ $worker->path }}" alt=""/>
                        <h4>{{ $worker->name }}</h4>
                        <p class="text-muted">{{ $worker->position }}</p>
                        <a class="btn btn-dark btn-social mx-2" href="{{ $worker->twitter }}"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="{{ $worker->facebook }}"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="{{ $worker->linkedin }}"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Clients-->
<div class="py-5">
    <div class="container">
        <div class="row">
            @foreach($clients as $client)
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="{{ $client->path }}"><img class="img-fluid d-block mx-auto" src="{{ $client->logotype }}"
                                                       alt=""/></a>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contact us</h2>
        </div>
        <div class="success-added d-none">
            <div class="alert alert-success">
                <strong>Your message was successfully sent!</strong>
            </div>
        </div>
        <form action="{{ route('customers.store') }}" method="post" id="contactForm" name="sentMessage"
              class="customers-form"
              novalidate="novalidate">
            @csrf
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <input name="name" class="form-control name-text" id="name" type="text"
                               placeholder="Your Name *"
                               required="required" data-validation-required-message="Please enter your name.">
                        <p class="help-block text-danger"></p>
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input name="email" class="form-control email-text" id="email" type="email"
                               placeholder="Your Email *"
                               required="required" data-validation-required-message="Please enter your email address.">
                        <p class="help-block text-danger"></p>
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-md-0">
                        <input name="phone" class="form-control phone-text" id="phone" type="tel"
                               placeholder="Your Phone *"
                               required="required" data-validation-required-message="Please enter your phone number.">
                        <p class="help-block text-danger"></p>
                        @error('phone')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <textarea name="message" class="form-control message-text" id="message"
                                  placeholder="Your Message *"
                                  required="required"
                                  data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                        @error('message')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div id="success"></div>
                <button type="submit" class="btn btn-primary btn-xl text-uppercase btn-add-customers"
                        route="{{ route('customers.store') }}" id="sendMessageButton">Send
                    Message
                </button>
            </div>
        </form>
    </div>
</section>
<!-- Footer-->

<!-- Portfolio Modals-->
<!-- Modal 1-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal"/></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <div class="project-modal-body">
                                <h2 class="text-uppercase"></h2>
                                <img class="img-fluid d-block mx-auto" src="" alt=""/>
                                <p></p>
                                <ul class="list-inline">
                                    <li>Date:</li>
                                    <li>Client:</li>
                                    <li>Category:</li>
                                </ul>
                            </div>
                            <!-- Project Details Go Here-->

                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times mr-1"></i>
                                Close Project
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="assets/mail/jqBootstrapValidation.js"></script>
<script src="assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/custom.js"></script>


</body>
</html>
