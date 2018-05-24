<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/lightslider.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <title>GeoLab Project</title>
</head>
<body>
  <div class="header" id="home" >
    <div class="container-fluid circle">
      <div class="circle-1"></div>
      <div class="circle-2"></div>
      <div class="circle-3"></div>
      <div class="circle-4"></div>
      <div class="circle-5"></div>
      <div class="circle-6"></div>
      <div class="circle-7"></div>
      <div class="circle-8"></div>
      <div class="circle-9"></div>
      <div class="circle-10"></div>
    </div>
    
    <div class="container-fluid top-nav-wrapper position-relative">
      <div class="row position-absolute w-100 pt-3 top-nav" style="z-index: 9999;">
        <div class="col">
          <img src="images/logo.png" class="project-logo" alt="" />
        </div>
        <div class="col text-right">
          <a href="#" class="nav-toggle" onclick="navToggle('open')"><i class="fas fa-align-right fa-2x" id="bars"></i></a>
        </div>
      </div>
      <div class="row"> 
        <div class="col px-0">
          <ul id="lightSlider">
            @foreach($slide as $sl)
            
						<li>
              <picture>
                    <img src="{{URL($sl->URl)}}" alt="main" style="width:100%; ">
                  </picture>
                  <div class="slide-layer">
                    <h2 class="text-right"> {{$sl->date}} </h2>
                    <h3>{{$sl->headName}} </h3>
                  </div>
                </li>
                @endforeach  
              </ul>
            </div>     	 
          </div>
        </div>
      </div> <!-- top-nav-wrapper END -->
      <div id="about">
        <div class="container-fluid main-container" >
          <div class="container">
            <h1 class="text-center py-5 title">The Corner Garage For Collector Cars</h1>
            <div class="row d-flex pb-5">
              @foreach($service as $s)
              <div class="col-md-4 mb-sm-4">
                <div class="card">
                  <img class="card-img-top" src="{{url($s->URL)}}" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-center">{{$s->name}}</p>
                  </div>
                </div>
              </div>
              @endforeach
              
              
            </div>
          </div>
        </div> <!-- main-container END -->
        
        <div class="container-fluid animation-container">
          <div class="row">
            <div class="col">
              
            </div>
          </div>
        </div>
        
      </div> <!-- animation-container END -->
      
      
      <div class="container-fluid contact-container" id="contact">
        <div class="row justify-content-center">
          <div class="col">
            <div class="row">
              <div class="col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d95278.13240901199!2d44.76881322784535!3d41.73256609185864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40440cd7e64f626b%3A0x61d084ede2576ea3!2sTbilisi!5e0!3m2!1sen!2sge!4v1526464080817" style="width: 100%; height: 700px; border:0;" allowfullscreen></iframe>
              </div>
            </div>
            
            <div class="row">
              <div class="col">
                <!-- Start -->
                <div class="contant-info d-flex">
                  
                  <div class="information">
                    <h3> Contact Information</h3>
                    <div class="social">
                      <h4>click to view</h4>
                      <div class="d-flex social-icons">
                        @foreach($icn as $i)
                        <div class="social-icon">
                          <a href="{{$i->URL}}" class="fab fa-{{$i->iconURL}}"></a>
                        </div>
                        @endforeach
                        
                      </div>
                    </div>
                    
                  </div>
                  
                  <div class="form">
                    <h3>Get in touch</h3>
                    <form id="contact-us" action='{{URL('indexm')}}' method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-wrapper d-flex">
                        <div class="section left">
                          <div class="form-group">
                            <input type="text" class="form-control rounded-0 fields" id="name" name="name" value="{{ old('name') }}" placeholder="name"  />
                            <label for="name"></label>
                            <span class="error-message name-error">please write your name</span>
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control rounded-0 fields" id="email" name="email" value="{{ old('email') }}" placeholder="email" required >
                            <label for="email"></label>
                            
                            <span class="error-message email-error">please write your email</span>
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control rounded-0 fields" id="subject" name="subject" value="{{old('subject')}}" placeholder="subject" required >
                            <label for="subject"></label>
                            
                            <span class="error-message subject-error">please write subject</span>
                          </div>
                          <div class="form-group">
                            <textarea class="form-control message rounded-0 fields" name="textarea" id="text" placeholder="text" required >{{ old("textarea") }}</textarea>
                            <label for="text"></label>
                            
                            <span class="error-message text-error">please write text</span>
                          </div>
                        </div>
                        
                        <div class="section right">
                          <div class="gender-wrapper d-flex">
                            <div class="gender d-flex" >
                              <span class="error-message">please choose your gender</span>
                              <div class="choice text-left">
                                <input type="radio" name="gender" class="d-none form-confign" id="male" checked value="male" />
                                <label class="label rounded-circle gender-switcher" for="male"></label>
                              </div>
                              <div class="choice">
                                male
                              </div>
                            </div>
                            <div class="gender d-flex">
                              <div class="choice">
                                <input type="radio" id="female"  class="d-none form-confign" value="female" name="gender" />
                                <label class="label rounded-circle gender-switcher" for="female"></label>
                              </div>
                              <div class="choice">
                                female
                              </div>
                            </div>
                          </div>
                          
                          
                          <div class="newsletter-wrapper">
                            <h5 class="newsletter-title">Sign up for newsletter:</h5>
                            <div class="newsletter-content">
                              <div class="d-flex mt-2">
                                <div class="checked">
                                  <input type="checkbox" id="images" class="d-none form-confign" name="option[]" value="1">
                                  <label  class="label checkbox-list" for="images"></label>
                                </div>
                                <div class="list">
                                  recive images
                                </div>
                              </div>
                              <div class="d-flex mt-2">
                                <div class="checked">
                                  <input type="checkbox" id="promotions"  class="d-none form-confign" name="option[]" value="2">
                                  <label class="label checkbox-list" for="promotions"></label>
                                </div> 
                                <div class="list">
                                  recive promotions
                                </div>
                              </div>
                              <div class="d-flex mt-2">
                                <div class="checked">
                                  <input type="checkbox" id="updates" class="d-none form-confign" name="option[]" value="3">
                                  <label class="label checkbox-list" for="updates"></label>
                                </div>
                                <div class="list">
                                  recive updates
                                </div>
                              </div>
                              <div class="d-flex mt-2">
                                <div class="checked">
                                  <input type="checkbox" id="job-offers" class="d-none form-confign" name="option[]" value="4">
                                  <label class="label checkbox-list" for="job-offers"></label>
                                </div>
                                <div class="list">
                                  recive job offers
                                </div>
                              </div>
                            </div>
                            <p style="color:gray"><b>{{$errors->first()}}</b></p>
                            <div class="form-group">
                              <input type="submit" class="form-control rounded-0 send-btn mt-4" name="send" value="send" />
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- END -->
              </div>
            </div>
            
            
          </div>
        </div>
      </div> <!-- contact-container END -->
      
      
      
      <div class="container-fluid footer-wrapper py-5 mt-5 mt-lg-5">
        <div class="container">
          <div class="row justify-content-between footer">
            <div class="col footer-text">
              <p>&#169; copyright 2018</p>
            </div>
            <div class="col footer-text text-right">
              <p>created by: Nana Seturidze, Beka Kokhodze</p>
            </div>
          </div>
        </div>
      </div> <!-- footer-wrapper END -->   
      
      
      
      
      <!-- Overlay Menu -->
      
      <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="navToggle('close')">×</a>
        <div class="overlay-content">
          <a href="#home">Home</a>
          <a href="#about">About</a>
          <a href="#contact">Contact</a>
        </div>
      </div> <!-- overlay END -->  
      
      
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
      <script src="js/lightslider.js"></script>
      
      
      <script type="text/javascript">
        $(document).ready(function() {
          $("#lightSlider").lightSlider({
            item: 1,
            slideMargin: 0,
            pager: false
          });
          
          $('#contact-us').submit(function( event ) {
            var errorMessage = [];
            
            if (  $('#name').val().length === 0 ) {
              $('.name-error').css({"opacity": "1"});
              errorMessage.push("name-error");
            }
            
            if (  $('#email').val().length === 0 ) {
              $('.email-error').css({"opacity": "1"});
              errorMessage.push("email-error");
            }
            
            if (  $('#subject').val().length === 0 ) {
              $('.subject-error').css({"opacity": "1"});
              errorMessage.push("subject-error");
            }
            
            if (  $('#text').val().length  === 0) {
              $('#text').preventDefault();
              $('.text-error').css({"opacity": "1"});
              errorMessage.push("text-error");
            }
            
            if ( errorMessage.length > 0  ) {
              event.preventDefault();
            }
            
          });
          
          
        });
        
        
      </script>
      
      <script type="text/javascript">
        function navToggle(action) {
          
          if (action == "open") {
            document.querySelector("#myNav").style.width = "100%";
            document.querySelector(".project-logo").setAttribute("src", "images/red-logo.png");
          }
          
          else {
            document.querySelector("#myNav").style.width = "0%";
            document.querySelector(".project-logo").setAttribute("src", "images/logo.png");
          }      
        }
        
        window.onclick = function(event) {
          if (!event.target.matches('#bars')) {
            
            document.querySelector("#myNav").style.width = "0%";
          }
          
        }
      </script>
      
      
      
    </body>
    </html>