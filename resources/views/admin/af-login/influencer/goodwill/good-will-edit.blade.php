

<!-- =========== Grid ============ -->
@extends('admin.af-login.influencer.goodwill')
@section('influencer-goodwill-content')


    <div class="card">
        <div class="card-body b-b">
            <form method="post" >
                @csrf()
                <div class="form-row">
                    <div class="col-md-12 mb-12 focused">
                        <label for="title">Good Will title</label>
                        <input type="text" autofocus="autofocus" name="goodwill_title" class="form-control" value="{{$goodWillData->goodwill_title}}">
                        @if($errors->has('goodwill_title'))
                            <label id="name-error" class="error">{{$errors->first('goodwill_title')}}</label>
                        @endif
                    </div>
                    <div class="col-md-12 mb-12 focused">
                        <label for="title">Good Will Value</label>
                        <input type="number" step="0.01" autofocus="autofocus" name="goodwill_value" class="form-control" value="{{$goodWillData->goodwillvalue->goodwill_amount}}">
                        <input name="change_goodwill_value" type="checkbox" class="checkbox" style="color: #2b2b2b"> <label style="cursor: pointer; font-size: 1rem" for="change_goodwill_value"> Would you like to update same goodwill value</label>

                    @if($errors->has('goodwill_value'))
                            <label id="name-error" class="error">{{$errors->first('goodwill_value')}}</label>
                        @endif
                    </div>
                    <div class="col-md-12 mb-12 focused">
                        <label for="title">goodwill_status</label>
                        <select class="form-control" name="goodwill_status">
                            <option value="">Select Goodwill</option>
                            <option value="1" {{$goodWillData->goodwill_status==1?'selected':''}} >Enable</option>
                            <option value="0" {{$goodWillData->goodwill_status==0?'selected':''}}>Disable</option>
                        </select>
                        @if($errors->has('goodwill_status'))
                            <label id="name-error" class="error">{{$errors->first('goodwill_status')}}</label>
                        @endif
                    </div>





                    <button type="submit" class="btn btn-primary mr-2" style="margin-top:20px;">Update</button>

                </div>
            </form>
        </div>
    </div>


@stop()





