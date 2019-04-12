@extends('admin.af-login.influencer.influencer_info')
@section('admin.influencer.content')

    <div class="card">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>
                            User
                        </th>
                        <th>
                            Full Name
                        </th>
                        <th>
                            Social Network
                        </th>
                        <th>
                            Goodwill
                        </th>
                        <th>Ceiling Likes</th>
                        <th>
                            Status
                        </th>
                        <th>
                            Join Date
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td class="py-1">
                            <img src="../../images/faces/face1.jpg" alt="image">
                        </td>
                        <td>
                            Herman Beck Beck beck
                        </td>
                        <td>
                            <ul>
                                <li>Facebook</li>
                                <li>Instagram</li>
                                <li>Youtube</li>
                            </ul>
                        </td>
                        <td>Celebrity</td>
                        <td>12000</td>
                        <td>
                            <span class="badge badge-success">Active</span>
                        </td>
                        <td>
                            May 15, 2015
                        </td>

                        <td>
                            <a href="#" style="font-size: 20px"><i class="icon-eye"></i></a>
                            <a href="#" style="font-size: 20px"><i class="icon-edit"></i></a>
                            <a href="#" style="font-size: 20px"><i class="icon-trash-can"></i></a>
                        </td>

                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @stop()