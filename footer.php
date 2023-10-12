<footer>
    <!-- footer -->
    <section class="w3l-footer">
      <div class="w3l-footer-16-main py-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 column">
              <div class="row">
                <div class="col-md-6 column">
                  <h3>Company</h3>
                  <ul class="footer-gd-16">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="how-to-join.php">How It Works</a></li>  
                    <li><a href="testimonials.php">Testimonials</a></li>                    
                    <li><a href="contact.php">Contact Us</a></li>
                  </ul> <br>

                  <a href="https://api.whatsapp.com/send?phone=2348053022024&text=Hello+Admin+I%27m+ready+to+own+my+own+plot+of+land+give+me+my+spot+please"><img src="assets/images/whatsapp.png" alt=""><br><br><h6>Click here to chat with us</h6></a>  
                </div>               
                <div class="col-md-6 column mt-lg-4">
                  <h3>Address</h3>
                  <p>150 JD Plaza, After Community Bus Stop,  Beside Forte Oil Filling Station, Opposite Kilimanjaro, Ago Palace Way, Lagos.</p><br>
                  <h5>Telphone:</h5>
                  <p>08053022024</p><br> 
                  <h5>Email:</h5>
                  <a href="mailto:thrift@iyaalajorealestate.com"> thrift@iyaalajorealestate.com</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 column pl-lg-5 column4 mt-lg-0 mt-5">
              <h3>Newsletter </h3>
              <div class="end-column">
                <h4>Get latest updates and offers.</h4>
                <form action="#" class="subscribe" method="post">
                  <input type="email" name="email" placeholder="Email Address" required="">
                  <button type="submit" style="border-radius:20px">Go</button>
                </form>
                <p>Sign up for our latest news & articles. We won’t give you spam mails.</p>
              </div>
            </div>
          </div>
          <div class="d-flex below-section justify-content-between align-items-center pt-4 mt-5">
            <div class="columns text-lg-left text-center">
            <p>&copy; 2021 Sarahcity Properties T/A Iya Alajo Real Estate. All rights reserved | Design by <a href="https://aledoy.com/" target="_blank">
              Aledoy Solutions Limited</a>
              </p>
            </div>
            <div class="columns-2 mt-lg-0 mt-3">
              <ul class="social">
                <li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                </li>
                <li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                </li>
                <li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                </li>
                <li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                </li>
                <li><a href="#github"><span class="fa fa-github" aria-hidden="true"></span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- move top -->
      <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up"></span>
      </button>
      <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
          scrollFunction()
        };

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
          } else {
            document.getElementById("movetop").style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
      <!-- //move top -->
      <script>
        $(function () {
          $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
          })
        });
      </script>
    </section>
    <!-- //footer -->
  </footer>