<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>sell</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<form action="{{route('frontend.sell') }}" method="post" enctype="multipart/form-data">
    @csrf
  
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="name">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Price</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="price">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Description</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="description">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">image</label>
  <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="choose file" name="image">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">image</label>
  <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="choose file" name="image1">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">image</label>
  <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="choose file" name="image2">
</div>
<select class="form-control" id="exampleSelectGender" name="category_id">
                        @forelse($categories as $cat)
                      <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                      @empty
                      <option value="">No Category</option>
                      @endforelse
                       </select>
<br>
                    <button type="button" class="btn btn-primary">Submit</button>
</form>
</body>
</html>