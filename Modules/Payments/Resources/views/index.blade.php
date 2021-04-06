@extends('dashboard::layouts.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Lists of Payments</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">This is where you manage payment made by users</h6>
{{--                <button class="btn btn-outline-success -align-right" {!! $addButton !!}>Add plan</button>--}}
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name of User</th>

                            <th>Plan paid for</th>
                            <th>Date paid</th>
                            <th>Status of Payment</th>
                            <th>Date Approved</th>
                            <th>Actions</th>


                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Name of User</th>

                            <th>Plan paid for</th>
                            <th>Date paid</th>
                            <th>Status of Payment</th>
                            <th>Date Approved</th>
                            <th>Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @if(count($payments) > 0)

                            @foreach($payments as $payment)
                                <tr>
                                    <td>{{$payment->user->fullName()}}</td>
                                    <td>{{$payment->investment->investmentName()}}</td>
                                    <td>{{$payment->created_at->diffForHumans() ?? ''}}</td>
                                    <td>{{$payment->status}}</td>
                                    <td>{{$payment->updated_at->diffForHumans()}}</td>

                                    <td>
                                      <span>  <a href="" class="btn btn-outline-success">Approve</a> </span><a href="" class="btn btn-outline-secondary">Edit</a> <span><a href="" class="btn btn-outline-danger ">Delete</a></span>
                                    </td>
                                </tr>
                            @endforeach


                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
