<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <form class="d-flex" role="search" style="margin-left: 100px">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 500px">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pages
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{url('/add_data')}}">Insert Page</a></li>
              <li><a class="dropdown-item" href="{{url('/view_data')}}">View Page</a></li>
            </ul>
          </li>

        </ul>
      </div>
    </div>
  </nav>
