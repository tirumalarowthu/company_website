<!DOCTYPE html>
<html lang="en">

<head>
  <title>P2F SEMI |  Contact Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- ----------------------------fonts--------------------------------------------------------------->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"> 
  <!-- Font awesome --> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- ----------------------- css------------------------------------------------------->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css"> 
  <link rel="stylesheet" href="css/nav.css"> 
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/internal.css">
  <link rel="stylesheet" href="css/validation.css">
  <!---------------------------css end-------------------------------------------------------->
</head>

<body>

<div class="main-Div align-items-center">
	   
       <!---------------------------header------------------------------------------------------------------->
  
				<?php include('include/header.php')?> 
  <!---------------------------------header end-------------------------------------------------------------->
         
      <!-- banner section --> 
		<div class="container">
			<div class="row d-flex justify-align-bottom ">
				<div class="col-lg-10 offset-lg-1">
					<div class="intro-content ">
					  <h2>Contact Us</h2>
					  <nav aria-label="breadcrumb">
						 <ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"> Contact Us</li>     
						 </ol>
					  </nav>
				   </div>
				</div>
			</div>
      </div> 
  </div> 
      <!-- banner section -->

  

<!-- contact-section -->
        <section class="contact-section pd-tb">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-info-inner">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15555.580163070965!2d77.677375!3d12.914467!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa944246ffc2fc280!2sIndiQube%20Zeta!5e0!3m2!1sen!2sin!4v1644817203858!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>  
                        </div>
                    </div>
                    <div class="col-md-6 form-column">
                        <div class="form-inner validateContainer">
                            <h3><b>Contact Us</b></h3> 
                            <form method="post" id="contact-form" action="" class="default-form"> 
                                <div class="form-group validateField">
                                    <input type="text" class="form-control validateRequired validateAlphaonly" id="usr" placeholder="Your Name">
                                </div>
                                <div class="form-group validateField">
                                    <input type="text" class="form-control validateRequired validateEmail" id="usr" placeholder="Email">
                                </div>
                                <div class="form-group validateField">
                                    <input type="text" class="form-control validateRequired validateMobileNoLimit validateNumber" id="usr" placeholder="Mobile No.">
                                </div>
                                <div class="form-group validateField">
                                    <textarea class="form-control validateRequired" rows="5" id="comment" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btns checkValidationBtn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->
 
<!-----------------footer------------------------------>
  
				<?php include('include/footer.php')?> 
                 <!-- Validation JS -->
<script src="js/validation/jquery.validate.min.js"></script>
<script src="js/validation/additional-methods.min.js"></script>
<script src="js/validation/checkvalidation.js"></script>
</body>

</html> 