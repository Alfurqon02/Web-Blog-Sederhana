<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="/logo_light.png" alt="logo" width="150x"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/about">About</a>
          </li> --}}
          
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/posts">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/category">Category</a>
          </li>

          @auth

          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Account
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item d-flex justify-content-between" href="/profile">My Profile<i class="bi bi-person"></i></a></li>
              <li><a class="dropdown-item d-flex justify-content-between" href="/dashboard">Dashboard<i class="bi bi-bar-chart-line"></i></a></li>
              <li><a class="dropdown-item d-flex justify-content-between disabled" href="#">Settings<i class="bi bi-gear"></i></a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item d-flex justify-content-between">Logout<i class="bi bi-box-arrow-right"></i>
                  </button>
                </form>
              </li>
            </ul>
          </li>
          
          @else
          <li class="nav-item">
            <a href="/login" class="nav-link">Login</a>
          </li>
          @endauth
        </ul>
        <form class="d-flex" role="search" action="/posts">
          @if(request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
          @elseif(request('user'))
            <input type="hidden" name="category" value="{{ request('user') }}">
          @endif
          <input class="form-control me-2" type="text" placeholder="Search.." name="search" value="{{ request('search') }}">
          <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
        </form>
      </div>    
    </div>
  </nav>
</header>
<!-- Begin page content -->