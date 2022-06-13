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
                <a href="{{route('home')}}" class="navbar-brand m-0 p-0">
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

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-3">Services</h1>
        </div>
    </div>
    <!-- Page Header End -->


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