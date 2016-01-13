<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Head -->
    <?php include "module/head.php"; ?>
    
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fifa friends</title>
</head>

<body class="background-content">

   <!-- Navigation -->
   <?php include "module/menu.php"; ?>

    <!-- Page Content -->
    <div class="container containerContent">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Contact Us</h3>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success widthBtn">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    <!-- /.container -->
    
      <!-- Footer -->
  <?php include "module/footer.php"; ?>
       
</body>

</html>
