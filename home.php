<?php include "userheader.php" ?>

    <div id="demo" class="carousel slide" data-bs-ride="carousel" data-interval="1000">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./Images/img2.webp" alt="Sale" class="d-block" style="width:100%; height:80vh;">
            </div>
            <div class="carousel-item">
                <img src="./Images/img3.png" alt="Sale" class="d-block" style="width:100%; height:80vh;">
            </div>
            <div class="carousel-item">
                <img src="./Images/img4.webp" alt="Sale" class="d-block" style="width:100%; height:80vh;">
            </div>
            <div class="carousel-item">
                <img src="./Images/img5.webp" alt="Sale" class="d-block" style="width:100%; height:80vh;">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <hr class="hr hr-blurry bg-dark" />

    

    <div class="container bg-light overflow-auto" id="about">
        <h2 align = "center" class="text-warning">About Us</h2>
        <p>At your clothing store, we pride ourselves on providing customers with stylish and high-quality fashion choices. Our selection includes clothing items for men, women, and children, with a wide variety of sizes and styles to choose from.</p>

        <p>We understand that fashion is a personal expression of one's individuality, and that's why we aim to offer a diverse range of clothing options to suit everyone's tastes. Whether you're looking for casual wear, formal wear, or something in between, we have something for you.</p>

        <p>Our team is dedicated to providing exceptional customer service, and we go above and beyond to ensure that every customer has a positive shopping experience. We believe in creating a welcoming and inclusive environment where customers can feel comfortable exploring our store and trying on different outfits.</p>

        <p>We also take pride in our commitment to sustainability. We source our clothing from suppliers who prioritize eco-friendly practices and materials, and we strive to minimize our environmental impact through recycling and energy-efficient operations.</p>

        <p>Overall, we are passionate about fashion and providing our customers with an exceptional shopping experience. We believe that everyone deserves to feel confident and stylish in their clothing, and we're here to help you achieve that. Come visit us at our clothing store and let us help you find your perfect look.</p>

            <section class="text-center">
                <div class="row">
                  <div class="col-lg-3 col-md-6 mb-5 mb-md-5 mb-lg-0 position-relative">
                    <i class="fa fa-phone fa-3x text-warning mb-4"></i>
                    <h5 class="text-warning fw-bold mb-3">24 Hours</h5>
                    <h6 class="fw-normal mb-0">On Call Service</h6>
                    <div class="vr vr-blurry position-absolute my-0 h-100 d-none d-md-block top-0 end-0"></div>
                  </div>
              
                  <div class="col-lg-3 col-md-6 mb-5 mb-md-5 mb-lg-0 position-relative">
                    <i class="fa fa-image fa-3x text-warning mb-4"></i>
                    <h5 class="text-warning fw-bold mb-3">Customize Clothes</h5>
                    <h6 class="fw-normal mb-0">On Your Demand</h6>
                    <div class="vr vr-blurry position-absolute my-0 h-100 d-none d-md-block top-0 end-0"></div>
                  </div>
              
                  <div class="col-lg-3 col-md-6 mb-5 mb-md-0 position-relative">
                    <i class="fa fa-users fa-3x text-warning mb-4"></i>
                    <h5 class="text-warning fw-bold mb-3">5000+</h5>
                    <h6 class="fw-normal mb-0">Customers</h6>
                    <div class="vr vr-blurry position-absolute my-0 h-100 d-none d-md-block top-0 end-0"></div>
                  </div>
              
                  <div class="col-lg-3 col-md-6 mb-5 mb-md-0 position-relative">
                    <i class="fa fa-space-shuttle fa-3x text-warning mb-4"></i>
                    <h5 class="text-warning fw-bold mb-3">8000+</h5>
                    <h6 class="fw-normal mb-0">Products Delivered</h6>
                  </div>
                </div>
              </section>

              <br><br>
    </div>

    <hr class="hr hr-blurry bg-dark" />


    <div class="container w-80 border border-dark" id="contact">
    <section class="mb-4">

        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
            a matter of hours to help you.</p>
    
        <div class="row">
    
            <div class="col-md-9 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="mail.php" method="POST">
    
                  
                    <div class="row">
    
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
                            </div>
                        </div>
                    
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email" class="form-control" placeholder="Your Email">
                            </div>
                        </div>
                
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                                
                            </div>
                        </div>
                    </div>
                    <br>
      
                    <div class="row">

                        <div class="col-md-12">
    
                            <div class="md-form">
                                <textarea type="text" id="message" placeholder="Your Message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                
                            </div>
    
                        </div>
                    </div>
                    <br>
                </form>
                <br>
    
                <div class="text-center text-md-left">
                    <a class="btn btn-primary" href="#">Send</a>
                </div>
                <div class="status"></div>
            </div>

            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fa fa-map-marker fa-2x"></i>
                        <p>Karachi, 74400 , Pakistan</p>
                    </li>
    
                    <li><i class="fa fa-phone mt-4 fa-2x"></i>
                        <p>(021) 111 117 117</p>
                    </li>
    
                    <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                        <p>k201042@nu.edu.pk</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    </div>

<?php include "userfooter.php" ?>