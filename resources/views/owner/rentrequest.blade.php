@extends('layout')

@section('content')
<div class="content-wrapper" style="min-height: 521px;">
    <div class="row">
        <section class="col-lg-12 ">
            <div class="card col-l-12">
                <div class="card-header border-transparent ui-sortable-handle" style="cursor: move;">
                    <h3 class="card-title">Property Detail</h3>
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
                                    <td><a href=""></a>{{$user_details->shop_id}}</td>
                                    <td>{{$user_details->shop_id->shop_location}}</td>
                                    <td></td>
                                    <td><span class="badge badge-warning"></span></td>
                                    <td>
                                        <div class="sparkbar" data-color="#f39c12" data-height="20"></div>
                                    </td>
                                    <td>
                                        <div class="sparkbar" data-color="#f39c12" data-height="20"></div>
                                    </td>
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