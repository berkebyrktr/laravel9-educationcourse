<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>eLEARNING - eLearning HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('/')}}elearning/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('/')}}elearning/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{asset('/')}}elearning/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('/')}}elearning/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('/')}}elearning/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>eLEARNING</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="/about" class="nav-item nav-link">About</a>
                <a href="/faq" class="nav-item nav-link active">F.A.Q.</a>
                <div class="nav-item dropdown">
                    <a href="/categories" class="nav-link dropdown-toggle">Courses</a>
                    <div class="dropdown-menu fade-down m-0">
                        @foreach($data as $item)
                        <a href="/courses/{{$item->id}}" class="dropdown-item" style="text-transform:uppercase;"><b>{{$item->title}}</b></a>
                        @endforeach
                    </div>
                </div>
                <a href="/contact" class="nav-item nav-link">Contact</a>
                @auth
                    <a href="/cart" class="nav-item nav-link">My Cart</a>
                @endauth
            </div>
            @auth
                <a href="/cart" class="nav-item nav-link">My Cart</a>
                <div class="app-utility-item app-user-dropdown dropdown">
                    <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img src="{{asset('/')}}admin_panel/assets/images/user.png" alt="user profile" width="50" height="50"></a>
                    <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
                        <li><a class="dropdown-item" href="/account">Account</a></li>
                        <li><a class="dropdown-item" href="/user_courses">My Courses</a></li>
                        <li><a class="dropdown-item" href="/purchased_courses">Purchased Courses</a></li>
                        <li><a class="dropdown-item" href="/settings">Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/logout">Log Out</a></li>
                    </ul>
                </div><!--//app-user-dropdown--> 
            @endauth

            @guest
                <a href="/registeruser" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Register<i class="fa fa-arrow-right ms-3"></i></a>
                <a href="/loginuser" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Login<i class="fa fa-arrow-right ms-3"></i></a>
            @endguest
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">F.A.Q</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">F.A.Q</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('/')}}elearning/img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">F.A.Q</h6>
                    <h1 class="mb-4">Welcome to eLEARNING</h1>
                    <div class="row gy-2 gx-4 mb-4">

                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>How do I take a eLearning course?</p>
                            
                        </div>
                        Each Udemy course is created, owned and managed by the instructor(s). The foundation of each Udemy course are its lectures, which can include videos, slides, and text. In addition, instructors can add resources and various types of practice activities, as a way to enhance the learning experience of students. 
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>What do eLearning courses include?</p>
                        </div>
                        Udemy courses are entirely on-demand and they can be accessed from several different devices and platforms, including a desktop, laptop, and our mobile app. 

After you enroll in a course, you can access it by clicking on the course link you will receive in your confirmation email (provided you’re logged into your Udemy account). You can also begin the course by logging in and navigating to your My learning page. 
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Do I have to start my eLearning course at a certain time? And how long do I have to complete it?</p>
                        </div>
                        There are no deadlines to begin or complete a course. Learn more about our Lifetime Access policy.


                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Is eLearning an accredited institution? Do I receive anything after I complete a course?</p>
                        </div>
                        While Udemy is not an accredited institution, we offer skills-based courses taught by real-world experts in their field. Every approved, paid course features a certificate of completion to document your accomplishment.


                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Is there any way to preview a course?</p>
                        </div>
                        Yes! Learn how to preview a course, and review key information about it. This article outlines how you can search Udemy’s ever-growing library, and find courses you’re interested in taking.


                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>How can I pay for a course?</p>
                        </div>
                        We want you to be satisfied, so all eligible courses purchased on Udemy can be refunded within 30 days. If you are unhappy with a course, you can request a refund, provided the request meets the guidelines in our refund policy. 


                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>What if I don’t like a course I purchased?</p>
                        </div>
                        We want you to be satisfied, so all eligible courses purchased on Udemy can be refunded within 30 days. If you are unhappy with a course, you can request a refund, provided the request meets the guidelines in our refund policy. 


                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Where can I go for help?</p>
                        </div>
                        If you find you have a question about a paid course while you’re taking it, you can search for answers to your question in the Q&A or ask the instructor. 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->

    <!-- Team End -->
        

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="/about">About Us</a>
                    <a class="btn btn-link" href="/contact">Contact Us</a>    
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>100.yıl mahallesi Karabük</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0551 980 96 49</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>1910205084@ogrenci.karabuk.edu.tr</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('/')}}elearning/img/course-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('/')}}elearning/img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('/')}}elearning/img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('/')}}elearning/img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('/')}}elearning/img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('/')}}elearning/img/course-1.jpg" alt="">
                        </div>
                    </div>
    
      
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/')}}elearning/lib/wow/wow.min.js"></script>
    <script src="{{asset('/')}}elearning/lib/easing/easing.min.js"></script>
    <script src="{{asset('/')}}elearning/lib/waypoints/waypoints.min.js"></script>
    <script src="{{asset('/')}}elearning/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{asset('/')}}elearning/js/main.js"></script>
</body>

</html>