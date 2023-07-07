<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/styles.css">
</head>
<body>

    <?php include "nav.php";
    $userSignedIn = isset($_SESSION["username"]);
    ?>

    <!-- Main content of your website goes here -->
    <!-- ...Rest of your HTML code... -->

<main role="main">

    <!-- Jumbotron (Hero section) -->
    
    <div class="jumbotron">
        <center>
            <div class="container center-content">
                <h1 class="display-4">Welcome to AfriVolts</h1>
                <p>We offer the best electric cars in Africa. Sign up and book a test drive today!</p>
                <?php
                if (!$userSignedIn) {
                ?>
                <p><a class="btn btn-primary btn-lg" href="signUp.php" role="button">Sign Up &raquo;</a></p>
                <?php
                } else {
                    $greeting = "";
                    $currentHour = date('H:i:s');
                    if ($currentHour > "06:00:00" && $currentHour < "12:00:00") {
                        $greeting .= "Good morning";
                    } else if ($currentHour > "12:00:00" && $currentHour < "16:00:00") {
                        $greeting .= "Good afternoon";
                    } else if ($currentHour > "16:00:00" && $currentHour < "21:00:00") {
                        $greeting .= "Good evening";
                    }
                    $greeting .= " " . $_SESSION['username'];
                    echo "<p>".$greeting."</p>";
                }
                ?>

                
            </div>
        </center>
    </div>
    

    <!-- Car Highlights -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Car Model 1</h2>
                <img src="Images/smallElectricCar.jpg" id="image1" alt="Car Model 1" class="img-fluid">
                <br>
                <br>
                <!-- <center> -->
                    <p><a class="btn btn-secondary" href="" role="button">View details &raquo;</a></p>
                <!-- </center> -->
            </div>
            <div class="col-md-4">
                <h2>Car Model 2</h2>
                <img src="Images/hyundai-motor-group-a3vDd8hzuYs-unsplash.jpg" id="image2" alt="Car Model 2" class="img-fluid">
                <br>
                <br>
                <!-- <center> -->
                    <p><a class="btn btn-secondary" href="" role="button">View details &raquo;</a></p>
                <!-- </center> -->
            </div>
            <div class="col-md-4">
                <h2>Car Model 3</h2>
                <img src="Images/ElectricMotorbike.jpg" id="image3" alt="Car Model 3" class="img-fluid">
                <br>
                <br>
                <!-- <center> -->
                    <p><a class="btn btn-secondary" href="" role="button">View details &raquo;</a></p>
                <!-- </center> -->
            </div>
        </div>

        <!-- Blog Excerpts -->
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="Images/futureElectric.jpg" id="mg2" class="card-img-top" alt="Blog 1 image">
                    <div class="card-body">
                        <h5 class="card-title">The Future of Electric Cars</h5>
                        <p class="card-text">A sneak peek into the future of electric cars and what it means for our planet.</p>
                        <p><a class="btn btn-secondary" href="blog1.html" role="button">View Blog &raquo;</a></p>
                    </div>
                </div>
            </div>
            <!-- More blog excerpts can go here... -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="Images/futureElectric.jpg" id="mg0" class="card-img-top" alt="Blog 1 image">
                    <div class="card-body">
                        <h5 class="card-title">The Future of Electric Cars</h5>
                        <p class="card-text">A sneak peek into the future of electric cars and what it means for our planet.</p>
                        <p><a class="btn btn-secondary" href="blog2.html" role="button">View Blog &raquo;</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="Images/switchElectric.jpg" id="mg1" class="card-img-top" alt="Blog 2 image">
                    <div class="card-body">
                        <h5 class="card-title">Why Switch to an Electric Vehicle?</h5>
                        <p class="card-text">Discover the benefits of electric vehicles and why they're a great choice for you.</p>
                        <p><a class="btn btn-secondary" href="blog3.html" role="button">View Blog &raquo;</a></p>
                    </div>
                </div>
            </div>
        </div>
        <hr>

    </div> <!-- /container -->

</main>

<!-- ...Rest of your HTML code... -->

<div class="container mt-5">
    <h2 class="text-center mb-3">Customer Testimonials</h2>
    <div id="carouselTestimonials" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" id="testimonial1">
                <blockquote class="blockquote text-center">
                    <p class="mb-0">"I absolutely love my new electric car from AfriVolts. The service was exceptional."</p>
                    <footer class="blockquote-footer">Vince</footer>
                </blockquote>
            </div>
            <div class="carousel-item" id="testimonial2">
                <blockquote class="blockquote text-center">
                    <p class="mb-0">"AfriVolts made my switch to an electric vehicle seamless. Highly recommend them."</p>
                    <footer class="blockquote-footer">Markus</footer>
                </blockquote>
            </div>
            <!-- More testimonials go here... -->
        </div>
        
        <a class="carousel-control-prev" href="#carouselTestimonials" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselTestimonials" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<br><br>

<!-- ...Rest of your HTML code... -->


<!-- ...Rest of your HTML code... -->


    <!-- ...Rest of your HTML code... -->

<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h5>AfriVolts</h5>
                <ul class="list-unstyled">
                    <li><a href="#" data-toggle="modal" data-target="#privacyPolicyModal">Privacy Policy</a></li>

                    <li><a href="#" data-toggle="modal" data-target="#termsAndConditionsModal">Terms & Conditions</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                </ul>
            </div>
            <div class="col-4">
                <h5>Contact Us</h5>
                <ul class="list-unstyled">
                    <li>Email: info@afirvolts.co.ke</li>
                    <li>Phone: +254 700 000000</li>
                </ul>
            </div>
            <div class="col-4">
                <h5>Follow Us</h5>
               <a href="#"><i class="fab fa-instagram"></i> Instagram</a><br>
                <a href="#"><i class="fab fa-facebook"></i> Facebook</a><br>
                <a href="#"><i class="fab fa-twitter"></i> Twitter</a><br>
               <a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a>
            </div>
        </div>
    </div>
</footer>
<!-- Modal -->
<div class="modal fade" id="termsAndConditionsModal" tabindex="-1" role="dialog" aria-labelledby="termsAndConditionsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="termsAndConditionsModalLabel">Terms and Conditions</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h5>1. Introduction</h5>
            <p>Welcome to AfriVolts. These are our terms and conditions for use of the website, which you may access in several ways, including but not limited to the web, PDAs, mobile phones and RSS feeds. These terms and conditions apply whenever you access the website, on whatever device.</p>
          
            <h5>2. Intellectual Property</h5>
            <p>The copyright and other intellectual property rights in all material and content on this site is owned by us. You may only use this content for your personal and non-commercial use.</p>
          
            <h5>3. Privacy</h5>
            <p>Your privacy is important to us. We will only use the information that we collect about you lawfully in accordance with our privacy policy.</p>
          
            <h5>4. Product Information</h5>
            <p>While we do our best to ensure that product information is accurate, we cannot guarantee that it is error-free, complete, or current. We reserve the right to correct any inaccuracies or omissions and to change or update information at any time without prior notice.</p>
          
            <h5>5. Payment Terms</h5>
            <p>Prices for products are quoted on our website. The website contains a number of products and it is always possible that some of the prices on the website may be incorrect.</p>
          
            <h5>6. Limitations of Liability</h5>
            <p>We will not be liable to you in relation to the contents of, or use of, or otherwise in connection with, this website for any indirect, special or consequential loss; or for any business losses, loss of revenue, income, profits or anticipated savings, loss of contracts or business relationships, loss of reputation or goodwill, or loss or corruption of information or data.</p>
          
            <h5>7. Changes to these Terms</h5>
            <p>We may make changes to our website, policies, and these Terms and Conditions at any time without notice. You should check our website frequently to see recent changes.</p>
          
            <h5>8. Contact Information</h5>
            <p>If you have any questions about our Terms and Conditions, please contact us by email or postal mail at: info@afirvolts.co.ke</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

 <!-- Modal -->
 <div class="modal fade" id="privacyPolicyModal" tabindex="-1" aria-labelledby="privacyPolicyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="privacyPolicyModalLabel">Privacy Policy</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <h1>Privacy Policy for AfriVolts</h1>

            <p>At AfriVolts, accessible from www.afrivolts.co.ke, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by AfriVolts and how we use it.</p>
            
            <h2>Log Files</h2>
            
            <p>AfriVolts follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this as part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.</p>
            
            <h2>Cookies and Web Beacons</h2>
            
            <p>Like any other website, AfriVolts uses 'cookies'. These cookies are used to store information including visitors' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.</p>
            
            <h2>Privacy Policies</h2>
            
            <p>You may consult this list to find the Privacy Policy for each of the advertising partners of AfriVolts.</p>
            
            <p>Note that AfriVolts has no access to or control over these cookies that are used by third-party advertisers.</p>
            
            <h2>Third Party Privacy Policies</h2>
            
            <p>AfriVolts's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>
            
            <h2>Children's Information</h2>
            
            <p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>
            
            <p>AfriVolts does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>
            
            <h2>Online Privacy Policy Only</h2>
            
            <p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in AfriVolts. This policy is not applicable to any information collected offline or via channels other than this website.</p>
            
            <h2>Consent</h2>
            
            <p>By using our website, you hereby consent to our Privacy Policy and agree to its Terms and Conditions.</p>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>


    </body>
</html>
