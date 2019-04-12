@extends('admin.af-login.cmsManagement.pricing.index')
@section('admin-pricing-content')
<div class="card">
        <div class="card-body b-b">
            <form method="post" >
                @csrf()
                <div class="form-row">
                    <div class="col-md-12 mb-12 focused">
                        <label for="title">Pricing title</label>
                        <input type="text" autofocus="autofocus" value="" name="goodwill_title" class="form-control" value="">
                       
                    </div>
                    <div class="col-md-12 mb-12 focused">
                        <label for="title">Pricing per Month</label>
                        <input type="number" value="" step="0.01" autofocus="autofocus" name="goodwill_value" class="form-control" value="">
                        
                    </div>
                    <div class="col-md-12 mb-12 focused">
                            <label for="title">pricing_status</label>
                            <select class="form-control" name="goodwill_status">
                                <option value="" selected>pricing status</option>
                                <option value="1" >Enable</option>
                                <option value="0" >Disable</option>
                            </select>
                           
                    </div>
                   

                    <button type="submit" class="btn btn-primary mr-2" style="margin-top:20px;">Save</button>

                </div>
            </form>
        </div>
    </div>


@stop()




