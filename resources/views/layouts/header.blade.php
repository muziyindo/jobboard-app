<div class="container-fluid header-container">
    <div class="top-nav"></div>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #673ab7;">
        <a class="navbar-brand" href="#" style="color:#fff">JOBBOARD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('index') }}"><i class="fas fa-home"></i> Home <span
                            class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-circle"></i> Jobs
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('jobs') }}">View Jobs</a>
                        @auth
                            <a class="dropdown-item" href="{{ route('createJob') }}">Add Job</a>
                        @endauth
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}"><i class="fas fa-info-circle"></i> About <span
                            class="sr-only">(current)</span></a>
                </li>

                
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"> <i class="fas fa-lock"></i> Login</a>
                    </li>
                @endguest

                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}"><i class="fas fa-user-circle"></i> Add User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                @endauth


            </ul>
        </div>
    </nav>
</div>
