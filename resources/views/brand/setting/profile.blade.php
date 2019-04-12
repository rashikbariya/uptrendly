@extends('brand.setting.index')
@section('setting-content')
    <style>
        input[type="file"] {
            display: none;
        }
        .custom-file-upload {
            width: 250px;
            margin-top: 10px;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            border: 0px;
            font-size: 16px;
            letter-spacing: 2.0px;
            color: #2b2b2b;
            font-weight: 500;
            text-align: center;
            margin-bottom: 20px;
        }

    </style>
    <div class="tab-content tab-content-solid" style="padding: 20px;width: 80%">

        <form class="forms-sample" method="post" action="profile" enctype="multipart/form-data">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @csrf
            <div class="form-group">

            </div> <label for="exampleInputUsername1">Profile Photo (250 x 250)</label><br>
            <img id="photo_name" width="250px" height="250px" src="{{$brandData->photo_name!=''?url('users/upload/brand/thumbnail/'.$brandData->photo_name):'/img/branddefault.png'}}" class="img-150 img-thumbnail "><br>
            <label for="file-upload" class="custom-file-upload">
                <i class="fa fa-cloud-upload"></i> Custom Upload
            </label>
            <input id="file-upload" name="photo_name"  onchange="document.getElementById('photo_name').src = window.URL.createObjectURL(this.files[0])" type="file"/>
            <div class="form-group">
                <label for="exampleInputUsername1">Category</label>
                <select class="form-control" name="category_id">
                    <option value="">Select Category</option>
                  @foreach(Helpers::getCategory() as $catData)
                        <option value="{{$catData->id}}" {{$brandData->category_id==$catData->id?'selected':''}}>{{$catData->category_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputUsername1">About Your Brand</label>
               <textarea class="form-control"  name="about_brand" rows="4">
                   {{$brandData->about_brand}}
               </textarea>
                <label style="float: right">0 / 250</label>
            </div>

            <button type="submit" class="btn btn-primary mr-2">Save</button>

        </form>


    </div>
@stop()


