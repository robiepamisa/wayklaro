<!DOCTYPE html>
<html lang="en">
  <head>
    <title>About</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('assets/asset/images/icons/favicon.png')}}" />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('assets/asset/vendor/bootstrap/css/bootstrap.min.css')}}"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('assets/asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('assets/asset/fonts/themify/themify-icons.css')}}"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('assets/asset/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('assets/asset/fonts/elegant-font/html-css/style.css')}}"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css')}}" />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('assets/asset/vendor/css-hamburgers/hamburgers.min.css')}}"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('assets/asset/vendor/animsition/css/animsition.min.css')}}"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('assets/asset/vendor/select2/select2.min.css')}}"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/asset/vendor/slick/slick.css')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/asset/css/util.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/asset/css/main.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/asset/css/custom.css')}}" />

    <!--===============================================================================================-->
  </head>
  <body class="animsition">
    <!-- Header -->
    @include('layouts.nav.header')

    <!-- Title Page -->
    <section
      class="bg-title-page p-t-40 p-b-50 flex-col-c-m"
      style="background-image: url({{asset('assets/img/logo.png')}});"
    >
      
    </section>

    <!-- content page -->
    <section class="bgwhite p-t-66 p-b-38">
      <div class="container">
        <div class="row">
          <div class="col-md-4 p-b-30">
            <div class="hov-img-zoom">
              <img src="{{asset('assets/img/logo.png')}}" alt="IMG-ABOUT" />
            </div>
          </div>

          <div class="col-md-8 p-b-30">
            <h3 class="m-text26 p-t-15 p-b-16">
              Our story
            </h3>

            <p class="p-b-28">
                    ALLIANCE IN MOTION GLOBAL, INC., simply known as AIM Global, Inc., is a marketing company established in March 2006. In more than 10 years of operation, Alliance In Motion Global, Inc. has established its presence strategically in different regions in the country. At present, it has 87 Business Centers and 94 Satellite Offices nationwide.
                AIM Global, Inc. is conceptualized to provide unmatched quality distribution of exceptional products and services through a combination of advanced technology, distinctive marketing strategies, excellent product lines and exemplary leadership that secures the success of the company. A pro-distributor concept that sets trend on distributors’ extravagant packages such as transferrable scholarships, free or discounted medical services, insurance package and world class quality products.
                As a “PRO-DISTRIBUTOR” marketing company, AIM Global, Inc. is devoted to providing its distributors a brighter future. It gives paramount importance in helping them achieve their dreams. In line with this, the company has made a strong alliance with more than 300 schools, clinics and hospitals nationwide through its scholarship and medical programs providing distributors and their families affordable, quality education and medical services.
                AIM Global, Inc. is the only multi-level marketing company accredited by Natures Way, Greenbay, Wisconsin , USA as its exclusive product distributor in the Philippines and other countries in the world.
                With its phenomenal sales contribution through its dynamic product line, the industry recognized and awarded its products with 7 achievement awards from entities engaged with product leadership and excellence in the country.
                The company acknowledges the dedication and hard work of its distributors for having a sequence of remarkable sales. In return, AIM Global, Inc. offers outstanding all expense paid travel incentives to its top distributors to further inspire them to excel in the world of multi-level marketing business.
                At present, leaders and distributors travel around the country to promote a passion for life, service and prosperity by providing revolutionary products and services to help them achieve financial independence that will surely result to economic progress. And soon, AIM Global, Inc. will be recognized as a leader in providing quality products and services on a global scale.
            </p>

            <div class="bo13 p-l-29 m-l-9 p-b-10">
              <p class="p-b-11">
                Creativity is just connecting things. When you ask creative
                people how they did something, they feel a little guilty because
                they didn't really do it, they just saw something. It seemed
                obvious to them after a while.
              </p>

              <span class="s-text7">
                - Steve Job’s
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    @include('layouts.nav.footer')

    <!-- Back to top -->
    <div class="btn-back-to-top bg0-hov" id="myBtn">
      <span class="symbol-btn-back-to-top">
        <i class="fa fa-angle-double-up" aria-hidden="true"></i>
      </span>
    </div>

    <!-- Container Selection -->
    <div id="dropDownSelect1"></div>
    <div id="dropDownSelect2"></div>

    <!--===============================================================================================-->
    <script
      type="text/javascript"
      src="{{asset('assets/asset/vendor/jquery/jquery-3.2.1.min.js')}}"
    ></script>
    <!--===============================================================================================-->
    <script
      type="text/javascript"
      src="{{asset('assets/asset/vendor/animsition/js/animsition.min.js')}}"
    ></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/bootstrap/js/popper.js')}}"></script>
    <script
      type="text/javascript"
      src="{{asset('assets/asset/vendor/bootstrap/js/bootstrap.min.js')}}"
    ></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{asset('assets/asset/vendor/select2/select2.min.js')}}"></script>
    <script type="text/javascript">
      $(".selection-1").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $("#dropDownSelect1")
      });

      $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $("#dropDownSelect2")
      });
    </script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/asset/js/main.js')}}"></script>
  </body>
</html>
