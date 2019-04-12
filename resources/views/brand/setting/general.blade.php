@extends('brand.setting.index')
@section('setting-content')

    <div class="tab-content tab-content-solid" style="padding: 20px;width: 80%">

        <form class="forms-sample" method="POST" action="general">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            @csrf
            <div class="form-group">
                <label >Display Name *</label>
                <input type="text" name="brand_name" value="{{$brandData->brand_name}}" class="form-control"  >
                @if($errors->has('brand_name'))
                    <label id="name-error" class="error" for="brand_name">{{$errors->first('brand_name')}}</label>
                @endif
            </div>
            <div class="form-group">
                <label >Company Website *</label>
                <input type="text" class="form-control" name="brand_website_url" value="{{$brandData->brand_website_url}}" >
                @if($errors->has('brand_website_url'))
                    <label id="name-error" class="error" for="brand_website_url">{{$errors->first('brand_website_url')}}</label>
                @endif
            </div>
            <div class="form-group">
                <label >First Name *</label>
                <input type="text" value="{{$brandData->first_name}}" name="first_name" class="form-control" >
                @if($errors->has('first_name'))
                    <label id="name-error" class="error"  for="first_name">{{$errors->first('first_name')}}</label>
                @endif
            </div>
            <div class="form-group">
                <label >Last Name *</label>
                <input type="text" value="{{$brandData->last_name}}" name="last_name" class="form-control" >
                @if($errors->has('first_name'))
                    <label id="name-error" class="error"  for="first_name">{{$errors->first('first_name')}}</label>
                @endif
            </div>
            <div class="form-group">
                <label >Email *</label>
                <input type="email" class="form-control"  name="email" value="{{$brandData->user->email}}" >
                @if($errors->has('first_name'))
                    <label id="name-error" class="error"  for="first_name">{{$errors->first('email')}}</label>
                @endif
                <span>Note: Changing this email address will change your login email.</span>
            </div>

            <button type="submit" class="btn btn-primary mr-2">Save</button>


        </form>


    </div>
    @stop()


