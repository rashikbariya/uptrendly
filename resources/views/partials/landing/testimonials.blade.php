<!-- =========== Testimonial-1 Start ============ -->
<section class="testimonial-two" id="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title light">
                    <h2>What our influencers have to say?</h2>
                    <p>Our influencers are pretty amazing. They're smart, authentic and empowering personals.
                    </p>
                </div>
            </div>
            <!-- section title end -->
        </div>
        <!-- section title row end -->
        <div class="row">
            <div class="col-12 col-lg-7 mx-auto">
                <div class="testimonial reveal">
                    @foreach($fe_testimonials as $testimonial)
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                                    <span class="testimonial__avatar">
                                        <img src="{{url('backend/assets/img/testimonials')}}/{{$testimonial->photo_path}}" alt="avatar">
                                    </span>
                            <div>
                                <blockquote style="text-align: justify; font-family: sans-serif;" class="testimonial__quote">"{{$testimonial->description}}"
                                </blockquote>

                                <h5 class="testimonial__customer-name" style="float:right;">-{{$testimonial->fullname}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    <!-- single item end -->
                </div>
            </div>
        </div>
        <!-- testimonial row end -->
    </div>
</section>
<!-- =========== Testimonial-1 End ============ -->


{{--<section class="testimonial-one" id="testimonial">--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-12">--}}
{{--<div class="section-title light">--}}
{{--<h2>What Our Influencers Say</h2>--}}
{{--<p>Our users are impatient. They're probably distracted too. Keep it simple and beautiful, fun and functional. Clean aesthetics supported by a strong concept is what we stand for.--}}
{{--</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--<!-- section title end -->--}}
{{--</div>--}}
{{--<!-- section title row end -->--}}
{{--<div class="row">--}}
{{--<div class="col-12 col-lg-7 mx-auto">--}}
{{--<div class="testimonial reveal">--}}
{{--@foreach($fe_testimonials as $testimonial)--}}
{{--<div class="testimonial-item">--}}
{{--<div class="testimonial-content">--}}
{{--<span class="testimonial__avatar">--}}
{{--<img src="{{url('backend/assets/img/testimonials')}}/{{$testimonial->photo_path}}" alt="">--}}
{{--</span>--}}
{{--<div>--}}
{{--<blockquote style="text-align: justify" class="testimonial__quote">--}}
{{--{{$testimonial->description}}--}}
{{--</blockquote>--}}
{{--<span class="testimonial__customer-rating">--}}
{{--<i class="nc-icon nc-favourite-31"></i>--}}
{{--<i class="nc-icon nc-favourite-31"></i>--}}
{{--<i class="nc-icon nc-favourite-31"></i>--}}
{{--<i class="nc-icon nc-favourite-31"></i>--}}
{{--<i class="nc-icon nc-favourite-31"></i>--}}
{{--</span>--}}
{{--<h5 class="testimonial__customer-name">{{$testimonial->fullname}}</h5>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endforeach--}}

{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<!-- testimonial row end -->--}}
{{--</div>--}}
{{--</section>--}}
