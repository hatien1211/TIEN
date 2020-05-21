<!DOCTYPE html>
<html lang="en">
  <head>
    <title>My Hotel &mdash; Chào mừng đến với khách sạn</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="{{asset('')}}">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="asset/frontend/fonts/icomoon/style.css">

    <link rel="stylesheet" href="asset/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/frontend/css/magnific-popup.css">
    <link rel="stylesheet" href="asset/frontend/css/jquery-ui.css">
    <link rel="stylesheet" href="asset/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="asset/frontend/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="asset/frontend/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="asset/frontend/css/animate.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    
    
    <link rel="stylesheet" href="asset/frontend/fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="asset/frontend/css/aos.css">

    <link rel="stylesheet" href="asset/frontend/css/style.css">
    
  </head>
  <body>
  
  
    
@include('frontend.layout.header')
@include('frontend.layout.slide')
@yield('content')
    
@include('frontend.layout.footer')
</div>

  <script src="asset/frontend/js/jquery-3.3.1.min.js"></script>
  <script src="asset/frontend/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="asset/frontend/js/jquery-ui.js"></script>
  <script src="asset/frontend/js/popper.min.js"></script>
  <script src="asset/frontend/js/bootstrap.min.js"></script>
  <script src="asset/frontend/js/owl.carousel.min.js"></script>
  <script src="asset/frontend/js/jquery.stellar.min.js"></script>
  <script src="asset/frontend/js/jquery.countdown.min.js"></script>
  <script src="asset/frontend/js/jquery.magnific-popup.min.js"></script>
  <script src="asset/frontend/js/bootstrap-datepicker.min.js"></script>
  <script src="asset/frontend/js/aos.js"></script>

  
  <script src="asset/frontend/js/mediaelement-and-player.min.js"></script>

  <script src="asset/frontend/js/main.js"></script>
    @yield('script');

  <!-- <script>
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    </script> -->

  </body>
</html>