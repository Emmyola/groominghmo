<?php include_once("conponent/header.php"); ?>

<body>
    <!-- Topbar Start -->
    <?php include_once("conponent/topbar.php"); ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
     
     <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="index.php" class="navbar-brand">
                    <!-- <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-clinic-medical me-2"></i>Medinova</h1> -->
                    <img src="img/groominglogo.png" alt="Grooming">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link active">About</a>
                        <a href="service.php" class="nav-item nav-link">Service</a>
                        <a href="price.php" class="nav-item nav-link">Plans</a>
                        <a href="blog.php" class="nav-item nav-link">Blog</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                
                                <a href="detail.php" class="dropdown-item">Blog Detail</a>
                                <a href="team.php" class="dropdown-item">The Team</a>
                                <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                                <a href="appointment.php" class="dropdown-item">Appointment</a>
                                <a href="search.php" class="dropdown-item">Search</a>
                            </div>
                        </div> -->
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


     <!-- About Start -->
     <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="img/family-image.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">About Us</h5>
                        <h1 class="display-4 text-primary">Best Medical Care For Yourself and Your Family</h1>
                    </div>
                    <p> <strong class="text-primary">Grooming Health Management Limited(GHML) </strong> is a dynamic and responsive health maintenance organization powered by technology and leveraging on data analytics to offer our valuable clients improved health care delivery services. As a reputable HMO, we are committed to delivering high-quality healthcare solutions that prioritize the well-being of our clients.
                        In today's fast-paced world, ensuring comprehensive healthcare coverage for employees is not only essential for their well-being but also for fostering a productive and thriving work environment. At GHML, we have robust healthcare benefit and we are committed to delivering top-tier Healthcare services tailored to meet the unique needs of your esteemed organization.</p>
                        <div class="row g-3 pt-3">
                        <div class="col-sm-3 col-6">
                            <div class="bg-primary text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-user-md text-white mb-3"></i>
                                <h6 class="mb-0">Accurate<small class="d-block text-white">Provider</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-primary text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-procedures text-white mb-3"></i>
                                <h6 class="mb-0">Emergency<small class="d-block text-white">Services</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-primary text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-microscope text-white mb-3"></i>
                                <h6 class="mb-0">Accurate<small class="d-block text-white">Testing</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-primary text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-ambulance text-white mb-3"></i>
                                <h6 class="mb-0">Stand-by<small class="d-block text-white">Ambulance</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

        <!-- mission and vision -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row gx-4">
                    <div class="col-lg-7">
                        <div class="row g-3 pt-3">
                            <div class="col-sm-3 col-6">
                                <div class="bg-primary text-center rounded-circle py-4">
                                    <i class="fa fa-3x fa-user-md text-white mb-3"></i>
                                    <h6 class="mb-0">Accurate<small class="d-block text-white">Provider</small></h6>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="bg-primary text-center rounded-circle py-4">
                                    <i class="fa fa-3x fa-procedures text-white mb-3"></i>
                                    <h6 class="mb-0">Emergency<small class="d-block text-white">Services</small></h6>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="bg-primary text-center rounded-circle py-4">
                                    <i class="fa fa-3x fa-microscope text-white mb-3"></i>
                                    <h6 class="mb-0">Accurate<small class="d-block text-white">Testing</small></h6>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="bg-primary text-center rounded-circle py-4">
                                    <i class="fa fa-3x fa-ambulance text-white mb-3"></i>
                                    <h6 class="mb-0">Stand-by<small class="d-block text-white">Ambulance</small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mission and vision ends -->
    <!-- Search Start -->
    <!-- <div class="container-fluid bg-primary my-5 py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">Find A Doctor</h5>
                <h1 class="display-4 mb-4">Find A Healthcare Professionals</h1>
                <h5 class="text-white fw-normal">Duo ipsum erat stet dolor sea ut nonumy tempor. Tempor duo lorem eos sit sed ipsum takimata ipsum sit est. Ipsum ea voluptua ipsum sit justo</h5>
            </div>
            <div class="mx-auto" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <select class="form-select border-primary w-25" style="height: 60px;">
                        <option selected>Department</option>
                        <option value="1">Department 1</option>
                        <option value="2">Department 2</option>
                        <option value="3">Department 3</option>
                    </select>
                    <input type="text" class="form-control border-primary w-50" placeholder="Keyword">
                    <button class="btn btn-dark border-0 w-25">Search</button>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Search End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Our Doctors</h5>
                <h1 class="display-4 text-primary">Qualified Healthcare Professionals</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative">
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="img/team-1.jpg" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4 text-primary text-primary">
                                <h3 class="text-primary">Doctor Name</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">Cardiology Specialist</h6>
                                <p class="m-0">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="img/team-2.jpg" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4 text-primary">
                                <h3 class="text-primary">Doctor Name</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">Cardiology Specialist</h6>
                                <p class="m-0">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="img/team-3.jpg" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4 text-primary">
                                <h3 class="text-primary">Doctor Name</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">Cardiology Specialist</h6>
                                <p class="m-0">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Team End -->
    <?php include_once("conponent/footer.php"); ?>
</body>

</html>