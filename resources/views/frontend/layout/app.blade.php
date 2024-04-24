<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>@yield('title')</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="login.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-..." crossorigin="anonymous">

   </head>
   <body>
    {{-- header --}}
      <header>
         <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="topbar-logo">
               <div class="container">
                  <div class="row">
                     <div class="col-xs-6">
                        <a class="navbar-brand" href="/">
                           <h1 style="color: #fff;">Demo</h1>
                        </a>
                     </div>
                     {{-- search icon --}}
                     <div class="col-xs-4  text-right">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#search">
                        <i class="fa fa-search"></i>
                        </button>
                        <form class="navbar-form hidden-xs" role="search" action="/" method="GET">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="Please enter name of broker" />
                              <span class="input-group-btn">
                              <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                              </span>
                           </div>
                        </form>
                     </div>
                      {{-- end search icon --}}

                      {{-- user icon --}}
                     <div class="col-xs-2 login-icon" >
                        <i class="fas fa-user"></i>
                     </div>
                     {{-- end user icon --}}

                      {{-- login popup  --}}

                     <div class="popup">
                        <div class="popup-content">
                           <span class="close">&times;</span>

                           <form action="#">
                              {{-- <p>Registration is automatically completed as successful first login.</p>
                              <input type="email" placeholder="Enter Email" required>
                              <input type="password" placeholder="Password" required>
                              <button type="submit">Next</button>
                              <a href="">
                                 <p>Forgot Password</p>
                              </a> --}}
                              <div class="header">
                                <h3>Log in</h3>
                            </div>
                            <div class="account">
                                <h4>Email/ Account ID</h4>
                            </div>
                            <div class="line">
                                <hr />
                            </div>
                            <div class="para">
                                <p>Registration is automatically completed as successful first login.</p>
                            </div>
                            <div class="input">
                                <input type="text" placeholder="Enter Email/ Account ID" name="email" id="email">
                            </div>
                            <div class="submit">
                                <input type="submit" value="Next" name="submit" id="submit">
                            </div>
                            <div class="forgot text-center mt-5 ">
                                <p>Forget Password</p>
                            </div>
                           </form>

                        </div>
                     </div>

                     {{-- end login popup form --}}
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                     <span class="sr-only">Toggle navigation</span>
                     <div class="toggle-products"><i class="fa fa-th-large" aria-hidden="true"></i> </div>
                  </button>
               </div>
               <div class="row">
                  <div class="col-xs-12">
                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                           <li><a href="#">Home</a></li>
                           <li><a href="#">Brokers</a></li>
                           <li><a href="#">Ranking List</a></li>
                           <li><a href="#">Ragulators</a></li>
                           <li><a href="#">Live</a></li>
                           <li><a href="#">Discover</a></li>
                           <li><a href="#">Exposure</a></li>
                           <li><a href="#">News</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="collapse navbar-collapse hidden-lg" id="search">
               <form class="mobile_search hidden-sm hidden-md hidden-lg" role="search" action="/" method="GET">
                  <div class="input-group">
                     <input type="text" class="form-control" placeholder="Please enter name of broker" />
                     <span class="input-group-btn">
                     <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                     </span>
                  </div>
               </form>
            </div>
         </nav>
      </header>
    {{-- end header --}}

    {{-- main start --}}

    <main>

        @yield('content')

    </main>

    {{-- main end --}}

    {{-- start footer --}}
      <footer class="footer-section">
         <div class="container">
            <div class="footer-cta pt-5 pb-5">
            </div>
            <div class="footer-content pt-5 pb-5">
               <div class="row">
                  <div class="col-xl-4 col-lg-4 mb-50">
                     <div class="footer-widget">
                        <div class="footer-logo">
                           <h1 style="color: #fff;">Demo</h1>
                        </div>
                        <div class="footer-text">
                           <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
                              elit,Lorem ipsum dolor sit amet.
                           </p>
                        </div>
                        <div class="footer-social-icon">
                           <span>Follow us</span>
                           <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                           <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                           <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                     <div class="footer-widget">
                        <div class="footer-widget-heading">
                           <h3>Useful Links</h3>
                        </div>
                        <ul>
                           <li><a href="#">Home</a></li>
                           <li><a href="#">about</a></li>
                           <li><a href="#">services</a></li>
                           <li><a href="#">portfolio</a></li>
                           <li><a href="#">Contact</a></li>
                           <li><a href="#">About us</a></li>
                           <li><a href="#">Our Services</a></li>
                           <li><a href="#">Expert Team</a></li>
                           <li><a href="#">Contact us</a></li>
                           <li><a href="#">Latest News</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                     <div class="footer-widget">
                        <div class="footer-widget-heading">
                           <h3>Subscribe</h3>
                        </div>
                        <div class="footer-text mb-25">
                           <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                        </div>
                        <div class="subscribe-form">
                           <form action="#">
                              <input type="text" placeholder="Email Address">
                              <button><i class="fab fa-telegram-plane"></i></button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright-area">
            <div class="container">
               <div class="row">
                  <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                     <div class="copyright-text">
                        <p>Copyright &copy; 2024, Brokers All Right Reserved </p>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                     <div class="footer-menu">
                        <ul>
                           <li><a href="#">Home</a></li>
                           <li><a href="#">Terms</a></li>
                           <li><a href="#">Privacy</a></li>
                           <li><a href="#">Policy</a></li>
                           <li><a href="#">Contact</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>

      <script src="nav.js"></script>
      <script src="login-popup.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   </body>
</html>
