<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Welcome to silverlinehealthcare Agency</title>
    <meta content="" name="Send us am email  we will respond as soon as possible">
    <meta content="" name="Silverline healthcare contact">

  <?php include_once('head.php'); ?>
     
</head>

<body>
    <!-- ======= Top Bar ======= -->
 <?php include_once('topbar.php'); ?>

    <!-- ======= Header ======= -->
   <?php include_once('headertabs.php'); ?>
   <!-- End Header -->




    <br>
    <br>
    <br>
    <br>
     <br>
    <br>
    <br>
    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
  
          <div class="section-title">
            <h2>Contact</h2>
            <p>  </p>
          </div>
        </div>
  
        
        <div class="container">
          <div class="row mt-5">
  
            <div class="col-lg-4">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p> Awoshie station. Ablekuma-Awoshie highway</p>
                </div>
  
                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>office@silverlinenursingandhomcare.com</p>
                </div>
  
                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+233 59 742 8658 </p>
                </div>
  
              </div>
  
            </div>
  
            <div class="col-lg-8 mt-5 mt-lg-0">
  
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
  
            </div>
  
          </div>
  
        </div>
      </section><!-- End Contact Section -->
  



  
    <!-- ======= Footer ======= -->
    <?php include_once('footer.php'); ?>
    <!-- End Footer -->

 <?php include_once('scripts.php'); ?>
    
    

</body>

</html>