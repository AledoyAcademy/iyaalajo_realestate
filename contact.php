<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Iya Alajo Real Estate | Contact us</title>
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">
  <!-- google fonts -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
<link rel="icon" href="assets/images/icon.png">
  <link rel="icon" href="assets/images/icon.png">
  <!-- Template CSS -->
</head>

<body>
<?php include ("header.php") ; ?>
  <!-- //header -->
  <!-- about breadcrumb -->
  <section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container">
        <h2 class="title">Contact</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="index.php">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
   <!--/contact-->
   <section class="w3l-contact-11 py-5">
    <div class="contacts-main py-lg-5 py-md-4">
      <div class="title-content text-center">
        <h6 class="sub-titlehny">Contact</h6>
        <h3 class="hny-title">Get in touch with us</h3>        
    </div>
      <div class="form-41-mian section-gap mt-5" style="margin-bottom:50px">      
        <div class="container">
        <a href="https://api.whatsapp.com/send?phone=2348053022024&text=Hello+Admin+I%27m+ready+to+own+my+own+plot+of+land+give+me+my+spot+please"><img src="assets/images/whatsapp.png" alt=""><br><br><h6>Click here to chat with us</h6></a>   
        
        
          <div class="d-grid align-form-map" style="margin-top:80px;">
            <div class="form-inner-cont">
              <form action="proc-contact.php" method="post" class="signin-form">
                <div class="form-input">
                  <label for="name">Name(Required)*</label>
                  <input type="text" name="name" id="name" placeholder="" required=""/>
                </div>
                <div class="form-input">
                  <label for="email">Email(Required)*</label>
                  <input type="email" name="email" id="email" placeholder="" required="" />
                </div>
                <div class="form-input">
                  <label for="phone">Telephone Number(Required)*</label>
                  <input type="text" name="phone" id="phone" placeholder="" required="" />
                </div>
                <div class="form-input">
                  <label for="message">Message(Required)*</label>
                  <textarea placeholder="" name="message" id="message" required=""></textarea>
                </div>
                <div class="form-submit text-right">
                    <button type="submit" class="btn btn-style btn-primary" style="border-radius:20px;">Submit Message</button>
                  </div>
              </form>
            </div>
            <div class="map">
              <iframe
                src="https://www.google.com/search?tbs=lf:1,lf_ui:4&tbm=lcl&sxsrf=ALeKk03oeggmHD0MsMUA-2JCyGT57PO4Xg:1626170917170&q=150+JD+Plaza&rflfq=1&num=10&ved=2ahUKEwj6x_He5t_xAhUNnxQKHbRABzsQtgN6BAgJEAQ#rlfi=hd:;si:;mv:[[6.5000181,3.3049243],[6.4998289,3.3018429]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!2m1!1e3!3sIAE,lf:1,lf_ui:4"
                frameborder="0" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
      </div>
      
  <!--//contact-->
   <!--/w3l-footer-29-main-->
   <?php include ("footer.php") ; ?>
  <!--//w3l-footer-29-main-->
  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>