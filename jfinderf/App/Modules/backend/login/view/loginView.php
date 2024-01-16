
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>jFinder</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="../../../../../Public/logo.png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="../../../../../Public/backend/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="../../../../../Public/backend/css/font-awesome.min.css">
    <!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="../../../../../Public/logo.png">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="../../../../../Public/backend/css/owl.carousel.css">
    <link rel="stylesheet" href="../../../../../Public/backend/css/owl.theme.css">
    <link rel="stylesheet" href="../../../../../Public/backend/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="../../../../../Public/backend/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="../../../../../Public/backend/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="../../../../../Public/backend/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="../../../../../Public/backend/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="../../../../../Public/backend/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="../../../../../Public/backend/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="../../../../../Public/backend/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="../../../../../Public/backend/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="../../../../../Public/backend/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../../../../../Public/backend/css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="../../../../../Public/backend/css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="../../../../../Public/backend/css/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="../../../../../Public/backend/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="../../../../../Public/backend/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


<?php
if (isset($_SESSION['email'])) {
    header("Location: /portal");
}
?>
<div class="color-line"></div>

<div class="container-fluid s-margin-top">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
            <div class="text-center m-b-md custom-login">
                <a href="/index"><img src="../../../../../Public/logo.png" alt=""></a>
                <!--                <p class="loginMainSub">Hoş geldiniz!</p>-->
            </div>
            <div class="hpanel">
                <div class="panel-body">
                    <form action="/session" method="POST" id="loginForm">
                        <div class="form-group">
                            <label class="control-label" for="email">Email</label>
                            <input type="text" title="Please enter you username"
                                   required name="users_email" id="email" class="form-control">
                            <span class="help-block small">Emailinizi doğru formatta giriniz.</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Şifre</label>
                            <input type="password" title="Please enter your password" required name="users_password" id="password" class="form-control">
                            <span class="help-block small">Şifrenizi eksiksiz giriniz.</span>
                        </div>
                        <div class="form-check">
                            <input id="rememberme" type="checkbox" class="form-check-input">
                            <label class="form-check-label" for="rememberme" name="rememberme">Beni Hatırla </label>
                            <p class="help-block small"><small><sup>**</sup>Eğer bu bilgisayarı sizden başkası
                                    kullanmıyor ise bu seçeneği seçiniz.</small></p>
                        </div>
                        <button class="btn btn-success btn-block loginbtn" >Giriş Yap</button>
                        <a class="btn btn-default btn-block" href="/signup">Kayıt Ol</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
    </div>
    <div class="row">
        <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center" style="color: #fff">
            <p>Copyright © 2024 All rights reserved.</p>
        </div>
    </div>
</div>


<!-- jquery
       ============================================ -->
<script src="../../../../../Public/backend/js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="../../../../../Public/backend/js/bootstrap.min.js"></script>
<!-- wow JS
    ============================================ -->
<script src="../../../../../Public/backend/js/wow.min.js"></script>
<!-- price-slider JS
    ============================================ -->
<script src="../../../../../Public/backend/js/jquery-price-slider.js"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="../../../../../Public/backend/js/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="../../../../../Public/backend/js/owl.carousel.min.js"></script>
<!-- sticky JS
    ============================================ -->
<script src="../../../../../Public/backend/js/jquery.sticky.js"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="../../../../../Public/backend/js/jquery.scrollUp.min.js"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="../../../../../Public/backend/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../../../../../Public/backend/js/scrollbar/mCustomScrollbar-active.js"></script>
<!-- metisMenu JS
    ============================================ -->
<script src="../../../../../Public/backend/js/metisMenu/metisMenu.min.js"></script>
<script src="../../../../../Public/backend/js/metisMenu/metisMenu-active.js"></script>
<!-- tab JS
    ============================================ -->
<script src="../../../../../Public/backend/js/tab.js"></script>
<!-- icheck JS
    ============================================ -->
<script src="../../../../../Public/backend/js/icheck/icheck.min.js"></script>
<script src="../../../../../Public/backend/js/icheck/icheck-active.js"></script>
<!-- plugins JS
    ============================================ -->
<script src="../../../../../Public/backend/js/plugins.js"></script>
<!-- main JS
    ============================================ -->
<script src="../../../../../Public/backend/js/main.js"></script>
<!-- AXIOS
    ============================================ -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<!-- CUSTOM
    ============================================ -->
<script src="../../../../../Public/backend/js/custom.js"></script>
</body>

</html>

