
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
                                        <th scope="col">Image1</th>
                                        <th scope="col">Image2</th>
                                        <th scope="col">Image3</th>
                                        <th scope="col">Image4</th>
                                        <th scope="col">Image5</th>
                                        <th scope="col">Image6</th>
                                        <th scope="col">Image7</th>
                                        <th scope="col">Image8</th>

                                       
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @forelse($data as $image)
                                   
                                        <td> {{$loop->iteration}} </td>
                                        <td><img class="rounded-circle" src="{{ asset('Product_Images').'/'.$image->image1 }} " style="width: 70px; height: 70px;" alt="Image missing"></td>
                                        <td><img class="rounded-circle" src="{{ asset('Product_Images').'/'.$image->image2 }} " style="width: 70px; height: 70px;" alt="Image missing"></td>
                                        <td><img class="rounded-circle" src="{{ asset('Product_Images').'/'.$image->image3 }} " style="width: 70px; height: 70px;" alt="Image missing"></td>
                                        <td><img class="rounded-circle" src="{{ asset('Product_Images').'/'.$image->image4 }} " style="width: 70px; height: 70px;" alt="Image missing"></td>
                                        <td><img class="rounded-circle" src="{{ asset('Product_Images').'/'.$image->image5 }} " style="width: 70px; height: 70px;" alt="Image missing"></td>
                                        <td><img class="rounded-circle" src="{{ asset('Product_Images').'/'.$image->image6 }} " style="width: 70px; height: 70px;" alt="Image missing"></td>
                                        <td><img class="rounded-circle" src="{{ asset('Product_Images').'/'.$image->image7 }} " style="width: 70px; height: 70px;" alt="Image missing"></td>
                                        <td><img class="rounded-circle" src="{{ asset('Product_Images').'/'.$image->image8 }} " style="width: 70px; height: 70px;" alt="Image missing"></td>
                                        
                                        <td>
                                            <a href="{{route('image.edit',$image->id)}}"> <button class="btn btn-danger">Edit </button> </a>
                                           
                                        </td> 
</tr>  
                                        @empty
                                        <tr><td> No Record Found</td></tr>
                                        @endforelse
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
               </div>
            </div>
        </div>
                    @endsection