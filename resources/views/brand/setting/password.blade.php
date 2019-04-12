@extends('brand.setting.index')
@section('setting-content')
    <div class="tab-content tab-content-solid" style="padding: 20px;width: 80%">

        <form class="forms-sample" method="POST" action="password" >
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @csrf
            <div class="form-group">
                <label >Current Password *</label>
                <input type="password" value="{{old('current_password')}}"  name="current_password" class="form-control"  >
                @if($errors->has('current_password'))
                    <label id="name-error" class="error" for="current_password">{{$errors->first('current_password')}}</label>
                @endif

            </div>
            <div class="form-group">
                <label >New Password *</label>
                <input type="password" value="{{old('new_password')}}" name="new_password" class="form-control" >
                @if($errors->has('new_password'))
                    <label id="name-error" class="error" for="new_password">{{$errors->first('new_password')}}</label>
                @endif
            </div>
            <div class="form-group">
                <label >Confirm Password *</label>
                <input type="password" value="{{old('confirmed')}}" name="confirmed" class="form-control" >

            </div>

            <button type="submit"  class="btn btn-primary mr-2">Save</button>

        </form>


    </div>
@stop()


