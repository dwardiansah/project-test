<nav class="app-header navbar navbar-expand bg-body">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
            <i class="bi bi-list"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <!--begin::Fullscreen Toggle-->
        <li class="nav-item">
          <a class="nav-link" href="#" data-lte-toggle="fullscreen">
            <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
            <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
          </a>
        </li>
        <!--end::Fullscreen Toggle-->
        <!--begin::User Menu Dropdown-->
        <li class="nav-item dropdown user-menu">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
            <img
              src="{{ asset('adminlte/assets/img/user2-160x160.jpg') }}"
              class="user-image rounded-circle shadow"
              alt="User Image"
            />
            <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
            <li class="user-header text-bg-primary">
              <img
                src="{{ asset('adminlte/assets/img/user2-160x160.jpg') }}"
                class="rounded-circle shadow"
                alt="User Image"
              />
              <p>
                {{ Auth::user()->name }}
                <small>{{ Auth::user()->name }}</small>
              </p>
            </li>
            <li class="user-footer">
            <form method="POST" action="{{ route('logout') }}">
              <a href="#" class="btn btn-default btn-flat">Profile</a>
                @csrf
                <button type="submit" class="btn btn-default btn-flat float-end">Logout</button>
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>