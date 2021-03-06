<!DOCTYPE html>
<html lang="en">
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Organic ME - Contact - TEST</title>
    
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/stylesheet2.css">	  
    
      </head>
      <body>
          
          
        <!-- START NAVBAR --> <!-- DO i add "shadow"? -->
          <nav class="navbar navbar-expand-lg navbar-light menu ">
                <div class="container">
                  <a href="index.html" class="link"><img src="img/logo.svg" alt="logo image" id="logo-img"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>
                            <li class="nav-item dropdown dropdown-hover">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Organic
                                </a>
                                <div class="dropdown-menu dropdown-hover-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="clothing.html">Clothing</a>
                                    <a class="dropdown-item" href="food.html">Food</a>
                                    <a class="dropdown-item" href="honey.html">Honey</a>
                                    <a class="dropdown-item" href="homeware.html">Homeware</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="cafe.html">Caf??</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="events.html">Events</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link active" href="#">Contact</a>
                            </li>
                        </ul>               
                    </div>
                </div>
            </nav>
        <!--END NAVBAR -->

       <!-- START INTRO SECTION -->
       <section id="home" class="intro-section">		
        <div class="container">
            <div class="row text-black">
                <!-- Start the text content for the intro -->
                <div class="col-md-7 intros text-start pt-5">
                        <span class="display-2--intro">You have landed on the Contact Page, here you will find a contact form that can be 
                          used to communicate with us! Furthermore, we have embedded google maps into this webpage making it easier for
                           you to find us! We look forward to hearing from you!</span>
                    <br>
                    <div class="honeyButton">
                    <a class="btn" href="#section-2" role="button">Contact Us</a>
                        </div>
                </div>
                <!--Start OF THE ART-->
                <div class="col-md-5 intros">
                        <img src="img/Question_Monochromatic.svg" alt="Pear Art" class="img-fluid-2">
                </div>
            </div>
        </div>
    </section>
  <!-- END INTRO SECTION -->
  
  <!--Contact Form Start-->
   <div class="container" id="section-2">
    <div class="row pb-4">
        <div class="col-lg-8 col-md-12 col-sm-12">
          <div class="heading-3">Send your request</div>
          <form method="post" action="contact.php">
            <div class="form-row needs-validation">
              <div class="col">
                  <div class="label">Name</div>
                <input type="text" name = "name" class="form-control" placeholder="" required>
              </div>
              <div class="col">
                <div class="label">Number</div>
                <input type="text" name = "number" class="form-control" placeholder="">
              </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="label">Email</div>
                  <input type="email" name = "email" class="form-control" placeholder="">
                </div>
                <div class="col">
                  <div class="label">Subject</div>
                  <input type="text" name = "message" class="form-control" placeholder="">
                </div>
              </div>

              <div class="label pb-2">Write your message</div>
              <textarea rows="5" name = "text"></textarea>

              <div class="form-row">
                <div class="col">
                  <button type="submit" class="btn" id="submit">Submit</button>
                </div>
                </div>

          </form>
        </div>

        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $text = $_POST["text"];
 
    if(empty($name)||empty($email)) {
    echo "Please fill in name and email.";
    exit;
}
 
    $email_from = "$email";
 
    $email_subject = "Contact Form Entry";
 
    $email_body = "Name: $name.\n".
                    "User Email: $email.\n".
                        "Subject: $message.\n".
                          "User Message: $text.\n";
 
$to = "grievejordan@yahoo.com";
 
$headers = "From: $email_from \r \n";
 
$headers = "Reply-To: $email \r \n";
 
mail($to,$email_subject,$email_body,$headers,$text);
    $success = "<h4>Message Sent!</h4>";
}
 
?>
 

        

          <div class="icon-wapper col-lg-4 col-md-12 col-sm-12">
            <div id="icons">
                <div class="row">
                    <div class="col">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                          </svg><div class="heading-5">07572 098806</div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                          </svg> <div class="heading-5">OrganicME@hotmail.co.uk</div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                          </svg>
                          <div class="heading-5">45 Horsemarket, Kelso, TD5 7AA</div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>Once your email is sent, it will take approximately 48-72 hours for us to respond. 
                                If your message is urgent, please give us a call or visit our store!</p>
                        </div>
                    </div>
                  </div>
        </div>
    </div>
   </div>


   


<!--Google map content-->
<div class="google-background">
<div class="container" id="google-section">
    <div class="row align-items-start pb-4">
        <div class="col-lg-6 col-md-12 col-sm-12">
        <div style="text-decoration:none; overflow:hidden;max-width:100%;;height:300px;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2254.158811690117!2d-2.4340904841779203!3d55.59924968051252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x488764d8672c005b%3A0xb21f9141b90874c2!2s45%20Horsemarket%2C%20Kelso%20TD5%207AA!5e0!3m2!1sen!2suk!4v1642957608211!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12" id="google-text">
        <p>The welcoming market town of Kelso, nestling in the heart of the Scottish Borders, offers so much to see and do in both the town and stunning surrounding countryside. Located within easy traveling distance of Edinburgh.
          <br><br>
          Kelso has loads of parking and there are many bus routes that are easily accessible from anywhere in the borders.
          <br><br>
          We look forward to seeing you!
          </p>
      </div>
      </div>
      </div>
      </div>

	
		<!-- Footer Section -->
    <footer>
      <div class="container">
             <p class="lead-2">We look forward to hearing from you!</p>
             <div class="row align-items-center">
                 <div class="col-lg-4">
                     <div class="heading-footer pb-4">Contact Information</div>
                     <div class="footer-text pb-3">07572 098806</div>
                     <div class="footer-text pb-3">OrganicME@hotmail.co.uk</div>
                     <div class="footer-text pb-3">45 Horsemarket, Kelso, TD5 7AA</div>
                     
                 </div>
                 <div class="col-lg-4">
                    <div class="heading-footer pb-4">Social Media Links</div>
                    <!--links-->
                    <div class="footer-text pb-3"><a href="https://www.facebook.com/planetorganic" class="link" target="blank_">Facebook</a></div>
                    <div class="footer-text pb-3"><a href="https://www.instagram.com/planetorganic/" class="link" target="blank_">Instagram</a></div>  
                    <div class="footer-text pb-3"><a href="https://www.youtube.com/channel/UCeH4PQiZaOAouSBqsnDnIuA" class="link" target="blank_">Youtube</a></div>                     
                 </div>
                 <div class="col-lg-4">
                  <div class="heading-footer pb-4">Associate/Partner Companys</div>
                  <div class="footer-text pb-3"><a href="https://gethomethings.com/products/keep-it-clean-kit-pcr?variant=39383441211529&currency=GBP&utm_medium=product_sync&utm_source=google&utm_content=sag_organic&utm_campaign=sag_organic&gclid=Cj0KCQjwqp-LBhDQARIsAO0a6aLexWtOUTHS4ZvQXYOHQwlrkNYwLd_AJP_ZHaRM37jp07cSdjMRcW8aAjK_EALw_wcB" class="link" target="blank_">HomeThings</a></div> 
                  <div class="footer-text pb-3"><a href="https://www.goodclub.co.uk/shop" class="link" target="blank_">Good Club</a></div>
                  <div class="footer-text pb-3">Jordan 2022 ??</div>
                 </div>
           </div> 
          </div>
        </footer>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.4.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.4.1.js"></script>
	  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script> 
</body>
</html>