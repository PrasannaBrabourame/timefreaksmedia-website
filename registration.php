<?php
include('header.php');
?>
<div class="main">
    <section class="hero-section background-img ptb-100" style="background: url(&quot;./img/hero-bg-1.jpg&quot;) center center no-repeat fixed;">
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
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6">
                    <form method="POST" id="contactForm1" class="contact-us-form" novalidate="" actions="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <h5>Reach us quickly</h5>
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <div class="form-group"><input id="contact-name" type="text" class="form-control" name="name" placeholder="Enter Your name" required="" value="" onkeyup='validateName()'>
                                    <span class='error-message' id='name-error'></span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="form-group"><input id="contact-email" type="email" class="form-control" name="email" placeholder="Enter Your email" required="" value="" onkeyup='validateEmail()'>
                                    <span class='error-message' id='email-error'></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <div class="form-group"><input id="contact-phone" type="text" name="phone" class="form-control" id="phone" placeholder="Enter Your Phone" value="" onkeyup='validatePhone()'>
                                    <span class='error-message' id='phone-error'></span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="form-group"><input id="contact-location" type="text" name="location" size="40" class="form-control" id="location" placeholder="Enter Your Location" value="" onkeyup="validateLocation()">
                                    <span class='error-message' id='location-error'></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <div class="form-group checkbox-wrapper"><input id='checkbox-rj-vj' name="checkbox-rj-vj" type="checkbox" class="form-control checkbox" value="rjvj" rows="7" cols="25" placeholder="checkbox-rj-vj"><label for="checkbox-rj-vj" class="checkbox-label">RJ & VJ Workshop</label>
                                    <span class='error-message' id='message-error'></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <div class="form-group checkbox-wrapper"><input id='checkbox-photo' name="checkbox-photo" type="checkbox" class="form-control checkbox" rows="7" cols="25" placeholder="checkbox-photo">
                                    <label for="checkbox-photo" class="checkbox-label">Photography
                                        Workshop</label>
                                    <span class='error-message' id='message-error'></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mt-3"><button type="submit" class="btn primary-solid-btn" id="btnContactUs" onclick='return validateForm()'>Send Message</button>
                                <span class='error-message' id='submit-error'></span>
                            </div>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.202044023641!2d80.18791811527522!3d13.086384315888763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526406e0b2e4f7%3A0x13bd6e9abe9f8351!2sFloor%2C%205th%20Block%2C%205%2C%201st%20St%2C%20Nungapakkam%2C%20Collector%20Nagar%2C%20Kalaivanar%20Colony%2C%20Chennai%2C%20Tamil%20Nadu%20600050!5e0!3m2!1sen!2sin!4v1590955900690!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>
<div>
    <?php
    include('footer.php');
    ?>
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

    function validateLocation() {
        var name = document.getElementById('contact-location').value;
        if (name.length == 0) {
            producePrompt('Location is required', 'location-error', 'red')
            return false;
        }
        producePrompt('Valid', 'location-error', 'green');
        return true;
    }

    function validatePhone() {
        var phone = document.getElementById('contact-phone').value;
        var phoneno = /^\d{10}$/;
        if (inputtxt.value.match(phoneno)) {
            producePrompt('Valid', 'phone-error', 'green');
            return true;
        } else {
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
            setTimeout(function() {
                jsHide('submit-error');
            }, 2000);
            return false;
        } else {
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST['name'];
                $to = "udhayan.in@gmail.com";
                $subject = "Registration for Workshop";
                $message = "<b>Request a Call details</b>";
                $message .= "<h3>Name :" . $name . "</h3>";
                $message .= "<h3>Email :" . $_POST['email'] . "</h3>";
                $message .= "<h3>Mobile :" . $_POST['phone'] . "</h3>";
                $message .= "<h3>Location :" . $_POST['location'] . "</h3>";
                $message .= "<h3>RJVJ Workshop :" . $_POST['checkbox-rj-vj'] . "</h3>";
                $message .= "<h3>Photography Workshop :" . $_POST['checkbox-photo'] . "</h3>";
                $header = "From:hello@timefreaksmedia.com \r\n";
                $header .= "MIME-Version: 1.0\r\n";
                $header .= "Content-type: text/html\r\n";
                $retval = mail($to, $subject, $message, $header);
                if ($retval == true) {
                    header('location:http://www.timefreaksmedia.com/courses.html?status=success');
                } else {
                    echo "0";
                }
            }
            ?>
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
<script>
    ! function(a) {
        function e(e) {
            for (var r, t, n = e[0], o = e[1], u = e[2], p = 0, l = []; p < n.length; p++) t = n[p], Object.prototype.hasOwnProperty.call(i, t) && i[t] && l.push(i[t][0]), i[t] = 0;
            for (r in o) Object.prototype.hasOwnProperty.call(o, r) && (a[r] = o[r]);
            for (s && s(e); l.length;) l.shift()();
            return c.push.apply(c, u || []), f()
        }

        function f() {
            for (var e, r = 0; r < c.length; r++) {
                for (var t = c[r], n = !0, o = 1; o < t.length; o++) {
                    var u = t[o];
                    0 !== i[u] && (n = !1)
                }
                n && (c.splice(r--, 1), e = p(p.s = t[0]))
            }
            return e
        }
        var t = {},
            i = {
                1: 0
            },
            c = [];

        function p(e) {
            if (t[e]) return t[e].exports;
            var r = t[e] = {
                i: e,
                l: !1,
                exports: {}
            };
            return a[e].call(r.exports, r, r.exports, p), r.l = !0, r.exports
        }
        p.m = a, p.c = t, p.d = function(e, r, t) {
            p.o(e, r) || Object.defineProperty(e, r, {
                enumerable: !0,
                get: t
            })
        }, p.r = function(e) {
            "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                value: "Module"
            }), Object.defineProperty(e, "__esModule", {
                value: !0
            })
        }, p.t = function(r, e) {
            if (1 & e && (r = p(r)), 8 & e) return r;
            if (4 & e && "object" == typeof r && r && r.__esModule) return r;
            var t = Object.create(null);
            if (p.r(t), Object.defineProperty(t, "default", {
                    enumerable: !0,
                    value: r
                }), 2 & e && "string" != typeof r)
                for (var n in r) p.d(t, n, function(e) {
                    return r[e]
                }.bind(null, n));
            return t
        }, p.n = function(e) {
            var r = e && e.__esModule ? function() {
                return e.default
            } : function() {
                return e
            };
            return p.d(r, "a", r), r
        }, p.o = function(e, r) {
            return Object.prototype.hasOwnProperty.call(e, r)
        }, p.p = "index.html";
        var r = window.webpackJsonpapptech = window.webpackJsonpapptech || [],
            n = r.push.bind(r);
        r.push = e, r = r.slice();
        for (var o = 0; o < r.length; o++) e(r[o]);
        var s = n;
        f()
    }([])
</script>
<script src="static/js/2.2616dd5f.chunk.js"></script>
<!--  <script src="static/js/main.ac61cccd.chunk.js"></script> -->
</body>


</html>