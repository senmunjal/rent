@extends('layout')

@section('content')
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
                        <th>Shop Dimension</th>
                        <th>Owner Allocated </th>
                        <th>Shop Documents</th>
                        <th>Shop Security</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($shop as $shops)
                    <tr>
                        <td>{{$shops->shop_id}}</td>
                        <td>{{$shops->owner_id}}</td>
                        <td>{{$shops->shop_location}}</td>
                        <td>{{$shops->shop_rent}}</td>
                        <td>{{$shops->shop_dimension}}</td>
                        <td>{{$shops->owner_allocated}}</td>
                        <td>{{$shops->shop_documents}}</td>
                        <td>{{$shops->shop_security}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.table-responsive -->
    </div>
</div>
@endsection