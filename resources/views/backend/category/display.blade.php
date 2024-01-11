
@extends('backend.admin.layouts.master')
@section('content')
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Category List</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">S.N</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @forelse($data as $cate)
                                   
                                        <td> {{$loop->iteration}} </td>
                                        <td>{{$cate->category_name}}</td>
                                        <td>{{$cate->status}}</td>
                                        <td>
                                            <a href="{{route('cate.delete',$cate->id)}}"> <button class="btn btn-danger">Delete </button> </a>
                                            <a href="{{route('cate.edit',$cate->id)}}"> <button class="btn btn-success">Edit </button> </a>
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
                    @endsection