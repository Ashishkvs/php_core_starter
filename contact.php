
<!doctype html>
<html lang="en">
  <head>
      <title>Home</title>
      <!-- headlink.php -->
      <?php require_once('headlink.php'); ?>
  </head>

  <body>
    <!-- navigation  header -->
    <?php require_once('header.php'); ?>
    <!-- body content.php -->

    <!-- Contact -->
    <section class="why ">
    <div class="layer py-5">
      <h3 class="heading text-center text-uppercase">Contact us</h3>
    </div>
  </section>
    <section class="contact py-5" id="contact-us">
    		<div class="container">
          <h3 class="text-center">Write Us</h3>
          <div class="jumbotron">

          <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="email_id" placeholder="Email" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPhone">Phone</label>
                <input type="text" class="form-control" id="phone" placeholder="Phone" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputSubject">Subject</label>
              <input type="text" class="form-control" id="subject" placeholder="Subject">
              <label for="inputAddress">Message</label>
              <textarea name="Message" class="form-control" id="message" rows="6" cols="20" placeholder="Message" required spellcheck="false" ></textarea>
            </div>


            <button type="submit" class="float-right btn btn-lg btn-primary">Submit</button>
          </form>
          </div>
          <!-- contact form end  -->
    			<div class="row contact-main">
    				<div class="col-md-4 ">
              <div class="col-6 col-md">
                <h5>Our Office</h5>
                <ul class="list-unstyled text-small">
                  <li><span class="fa fa-map-marker" aria-hidden="true">&nbsp;</span>Hi-Tech City Hyderabad 500082</span></li>
                  <li><span class="fa fa-phone" aria-hidden="true">&nbsp;&nbsp;</span><a href="callto:91-7004797675" class="text-muted">+91-7004797675</a></li>
                  <li><span class="fa fa-envelope" aria-hidden="true">&nbsp;&nbsp;</span><a href="mailto:imagegrafia@gmail.com?subject=feedback" class="text-muted">imagegrafia@gmail.com</a></li>
                  <li><span class="fa fa-globe" aria-hidden="true">&nbsp;&nbsp;</span><a href="https://www.imagegrafia.com" class="text-muted">www.imagegrafia.com</a></li>
                </ul>
              </div>
    					<div class="social-icons">
                <h5>Follow us </h5>
    						<a href="#"><i class="fa fa-facebook fa-3x" aria-hidden="true"></i></a>&nbsp; &nbsp;
    						<a href="#"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a>&nbsp; &nbsp;
                <a href="#"><i class="fa fa-google fa-3x" aria-hidden="true"></i></a>&nbsp; &nbsp;
                <a href="#"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>&nbsp; &nbsp;
    					</div>
    				</div>
    				<div class="col-md-8">
    					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.866569456456!2d78.45537741472752!3d17.418189888060176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb97492fbd1377%3A0xb37e630b437c3904!2sMaheshwari+Chambers%2C+Raj+Bhavan+Quarters+Colony%2C+Somajiguda%2C+Hyderabad%2C+Telangana+500041!5e0!3m2!1sen!2sin!4v1534063584525" width="720" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    				</div>


    			</div>
    		</div>
    </section>
    <!-- //Contact -->



    <!-- footer.php -->
    <?php require_once('footer.php'); ?>
  </body>

</html>
