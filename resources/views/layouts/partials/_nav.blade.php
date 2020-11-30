<nav class="navbar navbar-expand-lg static-top navbar-dark bg-dark">
    <a class="navbar-brand mr-auto mr-lg-0" href="#">{{ config('app.name') }}</a>
    <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="{{ set_active_route('root_path') }}">
          <a class="nav-link" href="{{ route('root_path') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="{{ set_active_route('about_path') }}">
          <a class="nav-link" href="{{ route('about_path')}}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Artisans</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="#">Laravel.com</a>
            <a class="dropdown-item" href="#">Laravel.io</a>
            <a class="dropdown-item" href="#">Laracasts</a>
            <a class="dropdown-item" href="#">Larajobs</a>
            <a class="dropdown-item" href="#">Laravel News</a>
            <a class="dropdown-item" href="#">Larachat</a>
          </div>
        </li>
        <li class="{{ set_active_route('contact_path') }}">
            <a class="nav-link" href="{{ route('contact_path') }}">Contact</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="#">Registre</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
        </li>
        </ul>
      </form>
    </div>
  </nav>