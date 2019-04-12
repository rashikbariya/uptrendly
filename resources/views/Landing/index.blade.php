    @extends('layouts.landing')
    @section('landing-content')
   <style>



       .slick-slide img {
           width: 100%;
       }

       .slick-slider
       {
           position: relative;

           display: block;
           box-sizing: border-box;

           -webkit-user-select: none;
           -moz-user-select: none;
           -ms-user-select: none;
           user-select: none;

           -webkit-touch-callout: none;
           -khtml-user-select: none;
           -ms-touch-action: pan-y;
           touch-action: pan-y;
           -webkit-tap-highlight-color: transparent;
       }

       .slick-list
       {
           position: relative;

           display: block;
           overflow: hidden;

           margin: 0;
           padding: 0;
       }
       .slick-list:focus
       {
           outline: none;
       }


       .slick-slider .slick-track,
       .slick-slider .slick-list
       {
           -webkit-transform: translate3d(0, 0, 0);
           -moz-transform: translate3d(0, 0, 0);
           -ms-transform: translate3d(0, 0, 0);
           -o-transform: translate3d(0, 0, 0);
           transform: translate3d(0, 0, 0);
       }

       .slick-track
       {
           position: relative;
           top: 0;
           left: 0;

           display: block;
       }
       .slick-track:before,
       .slick-track:after
       {
           display: table;

           content: '';
       }
       .slick-track:after
       {
           clear: both;
       }
       .slick-loading .slick-track
       {
           visibility: hidden;
       }

       .slick-slide
       {
           display: none;
           float: left;

           height: 100%;
           min-height: 1px;
       }
       [dir='rtl'] .slick-slide
       {
           float: right;
       }
       .slick-slide img
       {
           display: block;
       }
       .slick-slide.slick-loading img
       {
           display: none;
       }
       .slick-slide.dragging img
       {
           pointer-events: none;
       }
       .slick-initialized .slick-slide
       {
           display: block;
       }
       .slick-loading .slick-slide
       {
           visibility: hidden;
       }
       .slick-vertical .slick-slide
       {
           display: block;

           height: auto;

           border: 1px solid transparent;
       }
       .slick-arrow.slick-hidden {
           display: none;
       }
   </style>




<!-- =========== Hero Start ============ -->
<section class="hero-four hero-text-dark content-left ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="hero">
                    <div class="hero-wrapper">
                        <div class="hero-content">
                            <h1 class="hero__title" style="font-weight: 600;font-size: 1.9em;">Nepal's only Influence marketing platform.</h1>
                            <p class="hero__caption">
                              We advertise your products through Nepal's top social media influencers,
                          who will build an image for your brand through engaging content directed to the exact target audience.</p>
                          <div class="newsletter-optin">
                              <a href="{{url('choose-social-account')}}" class="db-btn db-btn__blue db-btn__type-sm">I'm an Influencer</a>
                              <a href="{{url('brand-signup')}}" class="db-btn db-btn__darkblue db-btn__type-sm">I'm a Brand</a>
                          </div>
                      </div>
                      <div class="hero-media reveal">
            <picture class="hero-media__img">
                <img src="{{url('frontend/img/influencers/i1.png')}}" style="
    width: 750px;
" alt="hero-media__img">
            </picture>

            <span class="hero__circle">
                <img class="svg" src="{{url('frontend/img')}}/circle.svg" alt="hero__circle">
            </span>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
<!-- =========== Hero End ============ -->

<!-- =========== Features-1 Start ============ -->
<section class="features-one reveal"  >
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="feature">
                    <span class="feature__icon">
                        <i class="nc-icon nc-layers-3"></i>
                    </span>
                    <h5 class="feature__title">Determine Your Goals</h5>
                    <p class="feature__description" >We understand that you've set clear goals for your brand. We have helped brands live their vision and make the most out of their goals.   </p>
                </div>
            </div>
            <!-- single item end -->
            <div class="col-12 col-md-4">
                <div class="feature">
                    <span class="feature__icon">
                        <i class="nc-icon nc-watch-circle"></i>
                    </span>
                    <h5 class="feature__title">Measure Outcomes of Campaign</h5>
                    <p class="feature__description">Focus on reach, engagements, impressions in order to get your product to your target audience.
                    Measure your brand success through statistics. </p>
                </div>
            </div>
            <!-- single item end -->
            <div class="col-12 col-md-4">
                <div class="feature">
                    <span class="feature__icon">
                        <i class="nc-icon nc-chart-bar-33"></i>
                    </span>
                    <h5 class="feature__title">Find A Credible Influencer</h5>
                    <p class="feature__description">We have got you covered to identify the perfect influencer for your brand.

                    </p>
                </div>
            </div>
            <!-- single item end -->
        </div>
        <!-- row end -->
    </div>
</section>
<!-- =========== Features-1 End ============ -->


        <!-- =========== Facts-1 Start ============ -->
        <section class="facts-one" style="margin-top: 40px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="facts-wrapper">
                        <img src="{{url('frontend/img')}}/fact-1.1.png" style="width: 550px;transform: rotate(-21deg);" alt="facts-img">
                            <!-- media content end -->
                            <div class="fact reveal">
                                <h2 class="fact__title">Why are we the best fit for you? </h2>
                                    <p class="fact__description">When your competitors are making the most out of influencer marketing, you certainly don't want to be left behind.
                                        Uptrendly has collaborated with top brands and influencers of Nepal in optimizing their marketing strategy and meeting their success stories.
                                    </p>
                                    <!-- text content end -->

                                    <ul class="fact-counter">
                                        <li class="fact-counter__list">
                                            <span style="text-align: center;" class="fact-counter__list-value">

                                                @if($totalInfluencer>999)
                                                    {{$totalInfluencer/1000}}
                                                    @else
                                                    {{$totalInfluencer}}
                                                @endif

                                            </span>
                                            <span class="fact-counter__list-title">Influencers</span>
                                        </li>
                                        <!-- counter single item end -->
                                        <li class="fact-counter__list">
                                            <span style="text-align: center;" class="fact-counter__list-value">
                                                  @if($totalBrand>999)
                                                    {{$totalBrand/1000}}
                                                @else
                                                    {{$totalBrand}}
                                                @endif
                                            </span>
                                            <span class="fact-counter__list-title">Brands</span>
                                        </li>
                                        <!-- counter single item end -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
                </div>
            </section>
            <!-- =========== Facts-2 End ============ -->

            <!-- =========== How it work End ============ -->
            <section class="working-process" id="services">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h2>Influencer</h2>
                                <p>Got followers on Social Media? Are your posts usually flooded with likes? How about getting financial returns for posting pictures with your Favorite brands.
                                </p>
                            </div>
                        </div>
                        <!-- section title end -->
                    </div>
                    <!-- section title row end -->
                    <div class="row">
                        <div class="col-12">
                            <div class="working-process-wrapper reveal">
                                <ul class="working-process-list">
                                    <li class="working-process-list-item">
                                        <span class="working-process__icon">
                                            <i class="fa fa-dollar" style="color: #65cadb;
    font-size: 2.625rem;
    line-height: 5.8125rem;"></i>
                                        </span>
                                        <div>
                                            <h5 class="working-process__title">Earn Money</h5>
                                            <p class="working-process__description">Generate remuneration for doing what you love-sharing inspirational photos, videos and engaging content.
                                            </p>
                                        </div>
                                    </li>
                                    <!-- single item end -->
                                    <li class="working-process-list-item">
                                        <span class="working-process__icon">
                                         <i style="font-weight: 700;" class="nc-icon nc-p-heart"></i>
                                     </span>
                                     <div>

                                        <h5 class="working-process__title">Build Personal Brand</h5>
                                        <p class="working-process__description">Associate with Nepal’s biggest brands and get opportunities to network with top influencers to build your profile.

                                        </p>
                                    </div>
                                </li>
                                <!-- single item end -->
                                <li class="working-process-list-item">
                                    <span class="working-process__icon">
                                        <i style="font-weight: 700;" class="nc-icon nc-chart-bar-33"></i>
                                    </span>
                                    <div>
                                        <h5 class="working-process__title">Professionals Growth</h5>
                                        <p class="working-process__description">Influencers maximize on earnings and professional growth through a constant flow of opportunities that fit their audience and personal brand.
                                        </p>
                                    </div>
                                </li>
                                <!-- single item end -->
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- content row end -->
            </div>
        </section>



        <!-- =========== How it work End ============ -->

        <!-- =========== Video content-1 Start ============ -->

        <!-- =========== Video content-1 End ============ -->

        <!-- =========== Testimonial-1 Start ============ -->
        @include('partials.landing.testimonials')
        <!-- =========== Testimonial-1 End ============ -->








                    <!-- =========== footer-1 End ============ -->

                    <!-- =========== footer-1 End ============ -->
  <script>
      $(document).ready(function(){
          $('.customer-logos').slick({
              slidesToShow: 4,
              slidesToScroll: 1,
              autoplay: true,
              autoplaySpeed: 1000,
              arrows: false,
              dots: false,
              pauseOnHover: false,
              responsive: [{
                  breakpoint: 768,
                  settings: {
                      slidesToShow: 3
                  }
              }, {
                  breakpoint: 520,
                  settings: {
                      slidesToShow: 2
                  }
              }]
          });
      });
  </script>
                    @stop
