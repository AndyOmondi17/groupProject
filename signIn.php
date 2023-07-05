<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/styles.css">
</head>
<body>
<?php include "nav.php"; ?>
    <br><br><br><br>
    <div class="container mt-5">
        <h2 class="text-center">Sign In</h2>
        <div class="row justify-content-center">
            <div class="col-md-8"> <!-- Adjust column number as per your requirement -->
            <?php if (isset($_GET["error"])) {
            $error = $_GET["error"];
            echo "<div class='alert alert-danger' role='alert'>";
            if ($error === "invalidpassword") {
                echo "Invalid password!";
            } else if ($error === "usernotexists") {
                echo "Username does not exist!";
            }
            echo " Please try again.";
          echo "</div>";
        } ?>
                <form method="POST" action="processes/signin_process.php">
    
                    <div class="form-group">
                        <label for="loginEmail">Email address</label>
                        <input type="email" name="email" class="form-control" id="loginEmail" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="loginPassword">Password</label>
                        <input type="password" name="password" class="form-control" id="loginPassword" placeholder="Password">
                    </div>
                    <input type="hidden" name="signin" value="1"> <!-- Add this line -->
                    <center>
                        <button type="submit" name="signin" class="btn btn-primary">Submit</button>
                    </center>
                </form>
            </div>
        </div>
    </div>

    <br><br><br><br><br><br>
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
