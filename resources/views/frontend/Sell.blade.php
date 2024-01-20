
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>sellform</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <link href="css/style2.css" rel="stylesheet">

       
    </head>


        

<div class="container">
      <div class="text">
         Fill the form to upload your post...
      </div>
      <form action="{{ route('frontend.sell') }}" method='POST' enctype="multipart/form-data">
    @csrf
         <div class="form-row">
            <div class="input-data">
               <input type="text" name="name" required>
               <div class="underline"></div>
               <label for=""> Product Name</label>
            </div>

            <div class="input-data">
               <input type="text" name="price" required>
               <div class="underline"></div>
               <label for="">Price</label>
            </div>
         </div>

         <div class="form-row">
            <div class="input-data">
               <input type="text" name="email"required>
               <div class="underline"></div>
               <label for="">Email</label>
            </div>
            <div class="input-data">
               <input type="text" name="contact" required>
               <div class="underline"></div>
               <label for="">Contact</label>
            </div>

            <div class="input-data">
               <input type="text" name="address" required>
               <div class="underline"></div>
               <label for="">Address</label>
            </div>
           </div>
         

        <div class="form-row">
         <div class="input-data textarea">
            <textarea rows="8" cols="80"  name="description" required></textarea>
            <br />
            <div class="underline"></div>
            <label for=""> Description</label>
            </div>
          
          
<br>
            <div class="input-data" >
            <input  name="image"  type="file" required>
              </div>
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
   
            <div class="form-row submit-btn">
               <div class="input-data">
                  <div class="inner"></div>
                  <input type="submit" value="submit">
               </div>
            </div> 
          </div>
        </div>
</form>
</div>

 
</body>
</html>


     