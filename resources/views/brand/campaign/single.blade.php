@extends('layouts.brand')

@section('brand-content')
    <div style="margin: 20px;">
    <nav aria-label="breadcrumb" style="float: right">
        <ol class="breadcrumb bg-light">
            <li class="breadcrumb-item"><a href="{{url('brand')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{url('brand/campaign-list')}}">Campaign List</a></li>
            <li class="breadcrumb-item"><a href = "{{url('brand/campaign/addnew')}}">Add New Campaign</a></li>
        </ol>
    </nav>
    </div>

    <div class="content-wrapper">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="{{url('brand/campaign-list')}}">Campaign</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span><h6>Campaign Name</h6></span></li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-4">
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
                        <label style="font-size: 18px;color: #2b2b2b;line-height: 24px;">Selected
                            Influencers:</label>
                        <div class="new-accounts">
                            <ul class="chats">

                                <li class="chat-persons">
                                    <a href="#">
                                            <span class="pro-pic"><img src="{{url('users')}}/images/faces/face3.jpg"
                                                                       alt="profile image"></span>
                                        <div class="user">
                                            <p class="u-name">Stella Johnson</p>
                                            <p class="u-designation">SEO Expert</p>
                                        </div>
                                        <label class="font-weight-bold ml-auto px-1 py-1 text-success ">Accept</label>
                                    </a>
                                </li>
                                <li class="chat-persons">
                                    <a href="#">
                                            <span class="pro-pic"><img src="{{url('users')}}/images/faces/face3.jpg"
                                                                       alt="profile image"></span>
                                        <div class="user">
                                            <p class="u-name">Stella Johnson</p>
                                            <p class="u-designation">SEO Expert</p>
                                        </div>
                                        <label class="font-weight-bold ml-auto px-1 py-1 text-behance ">Pending..</label>
                                    </a>
                                </li>
                                <li class="chat-persons">
                                    <a href="#">
                                            <span class="pro-pic"><img src="{{url('users')}}/images/faces/face3.jpg"
                                                                       alt="profile image"></span>
                                        <div class="user">
                                            <p class="u-name">Stella Johnson</p>
                                            <p class="u-designation">SEO Expert</p>
                                        </div>
                                        <label class="font-weight-bold ml-auto px-1 py-1 text-primary ">Decline</label>
                                            <a class="font-weight-bold ml-auto px-1 py-1 text-danger " href="{{url('brand/campaign/replace-influencer/1/1')}}"> Replace Influencer</a>
                                    </a>
                                </li>
                                <li class="chat-persons">
                                    <a href="#">
                                            <span class="pro-pic"><img src="{{url('users')}}/images/faces/face4.jpg"
                                                                       alt="profile image"></span>
                                        <div class="user">
                                            <p class="u-name">Peter Joo</p>
                                            <p class="u-designation">UI/UX designer</p>
                                        </div>

                                       <label class=" font-weight-bold ml-auto px-1 py-1 text-success ">Accept</label>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <hr>
                        <label style="font-size: 18px;color: #2b2b2b;line-height: 24px;">About the
                            Product/Service:</label>
                        </br>
                        <span style="color: #2b2b2b">asdasdasda sdasdkasdklasda sdaksjdkas daksjd laskdj alsdkj aslkdja lsdkja slkdjasl kdj</span>
                        <br>
                        <br>
                        <label style="font-size: 18px;color: #2b2b2b;line-height: 24px;">Campaign Goals:</label>
                        </br>
                        <span style="color: #2b2b2b">asdasdasda sdasdkasdklasda sdaksjdkas daksjd laskdj alsdkj aslkdja lsdkja slkdjasl kdj</span>
                    </div>


                </div>
                <input type="submit" style="float: right" class="btn btn-primary" value="Edit Campaign">
            </div>

        </div>

    </div>
@stop


