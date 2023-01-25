<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }} d-flex justify-content-between" aria-current="page" href="/dashboard">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard <i class="bi bi-bar-chart-line"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }} d-flex justify-content-between" href="/dashboard/posts">
              <span data-feather="file" class="align-text-bottom"></span>
              My Posts <i class="bi bi-file-earmark-text"></i>
            </a>
          </li>
          <hr>
          <li class="nav-item">
            <a class="nav-link" href="/">
            </i>Back to Home
            </a>
          </li>
        </ul>
        
        @can('admin')
        <hr>
            <button class="dropdown-btn border-0 d-flex justify-content-between">Administrator<i class="bi bi-caret-down-fill"></i>
            </button>
            <div class="dropdown-container me-4">
              <div class="nav-item mb-2">
                <a href="/dashboard/categories" style="font-size: 15pxpx" class="nav-link d-flex justify-content-between">Manage Categories <i class="bi bi-database-gear"></i></a>
              </div>
              <div class="nav-item mb-2">
                <a href="/dashboard/posts/all" style="font-size: 15pxpx" class="nav-link d-flex justify-content-between">Manage Posts <i class="bi bi-book"></i></a>
              </div>
              <div class="nav-item mb-2">
                <a href="/dashboard/users" style="font-size: 15pxpx" class="nav-link d-flex justify-content-between">Manage Users <i class="bi bi-person-fill-gear"></i></a>
              </div>
            </div>
        @endcan
        
        </ul>
      </div>


      <script>
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;
    
            for (i = 0; i < dropdown.length; i++) {
                dropdown[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var dropdownContent = this.nextElementSibling;
                    if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                    }   
                    else {
                    dropdownContent.style.display = "block";
                    }
                });
            }
      </script>

    </nav>