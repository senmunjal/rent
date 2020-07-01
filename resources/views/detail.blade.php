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
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>User Phone</th>
                            <th>User Location</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($user as $users)
                        <tr>
                            <td>{{$users->user_name}}</td>
                            <td>{{$users->user_email}}</td>
                            <td>{{$users->user_phone_no}}</td>
                            <td>{{$users->user_location}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
    </div>
    <div class="row">
        <h1 class="ml-3">Owner Table</h1>
        <div class="col-lg-12 ml-4">
            <div class="table-responsive">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th>Owner Name</th>
                            <th>Owner Email</th>
                            <th>Owner Phone</th>
                            <th>Owner Address</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($owner as $owners)
                        <tr>
                            <td>{{$owners->owner_name}}</td>
                            <td>{{$owners->owner_email}}</td>
                            <td>{{$owners->owner_phoneno}}</td>
                            <td>{{$owners->owner_permanent_address}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
    </div>
    <div class="row">
        <h1 class="ml-3">Shop Table</h1>
        <div class="col-lg-12 ml-4">
            <div class="table-responsive">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th>Shop Id</th>
                            <th>Owner Id</th>
                            <th>Shop Location</th>
                            <th>Shop Rent</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($shop as $shops)
                        <tr>
                            <td>{{$shops->shop_id}}</td>
                            <td>{{$shops->owner_id}}</td>
                            <td>{{$shops->shop_location}}</td>
                            <td>{{$shops->shop_rent}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
    </div>
    <div class="row">
        <h1 class="ml-3">Shop Rent Table</h1>
        <div class="col-lg-12 ml-4">
            <div class="table-responsive">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th>Shoprent Id</th>
                            <th>shop Id</th>
                            <th>user Id</th>
                            <th>shop Rented at</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($shoprent as $shoprents)
                        <tr>
                            <td>{{$shoprents->shoprent_id}}</td>
                            <td>{{$shoprents->shop_id}}</td>
                            <td>{{$shoprents->user_id}}</td>
                            <td>{{$shoprents->shop_rented_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
    </div>
</div>


@endsection