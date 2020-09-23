<div class="container-fluid bg-danger">
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="{{route('home')}}">
                    <img src="logo.png" class="my-4" style="width:40%!important;" alt="logo">
                </a>
            </div>
            <div class="col my-auto">
                <div class="float-right">
                    <div class="input-group md-form form-sm form-2 pl-0">
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                        <span class="input-group-text" id="basic-text1">
                            <i class="fas fa-search"></i>
                        </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container-fluid mb-3" style="background-color: #fed81d;">
    <div class="container">
        <nav class="navbar navbar-expand-sm pl-0">
            <ul class="navbar-nav">
                <li class="nav-item mr-2">
                    <a class="nav-link pl-0 text-dark" href="{{route('home')}}">Home</a>
                </li>
                <!-- Dropdown -->
                <li class="nav-item dropdown mx-2">
                    <a class="nav-link dropdown-toggle text-dark" href="destinations" id="navbardrop" data-toggle="dropdown">
                        Destinations
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('campus')}}">United States</a>
                        <a class="dropdown-item" href="{{route('campus')}}">Australia</a>
                        <a class="dropdown-item" href="{{route('campus')}}">Hongkong</a>
                        <a class="dropdown-item" href="{{route('campus')}}">United Kingdom</a>
                        <a class="dropdown-item" href="{{route('campus')}}">China</a>
                        <a class="dropdown-item" href="{{route('campus')}}">Malaysia</a>
                        <a class="dropdown-item" href="{{route('campus')}}">Switzerland</a>
                        <a class="dropdown-item" href="{{route('campus')}}">Singapore</a>
                        <a class="dropdown-item" href="{{route('campus')}}">Republic Of Ireland</a>
                    </div>
                </li>
                <li class="nav-item dropdown mx-2">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="navbardrop" data-toggle="dropdown">
                        Language Program
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('english_course')}}">English</a>
                        <a class="dropdown-item" href="{{route('mandarin_course')}}">Mandarin</a>
                    </div>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-dark" href="#">About Us</a>
                </li>
                <li class="nav-item ml-2">
                    <a class="nav-link text-dark" href="{{route('contact')}}">Contact</a>
                </li>
            </ul>
        </nav>
    </div>

</div>
