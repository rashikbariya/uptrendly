@extends('influencer.setting.nav')
@section('influencer-setting-content')

    <div class="tab-content tab-content-solid" style="padding: 20px;width: 80%">

        <form class="forms-sample" method="POST" action="general">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            @csrf

                <div class="form-group">

                    <label>Profile Photo (250 x 250)</label><br>
                    <img width="250" height="250" src="{{url('/img/branddefault.png')}}" class="img-150 img-thumbnail " alt="branddefault"><br>
                    <input id="file-upload" name="photo_name"  onchange="document.getElementById('photo_name').src = window.URL.createObjectURL(this.files[0])" type="file"/>

                </div>
                <div class="form-group">
                <label >First Name</label>
                <input type="text" name="influencer_fname"  class="form-control"  required>
                @if($errors->has('influencer_fname'))
                    <label id="name-error" class="error" >{{$errors->first('influencer_fname')}}</label>
                @endif
                </div>
                <div class="form-group">
                    <label >Last Name</label>
                    <input type="text" name="influencer_lname"  class="form-control" required >
                    @if($errors->has('influencer_lname'))
                        <label id="name-error" class="error" >{{$errors->first('influencer_lname')}}</label>
                    @endif
                </div>
                <div class="form-group">
                    <label >Email</label>
                    <input type="email" class="form-control" name="influencer_email"  required>
                    @if($errors->has('influencer_email'))
                        <label id="name-error" class="error" >{{$errors->first('influencer_email')}}</label>
                    @endif
                </div>
                <div class="form-group">
                <label >Phone</label>
                <input type="number" class="form-control" name="influencer_phone " required>
                @if($errors->has('influencer_phone'))
                    <label id="name-error" class="error" >{{$errors->first('influencer_phone')}}</label>
                @endif
                </div>
                <label >Rate (In Rs)</label>
                <hr/>
                <div class="form-group">
                    <label >Images</label>
                    <input type="number" class="form-control" name="influencer_rate_img " >
                    @if($errors->has('influencer_rate_img'))
                        <label id="name-error" class="error">{{$errors->first('influencer_rate_img')}}</label>
                    @endif
                </div>
                <div class="form-group">
                    <label >Videos</label>
                    <input type="number" class="form-control" name="influencer_rate_video " >
                    @if($errors->has('influencer_rate_video'))
                        <label id="name-error" class="error">{{$errors->first('influencer_rate_video')}}</label>
                    @endif
                </div>



            <button type="submit" class="btn btn-primary mr-2">Save</button>


        </form>


    </div>
    @stop()
