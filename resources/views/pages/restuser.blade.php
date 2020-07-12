@extends('layout')

@section('content')
<div class="content-wrapper" style="min-height: 521px;">
    <div class="row">
        <h1 class="ml-3">Rest User Table</h1>
        <div class="col-lg-12 ml-4">
            <div class="table-responsive">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th>Owner ID</th>
                            <th>Owner Name</th>
                            <th>Owner Email</th>
                            <th>Owner Phone</th>

                        </tr>
                    </thead>
                    <tbody>


                        <tr>

                            <td>11</td>
                            <td>bharat</td>
                            <td>babbs</td>
                            <td>ff</td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- /.table-responsive -->
        </div>
    </div>
    @endsection