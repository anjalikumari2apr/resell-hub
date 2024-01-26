@extends('backend.admin.layouts.master')
@section('content')

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                   
                  <div class="col-sm-12 col-xl-6">
                       
                    </div>
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Feedbacks(Testimonial)</h6>
                            <div class="table-responsive">
                                <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">S.N.</th>
                                    <th scope="col">id</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Review</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    @forelse($data as $review)
                                        <td> {{$loop->iteration}} </td>
                                            <td>{{$review->id}}</td>
                                            <td>{{$review->username}}</td>
                                            <td>{{$review->email}}</td>
                                            <td>{{$review->review}}</td>
                                           
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