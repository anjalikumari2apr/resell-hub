<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Resell Hub</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="https://cdn4.sharechat.com/img_580740_2edd0394_1667344577365_sc.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{auth()->check() ? auth()->user()->name :''}}</h6>
                        
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{route('adminhome')}}" class="nav-item nav-link active"><i class="fa fa-home me-2"></i>Home</a>
                    <a href="{{route('register-view')}}" class="nav-item nav-link"><i class="fa fa-pen me-2"></i>Registeration</a>             
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Category</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('categoryform')}}" class="dropdown-item">Add Category</a>
                            <a href="{{route('dispalycate')}}" class="dropdown-item">Manage Category</a>
                        </div>
                    </div>
                    <a href="{{route('product-view')}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Products</a>
                    <a href="{{url('/') }}"class="nav-item nav-link" target="_blank"><i class="fa fa-keyboard me-2"></i>Frontend</a>
                    <a href="{{route('complaint-view') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Complaints</a>
                    <a href="{{route('testimonial-view')}}" testimonialview class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Feedback</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Banner</a>
                        <div class="dropdown-menu bg-transparent border-0">
                           
                        </div>
                    </div>
                </div>
            </nav>
        </div>