
@extends('backend.User.layouts.master')
@section('content')

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
<div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4"> Fill the form to upload your post...</h6>
                            <form  action="{{ route('backend.User.Products.Sell') }}" method="post" enctype='multipart/form-data'>
                              @csrf
                                <div class="mb-3">
                                    <label  class="form-label">Product Name</label>
                                    <input type="text" class="form-control" name="name" placeholder=" name.." value="{{ old('name') }}">
                                    <span class="text-danger">
                                         @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                              
                                <div class="mb-3">
                                    <label  class="form-label">Price</label>
                                    <input type="text" class="form-control" name="price" placeholder=" Price.." value="{{ old('price') }}" required/>
                                    <span class="text-danger">
                                        @error('price')
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
                                    <label  class="form-label">Contact</label>
                                    <input type="text" class="form-control" name="contact" placeholder=" Contact.." value="{{ old('contact') }}">
                                    <span class="text-danger">
                                        @error('contact')
                                            {{ $message }}
                                        @enderror   
                                    </span>
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Address</label>
                                    <input type="text" class="form-control" name="address" placeholder=" Address.." value="{{ old('address') }}">
                                    <span class="text-danger">
                                        @error('address')
                                            {{ $message }}
                                        @enderror   
                                    </span>
                                </div>
                               
                                <div class="mb-3">
                                    <label  class="form-label">Description</label>
                                    <input type="textarea" class="form-control" name="description" placeholder=" Description.." value="{{ old('description') }}">
                                    <span class="text-danger">
                                        @error('description')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="mb-3">
                                    <label  class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image[]" placeholder=" Img1..">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                             @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    
                                </div>

                                <div class="mb-3">
                                    <label  class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image[]" placeholder=" Img2..">
                                    <span class="text-danger">
                                        @error('image[]')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image[]" placeholder=" Img3..">
                                    <span class="text-danger">
                                        @error('image[]')
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

                                <div class="form-row">
            
                                 <label for="">Choose category</label>
                                   <br>
                                    <select name="category_id" id="">
                                    @forelse($categories as $cat)
                                   <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                                  @empty
                                 <option value="">No Category</option>
                                 @endforelse
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
