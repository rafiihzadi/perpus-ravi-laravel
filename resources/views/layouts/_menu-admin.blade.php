<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="{{asset('lte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      
    </div>
  </div>

  

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
      <li class="nav-item menu-open">
        <a href="{{ url('/dashboard') }}" class="nav-link active">
          <i class="nav-icon fa fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ url('/buku') }}" class="nav-link">
          <i class="fa-solid fa-book"></i>
          <p>
            Data Buku
            <span class="right badge badge-danger"></span>
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ url('/penulis') }}" class="nav-link">
          <i class="fa fa-pencil-alt"></i>
          <p>
            Penulis
            <span class="right badge badge-danger"></span>
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ url('/penerbit') }}" class="nav-link">
          <i class="fa fa-building"></i>
          <p>
              Penerbit
            <span class="badge badge-info right"></span>
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{url('/kategori') }}" class="nav-link">
          <i class="ion ion-pie-graph"></i>
          <p>
            Kategori
          </p>
        </a>
      </li>
        
      <li class="nav-item">
        <a href="" class="nav-link">
          <i class="fa-solid fa-bookmark"></i>
          <p>
            Peminjam
          </p>
        </a>
      </li>
        

      <li class="nav-header">SISTEM</li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="fa-solid fa-users"></i>
          <p>
            User
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fa-solid fa-list"></i>
              <p>Semua</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fa-regular fa-keyboard"></i>
              <p>Admin</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fa-solid fa-user"></i>  
              <p>Anggota</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="pages/kanban.html" class="nav-link">
          <i class="fa-solid fa-lock"></i>
          <p>
            Ganti Password
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route ('logout')}}" class="nav-link">
          <i class="fa-solid fa-lock"></i>
          <p>
            Logout
          </p>
        </a>
      </li>
  </nav>
</div>