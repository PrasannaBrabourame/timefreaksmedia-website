<?php
include('header.php');
?>
<div class="main">
    <section class="hero-section background-img ptb-100" style="background: url(&quot;./img/hero-bg-1.jpg&quot;) center center no-repeat fixed;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-5">
                        <h1 class="text-white mb-1">Disclaimer</h1>
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
                        <p class="lead">TimeFreaksMedia suggests that you consult with your Advocate before
                            you file any of the foregoing written communications (i.e., the above-described
                            takedown notices, and the above described counter-notice). Any person who
                            knowingly materially misrepresents that material found on the Platform is
                            infringing, or that material was removed from the Platform by mistake or
                            misidentification, may expose himself / herself to liability.
                            TimeFreaksMedia understands that not everyone is a copyright expert, and that
                            accidents can happen. However, TimeFreaksMedia has zero tolerance for wilful and
                            repeat copyright infringers. Therefore, pursuant to a complaint, if
                            TimeFreaksMedia determines in its sole discretion that you have wilfully
                            violated the copyrights of others or that you have repeatedly violated the
                            copyrights of others despite prior warning(s), TimeFreaksMedia will cancel your
                            account and prohibit you from further accessing and using the Platform. By
                            accessing or using the Platform, you automatically acknowledge and agree that
                            TimeFreaksMedia has the right to cancel your account and prohibit you from
                            further accessing and using the Platform, and your continuing access or use of
                            the Platform reaffirms your acknowledgment and agreement in each instance.</p>
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