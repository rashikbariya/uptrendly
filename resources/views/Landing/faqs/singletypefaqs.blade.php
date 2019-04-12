@extends('layouts.landing')
@section('landing-content')
    <section class="faq-one">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                         <h2> @if($type=='general-faqs')
                                  General
                                 @elseif($type=='influencer-faqs')
                                  Influencer
                                  @elseif($type=='brand-faqs')
                                  Brand
                                  @endif
                                 FAQs</h2>
                        <p>Our users are impatient. They're probably distracted too. Keep it simple and beautiful, fun and functional. Clean aesthetics supported by a strong concept is what we stand for.
                        </p>

                    </div>
                </div>
                <!-- section title end -->
            </div>
            <!-- section title row end -->
            <div class="row">
                <div class="col-12 mx-auto">
                    <ul class="faq">
                        <?php $i=1; ?>
                       @foreach($faqList as $faq)
                        <!-- single ite end -->
                        <li class="faq-list" data-sr-id="15" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 1s ease-in-out 0s, opacity 1s ease-in-out 0s; transition: transform 1s ease-in-out 0s, opacity 1s ease-in-out 0s; ">
                            <h5 class="faq-list__title">Q<?php echo $i ?>. {{$faq->question}}</h5>
                            <p class="faq-list-description" style="text-align: justify">
                               Ans. {{$faq->answer}}</p>
                        </li>
                        <?php $i++; ?>
                        @endforeach
                        <!-- single ite end -->

                    </ul>
                </div>
            </div>
            <!-- row end -->

        </div>
    </section>

@stop()
