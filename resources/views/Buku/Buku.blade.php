<!DOCTYPE html>
<html lang="en">
<head>
    @include('Template.head')
</head>
</body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    @include('Template.navbar')
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    @include('Template.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Starter Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Data Buku</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <a href="#" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                {{-- <a href="#" class="btn btn-primary" data-toggle="model" data-target="#exampleModal">Import</a> --}}
            </div>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
            <tr>
                <h1>Ini Halaman data Buku</h1>
                
            </tr>    
        </div>
    </table>
</div>
</div>
        <!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content-wrapper -->
<!-- Main Footer -->
@include('Template.footer')
<body>
    
</body>
</html>