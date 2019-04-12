@extends('admin.af-login.cmsManagement.pricing.index')
@section('admin-pricing-content')
   <div class="card">
       <div class="card_body">
            <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Pricing Title</th>
                <th scope="col">Price per Month</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><div class="badge badge-success badge-pill"> Active</div></td>
                <td>
                    <a href="{{url('ut-admin/pricing/edit')}}"><i class="icon-edit"></i></a>
                    <a href="{{url('ut-admin/pricing/delete')}}"><i class="icon-trash"></i></a>
                </td>
            </tr>
            
            </tbody>
        </table>
    </div>
   </div>

@stop()




