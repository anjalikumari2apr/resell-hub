
@extends('backend.admin.layouts.master')
@section('content')

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
<div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4"> Upload Image</h6>
                            <form  action="{{ route('slider-create') }}" method="post" enctype='multipart/form-data'>
                              @csrf                              
                                                      
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
                                <div class="mb-3">
                                    <label  class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image[]" placeholder=" Img4..">
                                    <span class="text-danger">
                                        @error('image[]')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image[]" placeholder=" Img5..">
                                    <span class="text-danger">
                                        @error('image[]')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image[]" placeholder=" Img6..">
                                    <span class="text-danger">
                                        @error('image[]')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image[]" placeholder=" Img7..">
                                    <span class="text-danger">
                                        @error('image[]')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                               
                                <div class="mb-3">
                                    <label  class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image[]" placeholder=" Img8..">
                                    <span class="text-danger">
                                        @error('image[]')
                                            {{ $message }}
                                        @enderror
                                    </span>
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
