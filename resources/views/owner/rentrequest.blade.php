@extends('layout')

@section('content')
<div class="content-wrapper" style="min-height: 521px;">
    <div class="row">
        <section class="col-lg-12 ">
            <div class="card col-l-12">
                <div class="card-header border-transparent ui-sortable-handle" style="cursor: move;">
                    <h3 class="card-title">Property Rent Request</h3>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th>Property No</th>
                                    <th>Property Location</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($user_detail as $user_details)
                                <tr>
                                    <td><a href="/admin/{{$owner_id}}/{{$user_details->shop->shop_id}}">{{$user_details->shop_id}}</a></td>
                                    <td>{{$user_details->shop->shop_location}}</td>
                                    <td><a href="/admin/{{$owner_id}}/{{$user_details->user->user_id}}">{{$user_details->user->user_name}}</a></td>
                                    <td>{{$user_details->user->user_email}}</td>
                                    <td>{{$user_details->user->user_phone_no}}</td>
                                    <td><div class="row"><div class="col-lg-6">
                                        <button class="btn btn-success">Accept</button>
                                    </div><div class="col-lg-6">
                                        <button class="btn btn-danger">Reject</button>
                                    </div></div></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection