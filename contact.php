<!-- 
Author: Prasanna Brabourame
Date: 01-06-2020
Purpose: for Timefreaksmedia.com
github: https://github.com/PrasannaBrabourame    
-->
<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description"
        content="TimeFreaksMedia Digital Agency and Marketing Template. agency landing page template helps you easily create websites for your business, marketing landing page template form promotion and many more.">
    <meta name="author" content="ThemeTags">
    <meta property="og:site_name" content="" />
    <meta property="og:site" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:type" content="article" />
    <title>TimeFreaksMedia Digital Agency and Marketing Template</title>
    <link rel="manifest" href="manifest.json" />
    <link rel="icon" href="assets/./img/favicon.html" type="image/png" sizes="16x16">
    <link href="http://fonts.googleapis.com/css?family=Comfortaa:500,600,700%7COpen+Sans&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link href="static/css/main.498d002a.chunk.css" rel="stylesheet">
</head>

<body>

    <noscript>You need to enable JavaScript to run this app.</noscript>

    <div id="root">
        <div>
            <header class="header">
                <nav class="navbar navbar-expand-lg fixed-top bg-transparent">
                    <div class="container">
                        <a class="navbar-brand" href="/"><img src="./img/logo_white.png" width="75" alt="logo"
                                class="img-fluid"></a><button class="navbar-toggler" type="button"
                            data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false"
                            aria-label="Toggle navigation"><span class="ti-menu"></span></button>
                        <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"><a class="nav-link page-scroll" href="/index.php">Home</a></li>
                                <li class="nav-item"><a class="nav-link page-scroll" href="/about-us.html">About</a>
                                </li>
                                <li class="nav-item"><a class="nav-link page-scroll" href="/services.html">Service</a>
                                </li>
                                <li class="nav-item"><a class="nav-link page-scroll" href="/pricing.html">Pricing</a>
                                </li>
                                <li class="nav-item"><a class="nav-link page-scroll" href="/#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <div class="main">
                <section class="hero-section background-img ptb-100"
                    style="background: url(&quot;./img/hero-bg-1.jpg&quot;) center center no-repeat fixed;">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-lg-7">
                                <div class="page-header-content text-white text-center pt-5">
                                    <h1 class="text-white mb-1">Contact Us</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="contact-us-section ptb-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-9">
                                <div class="section-heading mb-4">
                                    <h2>Reach us quickly</h2>
                                    <p class="lead">We provide professional services for grow your business and
                                        increases sell digital product.
                                        Increase sales by showing true dynamics of your website.</p>
                                </div>
                            </div>
                        </div>
                        <?php 
                            if($_POST){
                                // the message
                                $msg = "Thank you for your intrest. We will contact you soon!";
                                
                                // use wordwrap() if lines are longer than 70 characters
                                $msg = wordwrap($msg,70);
                                
                                // send email
                                mail($_POST['email'],"Time Freaks Media",$msg);
                                echo "<h1>".$msg."</h1>";
                                }
                                ?>
                        <div class="row justify-content-between align-items-center">
                            <div class="col-md-6">
                            <form method="POST" id="contactForm1" class="contact-us-form" novalidate="" actions="index.php">
                           <h5>Reach us quickly</h5>
                           <div class="row">
                              <div class="col-sm-6 col-12">
                                 <div class="form-group"><input id="contact-name" type="text" class="form-control"
                                       name="name" placeholder="Enter name" required="" value=""
                                       onkeyup='validateName()'>
                                    <span class='error-message' id='name-error'></span>
                                 </div>
                              </div>
                              <div class="col-sm-6 col-12">
                                 <div class="form-group"><input id="contact-email" type="email" class="form-control"
                                       name="email" placeholder="Enter email" required="" value=""
                                       onkeyup='validateEmail()'>
                                    <span class='error-message' id='email-error'></span>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-6 col-12">
                                 <div class="form-group"><input id="contact-phone" type="text" name="phone"
                                       class="form-control" id="phone" placeholder="Your Phone" value=""
                                       onkeyup='validatePhone()'>
                                    <span class='error-message' id='phone-error'></span>
                                 </div>
                              </div>
                              <div class="col-sm-6 col-12">
                                 <div class="form-group"><input id="contact-comany" type="text" name="company" size="40"
                                       class="form-control" id="company" placeholder="Your Company" value=""
                                       onkeyup="validateCompany()">
                                    <span class='error-message' id='company-error'></span>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-12">
                                 <div class="form-group"><textarea id='contact-message' name="message" id="message"
                                       class="form-control" rows="7" cols="25" placeholder="Message"
                                       onkeyup='validateMessage()'></textarea>
                                    <span class='error-message' id='message-error'></span>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-12 mt-3"><button type="submit" class="btn primary-solid-btn"
                                    id="btnContactUs" onclick='return validateForm()'>Send Message</button>
                                 <span class='error-message' id='submit-error'></span></div>
                           </div>
                        </form>
                                <p class="form-message"></p>
                            </div>
                            <div class="col-md-5">
                                <div class="contact-info-wrap">
                                    <ul class="list-creative">
                                        <li>
                                            <dl class="list-terms-medium address">
                                                <dt>Address</dt>
                                                <dd>
                                                    <p> 5/172, 1st Floor,<br> 5th Block,<br> Mugapair East,<br> Chennai
                                                        - 600037</p>
                                                </dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl class="list-terms-medium phone">
                                                <dt>Phones</dt>
                                                <dd>
                                                    <ul class="list-comma">
                                                        <li>Support & Sales :
                                                            <a href="tel:+917305024764"> +91 73050 24764</a>
                                                        </li>
                                                    </ul>
                                                </dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl class="list-terms-medium email">
                                                <dt>E-mails</dt>
                                                <dd>
                                                    <ul class="list-comma">
                                                        <li>Support & Query :
                                                            <a href="mailto:hello@timefreaksmedia.com">
                                                                hello@timefreaksmedia.com</a>
                                                        </li>
                                                    </ul>
                                                </dd>
                                            </dl>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="google-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.202044023641!2d80.18791811527522!3d13.086384315888763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526406e0b2e4f7%3A0x13bd6e9abe9f8351!2sFloor%2C%205th%20Block%2C%205%2C%201st%20St%2C%20Nungapakkam%2C%20Collector%20Nagar%2C%20Kalaivanar%20Colony%2C%20Chennai%2C%20Tamil%20Nadu%20600050!5e0!3m2!1sen!2sin!4v1590955900690!5m2!1sen!2sin"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div>
                <footer class="footer-setion">
                    <div class="footer-top pt-5 pb-5">
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-lg-4 mb-4 mb-lg-0">
                                    <div class="footer-nav-wrap">
                                        <img src="./img/logo_white.png" alt="footer logo" width="180"
                                            class="img-fluid mb-3">
                                        <p>We are Creative Agency Digital agency based in South India its covers all
                                            over the universe that loves to craft attractive experiences for the web.
                                        </p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><span
                                                    class="ti-arrow-circle-right mr-2"></span> <a
                                                    href="/privacy.html">Privacy policy</a></li>
                                            <li class="list-inline-item"><span
                                                    class="ti-arrow-circle-right mr-2"></span> <a
                                                    href="/terms.html">Terms and Conditions</a></li>
                                            <li class="list-inline-item"><span
                                                    class="ti-arrow-circle-right mr-2"></span> <a
                                                    href="/disclaimer.html">
                                                    Disclaimer</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 ml-auto mb-4 mb-lg-0">
                                    <div class="footer-nav-wrap">
                                        <h5 class="mb-3">Our location</h5>
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><span
                                                    class="ti-arrow-circle-right mr-2"></span><strong>Address:</strong>
                                                5/172, 1st Floor,<br> 5th Block,<br> Mugapair East,<br> Chennai
                                                600037<br></li>
                                            <li class="mb-2"><span
                                                    class="ti-arrow-circle-right mr-2"></span><strong>Phone:</strong> <a
                                                    href="tel:+917305024764"> +91 73050 24764</a></li>
                                            <li class="mb-2"><span
                                                    class="ti-arrow-circle-right mr-2"></span><strong>Email:</strong><a
                                                    href="mailto:hello@timefreaksmedia.com">
                                                    hello@timefreaksmedia.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="footer-nav-wrap">
                                        <h5 class="mb-3">Quick links</h5>
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><i class="ti-arrow-circle-right mr-2"></i> <a
                                                    href="/about-us.html">About Us</a></li>
                                            <li class="mb-2"><i class="ti-arrow-circle-right mr-2"></i> <a
                                                    href="/services.html">Our Services</a></li>
                                            <li class="mb-2"><i class="ti-arrow-circle-right mr-2"></i> <a
                                                    href="/pricing.html">Pricing</a></li>
                                            <li class="mb-2"><i class="ti-arrow-circle-right mr-2"></i> <a
                                                    href="/contact.php">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom gray-light-bg pt-4 pb-4">
                        <div class="container">
                            <div class="row text-center text-md-left align-items-center">
                                <div class="col-md-6 col-lg-5">
                                    <p class="text-md-left copyright-text pb-0 mb-0">Copyrights © 2020. All rights
                                        reserved by <a href="/#">Time Freaks Media</a></p>
                                </div>
                                <div class="col-md-6 col-lg-7">
                                    <ul class="social-list list-inline list-unstyled text-md-right">
                                        <li class="list-inline-item"><a href="https://www.facebook.com/TimeFreaksMedia/"
                                                target="_blank" title="Facebook"><span class="ti-facebook"></span></a>
                                        </li>
                                        <li class="list-inline-item"><a href="https://twitter.com/TimeFreaksMedia"
                                                target="_blank" title="Twitter"><span class="ti-twitter"></span></a>
                                        </li>
                                        <li class="list-inline-item"><a
                                                href="https://www.instagram.com/timefreaksmedia/" target="_blank"
                                                title="Instagram"><span class="ti-instagram"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script>
      function validateName() {

         var name = document.getElementById('contact-name').value;

         if (name.length == 0) {

            producePrompt('Name is required', 'name-error', 'red')
            return false;

         }

         if (!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)) {

            producePrompt('First and last name, please.', 'name-error', 'red');
            return false;

         }

         producePrompt('Valid', 'name-error', 'green');
         return true;

      }

      function validateCompany() {

         var name = document.getElementById('contact-comany').value;

         if (name.length == 0) {

            producePrompt('Comany Name is required', 'company-error', 'red')
            return false;

         }

         producePrompt('Valid', 'company-error', 'green');
         return true;

      }

      function validatePhone() {

         var phone = document.getElementById('contact-phone').value;
         var phoneno = /^\d{10}$/;
         if (inputtxt.value.match(phoneno)) {
            producePrompt('Valid', 'phone-error', 'green');
            return true;
         }
         else {
            producePrompt('Invalid Phone Number.', 'phone-error', 'red')
            return false;
         }
      }

      function validateEmail() {

         var email = document.getElementById('contact-email').value;

         if (email.length == 0) {

            producePrompt('Email Invalid', 'email-error', 'red');
            return false;

         }

         if (!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {

            producePrompt('Email Invalid', 'email-error', 'red');
            return false;

         }

         producePrompt('Valid', 'email-error', 'green');
         return true;

      }

      function validateMessage() {
         var message = document.getElementById('contact-message').value;
         var required = 30;
         var left = required - message.length;

         if (left > 0) {
            producePrompt(left + ' more characters required', 'message-error', 'red');
            return false;
         }

         producePrompt('Valid', 'message-error', 'green');
         return true;

      }

      function validateForm() {
         if (!validateName() || !validatePhone() || !validateEmail() || !validateMessage() || !validateCompany()) {
            jsShow('submit-error');
            producePrompt('Please fix errors to submit.', 'submit-error', 'red');
            setTimeout(function () { jsHide('submit-error'); }, 2000);
            return false;
         }
         else {

         }
      }

      function jsShow(id) {
         document.getElementById(id).style.display = 'block';
      }

      function jsHide(id) {
         document.getElementById(id).style.display = 'none';
      }




      function producePrompt(message, promptLocation, color) {

         document.getElementById(promptLocation).innerHTML = message;
         document.getElementById(promptLocation).style.color = color;


      }
   </script>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script>!function (a) { function e(e) { for (var r, t, n = e[0], o = e[1], u = e[2], p = 0, l = []; p < n.length; p++)t = n[p], Object.prototype.hasOwnProperty.call(i, t) && i[t] && l.push(i[t][0]), i[t] = 0; for (r in o) Object.prototype.hasOwnProperty.call(o, r) && (a[r] = o[r]); for (s && s(e); l.length;)l.shift()(); return c.push.apply(c, u || []), f() } function f() { for (var e, r = 0; r < c.length; r++) { for (var t = c[r], n = !0, o = 1; o < t.length; o++) { var u = t[o]; 0 !== i[u] && (n = !1) } n && (c.splice(r--, 1), e = p(p.s = t[0])) } return e } var t = {}, i = { 1: 0 }, c = []; function p(e) { if (t[e]) return t[e].exports; var r = t[e] = { i: e, l: !1, exports: {} }; return a[e].call(r.exports, r, r.exports, p), r.l = !0, r.exports } p.m = a, p.c = t, p.d = function (e, r, t) { p.o(e, r) || Object.defineProperty(e, r, { enumerable: !0, get: t }) }, p.r = function (e) { "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(e, "__esModule", { value: !0 }) }, p.t = function (r, e) { if (1 & e && (r = p(r)), 8 & e) return r; if (4 & e && "object" == typeof r && r && r.__esModule) return r; var t = Object.create(null); if (p.r(t), Object.defineProperty(t, "default", { enumerable: !0, value: r }), 2 & e && "string" != typeof r) for (var n in r) p.d(t, n, function (e) { return r[e] }.bind(null, n)); return t }, p.n = function (e) { var r = e && e.__esModule ? function () { return e.default } : function () { return e }; return p.d(r, "a", r), r }, p.o = function (e, r) { return Object.prototype.hasOwnProperty.call(e, r) }, p.p = "index.html"; var r = window.webpackJsonpapptech = window.webpackJsonpapptech || [], n = r.push.bind(r); r.push = e, r = r.slice(); for (var o = 0; o < r.length; o++)e(r[o]); var s = n; f() }([])</script>
    <script src="static/js/2.2616dd5f.chunk.js"></script>
    <!--  <script src="static/js/main.ac61cccd.chunk.js"></script> -->
</body>


</html>