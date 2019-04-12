@extends('layouts.brand')

@section('brand-content')

<style>
    .card {
        margin: 0px;
    }
    img {
        border-radius: 50%;
    }

</style>

<div class="card">
    <div class="card-body">
        <br/>
        <h4 class="card-title">Notification</h4>
        <div class="table-responsive">
            <table class="table">

                <tbody>
                <tr>
                    <td class="py-1 pl-0">
                        <div class="d-flex align-items-center">
                            <img src="{{url('users/images/faces/face13.jpg')}}" alt="profile">
                            <div class="ml-3">
                                <p class="mb-2">Sophia Brown posted in campaign</p>

                                <p class="mb-0 text-muted text-small">
                                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yZ/r/njB8FqmOJA7.png" alt="" style="height: 16px; width: 16px;">
                                    1h</p>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="py-1 pl-0">
                        <div class="d-flex align-items-center">
                            <img src="{{url('users/images/faces/face1.jpg')}}"  alt="profile">
                            <div class="ml-3">
                                <p class="mb-2">Rachel Newton posted in campaign</p>
                                <p class="mb-0 text-muted text-small">
                                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yZ/r/njB8FqmOJA7.png" alt="" style="height: 16px; width: 16px;">
                                    2h</p>
                            </div>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td class="py-1 pl-0">
                        <div class="d-flex align-items-center">
                            <img src="{{url('users/images/faces/face2.jpg')}}"  alt="profile">
                            <div class="ml-3">
                                <p class="mb-2">Marcus Stevens posted in campaign</p>
                                <p class="mb-0 text-muted text-small">
                                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yZ/r/njB8FqmOJA7.png" alt="" style="height: 16px; width: 16px;">
                                    3h</p>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="py-1 pl-0">
                        <div class="d-flex align-items-center">
                            <img src="{{url('users/images/faces/face3.jpg')}}"  alt="profile">
                            <div class="ml-3">
                                <p class="mb-2">Theresa Becker posted in campaign</p>
                                <p class="mb-0 text-muted text-small">
                                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y0/r/LaiBDr444h9.png" alt="" style="height: 16px; width: 16px;">
                                    3h</p>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="py-1 pl-0">
                        <div class="d-flex align-items-center">
                            <img src="{{url('users/images/faces/face4.jpg')}}"  alt="profile">
                            <div class="ml-3">
                                <p class="mb-2">Jessie Ortiz</p>
                                <p class="mb-0 text-muted text-small">
                                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yW/r/nlIzQf8odIp.png" alt="" style="height: 16px; width: 16px;">
                                    11h</p>
                            </div>
                        </div>
                    </td>

                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


    @stop()
