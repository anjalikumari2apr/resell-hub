@extends('backend.admin.layouts.master')
@section('content')

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                   
                  <div class="col-sm-12 col-xl-6">
                       
                    </div>
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">User Registeration List</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                    <th scope="col">S.N.</th>
                                    <th scope="col">id</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Roles</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    @forelse($data as $register)
                                        <td> {{$loop->iteration}} </td>
                                            <td>{{$register->id}}</td>
                                            <td>{{$register->name}}</td>
                                            <td>{{$register->email}}</td>
                                            <td>{{$register->password}}</td>
                                            <td>{{$register->roles}}</td>
                                           
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