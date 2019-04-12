
<!-- =========== Grid ============ -->
@extends('admin.af-login.influencer.goodwill')
@section('influencer-goodwill-content')

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" >
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Amount Value</th>
                        <th>Total Influencer</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                    </thead>


                    <tbody>

                    @if(count($getGoodwillData)>0)
                        <?php $i=1 ?>
                        @foreach ($getGoodwillData as $getGoodwillData)
                            <div class="modal fade" id="goodwill-{{$getGoodwillData->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel-2">{{$getGoodwillData->goodwill_title}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-center">



                                                <?php $i=1 ?>
                                            <?php $pastDate='' ?>

                                                @foreach($getGoodwillData->goodwillvalueall as $gwValue)

                                                    <ul style="display: flex">
                                                        <li style="padding: 0 10px 0 10px">{{$i .'.'}}</li>
                                                        <li style="padding: 0 10px 0 10px">{{date('Y/m/d', strtotime($gwValue->created_at))}}{{ $i==1?'':'-' . $pastDate}} </li>
                                                        <li style="padding: 0 10px 0 10px">Nrs {{$gwValue->goodwill_amount}}</li>
                                                    </ul>
                                                        <?php $pastDate = date('Y/m/d', strtotime($gwValue->created_at)) ?>
                                                    <?php $i++ ?>
                                                    @endforeach






                                        </div>
                                        <div class="modal-footer">

                                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$getGoodwillData->goodwill_title}}</td>
                                <td><a data-toggle="modal" data-target="#goodwill-{{$getGoodwillData->id}}" style="cursor: pointer; color: #65cadb">Nrs {{$getGoodwillData->goodwillvalue->goodwill_amount}}</a></td>
                                <td>N/A</td>
                                <td><div class="badge  {{$getGoodwillData->goodwill_status==1?'badge-success':'badge-danger'}} badge-pill"> {{$getGoodwillData->goodwill_status==1?'Active':'Inactive'}}</div></td>
                                <td><a href="{{url('ut-admin/good-will/edit').'/'.$getGoodwillData->id}}"><i class="icon-edit"></i></a>
                                    <a  href="{{url('ut-admin/good-will/delete').'/'.$getGoodwillData->id}}" onclick="if (!confirm('Are you sure, you want delete this information?')) { return false }"><i class="icon-trash"></i> </a>
                                </td>

                            </tr>

                            <?php $i++; ?>

                        @endforeach

                    @else
                        <tr>
                            <td colspan="5" style="text-align: center">No record(s) found ! <br>
                            <span><a href="{{url('ut-admin/good-will/add')}}"> Add New Goodwill</a></span>
                            </td>
                        </tr>
                    @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@stop()


