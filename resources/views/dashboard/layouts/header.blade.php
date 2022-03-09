<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" style="background-color:#00FF00;">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 py-3" href="#">Liga CG</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark py-3" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
       <form action="/logout" method="post">
            @csrf
        <button type="submit" class="nav-link px-2 py-3 border-0" style="background-color:#00FF00; color : white"; href="#"><span data-feather="log-out" style="color : white"></span> Logout</button>
       </form>
    </div>
  </div>
</header>