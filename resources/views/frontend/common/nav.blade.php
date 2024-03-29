<div class="container-fluid fixed-top">
            <div class="container topbar bg-primary d-none d-lg-block">
                <div class="d-flex justify-content-between">

                    <div class="top-link pe-2">
                        <a href="#" class="text-white"><small class="text-white mx-2">Privacy Policy</small>/</a>
                        <a href="#" class="text-white"><small class="text-white mx-2">Terms of Use</small>/</a>
                        <a href="{{route('complaint') }}" class="text-white"><small class="text-white ms-2">Register Complaints</small></a>
                        <br>
                    </div>
                </div>
            </div>
            <div class="container px-0">
                <nav class="navbar navbar-light bg-white navbar-expand-xl">
                    <img src="{{ asset('img/pic.png') }}" alt="" width="60px"/>
                    <a href="{{ url('/') }}" class="navbar-brand"><img src="{{ asset('img/pic2.png') }}" width="300px"></a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <a href="http://localhost/resell-hub/public/" class="nav-item nav-link active">Home</a>
                            <a href="{{route('pro-view') }}" class="nav-item nav-link">Shop</a>
                            <a href="{{route('testimonial') }}" class="nav-item nav-link">Testimonial</a>
                            <a href="{{route('frontend.contact') }}" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="d-flex m-3 me-0">
                            <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search text-primary"></i></button>
                           
                            <!-- <a href="#" class="position-relative me-4 my-auto">
                                <i class="fa fa-bell fa-2x"></i>
                               
                            </a> -->

                            <a href="{{ route('login.page') }}" class="my-auto">
                                <i class="fas fa-user fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>