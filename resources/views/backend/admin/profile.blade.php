@extends('backend.admin.layouts.master')
@section('content')

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                   
                  <div class="col-sm-12 col-xl-6">
                       
                    </div>
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Profile</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.N.</th>
                                            <th scope="col">id</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Action</th>
                                          
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    
                                            <td>1.</td>
                                            <td>{{auth()->check() ? auth()->user()->id :''}}</td>
                                            <td>{{auth()->check() ? auth()->user()->name :''}}</td>
                                            <td>{{auth()->check() ? auth()->user()->email :''}}</td>
                                            <td>{{auth()->check() ? auth()->user()->password :''}}</td>
                                            <td>{{auth()->check() ? auth()->user()->image :''}}</td>
                                            
                                            <td> <a href="{{route('product.edit','$register->id')}}"> <button class="btn btn-info">Edit </button> </a> </td> 
                                    </tr>
                                           
                                            
                                           
                                         
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
               </div>
            </div>
        </div>
@endsection