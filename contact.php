<?php
$page = ' | Home';
$pageDesc = '""';
$pageTag = '""';
include 'include/header.php';
$page = 'Home';
?>

<section class="header3" data-aos="fade-up" data-aos-duration="1500">
        <div class="container">
        <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="main1">
                <h3>CONTACT US</h3>
            </div>


        </div>
    </div>
        </div>

    </section>

    <section class="contact">
        <div class="container">
            <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6" data-aos="flip-left" data-aos-duration="1500">
                <div class="contact-img">
                    <img src="images/img9.png" alt="" class="img-fluid" style="height: 690px;">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6" data-aos="fade-left" data-aos-duration="1500">
                <div class="contact-text">
                    <h2>CONTACT US</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                  <div class="input-div2">
                  <label for="basic-url" class="form-label">Name</label> <br>
                  <input type="text" placeholder="Enter you name here"> <br>
                  </div>
                  <div class="input-div">
                  <label for="basic-url" class="form-label">Phone no:</label> <br>
                    <input type="text" placeholder="Enter you phone no here"><br>
                  </div>
                  <div class="input-div1">
                  <label for="basic-url" class="form-label">Email</label> <br>
                    <input type="text" placeholder="Enter you Email here"><br>
                  </div>
                  <div class="text-area">
                  <p><label for="w3review">Message</label></p>
                  <textarea id="w3review" name="w3review" rows="4" cols="68">Type here</textarea>
                  </div>
                  <div class="button">
                  <a href="">Submit</a>
                  </div>
</div>
                    
                </div>
            </div>
        </div>

    </section>

    <?php
    include 'include/footer.php';
    $page = 'home';
    ?>