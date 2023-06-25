<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/font/Mont/')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Curist</title>
  </head>
  <body>
    <!-- dsktop  navbar start here -->
    <header class="desktop-menu">
      <div class="container">
        <div class="main-header-outer">
          <div class="header-logo">
            <a href="#">
              <img src="{{asset('assets/images/logo.png')}}" class="img-fluid">
            </a>
          </div>
          <div class="header-menu">
            <div class="header-inner">
              <ul>
                <li>
                  <a href="#">Home</a>
                </li>
                <li>
                  <a href="#">Features</a>
                </li>
                <li>
                  <a href="#">Screenshots</a>
                </li>
                <li>
                  <a href="#">Contact us</a>
                </li>
                <li>
                  <a href="#" class="download-btn">Download Now</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--desktop navbar end here -->
    <header class="mobile-menu">
      <div class="container">
        <div class="main-header-outer">
          <div class="header-logo">
            <a href="#">
              <img src="{{asset('assets/images/logo.png')}}" class="img-fluid">
            </a>
          </div>
          <div class="header-menu">
            <div class="header-inner">
              <nav>
                <div class="menu-btn">
                  <div class="line line--1"></div>
                  <div class="line line--2"></div>
                  <div class="line line--3"></div>
                </div>
                <div class="nav-links">
                  <div class="header-inner">
                    <ul>
                      <li>
                        <a href="#">Home</a>
                      </li>
                      <li>
                        <a href="#">Features</a>
                      </li>
                      <li>
                        <a href="#">Screenshots</a>
                      </li>
                      <li>
                        <a href="#">Contact us</a>
                      </li>
                      <li>
                        <a href="#" class="download-btn">Download Now</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--desktop navbar end here -->
    <!-- Hero banner start here -->
    <section class="hero-sec">
      <div class="container">
        <div class="hero-main-outer">
          <div class="hero-content">
            <div class="hero-inner-content">
              <h1 data-aos="fade-up" data-aos-duration="3000">@if($data){{$data->heading}}@endif</h1>
              <p data-aos="fade-up" data-aos-duration="3000">@if($data){{$data->detail}}@endif</p>
              <a href="@if($data){{$data->btn_link}}@endif" data-aos="fade-up" data-aos-duration="3000">
                <img src="{{asset('assets/'.$data->btn_text)}}" class="img-fluid">
              </a>
              <a href="@if($data){{$data->btn_link_1}}@endif" data-aos="fade-up" data-aos-duration="3000">
                <img src="{{asset('assets/'.$data->btn_text_1)}}" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="hero-media">
            <div class="hero-img">
              <img src="{{asset('assets/'.$data->logo)}}" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero banner end here -->
    <!-- scroller -->
    <section class="scroll-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-2 m-auto">
            <div class="circle-div">
              <div class="circle-inner-div">
                <a href="#scroll">
                  <i class="fa fa-arrow-down" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- scroller end -->
    <!-- benifits section start here -->
    <section class="benifit-sec">
      <div class="container">
        <div class="benifts-main-outers">
          <div class="left-round-box">
            <div class="inner-box">
              <h2>B</h2>
            </div>
          </div>
          <div class="right-benifit-content">
            <p>BENEFITS</p>
          </div>
        </div>
      </div>
    </section>
    <!-- benifits section end here -->
    <!-- benifits content section start here -->
    <section class="benifit-cont-sec">
      <div class="container">
        <div class="benifts-main-outer benifits-sec-mar my-peralex" id="scroll">
          <div class="benifts-left-content benifit-one">
            <div class="benifts-left-bg single-image-slide" data-aos="fade-up" data-aos-duration="3000">
              <div class="benifts-left-inner">
                <img src="{{asset('assets/images/benifits-1.png')}}" class="img-fluid">
              </div>
              <div class="benifts-left-inner">
                <img src="{{asset('assets/images/benifits-2.png')}}" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="benifts-right-content">
            <div class="benifts-right-inner">
              <span data-aos="fade-up" data-aos-duration="3000">For Tourists</span>
              <h2 data-aos="fade-up" data-aos-duration="3000">Curist - benefits for tourists</h2>
              <div class="benifts-right-content-outer" data-aos="fade-up" data-aos-duration="3000">
                <div class="left-icon">
                  <img src="{{asset('assets/images/icon.png')}}" class="img-fluid">
                </div>
                <div class="benifts-right-text">
                  <p>The first all-in digital platform to serve your visitor with curated information and rich content including immersive augmented reality experiences</p>
                </div>
              </div>
              <div class="benifts-right-content-outer" data-aos="fade-up" data-aos-duration="3000">
                <div class="left-icon">
                  <img src="{{asset('assets/images/icon.png')}}" class="img-fluid">
                </div>
                <div class="benifts-right-text">
                  <p>The first all-in digital platform to serve your visitor with curated information and rich content including immersive augmented reality experiences</p>
                </div>
              </div>
              <div class="benifts-right-content-outer" data-aos="fade-up" data-aos-duration="3000">
                <div class="left-icon">
                  <img src="{{asset('assets/images/icon.png')}}" class="img-fluid">
                </div>
                <div class="benifts-right-text">
                  <p>The first all-in digital platform to serve your visitor with curated information and rich content including immersive augmented reality experiences</p>
                </div>
              </div>
              <div class="benifts-right-content-outer" data-aos="fade-up" data-aos-duration="3000">
                <div class="left-icon">
                  <img src="{{asset('assets/images/icon.png')}}" class="img-fluid">
                </div>
                <div class="benifts-right-text">
                  <p>The first all-in digital platform to serve your visitor with curated information and rich content including immersive augmented reality experiences</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="benifts-main-outer " style="background-color: #ffff;">
          <div class="benifts-right-content">
            <div class="benifts-right-inner">
              <span>For Tourists</span>
              <h2>Curist - benefits for tourists</h2>
              <div class="benifts-right-content-outer">
                <div class="left-icon">
                  <img src="{{asset('assets/images/icon.png')}}" class="img-fluid">
                </div>
                <div class="benifts-right-text">
                  <p>The first all-in digital platform to serve your visitor with curated information and rich content including immersive augmented reality experiences</p>
                </div>
              </div>
              <div class="benifts-right-content-outer">
                <div class="left-icon">
                  <img src="{{asset('assets/images/icon.png')}}" class="img-fluid">
                </div>
                <div class="benifts-right-text">
                  <p>The first all-in digital platform to serve your visitor with curated information and rich content including immersive augmented reality experiences</p>
                </div>
              </div>
              <div class="benifts-right-content-outer">
                <div class="left-icon">
                  <img src="{{asset('assets/images/icon.png')}}" class="img-fluid">
                </div>
                <div class="benifts-right-text">
                  <p>The first all-in digital platform to serve your visitor with curated information and rich content including immersive augmented reality experiences</p>
                </div>
              </div>
              <div class="benifts-right-content-outer">
                <div class="left-icon">
                  <img src="{{asset('assets/images/icon.png')}}" class="img-fluid">
                </div>
                <div class="benifts-right-text">
                  <p>The first all-in digital platform to serve your visitor with curated information and rich content including immersive augmented reality experiences</p>
                </div>
              </div>
            </div>
          </div>
          <div class="benifts-left-content benifit-two">
            <div class="benifts-left-bg single-image-slide-2">
              <div class="benifts-left-inner">
                <img src="assets/images/benifits-2.png" class="img-fluid">
              </div>
              <div class="benifts-left-inner">
                <img src="assets/images/benifits-1.png" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- benifits content section end here -->
    <!-- multifunction sec start here -->
    <section class="benifit-sec">
      <div class="container">
        <div class="benifts-main-outers">
          <div class="left-round-box">
            <div class="inner-box">
              <h2>M</h2>
            </div>
          </div>
          <div class="right-benifit-content">
            <p>MULTIFUNCTION</p>
          </div>
        </div>
      </div>
    </section>
    <!-- multifunction sec end here -->
    <!-- multifunction image sec start here -->
    <section class="multi-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-12 multi-media">
            <img src="@if($Multifunction){{asset('assets/'.$Multifunction->logo)}}@endif" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    <!-- multifunction image sec end here -->
    <!-- tabs section start here -->
    <section class="tab-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-12 m-auto">
            <div class="progressTab">
              <div class="progress-tabmenu">
                <ul class="nav" id="progressTab" role="tablist">
                  <li class="nav-item active my-nav-1">
                    <a class="nav-link" id="formTab1" data-toggle="tab" href="#progressTab1" role="tab" aria-controls="progressTab1" aria-selected="true">
                      <div class="span-bor">
                        <span></span>
                      </div>
                      <p>Augmented Reality</p>
                    </a>
                  </li>
                  <li class="nav-item my-nav-2">
                    <a class="nav-link" id="formTab2" data-toggle="tab" href="#progressTab2" role="tab" aria-controls="progressTab2" aria-selected="false">
                      <div class="span-bor">
                        <span></span>
                      </div>
                      <p>Curated content</p>
                    </a>
                  </li>
                  <li class="nav-item my-nav-3">
                    <a class="nav-link" id="formTab3" data-toggle="tab" href="#progressTab3" role="tab" aria-controls="progressTab3" aria-selected="false">
                      <div class="span-bor">
                        <span></span>
                      </div>
                      <p>Curated content</p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="progress-tabbody">
                <div class="tab-content" id="progressTabContent">
                  <div class="tab-pane fade show active" id="progressTab1" role="tabpanel" aria-labelledby="formTab1">
                    <div class="tabs-main-outer">
                      <div class="tabs-left-media">
                        <div class="tabs-media">
                          <img src="@if($data){{asset('assets/'.$Tourist->logo)}}@endif" class="img-fluid">
                        </div>
                      </div>
                      <div class="tabs-right-content">
                        <span>@if($Tourist){{$Tourist->sub_heading}}@endif</span>
                        <h2>@if($Tourist){{$Tourist->heading}}@endif</h2>
                        <p>@if($Tourist){{$Tourist->detail}}@endif</p>
                        <a href="@if($Tourist){{$Tourist->btn_link}}@endif">
                          <img src="@if($data){{asset('assets/'.$Tourist->btn_text)}}@endif" class="img-fluid">
                        </a>
                        <a href="@if($Tourist){{$Tourist->btn_link_1}}@endif">
                          <img src="@if($data){{asset('assets/'.$Tourist->btn_text_1)}}@endif" class="img-fluid">
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="progressTab2" role="tabpanel" aria-labelledby="formTab2">
                    <div class="tabs-main-outer">
                      <div class="tabs-left-media">
                        <div class="tabs-media">
                          <img src="{{asset('assets/images/tabs-media.png')}}" class="img-fluid">
                        </div>
                      </div>
                      <div class="tabs-right-content">
                        <span>For Tourists</span>
                        <h2>Dowload the Curist app now, for iOS or Android.</h2>
                        <p>Are you a tourist destination, city, region, heritage site or museum? Do you also want to offer your visitors the most advanced and immersive local experience? Then click here to plan a call or (online) meeting with someone from the Curist team.</p>
                        <a href="#">
                          <img src="{{asset('assets/images/google-play.png')}}" class="img-fluid">
                        </a>
                        <a href="#">
                          <img src="{{asset('assets/images/apple.png')}}" class="img-fluid">
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="progressTab3" role="tabpanel" aria-labelledby="formTab3">
                    <div class="tabs-main-outer">
                      <div class="tabs-left-media">
                        <div class="tabs-media">
                          <img src="{{asset('assets/images/tabs-media.png')}}" class="img-fluid">
                        </div>
                      </div>
                      <div class="tabs-right-content">
                        <span>For Tourists</span>
                        <h2>Dowload the Curist app now, for iOS or Android.</h2>
                        <p>Are you a tourist destination, city, region, heritage site or museum? Do you also want to offer your visitors the most advanced and immersive local experience? Then click here to plan a call or (online) meeting with someone from the Curist team.</p>
                        <a href="#">
                          <img src="{{asset('assets/images/google-play.png')}}" class="img-fluid">
                        </a>
                        <a href="#">
                          <img src="{{asset('assets/images/apple.png')}}" class="img-fluid">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- tabs section end here -->
    <!-- our team sec start here -->
    <section class="team-sec">
      <div class="container">
        <div class="team-outer-main">
          <div class="team-left-content">
            <h2>Meet our Team & Investors</h2>
          </div>
          <div class="team-right-content">
            <div class="team-right-inner-outer">
              <div class="team-logo">
                <div class="team-logo-media">
                  <img src="{{asset('assets/images/develope-logo.png')}}" class="img-fluid">
                </div>
              </div>
              <div class="team-develop-content">
                <h3>Developed by</h3>
                <p>Hunddlers</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-12">
            <div class="row">
              @foreach($Team as $team)
              <div class="col-md-6 col-6">
                <div class="team-media" style="background-image: url('{{asset('assets/'.$team->image)}}')">
                  <h3>
                    <a href="#">{{$team->name}}</a>
                  </h3>
                  <p>{{$team->role}}</p>
                  <div class="team-overlay"></div>
                </div>
              </div>
              @endforeach

            </div>
          </div>
          <div class="col-md-6 col-12 team-right-pad">
            <p>Are you a tourist destination, city, region, heritage site or museum? Do you also want to offer your visitors the most advanced and immersive local </p>
            <div class="row team-slider">
            
              @foreach($TeamSlide as $slider)
              <div class="col-md-4 col-6">
                <div class="team-medias" style="background-image: url('{{asset('assets/'.$slider->image)}}');">
                  <h3>
                    <a href="#">{{$slider->name}}</a>
                  </h3>
                  <p>({{$slider->role}})</p>
                  <div class="team-overlay"></div>
                </div>
              </div>
              @endforeach

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- our team sec end here -->
    <!-- Download sec start here -->
    <section class="download-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-12 download-content">
            <h2>@if($footer){{$footer->heading}}@endif
              {{-- <span>iOS or Android.</span> --}}
            </h2>
            <p>@if($footer){{$footer->detail}}@endif</p>
            <a href="@if($footer){{$footer->btn_link}}@endif">
              <img src="@if($footer){{asset('assets/'.$footer->btn_text)}}@endif" class="img-fluid">
            </a>
            <a href="@if($footer){{$footer->btn_link_1}}@endif">
              <img src="@if($footer){{asset('assets/'.$footer->btn_text_1)}}@endif" class="img-fluid">
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Download sec end here -->
    <!-- footer start here -->
    <footer>
      <div class="container">
        <div class="footer-main-outer">
          <div class="footer-logo">
            <img src="{{asset('assets/images/logo.png')}}" class="img-fluid">
          </div>
          <div class="footer-links">
            <ul>
              <li>
                <a href="#">Terms & Conditions</a>
              </li>
              <li>
                <a href="#">About</a>
              </li>
              <li>
                <a href="#">Pricing</a>
              </li>
              <li>
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer end here -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init({
 // ... your other initialisation options here ...
 once: true,
});

</script>
     <script type="text/javascript">
       jQuery(document).ready(function($){
          $('.team-slider').slick({
          slidesToShow: 2.88,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 3000,
          arrows: true,
           prevArrow:"<img class='a-left control-c prev slick-prev back-btn' src='assets/images/previous-btn.png'>",
          nextArrow:"<img class='a-right control-c next slick-next next-btn' src='assets/images/next-btn.png'>",
          responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2.8,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
  ]
         
        });
      });

       // top image slider

       jQuery(document).ready(function($){
          $('.single-image-slide').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 5000,
          arrows: true,
           prevArrow:"<img class='a-left control-c prev slick-prev back-btn' src='assets/images/previous-btn.png'>",
          nextArrow:"<img class='a-right control-c next slick-next next-btn' src='assets/images/next-btn.png'>",
          responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
         
        });
      });
              // top image slider 2

       jQuery(document).ready(function($){
          $('.single-image-slide-2').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 5000,
          arrows: true,
           prevArrow:"<img class='a-left control-c prev slick-prev back-btn' src='assets/images/previous-btn.png'>",
          nextArrow:"<img class='a-right control-c next slick-next next-btn' src='assets/images/next-btn.png'>",
          responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
         
        });
      });
      var menuBtn = document.querySelector('.menu-btn');
        var nav = document.querySelector('nav');
        var lineOne = document.querySelector('nav .menu-btn .line--1');
        var lineTwo = document.querySelector('nav .menu-btn .line--2');
        var lineThree = document.querySelector('nav .menu-btn .line--3');
        var link = document.querySelector('nav .nav-links');
        menuBtn.addEventListener('click', () => {
            nav.classList.toggle('nav-open');
            lineOne.classList.toggle('line-cross');
            lineTwo.classList.toggle('line-fade-out');
            lineThree.classList.toggle('line-cross');
            link.classList.toggle('fade-in');
        });

    </script>
  </body>
</html>