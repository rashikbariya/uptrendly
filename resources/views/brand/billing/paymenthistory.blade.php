@extends('brand.billing.index')
@section('billing-content')
    <style>
        .tb-border{
            border: 1px solid #cbcbcb;
            border-radius: 3px;
            padding: 1px 0;
            font-size: 14px;
        }
        .table{
            margin-bottom: 0;
        }
        .mbs{
            padding-left: 20px;
            color: #2b2b2b;
            font-size: 24px;
        }
        .paid-bud{
            padding: 5px;
            background: darkgreen;
            color: white;
            text-align: center;
            border-radius: 16px;
        }
        .pending-bud{
            padding: 5px;
            background: orangered;
            color: white;
            text-align: center;
            border-radius: 16px;
        }
    </style>
    <h2 class="mbs">Payment History</h2>
<div class="row" style="padding: 20px;">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="tb-border table-responsive">

            <table class="table table-striped" style="color: #2b2b2b;">
                <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Renew or Change Plan</th>
                    <th>
                        Payment or Start date
                    </th>
                    <th>
                        End Date
                    </th>
                    <th>
                        Service
                    </th>
                    <th>
                        Amount/month
                    </th>
                    <th>
                    Discount
                    </th>
                    <th>
                        Total Amount
                    </th>
                    <th>
                        Status
                    </th>

                </tr>
                </thead>
                <tbody>

                @if(count($historyData)>0)
                    <?php $i=1 ?>
                   @foreach($historyData as $history)
                       <tr>
                           <td>
                                {{$i}}
                           </td>
                           <td>
                             {{$history->change_date}}
                           </td>
                           <td>
                               {{$history->from_date==null?'Pending':$history->from_date}}
                           </td>
                           <td>
                               {{$history->to_date==null?'Pending':$history->to_date}}
                           </td>
                        
                           <td>
                               {{$history->pricing->pricing_title}} ( {{$history->total_month}} {{$history->total_month>1?'Months':'Month'}} )
                           </td>
                         
                           <td>
                               {{number_format($history->pricing->price_per_month, 2)}}
                           </td>
                           <td>
                           {{$history->total_month>1?'10%':'0%'}}
                           </td>
                           <td>
                               {{number_format($history->amount_per_month, 2)}}
                           </td>
                           <td>
                               @if($history->pricing_status==1 || $history->pricing_status==2 )
                                   <div class="paid-bud">
                                       Paid
                                   </div>
                                   @elseif($history->pricing_status==3)

                                   <div class="pending-bud">
                                       Pending
                                   </div>

                               @endif
                           </td>
                       </tr>
                       <?php $i++; ?>
                       @endforeach
                @else
                    <tr  style="text-align: center; color: #2b2b2b;background: #faf9f8">
                        <td colspan="8" style="font-size: 1.5rem">You have no payment transactions so far</td>
                    </tr>
                @endif



                </tbody>
            </table>
        </div>
    </div>
</div>
@stop()


