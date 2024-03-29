<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>View more</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


 <!-- Customized Bootstrap Stylesheet -->
 <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('css/style4.css')}}" rel="stylesheet">
<body>
<div class = "card-wrapper">
  <div class = "card">
    <!-- card left -->
    <div class = "product-imgs">
      <div class = "img-display">
        <div class = "img-showcase">
          <img src ="{{ asset('Product_Images').'/'.$products->image }}" alt = "image missing" style="height:350px;">
          <img src = "{{ asset('Product_Images').'/'.$products->image2 }}" alt = "image missing" style="height:350px;">
          <img src = "{{ asset('Product_Images').'/'.$products->image3 }}" alt = "image missing" style="height:350px;">
          
        </div>
      </div>
      <div class = "img-select">
        <div class = "img-item">
          <a href = "#" data-id = "1">
            <img src = "{{ asset('Product_Images').'/'.$products->image }}" alt = "image missing" style="height:150px;width:150px;">
          </a>
        </div>
        <div class = "img-item">
          <a href = "#" data-id = "2">
            <img src = "{{ asset('Product_Images').'/'.$products->image2 }}" alt = "image missing" style="height:150px;width:150px;">
          </a>
        </div>
        <div class = "img-item">
          <a href = "#" data-id = "3">
            <img src = "{{ asset('Product_Images').'/'.$products->image3 }}" alt = "image missing" style="height:150px;width:150px;">
          </a>
        </div>
       
      </div>
    </div>
    <!-- card right -->
    <div class = "product-content">
      <h2 class = "product-title">{{ $products->Name }}</h2>
      
      <div class = "product-rating">
        <i class = "fas fa-star"></i>
        <i class = "fas fa-star"></i>
        <i class = "fas fa-star"></i>
        <i class = "fas fa-star"></i>
        <i class = "fas fa-star-half-alt"></i>
        <span>4.7(21)</span>
      </div>

      <div class = "product-price">
        <p >Price: <span>Rs.{{ $products->Price }}</span></p>
       
      </div>

      <div class = "product-detail">
        <h4>About this product: </h4>
        <ul>
          <!-- <li>Product ID: <span>Black</span></li>
          <li>Name: <span>in stock</span></li>
          <li>Category: <span>Shoes</span></li> -->

          <!-- {{$products->id}} -->

          <li>Product Name: <span>{{ $products->Name }}</span></li>
          <li>Owner Address: <span>{{ $products->Address}}</span></li>
          <li>Description: <span>{{ $products->description }}</span></li>
          
        </ul>
      </div>  
      <!-- <div class = "product-detail">
        <h4>about the seller: </h4>
        <ul>
        <li>Email:</li>
        <li>Contact:</li>
          <li>Address:</li>
          <li>Description:</li>
          
        </ul>
      </div> -->


      <!-- <div class = "social-links">
        <p>Also Contact: </p>
        <a href = "#">
          <i class = "fab fa-facebook-f"></i>
        </a>
        <a href = "#">
          <i class = "fab fa-twitter"></i>
        </a>
        <a href = "#">
          <i class = "fab fa-instagram"></i>
        </a>
        <a href = "#">
          <i class = "fab fa-whatsapp"></i>
        </a>
        <a href = "#">
          <i class = "fab fa-pinterest"></i>
        </a>
      </div> -->
      <div class = "purchase-info">
        <form action="{{ route('Product.Order',$products->id) }}" method="POST">
          @csrf       
        <!-- <button type = "button" class = "btn">
          Add to wishlist <i class = "fas fa-shopping-cart"></i>
        </button> -->
        <a href="">
         <button type = "submit" class = "btn">Order Now</button>
        </a>
        </form>
      </div>

      
    </div>
  </div>
</div>
<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/mainjs.js')}}"></script>
</body>
</html>