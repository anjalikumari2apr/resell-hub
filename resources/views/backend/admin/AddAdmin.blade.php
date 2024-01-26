
@extends('backend.admin.layouts.master')
@section('content')

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
<div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4"> Add Admin</h6>
                            <form  action="{{ route('Admin.Create') }}" method="post" enctype='multipart/form-data'>
                              @csrf
                                <div class="mb-3">
                                    <label  class="form-label">User Name</label>
                                    <input type="text" class="form-control" name="username" placeholder=" name.." value="{{ old('username') }}">
                                    <span class="text-danger">
                                         @error('username')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                              
                                        <div class="mb-3">
                                    <label  class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder=" Email.." value="{{ old('email') }}">
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror   
                                    </span>
                                </div>
                               
                                <div class="mb-3">
                                    <label  class="form-label">Password</label>
                                    <input type="textarea" class="form-control" name="password" placeholder=" password.." value="{{ old('password') }}">
                                    <span class="text-danger">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                                               

                                    <div class="form-row">
                                <div class="mb-3">
                                    <label  class="form-label">status</label>
                                    <select name="status" >
                                    <option value="1">Active</option>
                                    <option value="0">InActive</option>
                                    </select>
                                </div>

                                
                                <br/><br/>
                                    <div>
                                        <button type="submit" class="btn btn-primary"> Submit</button>
                                    </div>
                            </form>
                        </div>
                    </div>
</div>
</div>




@endsection
