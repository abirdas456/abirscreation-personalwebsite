<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Abir das- Full Stack Web Developer</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('frontend/assets/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('frontend/assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!--Spinner Start--> 
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <h1 class="fw-bold text-primary t-p m-0"><i class="fa fa-laptop-code me-3">Welcome to </i>Abir's Creation </h1>
    </div>
     <!--Spinner End--> 


    <!-- Topbar Start 
    <div class="container-fluid bg-light px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="small text-secondary" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="small text-secondary" href="#">Career</a></li>
                    <li class="breadcrumb-item"><a class="small text-secondary" href="#">Terms</a></li>
                    <li class="breadcrumb-item"><a class="small text-secondary" href="#">Privacy</a></li>
                </ol>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn-square text-primary border-end rounded-0" href="https://facebook.com/freewebsitecode/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn-square text-primary border-end rounded-0" href="https://freewebsitecode.com/"><i class="fab fa-twitter"></i></a>
                    <a class="btn-square text-primary border-end rounded-0" href="https://freewebsitecode.com/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn-square text-primary pe-0" href="https://youtube.com/freewebsitecode/"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
Topbar End -->
<!--#################################-->


    <!-- Brand & Contact Start -->
    <div class="container-fluid py-4 px-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="row align-items-center top-bar">
            <div class="col-lg-4 col-md-12 text-center text-lg-start">
                <a href="" class="navbar-brand m-0 p-0">
                    <h1 class="fw-bold text-primary t-p m-0"><i class="fa fa-laptop-code me-3"></i>Abir's Creation </h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
            </div>
            <div class="col-lg-8 col-md-7 d-none d-lg-block">
                <div class="row">
                    <div class="col-4">
                        <div class="d-flex align-items-center justify-content-end">
                            
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex align-items-center justify-content-end">
                            
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="flex-shrink-0 btn-lg-square border rounded-circle">
                                <i class="far fa-envelope text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <p class="mb-2">Email Me</p>
                                <h6 class="mb-0">abirdas.160410107137@gmail.com</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand & Contact End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn bg-color" data-wow-delay="0.1s">
        <a href="#" class="navbar-brand ms-3 d-lg-none">MENU</a>
        <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav me-auto p-3 p-lg-0">
                <a href="{{route('home')}}" class="nav-item nav-link">Home</a>
                <a href="{{route('service')}}" class="nav-item nav-link">Services</a>
                <a href="{{route('review')}}" class="nav-item nav-link">Review from my student</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">My Own Projects</a>
                    <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0">
                        <a href="https://abirdas456.github.io/Restaurant_abirdas/" class="dropdown-item">Previous personal website</a>
                        <a href="https://abirdas456.github.io/Restaurant_abirdas/" class="dropdown-item">Project 1</a>
                        <a href="https://abirdas456.github.io/solotourism_abirdas/" class="dropdown-item">Project 2</a>
                        <a href="https://abirdas456.github.io/activebox_psdtohtml_abirdas/" class="dropdown-item">Project 3</a>
                        <a href="https://abirdas456.github.io/minimo_abirdas/" class="dropdown-item">Project 4</a>
                    </div>
                </div>
                <a href="{{route('contact')}}" class="nav-item nav-link">Contact With Me</a>
                <a href="https://drive.google.com/file/d/1Ky3fgzgdIFnw04Ih_FJlqcwV1ur4DfU-/view?usp=sharing" class="nav-item nav-link">Extracurricular Activity</a>
            </div>
            <a href="{{route('signup')}}" class="btn btn-sm btn-light rounded-pill py-2 px-4 d-none d-lg-block">Register</a> &nbsp; &nbsp;
            <a href="{{route('login')}}" class="btn btn-sm btn-light rounded-pill py-2 px-4 d-none d-lg-block">Log In</a>
            
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('frontend/assets/img/c-3.jpg')}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">A Full Stack Web Developer</h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">Frontend, Backend & Database</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('frontend/assets/img/c-2.jpg')}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Graphics & UI/UX Designer</h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">Creative & Innovative Content</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('frontend/assets/img/c-1.jpg')}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">A Data Analyzer</h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">Descriptive and Predictive Data Analysis</h1>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->



    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="img-border">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/m1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">About Myself</h6>
                        <h1 class="display-6 mb-4"><span class="text-primary">A Full Stack Web Developer || A Graphics  & UI/UX Designer || Data Visualization Expert</span></h1>
                        <p>Hi! My name is <b>Abir Das</b> & Welcome to my personal website. I am a FULL STACK WEB DEVELOPER(Front End & Back End Design).In my design I use <b>HTML,CSS,JAVASCRIPT,JQUERY,PHP & mysql</b>. I also use different types of data structure in my projects.</p>
                        <p class="mb-4">I am expert in manking<b>LOGOS, BANNER,SOCIAL MEDIA POST,ANIMATION LOGO/POST,BUSINESS CARD</b>. I work with almost 20 client and made several types of design for them.Most Importantly, I am a data analyzer as well as data presenter. I am expert in <b>MS word , Power Point, MS Excel & Power BI.</b> etc. I have so much enthusiasm of learning data structure and using them in real life application. </p>
                        <div class="d-flex align-items-center mb-4 pb-2">
                            <img class="flex-shrink-0 rounded-circle" src="{{asset('frontend/assets/img/m1.jpg')}}" alt="" style="width: 50px; height: 50px;">
                            <div class="ps-4">
                                <h6>Abir Das</h6>
                                <small>BE in Computer Engineering(Gujarat Technological University- ICCR Scholar)</small>
                            </div>
                        </div>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">More About Me</h6>
                        <h1 class="display-6 mb-4">Why You should choose me? Learn About Us!</h1>
                        <p class="mb-4">First of all, I believe combination of practical and theoratical knowledge can help a developer to make more realiable software & I think I can do that more effectively. I also prefer to use different tyes of data structure which will make my software more user friendly.</p>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Front End Developement</p>
                                        <p class="mb-2">90%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Backend Development</p>
                                        <p class="mb-2">70%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Graphics design & Digital Marketing</p>
                                        <p class="mb-2">80%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/about.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/a-1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">Coding & More</h6>
                        <h1 class="display-6 mb-4">Coding languages that I know</h1>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Java</p>
                                        <p class="mb-2">75%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">PHP</p>
                                        <p class="mb-2">70%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">C,C++</p>
                                        <p class="mb-2">70%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Javascript</p>
                                        <p class="mb-2">80%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Data structure & Algorithm</p>
                                        <p class="mb-2">65%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Feature End -->

    

    


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">My Services</h6>
                <h1 class="display-6 mb-4">I am here to provide different services with minimal cost and Higher Quality.</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="{{asset('frontend/assets/img/s3.jpg')}}" alt="">
                        <h4 class="mb-0">FrontEnd Design in Web Development</h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="{{asset('frontend/assets/img/s2.jpg')}}" alt="">
                        <h4 class="mb-0">Backend Design in Web Development</h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="{{asset('frontend/assets/img/s1.jpg')}}" alt="">
                        <h4 class="mb-0">Data Analysis with PowerBI & MS Excel</h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="{{asset('frontend/assets/img/s-6.jpg')}}" alt="">
                        <h4 class="mb-0">Graphics Design with Business Analysis</h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="{{asset('frontend/assets/img/s4.jpg')}}" alt="">
                        <h4 class="mb-0">Digital Marketing with SEO support</h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="{{asset('frontend/assets/img/s-5.jpg')}}" alt="">
                        <h4 class="mb-0">Social Media Marketing & Advertising</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Details of Working</h6>
                <h1 class="display-6 mb-4">I worked with many local and foreign Clients and they loved my work.</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-certificate fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Total Work Experience</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">3</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-users-cog fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Total Number Students Teach</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">17</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-users fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Number of Satisfied Clients</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">20</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-check fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Number of Projects Done</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">30</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    


    <!-- Project Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">More About My Work</h6>
                <h1 class="display-6 mb-4">Learn More About my working area in detail.</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="project-item border rounded h-100 p-4" data-dot="01">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="{{asset('frontend/assets/img/p1.jpg')}}" alt="">
                        <a href="{{asset('frontend/assets/img/p1.jpg')}}" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>Front End Design</h6>
                    <span>Using HTML, CSS, BOOTSTRAP, JAVASCIPT, JQUERY, JSON</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="02">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="{{asset('frontend/assets/img/p2.jpg')}}" alt="">
                        <a href="{{asset('frontend/assets/img/p2.jpg')}}" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>Backend Development</h6>
                    <span>Using PHP,java & different Api and library</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="03">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="{{asset('frontend/assets/img/p3.jpg')}}" alt="">
                        <a href="{{asset('frontend/assets/img/p3.jpg')}}" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>Database Management</h6>
                    <span>I use mysql and mongodb for the database management.</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="04">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="{{asset('frontend/assets/img/p4.jpg')}}" alt="">
                        <a href="{{asset('frontend/assets/img/p4.jpg')}}" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>Graphics Design</h6>
                    <span>Expert in Logo,Banner,Business card,Brochure,Flyer making.</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="05">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="{{asset('frontend/assets/img/p5.jpg')}}" alt="">
                        <a href="{{asset('frontend/assets/img/p5.jpg')}}" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>Cv/Resume</h6>
                    <span>Expert in CV making with professional touch.</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="06">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="{{asset('frontend/assets/img/p6.jpg')}}" alt="">
                        <a href="{{asset('frontend/assets/img/p6.jpg')}}" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>Data Analysis</h6>
                    <span>Data analysis with POWER BI & MICROSOFT EXCEL</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="07">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="{{asset('frontend/assets/img/p7.jpg')}}" alt="">
                        <a href="{{asset('frontend/assets/img/p7.jpg')}}" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>Social media marketing</h6>
                    <span>Facebook,Instagram,Twitter - content creating</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="08">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="{{asset('frontend/assets/img/p8.jpg')}}" alt="">
                        <a href="{{asset('frontend/assets/img/p8.jpg')}}" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>Wordpress Theme </h6>
                    <span>Expert in Wordpress theme and plugin customization. </span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="09">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="{{asset('frontend/assets/img/p9.jpg')}}" alt="">
                        <a href="{{asset('frontend/assets/img/p9.jpg')}}" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>Content Writing</h6>
                    <span>I am a Professional Content writter with systemetic approach.</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="10">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="{{asset('frontend/assets/img/p10.jpg')}}" alt="">
                        <a href="{{asset('frontend/assets/img/p10.jpg')}}" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>Coding Tutor</h6>
                    <span>I teach students diffent coding languages.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->
    
    <!-- Testimonial Start 
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Review</h6>
                <h1 class="display-6 mb-4">Shared Experience From My Students</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="{{asset('frontend/assets/img/m2.jpg')}}" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Ankita Bhoumik</h5>
                            <span>Student(Computer Engineering-National Institute of Technology Puducherry , India)</span>
                        </div>
                    </div>
                    <p class="mb-0">I am a student of abir dada. He is so good at teaching. He taught me c programing,  Microsoft word, Microsoft excel,  making powerpoint presentation and basic things of computer. His teaching method is so good. I am so proud of being a student of him.</p>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="{{asset('frontend/assets/img/m-3.jpg')}}" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Audrija Chowdhury</h5>
                            <span>Student(Computer Engineering-Sheridan College, Canada)</span>
                        </div>
                    </div>
                    <p class="mb-0">I have learnt about the coding programming of Java and C . Not only these two programming languages I have learnt but also I have gained knowledge of HTML and CSS( Web development) . He is such a tutor who teaches all the topics very well and I am blessed to have such a tutor in my life.</p>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="{{asset('frontend/assets/img/m4.jpg')}}" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Umme Wara Jihan</h5>
                            <span>Student(HSC-12 TH Class-Bangladesh Mahila Samiti Girls' High School & College)</span>
                        </div>
                    </div>
                    <p class="mb-0">As a teacher, I really find him so co-operative and excellent presenter. He is my ICT & ENGLISH teacher. I got a deep knowledge of coding language and web design from him which will help me in my future life. </p>
                </div>
                
            </div>
        </div>
    </div>
     Testimonial End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Educational Details</h6>
                <h1 class="display-6 mb-4">My Educational Information</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="{{asset('frontend/assets/img/3.jpg')}}" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">BE Engineering</h5>
                            <span>Gujarat Technological University India</span>
                        </div>
                    </div>
                    <p class="mb-0">I have completed my Bachelor Engineering graduation from Gujarat Technological University under ICCR scholarship. I achieved First Class with Distinction(CGPA-8.56/Indian standard).</p>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="{{asset('frontend/assets/img/1.jpg')}}" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Higher Secondary Certificate</h5>
                            <span>BAF Shaheen College Chattogram</span>
                        </div>
                    </div>
                    <p class="mb-0">I have completed my Higher Secondary Certificate from BAF Shaheen College Chattogram an institution run by Bangladesh Air Force. I achieved 82% score  (Bangladeshi garde standard).</p>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="{{asset('frontend/assets/img/2.jpg')}}" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Secondary School Certificate</h5>
                            <span>Chattogram City  Corporation  Municipal  Model  School  and college</span>
                        </div>
                    </div>
                    <p class="mb-0">I  have  completed  my  Secondary School Certificate from Chattogram City  Corporation  Municipal  Model  School  and college situated in Chattogram. I achieved GPA  -  5.0  / 5.0 (Bangladeshi  garde  standard). </p>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>10 P.K sen lane sadarghat, Chattogram, Bangladesh</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+88-0174-2790092</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>abir.ayushmann<br>@gmail.com.com</p>
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Social Media Link</h5>
                    <a class="btn btn-link" href="https://www.facebook.com/abirdas.456"><i class="fab fa-facebook-f"></i> facebook</a>
                    <a class="btn btn-link" href="https://www.linkedin.com/in/abirdas456/"><i class="fab fa-linkedin-in"></i> Linkdin</a>
                    <a class="btn btn-link" href="https://www.instagram.com/ayushmannabir/"><i class="fab fa-instagram"></i>  Instagram</a>
                    <a class="btn btn-link" href="https://www.behance.net/abirdas97"><i class="fab fa-behance"></i> Behance</a>
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Gallery</h5>
                    <div class="row g-2">
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{asset('frontend/assets/img/project-1.jpg')}}" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{asset('frontend/assets/img/project-2.jpg')}}" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{asset('frontend/assets/img/project-3.jpg')}}" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{asset('frontend/assets/img/project-4.jpg')}}" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{asset('frontend/assets/img/project-5.jpg')}}" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{asset('frontend/assets/img/project-6.jpg')}}" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Email Me</h5>
                    <p>Want to make a relationship? subscribe and lets have a chat.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <form method="POST" action="{{route('subscribe.add')}}">
                        @csrf
                            
                        <input name="email" class="form-control bg-transparent border-secondary w-100 py-3 ps-4 pe-5" type="email" placeholder="Your email">
                        <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Subcribe</button>
                    </form>

                    </div>
                </div>
                

            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="https://www.facebook.com/abirdas.456">Abir Das</a>, All Right Reserved. 
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend/assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/lightbox/js/lightbox.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>

</html>