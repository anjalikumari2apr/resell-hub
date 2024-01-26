@extends('backend.User.layouts.master')
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
                                             <th scope="col">UID</th>
                                            <th scope="col"> Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Decription</th>
                                            <th scope="col">Image 1</th>
                                            <th scope="col">Image 2</th>
                                            <th scope="col">Image 3</th>
                                            <th scope="col">Action</th>
                                          
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($data as $product)
                                    <tr>
                                        <td> {{$loop->iteration}} </td>
                                        <td>{{auth()->check() ? auth()->user()->id :''}}</td>
                                        <td>{{$product->Name}}</td>
                                        <td>{{$product->Price}}</td>
                                        <td>{{$product->Email}}</td>
                                        <td>{{$product->Contact}}</td>
                                        <td>{{$product->Address}}</td>
                                        <td>{{$product->description}}</td>
                                        <td><img class="rounded-circle" src="{{ asset('Product_Images').'/'.$product->image }} " style="width: 50px; height: 50px;" alt="Image missing"></td>
                                        <td><img class="rounded-circle" src="{{ asset('Product_Images').'/'.$product->image2 }} " style="width: 50px; height: 50px;" alt="Image missing"></td>
                                        <td><img class="rounded-circle" src="{{ asset('Product_Images').'/'.$product->image3 }} " style="width: 50px; height: 50px;" alt="Image missing"></td>
                                        <td>
                                            <a href="{{route('product.edit',$product->id)}}"> <button class="btn btn-success">Edit </button> </a>
                                            <a  href="{{route('product.delete',$product->id)}}"> <button class="btn btn-danger">Delete </button> </a>                                           
                                        </td> 
                                    </tr>
                                    @empty
                                        <tr><td colspan="12" align="center" > 
                                            You haven't added any product details....Please Add product details  !!! ->
                                            <a href="{{ route('frontendsell') }}"> <button class="btn btn-primary">Add Product </button> </a>
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
