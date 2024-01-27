@extends('backend.User.layouts.master')
@section('content')

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                   
                  <div class="col-sm-12 col-xl-6">
                       
                    </div>
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Your Order List</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                             <th scope="col">S.N.</th>
                                             <th scope="col">UID</th>
                                            <th scope="col"> Product ID</th>
                                            <th scope="col">Order No.</th>
                                            <th scope="col">Action</th>
                                                                                     
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($data as $order)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$order->user_id}}</td>
                                    <td>{{$order->product_id}}</td>
                                    <td>{{$order->order_no}}</td>
                                    <td><a href="">
                                        <button class="btn btn-danger">Cancel Order</button>
                                    </a></td>
                                </tr>
                                    @empty
                                        <tr><td colspan="5" align="center" > 
                                            You don't have place any Order....  !!! ->
                                        </td></tr>
                                    @endforelse                               
                                </tbody>
                            </table>
                        </div>
                    </div>
               </div>
            </div>
        </div>
@endsection
