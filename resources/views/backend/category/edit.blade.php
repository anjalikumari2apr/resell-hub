@extends('backend.admin.layouts.master')
@section('content')

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
<div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Basic Form</h6>
                            <form  action="{{route('cate.update',$cat_data->id)}}" method="post" >
                              @csrf
                                <div class="mb-3">
                                    <label  class="form-label">Category Name</label>
                                    <input type="text" class="form-control" name="category_name" placeholder=" name.." value="{{$cat_data->category_name ?? ''}}">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">status</label>
                                    <select name="status"  value="{{$cat_data->status ?? ''}}">
                                    <option value="1">Active</option>
                                    <option value="0">InActive</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary"> Submit</button>
                            </form>
                        </div>
                    </div>
</div>
</div>



@endsection