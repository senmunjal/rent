@extends('layout')

@section('content')
<div class="content-wrapper" style="min-height: 521px;">
    <div class="row">
        <h1 class="ml-3">User Table</h1>
        <div class="col-lg-12 ml-4">
            <div class="table-responsive">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th>User Id</th>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>User Phone</th>
                            <th>User Location</th>
                            <th>User Aadhar No</th>
                            <th>User Status</th>
                            <th>User Rented Shop</th>
                            <th>User Profile pic</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($user as $users)
                        <tr>
                            <td>{{$users->user_id}}</td>
                            <td>{{$users->user_name}}</td>
                            <td>{{$users->user_email}}</td>
                            <td>{{$users->user_phone_no}}</td>
                            <td>{{$users->user_location}}</td>
                            <td>{{$users->user_aadhar_no}}</td>
                            <td>{{$users->user_statusl}}</td>
                            <td>{{$users->user_rented_shop}}</td>
                            <td>{{$users->user_profile_pic}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
    </div>
    @endsection