<?php 
 
    //require_once('./db/connection.php');

    foreach($_GET as $key => $val) $link[] = $key;
    $content = !isset($link) ? header('location: ./?home') : $link[0];
    $include_file = $content .'.php';
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>RADIO MBI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.2'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="1831220277094055">
</div>

  <div class="site-wrap">
    <div class="site-navbar mt-4">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class="mb-0"><a href="/" class="text-white h2 mb-0"><strong>RADIO MBI<span class="text-primary">.</span></strong></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active">
                    <a href="./">LAMAN UTAMA</a>
                  </li>
                  <li class="has-children">
                    <a href="#">DJ ANDA</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="./?jadualdj">JADUAL KONTI</a></li>
                      <li class="has-children">
                      <a href="#">BIODATA DJ</a>
                        <ul class="dropdown">
                          <li><a href="./?djriz">DJ RIZ</a></li>
                          <li><a href="./?djsyah">DJ SYAH</a></li>
                          <li><a href="./?djzam">DJ ZAM</a></li>
                          <li><a href="./?djelly">DJ ELLY</a></li>
                          <li><a href="./?djfaz">DJ FAZ</a></li>
                          <li><a href="./?djisz">DJ ISZ</a></li>
                          <li><a href="./?djiz">DJ IZ</a></li>
                          <li><a href="./?djmil">DJ MIL</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>                   
                  <li class="has-children">
                    <a href="#">AKTIVITI</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="./?testimoni">TESTIMONI</a></li>
                      <li><a href="./?temuramah">TEMURAMAH</a></li>
                    </ul>
                  </li>
                  <li><a href="./?teknikal">TEKNIKAL</a></li>
                  <li><a href="./?tentang">TENTANG KAMI</a></li>
                </ul>
              </nav>
            </div>
           

          </div>
        </div>
      </div>
    </div>

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <?php include($include_file) ?>

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h3 class="footer-heading mb-4">Tentang Kami</h3>
            <p>Radio MBI sekarang boleh didengari dimana sahaja anda berada. Walau bagaimanapun DJ hanya akan menemai pendengar dari 8.00 pagi hingga 5.00 petang pada waktu pejabat. Anda boleh berinteraksi dengan peneraju-peneraju Radio MBI di sini.</p>   
            <br/>
            <h3 class="footer-heading mb-4">Hubungi Kami</h3>
              <p><img src="images/location.png" style="height: 22px; width:22px;">&ensp;Jalan Sultan Abdul Jalil <br> &ensp;&ensp;&ensp;&ensp;30450 Greentown Ipoh <br> &ensp;&ensp;&ensp;&ensp;Perak Darul Ridzuan </p>
              <p><img src="images/call.png" style="height: 20px; width:16px;">&ensp; +605 2083333</p>
              <p><img src="images/mail.png" style="height: 20px; width:20px;">&ensp; radiombi@mbi.gov.my</p>
              <div> <a href="https://www.facebook.com/RadioMajlisBandarayaIpoh/" target="_blank" class="pl-0 pr-3"><span class="icon-facebook"></span>&ensp;FB Radio MBI</a></div>
          </div>
          
          <div class="col-sm-4">
            <h3 class="footer-heading mb-4">Dengar secara talian</h3>
              <div class="block-16">
                <figure>
                  <img src="images/logo_radiombi.png" alt="Image placeholder" class="img-fluid rounded">
                  <a href="http://ca4.rcast.net:8020/;stream.mp3" class="play-button popup-vimeo"><span class="icon-play"></span></a>
                </figure>
              </div>
          </div> 
        </div>    
      </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Hakcipta <a href="http://www.mbi.gov.my/" target="_blank" >Majlis Bandaraya Ipoh</a>  &copy; <script>document.write(new Date().getFullYear());</script> </p>
            <p>This template is made by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <div class="visitor-count" style="background:#fff;">
              <?php include "counter.php"; ?>
            </div>
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <?php
		//$time = microtime();
		//$time = explode(' ', $time);
		//$time = $time[1] + $time[0];
		//$finish = $time;
		//$total_time = round(($finish - $timestart), 4);
	?>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mediaelement-and-player.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
  <script src="js/jquery.bootstrap-growl.min.js"></script>

  <!-- a helper script for vaidating the form-->
  <script language="JavaScript">
    // Code for validating the form
    // Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
    // for details
    var frmvalidator  = new Validator("borangmaklumbalas");
    frmvalidator.addValidation("nama","req","Sila masukkan nama"); 
    frmvalidator.addValidation("emelpelawat","req","Sila masukkan emel"); 
    frmvalidator.addValidation("emelpelawat","emel","Sila masukkan emel yang benar"); 
    frmvalidator.addValidation("mesej","req","Sila masukkan maklumbalas");
    </script>
  </body>
</html>