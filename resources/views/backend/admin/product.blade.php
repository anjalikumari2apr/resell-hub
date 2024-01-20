@extends('backend.admin.layouts.master')
@section('content')

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                   
                  <div class="col-sm-12 col-xl-6">
                       
                    </div>
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Products List</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">S.N.</th>
                                            <th scope="col">Product id</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Decription</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Action</th>
                                          
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                         @forelse($data as $product)
                                        <td> {{$loop->iteration}} </td>
                                            <td>{{$product->id}}</td>
                                            <td>{{$product->Name}}</td>
                                            <td>{{$product->Price}}</td>
                                            <td>{{$product->Email}}</td>
                                            <td>{{$product->Contact}}</td>
                                            <td>{{$product->Address}}</td>
                                            <td>{{$product->description}}</td>
                                            <td>{{$product->image}}</td>
                                   

                                        <td>
                                            <a href="{{route('product.delete',$product->id)}}"> <button class="btn btn-danger">Delete </button> </a>
                                           
                                        </td> 
                                    </tr>
                                        @empty
                                        <tr><td> No Record Found</td></tr>
                                        @endforelse
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
               </div>
            </div>
        </div>
@endsection