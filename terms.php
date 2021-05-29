<?php
include('header.php');
?>
<div class="main">
    <section class="hero-section background-img ptb-100" style="background: url(&quot;./img/hero-bg-1.jpg&quot;) center center no-repeat fixed;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-5">
                        <h1 class="text-white mb-1">Terms and Conditions</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="pricing" class="package-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <p class="lead">This document is an electronic record under the provisions of the
                            Information Technology Act, 2000 and Rules framed there under (as applicable or
                            amended from time to time). This electronic record is generated by a computer
                            system and does not require any physical or digital signatures. </p>
                        <p class="lead">This document is published in accordance with the provisions of Rule
                            3 (1) of the Information Technology (Intermediaries guidelines) Rules, 2011 that
                            require publishing the rules and regulations, privacy policy and User agreement
                            for access or usages of the www.timefreaksmedia. com website.</p>
                        <p class="lead">The terms "Time Freaks media" used in this document refers to
                            Timefreaksmedia.com Time Freaks Media, a company registered preparator under the
                            Companies Act, 1956 with its registered office at 5/172, 1st Floor, 5th Block,
                            Mug pair East, Chennai 600037, Tamil Nadu along with its subsidiaries and/ or
                            employees and/ or directors and/ or affiliates and/ or agents and/ or
                            representatives and/ or sub-contractors.</p>
                        <p class="lead">The term "Platform" used in this document refers to the website
                            (being www.timefreaksmedia.com), mobile apps and / or any other services offered
                            / to be offered by TimeFreaksMedia </p>
                        <p class="lead">These Terms and Conditions, together with the Terms of Use, Privacy
                            Policy, IPR Infringement Policy and any other terms specifically referred to in
                            any of those documents, constitute a legally binding agreement (the "Agreement")
                            between you and TimeFreaksMedia in relation to your use of the Platform.</p>
                        <p class="lead">All intellectual property which is in relation to this Platform is
                            owned by and vests in TimeFreaksMedia.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div>
    <?php
    include('footer.php');
    ?>
</div>
</div>
</div>

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