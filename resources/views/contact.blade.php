@include('layout.header')


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


 <!-- Contact Start -->
<div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
    <div class="container contact px-lg-0">
        <div class="row g-0 mx-lg-0">

            <!-- Contact Form -->
            <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-0">
                    <h6 class="text-primary">Contact Us</h6>
                    <h1 class="mb-4">Get In Touch With Our Team</h1>

                    <p class="mb-4">
                        Have questions about solar panel mounting structures, fabrication,
                        or project support? Fill out the form below and our experts will
                        get back to you shortly.
                    </p>

                    <!-- Formspree Form -->
                    <form id="contactForm" action="https://formspree.io/f/YOUR_FORM_ID" method="POST">
                        <div class="row g-3">

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control" id="name"
                                           placeholder="Your Name" required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control" id="email"
                                           placeholder="Your Email" required>
                                    <label for="email">Your Email</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" name="subject" class="form-control" id="subject"
                                           placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="message" id="message"
                                              placeholder="Leave a message here"
                                              style="height: 120px" required></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>

                            <!-- Optional hidden subject -->
                            <input type="hidden" name="_subject"
                                   value="New Inquiry - Solar Panel Structure Website">

                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">
                                    Send Message
                                </button>
                            </div>

                        </div>
                    </form>
                    <!-- End Form -->

                </div>
            </div>

            <!-- Map Section -->
            <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                  <iframe class="position-absolute w-100 h-100"
    style="object-fit: cover; border:0;"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.9651502705788!2d77.43184087528786!3d28.600822275682077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cef29ba0e1a4f%3A0x63538614dd1688af!2sNX%20One%20Avenue.!5e0!3m2!1sen!2sin!4v1766470782885!5m2!1sen!2sin"
    allowfullscreen
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
</iframe>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Contact End -->



  @include('layout.footer')