@extends('layout')

@section('content')
<div class="content-wrapper" style="min-height: 521px;">
    <div class="row">
        <h1 class="ml-3">Owner Table</h1>
        <div class="col-lg-12 ml-4">
            <div class="table-responsive">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th>Owner ID</th>
                            <th>Owner Name</th>
                            <th>Owner Email</th>
                            <th>Owner Phone</th>
                            <th>Owner Aadhar no</th>
                            <th>Owner Current Address</th>
                            <th>Owner Permanent Address</th>
                            <th>Owner Status</th>
                            <th>Owner Profile Pic</th>
                            <th>Owner Shop Count</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($owner as $owners)
                        <tr>
                            <td>{{$owners->owner_id}}</td>
                            <td>{{$owners->owner_name}}</td>
                            <td>{{$owners->owner_email}}</td>
                            <td>{{$owners->owner_phoneno}}</td>
                            <td>{{$owners->owner_aadhar_no}}</td>
                            <td>{{$owners->owner_current_address}}</td>
                            <td>{{$owners->owner_permanent_address}}</td>
                            <td>{{$owners->owner_status}}</td>
                            <td>{{$owners->owner_profile_pic}}</td>
                            <td>{{$owners->owner_shop_count}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- /.table-responsive -->
        </div>
    </div>
    @endsection