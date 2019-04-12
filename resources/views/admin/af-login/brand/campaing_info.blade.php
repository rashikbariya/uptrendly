@extends('layouts.admin')

@section('admin-content')
    <div class="content-wrapper clearfix" style="padding-left: 300px;">
        <div class="row">
            <div class="col-4" >
                <div class="card" >
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <img src="{{url('/img/branddefault.png')}}" class="img-lg rounded" alt="profile image">
                            <div class="ml-3">
                                <p class="text-muted">Campaign posted by</p>
                                <h6>Brand Name</h6>
                                <p class="mt-2 text-success font-weight-bold">Category</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p>Necessity Nutrition's Organic Beet Root VO2 Fuel is rich in essential vitamins, minerals and electrolytes.
                            It's an all natural supplement powder which increases energy levels,
                            supports heart health and improves athletic performance and stamina. </p>
                    </div>

                </div>

                <div class="card shadow my-3 no-b">
                    <div class="card-body" style="padding: 0.9rem;border-bottom: 1px solid #e1e8ee">
                        <div class="d-flex align-items-center">
                            <div class="pull-left">
                                <span style="font-weight: 600;color: black">Budget 50,000</span>
                            </div>

                        </div>
                    </div>
                    <img style="height: 300px"
                         src="{{url('img')}}/cover.png">
                    <div class="card-body">
                        <h5 style="font-weight: 600; color: black;margin-bottom: 10px">Red Tea Detox</h5>
                        <span style=" color:  black;font-weight: 400;font-size: 15px;">
                                        I'm looking for English speaking Youtubers in the health and fitness/diet niche. I would prefer Youtubers who's videos reach...
                                    </span>
                    </div>

                    <div class="card-body b-t">

                    </div>

                </div>
            </div>
            <div class="col-8">
                <div class="row">
                    <div class="col-12">
                        <label style="font-size: 18px;color: #2b2b2b;line-height: 24px;">Target Audience;</label>
                        </br>
                        <table>
                            <tr>
                                <td style="color: #2b2b2b">Gender:</td>
                                <td style="color: #2b2b2b">Female</td>
                            </tr>
                            <tr>
                                <td style="color: #2b2b2b">Age:</td>
                                <td style="color: #2b2b2b">Any Age</td>
                            </tr>
                        </table>
                        <hr>

                        <label style="font-size: 18px;color: #2b2b2b;line-height: 24px;">Budget:</label>
                        </br>
                        <table>
                            <tr>
                                <td style="color: #2b2b2b">Budget Amount:</td>
                                <td style="color: #2b2b2b">50,000</td>
                            </tr>

                        </table>
                        <hr>

                        <label style="font-size: 18px;color: #2b2b2b;line-height: 24px;">About the
                            Product/Service:</label>
                        </br>
                        <span style="color: #2b2b2b">Necessity Nutrition's Organic Beet Root VO2 Fuel is rich in essential vitamins, minerals and electrolytes.
                            It's an all natural supplement powder which increases energy levels,
                            supports heart health and improves athletic performance and stamina. </span>
                        <br>
                        <br>
                        <label style="font-size: 18px;color: #2b2b2b;line-height: 24px;">Campaign Goals:</label>
                        </br>
                        <span style="color: #2b2b2b">USA CREATORS Please Apply!

We're hoping to connect with health and wellness influencers who are:
- Focused on their health and working on achieving ultimate wellness
- Interested in promoting health and wellness supplements to their US audience

Our supplements are:
Carefully blended with the correct ingredient amounts for optimal cellular health
Fully backed by our 100% money back guarantee, which means you can try them and if you don’t love them, we will refund you for your purchase.

We need:
Social media marketing - an instagram post, facebook post or mention in one of your youtube videos.   
We provide extra to cover the supplement
Special consideration for those with an Amazon Prime account</span>

                        <br>
                        <br>
                        <label style="font-size: 18px;color: #2b2b2b;line-height: 24px;">Influencers List:</label>
                        <br>

                        <div class="new-accounts">
                            <ul class="chats">
                                <li class="chat-persons">
                                    <a href="#">
                                        <span class="pro-pic"><img src="{{url('users/images/faces/face11.jpg')}}"  alt="profile image"></span>
                                        <div class="user">
                                            <p class="u-name">Influencer Name</p>
                                            <p class="u-designation">Tags</p>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>



                    </div>


                </div>


            </div>


        </div>
        <hr>
        <div class="clearfix">
            <button style="float: right; margin-left: 10px" class="btn btn-primary bt-sm"> <i class="icon-check"></i> Accept Campaign Request</button>
            <button style="float: right" class="btn btn-danger bt-sm"> <i class="icon icon-close"></i> Decline Campaign Request</button>

        </div>

        <br/>
        <div class="row">
            <div class="col-md-12">
                <label style="font-size: 18px;color: #2b2b2b;line-height: 24px;font-weight: 600">Influencer's posts for
                    the campaign </label>
                <div style="padding-left: 30px; padding-right: 30px" class="new-accounts">
                    <ul class="chats">
                        <li class="chat-persons">

                            <div class="row portfolio-grid">
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <figure class="effect-text-in">
                                        <img src="{{url('users')}}/images/samples/1.png" alt="image">
                                        <figcaption>

                                            <p>Date (Month Day Year) <br> description</p>

                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <figure class="effect-text-in">
                                        <img src="{{url('users')}}/images/samples/1.png" alt="image">

                                    </figure>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
@stop



