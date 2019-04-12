@extends('layouts.influencer')
@section('influencer-content')

    <h6>Influencer design</h6>

    <div class="content-wrapper clearfix">


        <div class="row">
            <div class="col-lg-7" style="display: block; margin-left: auto; margin-right: auto; ">
                <div class="card" >
                    <div class="card-body">
                        <div class="d-flex flex-row" style="background: #0a0a0a;  ">
                            <img src="{{url('/img/branddefault.png')}}" alt="profile image"  style="border-radius: 50%; display: block;
margin-left: auto; margin-right: auto;  height: 253px; width: 242px;     margin-bottom: -56px; margin-top: 75px;">

                        </div>
                    </div>
                    <div style="display: block; margin-left: auto; margin-right: auto;">
                        <br/><br/><br/>
                        <p>Name</p>
                        <p>profession</p>
                        <p>follower</p>
                    </div>

                </div>
            </div>







        </div>

    </div>

@stop()

